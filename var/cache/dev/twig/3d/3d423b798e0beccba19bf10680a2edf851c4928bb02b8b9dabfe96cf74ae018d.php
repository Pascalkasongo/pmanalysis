<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* projet/show.html.twig */
class __TwigTemplate_de829e6768e5862c3f1f04bb62a8162d5ddaa7d75aa2447545d730b884750116 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "projet/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Détails du Projet";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <style>
        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #ddd;
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: 500;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-sm {
            font-size: 0.875rem;
            padding: 0.25rem 0.5rem;
            line-height: 1.5;
            border-radius: 0.2rem;
        }
    </style>

    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">Détails du Projet</h1>

        <div class=\"card\">
            <div class=\"card-header\">
                <h5 class=\"card-title\">Informations du Projet</h5>
            </div>
            <div class=\"card-body\">
                <table class=\"table table-bordered\">
                    <tbody>
                        <tr>
                            <th scope=\"row\">Id</th>
                            <td>";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Nom</th>
                            <td>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 55, $this->source); })()), "nom", [], "any", false, false, false, 55), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Description</th>
                            <td>";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 59, $this->source); })()), "description", [], "any", false, false, false, 59), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Date de Début</th>
                            <td>";
        // line 63
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 63, $this->source); })()), "dateFrom", [], "any", false, false, false, 63)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 63, $this->source); })()), "dateFrom", [], "any", false, false, false, 63), "d-m-Y H:i"), "html", null, true)) : (yield "Non spécifiée"));
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Date de Mise à Jour</th>
                            <td>";
        // line 67
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 67, $this->source); })()), "dateUp", [], "any", false, false, false, 67)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 67, $this->source); })()), "dateUp", [], "any", false, false, false, 67), "d-m-Y H:i"), "html", null, true)) : (yield "Non spécifiée"));
        yield "</td>
                        </tr>
                    </tbody>
                </table>

                <div class=\"d-flex justify-content-between\">
                    <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projet_index");
        yield "\" class=\"btn btn-secondary\">Retour à la liste</a>
                    
                    ";
        // line 75
        yield Twig\Extension\CoreExtension::include($this->env, $context, "projet/_delete_form.html.twig");
        yield "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "projet/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  164 => 75,  159 => 73,  150 => 67,  143 => 63,  136 => 59,  129 => 55,  122 => 51,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails du Projet{% endblock %}

{% block body %}
    <style>
        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #ddd;
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: 500;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-sm {
            font-size: 0.875rem;
            padding: 0.25rem 0.5rem;
            line-height: 1.5;
            border-radius: 0.2rem;
        }
    </style>

    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">Détails du Projet</h1>

        <div class=\"card\">
            <div class=\"card-header\">
                <h5 class=\"card-title\">Informations du Projet</h5>
            </div>
            <div class=\"card-body\">
                <table class=\"table table-bordered\">
                    <tbody>
                        <tr>
                            <th scope=\"row\">Id</th>
                            <td>{{ projet.id }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Nom</th>
                            <td>{{ projet.nom }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Description</th>
                            <td>{{ projet.description }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Date de Début</th>
                            <td>{{ projet.dateFrom ? projet.dateFrom|date('d-m-Y H:i') : 'Non spécifiée' }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Date de Mise à Jour</th>
                            <td>{{ projet.dateUp ? projet.dateUp|date('d-m-Y H:i') : 'Non spécifiée' }}</td>
                        </tr>
                    </tbody>
                </table>

                <div class=\"d-flex justify-content-between\">
                    <a href=\"{{ path('app_projet_index') }}\" class=\"btn btn-secondary\">Retour à la liste</a>
                    
                    {{ include('projet/_delete_form.html.twig') }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "projet/show.html.twig", "C:\\Users\\SYNS-MANAGER\\Documents\\GitHub\\pmanalysis\\templates\\projet\\show.html.twig");
    }
}
