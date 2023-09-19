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
class __TwigTemplate_4873da572678248ec670c60992684fcd118d4d302ae1ff8f1452956a5794cf92 extends Template
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
        echo "<div class=\"card mb-4 ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "options", [], "any", false, false, false, 1));
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
        if (twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "base64", [], "any", false, false, false, 4)) {
            // line 5
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "base64", [], "any", false, false, false, 5), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["slug" => twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "slug", [], "any", false, false, false, 11), "id" => twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\">
                ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "
            </a>
        </h5>
        <p class=\"card-text\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "description", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
        <p>Catégorie(s): ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "options", [], "any", false, false, false, 16));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "prix", [], "any", false, false, false, 19), "html", null, true);
        echo " €
        </div>
        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "id", [], "any", false, false, false, 21)]), "html", null, true);
        echo "\">Ajouter</a>
    </div>
</div>";
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
        return array (  99 => 21,  94 => 19,  90 => 17,  80 => 16,  76 => 15,  70 => 12,  66 => 11,  63 => 10,  54 => 5,  52 => 4,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "produit/_produit.html.twig", "/var/www/html/foodtruck/templates/produit/_produit.html.twig");
    }
}
