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
class __TwigTemplate_9d922779f076c59130cb8062b38e9eddbf3e69581afcf53363e7772c276d721f extends Template
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
                <th>Id</th>
                <th>Nom Tache</th>
                <th>Nombre Heure</th>
                <th>Cout Horaire</th>
                <th>Projet</th>
                <th>Equipe</th>
                <th>Priorite</th>
                <th>Etat</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context["nombre"] = 0;
        // line 26
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 27
            yield "        ";
            $context["nombre"] = ((isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 27, $this->source); })()) + 1);
            // line 28
            yield "            <tr>
             
                <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 30, $this->source); })()), "html", null, true);
            yield "</td>
                <td>";
            // line 31
            if (($context["tache"] && CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "nomTache", [], "any", false, false, false, 31))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "nomTache", [], "any", false, false, false, 31), "html", null, true);
            } else {
                yield "N/A";
            }
            yield "</td>
                <td>";
            // line 32
            if (($context["tache"] && CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "nombreHeure", [], "any", false, false, false, 32))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "nombreHeure", [], "any", false, false, false, 32), "html", null, true);
            } else {
                yield "N/A";
            }
            yield "</td>
                <td>";
            // line 33
            if (($context["tache"] && CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "coutHoraire", [], "any", false, false, false, 33))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "coutHoraire", [], "any", false, false, false, 33), "html", null, true);
            } else {
                yield "N/A";
            }
            yield "</td>
                <td>";
            // line 34
            if ((($context["tache"] && CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "projet", [], "any", false, false, false, 34)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "projet", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "projet", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34), "html", null, true);
            } else {
                yield "N/A";
            }
            yield "</td>
                <td>";
            // line 35
            if ((($context["tache"] && CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "equipe", [], "any", false, false, false, 35)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "equipe", [], "any", false, false, false, 35), "nomEquipe", [], "any", false, false, false, 35))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "equipe", [], "any", false, false, false, 35), "nomEquipe", [], "any", false, false, false, 35), "html", null, true);
            } else {
                yield "N/A";
            }
            yield "</td>
                <td>";
            // line 36
            if ((($context["tache"] && CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "priorite", [], "any", false, false, false, 36)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "priorite", [], "any", false, false, false, 36), "nomPriorite", [], "any", false, false, false, 36))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "priorite", [], "any", false, false, false, 36), "nomPriorite", [], "any", false, false, false, 36), "html", null, true);
            } else {
                yield "N/A";
            }
            yield "</td>
                <td>";
            // line 37
            if ((($context["tache"] && CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "etat", [], "any", false, false, false, 37)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "etat", [], "any", false, false, false, 37), "nomEtat", [], "any", false, false, false, 37))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "etat", [], "any", false, false, false, 37), "nomEtat", [], "any", false, false, false, 37), "html", null, true);
            } else {
                yield "N/A";
            }
            yield "</td>

                <td>
                     <a href=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\"class=\"btn btn-primary btn-sm\" title=\"View\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\"class=\"btn btn-warning btn-sm\" title=\"Edit\"><i class=\"fas fa-edit\"></i></a>
                         <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 42)]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_new");
        yield "\">Create new</a>
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
        return array (  220 => 56,  214 => 53,  209 => 50,  200 => 46,  191 => 42,  187 => 41,  183 => 40,  173 => 37,  165 => 36,  157 => 35,  149 => 34,  141 => 33,  133 => 32,  125 => 31,  121 => 30,  117 => 28,  114 => 27,  108 => 26,  106 => 25,  85 => 6,  78 => 5,  64 => 3,  56 => 5,  53 => 4,  51 => 3,  47 => 2,  43 => 1,);
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
                <th>Id</th>
                <th>Nom Tache</th>
                <th>Nombre Heure</th>
                <th>Cout Horaire</th>
                <th>Projet</th>
                <th>Equipe</th>
                <th>Priorite</th>
                <th>Etat</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% set  nombre=0 %}
        {% for tache in taches %}
        {%set nombre = nombre+1%}
            <tr>
             
                <td>{{ nombre }}</td>
                <td>{% if tache and tache.nomTache %}{{ tache.nomTache }}{% else %}N/A{% endif %}</td>
                <td>{% if tache and tache.nombreHeure %}{{ tache.nombreHeure }}{% else %}N/A{% endif %}</td>
                <td>{% if tache and tache.coutHoraire %}{{ tache.coutHoraire }}{% else %}N/A{% endif %}</td>
                <td>{% if tache and tache.projet and tache.projet.nom %}{{ tache.projet.nom }}{% else %}N/A{% endif %}</td>
                <td>{% if tache and tache.equipe and tache.equipe.nomEquipe %}{{ tache.equipe.nomEquipe }}{% else %}N/A{% endif %}</td>
                <td>{% if tache and tache.priorite and tache.priorite.nomPriorite %}{{ tache.priorite.nomPriorite }}{% else %}N/A{% endif %}</td>
                <td>{% if tache and tache.etat and tache.etat.nomEtat %}{{ tache.etat.nomEtat }}{% else %}N/A{% endif %}</td>

                <td>
                     <a href=\"{{ path('app_tache_show', {'id': tache.id}) }}\"class=\"btn btn-primary btn-sm\" title=\"View\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"{{ path('app_tache_edit', {'id': tache.id}) }}\"class=\"btn btn-warning btn-sm\" title=\"Edit\"><i class=\"fas fa-edit\"></i></a>
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
", "tache/index.html.twig", "C:\\Users\\SYNS-MANAGER\\Nouveau dossier\\my_project_directory\\templates\\tache\\index.html.twig");
    }
}
