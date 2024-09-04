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

/* employe/edit.html.twig */
class __TwigTemplate_4afa91d3fdf7c0a5bced2a67ff7a1b2925b35a27d5668246bc23cedca1fb9485 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employe/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Employe index";
        
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
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "content/navbar.html.twig");
        yield "
    ";
        // line 7
        yield Twig\Extension\CoreExtension::include($this->env, $context, "content/slidebar.html.twig");
        yield "

    <div class=\"pcoded-content\">
        <div class=\"container mt-4\">
            <h2> Gestion de l'employé</h2>
            ";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        yield "
            
            <div class=\"form-group\">
                ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nom_employe", [], "any", false, false, false, 15), 'label', ["label" => "Nom de l'Employé"]);
        yield "
                ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "nom_employe", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez le nom de l'employé"]]);
        yield "
                ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "nom_employe", [], "any", false, false, false, 17), 'errors');
        yield "
            </div>
            
            <div class=\"form-group\">
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "prenom_employe", [], "any", false, false, false, 21), 'label', ["label" => "Prenom de l'Employé"]);
        yield "
                ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "prenom_employe", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez l'email de l'employé"]]);
        yield "
                ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "prenom_employe", [], "any", false, false, false, 23), 'errors');
        yield "
            </div>
            <div class=\"form-group\">
                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "adresse", [], "any", false, false, false, 26), 'label', ["label" => "Adresse de l'Employé"]);
        yield "
                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "adresse", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez l'adresse de l'employé"]]);
        yield "
                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "adresse", [], "any", false, false, false, 28), 'errors');
        yield "
            </div>
             <div class=\"form-group\">
                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "telephone", [], "any", false, false, false, 31), 'label', ["label" => "Telephone  de l'Employé"]);
        yield "
                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "telephone", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez le telephone  de l'employé"]]);
        yield "
                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "telephone", [], "any", false, false, false, 33), 'errors');
        yield "
            </div>
            <div class=\"form-group\">
                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "roles", [], "any", false, false, false, 36), 'label', ["label" => "Roles   de l'Employé"]);
        yield "
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "roles", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez le telephone  de l'employé"]]);
        yield "
                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "roles", [], "any", false, false, false, 38), 'errors');
        yield "
            </div>
            <div class=\"form-group\">
                ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), 'label', ["label" => "Email   de l'Employé"]);
        yield "
                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez le telephone  de l'employé"]]);
        yield "
                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'errors');
        yield "
            </div>
            <div class=\"form-group\">
                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "plainPassword", [], "any", false, false, false, 46), 'label', ["label" => "Mot de passe   de l'Employé"]);
        yield "
                ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "plainPassword", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez le telephone  de l'employé"]]);
        yield "
                ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "plainPassword", [], "any", false, false, false, 48), 'errors');
        yield "
            </div>
           
            <div class=\"form-group\">
                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "fonction", [], "any", false, false, false, 52), 'label', ["label" => "Fonction"]);
        yield "
                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "fonction", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "fonction"]]);
        yield "
                ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "fonction", [], "any", false, false, false, 54), 'errors');
        yield "
            </div>
            
            
             <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
            ";
        // line 59
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form_end');
        yield "
           
        </div>
    </div>
    ";
        // line 63
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
        return "employe/edit.html.twig";
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
        return array (  217 => 63,  210 => 59,  202 => 54,  198 => 53,  194 => 52,  187 => 48,  183 => 47,  179 => 46,  173 => 43,  169 => 42,  165 => 41,  159 => 38,  155 => 37,  151 => 36,  145 => 33,  141 => 32,  137 => 31,  131 => 28,  127 => 27,  123 => 26,  117 => 23,  113 => 22,  109 => 21,  102 => 17,  98 => 16,  94 => 15,  88 => 12,  80 => 7,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Employe index{% endblock %}

{% block body %}
    {{ include('content/navbar.html.twig') }}
    {{ include('content/slidebar.html.twig') }}

    <div class=\"pcoded-content\">
        <div class=\"container mt-4\">
            <h2> Gestion de l'employé</h2>
            {{ form_start(form) }}
            
            <div class=\"form-group\">
                {{ form_label(form.nom_employe, 'Nom de l\\'Employé') }}
                {{ form_widget(form.nom_employe, {'attr': {'class': 'form-control', 'placeholder': \"Entrez le nom de l'employé\"}}) }}
                {{ form_errors(form.nom_employe) }}
            </div>
            
            <div class=\"form-group\">
                {{ form_label(form.prenom_employe, 'Prenom de l\\'Employé') }}
                {{ form_widget(form.prenom_employe, {'attr': {'class': 'form-control', 'placeholder': \"Entrez l'email de l'employé\"}}) }}
                {{ form_errors(form.prenom_employe) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.adresse, 'Adresse de l\\'Employé') }}
                {{ form_widget(form.adresse, {'attr': {'class': 'form-control', 'placeholder': \"Entrez l'adresse de l'employé\"}}) }}
                {{ form_errors(form.adresse) }}
            </div>
             <div class=\"form-group\">
                {{ form_label(form.telephone, 'Telephone  de l\\'Employé') }}
                {{ form_widget(form.telephone, {'attr': {'class': 'form-control', 'placeholder': \"Entrez le telephone  de l'employé\"}}) }}
                {{ form_errors(form.telephone) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.roles, 'Roles   de l\\'Employé') }}
                {{ form_widget(form.roles, {'attr': {'class': 'form-control', 'placeholder': \"Entrez le telephone  de l'employé\"}}) }}
                {{ form_errors(form.roles) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.email, 'Email   de l\\'Employé') }}
                {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': \"Entrez le telephone  de l'employé\"}}) }}
                {{ form_errors(form.email) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.plainPassword, 'Mot de passe   de l\\'Employé') }}
                {{ form_widget(form.plainPassword, {'attr': {'class': 'form-control', 'placeholder': \"Entrez le telephone  de l'employé\"}}) }}
                {{ form_errors(form.plainPassword) }}
            </div>
           
            <div class=\"form-group\">
                {{ form_label(form.fonction, 'Fonction') }}
                {{ form_widget(form.fonction, {'attr': {'class': 'form-control', 'placeholder': \"fonction\"}}) }}
                {{ form_errors(form.fonction) }}
            </div>
            
            
             <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
            {{ form_end(form) }}
           
        </div>
    </div>
    {{include('content/data.html.twig')}}
{% endblock %}


", "employe/edit.html.twig", "C:\\Users\\SYNS-MANAGER\\Documents\\GitHub\\pmanalysis\\templates\\employe\\edit.html.twig");
    }
}
