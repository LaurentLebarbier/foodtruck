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

/* profil/editpass.html.twig */
class __TwigTemplate_b5e3422a1538173d75d4943f1b907f93e235dbf8610cf5a8995dda82a529b41b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "users.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("users.html.twig", "profil/editpass.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    Modification du mot de passe
    ";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 5), "firstname", [], "any", false, false, false, 5) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5))) {
            // line 6
            echo "        de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6), "firstname", [], "any", false, false, false, 6), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6), "html", null, true);
            echo "
    ";
        } else {
            // line 8
            echo "        de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 8), "email", [], "any", false, false, false, 8), "html", null, true);
            echo "
    ";
        }
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    <div class=\"grix\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "error"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            echo "            <div class=\"col-2\">
                <div class=\"error\">";
            // line 16
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        <div class=\"col-4\">
            ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 20), "firstname", [], "any", false, false, false, 20) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20))) {
            // line 21
            echo "                <h1>Modification du mot de passe de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 21), "firstname", [], "any", false, false, false, 21), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</h1>
            ";
        } else {
            // line 23
            echo "                <h1>Modification du mot de passe de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 23), "email", [], "any", false, false, false, 23), "html", null, true);
            echo "</h1>
            ";
        }
        // line 25
        echo "        </div>
        <form  class=\"form\" method=\"post\">
            <div>
                <label for=\"old_mdp\">Ancien mot de passe : </label>
                <input type=\"password\" id=\"old_mdp\" name=\"old_mdp\"  required>
            </div>
            <div class=\"form-field\">
                <label for=\"mdp\">Mot de passe : </label>
                <input type=\"password\" id=\"mdp\" name=\"pass\"  required>
            </div>
            <div class=\"form-field\">
                <label for=\"mdp2\">Confirmer le mot de passe : </label>
                <input type=\"password\" id=\"mdp2\" name=\"pass2\"  required>
            </div>
            <button class=\"myButton3\">Valider</button>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "profil/editpass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 25,  108 => 23,  100 => 21,  98 => 20,  95 => 19,  86 => 16,  83 => 15,  79 => 14,  76 => 13,  72 => 12,  64 => 8,  56 => 6,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profil/editpass.html.twig", "/var/www/html/foodtruck/templates/profil/editpass.html.twig");
    }
}
