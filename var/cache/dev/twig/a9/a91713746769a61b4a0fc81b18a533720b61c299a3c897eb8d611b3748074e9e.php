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

/* static/navbar.html.twig */
class __TwigTemplate_5010b518ad7b8014b1ed723b3d159f05a03b26f6cbf2ddde6b8dad9a79b2bf42 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "static/navbar.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

    
<!-- Mirrored from themewagon.github.io/LifeSure/service.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Aug 2024 04:57:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\" /><!-- /Added by HTTrack -->
<head>
        <meta charset=\"utf-8\">
        <title>PMUser</title>
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <meta content=\"\" name=\"keywords\">
        <meta content=\"\" name=\"description\">

       
        <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fontawesome/releases/v5.15.4/css/all.css"), "html", null, true);
        yield "\"/>
        <link href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("cdn.jsdelivr.net/npm/bootstrap-icons%401.4.1/font/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/animate/animate.min.css"), "html", null, true);
        yield "\"/>
        <link href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/lightbox/css/lightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">


        <link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("user/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("user/css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    </head>

    <body>

       

   
        <div class=\"container-fluid nav-bar px-0 px-lg-4 py-lg-0\">
            <div class=\"container\">
                <nav class=\"navbar navbar-expand-lg navbar-light\"> 
                    <a href=\"#\" class=\"navbar-brand p-0\">
                        <h1 class=\"text-primary mb-0\"><i class=\"fab fa-slack me-2\"></i>PMANALYSIS</h1>
                    
                    </a>
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                        <span class=\"fa fa-bars\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                        <div class=\"navbar-nav mx-0 mx-lg-2\">
                           
                            <a href=\"blog.html\" class=\"nav-item nav-link\"></a>
                            <div class=\"nav-item dropdown\">
                                <a href=\"#\" class=\"nav-link\" data-bs-toggle=\"dropdown\">
                                    <span class=\"dropdown-toggle\">Projets</span>
                                </a>
                                <div class=\"dropdown-menu\">
                                    <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_project");
        yield "\" class=\"dropdown-item\">Mes projets</a>
                                    <a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notification_new");
        yield "\" class=\"dropdown-item\">Soumetre unprojet</a>
                                    
                                </div>
                            </div>
                            <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
                            
                        </div>
                    </div>
                    <div class=\"d-none d-xl-flex flex-shrink-0 ps-4\">
                        <div class=\"nav-item dropdown\">
                            
                                <span class=\"dropdown-toggle\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "nomClient", [], "any", false, false, false, 63), "html", null, true);
        yield "</span>
                           
                            <div class=\"dropdown-menu\">
                                <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"dropdown-item\">Se deconnecter</a>
                                <a href=\"#\" class=\"dropdown-item\">Parametre</a>
                                
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "static/navbar.html.twig";
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
        return array (  138 => 66,  132 => 63,  118 => 52,  114 => 51,  84 => 24,  80 => 23,  74 => 20,  70 => 19,  66 => 18,  61 => 16,  57 => 15,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

    
<!-- Mirrored from themewagon.github.io/LifeSure/service.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Aug 2024 04:57:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\" /><!-- /Added by HTTrack -->
<head>
        <meta charset=\"utf-8\">
        <title>PMUser</title>
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <meta content=\"\" name=\"keywords\">
        <meta content=\"\" name=\"description\">

       
        <link rel=\"stylesheet\" href=\"{{asset('fontawesome/releases/v5.15.4/css/all.css')}}\"/>
        <link href=\"{{asset('cdn.jsdelivr.net/npm/bootstrap-icons%401.4.1/font/bootstrap-icons.css')}}\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"{{asset('lib/animate/animate.min.css')}}\"/>
        <link href=\"{{asset('lib/lightbox/css/lightbox.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}\" rel=\"stylesheet\">


        <link href=\"{{asset('user/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('user/css/style.css')}}\" rel=\"stylesheet\">
    </head>

    <body>

       

   
        <div class=\"container-fluid nav-bar px-0 px-lg-4 py-lg-0\">
            <div class=\"container\">
                <nav class=\"navbar navbar-expand-lg navbar-light\"> 
                    <a href=\"#\" class=\"navbar-brand p-0\">
                        <h1 class=\"text-primary mb-0\"><i class=\"fab fa-slack me-2\"></i>PMANALYSIS</h1>
                    
                    </a>
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                        <span class=\"fa fa-bars\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                        <div class=\"navbar-nav mx-0 mx-lg-2\">
                           
                            <a href=\"blog.html\" class=\"nav-item nav-link\"></a>
                            <div class=\"nav-item dropdown\">
                                <a href=\"#\" class=\"nav-link\" data-bs-toggle=\"dropdown\">
                                    <span class=\"dropdown-toggle\">Projets</span>
                                </a>
                                <div class=\"dropdown-menu\">
                                    <a href=\"{{path('app_user_project')}}\" class=\"dropdown-item\">Mes projets</a>
                                    <a href=\"{{path('app_notification_new')}}\" class=\"dropdown-item\">Soumetre unprojet</a>
                                    
                                </div>
                            </div>
                            <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
                            
                        </div>
                    </div>
                    <div class=\"d-none d-xl-flex flex-shrink-0 ps-4\">
                        <div class=\"nav-item dropdown\">
                            
                                <span class=\"dropdown-toggle\">{{app.user.nomClient}}</span>
                           
                            <div class=\"dropdown-menu\">
                                <a href=\"{{path('app_logout')}}\" class=\"dropdown-item\">Se deconnecter</a>
                                <a href=\"#\" class=\"dropdown-item\">Parametre</a>
                                
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>", "static/navbar.html.twig", "C:\\Users\\SYNS-MANAGER\\Nouveau dossier\\my_project_directory\\templates\\static\\navbar.html.twig");
    }
}
