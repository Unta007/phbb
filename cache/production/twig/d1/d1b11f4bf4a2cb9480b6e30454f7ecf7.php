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

/* user_forgot_password.txt */
class __TwigTemplate_37d670865e3dcfd7654a5c5aabe561a1 extends \Twig\Template
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
        echo "Subject: Account password reset

Hello ";
        // line 3
        echo ($context["USERNAME"] ?? null);
        echo "

You are receiving this notification because you have requested to recover a forgotten password for your account on \"";
        // line 5
        echo ($context["SITENAME"] ?? null);
        echo "\".

To reset your password, please click the link provided below:

";
        // line 9
        echo ($context["U_RESET_PASSWORD"] ?? null);
        echo "

If you did not authorize the request you can ignore this email. Please contact the board administrator if you keep receiving it.

";
        // line 13
        echo ($context["EMAIL_SIG"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user_forgot_password.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user_forgot_password.txt", "");
    }
}
