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

/* users.html.twig */
class __TwigTemplate_0bd914576de7561c37983089153d1c1a34e0ad736689a512b1be136e4775edb2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 8
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "

</head>
<body class=\"layout with-sidenav\">
    <header>
        <nav class=\"navbar maincolor\">
            <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("indexpage");
        echo "\" class=\"navbar-brand\">Accueil</a>
            <div class=\"navbar-menu ml-auto mr-5\">
                <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit");
        echo "\" id=\"1\" class=\"mr-5\">Notre carte</a>
                <a href=\"#contact\" id=\"4\" class=\"mr-5\">Contact</a>
                ";
        // line 22
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 23
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
            echo "\" class=\"mr-5\">Administration</a>
                ";
        }
        // line 25
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MODO")) {
            // line 26
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_index");
            echo "\" class=\"mr-5\">Modération</a>
                ";
        }
        // line 28
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 29
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_index");
            echo "\" class=\"mr-5\">Mon compte</a>
                ";
        }
        // line 31
        echo "            </div>
        </nav>
    </header>
    <div id=\"example-sidenav\" data-ax=\"sidenav\" class=\"sidenav shadow-1 large fixed white\">
        <div class=\"sidenav-header\">
            <button data-target=\"example-sidenav\" class=\"sidenav-trigger\"><i class=\"fas fa-times\"></i></button>
        </div>
        <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_index");
        echo "\" class=\"sidenav-link \">Mon profil</a>
        <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_history");
        echo "\" class=\"sidenav-link\">Mes commandes</a>
        <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_modifier");
        echo "\" class=\"sidenav-link \">Modifier le profil</a>
        <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_pass");
        echo "\" class=\"sidenav-link \">Modifier le mot de passe</a>
        <a href=\"#\" class=\"sidenav-link\">Aide</a>
    </div>
    <main>
        <!-- Code here the main content -->
        <button data-target=\"example-sidenav\"
                class=\"btn rounded-1 press amaranth dark-1 sidenav-trigger hide-md-up\">
            Menu
        </button>
        ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "    </main>
    <footer class=\"footer maincolor\">
    </footer>
    ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
        echo "</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mon profil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@1.3.3/dist/css/axentix.min.css\">
        ";
        // line 10
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("user");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "        <script src=\"https://cdn.jsdelivr.net/npm/axentix@1.3.3/dist/js/axentix.min.js\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 57,  226 => 56,  215 => 51,  205 => 50,  193 => 10,  190 => 9,  180 => 8,  161 => 5,  148 => 59,  146 => 56,  141 => 53,  139 => 50,  127 => 41,  123 => 40,  119 => 39,  115 => 38,  106 => 31,  100 => 29,  97 => 28,  91 => 26,  88 => 25,  82 => 23,  80 => 22,  75 => 20,  70 => 18,  60 => 12,  57 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Mon profil{% endblock %}</title>
    {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@1.3.3/dist/css/axentix.min.css\">
        {{ encore_entry_link_tags('user') }}
    {% endblock %}
    {{ encore_entry_script_tags('app') }}

</head>
<body class=\"layout with-sidenav\">
    <header>
        <nav class=\"navbar maincolor\">
            <a href=\"{{ path('indexpage') }}\" class=\"navbar-brand\">Accueil</a>
            <div class=\"navbar-menu ml-auto mr-5\">
                <a href=\"{{ path('produit')}}\" id=\"1\" class=\"mr-5\">Notre carte</a>
                <a href=\"#contact\" id=\"4\" class=\"mr-5\">Contact</a>
                {% if is_granted('ROLE_ADMIN') %}
                    <a href=\"{{ path('admin_index') }}\" class=\"mr-5\">Administration</a>
                {% endif %}
                {% if is_granted('ROLE_MODO') %}
                    <a href=\"{{ path('admin_produits_index') }}\" class=\"mr-5\">Modération</a>
                {% endif %}
                {% if is_granted('ROLE_USER') %}
                    <a href=\"{{ path('profil_index') }}\" class=\"mr-5\">Mon compte</a>
                {% endif %}
            </div>
        </nav>
    </header>
    <div id=\"example-sidenav\" data-ax=\"sidenav\" class=\"sidenav shadow-1 large fixed white\">
        <div class=\"sidenav-header\">
            <button data-target=\"example-sidenav\" class=\"sidenav-trigger\"><i class=\"fas fa-times\"></i></button>
        </div>
        <a href=\"{{ path('profil_index') }}\" class=\"sidenav-link \">Mon profil</a>
        <a href=\"{{ path('profil_history') }}\" class=\"sidenav-link\">Mes commandes</a>
        <a href=\"{{ path('profil_modifier')}}\" class=\"sidenav-link \">Modifier le profil</a>
        <a href=\"{{ path('profil_pass')}}\" class=\"sidenav-link \">Modifier le mot de passe</a>
        <a href=\"#\" class=\"sidenav-link\">Aide</a>
    </div>
    <main>
        <!-- Code here the main content -->
        <button data-target=\"example-sidenav\"
                class=\"btn rounded-1 press amaranth dark-1 sidenav-trigger hide-md-up\">
            Menu
        </button>
        {% block body %}

        {% endblock %}
    </main>
    <footer class=\"footer maincolor\">
    </footer>
    {% block javascripts %}
        <script src=\"https://cdn.jsdelivr.net/npm/axentix@1.3.3/dist/js/axentix.min.js\"></script>
    {% endblock %}
</body>

</html>
", "users.html.twig", "/var/www/html/foodtruck/templates/users.html.twig");
    }
}
