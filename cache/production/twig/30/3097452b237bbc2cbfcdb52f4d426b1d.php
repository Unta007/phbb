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

/* navbar_footer.html */
class __TwigTemplate_fc2f0d89521a0adf1dc6b118f445b1c4 extends \Twig\Template
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
\t<ul id=\"nav-footer\" class=\"nav-footer linklist\" role=\"menubar\">
\t\t<li class=\"breadcrumbs\">
\t\t\t";
        // line 4
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 5
            echo "\t\t\t\t";
            ob_start(function () { return ''; });
            // line 6
            echo "\t\t\t\t<span class=\"crumb\">
\t\t\t\t\t<a href=\"";
            // line 7
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\">
\t\t\t\t\t\t<span>";
            // line 8
            echo $this->extensions['phpbb\template\twig\extension']->lang("SITE_HOME");
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</span>
\t\t\t\t";
            $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 5
            echo twig_spaceless($___internal_parse_0_);
            // line 12
            echo "\t\t\t";
        }
        // line 13
        echo "\t\t\t";
        // line 14
        echo "\t\t\t";
        ob_start(function () { return ''; });
        // line 15
        echo "\t\t\t<span class=\"crumb\">
\t\t\t\t<a href=\"";
        // line 16
        echo ($context["U_INDEX"] ?? null);
        echo "\" data-navbar-reference=\"index\">
\t\t\t\t\t<span>";
        // line 17
        echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
        echo "</span>
\t\t\t\t</a>
\t\t\t</span>
\t\t\t";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        echo twig_spaceless($___internal_parse_1_);
        // line 21
        echo "\t\t\t";
        // line 22
        echo "\t\t</li>

\t\t";
        // line 24
        if ((($context["U_WATCH_FORUM_LINK"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 25
            echo "\t\t\t<li data-last-responsive=\"true\">
\t\t\t\t<a href=\"";
            // line 26
            echo ($context["U_WATCH_FORUM_LINK"] ?? null);
            echo "\" title=\"";
            echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
            echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"icon ";
            if (($context["S_WATCHING_FORUM"] ?? null)) {
                echo "fa-check-square-o";
            } else {
                echo "fa-square-o";
            }
            echo " fa-fw\" data-toggle-text=\"";
            echo ($context["S_WATCH_FORUM_TOGGLE"] ?? null);
            echo "\" data-toggle-url=\"";
            echo ($context["U_WATCH_FORUM_TOGGLE"] ?? null);
            echo "\">
\t\t\t\t\t<span>";
            // line 27
            echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        // line 31
        echo "\t\t";
        if (($context["U_ACP"] ?? null)) {
            echo "<li class=\"small-icon\" data-last-responsive=\"true\"><a href=\"";
            echo ($context["U_ACP"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
            echo "</a></li>";
        }
        // line 32
        echo "\t\t";
        if (($context["U_CONTACT_US"] ?? null)) {
            echo "<li class=\"small-icon\" data-last-responsive=\"true\"><a href=\"";
            echo ($context["U_CONTACT_US"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("CONTACT_US");
            echo "</a></li>";
        }
        // line 33
        echo "
\t\t";
        // line 34
        // line 35
        echo "
\t\t";
        // line 36
        // line 37
        echo "
\t\t";
        // line 38
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo "<li class=\"small-icon\"><a href=\"";
            echo ($context["U_DELETE_COOKIES"] ?? null);
            echo "\" data-ajax=\"true\" data-refresh=\"true\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_COOKIES");
            echo "</a></li>";
        }
        // line 39
        echo "
\t\t";
        // line 40
        // line 41
        echo "\t\t<li>";
        echo ($context["S_TIMEZONE"] ?? null);
        echo "</li>
\t\t";
        // line 42
        // line 43
        echo "\t</ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "navbar_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  167 => 42,  162 => 41,  161 => 40,  158 => 39,  150 => 38,  147 => 37,  146 => 36,  143 => 35,  142 => 34,  139 => 33,  130 => 32,  121 => 31,  114 => 27,  98 => 26,  95 => 25,  93 => 24,  89 => 22,  87 => 21,  85 => 14,  78 => 17,  74 => 16,  71 => 15,  68 => 14,  66 => 13,  63 => 12,  61 => 5,  54 => 8,  50 => 7,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navbar_footer.html", "");
    }
}
