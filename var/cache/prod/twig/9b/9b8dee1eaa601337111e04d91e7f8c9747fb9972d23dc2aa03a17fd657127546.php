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

/* produit/show.html.twig */
class __TwigTemplate_b8739ec587b64c86072c29c569fb3e0eb0ad6637897b94851991db001035f3de extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "produit/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"jumbotron\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "base64", [], "any", false, false, false, 10)) {
            // line 11
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "base64", [], "any", false, false, false, 11), "html", null, true);
            echo "\" alt=\"img\"
                             style=\"width: 100%;
                height:
                auto\">
                    ";
        }
        // line 16
        echo "                </div>
                <div class=\"col-md-4\">
                    <h1>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</h1>
                    <div class=\"text-primary\" style=\"font-size: 4rem; font-weight: bold;\"> ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "prix", [], "any", false, false, false, 19), "html", null, true);
        echo " €</div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container mt-4\">
        <p>
            ";
        // line 26
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "description", [], "any", false, false, false, 26), "html", null, true));
        echo "
        </p>
            <div class=\"col-md-4\">
                <h2>Catégories</h2>
                <ul class=\"list-group\">
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "options", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 32
            echo "                    <li class=\"list-group-item\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 32), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                </ul>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "produit/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  105 => 32,  101 => 31,  93 => 26,  83 => 19,  79 => 18,  75 => 16,  66 => 11,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "produit/show.html.twig", "/var/www/html/foodtruck/templates/produit/show.html.twig");
    }
}
