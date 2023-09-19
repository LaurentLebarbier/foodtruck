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
class __TwigTemplate_4be4b3b8864c3f95bb69b2ec30e2232724e54b986aebffd2d9dc540adddca56f extends Template
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
        return "users.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("users.html.twig", "profil/history.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Historique de commande";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <div>
    ";
        // line 8
        $context["orders"] = ($context["commandes"] ?? null);
        // line 9
        echo "    ";
        $context["countOrders"] = 0;
        // line 10
        echo "    ";
        $context["orderLength"] = twig_length_filter($this->env, ($context["orders"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["commandes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["commands"]) {
            echo " 
             ";
            // line 18
            if ((0 === twig_compare(($context["countOrders"] ?? null), ($context["countCommands"] ?? null)))) {
                echo "    
                <section class=\"section-commande\">
                ";
                // line 20
                $context["countCommands"] = (($context["countCommands"] ?? null) + 4);
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
            $context["countOrders"] = (($context["countOrders"] ?? null) + 1);
            // line 43
            echo "                ";
            if (((0 === twig_compare(($context["countOrders"] ?? null), ($context["countCommands"] ?? null))) || (0 === twig_compare(($context["orderLength"] ?? null), ($context["countOrders"] ?? null))))) {
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
        // line 47
        echo "               
 
    

        
    </div>
    ";
    }

    // line 57
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "    ";
        // line 59
        echo "
";
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
        return array (  180 => 59,  178 => 58,  174 => 57,  164 => 47,  157 => 45,  150 => 43,  148 => 42,  140 => 37,  137 => 36,  128 => 33,  124 => 32,  120 => 31,  117 => 30,  113 => 29,  108 => 27,  104 => 26,  98 => 22,  95 => 21,  93 => 20,  88 => 18,  82 => 17,  76 => 13,  74 => 12,  71 => 11,  68 => 10,  65 => 9,  63 => 8,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profil/history.html.twig", "/var/www/html/foodtruck/templates/profil/history.html.twig");
    }
}
