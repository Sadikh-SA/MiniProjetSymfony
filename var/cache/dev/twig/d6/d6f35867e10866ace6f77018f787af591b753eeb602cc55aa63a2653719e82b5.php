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

/* service/accueil.html.twig */
class __TwigTemplate_7439f053c22d135a6b96791564cd560324c5c7155a2d8d12c0efd34c624b69aa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/accueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "service/accueil.html.twig", 1);
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
        echo "    

    <h1>Bienvenue Cher visiteur</h1>
    <p>
\t\t\t\t\t\tJe m'appelle Ababacar Sadikh GUEYE, j'ai 22 ans et j'habite à Guédiawaye.
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tJe suis diplômé d'une licence professionnelle en génie logiciel et système d'information obtenue à l'École Supérieure Polytechnique de Dakar (ESP ex:ENSUT) et j'ai réussi au concours Sonatel academy en developpement web organisé par Sonatel.
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tDans quelques mois, je serai un développeur web agrée. 
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tCurieux, autodidacte et rigoureux je dispose également des connaissances en sécurité et web services.
\t\t\t\t\t</p>
\t\t\t\t\t<p>N'hésitez pas à parcourir mon <a href=\"https://github.com/Sadikh-SA\" style=\"color: blue\">GitHub</a> pour voir mes projets réalisés .</p>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "service/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
    

    <h1>Bienvenue Cher visiteur</h1>
    <p>
\t\t\t\t\t\tJe m'appelle Ababacar Sadikh GUEYE, j'ai 22 ans et j'habite à Guédiawaye.
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tJe suis diplômé d'une licence professionnelle en génie logiciel et système d'information obtenue à l'École Supérieure Polytechnique de Dakar (ESP ex:ENSUT) et j'ai réussi au concours Sonatel academy en developpement web organisé par Sonatel.
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tDans quelques mois, je serai un développeur web agrée. 
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tCurieux, autodidacte et rigoureux je dispose également des connaissances en sécurité et web services.
\t\t\t\t\t</p>
\t\t\t\t\t<p>N'hésitez pas à parcourir mon <a href=\"https://github.com/Sadikh-SA\" style=\"color: blue\">GitHub</a> pour voir mes projets réalisés .</p>

{% endblock %}", "service/accueil.html.twig", "/var/www/html/SymfonyProjet1/templates/service/accueil.html.twig");
    }
}
