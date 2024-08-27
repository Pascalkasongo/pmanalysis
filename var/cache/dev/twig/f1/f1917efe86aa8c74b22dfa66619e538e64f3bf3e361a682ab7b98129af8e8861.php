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

/* admindek-html/index.html.twig */
class __TwigTemplate_44363b2556f85bba59fd2dac754cc215cf364c626e5976eb17efdad304e42711 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admindek-html/index.html.twig"));

        // line 1
        yield Twig\Extension\CoreExtension::include($this->env, $context, "content/navbar.html.twig");
        yield "

";
        // line 3
        yield Twig\Extension\CoreExtension::include($this->env, $context, "content/slidebar.html.twig");
        yield "

<div class=\"pcoded-content\">

<div class=\"page-header card\">
<div class=\"row align-items-end\">
<div class=\"col-lg-8\">

</div>
<div class=\"col-lg-4\">
<div class=\"page-header-breadcrumb\">

</div>
</div>
</div>
</div>

<div class=\"pcoded-inner-content\">
<div class=\"main-body\">
<div class=\"page-wrapper\">
<div class=\"page-body\">

<div class=\"row\">

<div class=\"col-md-12 col-xl-16\">
<div class=\"card comp-card\">
<div class=\"card-body\">
<div class=\"row align-items-center\">
<div class=\"col\">
<h6 class=\"m-b-25\">Projet</h6>
<h3 class=\"f-w-700 text-c-blue\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 33, $this->source); })())), "html", null, true);
        yield "</h3>

</div>
<div class=\"col-auto\">
<i class=\"fas fa-eye bg-c-blue\"></i>
</div>
</div>
</div>
</div>
<div class=\"card comp-card\">
<div class=\"card-body\">
<div class=\"row align-items-center\">
<div class=\"col\">
<h6 class=\"m-b-25\">Equipe</h6>
<h3 class=\"f-w-700 text-c-green\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["equipe"]) || array_key_exists("equipe", $context) ? $context["equipe"] : (function () { throw new RuntimeError('Variable "equipe" does not exist.', 47, $this->source); })())), "html", null, true);
        yield "</h3>

</div>
<div class=\"col-auto\">
<i class=\"fas fa-bullseye bg-c-green\"></i>
</div>
</div>
</div>
</div>
<div class=\"card comp-card\">
<div class=\"card-body\">
<div class=\"row align-items-center\">
<div class=\"col\">
<h6 class=\"m-b-25\">Tache</h6>
<h3 class=\"f-w-700 text-c-yellow\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 61, $this->source); })())), "html", null, true);
        yield "</h3>
</div>
<div class=\"col-auto\">
<i class=\"fas fa-hand-paper bg-c-yellow\"></i>
</div>
</div>
</div>
</div>
</div>


<div class=\"col-xl-12\">
<div class=\"card proj-progress-card\">
<div class=\"card-block\">
 <div class=\"row\">
";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["proj"]) {
            // line 77
            yield "            <div class=\"col-xl-3 col-md-6\">
        <h6>";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proj"], "nom", [], "any", false, false, false, 78), "html", null, true);
            yield "</h6>
        <h5 class=\"m-b-30 f-w-700\">532<span class=\"text-c-green m-l-10\">+1.69%</span></h5>
        <div class=\"progress\">
        <div class=\"progress-bar bg-c-red\" style=\"width:99%\"></div>
        </div>
        </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "



</div>
</div>
</div>
</div>

";
        // line 94
        yield Twig\Extension\CoreExtension::include($this->env, $context, "content/data.html.twig");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admindek-html/index.html.twig";
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
        return array (  162 => 94,  151 => 85,  138 => 78,  135 => 77,  131 => 76,  113 => 61,  96 => 47,  79 => 33,  46 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('content/navbar.html.twig')}}

{{ include('content/slidebar.html.twig')}}

<div class=\"pcoded-content\">

<div class=\"page-header card\">
<div class=\"row align-items-end\">
<div class=\"col-lg-8\">

</div>
<div class=\"col-lg-4\">
<div class=\"page-header-breadcrumb\">

</div>
</div>
</div>
</div>

<div class=\"pcoded-inner-content\">
<div class=\"main-body\">
<div class=\"page-wrapper\">
<div class=\"page-body\">

<div class=\"row\">

<div class=\"col-md-12 col-xl-16\">
<div class=\"card comp-card\">
<div class=\"card-body\">
<div class=\"row align-items-center\">
<div class=\"col\">
<h6 class=\"m-b-25\">Projet</h6>
<h3 class=\"f-w-700 text-c-blue\">{{projet|length}}</h3>

</div>
<div class=\"col-auto\">
<i class=\"fas fa-eye bg-c-blue\"></i>
</div>
</div>
</div>
</div>
<div class=\"card comp-card\">
<div class=\"card-body\">
<div class=\"row align-items-center\">
<div class=\"col\">
<h6 class=\"m-b-25\">Equipe</h6>
<h3 class=\"f-w-700 text-c-green\">{{equipe|length}}</h3>

</div>
<div class=\"col-auto\">
<i class=\"fas fa-bullseye bg-c-green\"></i>
</div>
</div>
</div>
</div>
<div class=\"card comp-card\">
<div class=\"card-body\">
<div class=\"row align-items-center\">
<div class=\"col\">
<h6 class=\"m-b-25\">Tache</h6>
<h3 class=\"f-w-700 text-c-yellow\">{{tache|length}}</h3>
</div>
<div class=\"col-auto\">
<i class=\"fas fa-hand-paper bg-c-yellow\"></i>
</div>
</div>
</div>
</div>
</div>


<div class=\"col-xl-12\">
<div class=\"card proj-progress-card\">
<div class=\"card-block\">
 <div class=\"row\">
{%for proj in projet%}
            <div class=\"col-xl-3 col-md-6\">
        <h6>{{proj.nom}}</h6>
        <h5 class=\"m-b-30 f-w-700\">532<span class=\"text-c-green m-l-10\">+1.69%</span></h5>
        <div class=\"progress\">
        <div class=\"progress-bar bg-c-red\" style=\"width:99%\"></div>
        </div>
        </div>
{%endfor%}




</div>
</div>
</div>
</div>

{{include('content/data.html.twig')}}", "admindek-html/index.html.twig", "C:\\Users\\SYNS-MANAGER\\Documents\\GitHub\\pmanalysis\\templates\\admindek-html\\index.html.twig");
    }
}
