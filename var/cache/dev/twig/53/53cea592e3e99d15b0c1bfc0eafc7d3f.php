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

/* produit/_produit.html.twig */
class __TwigTemplate_ccbb4c541f15f9b4336806e2d5518467 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/_produit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/_produit.html.twig"));

        // line 1
        echo "<div class=\"card mb-4 ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 1, $this->source); })()), "options", [], "any", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2
        echo "\">
    <div class=\"card-body\">
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 4, $this->source); })()), "base64", [], "any", false, false, false, 4)) {
            // line 5
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 5, $this->source); })()), "base64", [], "any", false, false, false, 5), "html", null, true);
            echo "\" alt=\"card-img-top\"
                 style=\"width: 100%;
            height:
            auto\">
        ";
        }
        // line 10
        echo "        <h5 class=\"card-title\">
            <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 11, $this->source); })()), "slug", [], "any", false, false, false, 11), "id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\">
                ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "
            </a>
        </h5>
        <p class=\"card-text\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 15, $this->source); })()), "description", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
        <p>Catégorie(s): ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 16, $this->source); })()), "options", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 16), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</p>
        <div class=\"text-primary\" style=\"font-size: 2rem; font-weight: bold\">
            ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 19, $this->source); })()), "prix", [], "any", false, false, false, 19), "html", null, true);
        echo " €
        </div>
        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
        echo "\">Ajouter</a>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "produit/_produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 21,  100 => 19,  96 => 17,  86 => 16,  82 => 15,  76 => 12,  72 => 11,  69 => 10,  60 => 5,  58 => 4,  54 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card mb-4 {% for option in produit.options %}{{ option.name }} {%
    endfor %}\">
    <div class=\"card-body\">
        {% if produit.base64 %}
            <img src=\"{{ produit.base64 }}\" alt=\"card-img-top\"
                 style=\"width: 100%;
            height:
            auto\">
        {% endif %}
        <h5 class=\"card-title\">
            <a href=\"{{ path('produit_show', {slug: produit.slug, id: produit.id}) }}\">
                {{ produit.name }}
            </a>
        </h5>
        <p class=\"card-text\">{{ produit.description }}</p>
        <p>Catégorie(s): {% for option in produit.options %}{{ option.name }} {%
                endfor %}</p>
        <div class=\"text-primary\" style=\"font-size: 2rem; font-weight: bold\">
            {{ produit.prix }} €
        </div>
        <a href=\"{{ path(\"cart_add\", {id: produit.id}) }}\">Ajouter</a>
    </div>
</div>", "produit/_produit.html.twig", "/var/www/html/foodtruck/templates/produit/_produit.html.twig");
    }
}
