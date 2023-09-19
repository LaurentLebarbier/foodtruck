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
class __TwigTemplate_2e2ffd51f80e8cf7734edc28e30df20d3e1abd22eb6fc2f70c7f10de74811ad6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
