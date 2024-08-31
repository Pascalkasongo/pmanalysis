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

/* domaine/new.html.twig */
class __TwigTemplate_a0cddfc707506b1787e5ab815b923ca3917151df1c935679cc1bdeec11a97646 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "domaine/new.html.twig"));

        // line 1
        yield Twig\Extension\CoreExtension::include($this->env, $context, "content/navbar.html.twig");
        yield "
";
        // line 2
        yield Twig\Extension\CoreExtension::include($this->env, $context, "content/slidebar.html.twig");
        yield "


";
        // line 5
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"pcoded-content\">
                
<div class=\"container mt-4\">
    <h1>Nouveau Domaine</h1>
        ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        yield "
      
           <div class=\"form-group\">
                   ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "nom_domaine", [], "any", false, false, false, 13), 'label', ["label" => "Nom "]);
        yield "
                   ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "nom_domaine", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom  domaine"]]);
        yield "
                   ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nom_domaine", [], "any", false, false, false, 15), 'errors');
        yield "
           </div>
           <div class=\"form-group\">
                   ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "type_domaine", [], "any", false, false, false, 18), 'label', ["label" => "type_domaine"]);
        yield "
                   ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "type_domaine", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "type_domaine projet"]]);
        yield "
                   ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "type_domaine", [], "any", false, false, false, 20), 'errors');
        yield "
           </div><br>
           <button type=\"submit\" class=\"btn btn-primary\">Soumettre</button>
       </div>
       </div>
           
       ";
        // line 26
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_end');
        yield "
    ";
        // line 27
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
        return "domaine/new.html.twig";
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
        return array (  113 => 27,  109 => 26,  100 => 20,  96 => 19,  92 => 18,  86 => 15,  82 => 14,  78 => 13,  72 => 10,  66 => 6,  52 => 5,  46 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('content/navbar.html.twig') }}
{{ include('content/slidebar.html.twig') }}


{% block body %}
<div class=\"pcoded-content\">
                
<div class=\"container mt-4\">
    <h1>Nouveau Domaine</h1>
        {{form_start(form)}}
      
           <div class=\"form-group\">
                   {{ form_label(form.nom_domaine, 'Nom ') }}
                   {{ form_widget(form.nom_domaine, {'attr': {'class': 'form-control', 'placeholder': \"Nom  domaine\"}}) }}
                   {{ form_errors(form.nom_domaine) }}
           </div>
           <div class=\"form-group\">
                   {{ form_label(form.type_domaine, 'type_domaine') }}
                   {{ form_widget(form.type_domaine, {'attr': {'class': 'form-control', 'placeholder': \"type_domaine projet\"}}) }}
                   {{ form_errors(form.type_domaine) }}
           </div><br>
           <button type=\"submit\" class=\"btn btn-primary\">Soumettre</button>
       </div>
       </div>
           
       {{form_end(form)}}
    {{ include('content/data.html.twig') }}
{% endblock %}
", "domaine/new.html.twig", "C:\\Users\\SYNS-MANAGER\\Documents\\GitHub\\pmanalysis\\templates\\domaine\\new.html.twig");
    }
}
