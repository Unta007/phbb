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

/* navbar_header.html */
class __TwigTemplate_c9c568d4601b29c500504a97a422915d extends \Twig\Template
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
        echo "<nav role=\"navigation\">
\t<div class=\"inventea-posts-menu\">
\t\t<ul class=\"inventea-menu\" role=\"menubar\">
\t\t\t";
        // line 4
        // line 5
        echo "
\t\t\t";
        // line 6
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 7
            echo "\t\t\t\t";
            if (($context["S_REGISTERED_USER"] ?? null)) {
                echo "<li><a href=\"";
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_SELF");
                echo "</a></li>";
            }
            // line 8
            echo "\t\t\t\t";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                echo "<li><a href=\"";
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_NEW");
                echo "</a></li>";
            }
            // line 9
            echo "\t\t\t\t";
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                echo "<li><a href=\"";
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNREAD");
                echo "</a></li>";
            }
            // line 10
            echo "\t\t\t\t<li><a href=\"";
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t\t\t<li><a href=\"";
            // line 11
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
\t\t\t";
        }
        // line 13
        echo "
\t\t\t";
        // line 14
        // line 15
        echo "\t\t</ul>
\t</div>

\t<div class=\"inventea-forum-menu\">
\t\t<ul class=\"inventea-menu\" role=\"menubar\">
\t\t\t";
        // line 20
        // line 21
        echo "\t\t\t<li><a href=\"";
        echo ($context["U_FAQ"] ?? null);
        echo "\" rel=\"help\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ");
        echo "</a></li>
\t\t\t";
        // line 22
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            echo "<li><a href=\"";
            echo ($context["U_SEARCH"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</a></li>";
        }
        // line 23
        echo "
\t\t\t";
        // line 24
        if ( !($context["S_IS_BOT"] ?? null)) {
            // line 25
            echo "\t\t\t\t";
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                echo "<li><a href=\"";
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 26
            echo "\t\t\t\t";
            if (($context["U_TEAM"] ?? null)) {
                echo "<li><a href=\"";
                echo ($context["U_TEAM"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("THE_TEAM");
                echo "</a></li>";
            }
            // line 27
            echo "\t\t\t";
        }
        // line 28
        echo "
\t\t\t";
        // line 29
        if (($context["U_MCP"] ?? null)) {
            echo "<li><a href=\"";
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP_SHORT");
            echo "</a></li>";
        }
        // line 30
        echo "\t\t\t";
        if (($context["U_ACP"] ?? null)) {
            echo "<li><a href=\"";
            echo ($context["U_ACP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_SHORT");
            echo "</a></li>";
        }
        // line 31
        echo "
\t\t\t";
        // line 32
        // line 33
        echo "\t\t</ul>
\t</div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 33,  171 => 32,  168 => 31,  157 => 30,  147 => 29,  144 => 28,  141 => 27,  132 => 26,  123 => 25,  121 => 24,  118 => 23,  110 => 22,  101 => 21,  100 => 20,  93 => 15,  92 => 14,  89 => 13,  82 => 11,  75 => 10,  66 => 9,  57 => 8,  48 => 7,  46 => 6,  43 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navbar_header.html", "");
    }
}
