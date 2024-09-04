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

/* home_user/service.html.twig */
class __TwigTemplate_e1fc8f660992bdfbd2931dbf01b7168ef50522fd2d90d8dbb6f47609c7af209a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_user/service.html.twig"));

        // line 1
        yield Twig\Extension\CoreExtension::include($this->env, $context, "static/navbar.html.twig");
        yield "
";
        // line 2
        yield Twig\Extension\CoreExtension::include($this->env, $context, "static/slidebar.html.twig");
        yield "
<style>
    .service-item {
    display: flex;
    flex-direction: column;
    height: 100%;
}

.service-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.service-img {
    position: relative;
    overflow: hidden;
}

.service-img img {
    display: block;
    max-width: 100%;
    height: auto;
}

.service-content-inner {
    flex-grow: 1;
}

.container {
    margin-top: auto; /* Ensure the progress bar stays at the bottom if needed */
}


</style>



        <div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-fullscreen\">
                <div class=\"modal-content rounded-0\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Search by keyword</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body d-flex align-items-center bg-primary\">
                        <div class=\"input-group w-75 mx-auto d-flex\">
                            <input type=\"search\" class=\"form-control p-3\" placeholder=\"keywords\" aria-describedby=\"search-icon-1\">
                            <span id=\"search-icon-1\" class=\"btn bg-light border nput-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       


        <!-- Service Start -->
        <div class=\"container-fluid service py-5\">
            <div class=\"container py-5\">
                <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                    <h4 class=\"text-primary\">Mes projets</h4>
                </div>
                <div class=\"row g-4 justify-content-center\">
                    ";
        // line 67
        if ((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new RuntimeError('Variable "projets" does not exist.', 67, $this->source); })())) {
            // line 68
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new RuntimeError('Variable "projets" does not exist.', 68, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
                // line 69
                yield "                    <div class=\"col-md-6 col-lg-6 col-xl-3 wow fadeInUp\" data-wow-delay=\"0.2s\">
                    
                        <div class=\"card\">
                            ";
                // line 73
                yield "                            <div class=\"card-body\">
                                <h4 class=\"card-title\">";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "nom", [], "any", false, false, false, 74), "html", null, true);
                yield "</h4>
                                <p class=\"card-text\">";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "description", [], "any", false, false, false, 75), "html", null, true);
                yield "</p>
                            <button class=\"btn btn-primary\">Voir plus</button>
                            </div>
                        </div>
                        
                </div>
                
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            yield "                    ";
        }
        // line 84
        yield "                    
                    
                    <div class=\"col-12 text-center wow fadeInUp\" data-wow-delay=\"0.2s\">
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        ";
        // line 94
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
        return "home_user/service.html.twig";
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
        return array (  161 => 94,  149 => 84,  146 => 83,  132 => 75,  128 => 74,  125 => 73,  120 => 69,  115 => 68,  113 => 67,  45 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{include('static/navbar.html.twig')}}
{{include('static/slidebar.html.twig')}}
<style>
    .service-item {
    display: flex;
    flex-direction: column;
    height: 100%;
}

.service-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.service-img {
    position: relative;
    overflow: hidden;
}

.service-img img {
    display: block;
    max-width: 100%;
    height: auto;
}

.service-content-inner {
    flex-grow: 1;
}

.container {
    margin-top: auto; /* Ensure the progress bar stays at the bottom if needed */
}


</style>



        <div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-fullscreen\">
                <div class=\"modal-content rounded-0\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Search by keyword</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body d-flex align-items-center bg-primary\">
                        <div class=\"input-group w-75 mx-auto d-flex\">
                            <input type=\"search\" class=\"form-control p-3\" placeholder=\"keywords\" aria-describedby=\"search-icon-1\">
                            <span id=\"search-icon-1\" class=\"btn bg-light border nput-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       


        <!-- Service Start -->
        <div class=\"container-fluid service py-5\">
            <div class=\"container py-5\">
                <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                    <h4 class=\"text-primary\">Mes projets</h4>
                </div>
                <div class=\"row g-4 justify-content-center\">
                    {%if projets%}
                    {%for projet in projets%}
                    <div class=\"col-md-6 col-lg-6 col-xl-3 wow fadeInUp\" data-wow-delay=\"0.2s\">
                    
                        <div class=\"card\">
                            {# <img src=\"img/blog-1.png\" class=\"card-img-top img-fluid rounded-top\" alt=\"Image du projet\"> #}
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">{{ projet.nom }}</h4>
                                <p class=\"card-text\">{{ projet.description }}</p>
                            <button class=\"btn btn-primary\">Voir plus</button>
                            </div>
                        </div>
                        
                </div>
                
                    {%endfor%}
                    {%endif%}
                    
                    
                    <div class=\"col-12 text-center wow fadeInUp\" data-wow-delay=\"0.2s\">
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        {{include('content/data.html.twig')}}
    
    ", "home_user/service.html.twig", "C:\\Users\\SYNS-MANAGER\\Documents\\GitHub\\pmanalysis\\templates\\home_user\\service.html.twig");
    }
}
