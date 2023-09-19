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
class __TwigTemplate_08840d8ca0582380996e45f1a0e5c3eb41cb17b36657a216246922719782582a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/cart/wait.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/cart/wait.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/cart/wait.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Commandes en cours ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <form action=\"#\" method=\"post\" name=\"form\">

            ";
        // line 8
        if ((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "                <div>
                    <div id=\"history\" class=\"history\">
                        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 11, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 12
                echo "                            <div class=\"form form-history\">
                                <div>
                                    <div class=\"orders__order\">
                                        <p class=\"col-1 commande-reference\">N° ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 15), "html", null, true);
                // line 16
                echo "</p>
                                        <p class=\"col-1 text-right\">";
                // line 17
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 17), "m/d/Y, H:i"), "html", null, true);
                echo "</p>
                                    </div>
                                    ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "orderProduits", [], "any", false, false, false, 19));
                foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                    // line 20
                    echo "                                        <div class=\"orders__order\">
                                            <p class=\"col-1\">";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "produits", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
                    echo "</p>
                                            <p class=\"order-qty\">";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "quantity", [], "any", false, false, false, 22), "html", null, true);
                    echo " x </p>
                                            <p>";
                    // line 23
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "produits", [], "any", false, false, false, 23), "prix", [], "any", false, false, false, 23), "html", null, true);
                    echo " €</p>
                                        </div>

                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                                    <div class=\"orders__order order-total\">
                                        <p>Total : ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "price", [], "any", false, false, false, 28), "html", null, true);
                echo " €</p>
                                    </div>
                                    <label for=\"check\">Commande traité</label>
                                    <input type=\"checkbox\" id=\"check\" name=\"check[]\" value=\"";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 31), "html", null, true);
                echo "\">
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                    </div>
                    <button type=\"submit\" class=\"myButton3\">Valider</button>
                    <a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cart_index");
            echo "\">Retour</a>
                </div>
            ";
        } else {
            // line 40
            echo "
            <div class=\"form center\">
                <p>Pas de commande en cours</p>
                <a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cart_index");
            echo "\" class=\"myButton3\">Retour</a>
            </div>

            ";
        }
        // line 47
        echo "
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  183 => 47,  176 => 43,  171 => 40,  165 => 37,  161 => 35,  151 => 31,  145 => 28,  142 => 27,  132 => 23,  128 => 22,  124 => 21,  121 => 20,  117 => 19,  112 => 17,  109 => 16,  107 => 15,  102 => 12,  98 => 11,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
