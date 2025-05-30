<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
*/

/**
* @ignore
*/
define('IN_PHPBB', true);
$vercel_tmp_cache_base = '/tmp/phpbb_cache'; 

if (!is_dir($vercel_tmp_cache_base)) {
    if (!mkdir($vercel_tmp_cache_base, 0777, true)) {
       
        error_log("Failed to create Vercel cache directory: " . $vercel_tmp_cache_base);
        die("Critical Error: Could not create cache directory. Ensure /tmp is writable and path is valid.");
    }
}

if (!is_writable($vercel_tmp_cache_base)) {
    error_log("Vercel cache directory is not writable: " . $vercel_tmp_cache_base);
    die("Critical Error: Cache directory is not writable. Check /tmp permissions or path.");
}

if (!defined('PHPBB_CACHE_PATH')) {
    define('PHPBB_CACHE_PATH', $vercel_tmp_cache_base . '/');
}

$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : dirname(__DIR__) . '/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);

include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('viewforum');

// Mark notifications read
if (($mark_notification = $request->variable('mark_notification', 0)))
{
	if ($user->data['user_id'] == ANONYMOUS)
	{
		if ($request->is_ajax())
		{
			trigger_error('LOGIN_REQUIRED');
		}
		login_box('', $user->lang['LOGIN_REQUIRED']);
	}

	if (check_link_hash($request->variable('hash', ''), 'mark_notification_read'))
	{
		/* @var $phpbb_notifications \phpbb\notification\manager */
		$phpbb_notifications = $phpbb_container->get('notification_manager');

		$notification = $phpbb_notifications->load_notifications('notification.method.board', array(
			'notification_id'	=> $mark_notification,
		));

		if (isset($notification['notifications'][$mark_notification]))
		{
			$notification = $notification['notifications'][$mark_notification];

			$notification->mark_read();

			/**
			* You can use this event to perform additional tasks or redirect user elsewhere.
			*
			* @event core.index_mark_notification_after
			* @var	int										mark_notification	Notification ID
			* @var	\phpbb\notification\type\type_interface	notification		Notification instance
			* @since 3.2.6-RC1
			*/
			$vars = array('mark_notification', 'notification');
			extract($phpbb_dispatcher->trigger_event('core.index_mark_notification_after', compact($vars)));

			if ($request->is_ajax())
			{
				$json_response = new \phpbb\json_response();
				$json_response->send(array(
					'success'	=> true,
				));
			}

			if (($redirect = $request->variable('redirect', '')))
			{
				redirect(append_sid($phpbb_root_path . $redirect));
			}

			redirect($notification->get_redirect_url());
		}
	}
}

display_forums('', $config['load_moderators']);

$order_legend = ($config['legend_sort_groupname']) ? 'group_name' : 'group_legend';
// Grab group details for legend display
if ($auth->acl_gets('a_group', 'a_groupadd', 'a_groupdel'))
{
	$sql = 'SELECT group_id, group_name, group_colour, group_type, group_legend
		FROM ' . GROUPS_TABLE . '
		WHERE group_legend > 0
		ORDER BY ' . $order_legend . ' ASC';
}
else
{
	$sql = 'SELECT g.group_id, g.group_name, g.group_colour, g.group_type, g.group_legend
		FROM ' . GROUPS_TABLE . ' g
		LEFT JOIN ' . USER_GROUP_TABLE . ' ug
			ON (
				g.group_id = ug.group_id
				AND ug.user_id = ' . $user->data['user_id'] . '
				AND ug.user_pending = 0
			)
		WHERE g.group_legend > 0
			AND (g.group_type <> ' . GROUP_HIDDEN . ' OR ug.user_id = ' . $user->data['user_id'] . ')
		ORDER BY g.' . $order_legend . ' ASC';
}
$result = $db->sql_query($sql);

/** @var \phpbb\group\helper $group_helper */
$group_helper = $phpbb_container->get('group_helper');

$legend = array();
while ($row = $db->sql_fetchrow($result))
{
	$colour_text = ($row['group_colour']) ? ' style="color:#' . $row['group_colour'] . '"' : '';
	$group_name = $group_helper->get_name($row['group_name']);

	if ($row['group_name'] == 'BOTS' || ($user->data['user_id'] != ANONYMOUS && !$auth->acl_get('u_viewprofile')))
	{
		$legend[] = '<span' . $colour_text . '>' . $group_name . '</span>';
	}
	else
	{
		$legend[] = '<a' . $colour_text . ' href="' . append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=group&amp;g=' . $row['group_id']) . '">' . $group_name . '</a>';
	}
}
$db->sql_freeresult($result);

$legend = implode($user->lang['COMMA_SEPARATOR'], $legend);

// Generate birthday list if required ...
$show_birthdays = ($config['load_birthdays'] && $config['allow_birthdays'] && $auth->acl_gets('u_viewprofile', 'a_user', 'a_useradd', 'a_userdel'));

$birthdays = $birthday_list = array();
if ($show_birthdays)
{
	$time = $user->create_datetime();
	$now = phpbb_gmgetdate($time->getTimestamp() + $time->getOffset());

	// Display birthdays of 29th february on 28th february in non-leap-years
	$leap_year_birthdays = '';
	if ($now['mday'] == 28 && $now['mon'] == 2 && !$time->format('L'))
	{
		$leap_year_birthdays = " OR u.user_birthday LIKE '" . $db->sql_escape(sprintf('%2d-%2d-', 29, 2)) . "%'";
	}

	$sql_ary = array(
		'SELECT' => 'u.user_id, u.username, u.user_colour, u.user_birthday',
		'FROM' => array(
			USERS_TABLE => 'u',
		),
		'LEFT_JOIN' => array(
			array(
				'FROM' => array(BANLIST_TABLE => 'b'),
				'ON' => 'u.user_id = b.ban_userid',
			),
		),
		'WHERE' => "(b.ban_id IS NULL OR b.ban_exclude = 1)
			AND (u.user_birthday LIKE '" . $db->sql_escape(sprintf('%2d-%2d-', $now['mday'], $now['mon'])) . "%' $leap_year_birthdays)
			AND u.user_type IN (" . USER_NORMAL . ', ' . USER_FOUNDER . ')',
	);

	/**
	* Event to modify the SQL query to get birthdays data
	*
	* @event core.index_modify_birthdays_sql
	* @var	array	now			The assoc array with the 'now' local timestamp data
	* @var	array	sql_ary		The SQL array to get the birthdays data
	* @var	object	time		The user related Datetime object
	* @since 3.1.7-RC1
	*/
	$vars = array('now', 'sql_ary', 'time');
	extract($phpbb_dispatcher->trigger_event('core.index_modify_birthdays_sql', compact($vars)));

	$sql = $db->sql_build_query('SELECT', $sql_ary);
	$result = $db->sql_query($sql);
	$rows = $db->sql_fetchrowset($result);
	$db->sql_freeresult($result);

	foreach ($rows as $row)
	{
		$birthday_username	= get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']);
		$birthday_year		= (int) substr($row['user_birthday'], -4);
		$birthday_age		= ($birthday_year) ? max(0, $now['year'] - $birthday_year) : '';

		$birthdays[] = array(
			'USERNAME'	=> $birthday_username,
			'AGE'		=> $birthday_age,
		);

		// For 3.0 compatibility
		$birthday_list[] = $birthday_username . (($birthday_age) ? " ({$birthday_age})" : '');
	}

	/**
	* Event to modify the birthdays list
	*
	* @event core.index_modify_birthdays_list
	* @var	array	birthdays		Array with the users birthdays data
	* @var	array	rows			Array with the birthdays SQL query result
	* @since 3.1.7-RC1
	*/
	$vars = array('birthdays', 'rows');
	extract($phpbb_dispatcher->trigger_event('core.index_modify_birthdays_list', compact($vars)));

	$template->assign_block_vars_array('birthdays', $birthdays);
}

$controller_helper = $phpbb_container->get('controller.helper');
// Assign index specific vars
$template->assign_vars(array(
	'TOTAL_POSTS'	=> $user->lang('TOTAL_POSTS_COUNT', (int) $config['num_posts']),
	'TOTAL_TOPICS'	=> $user->lang('TOTAL_TOPICS', (int) $config['num_topics']),
	'TOTAL_USERS'	=> $user->lang('TOTAL_USERS', (int) $config['num_users']),
	'NEWEST_USER'	=> $user->lang('NEWEST_USER', get_username_string('full', $config['newest_user_id'], $config['newest_username'], $config['newest_user_colour'])),

	'LEGEND'		=> $legend,
	'BIRTHDAY_LIST'	=> (empty($birthday_list)) ? '' : implode($user->lang['COMMA_SEPARATOR'], $birthday_list),

	'S_LOGIN_ACTION'			=> append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=login'),
	'U_SEND_PASSWORD'           => ($config['email_enable'] && $config['allow_password_reset']) ? $controller_helper->route('phpbb_ucp_forgot_password_controller') : '',
	'S_DISPLAY_BIRTHDAY_LIST'	=> $show_birthdays,
	'S_INDEX'					=> true,

	'U_CANONICAL'		=> generate_board_url() . '/',
	'U_MARK_FORUMS'		=> ($user->data['is_registered'] || $config['load_anon_lastread']) ? append_sid("{$phpbb_root_path}index.$phpEx", 'hash=' . generate_link_hash('global') . '&amp;mark=forums&amp;mark_time=' . time()) : '',
	'U_MCP'				=> ($auth->acl_get('m_') || $auth->acl_getf_global('m_')) ? append_sid("{$phpbb_root_path}mcp.$phpEx", 'i=main&amp;mode=front', true, $user->session_id) : '')
);

$page_title = ($config['board_index_text'] !== '') ? $config['board_index_text'] : $user->lang['INDEX'];

/**
* You can use this event to modify the page title and load data for the index
*
* @event core.index_modify_page_title
* @var	string	page_title		Title of the index page
* @since 3.1.0-a1
*/
$vars = array('page_title');
extract($phpbb_dispatcher->trigger_event('core.index_modify_page_title', compact($vars)));

// Output page
page_header($page_title, true);

$template->set_filenames(array(
	'body' => 'index_body.html')
);

page_footer();
