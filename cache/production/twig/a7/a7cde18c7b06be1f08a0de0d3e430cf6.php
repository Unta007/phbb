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

/* overall_footer.html */
class __TwigTemplate_eb3c56a323dc5fbf653b52aef745d996 extends \Twig\Template
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
        echo "\t\t";
        // line 2
        echo "\t\t
\t\t";
        // line 3
        // line 4
        echo "\t</div>

<div class=\"inventea-footer-wrapper\">
\t<div id=\"page-footer\" class=\"inventea-footer\" role=\"contentinfo\">
\t\t";
        // line 8
        $location = "navbar_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_footer.html", "overall_footer.html", 8)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 9
        echo "
\t\t<footer class=\"inventea-credits\">
\t\t\t";
        // line 11
        // line 12
        echo "\t\t\t<p class=\"footer-row\">
\t\t\t\t<span class=\"footer-copyright\">";
        // line 13
        echo ($context["CREDIT_LINE"] ?? null);
        echo "</span>
\t\t\t</p>
\t\t\t";
        // line 15
        if (($context["TRANSLATION_INFO"] ?? null)) {
            // line 16
            echo "\t\t\t<p class=\"footer-row\">
\t\t\t\t<span class=\"footer-copyright\">";
            // line 17
            echo ($context["TRANSLATION_INFO"] ?? null);
            echo "</span>
\t\t\t</p>
\t\t\t";
        }
        // line 20
        echo "\t\t\tStyle we_universal created by <a href=\"https://inventea.com/\" title=\"phpBB styles, HTML5 &amp; CSS3 templates\">INVENTEA</a> | <a href=\"https://nextgen.gt\"  title=\"phpBB styles\">nextgen</a>
\t\t\t";
        // line 21
        // line 22
        echo "\t\t\t<p class=\"footer-row\" role=\"menu\">
\t\t\t\t<a class=\"footer-link\" href=\"";
        // line 23
        echo ($context["U_PRIVACY"] ?? null);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY_LINK");
        echo "\" role=\"menuitem\">
\t\t\t\t\t<span class=\"footer-link-text\">";
        // line 24
        echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY_LINK");
        echo "</span>
\t\t\t\t</a>
\t\t\t\t|
\t\t\t\t<a class=\"footer-link\" href=\"";
        // line 27
        echo ($context["U_TERMS_USE"] ?? null);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_LINK");
        echo "\" role=\"menuitem\">
\t\t\t\t\t<span class=\"footer-link-text\">";
        // line 28
        echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_LINK");
        echo "</span>
\t\t\t\t</a>
\t\t\t</p>
\t\t\t";
        // line 31
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            // line 32
            echo "\t\t\t<p class=\"footer-row\">
\t\t\t\t<span class=\"footer-info\">";
            // line 33
            echo ($context["DEBUG_OUTPUT"] ?? null);
            echo "</span>
\t\t\t</p>
\t\t\t";
        }
        // line 36
        echo "\t\t</footer>
\t</div>
</div>

\t<div id=\"darkenwrapper\" class=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 40
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\" class=\"darken\">&nbsp;</div>
\t</div>

\t<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 44
        echo $this->extensions['phpbb\template\twig\extension']->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<a href=\"#\" class=\"alert_close\">
\t\t\t<i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
\t\t</a>
\t<h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
\t</div>
\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t<a href=\"#\" class=\"alert_close\">
\t\t\t<i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
\t\t</a>
\t\t<div class=\"alert_text\"></div>
\t</div>

<div>
\t<a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
\t";
        // line 59
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo ($context["RUN_CRON_TASK"] ?? null);
        }
        // line 60
        echo "</div>
</div>

<script src=\"";
        // line 63
        echo ($context["T_JQUERY_LINK"] ?? null);
        echo "\"></script>
";
        // line 64
        if (($context["S_ALLOW_CDN"] ?? null)) {
            echo "<script>window.jQuery || document.write('\\x3Cscript src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/javascript/jquery-3.6.0.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 65
        echo "<script src=\"";
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/core.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>
";
        // line 66
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 67
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 68
        $asset_file = "app.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 69
        echo "
";
        // line 70
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 71
            echo "\t<script>
\t\t(function(\$){
\t\t\tvar \$fa_cdn = \$('head').find('link[rel=\"stylesheet\"]').first(),
\t\t\t\t\$span = \$('<span class=\"fa\" style=\"display:none\"></span>').appendTo('body');
\t\t\tif (\$span.css('fontFamily') !== 'FontAwesome' ) {
\t\t\t\t\$fa_cdn.after('<link href=\"";
            // line 76
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/css/font-awesome.min.css\" rel=\"stylesheet\">');
\t\t\t\t\$fa_cdn.remove();
\t\t\t}
\t\t\t\$span.remove();
\t\t})(jQuery);
\t</script>
";
        }
        // line 83
        echo "
";
        // line 84
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 85
            echo "\t<script src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\"></script>
\t<script>
\t\tif (typeof window.cookieconsent === \"object\") {
\t\twindow.addEventListener(\"load\", function(){
\t\t\twindow.cookieconsent.initialise({
\t\t\t\t\"palette\": {
\t\t\t\t\t\"popup\": {
\t\t\t\t\t\t\"background\": \"#0F538A\"
\t\t\t\t\t},
\t\t\t\t\t\"button\": {
\t\t\t\t\t\t\"background\": \"#E5E5E5\"
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t\"theme\": \"classic\",
\t\t\t\t\"content\": {
\t\t\t\t\t\"message\": \"";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_MSG"), "js");
            echo "\",
\t\t\t\t\t\"dismiss\": \"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_OK"), "js");
            echo "\",
\t\t\t\t\t\"link\": \"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_INFO"), "js");
            echo "\",
\t\t\t\t\t\"href\": \"";
            // line 103
            echo ($context["UA_PRIVACY"] ?? null);
            echo "\"
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t\t}
\t</script>
";
        }
        // line 110
        echo "
";
        // line 111
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 112
        echo "
";
        // line 113
        if (($context["S_PLUPLOAD"] ?? null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 113)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 114
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SCRIPTS", [], "any", false, false, false, 114);
        echo "

";
        // line 116
        // line 117
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 117,  338 => 116,  333 => 114,  319 => 113,  316 => 112,  311 => 111,  308 => 110,  298 => 103,  294 => 102,  290 => 101,  286 => 100,  265 => 85,  263 => 84,  260 => 83,  250 => 76,  243 => 71,  241 => 70,  238 => 69,  224 => 68,  210 => 67,  196 => 66,  189 => 65,  181 => 64,  177 => 63,  172 => 60,  168 => 59,  148 => 44,  133 => 40,  127 => 36,  121 => 33,  118 => 32,  116 => 31,  110 => 28,  104 => 27,  98 => 24,  92 => 23,  89 => 22,  88 => 21,  85 => 20,  79 => 17,  76 => 16,  74 => 15,  69 => 13,  66 => 12,  65 => 11,  61 => 9,  49 => 8,  43 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overall_footer.html", "");
    }
}
