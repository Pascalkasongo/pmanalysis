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
class __TwigTemplate_988b924c238356a28718eba2ae0f45ea4ab9edc7657bc5ba17a693467e8d681b extends Template
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

<!-- Mirrored from demo.dashboardpack.com/admindek-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 12:14:05 GMT -->
<head>
<title>Admindek | Admin Template</title>


<!--[if lt IE 10]>
\t\t<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t\t<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
\t\t<![endif]-->

<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
<meta name=\"description\" content=\"Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs.\" />
<meta name=\"keywords\" content=\"flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app\">
<meta name=\"author\" content=\"colorlib\" />

<link rel=\"icon\" href=\"files/assets/images/favicon.ico\" type=\"image/x-icon\">

<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Quicksand:500,700\" rel=\"stylesheet\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("files/bower_components/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\">

<link rel=\"stylesheet\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("files/assets/pages/waves/css/waves.min.css\" type=\"text/css"), "html", null, true);
        yield "\" media=\"all\">

<link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("\"files/assets/icon/feather/css/feather.css"), "html", null, true);
        yield "\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("files/assets/css/font-awesome-n.min.css"), "html", null, true);
        yield "\">

<link rel=\"stylesheet\" href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("files/bower_components/chartist/css/chartist.css"), "html", null, true);
        yield "\" type=\"text/css\" media=\"all\">
<link href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/vendor.min.css\""), "html", null, true);
        yield " rel=\"stylesheet\" />
<link href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/default/app.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />


<link href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/jvectormap-next/jquery-jvectormap.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
<link href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
<link href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/gritter/css/jquery.gritter.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("files/assets/css/style.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("files/assets/css/widget.css"), "html", null, true);
        yield "\">
</head>
<style>
\t.initial {
    width: 50px; /* Largeur et hauteur égales pour un cercle */
    height: 50px;
    background-color: #3498db; /* Couleur de fond */
    color: white; /* Couleur du texte */
    font-size: 24px; /* Taille du texte */
    font-weight: bold; /* Texte en gras */
    text-align: center; /* Centrer le texte horizontalement */
    line-height: 50px; /* Centrer le texte verticalement */
    border-radius: 50%; /* Border-radius de 50% pour un cercle */
    display: inline-block; /* Affichage en ligne avec bloc */
}

</style>
<body classe=\"pace-done\">
    <div id=\"app\" class=\"app app-header-fixed app-sidebar-fixed has-scroll\">
        <div id=\"header\" class=\"app-header\">
            <div class=\"navbar-header\">
                <a href=\"index.html\" class=\"navbar-brand\"><span class=\"navbar-logo\"></span> <b class=\"me-3px\">PMANALYSIS</b></a>
                <button type=\"button\" class=\"navbar-mobile-toggler\" data-toggle=\"app-sidebar-mobile\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav mx-0 mx-lg-2\">
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link\" data-bs-toggle=\"dropdown\">
                        <span class=\"dropdown-toggle\">Projets</span>
                    </a>
                    <div class=\"dropdown-menu\">
                        <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_project");
        yield "\" class=\"dropdown-item\">Mes projets</a>
                        <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notification_new");
        yield "\" class=\"dropdown-item\">Soumettre un projet</a>
                    </div>
                </div>
            </div>
        </div>
            <div class=\"navbar-nav\">
                <div class=\"navbar-item navbar-form\">
                    <form action=\"\" method=\"POST\" name=\"search\">
                    <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Enter keyword\">
                    <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                    </div>
                    </form>
                </div>
            
                <div class=\"navbar-item dropdown\">
                    <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"navbar-link dropdown-toggle icon\">
                        <i class=\"fa fa-bell\"></i>
                    <span class=\"badge bg-danger\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 98, $this->source); })())), "html", null, true);
        yield " </span>
                    </a>
                    <div class=\"dropdown-menu media-list dropdown-menu-end\">
                        <div class=\"dropdown-header\">NOTIFICATIONS";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 101, $this->source); })())), "html", null, true);
        yield " </div>
                            ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["notification"]);
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 103
            yield "                           
                            <a href=\"javascript:;\" class=\"dropdown-item media\">
                               
                                <a href=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notification_read", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "id", [], "any", false, false, false, 106)]), "html", null, true);
            yield "\" class=\"dropdown-item media\" >
                                    <div class=\"media-body\">
                                        <p class=\"media-heading\">";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "nomTache", [], "any", false, false, false, 108)), "html", null, true);
            yield " <i class=\"fa fa-exclamation-circle text-danger\"></i></p>
                                        <div class=\"text-muted fs-10px\">";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "nomTache", [], "any", false, false, false, 109), "html", null, true);
            yield "</div>
                                    </div>
                                </a>
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        yield "                        
                    </div>
                </div>
                
                <div class=\"navbar-item dropdown\">
                    <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"navbar-link dropdown-toggle icon\">
                        <i class=\"fa fa-file\"></i>
                    <span class=\"badge\">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["factures"]) || array_key_exists("factures", $context) ? $context["factures"] : (function () { throw new RuntimeError('Variable "factures" does not exist.', 121, $this->source); })())), "html", null, true);
        yield " </span>
                    </a>
                    <div class=\"dropdown-menu media-list dropdown-menu-end\">
                        <div class=\"dropdown-header\">FACTURES";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["factures"]) || array_key_exists("factures", $context) ? $context["factures"] : (function () { throw new RuntimeError('Variable "factures" does not exist.', 124, $this->source); })())), "html", null, true);
        yield " </div>
                            ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["factures"]) || array_key_exists("factures", $context) ? $context["factures"] : (function () { throw new RuntimeError('Variable "factures" does not exist.', 125, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 126
            yield "                           
                            <a href=\"javascript:;\" class=\"dropdown-item media\">
                               
                                <a href=\"";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 129)]), "html", null, true);
            yield "\" class=\"dropdown-item media\" >
                                    <div class=\"media-body\">
                                        <p class=\"media-heading\">";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "projet", [], "any", false, false, false, 131), "nom", [], "any", false, false, false, 131)), "html", null, true);
            yield " <i class=\"fa fa-exclamation-circle text-danger\"></i></p>
                                    </div>
                                </a>
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        yield "                        
                    </div>
                </div>
                
                <div class=\"navbar-item navbar-user dropdown\">
                    <a href=\"#\" class=\"navbar-link dropdown-toggle d-flex align-items-center\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img src=\"../assets/img/user/user-13.jpg\" alt=\"\">
                        <span>
                            <span class=\"d-none d-md-inline\"> ";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 144, $this->source); })()), "session", [], "any", false, false, false, 144), "get", ["user_name"], "method", false, false, false, 144), "html", null, true);
        yield "</span>
                            
                        </span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-end me-1\" style=\"\">
                       
                        <a href=\"#\" class=\"dropdown-item\">Calendar</a>
                        ";
        // line 152
        yield "                        <div class=\"dropdown-divider\"></div>
                        <a href=\"";
        // line 153
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"dropdown-item\">Log Out</a>
                    </div>
                </div>
            </div>

            </div>

        </div>  
    </div>
</body>";
        
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
        return array (  288 => 153,  285 => 152,  275 => 144,  265 => 136,  254 => 131,  249 => 129,  244 => 126,  240 => 125,  236 => 124,  230 => 121,  221 => 114,  210 => 109,  206 => 108,  201 => 106,  196 => 103,  192 => 102,  188 => 101,  182 => 98,  161 => 80,  157 => 79,  119 => 44,  115 => 43,  110 => 41,  106 => 40,  102 => 39,  96 => 36,  92 => 35,  88 => 34,  83 => 32,  78 => 30,  73 => 28,  68 => 26,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from demo.dashboardpack.com/admindek-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 12:14:05 GMT -->
<head>
<title>Admindek | Admin Template</title>


<!--[if lt IE 10]>
\t\t<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t\t<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
\t\t<![endif]-->

<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
<meta name=\"description\" content=\"Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs.\" />
<meta name=\"keywords\" content=\"flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app\">
<meta name=\"author\" content=\"colorlib\" />

<link rel=\"icon\" href=\"files/assets/images/favicon.ico\" type=\"image/x-icon\">

<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Quicksand:500,700\" rel=\"stylesheet\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('files/bower_components/bootstrap/css/bootstrap.min.css')}}\">

<link rel=\"stylesheet\" href=\"{{asset('files/assets/pages/waves/css/waves.min.css\" type=\"text/css')}}\" media=\"all\">

<link rel=\"stylesheet\" type=\"text/css\" href={{asset('\"files/assets/icon/feather/css/feather.css')}}\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('files/assets/css/font-awesome-n.min.css')}}\">

<link rel=\"stylesheet\" href=\"{{asset('files/bower_components/chartist/css/chartist.css')}}\" type=\"text/css\" media=\"all\">
<link href=\"{{asset('assets/css/vendor.min.css\"')}} rel=\"stylesheet\" />
<link href=\"{{asset('assets/css/default/app.min.css')}}\" rel=\"stylesheet\" />


<link href=\"{{asset('assets/plugins/jvectormap-next/jquery-jvectormap.css')}}\" rel=\"stylesheet\" />
<link href=\"{{asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css')}}\" rel=\"stylesheet\" />
<link href=\"{{asset('assets/plugins/gritter/css/jquery.gritter.css')}}\" rel=\"stylesheet\" />

<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('files/assets/css/style.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('files/assets/css/widget.css')}}\">
</head>
<style>
\t.initial {
    width: 50px; /* Largeur et hauteur égales pour un cercle */
    height: 50px;
    background-color: #3498db; /* Couleur de fond */
    color: white; /* Couleur du texte */
    font-size: 24px; /* Taille du texte */
    font-weight: bold; /* Texte en gras */
    text-align: center; /* Centrer le texte horizontalement */
    line-height: 50px; /* Centrer le texte verticalement */
    border-radius: 50%; /* Border-radius de 50% pour un cercle */
    display: inline-block; /* Affichage en ligne avec bloc */
}

</style>
<body classe=\"pace-done\">
    <div id=\"app\" class=\"app app-header-fixed app-sidebar-fixed has-scroll\">
        <div id=\"header\" class=\"app-header\">
            <div class=\"navbar-header\">
                <a href=\"index.html\" class=\"navbar-brand\"><span class=\"navbar-logo\"></span> <b class=\"me-3px\">PMANALYSIS</b></a>
                <button type=\"button\" class=\"navbar-mobile-toggler\" data-toggle=\"app-sidebar-mobile\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav mx-0 mx-lg-2\">
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link\" data-bs-toggle=\"dropdown\">
                        <span class=\"dropdown-toggle\">Projets</span>
                    </a>
                    <div class=\"dropdown-menu\">
                        <a href=\"{{ path('app_user_project') }}\" class=\"dropdown-item\">Mes projets</a>
                        <a href=\"{{ path('app_notification_new') }}\" class=\"dropdown-item\">Soumettre un projet</a>
                    </div>
                </div>
            </div>
        </div>
            <div class=\"navbar-nav\">
                <div class=\"navbar-item navbar-form\">
                    <form action=\"\" method=\"POST\" name=\"search\">
                    <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Enter keyword\">
                    <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                    </div>
                    </form>
                </div>
            
                <div class=\"navbar-item dropdown\">
                    <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"navbar-link dropdown-toggle icon\">
                        <i class=\"fa fa-bell\"></i>
                    <span class=\"badge bg-danger\">{{notification|length}} </span>
                    </a>
                    <div class=\"dropdown-menu media-list dropdown-menu-end\">
                        <div class=\"dropdown-header\">NOTIFICATIONS{{notification|length}} </div>
                            {% for notification in notification %}
                           
                            <a href=\"javascript:;\" class=\"dropdown-item media\">
                               
                                <a href=\"{{path('notification_read',{'id':notification.id})}}\" class=\"dropdown-item media\" >
                                    <div class=\"media-body\">
                                        <p class=\"media-heading\">{{notification.nomTache|lower}} <i class=\"fa fa-exclamation-circle text-danger\"></i></p>
                                        <div class=\"text-muted fs-10px\">{{notification.nomTache}}</div>
                                    </div>
                                </a>
                            </a>
                        {% endfor %}
                        
                    </div>
                </div>
                
                <div class=\"navbar-item dropdown\">
                    <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"navbar-link dropdown-toggle icon\">
                        <i class=\"fa fa-file\"></i>
                    <span class=\"badge\">{{factures|length}} </span>
                    </a>
                    <div class=\"dropdown-menu media-list dropdown-menu-end\">
                        <div class=\"dropdown-header\">FACTURES{{factures|length}} </div>
                            {% for facture in factures %}
                           
                            <a href=\"javascript:;\" class=\"dropdown-item media\">
                               
                                <a href=\"{{path('app_facture_client',{'id':facture.id})}}\" class=\"dropdown-item media\" >
                                    <div class=\"media-body\">
                                        <p class=\"media-heading\">{{facture.projet.nom|lower}} <i class=\"fa fa-exclamation-circle text-danger\"></i></p>
                                    </div>
                                </a>
                            </a>
                        {% endfor %}
                        
                    </div>
                </div>
                
                <div class=\"navbar-item navbar-user dropdown\">
                    <a href=\"#\" class=\"navbar-link dropdown-toggle d-flex align-items-center\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img src=\"../assets/img/user/user-13.jpg\" alt=\"\">
                        <span>
                            <span class=\"d-none d-md-inline\"> {{app.session.get('user_name')}}</span>
                            
                        </span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-end me-1\" style=\"\">
                       
                        <a href=\"#\" class=\"dropdown-item\">Calendar</a>
                        {# <a href=\"extra_settings_page.html\" class=\"dropdown-item\">Settings</a> #}
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"{{path('app_logout')}}\" class=\"dropdown-item\">Log Out</a>
                    </div>
                </div>
            </div>

            </div>

        </div>  
    </div>
</body>", "static/navbar.html.twig", "C:\\Users\\SYNS-MANAGER\\Documents\\GitHub\\pmanalysis\\templates\\static\\navbar.html.twig");
    }
}
