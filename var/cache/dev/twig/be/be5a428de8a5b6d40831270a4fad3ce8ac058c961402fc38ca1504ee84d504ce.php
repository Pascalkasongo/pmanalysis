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

/* content/navbar.html.twig */
class __TwigTemplate_9be42f620d4852b7007ebf115ffe0db01f535f35fb9f596870029b85bb9657ec extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/navbar.html.twig"));

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
            <div class=\"navbar-nav\">
                <div class=\"navbar-item navbar-form\">
                    <form action=\"\" method=\"POST\" name=\"search\">
                    <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Enter keyword\">
                    <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                    </div>
                    </form>
                </div>

                ";
        // line 82
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "session", [], "any", false, false, false, 82), "get", ["user_role"], "method", false, false, false, 82), 0, [], "array", false, false, false, 82) == "ROLE_CHEF_PROJET") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "session", [], "any", false, false, false, 82), "get", ["user_role"], "method", false, false, false, 82), 0, [], "array", false, false, false, 82) == "ROLE_DIRECTEUR"))) {
            // line 83
            yield "            
                <div class=\"navbar-item dropdown\">
                    <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"navbar-link dropdown-toggle icon\">
                        <i class=\"fa fa-bell\"></i>
                    <span class=\"badge bg-danger\">";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 87, $this->source); })())), "html", null, true);
            yield "</span>
                    </a>
                    <div class=\"dropdown-menu media-list dropdown-menu-end\">
                        <div class=\"dropdown-header\">NOTIFICATIONS (";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 90, $this->source); })())), "html", null, true);
            yield ")</div>
                            ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 91, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 92
                yield "                           
                            <a href=\"javascript:;\" class=\"dropdown-item media\">
                               
                                <a href=\"";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notification_read", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "id", [], "any", false, false, false, 95)]), "html", null, true);
                yield "\" class=\"dropdown-item media\" >
                                    <div class=\"media-body\">
                                        <p class=\"media-heading\">";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "titre", [], "any", false, false, false, 97)), "html", null, true);
                yield " <i class=\"fa fa-exclamation-circle text-danger\"></i></p>
                                        <div class=\"text-muted fs-10px\">";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "description", [], "any", false, false, false, 98), "html", null, true);
                yield "</div>
                                    </div>
                                </a>
                            </a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            yield "                        
                    </div>
                </div>
                <div class=\"navbar-item dropdown\">
                    <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"navbar-link dropdown-toggle icon\">
                        <i class=\"fa fa-bell\"></i>
                    <span class=\"badge \">";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notification_read"]) || array_key_exists("notification_read", $context) ? $context["notification_read"] : (function () { throw new RuntimeError('Variable "notification_read" does not exist.', 109, $this->source); })())), "html", null, true);
            yield "</span>
                    </a>
                    <div class=\"dropdown-menu media-list dropdown-menu-end\">
                        <div class=\"dropdown-header\">NOTIFICATIONS (";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notification_read"]) || array_key_exists("notification_read", $context) ? $context["notification_read"] : (function () { throw new RuntimeError('Variable "notification_read" does not exist.', 112, $this->source); })())), "html", null, true);
            yield ")</div>
                            ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notification_read"]) || array_key_exists("notification_read", $context) ? $context["notification_read"] : (function () { throw new RuntimeError('Variable "notification_read" does not exist.', 113, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 114
                yield "                           
                            <a href=\"javascript:;\" class=\"dropdown-item media\">
                               
                                <a href=\"";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notification_read", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "id", [], "any", false, false, false, 117)]), "html", null, true);
                yield "\" class=\"dropdown-item media\" >
                                    <div class=\"media-body\">
                                        <p class=\"media-heading\">";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "titre", [], "any", false, false, false, 119)), "html", null, true);
                yield " <i class=\"fa fa-exclamation-circle text-danger\"></i></p>
                                        <div class=\"text-muted fs-10px\">";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "description", [], "any", false, false, false, 120), "html", null, true);
                yield "</div>
                                    </div>
                                </a>
                            </a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            yield "                        
                    </div>
                </div>
                        
            ";
        }
        // line 130
        yield "                <div class=\"navbar-item navbar-user dropdown\">
                    <a href=\"#\" class=\"navbar-link dropdown-toggle d-flex align-items-center\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img src=\"../assets/img/user/user-13.jpg\" alt=\"\">
                        <span>
                            <span class=\"d-none d-md-inline\"> ";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "session", [], "any", false, false, false, 134), "get", ["user_name"], "method", false, false, false, 134), "html", null, true);
        yield "</span>
                            
                        </span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-end me-1\" style=\"\">
                       
                        <a href=\"#\" class=\"dropdown-item\">Calendar</a>
                        ";
        // line 142
        yield "                        <div class=\"dropdown-divider\"></div>
                        <a href=\"";
        // line 143
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
        return "content/navbar.html.twig";
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
        return array (  280 => 143,  277 => 142,  267 => 134,  261 => 130,  254 => 125,  243 => 120,  239 => 119,  234 => 117,  229 => 114,  225 => 113,  221 => 112,  215 => 109,  207 => 103,  196 => 98,  192 => 97,  187 => 95,  182 => 92,  178 => 91,  174 => 90,  168 => 87,  162 => 83,  160 => 82,  119 => 44,  115 => 43,  110 => 41,  106 => 40,  102 => 39,  96 => 36,  92 => 35,  88 => 34,  83 => 32,  78 => 30,  73 => 28,  68 => 26,  41 => 1,);
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
            <div class=\"navbar-nav\">
                <div class=\"navbar-item navbar-form\">
                    <form action=\"\" method=\"POST\" name=\"search\">
                    <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Enter keyword\">
                    <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                    </div>
                    </form>
                </div>

                {% if app.session.get('user_role')[0] == ('ROLE_CHEF_PROJET') or app.session.get('user_role')[0] == ('ROLE_DIRECTEUR')  %}
            
                <div class=\"navbar-item dropdown\">
                    <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"navbar-link dropdown-toggle icon\">
                        <i class=\"fa fa-bell\"></i>
                    <span class=\"badge bg-danger\">{{notifications|length }}</span>
                    </a>
                    <div class=\"dropdown-menu media-list dropdown-menu-end\">
                        <div class=\"dropdown-header\">NOTIFICATIONS ({{notifications|length }})</div>
                            {% for notification in notifications %}
                           
                            <a href=\"javascript:;\" class=\"dropdown-item media\">
                               
                                <a href=\"{{path('notification_read',{'id':notification.id})}}\" class=\"dropdown-item media\" >
                                    <div class=\"media-body\">
                                        <p class=\"media-heading\">{{notification.titre|lower}} <i class=\"fa fa-exclamation-circle text-danger\"></i></p>
                                        <div class=\"text-muted fs-10px\">{{notification.description}}</div>
                                    </div>
                                </a>
                            </a>
                        {% endfor %}
                        
                    </div>
                </div>
                <div class=\"navbar-item dropdown\">
                    <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"navbar-link dropdown-toggle icon\">
                        <i class=\"fa fa-bell\"></i>
                    <span class=\"badge \">{{notification_read|length }}</span>
                    </a>
                    <div class=\"dropdown-menu media-list dropdown-menu-end\">
                        <div class=\"dropdown-header\">NOTIFICATIONS ({{notification_read|length }})</div>
                            {% for notification in notification_read %}
                           
                            <a href=\"javascript:;\" class=\"dropdown-item media\">
                               
                                <a href=\"{{path('notification_read',{'id':notification.id})}}\" class=\"dropdown-item media\" >
                                    <div class=\"media-body\">
                                        <p class=\"media-heading\">{{notification.titre|lower}} <i class=\"fa fa-exclamation-circle text-danger\"></i></p>
                                        <div class=\"text-muted fs-10px\">{{notification.description}}</div>
                                    </div>
                                </a>
                            </a>
                        {% endfor %}
                        
                    </div>
                </div>
                        
            {% endif %}
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
</body>", "content/navbar.html.twig", "C:\\Users\\SYNS-MANAGER\\Documents\\GitHub\\pmanalysis\\templates\\content\\navbar.html.twig");
    }
}
