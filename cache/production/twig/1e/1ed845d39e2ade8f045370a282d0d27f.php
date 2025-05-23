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

/* search_results.html */
class __TwigTemplate_7a5cb8686fe6c089a3527c5822ec959a extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "search_results.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "
<h2 class=\"searchresults-title\">";
        // line 5
        if (($context["SEARCH_TITLE"] ?? null)) {
            echo ($context["SEARCH_TITLE"] ?? null);
        } else {
            echo ($context["SEARCH_MATCHES"] ?? null);
        }
        if (($context["SEARCH_WORDS"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <a href=\"";
            echo ($context["U_SEARCH_WORDS"] ?? null);
            echo "\">";
            echo ($context["SEARCH_WORDS"] ?? null);
            echo "</a>";
        }
        echo "</h2>
";
        // line 6
        if (($context["SEARCHED_QUERY"] ?? null)) {
            echo " <p>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCHED_QUERY");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <strong>";
            echo ($context["SEARCHED_QUERY"] ?? null);
            echo "</strong></p>";
        }
        // line 7
        if (($context["IGNORED_WORDS"] ?? null)) {
            echo " <p>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("IGNORED_TERMS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <strong>";
            echo ($context["IGNORED_WORDS"] ?? null);
            echo "</strong></p>";
        }
        // line 8
        if (($context["PHRASE_SEARCH_DISABLED"] ?? null)) {
            echo " <p><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PHRASE_SEARCH_DISABLED");
            echo "</strong></p>";
        }
        // line 9
        echo "
";
        // line 10
        if (($context["SEARCH_TOPIC"] ?? null)) {
            // line 11
            echo "\t<p class=\"return-link\">
\t\t<a class=\"arrow-";
            // line 12
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" href=\"";
            echo ($context["U_SEARCH_TOPIC"] ?? null);
            echo "\">
\t\t\t<i class=\"icon fa-angle-";
            // line 13
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RETURN_TO_TOPIC");
            echo "</span>
\t\t</a>
\t</p>
";
        } else {
            // line 17
            echo "\t<p class=\"advanced-search-link\">
\t\t<a class=\"arrow-";
            // line 18
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" href=\"";
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
            echo "\">
\t\t\t<i class=\"icon fa-angle-";
            // line 19
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("GO_TO_SEARCH_ADV");
            echo "</span>
\t\t</a>
\t</p>
";
        }
        // line 23
        echo "
";
        // line 24
        // line 25
        echo "
";
        // line 26
        if ((((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 26)) || ($context["SEARCH_MATCHES"] ?? null)) || ($context["TOTAL_MATCHES"] ?? null)) || ($context["PAGE_NUMBER"] ?? null))) {
            // line 27
            echo "\t<div class=\"action-bar bar-top\">

\t";
            // line 29
            if ((($context["TOTAL_MATCHES"] ?? null) > 0)) {
                // line 30
                echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"post\" action=\"";
                // line 31
                echo ($context["S_SEARCH_ACTION"] ?? null);
                echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\" type=\"search\" name=\"add_keywords\" id=\"add_keywords\" value=\"\" placeholder=\"";
                // line 33
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_IN_RESULTS");
                echo "\" />
\t\t\t\t<button class=\"button button-search\" type=\"submit\" title=\"";
                // line 34
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
                echo "\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 35
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
                echo "</span>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
                // line 37
                echo ($context["U_SEARCH"] ?? null);
                echo "\" class=\"button button-search-end\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
                echo "\">
\t\t\t\t\t<i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 38
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
                echo "</span>
\t\t\t\t</a>
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
            }
            // line 44
            echo "
\t\t";
            // line 45
            // line 46
            echo "
\t\t<div class=\"pagination\">
\t\t\t";
            // line 48
            if (($context["U_MARK_ALL_READ"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_MARK_ALL_READ"] ?? null);
                echo "\" class=\"mark-read\" accesskey=\"m\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL_READ");
                echo "</a> &bull;";
            }
            // line 49
            echo "\t\t\t";
            echo ($context["SEARCH_MATCHES"] ?? null);
            echo "
\t\t\t";
            // line 50
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 50))) {
                // line 51
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "search_results.html", 51)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 52
                echo "\t\t\t";
            } else {
                // line 53
                echo "\t\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 55
            echo "\t\t</div>
\t</div>
";
        }
        // line 58
        echo "
";
        // line 59
        if (($context["S_SHOW_TOPICS"] ?? null)) {
            // line 60
            echo "
\t";
            // line 61
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "searchresults", [], "any", false, false, false, 61))) {
                // line 62
                echo "\t<div class=\"forumbg\">

\t\t<div class=\"inner\">
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"row-item\">
\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 68
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
                // line 69
                echo $this->extensions['phpbb\template\twig\extension']->lang("STATISTICS");
                echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 70
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t\t";
                // line 71
                // line 72
                echo "\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist topics\">

\t\t";
                // line 77
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "searchresults", [], "any", false, false, false, 77));
                foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                    // line 78
                    echo "\t\t\t";
                    // line 79
                    echo "\t\t\t<li class=\"row";
                    if ((twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_ROW_COUNT", [], "any", false, false, false, 79) % 2 == 0)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl title=\"";
                    // line 80
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_FOLDER_IMG_ALT", [], "any", false, false, false, 80);
                    echo "\">
\t\t\t\t\t<dt class=\"icon ";
                    // line 81
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_IMG_STYLE", [], "any", false, false, false, 81);
                    echo "\">";
                    if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_ICON_IMG", [], "any", false, false, false, 81)) {
                        echo "<img src=\"";
                        echo ($context["T_ICONS_PATH"] ?? null);
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_ICON_IMG", [], "any", false, false, false, 81);
                        echo "\" alt=\"\" title=\"\" />";
                    }
                    echo "</dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t";
                    // line 83
                    if ((twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_UNREAD_TOPIC", [], "any", false, false, false, 83) &&  !($context["S_IS_BOT"] ?? null))) {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_NEWEST_POST", [], "any", false, false, false, 83);
                        echo "\" class=\"row-item-link\"></a>";
                    }
                    // line 84
                    echo "\t\t\t\t\t\t<div class=\"list-inner\">

\t\t\t\t\t\t\t";
                    // line 86
                    // line 87
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_UNREAD_TOPIC", [], "any", false, false, false, 87) &&  !($context["S_IS_BOT"] ?? null))) {
                        // line 88
                        echo "\t\t\t\t\t\t\t\t<a class=\"unread\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_NEWEST_POST", [], "any", false, false, false, 88);
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file fa-fw icon-red icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 89
                        echo $this->extensions['phpbb\template\twig\extension']->lang("NEW_POST");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 92
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_TOPIC", [], "any", false, false, false, 92);
                    echo "\" class=\"topictitle\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_TITLE", [], "any", false, false, false, 92);
                    echo "</a>
\t\t\t\t\t\t\t";
                    // line 93
                    if ((twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_TOPIC_UNAPPROVED", [], "any", false, false, false, 93) || twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_POSTS_UNAPPROVED", [], "any", false, false, false, 93))) {
                        // line 94
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_MCP_QUEUE", [], "any", false, false, false, 94);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_UNAPPROVED");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 95
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_UNAPPROVED");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 98
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_TOPIC_DELETED", [], "any", false, false, false, 98)) {
                        // line 99
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_MCP_QUEUE", [], "any", false, false, false, 99);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_DELETED");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-recycle fa-fw icon-green\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 100
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_DELETED");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 103
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_TOPIC_REPORTED", [], "any", false, false, false, 103)) {
                        // line 104
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_MCP_REPORT", [], "any", false, false, false, 104);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_REPORTED");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 105
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_REPORTED");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 108
                    echo "\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 110
                    // line 111
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 112
                    if ( !($context["S_IS_BOT"] ?? null)) {
                        // line 113
                        echo "\t\t\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t";
                        // line 114
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                        echo " ";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "LAST_POST_AUTHOR_FULL", [], "any", false, false, false, 114);
                        echo " &laquo; <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_LAST_POST", [], "any", false, false, false, 114);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("GOTO_LAST_POST");
                        echo "\"><time datetime=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 114);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "LAST_POST_TIME", [], "any", false, false, false, 114);
                        echo "</time></a>
\t\t\t\t\t\t\t\t\t<br />";
                        // line 115
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTED");
                        echo " ";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("IN");
                        echo " <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_FORUM", [], "any", false, false, false, 115);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "FORUM_TITLE", [], "any", false, false, false, 115);
                        echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                        // line 117
                        if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_REPLIES", [], "any", false, false, false, 117)) {
                            echo "<span class=\"responsive-show left-box\" style=\"display: none;\">";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
                            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                            echo " <strong>";
                            echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_REPLIES", [], "any", false, false, false, 117);
                            echo "</strong></span>";
                        }
                        // line 118
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 119
                    echo "
\t\t\t\t\t\t\t<div class=\"responsive-hide left-box\">
\t\t\t\t\t\t\t\t";
                    // line 121
                    if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_HAS_POLL", [], "any", false, false, false, 121)) {
                        echo "<i class=\"icon fa-bar-chart fa-fw\" aria-hidden=\"true\"></i>";
                    }
                    // line 122
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "ATTACH_ICON_IMG", [], "any", false, false, false, 122)) {
                        echo "<i class=\"icon fa-paperclip fa-fw\" aria-hidden=\"true\"></i>";
                    }
                    // line 123
                    echo "\t\t\t\t\t\t\t\t";
                    // line 124
                    echo "\t\t\t\t\t\t\t\t";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_AUTHOR_FULL", [], "any", false, false, false, 124);
                    echo " &raquo; <time datetime=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "FIRST_POST_TIME_RFC3339", [], "any", false, false, false, 124);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "FIRST_POST_TIME", [], "any", false, false, false, 124);
                    echo "</time> &raquo; ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("IN");
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_FORUM", [], "any", false, false, false, 124);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "FORUM_TITLE", [], "any", false, false, false, 124);
                    echo "</a>
\t\t\t\t\t\t\t\t";
                    // line 125
                    // line 126
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    // line 127
                    if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["searchresults"], "pagination", [], "any", false, false, false, 127))) {
                        // line 128
                        echo "\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t<span><i class=\"icon fa-clone fa-fw\" aria-hidden=\"true\"></i></span>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                        // line 131
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["searchresults"], "pagination", [], "any", false, false, false, 131));
                        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                            // line 132
                            echo "\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_PREV", [], "any", false, false, false, 132)) {
                                // line 133
                                echo "\t\t\t\t\t\t\t\t\t";
                            } elseif (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_CURRENT", [], "any", false, false, false, 133)) {
                                echo "<li class=\"active\"><span>";
                                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 133);
                                echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                            } elseif (twig_get_attribute($this->env, $this->source,                             // line 134
$context["pagination"], "S_IS_ELLIPSIS", [], "any", false, false, false, 134)) {
                                echo "<li class=\"ellipsis\"><span>";
                                echo $this->extensions['phpbb\template\twig\extension']->lang("ELLIPSIS");
                                echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                            } elseif (twig_get_attribute($this->env, $this->source,                             // line 135
$context["pagination"], "S_IS_NEXT", [], "any", false, false, false, 135)) {
                                // line 136
                                echo "\t\t\t\t\t\t\t\t\t";
                            } else {
                                echo "<li><a class=\"button\" href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_URL", [], "any", false, false, false, 136);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 136);
                                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 138
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 139
                        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 142
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 143
                    // line 144
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</dd>
\t\t\t\t\t<dd class=\"posts\">";
                    // line 147
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_REPLIES", [], "any", false, false, false, 147);
                    echo " <dfn>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"views\">";
                    // line 148
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_VIEWS", [], "any", false, false, false, 148);
                    echo " <dfn>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEWS");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"lastpost\">
\t\t\t\t\t\t<span><dfn>";
                    // line 150
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                    echo " </dfn>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "LAST_POST_AUTHOR_FULL", [], "any", false, false, false, 150);
                    // line 151
                    echo "\t\t\t\t\t\t\t";
                    if ( !($context["S_IS_BOT"] ?? null)) {
                        // line 152
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_LAST_POST", [], "any", false, false, false, 152);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("GOTO_LAST_POST");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 153
                        echo ($context["VIEW_LATEST_POST"] ?? null);
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 156
                    echo "\t\t\t\t\t\t\t<br /><time datetime=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 156);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "LAST_POST_TIME", [], "any", false, false, false, 156);
                    echo "</time>
\t\t\t\t\t\t</span>
\t\t\t\t\t</dd>
\t\t\t\t\t";
                    // line 159
                    // line 160
                    echo "\t\t\t\t</dl>
\t\t\t</li>
\t\t\t";
                    // line 162
                    // line 163
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 164
                echo "\t\t</ul>

\t\t</div>
\t</div>
\t";
            } else {
                // line 169
                echo "\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 171
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 175
            echo "
";
        } else {
            // line 177
            echo "
\t";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "searchresults", [], "any", false, false, false, 178));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                // line 179
                echo "\t\t";
                // line 180
                echo "\t\t<div class=\"search post ";
                if ((twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_ROW_COUNT", [], "any", false, false, false, 180) % 2 != 0)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_POST_REPORTED", [], "any", false, false, false, 180)) {
                    echo " reported";
                }
                echo "\">
\t\t\t<div class=\"inner\">

\t";
                // line 183
                if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_IGNORE_POST", [], "any", false, false, false, 183)) {
                    // line 184
                    echo "\t\t<div class=\"postbody\">
\t\t\t\t<a href=\"";
                    // line 185
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_POST", [], "any", false, false, false, 185);
                    echo "\" class=\"arrow-";
                    echo ($context["S_CONTENT_FLOW_END"] ?? null);
                    echo "\">
\t\t\t\t\t<i class=\"icon fa-angle-";
                    // line 186
                    echo ($context["S_CONTENT_FLOW_END"] ?? null);
                    echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("JUMP_TO_POST");
                    echo "</span>
\t\t\t\t</a>
\t\t</div>
\t";
                } else {
                    // line 190
                    echo "\t\t<dl class=\"postprofile\">
\t\t\t";
                    // line 191
                    // line 192
                    echo "\t\t\t<dt class=\"author\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "POST_AUTHOR_FULL", [], "any", false, false, false, 192);
                    echo "</dt>
\t\t\t<dd class=\"search-result-date\">";
                    // line 193
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "POST_DATE", [], "any", false, false, false, 193);
                    echo "</dd>
\t\t\t<dd>";
                    // line 194
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_FORUM", [], "any", false, false, false, 194);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "FORUM_TITLE", [], "any", false, false, false, 194);
                    echo "</a></dd>
\t\t\t<dd>";
                    // line 195
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_TOPIC", [], "any", false, false, false, 195);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_TITLE", [], "any", false, false, false, 195);
                    echo "</a></dd>
\t\t\t";
                    // line 196
                    // line 197
                    echo "\t\t\t<dd>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_REPLIES", [], "any", false, false, false, 197);
                    echo "</strong></dd>
\t\t\t<dd>";
                    // line 198
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEWS");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_VIEWS", [], "any", false, false, false, 198);
                    echo "</strong></dd>
\t\t\t";
                    // line 199
                    // line 200
                    echo "\t\t</dl>

\t\t<div class=\"postbody\">
\t\t";
                    // line 203
                    // line 204
                    echo "\t\t\t<h3><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_POST", [], "any", false, false, false, 204);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "POST_SUBJECT", [], "any", false, false, false, 204);
                    echo "</a></h3>
\t\t\t<div class=\"content\">";
                    // line 205
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "MESSAGE", [], "any", false, false, false, 205);
                    echo "</div>
\t\t\t";
                    // line 206
                    // line 207
                    echo "\t\t\t";
                    if ( !twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_IGNORE_POST", [], "any", false, false, false, 207)) {
                        // line 208
                        echo "\t\t\t\t<ul class=\"searchresults\">
\t\t\t\t\t<li ><a href=\"";
                        // line 209
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_POST", [], "any", false, false, false, 209);
                        echo "\" class=\"arrow-";
                        echo ($context["S_CONTENT_FLOW_END"] ?? null);
                        echo "\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("JUMP_TO_POST");
                        echo "</a></li>
\t\t\t\t</ul>
\t\t\t";
                    }
                    // line 212
                    echo "\t\t</div>
\t";
                }
                // line 214
                echo "
\t\t\t</div>
\t\t</div>
\t\t";
                // line 217
                // line 218
                echo "\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 219
                echo "\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 221
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 226
        echo "
<div class=\"action-bar bottom\">
\t";
        // line 228
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "searchresults", [], "any", false, false, false, 228)) && (($context["S_SELECT_SORT_DAYS"] ?? null) || ($context["S_SELECT_SORT_KEY"] ?? null)))) {
            // line 229
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_SEARCH_ACTION"] ?? null);
            echo "\">
\t\t";
            // line 230
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "search_results.html", 230)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 231
            echo "\t</form>
\t";
        }
        // line 233
        echo "\t
\t<div class=\"pagination\">
\t\t";
        // line 235
        echo ($context["SEARCH_MATCHES"] ?? null);
        echo "
\t\t";
        // line 236
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 236))) {
            // line 237
            echo "\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "search_results.html", 237)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 238
            echo "\t\t";
        } else {
            // line 239
            echo "\t\t\t &bull; ";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "
\t\t";
        }
        // line 241
        echo "\t</div>
</div>
";
        // line 243
        // line 244
        echo "
";
        // line 245
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "search_results.html", 245)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 246
        echo "
";
        // line 247
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "search_results.html", 247)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_results.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  853 => 247,  850 => 246,  838 => 245,  835 => 244,  834 => 243,  830 => 241,  824 => 239,  821 => 238,  808 => 237,  806 => 236,  802 => 235,  798 => 233,  794 => 231,  782 => 230,  777 => 229,  775 => 228,  771 => 226,  760 => 221,  756 => 219,  751 => 218,  750 => 217,  745 => 214,  741 => 212,  731 => 209,  728 => 208,  725 => 207,  724 => 206,  720 => 205,  713 => 204,  712 => 203,  707 => 200,  706 => 199,  699 => 198,  691 => 197,  690 => 196,  681 => 195,  672 => 194,  668 => 193,  661 => 192,  660 => 191,  657 => 190,  648 => 186,  642 => 185,  639 => 184,  637 => 183,  623 => 180,  621 => 179,  616 => 178,  613 => 177,  609 => 175,  602 => 171,  598 => 169,  591 => 164,  585 => 163,  584 => 162,  580 => 160,  579 => 159,  570 => 156,  564 => 153,  557 => 152,  554 => 151,  548 => 150,  541 => 148,  535 => 147,  530 => 144,  529 => 143,  526 => 142,  521 => 139,  515 => 138,  505 => 136,  503 => 135,  497 => 134,  490 => 133,  487 => 132,  483 => 131,  478 => 128,  476 => 127,  473 => 126,  472 => 125,  455 => 124,  453 => 123,  448 => 122,  444 => 121,  440 => 119,  437 => 118,  428 => 117,  417 => 115,  401 => 114,  398 => 113,  396 => 112,  393 => 111,  392 => 110,  388 => 108,  382 => 105,  375 => 104,  372 => 103,  366 => 100,  359 => 99,  356 => 98,  350 => 95,  343 => 94,  341 => 93,  334 => 92,  328 => 89,  323 => 88,  320 => 87,  319 => 86,  315 => 84,  309 => 83,  297 => 81,  293 => 80,  284 => 79,  282 => 78,  278 => 77,  271 => 72,  270 => 71,  266 => 70,  262 => 69,  258 => 68,  250 => 62,  248 => 61,  245 => 60,  243 => 59,  240 => 58,  235 => 55,  229 => 53,  226 => 52,  213 => 51,  211 => 50,  206 => 49,  198 => 48,  194 => 46,  193 => 45,  190 => 44,  181 => 38,  175 => 37,  170 => 35,  166 => 34,  162 => 33,  157 => 31,  154 => 30,  152 => 29,  148 => 27,  146 => 26,  143 => 25,  142 => 24,  139 => 23,  130 => 19,  122 => 18,  119 => 17,  110 => 13,  104 => 12,  101 => 11,  99 => 10,  96 => 9,  90 => 8,  81 => 7,  72 => 6,  56 => 5,  53 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "search_results.html", "");
    }
}
