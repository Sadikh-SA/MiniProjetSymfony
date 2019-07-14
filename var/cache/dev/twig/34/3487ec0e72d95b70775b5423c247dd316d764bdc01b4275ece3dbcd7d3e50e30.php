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

/* service/addemployer.html.twig */
class __TwigTemplate_d1978aafd667f0ca0fbc1ebd67469aff9d55d2b00091de299df61b189f4d3c6b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/addemployer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/addemployer.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formEmployer"]) || array_key_exists("formEmployer", $context) ? $context["formEmployer"] : (function () { throw new RuntimeError('Variable "formEmployer" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "service/addemployer.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2>    CRÉATION D'UN EMPLOYER </h2>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEmployer"]) || array_key_exists("formEmployer", $context) ? $context["formEmployer"] : (function () { throw new RuntimeError('Variable "formEmployer" does not exist.', 6, $this->source); })()), 'form_start');
        echo "

        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formEmployer"]) || array_key_exists("formEmployer", $context) ? $context["formEmployer"] : (function () { throw new RuntimeError('Variable "formEmployer" does not exist.', 8, $this->source); })()), 'row', ["attr" => ["placeholder" => "Matricule de l'Employer"]]);
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formEmployer"]) || array_key_exists("formEmployer", $context) ? $context["formEmployer"] : (function () { throw new RuntimeError('Variable "formEmployer" does not exist.', 9, $this->source); })()), 'row', ["attr" => ["placeholder" => "Nom Complet de l'Employer"]]);
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formEmployer"]) || array_key_exists("formEmployer", $context) ? $context["formEmployer"] : (function () { throw new RuntimeError('Variable "formEmployer" does not exist.', 10, $this->source); })()), 'row', ["attr" => ["placeholder" => "Date De Naissance de l'Employer"]]);
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formEmployer"]) || array_key_exists("formEmployer", $context) ? $context["formEmployer"] : (function () { throw new RuntimeError('Variable "formEmployer" does not exist.', 11, $this->source); })()), 'row', ["attr" => ["placeholder" => "Adresse de l'Employer"]]);
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formEmployer"]) || array_key_exists("formEmployer", $context) ? $context["formEmployer"] : (function () { throw new RuntimeError('Variable "formEmployer" does not exist.', 12, $this->source); })()), 'row', ["attr" => ["placeholder" => "Numéro CNI de l'Employer"]]);
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formEmployer"]) || array_key_exists("formEmployer", $context) ? $context["formEmployer"] : (function () { throw new RuntimeError('Variable "formEmployer" does not exist.', 13, $this->source); })()), 'row', ["attr" => ["placeholder" => "Salaire de l'Employer"]]);
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formEmployer"]) || array_key_exists("formEmployer", $context) ? $context["formEmployer"] : (function () { throw new RuntimeError('Variable "formEmployer" does not exist.', 14, $this->source); })()), 'row', ["attr" => ["placeholder" => "Service de l'Employer"]]);
        echo "

        <button type=\"submit\" class=\"btn btn-success\"> 
            ";
        // line 17
        if ((isset($context["editer"]) || array_key_exists("editer", $context) ? $context["editer"] : (function () { throw new RuntimeError('Variable "editer" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "                MODIFIER EMPLOYER
            ";
        } else {
            // line 20
            echo "                AJOUTER EMPLOYER
            ";
        }
        // line 22
        echo "        </button>
    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEmployer"]) || array_key_exists("formEmployer", $context) ? $context["formEmployer"] : (function () { throw new RuntimeError('Variable "formEmployer" does not exist.', 23, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "service/addemployer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 23,  120 => 22,  116 => 20,  112 => 18,  110 => 17,  104 => 14,  100 => 13,  96 => 12,  92 => 11,  88 => 10,  84 => 9,  80 => 8,  75 => 6,  71 => 4,  61 => 3,  50 => 1,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% form_theme formEmployer 'bootstrap_4_layout.html.twig' %}
{% block body %}
    <h2>    CRÉATION D'UN EMPLOYER </h2>

    {{ form_start(formEmployer) }}

        {{ form_row(formEmployer, {'attr': {'placeholder': \"Matricule de l'Employer\"}}) }}
        {{ form_row(formEmployer, {'attr': {'placeholder': \"Nom Complet de l'Employer\"}}) }}
        {{ form_row(formEmployer, {'attr': {'placeholder': \"Date De Naissance de l'Employer\"}}) }}
        {{ form_row(formEmployer, {'attr': {'placeholder': \"Adresse de l'Employer\"}}) }}
        {{ form_row(formEmployer, {'attr': {'placeholder': \"Numéro CNI de l'Employer\"}}) }}
        {{ form_row(formEmployer, {'attr': {'placeholder': \"Salaire de l'Employer\"}}) }}
        {{ form_row(formEmployer, {'attr': {'placeholder': \"Service de l'Employer\"}}) }}

        <button type=\"submit\" class=\"btn btn-success\"> 
            {% if editer %}
                MODIFIER EMPLOYER
            {% else %}
                AJOUTER EMPLOYER
            {% endif %}
        </button>
    {{ form_end(formEmployer) }}

{% endblock %}", "service/addemployer.html.twig", "/var/www/html/SymfonyProjet1/templates/service/addemployer.html.twig");
    }
}
