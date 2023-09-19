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

/* profil/history.html.twig */
class __TwigTemplate_e27be7ca69e11a1ba840e6dfd956952500f1537759f5d70c426553f05db6dfb4 extends Template
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
        return "users.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/history.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/history.html.twig"));

        $this->parent = $this->loadTemplate("users.html.twig", "profil/history.html.twig", 1);
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

        echo "Historique de commande";
        
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
        echo "
    <div>
    ";
        // line 8
        $context["orders"] = (isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 8, $this->source); })());
        // line 9
        echo "    ";
        $context["countOrders"] = 0;
        // line 10
        echo "    ";
        $context["orderLength"] = twig_length_filter($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 10, $this->source); })()));
        // line 11
        echo "
    ";
        // line 12
        $context["countCommands"] = 0;
        // line 13
        echo "

        
   
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commands"]) {
            echo " 
             ";
            // line 18
            if ((0 === twig_compare((isset($context["countOrders"]) || array_key_exists("countOrders", $context) ? $context["countOrders"] : (function () { throw new RuntimeError('Variable "countOrders" does not exist.', 18, $this->source); })()), (isset($context["countCommands"]) || array_key_exists("countCommands", $context) ? $context["countCommands"] : (function () { throw new RuntimeError('Variable "countCommands" does not exist.', 18, $this->source); })())))) {
                echo "    
                <section class=\"section-commande\">
                ";
                // line 20
                $context["countCommands"] = ((isset($context["countCommands"]) || array_key_exists("countCommands", $context) ? $context["countCommands"] : (function () { throw new RuntimeError('Variable "countCommands" does not exist.', 20, $this->source); })()) + 4);
                // line 21
                echo "            ";
            }
            // line 22
            echo "                <div id=\"history\" class=\"history\">                    
                    <div class=\"form form-history\">
                        <div>
                            <div class=\"orders__order\">
                                <p class=\"col-1 commande-reference\">N° ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commands"], "reference", [], "any", false, false, false, 26), "html", null, true);
            echo "</p>
                                <p class=\"col-1 text-right\">";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commands"], "createdAt", [], "any", false, false, false, 27), "m/d/Y, H:i"), "html", null, true);
            echo "</p>
                            </div>
                            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["commands"], "orderProduits", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 30
                echo "                            <div class=\"orders__order\">
                                <p class=\"col-1\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "produits", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
                echo "</p>
                                <p class=\"order-qty\">";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "quantity", [], "any", false, false, false, 32), "html", null, true);
                echo " x </p>
                                <p>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "produits", [], "any", false, false, false, 33), "prix", [], "any", false, false, false, 33), "html", null, true);
                echo " €</p>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                            <div class=\"orders__order order-total\">
                            <p>Total : ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commands"], "price", [], "any", false, false, false, 37), "html", null, true);
            echo " €</p>
                            </div>
                        </div>
                    </div>
                </div>
                ";
            // line 42
            $context["countOrders"] = ((isset($context["countOrders"]) || array_key_exists("countOrders", $context) ? $context["countOrders"] : (function () { throw new RuntimeError('Variable "countOrders" does not exist.', 42, $this->source); })()) + 1);
            // line 43
            echo "                ";
            if (((0 === twig_compare((isset($context["countOrders"]) || array_key_exists("countOrders", $context) ? $context["countOrders"] : (function () { throw new RuntimeError('Variable "countOrders" does not exist.', 43, $this->source); })()), (isset($context["countCommands"]) || array_key_exists("countCommands", $context) ? $context["countCommands"] : (function () { throw new RuntimeError('Variable "countCommands" does not exist.', 43, $this->source); })()))) || (0 === twig_compare((isset($context["orderLength"]) || array_key_exists("orderLength", $context) ? $context["orderLength"] : (function () { throw new RuntimeError('Variable "orderLength" does not exist.', 43, $this->source); })()), (isset($context["countOrders"]) || array_key_exists("countOrders", $context) ? $context["countOrders"] : (function () { throw new RuntimeError('Variable "countOrders" does not exist.', 43, $this->source); })()))))) {
                echo "       
                    </section>
                ";
            }
            // line 45
            echo "                             
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commands'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profil/history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 45,  179 => 43,  177 => 42,  169 => 37,  166 => 36,  157 => 33,  153 => 32,  149 => 31,  146 => 30,  142 => 29,  137 => 27,  133 => 26,  127 => 22,  124 => 21,  122 => 20,  117 => 18,  111 => 17,  105 => 13,  103 => 12,  100 => 11,  97 => 10,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'users.html.twig' %}

{% block title 'Historique de commande' %}

{% block body %}

    <div>
    {% set orders = commandes %}
    {% set countOrders = 0 %}
    {% set orderLength = orders|length %}

    {% set countCommands = 0 %}


        
   
            {% for commands in commandes %} 
             {% if countOrders == countCommands %}    
                <section class=\"section-commande\">
                {% set countCommands =  countCommands+4 %}
            {% endif %}
                <div id=\"history\" class=\"history\">                    
                    <div class=\"form form-history\">
                        <div>
                            <div class=\"orders__order\">
                                <p class=\"col-1 commande-reference\">N° {{ commands.reference }}</p>
                                <p class=\"col-1 text-right\">{{ commands.createdAt|date(\"m/d/Y, H:i\") }}</p>
                            </div>
                            {% for produit in commands.orderProduits %}
                            <div class=\"orders__order\">
                                <p class=\"col-1\">{{ produit.produits.name }}</p>
                                <p class=\"order-qty\">{{ produit.quantity }} x </p>
                                <p>{{ produit.produits.prix }} €</p>
                            </div>
                            {% endfor %}
                            <div class=\"orders__order order-total\">
                            <p>Total : {{ commands.price }} €</p>
                            </div>
                        </div>
                    </div>
                </div>
                {% set countOrders = countOrders+1 %}
                {% if countOrders == countCommands or orderLength == countOrders %}       
                    </section>
                {% endif %}                             
            {% endfor %}
{% endblock %}


", "profil/history.html.twig", "/var/www/html/foodtruck/templates/profil/history.html.twig");
    }
}
