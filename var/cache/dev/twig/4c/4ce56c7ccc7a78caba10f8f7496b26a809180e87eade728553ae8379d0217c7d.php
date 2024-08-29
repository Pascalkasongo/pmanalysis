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

/* client/new.html.twig */
class __TwigTemplate_7ef10375b40b6b4dd8cf151ee9910f009b1ee0817bb993cc436a8ebc65675be7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/new.html.twig"));

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

        yield "New Client";
        
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
    <h2> Client</h2>
    ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        yield "
    
    <div class=\"form-group\">
        ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "nom_client", [], "any", false, false, false, 12), 'label', ["label" => "Nom du client"]);
        yield "
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "nom_client", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez le nom du client"]]);
        yield "
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "nom_client", [], "any", false, false, false, 14), 'errors');
        yield "
    </div>
    
    <div class=\"form-group\">
        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "prenom_client", [], "any", false, false, false, 18), 'label', ["label" => "Prenom  du client"]);
        yield "
        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "prenom_client", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez l'email du client"]]);
        yield "
        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "prenom_client", [], "any", false, false, false, 20), 'errors');
        yield "
    </div>
    <div class=\"form-group\">
        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "adresse", [], "any", false, false, false, 23), 'label', ["label" => "Adresse  du client"]);
        yield "
        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "adresse", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez l'adresse du client"]]);
        yield "
        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "adresse", [], "any", false, false, false, 25), 'errors');
        yield "
    </div>
     <div class=\"form-group\">
        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "telephone", [], "any", false, false, false, 28), 'label', ["label" => "Telephone du client"]);
        yield "
        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "telephone", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez le telephone  du client"]]);
        yield "
        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "telephone", [], "any", false, false, false, 30), 'errors');
        yield "
    </div>
    <div class=\"form-group\">
        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), 'label', ["label" => "Email"]);
        yield "
        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email@domaine.org"]]);
        yield "
        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), 'errors');
        yield "
    </div>
    <div class=\"form-group\">
        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "plainPassword", [], "any", false, false, false, 38), 'label', ["label" => "Mot de passe"]);
        yield "
        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "plainPassword", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Mot de passe"]]);
        yield "
        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "plainPassword", [], "any", false, false, false, 40), 'errors');
        yield "
    </div>
    
    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
    ";
        // line 44
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_end');
        yield "
    
    </div>
    </div>
    ";
        // line 48
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
        return "client/new.html.twig";
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
        return array (  189 => 48,  182 => 44,  175 => 40,  171 => 39,  167 => 38,  161 => 35,  157 => 34,  153 => 33,  147 => 30,  143 => 29,  139 => 28,  133 => 25,  129 => 24,  125 => 23,  119 => 20,  115 => 19,  111 => 18,  104 => 14,  100 => 13,  96 => 12,  90 => 9,  85 => 6,  78 => 5,  64 => 3,  56 => 5,  53 => 4,  51 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{include('content/navbar.html.twig')}}
{{include('content/slidebar.html.twig')}}
{% block title %}New Client{% endblock %}

{% block body %}
<div class=\"pcoded-content\">
<div class=\"container mt-4\">
    <h2> Client</h2>
    {{ form_start(form) }}
    
    <div class=\"form-group\">
        {{ form_label(form.nom_client, 'Nom du client') }}
        {{ form_widget(form.nom_client, {'attr': {'class': 'form-control', 'placeholder': \"Entrez le nom du client\"}}) }}
        {{ form_errors(form.nom_client) }}
    </div>
    
    <div class=\"form-group\">
        {{ form_label(form.prenom_client, 'Prenom  du client') }}
        {{ form_widget(form.prenom_client, {'attr': {'class': 'form-control', 'placeholder': \"Entrez l'email du client\"}}) }}
        {{ form_errors(form.prenom_client) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.adresse, 'Adresse  du client') }}
        {{ form_widget(form.adresse, {'attr': {'class': 'form-control', 'placeholder': \"Entrez l'adresse du client\"}}) }}
        {{ form_errors(form.adresse) }}
    </div>
     <div class=\"form-group\">
        {{ form_label(form.telephone, 'Telephone du client') }}
        {{ form_widget(form.telephone, {'attr': {'class': 'form-control', 'placeholder': \"Entrez le telephone  du client\"}}) }}
        {{ form_errors(form.telephone) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.email, 'Email') }}
        {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': \"Email@domaine.org\"}}) }}
        {{ form_errors(form.email) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.plainPassword, 'Mot de passe') }}
        {{ form_widget(form.plainPassword, {'attr': {'class': 'form-control', 'placeholder': \"Mot de passe\"}}) }}
        {{ form_errors(form.plainPassword) }}
    </div>
    
    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
    {{ form_end(form) }}
    
    </div>
    </div>
    {{include('content/data.html.twig')}}
{% endblock %}
", "client/new.html.twig", "C:\\Users\\SYNS-MANAGER\\Documents\\GitHub\\pmanalysis\\templates\\client\\new.html.twig");
    }
}
