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

/* viewtopic_body.html */
class __TwigTemplate_f0bf0af1d0ddcab7640fc450f530aedb extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "viewtopic_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "<h2 class=\"topic-title\">";
        echo "<a href=\"";
        echo ($context["U_VIEW_TOPIC"] ?? null);
        echo "\">";
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "</a>";
        echo "</h2>
";
        // line 5
        // line 6
        echo "<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the topic body -->
";
        // line 7
        if (($context["FORUM_DESC"] ?? null)) {
            echo "<div style=\"display: none !important;\">";
            echo ($context["FORUM_DESC"] ?? null);
            echo "<br /></div>";
        }
        // line 8
        echo "
";
        // line 9
        if (($context["MODERATORS"] ?? null)) {
            // line 10
            echo "<p>
\t<strong>";
            // line 11
            if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATOR");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATORS");
            }
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            echo ($context["MODERATORS"] ?? null);
            echo "
</p>
";
        }
        // line 14
        echo "
";
        // line 15
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 16
            echo "\t<div class=\"rules";
            if (($context["U_FORUM_RULES"] ?? null)) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t";
            // line 19
            if (($context["U_FORUM_RULES"] ?? null)) {
                // line 20
                echo "\t\t\t<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 22
                echo "\t\t\t<strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 23
                echo ($context["FORUM_RULES"] ?? null);
                echo "
\t\t";
            }
            // line 25
            echo "
\t\t</div>
\t</div>
";
        }
        // line 29
        echo "
<div class=\"action-bar bar-top\">
\t";
        // line 31
        // line 32
        echo "
\t";
        // line 33
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 34
            echo "\t\t<a href=\"";
            echo ($context["U_POST_REPLY_TOPIC"] ?? null);
            echo "\" class=\"button\" title=\"";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_LOCKED");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 35
            if (($context["S_IS_LOCKED"] ?? null)) {
                // line 36
                echo "\t\t\t\t<span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_TOPIC_LOCKED");
                echo "</span> <i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            } else {
                // line 38
                echo "\t\t\t\t<span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_POST_REPLY");
                echo "</span> <i class=\"icon fa-reply fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            }
            // line 40
            echo "\t\t</a>
\t";
        }
        // line 42
        echo "
\t";
        // line 43
        // line 44
        echo "\t";
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 44)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 45
        echo "\t";
        // line 46
        echo "
\t";
        // line 47
        if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
            // line 48
            echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"get\" id=\"topic-search\" action=\"";
            // line 49
            echo ($context["S_SEARCHBOX_ACTION"] ?? null);
            echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\"  type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
            // line 51
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_TOPIC");
            echo "\" />
\t\t\t\t<button class=\"button button-search\" type=\"submit\" title=\"";
            // line 52
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 53
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</span>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
            // line 55
            echo ($context["U_SEARCH"] ?? null);
            echo "\" class=\"button button-search-end\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
            echo "\">
\t\t\t\t\t<i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 56
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
            echo "</span>
\t\t\t\t</a>
\t\t\t\t";
            // line 58
            echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
        }
        // line 63
        echo "
\t";
        // line 64
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 64)) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 65
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 66
            if ((($context["U_VIEW_UNREAD_POST"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                echo "<a href=\"";
                echo ($context["U_VIEW_UNREAD_POST"] ?? null);
                echo "\" class=\"mark\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_UNREAD_POST");
                echo "</a> &bull; ";
            }
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "
\t\t\t";
            // line 67
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 67))) {
                // line 68
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 68)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 69
                echo "\t\t\t";
            } else {
                // line 70
                echo "\t\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 72
            echo "\t\t</div>
\t";
        }
        // line 74
        echo "\t";
        // line 75
        echo "</div>

";
        // line 77
        // line 78
        echo "
";
        // line 79
        if (($context["S_HAS_POLL"] ?? null)) {
            // line 80
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_POLL_ACTION"] ?? null);
            echo "\" data-ajax=\"vote_poll\" data-refresh=\"true\" class=\"topic_poll\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<div class=\"content\">
\t\t\t<h2 class=\"poll-title\">";
            // line 86
            echo ($context["POLL_QUESTION"] ?? null);
            echo "</h2>
\t\t\t<p class=\"author\">";
            // line 87
            echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_LENGTH");
            if ((($context["S_CAN_VOTE"] ?? null) && ($context["L_POLL_LENGTH"] ?? null))) {
                echo "<br />";
            }
            if (($context["S_CAN_VOTE"] ?? null)) {
                echo "<span class=\"poll_max_votes\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MAX_VOTES");
                echo "</span>";
            }
            echo "</p>

\t\t\t<fieldset class=\"polls\">
\t\t\t";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "poll_option", [], "any", false, false, false, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 91
                echo "\t\t\t\t";
                // line 92
                echo "\t\t\t\t<dl class=\"";
                if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 92)) {
                    echo "voted";
                }
                if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_MOST_VOTES", [], "any", false, false, false, 92)) {
                    echo " most-votes";
                }
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 92)) {
                    echo " title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_VOTED_OPTION");
                    echo "\"";
                }
                echo " data-alt-text=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_VOTED_OPTION");
                echo "\" data-poll-option-id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 92);
                echo "\">
\t\t\t\t\t<dt>";
                // line 93
                if (($context["S_CAN_VOTE"] ?? null)) {
                    echo "<label for=\"vote_";
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 93);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_CAPTION", [], "any", false, false, false, 93);
                    echo "</label>";
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_CAPTION", [], "any", false, false, false, 93);
                }
                echo "</dt>
\t\t\t\t\t";
                // line 94
                if (($context["S_CAN_VOTE"] ?? null)) {
                    echo "<dd style=\"width: auto;\" class=\"poll_option_select\">";
                    if (($context["S_IS_MULTI_CHOICE"] ?? null)) {
                        echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 94);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 94);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 94)) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    } else {
                        echo "<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 94);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 94);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 94)) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    }
                    echo "</dd>";
                }
                // line 95
                echo "\t\t\t\t\t<dd class=\"resultbar";
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo "\"><div class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 95) < 20)) {
                    echo "pollbar1";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 95) < 40)) {
                    echo "pollbar2";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 95) < 60)) {
                    echo "pollbar3";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 95) < 80)) {
                    echo "pollbar4";
                } else {
                    echo "pollbar5";
                }
                echo "\" style=\"width:";
                echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PERCENT_REL", [], "any", false, false, false, 95);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_RESULT", [], "any", false, false, false, 95);
                echo "</div></dd>
\t\t\t\t\t<dd class=\"poll_option_percent";
                // line 96
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo "\">";
                if ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_RESULT", [], "any", false, false, false, 96) == 0)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NO_VOTES");
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PERCENT", [], "any", false, false, false, 96);
                }
                echo "</dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 98
                // line 99
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "
\t\t\t\t<dl class=\"poll_total_votes";
            // line 101
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\">";
            // line 103
            echo $this->extensions['phpbb\template\twig\extension']->lang("TOTAL_VOTES");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <span class=\"poll_total_vote_cnt\">";
            echo ($context["TOTAL_VOTES"] ?? null);
            echo "</span></dd>
\t\t\t\t</dl>

\t\t\t";
            // line 106
            if (($context["S_CAN_VOTE"] ?? null)) {
                // line 107
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_vote\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><input type=\"submit\" name=\"update\" value=\"";
                // line 109
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT_VOTE");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 112
            echo "
\t\t\t";
            // line 113
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                // line 114
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_view_results\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><a href=\"";
                // line 116
                echo ($context["U_VIEW_RESULTS"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_RESULTS");
                echo "</a></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 119
            echo "\t\t\t</fieldset>
\t\t\t<div class=\"vote-submitted hidden\">";
            // line 120
            echo $this->extensions['phpbb\template\twig\extension']->lang("VOTE_SUBMITTED");
            echo "</div>
\t\t</div>

\t\t</div>
\t\t";
            // line 124
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t";
            // line 125
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t</div>

\t</form>
\t<hr />
";
        }
        // line 131
        echo "
";
        // line 132
        // line 133
        echo "
";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "postrow", [], "any", false, false, false, 134));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 135
            echo "\t";
            // line 136
            echo "\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_FIRST_UNREAD", [], "any", false, false, false, 136)) {
                // line 137
                echo "\t\t<a id=\"unread\" class=\"anchor\"";
                if (($context["S_UNREAD_VIEW"] ?? null)) {
                    echo " data-url=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MINI_POST", [], "any", false, false, false, 137);
                    echo "\"";
                }
                echo "></a>
\t";
            }
            // line 139
            echo "\t<div id=\"p";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 139);
            echo "\" class=\"post has-profile ";
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "S_ROW_COUNT", [], "any", false, false, false, 139) % 2 != 0)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_UNREAD_POST", [], "any", false, false, false, 139)) {
                echo " unreadpost";
            }
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_REPORTED", [], "any", false, false, false, 139)) {
                echo " reported";
            }
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_DELETED", [], "any", false, false, false, 139)) {
                echo " deleted";
            }
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "S_ONLINE", [], "any", false, false, false, 139) &&  !twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_HIDDEN", [], "any", false, false, false, 139))) {
                echo " online";
            }
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_WARNINGS", [], "any", false, false, false, 139)) {
                echo " warned";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t<dl class=\"postprofile\" id=\"profile";
            // line 142
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 142);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_HIDDEN", [], "any", false, false, false, 142)) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t\t\t<dt class=\"";
            // line 143
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_TITLE", [], "any", false, false, false, 143) || twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_IMG", [], "any", false, false, false, 143))) {
                echo "has-profile-rank";
            } else {
                echo "no-profile-rank";
            }
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 143)) {
                echo "has-avatar";
            } else {
                echo "no-avatar";
            }
            echo "\">
\t\t\t\t";
            // line 144
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "S_ONLINE", [], "any", false, false, false, 144) &&  !twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_HIDDEN", [], "any", false, false, false, 144))) {
                // line 145
                echo "\t\t\t\t\t<div class=\"inventea-online\"><i class=\"fa fa-power-off\"></i> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ONLINE");
                echo "</div>
\t\t\t\t";
            }
            // line 147
            echo "
\t\t\t\t<div class=\"avatar-container\">
\t\t\t\t\t";
            // line 149
            // line 150
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 150)) {
                // line 151
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 151)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 151);
                    echo "\" class=\"avatar\">";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 151);
                    echo "</a>";
                } else {
                    echo "<span class=\"avatar\">";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 151);
                    echo "</span>";
                }
                // line 152
                echo "\t\t\t\t\t";
            }
            // line 153
            echo "\t\t\t\t\t";
            // line 154
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 155
            // line 156
            echo "\t\t\t\t";
            if ( !twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 156)) {
                echo "<strong>";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_AUTHOR_FULL", [], "any", false, false, false, 156);
                echo "</strong>";
            } else {
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_AUTHOR_FULL", [], "any", false, false, false, 156);
            }
            // line 157
            echo "\t\t\t\t";
            // line 158
            echo "\t\t\t</dt>

\t\t\t";
            // line 160
            // line 161
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_TITLE", [], "any", false, false, false, 161) || twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_IMG", [], "any", false, false, false, 161))) {
                echo "<dd class=\"profile-rank\">";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_TITLE", [], "any", false, false, false, 161);
                if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_TITLE", [], "any", false, false, false, 161) && twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_IMG", [], "any", false, false, false, 161))) {
                    echo "<br />";
                }
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_IMG", [], "any", false, false, false, 161);
                echo "</dd>";
            }
            // line 162
            echo "\t\t\t";
            // line 163
            echo "
\t\t";
            // line 164
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_POSTS", [], "any", false, false, false, 164) != "")) {
                echo "<dd class=\"profile-posts\"><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "U_SEARCH", [], "any", false, false, false, 164) !== "")) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_SEARCH", [], "any", false, false, false, 164);
                    echo "\">";
                }
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_POSTS", [], "any", false, false, false, 164);
                if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "U_SEARCH", [], "any", false, false, false, 164) !== "")) {
                    echo "</a>";
                }
                echo "</dd>";
            }
            // line 165
            echo "\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_JOINED", [], "any", false, false, false, 165)) {
                echo "<dd class=\"profile-joined\"><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_JOINED", [], "any", false, false, false, 165);
                echo "</dd>";
            }
            // line 166
            echo "\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_WARNINGS", [], "any", false, false, false, 166)) {
                echo "<dd class=\"profile-warnings\"><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("WARNINGS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_WARNINGS", [], "any", false, false, false, 166);
                echo "</dd>";
            }
            // line 167
            echo "
\t\t";
            // line 168
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_PROFILE_FIELD1", [], "any", false, false, false, 168)) {
                // line 169
                echo "\t\t\t<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t<dd><strong>";
                // line 170
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "PROFILE_FIELD1_NAME", [], "any", false, false, false, 170);
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "PROFILE_FIELD1_VALUE", [], "any", false, false, false, 170);
                echo "</dd>
\t\t";
            }
            // line 172
            echo "
\t\t";
            // line 173
            // line 174
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["postrow"], "custom_fields", [], "any", false, false, false, 174));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 175
                echo "\t\t\t";
                if ( !twig_get_attribute($this->env, $this->source, $context["custom_fields"], "S_PROFILE_CONTACT", [], "any", false, false, false, 175)) {
                    // line 176
                    echo "\t\t\t\t<dd class=\"profile-custom-field profile-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_IDENT", [], "any", false, false, false, 176);
                    echo "\"><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 176);
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong> ";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_VALUE", [], "any", false, false, false, 176);
                    echo "</dd>
\t\t\t";
                }
                // line 178
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "\t\t";
            // line 180
            echo "
\t\t";
            // line 181
            // line 182
            echo "\t\t";
            if (( !($context["S_IS_BOT"] ?? null) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postrow"], "contact", [], "any", false, false, false, 182)))) {
                // line 183
                echo "\t\t\t<dd class=\"profile-contact\">
\t\t\t\t<strong>";
                // line 184
                echo $this->extensions['phpbb\template\twig\extension']->lang("CONTACT");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong>
\t\t\t\t<div class=\"dropdown-container dropdown-right\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-trigger\" title=\"";
                // line 186
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "CONTACT_USER", [], "any", false, false, false, 186);
                echo "\">
\t\t\t\t\t\t<i class=\"icon fa-commenting-o fa-fw icon-lg\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 187
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "CONTACT_USER", [], "any", false, false, false, 187);
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<div class=\"dropdown-contents contact-icons\">
\t\t\t\t\t\t\t";
                // line 192
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["postrow"], "contact", [], "any", false, false, false, 192));
                foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                    // line 193
                    echo "\t\t\t\t\t\t\t\t";
                    $context["REMAINDER"] = (twig_get_attribute($this->env, $this->source, $context["contact"], "S_ROW_COUNT", [], "any", false, false, false, 193) % 4);
                    // line 194
                    echo "\t\t\t\t\t\t\t\t";
                    $value = ((($context["REMAINDER"] ?? null) == 3) || (twig_get_attribute($this->env, $this->source, $context["contact"], "S_LAST_ROW", [], "any", false, false, false, 194) && (twig_get_attribute($this->env, $this->source, $context["contact"], "S_NUM_ROWS", [], "any", false, false, false, 194) < 4)));
                    $context['definition']->set('S_LAST_CELL', $value);
                    // line 195
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["REMAINDER"] ?? null) == 0)) {
                        // line 196
                        echo "\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 198
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    if (twig_get_attribute($this->env, $this->source, $context["contact"], "U_CONTACT", [], "any", false, false, false, 198)) {
                        echo twig_get_attribute($this->env, $this->source, $context["contact"], "U_CONTACT", [], "any", false, false, false, 198);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 198);
                    }
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "NAME", [], "any", false, false, false, 198);
                    echo "\"";
                    if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "S_LAST_CELL", [], "any", false, false, false, 198)) {
                        echo " class=\"last-cell\"";
                    }
                    if ((twig_get_attribute($this->env, $this->source, $context["contact"], "ID", [], "any", false, false, false, 198) == "jabber")) {
                        echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t";
                    // line 199
                    echo "<span class=\"contact-icon ";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "ID", [], "any", false, false, false, 199);
                    echo "-icon\">";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "NAME", [], "any", false, false, false, 199);
                    echo "</span>";
                    // line 200
                    echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    // line 201
                    if (((($context["REMAINDER"] ?? null) == 3) || twig_get_attribute($this->env, $this->source, $context["contact"], "S_LAST_ROW", [], "any", false, false, false, 201))) {
                        // line 202
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 204
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 205
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</dd>
\t\t";
            }
            // line 210
            echo "\t\t";
            // line 211
            echo "
\t\t</dl>

\t\t<div class=\"postbody\">
\t\t\t";
            // line 215
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_HIDDEN", [], "any", false, false, false, 215)) {
                // line 216
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_DELETED", [], "any", false, false, false, 216)) {
                    // line 217
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 217);
                    echo "\">
                        ";
                    // line 218
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "L_POST_DELETED_MESSAGE", [], "any", false, false, false, 218);
                    echo "<br>
\t\t\t\t\t\t<a class=\"display_post\" data-post-id=\"";
                    // line 219
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 219);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MINI_POST_VIEW", [], "any", false, false, false, 219);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_DISPLAY");
                    echo "</a>
\t\t\t\t\t</div>
\t\t\t\t";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 221
$context["postrow"], "S_IGNORE_POST", [], "any", false, false, false, 221)) {
                    // line 222
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 222);
                    echo "\">
\t\t\t\t\t\t";
                    // line 223
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "L_IGNORE_POST", [], "any", false, false, false, 223);
                    echo "<br>
\t\t\t\t\t\t<a class=\"display_post\" data-post-id=\"";
                    // line 224
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 224);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MINI_POST_VIEW", [], "any", false, false, false, 224);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_DISPLAY");
                    echo "</a>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 227
                echo "\t\t\t";
            }
            // line 228
            echo "\t\t\t<div id=\"post_content";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 228);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_HIDDEN", [], "any", false, false, false, 228)) {
                echo " style=\"display: none;\"";
            }
            echo ">

\t\t\t";
            // line 230
            // line 231
            echo "\t\t\t<h3 ";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_FIRST_ROW", [], "any", false, false, false, 231)) {
                echo "class=\"first\"";
            }
            echo ">
\t\t\t";
            // line 232
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG", [], "any", false, false, false, 232)) {
                // line 233
                echo "\t\t\t\t<img src=\"";
                echo ($context["T_ICONS_PATH"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG", [], "any", false, false, false, 233);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG_WIDTH", [], "any", false, false, false, 233);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG_HEIGHT", [], "any", false, false, false, 233);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG_ALT", [], "any", false, false, false, 233);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG_ALT", [], "any", false, false, false, 233);
                echo "\">
\t\t\t";
            }
            // line 235
            echo "\t\t\t<a ";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_FIRST_UNREAD", [], "any", false, false, false, 235)) {
                echo "class=\"first-unread\" ";
            }
            echo "href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MINI_POST", [], "any", false, false, false, 235);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_SUBJECT", [], "any", false, false, false, 235);
            echo "</a>
\t\t\t</h3>
\t\t";
            // line 237
            $value = (((((twig_get_attribute($this->env, $this->source, $context["postrow"], "U_EDIT", [], "any", false, false, false, 237) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_DELETE", [], "any", false, false, false, 237)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_REPORT", [], "any", false, false, false, 237)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_WARN", [], "any", false, false, false, 237)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_INFO", [], "any", false, false, false, 237)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_QUOTE", [], "any", false, false, false, 237));
            $context['definition']->set('SHOW_POST_BUTTONS', $value);
            // line 238
            echo "\t\t";
            // line 239
            echo "\t\t";
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 240
                echo "\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SHOW_POST_BUTTONS", [], "any", false, false, false, 240)) {
                    // line 241
                    echo "\t\t\t\t<ul class=\"post-buttons\">
\t\t\t\t\t";
                    // line 242
                    // line 243
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_EDIT", [], "any", false, false, false, 243)) {
                        // line 244
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 245
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_EDIT", [], "any", false, false, false, 245);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT_POST");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 246
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_EDIT");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 250
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_DELETE", [], "any", false, false, false, 250)) {
                        // line 251
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 252
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_DELETE", [], "any", false, false, false, 252);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_POST");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-times fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 253
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_DELETE");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 257
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_REPORT", [], "any", false, false, false, 257)) {
                        // line 258
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 259
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_REPORT", [], "any", false, false, false, 259);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("REPORT_POST");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 260
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_REPORT");
                        echo "</span>
\t\t\t\t\t\t\t</a>\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 263
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_WARN", [], "any", false, false, false, 263)) {
                        // line 264
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 265
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_WARN", [], "any", false, false, false, 265);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("WARN_USER");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation-triangle fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 266
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_WARN");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 270
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_INFO", [], "any", false, false, false, 270)) {
                        // line 271
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 272
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_INFO", [], "any", false, false, false, 272);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("INFORMATION");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-info fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 273
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_INFORMATION");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 277
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_QUOTE", [], "any", false, false, false, 277)) {
                        // line 278
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 279
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_QUOTE", [], "any", false, false, false, 279);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("REPLY_WITH_QUOTE");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-quote-left fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 280
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_QUOTE");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 284
                    echo "\t\t\t\t\t";
                    // line 285
                    echo "\t\t\t\t</ul>
\t\t\t";
                }
                // line 287
                echo "\t\t";
            }
            // line 288
            echo "\t\t";
            // line 289
            echo "
\t\t\t";
            // line 290
            // line 291
            echo "\t\t\t<p class=\"author\">
\t\t\t\t";
            // line 292
            if (($context["S_IS_BOT"] ?? null)) {
                // line 293
                echo "\t\t\t\t\t<span><i class=\"icon fa-file fa-fw ";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_UNREAD_POST", [], "any", false, false, false, 293)) {
                    echo "icon-red";
                } else {
                    echo "icon-lightgray";
                }
                echo " icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "MINI_POST", [], "any", false, false, false, 293);
                echo "</span></span>
\t\t\t\t";
            } else {
                // line 295
                echo "\t\t\t\t\t<a class=\"unread\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MINI_POST", [], "any", false, false, false, 295);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "MINI_POST", [], "any", false, false, false, 295);
                echo "\">
\t\t\t\t\t\t<i class=\"icon fa-file fa-fw ";
                // line 296
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_UNREAD_POST", [], "any", false, false, false, 296)) {
                    echo "icon-red";
                } else {
                    echo "icon-lightgray";
                }
                echo " icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "MINI_POST", [], "any", false, false, false, 296);
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t";
            }
            // line 299
            echo "\t\t\t\t<span class=\"responsive-hide\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
            echo " <strong>";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_AUTHOR_FULL", [], "any", false, false, false, 299);
            echo "</strong> &raquo; </span><time datetime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_DATE_RFC3339", [], "any", false, false, false, 299);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_DATE", [], "any", false, false, false, 299);
            echo "</time>
\t\t\t</p>
\t\t\t";
            // line 301
            // line 302
            echo "
\t\t\t";
            // line 303
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_UNAPPROVED", [], "any", false, false, false, 303)) {
                // line 304
                echo "\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_CAN_APPROVE", [], "any", false, false, false, 304)) {
                    // line 305
                    echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_APPROVE_ACTION", [], "any", false, false, false, 305);
                    echo "\">
\t\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t\t<span><i class=\"icon fa-question icon-red fa-fw\" aria-hidden=\"true\"></i></span>\t\t\t\t
\t\t\t\t\t<strong>";
                    // line 308
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_UNAPPROVED_ACTION");
                    echo "</strong>
\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                    // line 309
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DISAPPROVE");
                    echo "\" name=\"action[disapprove]\" />
\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                    // line 310
                    echo $this->extensions['phpbb\template\twig\extension']->lang("APPROVE");
                    echo "\" name=\"action[approve]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                    // line 311
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 311);
                    echo "\" />
\t\t\t\t\t";
                    // line 312
                    echo ($context["S_FORM_TOKEN"] ?? null);
                    echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
                } else {
                    // line 316
                    echo "\t\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t\t<span><i class=\"icon fa-exclamation icon-red fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t<strong>";
                    // line 318
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_UNAPPROVED_EXPLAIN");
                    echo "</strong>
\t\t\t\t</p>
\t\t\t";
                }
                // line 321
                echo "\t\t\t";
            } elseif (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_DELETED", [], "any", false, false, false, 321)) {
                // line 322
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_APPROVE_ACTION", [], "any", false, false, false, 322);
                echo "\">
\t\t\t\t<p class=\"post-notice deleted\">
\t\t\t\t\t<strong>";
                // line 324
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_DELETED_ACTION");
                echo "</strong>
\t\t\t\t\t";
                // line 325
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_DELETE_PERMANENT", [], "any", false, false, false, 325)) {
                    // line 326
                    echo "\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE");
                    echo "\" name=\"action[delete]\" />
\t\t\t\t\t";
                }
                // line 328
                echo "\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESTORE");
                echo "\" name=\"action[restore]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 329
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 329);
                echo "\" />
\t\t\t\t\t";
                // line 330
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            }
            // line 334
            echo "
\t\t\t";
            // line 335
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_REPORTED", [], "any", false, false, false, 335)) {
                // line 336
                echo "\t\t\t<p class=\"post-notice reported\">
\t\t\t\t<a href=\"";
                // line 337
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MCP_REPORT", [], "any", false, false, false, 337);
                echo "\"><i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_REPORTED");
                echo "</strong></a>
\t\t\t</p>
\t\t\t";
            }
            // line 340
            echo "\t\t\t
\t\t\t";
            // line 341
            // line 342
            echo "\t\t\t<div class=\"content\">";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "MESSAGE", [], "any", false, false, false, 342);
            echo "</div>
\t\t\t";
            // line 343
            // line 344
            echo "
\t\t\t";
            // line 345
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_HAS_ATTACHMENTS", [], "any", false, false, false, 345)) {
                // line 346
                echo "\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t<dt>
\t\t\t\t\t\t";
                // line 348
                echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACHMENTS");
                echo "
\t\t\t\t\t</dt>
\t\t\t\t\t";
                // line 350
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["postrow"], "attachment", [], "any", false, false, false, 350));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 351
                    echo "\t\t\t\t\t\t<dd>";
                    echo twig_get_attribute($this->env, $this->source, $context["attachment"], "DISPLAY_ATTACHMENT", [], "any", false, false, false, 351);
                    echo "</dd>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 353
                echo "\t\t\t\t</dl>
\t\t\t";
            }
            // line 355
            echo "
\t\t\t";
            // line 356
            // line 357
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_DISPLAY_NOTICE", [], "any", false, false, false, 357)) {
                echo "<div class=\"rules\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DOWNLOAD_NOTICE");
                echo "</div>";
            }
            // line 358
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "DELETED_MESSAGE", [], "any", false, false, false, 358) || twig_get_attribute($this->env, $this->source, $context["postrow"], "DELETE_REASON", [], "any", false, false, false, 358))) {
                // line 359
                echo "\t\t\t\t<div class=\"notice post_deleted_msg\">
\t\t\t\t\t";
                // line 360
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "DELETED_MESSAGE", [], "any", false, false, false, 360);
                echo "
\t\t\t\t\t";
                // line 361
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "DELETE_REASON", [], "any", false, false, false, 361)) {
                    echo "<br /><strong>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REASON");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong> <em>";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "DELETE_REASON", [], "any", false, false, false, 361);
                    echo "</em>";
                }
                // line 362
                echo "\t\t\t\t</div>
\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 363
$context["postrow"], "EDITED_MESSAGE", [], "any", false, false, false, 363) || twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 363))) {
                // line 364
                echo "\t\t\t\t<div class=\"notice\">
\t\t\t\t\t";
                // line 365
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "EDITED_MESSAGE", [], "any", false, false, false, 365);
                echo "
\t\t\t\t\t";
                // line 366
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 366)) {
                    echo "<br /><strong>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REASON");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong> <em>";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 366);
                    echo "</em>";
                }
                // line 367
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 369
            echo "
\t\t\t";
            // line 370
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "BUMPED_MESSAGE", [], "any", false, false, false, 370)) {
                echo "<div class=\"notice\"><br /><br />";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "BUMPED_MESSAGE", [], "any", false, false, false, 370);
                echo "</div>";
            }
            // line 371
            echo "\t\t\t";
            // line 372
            echo "\t\t\t";
            // line 373
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "SIGNATURE", [], "any", false, false, false, 373)) {
                echo "<div id=\"sig";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 373);
                echo "\" class=\"signature\">";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "SIGNATURE", [], "any", false, false, false, 373);
                echo "</div>";
            }
            // line 374
            echo "\t\t\t";
            // line 375
            echo "
\t\t\t";
            // line 376
            // line 377
            echo "\t\t\t</div>

\t\t</div>

\t\t";
            // line 381
            // line 382
            echo "\t\t<div class=\"back2top\">
\t\t\t";
            // line 383
            // line 384
            echo "\t\t\t<a href=\"#top\" class=\"top\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BACK_TO_TOP");
            echo "\">
\t\t\t\t<i class=\"icon fa-chevron-circle-up fa-fw icon-gray\" aria-hidden=\"true\"></i>
\t\t\t\t<span class=\"sr-only\">";
            // line 386
            echo $this->extensions['phpbb\template\twig\extension']->lang("BACK_TO_TOP");
            echo "</span>
\t\t\t</a>
\t\t\t";
            // line 388
            // line 389
            echo "\t\t</div>
\t\t";
            // line 390
            // line 391
            echo "
\t\t</div>
\t</div>

\t";
            // line 395
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 397
        echo "
";
        // line 398
        if (($context["S_QUICK_REPLY"] ?? null)) {
            // line 399
            echo "\t";
            $location = "quickreply_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("quickreply_editor.html", "viewtopic_body.html", 399)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 401
        echo "
";
        // line 402
        // line 403
        echo "\t<div class=\"action-bar bar-bottom\">
\t";
        // line 404
        // line 405
        echo "
\t";
        // line 406
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 407
            echo "\t\t<a href=\"";
            echo ($context["U_POST_REPLY_TOPIC"] ?? null);
            echo "\" class=\"button\" title=\"";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_LOCKED");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 408
            if (($context["S_IS_LOCKED"] ?? null)) {
                // line 409
                echo "\t\t\t\t<span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_TOPIC_LOCKED");
                echo "</span> <i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            } else {
                // line 411
                echo "\t\t\t\t<span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_POST_REPLY");
                echo "</span> <i class=\"icon fa-reply fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            }
            // line 413
            echo "\t\t</a>
\t";
        }
        // line 415
        echo "
\t";
        // line 416
        // line 417
        echo "
\t";
        // line 418
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 418)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 419
        echo "\t
\t";
        // line 420
        if ((((($context["S_NUM_POSTS"] ?? null) > 1) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 420))) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 421
            echo "\t\t<form method=\"post\" action=\"";
            echo ($context["S_TOPIC_ACTION"] ?? null);
            echo "\">
\t\t";
            // line 422
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "viewtopic_body.html", 422)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 423
            echo "\t\t</form>
\t";
        }
        // line 425
        echo "
\t";
        // line 426
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "quickmod", [], "any", false, false, false, 426))) {
            // line 427
            echo "\t<div class=\"quickmod dropdown-container dropdown-container-left dropdown-up dropdown-";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo " dropdown-button-control\" id=\"quickmod\">
\t\t<span title=\"";
            // line 428
            echo $this->extensions['phpbb\template\twig\extension']->lang("QUICK_MOD");
            echo "\" class=\"button button-secondary dropdown-trigger dropdown-select\">
\t\t\t<i class=\"icon fa-gavel fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 429
            echo $this->extensions['phpbb\template\twig\extension']->lang("QUICK_MOD");
            echo "</span>
\t\t\t<span class=\"caret\"><i class=\"icon fa-sort-down fa-fw\" aria-hidden=\"true\"></i></span>
\t\t</span>
\t\t<div class=\"dropdown\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 435
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "quickmod", [], "any", false, false, false, 435));
            foreach ($context['_seq'] as $context["_key"] => $context["quickmod"]) {
                // line 436
                echo "\t\t\t\t\t";
                $value = twig_in_filter(twig_get_attribute($this->env, $this->source, $context["quickmod"], "VALUE", [], "any", false, false, false, 436), [0 => "lock", 1 => "unlock", 2 => "delete_topic", 3 => "restore_topic", 4 => "make_normal", 5 => "make_sticky", 6 => "make_announce", 7 => "make_global"]);
                $context['definition']->set('QUICKMOD_AJAX', $value);
                // line 437
                echo "\t\t\t\t\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["quickmod"], "LINK", [], "any", false, false, false, 437);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "QUICKMOD_AJAX", [], "any", false, false, false, 437)) {
                    echo " data-ajax=\"true\" data-refresh=\"true\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["quickmod"], "TITLE", [], "any", false, false, false, 437);
                echo "</a></li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickmod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 439
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 443
        echo "
\t";
        // line 444
        // line 445
        echo "
\t";
        // line 446
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 446)) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 447
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 448
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "
\t\t\t";
            // line 449
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 449))) {
                // line 450
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 450)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 451
                echo "\t\t\t";
            } else {
                // line 452
                echo "\t\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 454
            echo "\t\t</div>
\t";
        }
        // line 456
        echo "</div>

";
        // line 458
        // line 459
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewtopic_body.html", 459)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 460
        echo "
";
        // line 461
        // line 462
        if ((($context["S_DISPLAY_ONLINE_LIST"] ?? null) && ($context["U_VIEWONLINE"] ?? null))) {
            // line 463
            echo "\t<div class=\"stat-block online-list\">
\t\t<h3><a href=\"";
            // line 464
            echo ($context["U_VIEWONLINE"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
            echo "</a></h3>
\t\t<p>";
            // line 465
            echo ($context["LOGGED_IN_USER_LIST"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 468
        echo "
";
        // line 469
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewtopic_body.html", 469)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1623 => 469,  1620 => 468,  1614 => 465,  1608 => 464,  1605 => 463,  1603 => 462,  1602 => 461,  1599 => 460,  1587 => 459,  1586 => 458,  1582 => 456,  1578 => 454,  1572 => 452,  1569 => 451,  1556 => 450,  1554 => 449,  1550 => 448,  1547 => 447,  1545 => 446,  1542 => 445,  1541 => 444,  1538 => 443,  1532 => 439,  1517 => 437,  1513 => 436,  1509 => 435,  1500 => 429,  1496 => 428,  1491 => 427,  1489 => 426,  1486 => 425,  1482 => 423,  1470 => 422,  1465 => 421,  1463 => 420,  1460 => 419,  1448 => 418,  1445 => 417,  1444 => 416,  1441 => 415,  1437 => 413,  1431 => 411,  1425 => 409,  1423 => 408,  1412 => 407,  1410 => 406,  1407 => 405,  1406 => 404,  1403 => 403,  1402 => 402,  1399 => 401,  1385 => 399,  1383 => 398,  1380 => 397,  1375 => 395,  1369 => 391,  1368 => 390,  1365 => 389,  1364 => 388,  1359 => 386,  1353 => 384,  1352 => 383,  1349 => 382,  1348 => 381,  1342 => 377,  1341 => 376,  1338 => 375,  1336 => 374,  1327 => 373,  1325 => 372,  1323 => 371,  1317 => 370,  1314 => 369,  1310 => 367,  1301 => 366,  1297 => 365,  1294 => 364,  1292 => 363,  1289 => 362,  1280 => 361,  1276 => 360,  1273 => 359,  1270 => 358,  1263 => 357,  1262 => 356,  1259 => 355,  1255 => 353,  1246 => 351,  1242 => 350,  1237 => 348,  1233 => 346,  1231 => 345,  1228 => 344,  1227 => 343,  1222 => 342,  1221 => 341,  1218 => 340,  1210 => 337,  1207 => 336,  1205 => 335,  1202 => 334,  1195 => 330,  1191 => 329,  1186 => 328,  1180 => 326,  1178 => 325,  1174 => 324,  1168 => 322,  1165 => 321,  1159 => 318,  1155 => 316,  1148 => 312,  1144 => 311,  1140 => 310,  1136 => 309,  1132 => 308,  1125 => 305,  1122 => 304,  1120 => 303,  1117 => 302,  1116 => 301,  1104 => 299,  1092 => 296,  1085 => 295,  1073 => 293,  1071 => 292,  1068 => 291,  1067 => 290,  1064 => 289,  1062 => 288,  1059 => 287,  1055 => 285,  1053 => 284,  1046 => 280,  1040 => 279,  1037 => 278,  1034 => 277,  1027 => 273,  1021 => 272,  1018 => 271,  1015 => 270,  1008 => 266,  1002 => 265,  999 => 264,  996 => 263,  990 => 260,  984 => 259,  981 => 258,  978 => 257,  971 => 253,  965 => 252,  962 => 251,  959 => 250,  952 => 246,  946 => 245,  943 => 244,  940 => 243,  939 => 242,  936 => 241,  933 => 240,  930 => 239,  928 => 238,  925 => 237,  913 => 235,  898 => 233,  896 => 232,  889 => 231,  888 => 230,  878 => 228,  875 => 227,  865 => 224,  861 => 223,  856 => 222,  854 => 221,  845 => 219,  841 => 218,  836 => 217,  833 => 216,  831 => 215,  825 => 211,  823 => 210,  816 => 205,  810 => 204,  806 => 202,  804 => 201,  801 => 200,  795 => 199,  777 => 198,  773 => 196,  770 => 195,  766 => 194,  763 => 193,  759 => 192,  751 => 187,  747 => 186,  741 => 184,  738 => 183,  735 => 182,  734 => 181,  731 => 180,  729 => 179,  723 => 178,  712 => 176,  709 => 175,  704 => 174,  703 => 173,  700 => 172,  692 => 170,  689 => 169,  687 => 168,  684 => 167,  674 => 166,  664 => 165,  647 => 164,  644 => 163,  642 => 162,  631 => 161,  630 => 160,  626 => 158,  624 => 157,  615 => 156,  614 => 155,  611 => 154,  609 => 153,  606 => 152,  593 => 151,  590 => 150,  589 => 149,  585 => 147,  579 => 145,  577 => 144,  563 => 143,  555 => 142,  527 => 139,  517 => 137,  514 => 136,  512 => 135,  508 => 134,  505 => 133,  504 => 132,  501 => 131,  492 => 125,  488 => 124,  481 => 120,  478 => 119,  470 => 116,  466 => 114,  464 => 113,  461 => 112,  455 => 109,  451 => 107,  449 => 106,  440 => 103,  433 => 101,  430 => 100,  424 => 99,  423 => 98,  410 => 96,  387 => 95,  361 => 94,  349 => 93,  329 => 92,  327 => 91,  323 => 90,  309 => 87,  305 => 86,  295 => 80,  293 => 79,  290 => 78,  289 => 77,  285 => 75,  283 => 74,  279 => 72,  273 => 70,  270 => 69,  257 => 68,  255 => 67,  244 => 66,  241 => 65,  239 => 64,  236 => 63,  228 => 58,  223 => 56,  217 => 55,  212 => 53,  208 => 52,  204 => 51,  199 => 49,  196 => 48,  194 => 47,  191 => 46,  189 => 45,  176 => 44,  175 => 43,  172 => 42,  168 => 40,  162 => 38,  156 => 36,  154 => 35,  143 => 34,  141 => 33,  138 => 32,  137 => 31,  133 => 29,  127 => 25,  122 => 23,  117 => 22,  109 => 20,  107 => 19,  98 => 16,  96 => 15,  93 => 14,  80 => 11,  77 => 10,  75 => 9,  72 => 8,  66 => 7,  63 => 6,  62 => 5,  53 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "viewtopic_body.html", "");
    }
}
