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
class __TwigTemplate_44dff0baa8dd4941e79e95d602f73962 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 21, $this->source); })()), "sujet", [], "any", false, false, false, 21), "html", null, true);
        echo "</div>
                </td>
            </tr>
            <tr>
                <td align=\"center\" style=\"font-size:0px;padding:0 40px;word-break:break-word;\">
                    <div style=\"font-family:Roboto, Helvetica, Arial, sans-serif;
                                                font-size:14px;font-weight:400;line-height:21px;text-align:center;
                                                color:#000000;\">Contact: ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 28, $this->source); })()), "firstname", [], "any", false, false, false, 28), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 28, $this->source); })()), "lastname", [], "any", false, false, false, 28), "html", null, true);
        // line 29
        echo "</div>
                </td>
            </tr>
            <tr>
                <td align=\"center\" style=\"font-size:0px;padding:0 40px;word-break:break-word;\">
                    <div style=\"font-family:Roboto, Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:21px;text-align:center;color:#000000;\">Email: ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), "html", null, true);
        echo "</div>
                </td>
            </tr>
            <tr>
                <td align=\"center\" style=\"font-size:0px;padding:0 40px;word-break:break-word;\">
                    <div style=\"font-family:Roboto, Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:21px;text-align:center;color:#000000;\">Message:</div>
                    <div style=\"font-family:Roboto, Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:21px;text-align:center;color:#000000;\"> ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 40, $this->source); })()), "message", [], "any", false, false, false, 40), "html", null, true);
        echo "</div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  95 => 40,  86 => 34,  79 => 29,  75 => 28,  65 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
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
                    <div>{{ contact.sujet }}</div>
                </td>
            </tr>
            <tr>
                <td align=\"center\" style=\"font-size:0px;padding:0 40px;word-break:break-word;\">
                    <div style=\"font-family:Roboto, Helvetica, Arial, sans-serif;
                                                font-size:14px;font-weight:400;line-height:21px;text-align:center;
                                                color:#000000;\">Contact: {{ contact.firstname }} {{ contact.lastname
                        }}</div>
                </td>
            </tr>
            <tr>
                <td align=\"center\" style=\"font-size:0px;padding:0 40px;word-break:break-word;\">
                    <div style=\"font-family:Roboto, Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:21px;text-align:center;color:#000000;\">Email: {{ contact.email }}</div>
                </td>
            </tr>
            <tr>
                <td align=\"center\" style=\"font-size:0px;padding:0 40px;word-break:break-word;\">
                    <div style=\"font-family:Roboto, Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:21px;text-align:center;color:#000000;\">Message:</div>
                    <div style=\"font-family:Roboto, Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:21px;text-align:center;color:#000000;\"> {{ contact.message }}</div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</body>
</html>", "emails/contact.html.twig", "/var/www/html/foodtruck/templates/emails/contact.html.twig");
    }
}
