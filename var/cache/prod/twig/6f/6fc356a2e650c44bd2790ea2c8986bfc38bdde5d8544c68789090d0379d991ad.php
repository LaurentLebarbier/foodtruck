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

/* admin/users/users.html.twig */
class __TwigTemplate_4a6ee4622285682fae61a2c81271de2c55baca59e8d5fa99c78acc255867465b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/users/users.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Liste des utilisateurs";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Liste des utilisateurs</h1>
    <table>
        <thead>
            <th>ID</th>
            <th>Email</th>
            <th>Rôles</th>
            <th>Action</th>
        </thead>
        <tbody>
            ";
        // line 16
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 17
            echo "                <tr>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 22
                echo "                            ";
                if ((0 === twig_compare($context["role"], "ROLE_ADMIN"))) {
                    // line 23
                    echo "                                Administrateur
                            ";
                } elseif ((0 === twig_compare(                // line 24
$context["role"], "ROLE_ABONNE"))) {
                    // line 25
                    echo "                                Abonné
                            ";
                } elseif ((0 === twig_compare(                // line 26
$context["role"], "ROLE_MODO"))) {
                    // line 27
                    echo "                                Modérateur
                            ";
                } else {
                    // line 29
                    echo "                                Utilisateur
                            ";
                }
                // line 31
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                    </td>
                    <td class=\"modifier\">
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_modifier_utilisateurs", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\"> <button class=\"myButton3\">Modifier</button> </a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "                <tr>
                    <td>Il n'y a pas d'utilisateurs d'inscrit</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>
    <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        echo "\"><button class=\"myButton3\">Retour</button></a>

";
    }

    public function getTemplateName()
    {
        return "admin/users/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 44,  140 => 42,  131 => 38,  122 => 34,  118 => 32,  112 => 31,  108 => 29,  104 => 27,  102 => 26,  99 => 25,  97 => 24,  94 => 23,  91 => 22,  87 => 21,  82 => 19,  78 => 18,  75 => 17,  69 => 16,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/users/users.html.twig", "/var/www/html/foodtruck/templates/admin/users/users.html.twig");
    }
}
