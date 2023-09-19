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

/* profil/pagination.html.twig */
class __TwigTemplate_36a87d20f10cf2d93ee78569f737607c060f15876a8100bb2d961b9add41185b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ((1 === twig_compare(($context["pageCount"] ?? null), 1))) {
            // line 2
            echo "    <nav>
        ";
            // line 3
            $context["classAlign"] = (( !array_key_exists("align", $context)) ? ("") : ((((0 === twig_compare(($context["align"] ?? null), "center"))) ? (" justify-content-center") : ((((0 === twig_compare(($context["align"] ?? null), "right"))) ? (" justify-content-end") : (""))))));
            // line 4
            echo "        ";
            $context["classSize"] = (( !array_key_exists("size", $context)) ? ("") : ((((0 === twig_compare(($context["size"] ?? null), "large"))) ? (" pagination-lg") : ((((0 === twig_compare(($context["size"] ?? null), "small"))) ? (" pagination-sm") : (""))))));
            // line 5
            echo "        <ul class=\"pagination";
            echo twig_escape_filter($this->env, ($context["classAlign"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, ($context["classSize"] ?? null), "html", null, true);
            echo "\">

            ";
            // line 7
            if (array_key_exists("previous", $context)) {
                // line 8
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" rel=\"prev\" href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
                </li>
            ";
            } else {
                // line 12
                echo "                <li class=\"page-item disabled\">
                    <span class=\"page-link\">&laquo;&nbsp;";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</span>
                </li>
            ";
            }
            // line 16
            echo "
            ";
            // line 17
            if ((1 === twig_compare(($context["startPage"] ?? null), 1))) {
                // line 18
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => 1])), "html", null, true);
                echo "\">1</a>
                </li>
                ";
                // line 21
                if ((0 === twig_compare(($context["startPage"] ?? null), 3))) {
                    // line 22
                    echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => 2])), "html", null, true);
                    echo "\">2</a>
                    </li>
                ";
                } elseif ((0 !== twig_compare(                // line 25
($context["startPage"] ?? null), 2))) {
                    // line 26
                    echo "                    <li class=\"page-item disabled\">
                        <span class=\"page-link\">&hellip;</span>
                    </li>
                ";
                }
                // line 30
                echo "            ";
            }
            // line 31
            echo "
            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 33
                echo "                ";
                if ((0 !== twig_compare($context["page"], ($context["current"] ?? null)))) {
                    // line 34
                    echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                    </li>
                ";
                } else {
                    // line 38
                    echo "                    <li class=\"page-item active\">
                        <span class=\"page-link\">";
                    // line 39
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
                    </li>
                ";
                }
                // line 42
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "
            ";
            // line 45
            if ((1 === twig_compare(($context["pageCount"] ?? null), ($context["endPage"] ?? null)))) {
                // line 46
                echo "                ";
                if ((1 === twig_compare(($context["pageCount"] ?? null), (($context["endPage"] ?? null) + 1)))) {
                    // line 47
                    echo "                    ";
                    if ((1 === twig_compare(($context["pageCount"] ?? null), (($context["endPage"] ?? null) + 2)))) {
                        // line 48
                        echo "                        <li class=\"page-item disabled\">
                            <span class=\"page-link\">&hellip;</span>
                        </li>
                    ";
                    } else {
                        // line 52
                        echo "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                        // line 53
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => (($context["pageCount"] ?? null) - 1)])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (($context["pageCount"] ?? null) - 1), "html", null, true);
                        echo "</a>
                        </li>
                    ";
                    }
                    // line 56
                    echo "                ";
                }
                // line 57
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["pageCount"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["pageCount"] ?? null), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            // line 61
            echo "
            ";
            // line 62
            if (array_key_exists("next", $context)) {
                // line 63
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" rel=\"next\" href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</a>
                </li>
            ";
            } else {
                // line 67
                echo "                <li  class=\"page-item disabled\">
                    <span class=\"page-link\">";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</span>
                </li>
            ";
            }
            // line 71
            echo "        </ul>
    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "profil/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 71,  208 => 68,  205 => 67,  197 => 64,  194 => 63,  192 => 62,  189 => 61,  181 => 58,  178 => 57,  175 => 56,  167 => 53,  164 => 52,  158 => 48,  155 => 47,  152 => 46,  150 => 45,  147 => 44,  140 => 42,  134 => 39,  131 => 38,  123 => 35,  120 => 34,  117 => 33,  113 => 32,  110 => 31,  107 => 30,  101 => 26,  99 => 25,  94 => 23,  91 => 22,  89 => 21,  84 => 19,  81 => 18,  79 => 17,  76 => 16,  70 => 13,  67 => 12,  59 => 9,  56 => 8,  54 => 7,  47 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profil/pagination.html.twig", "/var/www/html/foodtruck/templates/profil/pagination.html.twig");
    }
}
