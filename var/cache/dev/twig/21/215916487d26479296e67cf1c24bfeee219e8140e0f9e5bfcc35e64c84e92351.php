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

/* equipe/index.html.twig */
class __TwigTemplate_13be3b5f3a00fcc62011573c8cadd3d1d4b46d1160418ffbc8815e115e719da7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipe/index.html.twig"));

        // line 1
        yield Twig\Extension\CoreExtension::include($this->env, $context, "content/navbar.html.twig");
        yield "
";
        // line 2
        yield Twig\Extension\CoreExtension::include($this->env, $context, "content/slidebar.html.twig");
        yield "

";
        // line 4
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 5
        yield "
";
        // line 6
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Equipe index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "<div class=\"pcoded-content\">
             
    <div class=\"container mt-4\">
        <h1>Equipe </h1>

        <table class=\"table\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom Equipe</th>
                    <th>Nombre</th>
                    <th>Chef d'equipe</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["equipes"]) || array_key_exists("equipes", $context) ? $context["equipes"] : (function () { throw new RuntimeError('Variable "equipes" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["equipe"]) {
            // line 24
            yield "                <tr>
                    <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["equipe"], "id", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                    <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["equipe"], "nomEquipe", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                    <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["equipe"], "nombre", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                    <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["equipe"], "chef", [], "any", false, false, false, 28), "nomEmploye", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                    <td>
                        <a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["equipe"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\"class=\"btn btn-primary btn-sm\" title=\"View\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["equipe"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\"class=\"btn btn-warning btn-sm\" title=\"Edit\"><i class=\"fas fa-edit\"></i></a>
                         <a href=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipe_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["equipe"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\"class=\"btn btn-danger btn-sm\" title=\"Delete\"><i class=\"fas fa-trash\"></i></a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            yield "                <tr>
                    <td colspan=\"4\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "            </tbody>
        </table>

      <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipe_new");
        yield "\" class=\"btn btn-primary\">Create new</a>
    </div>
</div>
    ";
        // line 46
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
        return "equipe/index.html.twig";
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
        return array (  166 => 46,  160 => 43,  155 => 40,  146 => 36,  137 => 32,  133 => 31,  129 => 30,  124 => 28,  120 => 27,  116 => 26,  112 => 25,  109 => 24,  104 => 23,  86 => 7,  79 => 6,  65 => 4,  57 => 6,  54 => 5,  52 => 4,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{include('content/navbar.html.twig')}}
{{include('content/slidebar.html.twig')}}

{% block title %}Equipe index{% endblock %}

{% block body %}
<div class=\"pcoded-content\">
             
    <div class=\"container mt-4\">
        <h1>Equipe </h1>

        <table class=\"table\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom Equipe</th>
                    <th>Nombre</th>
                    <th>Chef d'equipe</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
            {% for equipe in equipes %}
                <tr>
                    <td>{{ equipe.id }}</td>
                    <td>{{ equipe.nomEquipe }}</td>
                    <td>{{ equipe.nombre }}</td>
                    <td>{{equipe.chef.nomEmploye}}</td>
                    <td>
                        <a href=\"{{ path('app_equipe_show', {'id': equipe.id}) }}\"class=\"btn btn-primary btn-sm\" title=\"View\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"{{ path('app_equipe_edit', {'id': equipe.id}) }}\"class=\"btn btn-warning btn-sm\" title=\"Edit\"><i class=\"fas fa-edit\"></i></a>
                         <a href=\"{{ path('app_equipe_delete', {'id': equipe.id}) }}\"class=\"btn btn-danger btn-sm\" title=\"Delete\"><i class=\"fas fa-trash\"></i></a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"4\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

      <a href=\"{{ path('app_equipe_new') }}\" class=\"btn btn-primary\">Create new</a>
    </div>
</div>
    {{include('content/data.html.twig')}}
{% endblock %}
", "equipe/index.html.twig", "C:\\Users\\SYNS-MANAGER\\Documents\\GitHub\\pmanalysis\\templates\\equipe\\index.html.twig");
    }
}
