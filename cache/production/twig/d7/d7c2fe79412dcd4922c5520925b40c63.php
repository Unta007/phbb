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

/* navbar_responsive_header.html */
class __TwigTemplate_24a503b3619b323175ebe41ca67e4914 extends \Twig\Template
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
        echo "<div class=\"dropdown-container hidden inventea-mobile-dropdown-menu\">
    <a href=\"#\" class=\"dropdown-trigger inventea-toggle\"><i class=\"icon fa fa-bars\"></i></a>
    <div class=\"dropdown hidden\">
        <div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
        \t<ul class=\"dropdown-contents\" role=\"menubar\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 7
        echo ($context["U_INDEX"] ?? null);
        echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa fa-fw ";
        // line 8
        if (($context["U_SITE_HOME"] ?? null)) {
            echo "fa-globe";
        } else {
            echo "fa-home";
        }
        echo "\" aria-hidden=\"true\"></i><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>\t\t
\t\t\t\t";
        // line 11
        // line 12
        echo "
\t\t\t\t<li ";
        // line 13
        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
            echo "data-skip-responsive=\"true\"";
        } else {
            echo "data-last-responsive=\"true\"";
        }
        echo ">
\t\t\t\t\t<a href=\"";
        // line 14
        echo ($context["U_FAQ"] ?? null);
        echo "\" rel=\"help\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-question-circle fa-fw\" aria-hidden=\"true\"></i><span>";
        // line 15
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ");
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 18
        // line 19
        echo "
\t\t\t\t";
        // line 20
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 21
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 22
            echo ($context["U_SEARCH"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 23
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t";
            // line 27
            if (($context["S_REGISTERED_USER"] ?? null)) {
                // line 28
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 29
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
                // line 30
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_SELF");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t\t\t\t
\t\t\t\t";
            // line 35
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 36
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 37
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 38
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_NEW");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t\t\t\t
\t\t\t\t";
            // line 43
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                // line 44
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 45
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 46
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNREAD");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
            }
            // line 49
            echo "\t
\t\t\t\t\t\t
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 52
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
            // line 53
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNANSWERED");
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 57
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-blue\" aria-hidden=\"true\"></i><span>";
            // line 58
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ACTIVE_TOPICS");
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"separator\"></li>
\t
\t\t\t\t";
        }
        // line 64
        echo "
\t\t\t\t";
        // line 65
        // line 66
        echo "
\t\t\t\t";
        // line 67
        if ( !($context["S_IS_BOT"] ?? null)) {
            // line 68
            echo "\t\t\t\t";
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                // line 69
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 70
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-group fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 71
                echo $this->extensions['phpbb\template\twig\extension']->lang("MEMBERLIST");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
            }
            // line 75
            echo "\t\t\t\t";
            if (($context["U_TEAM"] ?? null)) {
                // line 76
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 77
                echo ($context["U_TEAM"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-shield fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 78
                echo $this->extensions['phpbb\template\twig\extension']->lang("THE_TEAM");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
            }
            // line 82
            echo "\t\t\t\t";
        }
        // line 83
        echo "
\t\t\t\t";
        // line 84
        if (($context["U_ACP"] ?? null)) {
            // line 85
            echo "\t\t\t\t<li data-last-responsive=\"true\">
\t\t\t\t\t<a href=\"";
            // line 86
            echo ($context["U_ACP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-cogs fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 87
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_SHORT");
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 91
        echo "
\t\t\t\t";
        // line 92
        if (($context["U_MCP"] ?? null)) {
            // line 93
            echo "\t\t\t\t<li data-last-responsive=\"true\">
\t\t\t\t\t<a href=\"";
            // line 94
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-gavel fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 95
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP_SHORT");
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 99
        echo "\t\t\t\t";
        // line 100
        echo "\t\t\t</ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_responsive_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 100,  276 => 99,  269 => 95,  263 => 94,  260 => 93,  258 => 92,  255 => 91,  248 => 87,  242 => 86,  239 => 85,  237 => 84,  234 => 83,  231 => 82,  224 => 78,  220 => 77,  217 => 76,  214 => 75,  207 => 71,  203 => 70,  200 => 69,  197 => 68,  195 => 67,  192 => 66,  191 => 65,  188 => 64,  179 => 58,  175 => 57,  168 => 53,  164 => 52,  159 => 49,  152 => 46,  148 => 45,  145 => 44,  143 => 43,  140 => 42,  133 => 38,  129 => 37,  126 => 36,  124 => 35,  121 => 34,  114 => 30,  110 => 29,  107 => 28,  105 => 27,  98 => 23,  94 => 22,  91 => 21,  89 => 20,  86 => 19,  85 => 18,  79 => 15,  73 => 14,  65 => 13,  62 => 12,  61 => 11,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navbar_responsive_header.html", "");
    }
}
