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
class __TwigTemplate_01cadd677664017e6e7dc900685d5730e32bd07e6863bb18f316c736f90a4308 extends Template
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
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
    }

    // line 61
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "  
        ";
    }

    // line 75
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "

        ";
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
        return array (  230 => 76,  226 => 75,  221 => 62,  217 => 61,  210 => 11,  206 => 10,  199 => 7,  191 => 79,  189 => 75,  185 => 74,  178 => 70,  174 => 69,  167 => 64,  165 => 61,  161 => 59,  158 => 58,  152 => 56,  149 => 55,  143 => 53,  141 => 52,  136 => 51,  134 => 50,  130 => 49,  126 => 48,  122 => 47,  111 => 38,  104 => 35,  101 => 34,  96 => 32,  93 => 31,  90 => 30,  84 => 27,  81 => 26,  79 => 25,  75 => 24,  71 => 23,  67 => 22,  56 => 13,  53 => 10,  49 => 7,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/html/foodtruck/templates/base.html.twig");
    }
}
