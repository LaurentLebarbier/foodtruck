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

/* admin/index.html.twig */
class __TwigTemplate_08e89c4764a953371025551888d589e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Administration";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"admin\">
        <div class=\"admin__box\">
            <div><h1 class=\"text-center\">Panneau d'Administration</h1></div>
            <div class=\"admin-button row\">
                <div class=\"admin__champs\">
                    <div class=\"btn-adm\">
                        <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateurs");
        echo "\"><button class=\"myButton\">Gestion des Utilisateurs</button> </a>
                        <p class=\"tooltiptext\">Pour gérer les utilisateurs : les supprimer ou modifier leur rôle</p>
                    </div>

                    <div class=\"btn-adm\">
                        <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_index");
        echo "\"><button class=\"myButton\">Gestion des Produits</button></a>
                        <p class=\"tooltiptext\">Pour gérer les produits : les créer, les supprimer, modifier leur prix, description ou image ainsi qu'en gérer la disponibilité</p>
                    </div>
                </div>
                <div class=\"admin__champs\">
                    <div class=\"btn-adm\">
                        <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_option_index");
        echo "\"><button class=\"myButton\">Gestion des Options produits</button></a>
                        <p class=\"tooltiptext\">Pour gérer les catégories produits : les créer, les supprimer ou modifier leur nom</p>
                    </div>
                    <div class=\"btn-adm\">
                        <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cart_index");
        echo "\"><button class=\"myButton\">Commandes</button></a>
                        <p class=\"tooltiptext\">Gérer les commandes en cours ou traitées</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 27,  113 => 23,  104 => 17,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title 'Administration' %}

{% block body %}
    <div class=\"admin\">
        <div class=\"admin__box\">
            <div><h1 class=\"text-center\">Panneau d'Administration</h1></div>
            <div class=\"admin-button row\">
                <div class=\"admin__champs\">
                    <div class=\"btn-adm\">
                        <a href=\"{{ path('admin_utilisateurs') }}\"><button class=\"myButton\">Gestion des Utilisateurs</button> </a>
                        <p class=\"tooltiptext\">Pour gérer les utilisateurs : les supprimer ou modifier leur rôle</p>
                    </div>

                    <div class=\"btn-adm\">
                        <a href=\"{{ path('admin_produits_index') }}\"><button class=\"myButton\">Gestion des Produits</button></a>
                        <p class=\"tooltiptext\">Pour gérer les produits : les créer, les supprimer, modifier leur prix, description ou image ainsi qu'en gérer la disponibilité</p>
                    </div>
                </div>
                <div class=\"admin__champs\">
                    <div class=\"btn-adm\">
                        <a href=\"{{ path('admin_option_index') }}\"><button class=\"myButton\">Gestion des Options produits</button></a>
                        <p class=\"tooltiptext\">Pour gérer les catégories produits : les créer, les supprimer ou modifier leur nom</p>
                    </div>
                    <div class=\"btn-adm\">
                        <a href=\"{{ path('admin_cart_index') }}\"><button class=\"myButton\">Commandes</button></a>
                        <p class=\"tooltiptext\">Gérer les commandes en cours ou traitées</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "admin/index.html.twig", "/var/www/html/foodtruck/templates/admin/index.html.twig");
    }
}
