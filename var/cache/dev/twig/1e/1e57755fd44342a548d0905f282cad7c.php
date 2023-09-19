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
class __TwigTemplate_2096d97ed0bd0e8677fec1c58479586e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 9
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("user");
        echo "
    ";
        // line 10
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
            echo "                            <li>
                                ";
            // line 27
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 28
                echo "                                    <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_index");
                echo "\" class=\"lien\">Mon compte</a>
                                ";
            }
            // line 30
            echo "                            </li>
                            <li>
                                ";
            // line 32
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 33
                echo "                                    <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
                echo "\" class=\"lien\">Administration /</a>
                                ";
            }
            // line 35
            echo "                                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MODO")) {
                // line 36
                echo "                                    <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_index");
                echo "\" class=\"lien\">Modération</a>
                                ";
            }
            // line 38
            echo "                            </li>
                        ";
        }
        // line 40
        echo "                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <header class=\"header-burger\"><h1 class=\"header-title\">Mon profil</h1><div id=\"menu-button\"
                                                                           class=\"close\"></div></header>
    <nav id=\"menu-burger\" class=\"\">
        <ul>
            <li><a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("indexpage");
        echo "\" class=\"lien\">Accueil</a></li>
            <li><a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit");
        echo "\" id=\"1\" class=\"lien\">Notre carte</a></li>
            <li><a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_index");
        echo "\" id=\"4\" class=\"lien\">Contact</a></li>
            ";
        // line 53
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 54
            echo "                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_index");
            echo "\" class=\"lien\">Mon compte</a></li>
                ";
            // line 55
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 56
                echo "                    <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
                echo "\" class=\"lien\">Administration</a></li>
                ";
            }
            // line 58
            echo "                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MODO")) {
                // line 59
                echo "                    <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_index");
                echo "\" class=\"lien\">Modération</a></li>
                ";
            }
            // line 61
            echo "            ";
        }
        // line 62
        echo "        </ul>
    </nav>
    <section class=\"container\">
        <div class=\"container--width\">
            <div class=\"container__sidenav\">
                <div id=\"example-sidenav\" data-ax=\"sidenav\" class=\"sidenav shadow-1 large fixed white\">
                    <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_index");
        echo "\" class=\"sidenav-link \">Mon profil</a>
                    <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_history");
        echo "\" class=\"sidenav-link\">Mes commandes</a>
                    <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_modifier");
        echo "\" class=\"sidenav-link \">Modifier le profil</a>
                    <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_pass");
        echo "\" class=\"sidenav-link \">Modifier le mot de passe</a>
                </div>
            </div>
            <main>
                <!-- Code here the main content -->
                ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "            </main>
        </div>
    </section>
    <footer>
        <div>
            <p>@copyright Florian, Ludovic</p>
        </div>
        <div class=\"footer__img\">
            <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons8-instagram-80.png"), "html", null, true);
        echo "\" alt=\"logo instagram\">
            <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons8-facebook-entouré-80.png"), "html", null, true);
        echo "\" alt=\"logo facebook\">
        </div>
    </footer>
    ";
        // line 91
        $this->displayBlock('javascripts', $context, $blocks);
        // line 94
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    
</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mon profil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 76
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 77
        echo "
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  317 => 92,  307 => 91,  296 => 77,  286 => 76,  275 => 11,  265 => 10,  246 => 6,  229 => 94,  227 => 91,  221 => 88,  217 => 87,  207 => 79,  205 => 76,  197 => 71,  193 => 70,  189 => 69,  185 => 68,  177 => 62,  174 => 61,  168 => 59,  165 => 58,  159 => 56,  157 => 55,  152 => 54,  150 => 53,  146 => 52,  142 => 51,  138 => 50,  126 => 40,  122 => 38,  116 => 36,  113 => 35,  107 => 33,  105 => 32,  101 => 30,  95 => 28,  93 => 27,  90 => 26,  88 => 25,  84 => 24,  80 => 23,  76 => 22,  65 => 13,  63 => 10,  58 => 9,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Mon profil{% endblock %}</title>
    {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
    {{ encore_entry_link_tags('user') }}
    {% block stylesheets %}

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
                                {% if is_granted('ROLE_USER') %}
                                    <a href=\"{{ path('profil_index') }}\" class=\"lien\">Mon compte</a>
                                {% endif %}
                            </li>
                            <li>
                                {% if is_granted('ROLE_ADMIN') %}
                                    <a href=\"{{ path('admin_index') }}\" class=\"lien\">Administration /</a>
                                {% endif %}
                                {% if is_granted('ROLE_MODO') %}
                                    <a href=\"{{ path('admin_produits_index') }}\" class=\"lien\">Modération</a>
                                {% endif %}
                            </li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <header class=\"header-burger\"><h1 class=\"header-title\">Mon profil</h1><div id=\"menu-button\"
                                                                           class=\"close\"></div></header>
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
    <section class=\"container\">
        <div class=\"container--width\">
            <div class=\"container__sidenav\">
                <div id=\"example-sidenav\" data-ax=\"sidenav\" class=\"sidenav shadow-1 large fixed white\">
                    <a href=\"{{ path('profil_index') }}\" class=\"sidenav-link \">Mon profil</a>
                    <a href=\"{{ path('profil_history') }}\" class=\"sidenav-link\">Mes commandes</a>
                    <a href=\"{{ path('profil_modifier')}}\" class=\"sidenav-link \">Modifier le profil</a>
                    <a href=\"{{ path('profil_pass')}}\" class=\"sidenav-link \">Modifier le mot de passe</a>
                </div>
            </div>
            <main>
                <!-- Code here the main content -->
                {% block body %}

                {% endblock %}
            </main>
        </div>
    </section>
    <footer>
        <div>
            <p>@copyright Florian, Ludovic</p>
        </div>
        <div class=\"footer__img\">
            <img src=\"{{ asset(\"build/images/icons8-instagram-80.png\") }}\" alt=\"logo instagram\">
            <img src=\"{{ asset(\"build/images/icons8-facebook-entouré-80.png\") }}\" alt=\"logo facebook\">
        </div>
    </footer>
    {% block javascripts %}

    {% endblock %}
    {{ encore_entry_script_tags('app') }}
    
</body>

</html>
", "users.html.twig", "/var/www/html/foodtruck/templates/users.html.twig");
    }
}
