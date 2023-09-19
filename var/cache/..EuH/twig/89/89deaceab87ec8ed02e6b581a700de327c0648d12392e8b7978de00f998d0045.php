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

/* base.html.twig */
class __TwigTemplate_26906fadc8ffa654b87b58d2881069f551a49be3e83687e5c0e601cff44f4940 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"theme-color\" content=\"#d31e44\"/>
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 10
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "

    </head> 
    <body>
      <header class=\"header-desktop\">
        <nav>
            <div class=\"nav\">
                <div class=\"menu\">
                    <ul id=\"menu\" class=\"nav__ul\">
                        <li> <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("indexpage");
        echo "\" class=\"lien\">Accueil</a></li>
                        <li> <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit");
        echo "\" id=\"1\" class=\"lien\">Notre carte</a> </li>
                        <li> <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_index");
        echo "\" id=\"4\" class=\"lien\">Contact</a> </li>
                    ";
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 26
            echo "                        <li>
                            <a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_index");
            echo "\" class=\"lien\">Mon compte</a>
                        </li>
                    ";
        }
        // line 30
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 31
            echo "                        <li>
                            <a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
            echo "\" class=\"lien\">Administration /</a>
                            ";
        }
        // line 34
        echo "                            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MODO")) {
            // line 35
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_index");
            echo "\" class=\"lien\">Modération</a>
                        </li>
                    ";
        }
        // line 38
        echo "                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <header class=\"header-burger\"><h1 class=\"header-title\">FoodBus DAQ</h1><div id=\"menu-button\" class=\"close\"></div></header>
        <nav id=\"menu-burger\" class=\"\">
            <ul>
                <li><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("indexpage");
        echo "\" class=\"lien\">Accueil</a></li>
                <li><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit");
        echo "\" id=\"1\" class=\"lien\">Notre carte</a></li>
                <li><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_index");
        echo "\" id=\"4\" class=\"lien\">Contact</a></li>
                ";
        // line 50
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 51
            echo "                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_index");
            echo "\" class=\"lien\">Mon compte</a></li>
                 ";
            // line 52
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 53
                echo "                <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
                echo "\" class=\"lien\">Administration</a></li>
                ";
            }
            // line 55
            echo "                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MODO")) {
                // line 56
                echo "                <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_index");
                echo "\" class=\"lien\">Modération</a></li>
                ";
            }
            // line 58
            echo "                ";
        }
        // line 59
        echo "            </ul>
        </nav>
        ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "        <footer>
            <div>
                <p>@copyright Florian, Ludovic</p>
            </div>
            <div class=\"footer__img\">
                <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons8-instagram-80.png"), "html", null, true);
        echo "\" alt=\"logo instagram\">
                <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons8-facebook-entouré-80.png"), "html", null, true);
        echo "\" alt=\"logo facebook\">
            </div>
        </footer>

            ";
        // line 74
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        ";
        // line 75
        $this->displayBlock('javascripts', $context, $blocks);
        // line 79
        echo "        
    </body>
    
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 62
        echo "  
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
        echo "

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 76,  274 => 75,  263 => 62,  253 => 61,  240 => 11,  230 => 10,  211 => 7,  197 => 79,  195 => 75,  191 => 74,  184 => 70,  180 => 69,  173 => 64,  171 => 61,  167 => 59,  164 => 58,  158 => 56,  155 => 55,  149 => 53,  147 => 52,  142 => 51,  140 => 50,  136 => 49,  132 => 48,  128 => 47,  117 => 38,  110 => 35,  107 => 34,  102 => 32,  99 => 31,  96 => 30,  90 => 27,  87 => 26,  85 => 25,  81 => 24,  77 => 23,  73 => 22,  62 => 13,  59 => 10,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"theme-color\" content=\"#d31e44\"/>
        <title>{% block title %}Accueil{% endblock %}</title>
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}


    </head> 
    <body>
      <header class=\"header-desktop\">
        <nav>
            <div class=\"nav\">
                <div class=\"menu\">
                    <ul id=\"menu\" class=\"nav__ul\">
                        <li> <a href=\"{{ path('indexpage') }}\" class=\"lien\">Accueil</a></li>
                        <li> <a href=\"{{ path('produit')}}\" id=\"1\" class=\"lien\">Notre carte</a> </li>
                        <li> <a href=\"{{ path('contact_index') }}\" id=\"4\" class=\"lien\">Contact</a> </li>
                    {% if is_granted('ROLE_USER') %}
                        <li>
                            <a href=\"{{ path('profil_index') }}\" class=\"lien\">Mon compte</a>
                        </li>
                    {% endif %}
                    {% if is_granted('ROLE_ADMIN') %}
                        <li>
                            <a href=\"{{ path('admin_index') }}\" class=\"lien\">Administration /</a>
                            {% endif %}
                            {% if is_granted('ROLE_MODO') %}
                            <a href=\"{{ path('admin_produits_index') }}\" class=\"lien\">Modération</a>
                        </li>
                    {% endif %}
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <header class=\"header-burger\"><h1 class=\"header-title\">FoodBus DAQ</h1><div id=\"menu-button\" class=\"close\"></div></header>
        <nav id=\"menu-burger\" class=\"\">
            <ul>
                <li><a href=\"{{ path('indexpage') }}\" class=\"lien\">Accueil</a></li>
                <li><a href=\"{{ path('produit')}}\" id=\"1\" class=\"lien\">Notre carte</a></li>
                <li><a href=\"{{ path('contact_index') }}\" id=\"4\" class=\"lien\">Contact</a></li>
                {% if is_granted('ROLE_USER') %}
                <li><a href=\"{{ path('profil_index') }}\" class=\"lien\">Mon compte</a></li>
                 {% if is_granted('ROLE_ADMIN') %}
                <li><a href=\"{{ path('admin_index') }}\" class=\"lien\">Administration</a></li>
                {% endif %}
                {% if is_granted('ROLE_MODO') %}
                <li><a href=\"{{ path('admin_produits_index') }}\" class=\"lien\">Modération</a></li>
                {% endif %}
                {% endif %}
            </ul>
        </nav>
        {% block body %}
  
        {% endblock %}
        <footer>
            <div>
                <p>@copyright Florian, Ludovic</p>
            </div>
            <div class=\"footer__img\">
                <img src=\"{{ asset(\"build/images/icons8-instagram-80.png\") }}\" alt=\"logo instagram\">
                <img src=\"{{ asset(\"build/images/icons8-facebook-entouré-80.png\") }}\" alt=\"logo facebook\">
            </div>
        </footer>

            {{ encore_entry_script_tags('app') }}
        {% block javascripts %}


        {% endblock %}
        
    </body>
    
</html>
", "base.html.twig", "/var/www/html/foodtruck/templates/base.html.twig");
    }
}
