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

/* admin/cart/wait.html.twig */
class __TwigTemplate_1a9b9ea7ed2d3c76ee458bb534312004 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/cart/wait.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/cart/wait.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/cart/wait.html.twig", 1);
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

        echo "Commandes en cours ";
        
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
        echo "    <form action=\"#\" method=\"post\" name=\"form\">
            ";
        // line 7
        if ((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "                <div>
                    <div id=\"history\" class=\"history\">
                        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 11
                echo "                            <div class=\"form form-history\">
                                <div>
                                    <div class=\"orders__order\">
                                        <p class=\"col-1 commande-reference\">N° ";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 14), "html", null, true);
                // line 15
                echo "</p>
                                        <p class=\"col-1 text-right\">";
                // line 16
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 16), "m/d/Y, H:i"), "html", null, true);
                echo "</p>
                                    </div>
                                    ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "orderProduits", [], "any", false, false, false, 18));
                foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                    // line 19
                    echo "                                        <div class=\"orders__order\">
                                            <p class=\"col-1\">";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "produits", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
                    echo "</p>
                                            <p class=\"order-qty\">";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "quantity", [], "any", false, false, false, 21), "html", null, true);
                    echo " x </p>
                                            <p>";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "produits", [], "any", false, false, false, 22), "prix", [], "any", false, false, false, 22), "html", null, true);
                    echo " €</p>
                                        </div>

                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "                                    <div class=\"orders__order order-total\">
                                        <p>Total : ";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "price", [], "any", false, false, false, 27), "html", null, true);
                echo " €</p>
                                    </div>
                                    <label for=\"check\">Commande traité</label>
                                    <input type=\"checkbox\" id=\"check\" name=\"check[]\" value=\"";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 30), "html", null, true);
                echo "\">
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                    </div>
                    <button type=\"submit\" class=\"myButton3\">Valider</button>
                    <a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cart_index");
            echo "\">Retour</a>
                </div>
            ";
        } else {
            // line 39
            echo "
            <div class=\"form center\">
                <p>Pas de commande en cours</p>
                <a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cart_index");
            echo "\" class=\"myButton3\">Retour</a>
            </div>

            ";
        }
        // line 46
        echo "
    </form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/cart/wait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 46,  175 => 42,  170 => 39,  164 => 36,  160 => 34,  150 => 30,  144 => 27,  141 => 26,  131 => 22,  127 => 21,  123 => 20,  120 => 19,  116 => 18,  111 => 16,  108 => 15,  106 => 14,  101 => 11,  97 => 10,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title 'Commandes en cours ' %}

{% block body %}
    <form action=\"#\" method=\"post\" name=\"form\">
            {% if orders %}
                <div>
                    <div id=\"history\" class=\"history\">
                        {% for order in orders %}
                            <div class=\"form form-history\">
                                <div>
                                    <div class=\"orders__order\">
                                        <p class=\"col-1 commande-reference\">N° {{ order.reference
                                                }}</p>
                                        <p class=\"col-1 text-right\">{{ order.createdAt|date(\"m/d/Y, H:i\") }}</p>
                                    </div>
                                    {% for produit in order.orderProduits %}
                                        <div class=\"orders__order\">
                                            <p class=\"col-1\">{{ produit.produits.name }}</p>
                                            <p class=\"order-qty\">{{ produit.quantity }} x </p>
                                            <p>{{ produit.produits.prix }} €</p>
                                        </div>

                                    {% endfor %}
                                    <div class=\"orders__order order-total\">
                                        <p>Total : {{ order.price }} €</p>
                                    </div>
                                    <label for=\"check\">Commande traité</label>
                                    <input type=\"checkbox\" id=\"check\" name=\"check[]\" value=\"{{ order.reference}}\">
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                    <button type=\"submit\" class=\"myButton3\">Valider</button>
                    <a href=\"{{ path('admin_cart_index') }}\">Retour</a>
                </div>
            {% else %}

            <div class=\"form center\">
                <p>Pas de commande en cours</p>
                <a href=\"{{ path('admin_cart_index') }}\" class=\"myButton3\">Retour</a>
            </div>

            {% endif %}

    </form>
{% endblock %}", "admin/cart/wait.html.twig", "/var/www/html/foodtruck/templates/admin/cart/wait.html.twig");
    }
}
