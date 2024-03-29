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

/* service/listeremployer.html.twig */
class __TwigTemplate_a923bf1c8e1f0d0e75be910a320e7fcc67cc2e7be93d60c6abc57cfd59b3bd3c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/listeremployer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/listeremployer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "service/listeremployer.html.twig", 1);
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

        echo "Hello ServiceController!
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<style>
        .milieu {
            width: 100%;
            margin: 0 auto;
            margin-top: 5%;
            text-align: center;
        }
    </style>
<section class=\"milieu\">
        <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                <!--<thead class=\"thead-dark\">-->
                  <tr>
                    <th scope=\"col\">MATRICULE</th>
                    <th scope=\"col\">NOM_COMPLET</th>
                    <th scope=\"col\">Date De Naissance</th>
                    <th scope=\"col\">ADRESSE</th>
                    <th scope=\"col\">NUMÉRO CNI</th>
                    <th scope=\"col\">SALAIRE</th>
                    <th scope=\"col\">SERVICE</th>
                    <th scope=\"col\">MODIFIER</th>
                    <th scope=\"col\">SUPPRIMER</th>
                  </tr>
                <!--</thead>
                <tbody>-->
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employer"]) || array_key_exists("employer", $context) ? $context["employer"] : (function () { throw new RuntimeError('Variable "employer" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["employ"]) {
            // line 33
            echo "    
            <tr>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employ"], "Matricule", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employ"], "Nomcomplet", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employ"], "Ddn", [], "any", false, false, false, 37), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employ"], "Adresse", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employ"], "Cni", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employ"], "Salaire", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["employ"], "idService", [], "any", false, false, false, 41), "libelle", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td><button type=\"submit\" class=\"btn btn-primary\"><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editemployer", ["id" => twig_get_attribute($this->env, $this->source, $context["employ"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">Modifier</a></button></td>
                <td><button type=\"submit\" class=\"btn btn-danger\"><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source, $context["employ"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">Supprimer</a></button></td>
            </tr>
        
   
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "<!--</tbody>-->
</table>
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "service/listeremployer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 48,  157 => 43,  153 => 42,  149 => 41,  145 => 40,  141 => 39,  137 => 38,  133 => 37,  129 => 36,  125 => 35,  121 => 33,  117 => 32,  91 => 8,  81 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ServiceController!
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">

{% endblock %}
{% block body %}
<style>
        .milieu {
            width: 100%;
            margin: 0 auto;
            margin-top: 5%;
            text-align: center;
        }
    </style>
<section class=\"milieu\">
        <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                <!--<thead class=\"thead-dark\">-->
                  <tr>
                    <th scope=\"col\">MATRICULE</th>
                    <th scope=\"col\">NOM_COMPLET</th>
                    <th scope=\"col\">Date De Naissance</th>
                    <th scope=\"col\">ADRESSE</th>
                    <th scope=\"col\">NUMÉRO CNI</th>
                    <th scope=\"col\">SALAIRE</th>
                    <th scope=\"col\">SERVICE</th>
                    <th scope=\"col\">MODIFIER</th>
                    <th scope=\"col\">SUPPRIMER</th>
                  </tr>
                <!--</thead>
                <tbody>-->
    {% for employ in employer %}
    
            <tr>
                <td>{{ employ.Matricule }}</td>
                <td>{{ employ.Nomcomplet }}</td>
                <td>{{ employ.Ddn | date('Y-m-d')}}</td>
                <td>{{ employ.Adresse }}</td>
                <td>{{ employ.Cni}}</td>
                <td>{{ employ.Salaire }}</td>
                <td>{{ employ.idService.libelle }}</td>
                <td><button type=\"submit\" class=\"btn btn-primary\"><a href=\"{{path('editemployer', {'id': employ.id})}}\">Modifier</a></button></td>
                <td><button type=\"submit\" class=\"btn btn-danger\"><a href=\"{{path('delete', {'id': employ.id})}}\">Supprimer</a></button></td>
            </tr>
        
   
    {% endfor %}
<!--</tbody>-->
</table>
</section>

{% endblock %}
", "service/listeremployer.html.twig", "/var/www/html/SymfonyProjet1/templates/service/listeremployer.html.twig");
    }
}
