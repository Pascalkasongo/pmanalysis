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

/* tache/index.html.twig */
class __TwigTemplate_95bc4c2e4dc5cc34240b4a4c277add1244eb9a35db65038b1c20bdbe60016853 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/index.html.twig"));

        // line 1
        yield Twig\Extension\CoreExtension::include($this->env, $context, "content/navbar.html.twig");
        yield "
";
        // line 2
        yield Twig\Extension\CoreExtension::include($this->env, $context, "content/slidebar.html.twig");
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 4
        yield "
";
        // line 5
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Tache index";
        
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
        yield "<div class=\"pcoded-content\">
    <div class=\"container mt-4\">
    <h1> Tache</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Nom Tache</th>
                <th>Nombre Heure</th>
                <th>Cout Horaire</th>
                <th>Projet</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context["nombre"] = 0;
        // line 22
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 23
            yield "        ";
            $context["nombre"] = ((isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 23, $this->source); })()) + 1);
            // line 24
            yield "            <tr>
             
                <td>";
            // line 26
            if (($context["tache"] && CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "nomTache", [], "any", false, false, false, 26))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "nomTache", [], "any", false, false, false, 26), "html", null, true);
            } else {
                yield "N/A";
            }
            yield "</td>
                <td>";
            // line 27
            if (($context["tache"] && CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "nombreHeure", [], "any", false, false, false, 27))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "nombreHeure", [], "any", false, false, false, 27), "html", null, true);
            } else {
                yield "N/A";
            }
            yield "</td>
                <td>";
            // line 28
            if (($context["tache"] && CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "coutHoraire", [], "any", false, false, false, 28))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "coutHoraire", [], "any", false, false, false, 28), "html", null, true);
            } else {
                yield "N/A";
            }
            yield "</td>
                <td>";
            // line 29
            if ((($context["tache"] && CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "projet", [], "any", false, false, false, 29)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "projet", [], "any", false, false, false, 29), "nom", [], "any", false, false, false, 29))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "projet", [], "any", false, false, false, 29), "nom", [], "any", false, false, false, 29), "html", null, true);
            } else {
                yield "N/A";
            }
            yield "</td>

                <td>
                     <a href=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\"class=\"btn btn-primary btn-sm\" title=\"View\"><i class=\"fas fa-eye\"></i></a>
                         <a href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\"class=\"btn btn-danger btn-sm\" title=\"Delete\"><i class=\"fas fa-trash\"></i></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            yield "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_new");
        yield "\">Create new</a>
</div>
</div>
    ";
        // line 47
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
        return "tache/index.html.twig";
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
        return array (  184 => 47,  178 => 44,  173 => 41,  164 => 37,  155 => 33,  151 => 32,  141 => 29,  133 => 28,  125 => 27,  117 => 26,  113 => 24,  110 => 23,  104 => 22,  102 => 21,  85 => 6,  78 => 5,  64 => 3,  56 => 5,  53 => 4,  51 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{include('content/navbar.html.twig')}}
{{include('content/slidebar.html.twig')}}
{% block title %}Tache index{% endblock %}

{% block body %}
<div class=\"pcoded-content\">
    <div class=\"container mt-4\">
    <h1> Tache</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Nom Tache</th>
                <th>Nombre Heure</th>
                <th>Cout Horaire</th>
                <th>Projet</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% set  nombre=0 %}
        {% for tache in taches %}
        {%set nombre = nombre+1%}
            <tr>
             
                <td>{% if tache and tache.nomTache %}{{ tache.nomTache }}{% else %}N/A{% endif %}</td>
                <td>{% if tache and tache.nombreHeure %}{{ tache.nombreHeure }}{% else %}N/A{% endif %}</td>
                <td>{% if tache and tache.coutHoraire %}{{ tache.coutHoraire }}{% else %}N/A{% endif %}</td>
                <td>{% if tache and tache.projet and tache.projet.nom %}{{ tache.projet.nom }}{% else %}N/A{% endif %}</td>

                <td>
                     <a href=\"{{ path('app_tache_show', {'id': tache.id}) }}\"class=\"btn btn-primary btn-sm\" title=\"View\"><i class=\"fas fa-eye\"></i></a>
                         <a href=\"{{ path('app_tache_delete', {'id': tache.id}) }}\"class=\"btn btn-danger btn-sm\" title=\"Delete\"><i class=\"fas fa-trash\"></i></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_tache_new') }}\">Create new</a>
</div>
</div>
    {{include('content/data.html.twig')}}
{% endblock %}
", "tache/index.html.twig", "C:\\Users\\SYNS-MANAGER\\Documents\\GitHub\\pmanalysis\\templates\\tache\\index.html.twig");
    }
}
