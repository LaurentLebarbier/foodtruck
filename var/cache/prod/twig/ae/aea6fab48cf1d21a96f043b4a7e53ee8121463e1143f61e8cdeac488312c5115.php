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

/* emails/contact.html.twig */
class __TwigTemplate_14fb58e9cc7398c877032b7a6df2d0f8533bc3b47aaca63bd2a119a27d6f7aef extends Template
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
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Demande de contact</title>
</head>
<body>
    <div>
        <table>
            <tbody>
            <tr>
                <td align=\"center\" style=\"font-size:0px;padding:0px;padding-bottom:20px;word-break:break-word;\">
                    <div style=\"font-family:Alice, Helvetica, Arial, sans-serif;font-size:26px;font-weight:400;line-height:30px;text-align:center;color:#000000;\">Prise de contact</div>
                </td>
            </tr>
            <tr>
                <td>
                    <div>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "sujet", [], "any", false, false, false, 21), "html", null, true);
        echo "</div>
                </td>
            </tr>
            <tr>
                <td align=\"center\" style=\"font-size:0px;padding:0 40px;word-break:break-word;\">
                    <div style=\"font-family:Roboto, Helvetica, Arial, sans-serif;
                                                font-size:14px;font-weight:400;line-height:21px;text-align:center;
                                                color:#000000;\">Contact: ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "firstname", [], "any", false, false, false, 28), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "lastname", [], "any", false, false, false, 28), "html", null, true);
        // line 29
        echo "</div>
                </td>
            </tr>
            <tr>
                <td align=\"center\" style=\"font-size:0px;padding:0 40px;word-break:break-word;\">
                    <div style=\"font-family:Roboto, Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:21px;text-align:center;color:#000000;\">Email: ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "email", [], "any", false, false, false, 34), "html", null, true);
        echo "</div>
                </td>
            </tr>
            <tr>
                <td align=\"center\" style=\"font-size:0px;padding:0 40px;word-break:break-word;\">
                    <div style=\"font-family:Roboto, Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:21px;text-align:center;color:#000000;\">Message:</div>
                    <div style=\"font-family:Roboto, Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:21px;text-align:center;color:#000000;\"> ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "message", [], "any", false, false, false, 40), "html", null, true);
        echo "</div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "emails/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 40,  80 => 34,  73 => 29,  69 => 28,  59 => 21,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "emails/contact.html.twig", "/var/www/html/foodtruck/templates/emails/contact.html.twig");
    }
}
