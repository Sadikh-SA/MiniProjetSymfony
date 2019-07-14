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
class __TwigTemplate_bba37f563a5e776d38bf009e5eb5758fe244c8d7e87958a2d3f9274361dbccac extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "    </head>
    <body>
        <style>
            .container{
                margin-top:3%;
            }

            #sousmenu{
                /*margin-top: -10%;*/
                display: none;
                position: absolute;
            }
            #sousmenu1{
                display: none;
                position: absolute;
            }

            ul li:hover #sousmenu {
                display: block;
                width: 12%; 
                margin-top: 2%;
                margin-left: 10%;
            }
            ul li:hover #sousmenu1 {
                display: block;
                float: left;
                margin-top: 2%;
                margin-left: 15%;
            }

            ul li:hover #sousmenu a 
            {
                display: block;
            }
            ul li:hover #sousmenu1 a 
            {
                display: block;
            }

            a{
                color: white;
            }


        </style>
        <div class=\"container\">

                <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
                        <a class=\"navbar-brand\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">ACCUEIL</a>
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                          <span class=\"navbar-toggler-icon\"></span>
                        </button>
                      
                        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                          <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerservice");
        echo "\">LISTER</a>
                                <ul id=\"sousmenu\" class=\"dropdown-menu\" x-placement=\"bottom-start\" style=\"position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);\">
                                    <li><a class=\"dropdown-item\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeremployer");
        echo "\">EMPLOYER</a></li>
                                    <li><a class=\"dropdown-item\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerservice");
        echo "\">SERVICE</a></li>
                                </ul>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addemployer");
        echo "\">AJOUTER</a>
                                <ul id=\"sousmenu1\" class=\"dropdown-menu\" x-placement=\"bottom-start\" style=\"position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);\">
                                    <li><a class=\"dropdown-item\" href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addemployer");
        echo "\">EMPLOYER</a></li>
                                    <li><a class=\"dropdown-item\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addservice");
        echo "\">SERVICE</a></li>
                                </div>
                            </li>
                          </ul>
                          <form class=\"form-inline my-2 my-lg-0\">
                            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
                            <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
                          </form>
                        </div>
                      </nav>

        </div>
        <div class=\"container\">
        ";
        // line 87
        $this->displayBlock('body', $context, $blocks);
        // line 92
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 93
        echo "        </div>
    </body>
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

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 88
        echo "            <div class=\"container\">

            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  240 => 92,  227 => 88,  217 => 87,  199 => 7,  180 => 5,  167 => 93,  164 => 92,  162 => 87,  146 => 74,  142 => 73,  137 => 71,  130 => 67,  126 => 66,  121 => 64,  110 => 56,  60 => 8,  58 => 7,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\">
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        <style>
            .container{
                margin-top:3%;
            }

            #sousmenu{
                /*margin-top: -10%;*/
                display: none;
                position: absolute;
            }
            #sousmenu1{
                display: none;
                position: absolute;
            }

            ul li:hover #sousmenu {
                display: block;
                width: 12%; 
                margin-top: 2%;
                margin-left: 10%;
            }
            ul li:hover #sousmenu1 {
                display: block;
                float: left;
                margin-top: 2%;
                margin-left: 15%;
            }

            ul li:hover #sousmenu a 
            {
                display: block;
            }
            ul li:hover #sousmenu1 a 
            {
                display: block;
            }

            a{
                color: white;
            }


        </style>
        <div class=\"container\">

                <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
                        <a class=\"navbar-brand\" href=\"{{path('accueil')}}\">ACCUEIL</a>
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                          <span class=\"navbar-toggler-icon\"></span>
                        </button>
                      
                        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                          <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{path('listerservice')}}\">LISTER</a>
                                <ul id=\"sousmenu\" class=\"dropdown-menu\" x-placement=\"bottom-start\" style=\"position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);\">
                                    <li><a class=\"dropdown-item\" href=\"{{path('listeremployer') }}\">EMPLOYER</a></li>
                                    <li><a class=\"dropdown-item\" href=\"{{path('listerservice') }}\">SERVICE</a></li>
                                </ul>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{path('addemployer')}}\">AJOUTER</a>
                                <ul id=\"sousmenu1\" class=\"dropdown-menu\" x-placement=\"bottom-start\" style=\"position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);\">
                                    <li><a class=\"dropdown-item\" href=\"{{path('addemployer') }}\">EMPLOYER</a></li>
                                    <li><a class=\"dropdown-item\" href=\"{{path('addservice') }}\">SERVICE</a></li>
                                </div>
                            </li>
                          </ul>
                          <form class=\"form-inline my-2 my-lg-0\">
                            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
                            <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
                          </form>
                        </div>
                      </nav>

        </div>
        <div class=\"container\">
        {% block body %}
            <div class=\"container\">

            </div>
        {% endblock %}
        {% block javascripts %}{% endblock %}
        </div>
    </body>
</html>
", "base.html.twig", "/var/www/html/SymfonyProjet1/templates/base.html.twig");
    }
}
