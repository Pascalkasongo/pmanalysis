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

/* client/index.html.twig */
class __TwigTemplate_5405c5e9e9bf56bae0383b9c9d6cfc96a816842cc8f5dfe1a893b1da20a51cef extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        // line 1
        yield Twig\Extension\CoreExtension::include($this->env, $context, "content/navbar.html.twig");
        yield "
";
        // line 2
        yield Twig\Extension\CoreExtension::include($this->env, $context, "content/slidebar.html.twig");
        yield "
";
        // line 4
        yield "<style>
    .table-responsive {
        overflow-x: auto; /* Enable horizontal scrolling */
        -webkit-overflow-scrolling: touch; /* Smooth scrolling on touch devices */
    }
    .table {
        min-width: 100%; /* Ensure table takes up at least the container's width */
    }
</style>
";
        // line 13
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        yield "<div class=\"pcoded-content\">
             
<div class=\"container mt-4\">
    <h1>Client(s)</h1>
<div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Nom_client</th>
                <th>Prenom_client</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 33
            yield "            <tr>
                <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "email", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomClient", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "prenomClient", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "adresse", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "telephone", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                    <td>
                    <a href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\" title=\"View\"><i class=\"fas fa-eye\"></i></a>
                    <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\" title=\"Edit\"><i class=\"fas fa-edit\"></i></a>
                    <a href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\" class=\"btn btn-danger btn-sm\" title=\"Delete\"><i class=\"fas fa-trash\"></i></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            yield "            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
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
        return "client/index.html.twig";
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
        return array (  161 => 56,  154 => 51,  145 => 47,  136 => 43,  132 => 42,  128 => 41,  123 => 39,  119 => 38,  115 => 37,  111 => 36,  107 => 35,  103 => 34,  100 => 33,  95 => 32,  75 => 14,  61 => 13,  50 => 4,  46 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('content/navbar.html.twig') }}
{{ include('content/slidebar.html.twig') }}
{# {% block title %}Client index{% endblock %} #}
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
    <h1>Client(s)</h1>
<div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Nom_client</th>
                <th>Prenom_client</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for client in clients %}
            <tr>
                <td>{{ client.id }}</td>
                <td>{{ client.email }}</td>
                <td>{{ client.nomClient }}</td>
                <td>{{ client.prenomClient }}</td>
                <td>{{ client.adresse }}</td>
                <td>{{ client.telephone }}</td>
                    <td>
                    <a href=\"{{ path('app_client_show', {'id': client.id}) }}\" class=\"btn btn-primary btn-sm\" title=\"View\"><i class=\"fas fa-eye\"></i></a>
                    <a href=\"{{ path('app_client_edit', {'id': client.id}) }}\" class=\"btn btn-warning btn-sm\" title=\"Edit\"><i class=\"fas fa-edit\"></i></a>
                    <a href=\"{{ path('app_client_delete', {'id': client.id}) }}\" class=\"btn btn-danger btn-sm\" title=\"Delete\"><i class=\"fas fa-trash\"></i></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
</div>
</div>
    {{ include('content/data.html.twig') }}
{% endblock %}
", "client/index.html.twig", "C:\\Users\\SYNS-MANAGER\\Documents\\GitHub\\pmanalysis\\templates\\client\\index.html.twig");
    }
}
