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

/* projet/index.html.twig */
class __TwigTemplate_7b8980575713c5753ca926db3ed836155dfbf88241255649de6736104f589c63 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/index.html.twig"));

        // line 1
        yield Twig\Extension\CoreExtension::include($this->env, $context, "content/navbar.html.twig");
        yield "
";
        // line 2
        yield Twig\Extension\CoreExtension::include($this->env, $context, "content/slidebar.html.twig");
        yield "

<style>
    .table-responsive {
        overflow-x: auto; /* Enable horizontal scrolling */
        -webkit-overflow-scrolling: touch; /* Smooth scrolling on touch devices */
    }
    .table {
        min-width: 100%; /* Ensure table takes up at least the container's width */
    }
</style>

";
        // line 14
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        yield "<div class=\"pcoded-content\">
             
    <div class=\"container mt-4\">
    <h1>Projet </h1>
    <div class=\"table-responsive\">

 
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Domaine</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new RuntimeError('Variable "projets" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 34
            yield "            <tr>
                <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "nom", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "description", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "domaine", [], "any", false, false, false, 38), "nomDomaine", [], "any", false, false, false, 38), "html", null, true);
            yield "
                <td>
                    <a href=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projet_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\"class=\"btn btn-primary btn-sm\" title=\"View\"><i class=\"fas fa-eye\"></i></a>
                    <a href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projet_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\"class=\"btn btn-warning btn-sm\" title=\"Edit\"><i class=\"fas fa-edit\"></i></a>
                    <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projet_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\"class=\"btn btn-danger btn-sm\" title=\"Delete\"><i class=\"fas fa-trash\"></i></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            yield "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "        </tbody>
    </table>

</div>
    </div>
</div>
";
        // line 56
        yield Twig\Extension\CoreExtension::include($this->env, $context, "content/data.html.twig");
        yield "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "projet/index.html.twig";
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
        return array (  154 => 56,  146 => 50,  137 => 46,  128 => 42,  124 => 41,  120 => 40,  115 => 38,  111 => 37,  107 => 36,  103 => 35,  100 => 34,  95 => 33,  75 => 15,  61 => 14,  46 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{include('content/navbar.html.twig')}}
{{include('content/slidebar.html.twig')}}

<style>
    .table-responsive {
        overflow-x: auto; /* Enable horizontal scrolling */
        -webkit-overflow-scrolling: touch; /* Smooth scrolling on touch devices */
    }
    .table {
        min-width: 100%; /* Ensure table takes up at least the container's width */
    }
</style>

{% block body %}
<div class=\"pcoded-content\">
             
    <div class=\"container mt-4\">
    <h1>Projet </h1>
    <div class=\"table-responsive\">

 
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Domaine</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for projet in projets %}
            <tr>
                <td>{{ projet.id }}</td>
                <td>{{ projet.nom }}</td>
                <td>{{ projet.description }}</td>
                <td>{{projet.domaine.nomDomaine}}
                <td>
                    <a href=\"{{ path('app_projet_show', {'id': projet.id}) }}\"class=\"btn btn-primary btn-sm\" title=\"View\"><i class=\"fas fa-eye\"></i></a>
                    <a href=\"{{ path('app_projet_edit', {'id': projet.id}) }}\"class=\"btn btn-warning btn-sm\" title=\"Edit\"><i class=\"fas fa-edit\"></i></a>
                    <a href=\"{{ path('app_projet_delete', {'id': projet.id}) }}\"class=\"btn btn-danger btn-sm\" title=\"Delete\"><i class=\"fas fa-trash\"></i></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

</div>
    </div>
</div>
{{include('content/data.html.twig')}}
{% endblock %}
", "projet/index.html.twig", "C:\\Users\\SYNS-MANAGER\\Documents\\GitHub\\pmanalysis\\templates\\projet\\index.html.twig");
    }
}
