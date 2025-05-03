<?php
define('IN_PHPBB', true);
$phpbb_root_path = './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);

// Include necessary phpBB files
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_admin.' . $phpEx);
include($phpbb_root_path . 'includes/acp/acp_styles.' . $phpEx);

// Start session and auth
$user->session_begin();
$auth->acl($user->data);
$user->setup('acp/styles');

// WARNING: Bypassing admin check for installation script. Use only in secure environment.
// Commenting out admin check for script execution.
// if (!$auth->acl_get('a_'))
// {
//     die('You must be an administrator to run this script.');
// }

class acp_styles_public extends acp_styles
{
    public function __construct()
    {
        global $db, $config, $cache;

        $this->db = $db;
        $this->config = $config;
        $this->cache = $cache;
    }

    public function findAvailableStyles($all = false)
    {
        return $this->find_available($all);
    }

    public function installStylePublic($style)
    {
        return $this->install_style($style);
    }

    public function activateStyle($style_id)
    {
        $sql = 'UPDATE ' . STYLES_TABLE . '
                SET style_active = 1
                WHERE style_id = ' . (int) $style_id;
        $this->db->sql_query($sql);
    }

    public function setDefaultStyle($style_id)
    {
        $this->config->set('default_style', (int) $style_id);
    }

    public function clearCache()
    {
        $this->cache->purge();
    }
}

$acp_styles = new acp_styles_public();
$acp_styles->main(0, 'install');

$available_styles = $acp_styles->findAvailableStyles(false);

$style_to_install = null;
foreach ($available_styles as $style)
{
    if ($style['style_path'] === 'we_universal')
    {
        $style_to_install = $style;
        break;
    }
}

if (!$style_to_install)
{
    die('Style "we_universal" not found or already installed.');
}

$style_id = $acp_styles->installStylePublic($style_to_install);

if (!$style_id)
{
    die('Failed to install style "we_universal".');
}

$acp_styles->activateStyle($style_id);
$acp_styles->setDefaultStyle($style_id);
$acp_styles->clearCache();

echo 'Style "we_universal" installed, activated, and set as default successfully.';
?>
