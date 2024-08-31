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

/* facture/index.html.twig */
class __TwigTemplate_73b99ae73f5d27f3303acbdb372c3fb4cde8c6ba13a23cb4fe76c67e0ed33975 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/index.html.twig"));

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

        yield "Facture index";
        
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
        <h1>Facture index</h1>

        <table class=\"table\">
            <thead>
                <tr>
                    <th>Numero</th>
                    <th>Projet</th>
                    <th>Montant</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 20
        $context["nombre"] = 0;
        // line 21
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["factures"]) || array_key_exists("factures", $context) ? $context["factures"] : (function () { throw new RuntimeError('Variable "factures" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 22
            yield "            ";
            $context["nombre"] = ((isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 22, $this->source); })()) + 1);
            // line 23
            yield "                <tr>
                    <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 24, $this->source); })()), "html", null, true);
            yield "</td>
                    <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "projet", [], "any", false, false, false, 25), "nom", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                        ";
            // line 26
            $context["montantH_total"] = 0;
            // line 27
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "projet", [], "any", false, false, false, 27), "taches", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
                // line 28
                yield "                            ";
                $context["montantH_total"] = (((isset($context["montantH_total"]) || array_key_exists("montantH_total", $context) ? $context["montantH_total"] : (function () { throw new RuntimeError('Variable "montantH_total" does not exist.', 28, $this->source); })()) + (CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "coutHoraire", [], "any", false, false, false, 28) * CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "nombreHeure", [], "any", false, false, false, 28))) + ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "ressource", [], "any", false, true, false, 28), "coutRessource", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "ressource", [], "any", false, true, false, 28), "coutRessource", [], "any", false, false, false, 28), 0)) : (0)));
                // line 29
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "                    <td>
                        ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["montantH_total"]) || array_key_exists("montantH_total", $context) ? $context["montantH_total"] : (function () { throw new RuntimeError('Variable "montantH_total" does not exist.', 31, $this->source); })()), "html", null, true);
            yield "
                    \$</td>
                    <td>
                        <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\"class=\"btn btn-primary btn-sm\" title=\"View\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\"class=\"btn btn-warning btn-sm\" title=\"Edit\"><i class=\"fas fa-edit\"></i></a>
                        <a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\"class=\"btn btn-danger btn-sm\" title=\"Delete\"><i class=\"fas fa-trash\"></i></a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            yield "                <tr>
                    <td colspan=\"4\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "            </tbody>
        </table>
         <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_new");
        yield "\" class=\"btn btn-primary\">Create new</a>
    </div>
</div>
   
    ";
        // line 50
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
        return "facture/index.html.twig";
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
        return array (  185 => 50,  178 => 46,  174 => 44,  165 => 40,  156 => 36,  152 => 35,  148 => 34,  142 => 31,  139 => 30,  133 => 29,  130 => 28,  125 => 27,  123 => 26,  119 => 25,  115 => 24,  112 => 23,  109 => 22,  103 => 21,  101 => 20,  85 => 6,  78 => 5,  64 => 3,  56 => 5,  53 => 4,  51 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{include('content/navbar.html.twig')}}
{{include('content/slidebar.html.twig')}}
{% block title %}Facture index{% endblock %}

{% block body %}
<div class=\"pcoded-content\">
    <div class=\"container mt-4\">
        <h1>Facture index</h1>

        <table class=\"table\">
            <thead>
                <tr>
                    <th>Numero</th>
                    <th>Projet</th>
                    <th>Montant</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
            {%set nombre = 0%}
            {% for facture in factures %}
            {% set nombre = nombre+1%}
                <tr>
                    <td>{{ nombre }}</td>
                    <td>{{ facture.projet.nom }}</td>
                        {% set montantH_total = 0 %}
                        {% for tache in facture.projet.taches %}
                            {% set montantH_total =montantH_total+ (tache.coutHoraire * tache.nombreHeure)+tache.ressource.coutRessource|default(0) %}
                        {% endfor %}
                    <td>
                        {{montantH_total}}
                    \$</td>
                    <td>
                        <a href=\"{{ path('app_facture_show', {'id': facture.id}) }}\"class=\"btn btn-primary btn-sm\" title=\"View\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"{{ path('app_facture_edit', {'id': facture.id}) }}\"class=\"btn btn-warning btn-sm\" title=\"Edit\"><i class=\"fas fa-edit\"></i></a>
                        <a href=\"{{ path('app_facture_delete', {'id': facture.id}) }}\"class=\"btn btn-danger btn-sm\" title=\"Delete\"><i class=\"fas fa-trash\"></i></a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"4\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
         <a href=\"{{ path('app_facture_new') }}\" class=\"btn btn-primary\">Create new</a>
    </div>
</div>
   
    {{include('content/data.html.twig')}}
{% endblock %}
", "facture/index.html.twig", "C:\\Users\\SYNS-MANAGER\\Documents\\GitHub\\pmanalysis\\templates\\facture\\index.html.twig");
    }
}
