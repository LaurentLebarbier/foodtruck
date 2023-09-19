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

/* pages/home.html.twig */
class __TwigTemplate_7807ffe0b3118e83c1787c579325ad607675ec7f93a1e7e2890175754f1d89f7 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "        <div class=\"app\">
            <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/foodtruck.jpg"), "html", null, true);
        echo "\" alt=\"img foodtruck\">
            ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 8)) {
            // line 9
            echo "                <div class=\"app__user\">
                    <p>
                        Bonjour
                        ";
            // line 12
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 12), "firstname", [], "any", false, false, false, 12) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12))) {
                // line 13
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 13), "firstname", [], "any", false, false, false, 13), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13), "html", null, true);
                echo "
                        ";
            } else {
                // line 15
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 15), "email", [], "any", false, false, false, 15), "html", null, true);
                echo "
                        ";
            }
            // line 17
            echo "                    </p>
                    <a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" ><button class=\"myButton\">Se déconnecter</button> </a>
                </div>
            ";
        } else {
            // line 21
            echo "            <div class=\"login\">
                <form action=\"/login\">
                    <button class=\"myButton\"type=\"submit\">Se connecter</button>
                </form>
                <form action=\"/inscription\">
                    <button class=\"myButton2\" type=\"submit\">S'inscrire</button>
                </form>
            </div>
            ";
        }
        // line 30
        echo "        </div>

    <div class=\"app-presentation\">
        <p>
            Bienvenue sur le FoodBus DAQ de Luxeuil
        </p>
    </div>

    <div class=\"container\">
        <h2>Nos nouveautés</h2>
        <div id=\"root\"></div>
        <div class=\"row flex\">
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 43
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["produit"], "base64", [], "any", false, false, false, 43)) {
                // line 44
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 44), "slug" => twig_get_attribute($this->env, $this->source, $context["produit"], "slug", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\" class=\"col-3\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">
                                   ";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "name", [], "any", false, false, false, 48), "html", null, true);
                echo "
                                </h5>
                                <div class=\"col\">
                                    <img src=\"";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "base64", [], "any", false, false, false, 51), "html", null, true);
                echo "\" alt=\"img\">
                                </div>
                                <p class=\"card-text\">";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 53), "html", null, true);
                echo "</p>
                                <div class=\"text-primary\" style=\"font-weight: bold; font-size: 2rem;\">";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 54), "html", null, true);
                echo "
                                    €</div>
                            </div>
                        </div>
                    </a>
                ";
            }
            // line 60
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </div>
    </div>
";
    }

    // line 64
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "pages/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 64,  168 => 61,  162 => 60,  153 => 54,  149 => 53,  144 => 51,  138 => 48,  130 => 44,  127 => 43,  123 => 42,  109 => 30,  98 => 21,  92 => 18,  89 => 17,  83 => 15,  75 => 13,  73 => 12,  68 => 9,  66 => 8,  62 => 7,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/home.html.twig", "/var/www/html/foodtruck/templates/pages/home.html.twig");
    }
}
