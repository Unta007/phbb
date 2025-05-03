<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* overall_header.html */
class __TwigTemplate_18902820d5c2d61b9a50021d73f58052 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\" lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
<head>
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 7
        echo ($context["META"] ?? null);
        echo "
<title>";
        // line 8
        if (($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null)) {
            echo "(";
            echo ($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null);
            echo ") ";
        }
        if (( !($context["S_VIEWTOPIC"] ?? null) &&  !($context["S_VIEWFORUM"] ?? null))) {
            echo ($context["SITENAME"] ?? null);
            echo " - ";
        }
        if (($context["S_IN_MCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo " - ";
        } elseif (($context["S_IN_UCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("UCP");
            echo " - ";
        }
        echo ($context["PAGE_TITLE"] ?? null);
        if ((($context["S_VIEWTOPIC"] ?? null) || ($context["S_VIEWFORUM"] ?? null))) {
            echo " - ";
            echo ($context["SITENAME"] ?? null);
        }
        echo "</title>

";
        // line 10
        if (($context["S_ENABLE_FEEDS"] ?? null)) {
            // line 11
            echo "\t";
            if (($context["S_ENABLE_FEEDS_OVERALL"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo ($context["SITENAME"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_index");
                echo "\">";
            }
            // line 12
            echo "\t";
            if (($context["S_ENABLE_FEEDS_NEWS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_NEWS");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_news");
                echo "\">";
            }
            // line 13
            echo "\t";
            if (($context["S_ENABLE_FEEDS_FORUMS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_forums");
                echo "\">";
            }
            // line 14
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topics");
                echo "\">";
            }
            // line 15
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topics_active");
                echo "\">";
            }
            // line 16
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_FORUM"] ?? null) && ($context["S_FORUM_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                echo " - ";
                echo ($context["FORUM_NAME"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_forum", ["forum_id" => ($context["S_FORUM_ID"] ?? null)]);
                echo "\">";
            }
            // line 17
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_TOPIC"] ?? null) && ($context["S_TOPIC_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
                echo " - ";
                echo ($context["TOPIC_TITLE"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topic", ["topic_id" => ($context["S_TOPIC_ID"] ?? null)]);
                echo "\">";
            }
            // line 18
            echo "\t";
        }
        // line 20
        echo "
";
        // line 21
        if (($context["U_CANONICAL"] ?? null)) {
            // line 22
            echo "\t<link rel=\"canonical\" href=\"";
            echo ($context["U_CANONICAL"] ?? null);
            echo "\">
";
        }
        // line 24
        echo "
<!--
\tphpBB style name: we_universal
\tBased on style:   prosilver (this is the default phpBB3 style)
\tOriginal author:  Tom Beddard ( http://www.subBlue.com/ )
\tModified by:      nextgen ( https://nextgen.gt/ )
-->

";
        // line 32
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 33
            echo "<script>
\tWebFontConfig = {
\t\tgoogle: {
\t\t\tfamilies: ['Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese']
\t\t}
\t};

\t(function(d) {
\t\tvar wf = d.createElement('script'), s = d.scripts[0];
\t\twf.src = 'https://cdn.jsdelivr.net/npm/webfontloader@1.6.28/webfontloader.min.js';
\t\twf.async = true;
\t\ts.parentNode.insertBefore(wf, s);
\t})(document);
</script>
";
        }
        // line 48
        echo "<script>if (localStorage.universaldarkhole) document.documentElement.setAttribute(\"data-theme\", localStorage.universaldarkhole);</script>

<link href=\"";
        // line 50
        echo ($context["ROOT_PATH"] ?? null);
        echo "styles/prosilver/theme/stylesheet.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 51
        echo ($context["T_FONT_AWESOME_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 52
        echo ($context["T_STYLESHEET_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 53
        echo ($context["ROOT_PATH"] ?? null);
        echo "styles/prosilver/theme/responsive.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 54
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/responsive.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">

";
        // line 56
        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
            // line 57
            echo "\t<link href=\"";
            echo ($context["ROOT_PATH"] ?? null);
            echo "styles/prosilver/theme/bidi.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 59
        echo "
";
        // line 60
        if (($context["S_PLUPLOAD"] ?? null)) {
            // line 61
            echo "\t<link href=\"";
            echo ($context["ROOT_PATH"] ?? null);
            echo "styles/prosilver/theme/plupload.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 63
        echo "
";
        // line 64
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 65
            echo "\t<link href=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 67
        echo "
<!--[if lte IE 9]>
\t<link href=\"";
        // line 69
        echo ($context["ROOT_PATH"] ?? null);
        echo "styles/prosilver/theme/tweaks.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<![endif]-->

";
        // line 72
        // line 73
        echo "
";
        // line 74
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "STYLESHEETS", [], "any", false, false, false, 74);
        echo "

";
        // line 76
        // line 77
        echo "
</head>
<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 79
        echo ($context["SCRIPT_NAME"] ?? null);
        echo " ";
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            echo " logged-in";
        } else {
            echo " logged-out";
        }
        echo "\">

";
        // line 81
        // line 82
        echo "
<div id=\"wrap\" class=\"wrap\">
\t<a id=\"top\" class=\"top-anchor\" accesskey=\"t\"></a>

\t<div class=\"inventea-headerbar\">
\t\t<nav class=\"inventea-wrapper inventea-userbar\">
\t
\t\t\t";
        // line 89
        $location = "navbar_responsive_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_responsive_header.html", "overall_header.html", 89)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 90
        echo "
\t\t\t<ul class=\"linklist bulletin inventea-user-menu\" role=\"menubar\">
\t\t\t\t";
        // line 92
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 93
            echo "\t\t\t\t\t";
            // line 94
            echo "\t\t\t\t\t<li id=\"username_logged_in\" class=\"rightside ";
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo " no-bulletin";
            }
            echo "\" data-skip-responsive=\"true\">
\t\t\t\t\t\t";
            // line 95
            // line 96
            echo "\t\t\t\t\t\t<div class=\"header-profile dropdown-container\">
\t\t\t\t\t\t\t<a href=\"";
            // line 97
            echo ($context["U_PROFILE"] ?? null);
            echo "\" class=\"header-avatar dropdown-trigger\">";
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo ($context["CURRENT_USER_AVATAR"] ?? null);
            } else {
                echo "<img src=\"";
                echo ($context["T_THEME_PATH"] ?? null);
                echo "/images/no_avatar.gif\" alt=\"\" />";
            }
            echo " ";
            echo ($context["CURRENT_USERNAME_SIMPLE"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t\t";
            // line 101
            if (($context["U_RESTORE_PERMISSIONS"] ?? null)) {
                // line 102
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 103
                echo ($context["U_RESTORE_PERMISSIONS"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-refresh fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 104
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESTORE_PERMISSIONS");
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 108
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 109
            // line 110
            echo "
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 112
            echo ($context["U_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-sliders fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 113
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            // line 116
            if (($context["U_USER_PROFILE"] ?? null)) {
                // line 117
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 118
                echo ($context["U_USER_PROFILE"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-user fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 119
                echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 123
            echo "\t\t\t\t\t\t\t\t\t";
            // line 124
            echo "
\t\t\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 127
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-power-off fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 128
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 135
            // line 136
            echo "\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t";
            // line 139
            if (($context["S_DISPLAY_PM"] ?? null)) {
                // line 140
                echo "\t\t\t\t\t\t<li class=\"small-icon rightside\" data-skip-responsive=\"true\">
\t\t\t\t\t\t\t<a href=\"";
                // line 141
                echo ($context["U_PRIVATEMSGS"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-inbox fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 142
                echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVATE_MESSAGES");
                echo " </span><strong class=\"badge";
                if ( !($context["PRIVATE_MESSAGE_COUNT"] ?? null)) {
                    echo " hidden";
                }
                echo "\">";
                echo ($context["PRIVATE_MESSAGE_COUNT"] ?? null);
                echo "</strong>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>\t
\t\t\t\t\t";
            }
            // line 146
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 147
            if (($context["S_NOTIFICATIONS_DISPLAY"] ?? null)) {
                // line 148
                echo "\t\t\t\t\t\t<li class=\"small-icon dropdown-container dropdown-";
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo " rightside\" data-last-responsive=\"true\">
\t\t\t\t\t\t\t<a href=\"";
                // line 149
                echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
                echo "\" id=\"notification_list_button\" class=\"dropdown-trigger\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-bell fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 150
                echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFICATIONS");
                echo " </span><strong class=\"badge";
                if ( !($context["NOTIFICATIONS_COUNT"] ?? null)) {
                    echo " hidden";
                }
                echo "\">";
                echo ($context["NOTIFICATIONS_COUNT"] ?? null);
                echo "</strong>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                // line 152
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "overall_header.html", 152)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 153
                echo "\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 155
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 156
            // line 157
            echo "\t\t\t\t";
        } elseif ( !($context["S_IS_BOT"] ?? null)) {
            // line 158
            echo "\t\t\t\t\t\t<li class=\"small-icon rightside\" data-skip-responsive=\"true\"><a href=\"";
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\"><i class=\"icon fa-fw fa-sign-in\" aria-hidden=\"true\"></i>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t";
            // line 159
            if ((($context["S_REGISTER_ENABLED"] ?? null) &&  !(($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null)))) {
                // line 160
                echo "\t\t\t\t\t\t<li class=\"small-icon rightside\" data-skip-responsive=\"true\"><a href=\"";
                echo ($context["U_REGISTER"] ?? null);
                echo "\" role=\"menuitem\"><i class=\"icon fa-fw fa-user-plus\" aria-hidden=\"true\"></i>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
                echo "</a></li>
\t\t\t\t\t";
            }
            // line 162
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 163
            // line 164
            echo "\t\t\t\t";
        }
        // line 165
        echo "\t\t\t\t<li class=\"small-icon rightside\" data-skip-responsive=\"true\"><a href=\"#\" id=\"switch-theme\" class=\"switch-theme\"><i class=\"icon fa-fw\"></i></a></li>
\t\t\t</ul>
\t\t</nav>
\t</div>

\t<header class=\"inventea-header\">
\t\t";
        // line 171
        echo "\t
\t\t<div class=\"inventea-dashboard\" role=\"banner\">
\t\t\t";
        // line 173
        // line 174
        echo "\t\t\t";
        $location = "navbar_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_header.html", "overall_header.html", 174)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 175
        echo "
\t\t\t<div class=\"inventea-sitename\">
\t\t\t\t<h1><a href=\"";
        // line 177
        if (($context["U_SITE_HOME"] ?? null)) {
            echo ($context["U_SITE_HOME"] ?? null);
        } else {
            echo ($context["U_INDEX"] ?? null);
        }
        echo "\" title=\"";
        if (($context["U_SITE_HOME"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("SITE_HOME");
        } else {
            echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
        }
        echo "\">";
        echo ($context["SITENAME"] ?? null);
        echo "</a></h1>
\t\t\t\t<span>";
        // line 178
        echo ($context["SITE_DESCRIPTION"] ?? null);
        echo "</span>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 181
        // line 182
        echo "\t</header>
\t<div class=\"inventea-wrapper inventea-content\" role=\"main\">
\t\t";
        // line 184
        // line 185
        echo "
\t\t<ul id=\"nav-breadcrumbs\" class=\"linklist navlinks\" role=\"menubar\">
\t\t";
        // line 187
        if (($context["S_INDEX"] ?? null)) {
            // line 188
            echo "\t\t\t<li class=\"rightside inventea-time\">";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                echo ($context["LAST_VISIT_DATE"] ?? null);
            } else {
                echo ($context["CURRENT_TIME"] ?? null);
            }
            echo "</li>
\t\t";
        }
        // line 189
        echo "\t\t
\t\t";
        // line 190
        $context["MICRODATA"] = "itemtype=\"https://schema.org/ListItem\" itemprop=\"itemListElement\" itemscope";
        // line 191
        echo "\t\t";
        $context["navlink_position"] = 1;
        // line 192
        echo "
\t\t";
        // line 193
        // line 194
        echo "
\t\t<li class=\"breadcrumbs\" itemscope itemtype=\"https://schema.org/BreadcrumbList\">

\t\t\t";
        // line 197
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 198
            echo "\t\t\t\t<span class=\"crumb\" ";
            echo ($context["MICRODATA"] ?? null);
            echo "><a itemprop=\"item\" href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\"><i class=\"icon fa-home fa-fw\" aria-hidden=\"true\"></i><span itemprop=\"name\">";
            echo ($context["L_SITE_HOME"] ?? null);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></span>
\t\t\t";
        }
        // line 200
        echo "
\t\t\t";
        // line 201
        // line 202
        echo "\t\t\t\t<span class=\"crumb\" ";
        echo ($context["MICRODATA"] ?? null);
        echo "><a itemprop=\"item\" href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" accesskey=\"h\" data-navbar-reference=\"index\">";
        if ( !($context["U_SITE_HOME"] ?? null)) {
            echo "<i class=\"icon fa-home fa-fw\"></i>";
        }
        echo "<span itemprop=\"name\">";
        echo ($context["L_INDEX"] ?? null);
        echo "</span></a><meta itemprop=\"position\" content=\"";
        echo ($context["navlink_position"] ?? null);
        $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
        echo "\" /></span>

\t\t\t";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navlinks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["navlink"]) {
            // line 205
            echo "\t\t\t\t";
            $context["NAVLINK_NAME"] = ((twig_get_attribute($this->env, $this->source, $context["navlink"], "BREADCRUMB_NAME", [], "any", true, true, false, 205)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlink"], "BREADCRUMB_NAME", [], "any", false, false, false, 205), twig_get_attribute($this->env, $this->source, $context["navlink"], "FORUM_NAME", [], "any", false, false, false, 205))) : (twig_get_attribute($this->env, $this->source, $context["navlink"], "FORUM_NAME", [], "any", false, false, false, 205)));
            // line 206
            echo "\t\t\t\t";
            $context["NAVLINK_LINK"] = ((twig_get_attribute($this->env, $this->source, $context["navlink"], "U_BREADCRUMB", [], "any", true, true, false, 206)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlink"], "U_BREADCRUMB", [], "any", false, false, false, 206), twig_get_attribute($this->env, $this->source, $context["navlink"], "U_VIEW_FORUM", [], "any", false, false, false, 206))) : (twig_get_attribute($this->env, $this->source, $context["navlink"], "U_VIEW_FORUM", [], "any", false, false, false, 206)));
            // line 207
            echo "
\t\t\t\t";
            // line 208
            // line 209
            echo "\t\t\t\t<span class=\"crumb\" ";
            echo ($context["MICRODATA"] ?? null);
            if (twig_get_attribute($this->env, $this->source, $context["navlink"], "MICRODATA", [], "any", false, false, false, 209)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["navlink"], "MICRODATA", [], "any", false, false, false, 209);
            }
            echo "><a itemprop=\"item\" href=\"";
            echo ($context["NAVLINK_LINK"] ?? null);
            echo "\"><span itemprop=\"name\">";
            echo ($context["NAVLINK_NAME"] ?? null);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></span>
\t\t\t\t";
            // line 210
            // line 211
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlink'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "
\t\t\t";
        // line 213
        // line 214
        echo "\t\t</li>
\t\t";
        // line 215
        // line 216
        echo "\t\t</ul>

\t\t";
        // line 218
        if (((($context["S_BOARD_DISABLED"] ?? null) && ($context["S_USER_LOGGED_IN"] ?? null)) && (($context["U_MCP"] ?? null) || ($context["U_ACP"] ?? null)))) {
            // line 219
            echo "\t\t\t<div id=\"information\" class=\"rules\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<strong>";
            // line 221
            echo $this->extensions['phpbb\template\twig\extension']->lang("INFORMATION");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_DISABLED");
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 225
        echo "
\t\t";
        // line 226
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  744 => 226,  741 => 225,  731 => 221,  727 => 219,  725 => 218,  721 => 216,  720 => 215,  717 => 214,  716 => 213,  713 => 212,  707 => 211,  706 => 210,  690 => 209,  689 => 208,  686 => 207,  683 => 206,  680 => 205,  676 => 204,  659 => 202,  658 => 201,  655 => 200,  642 => 198,  640 => 197,  635 => 194,  634 => 193,  631 => 192,  628 => 191,  626 => 190,  623 => 189,  613 => 188,  611 => 187,  607 => 185,  606 => 184,  602 => 182,  601 => 181,  595 => 178,  579 => 177,  575 => 175,  562 => 174,  561 => 173,  557 => 171,  549 => 165,  546 => 164,  545 => 163,  542 => 162,  534 => 160,  532 => 159,  523 => 158,  520 => 157,  519 => 156,  516 => 155,  512 => 153,  500 => 152,  489 => 150,  485 => 149,  480 => 148,  478 => 147,  475 => 146,  462 => 142,  458 => 141,  455 => 140,  453 => 139,  448 => 136,  447 => 135,  437 => 128,  431 => 127,  426 => 124,  424 => 123,  417 => 119,  411 => 118,  408 => 117,  406 => 116,  400 => 113,  394 => 112,  390 => 110,  389 => 109,  386 => 108,  379 => 104,  375 => 103,  372 => 102,  370 => 101,  353 => 97,  350 => 96,  349 => 95,  342 => 94,  340 => 93,  338 => 92,  334 => 90,  322 => 89,  313 => 82,  312 => 81,  298 => 79,  294 => 77,  293 => 76,  288 => 74,  285 => 73,  284 => 72,  276 => 69,  272 => 67,  264 => 65,  262 => 64,  259 => 63,  251 => 61,  249 => 60,  246 => 59,  238 => 57,  236 => 56,  229 => 54,  223 => 53,  219 => 52,  215 => 51,  209 => 50,  205 => 48,  188 => 33,  186 => 32,  176 => 24,  170 => 22,  168 => 21,  165 => 20,  162 => 18,  149 => 17,  136 => 16,  125 => 15,  114 => 14,  103 => 13,  92 => 12,  81 => 11,  79 => 10,  54 => 8,  50 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overall_header.html", "");
    }
}
