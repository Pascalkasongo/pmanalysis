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

/* domaine/index.html.twig */
class __TwigTemplate_9cdc97defed96eee552f0fbeea77cad03505b919e105af822da6e8ec1625cb48 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "domaine/index.html.twig"));

        // line 1
        yield Twig\Extension\CoreExtension::include($this->env, $context, "content/navbar.html.twig");
        yield "
";
        // line 2
        yield Twig\Extension\CoreExtension::include($this->env, $context, "content/slidebar.html.twig");
        yield "

";
        // line 4
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "<div class=\"pcoded-content\">
                
<div class=\"container mt-4\">
    <h1>Domaine </h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom_domaine</th>
                <th>Type_domaine</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["domaines"]) || array_key_exists("domaines", $context) ? $context["domaines"] : (function () { throw new RuntimeError('Variable "domaines" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["domaine"]) {
            // line 21
            yield "            <tr>
                <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "nomDomaine", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "typeDomaine", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                    <td>
                    <a href=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_domaine_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            yield "\"class=\"btn btn-primary btn-sm\" title=\"View\"><i class=\"fas fa-eye\"></i></a>
                    <a href=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_domaine_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            yield "\"class=\"btn btn-warning btn-sm\" title=\"Edit\"><i class=\"fas fa-edit\"></i></a>
                    <a href=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_domaine_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\"class=\"btn btn-danger btn-sm\" title=\"Delete\"><i class=\"fas fa-trash\"></i></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            yield "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domaine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "        </tbody>
    </table>
</div>
</div>
    ";
        // line 40
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
        return "domaine/index.html.twig";
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
        return array (  135 => 40,  129 => 36,  120 => 32,  111 => 28,  107 => 27,  103 => 26,  98 => 24,  94 => 23,  90 => 22,  87 => 21,  82 => 20,  65 => 5,  51 => 4,  46 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('content/navbar.html.twig') }}
{{ include('content/slidebar.html.twig') }}

{% block body %}
<div class=\"pcoded-content\">
                
<div class=\"container mt-4\">
    <h1>Domaine </h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom_domaine</th>
                <th>Type_domaine</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for domaine in domaines %}
            <tr>
                <td>{{ domaine.id }}</td>
                <td>{{ domaine.nomDomaine }}</td>
                <td>{{ domaine.typeDomaine }}</td>
                    <td>
                    <a href=\"{{ path('app_domaine_show', {'id': domaine.id}) }}\"class=\"btn btn-primary btn-sm\" title=\"View\"><i class=\"fas fa-eye\"></i></a>
                    <a href=\"{{ path('app_domaine_edit', {'id': domaine.id}) }}\"class=\"btn btn-warning btn-sm\" title=\"Edit\"><i class=\"fas fa-edit\"></i></a>
                    <a href=\"{{ path('app_domaine_delete', {'id': domaine.id}) }}\"class=\"btn btn-danger btn-sm\" title=\"Delete\"><i class=\"fas fa-trash\"></i></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
</div>
    {{ include('content/data.html.twig') }}
{% endblock %}
", "domaine/index.html.twig", "C:\\Users\\SYNS-MANAGER\\Documents\\GitHub\\pmanalysis\\templates\\domaine\\index.html.twig");
    }
}
