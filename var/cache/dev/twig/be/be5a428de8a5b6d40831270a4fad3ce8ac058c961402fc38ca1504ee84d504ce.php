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
                <div class=\"navbar-item dropdown\">
                    <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"navbar-link dropdown-toggle icon\">
                        <i class=\"fa fa-bell\"></i>
                        <span class=\"badge\">5</span>
                    </a>
                    <div class=\"dropdown-menu media-list dropdown-menu-end\">
                        <div class=\"dropdown-header\">NOTIFICATIONS (5)</div>
                            <a href=\"javascript:;\" class=\"dropdown-item media\">
                                <div class=\"media-left\">
                                    <i class=\"fa fa-bug media-object bg-gray-500\"></i>
                                </div>
                                <div class=\"media-body\">
                                    <h6 class=\"media-heading\">Server Error Reports <i class=\"fa fa-exclamation-circle text-danger\"></i></h6>
                                    <div class=\"text-muted fs-10px\">3 minutes ago</div>
                                </div>
                            </a>
                            <a href=\"javascript:;\" class=\"dropdown-item media\">
                                <div class=\"media-left\">
                                    <img src=\"../assets/img/user/user-1.jpg\" class=\"media-object\" alt=\"\">
                                    <i class=\"fab fa-facebook-messenger text-blue media-object-icon\"></i>
                                </div>
                                <div class=\"media-body\">
                                    <h6 class=\"media-heading\">John Smith</h6>
                                    <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                    <div class=\"text-muted fs-10px\">25 minutes ago</div>
                                </div>
                            </a>
                            <a href=\"javascript:;\" class=\"dropdown-item media\">
                                <div class=\"media-left\">
                                    <img src=\"../assets/img/user/user-2.jpg\" class=\"media-object\" alt=\"\">
                                    <i class=\"fab fa-facebook-messenger text-blue media-object-icon\"></i>
                                </div>
                                <div class=\"media-body\">
                                    <h6 class=\"media-heading\">Olivia</h6>
                                    <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                    <div class=\"text-muted fs-10px\">35 minutes ago</div>
                                </div>
                            </a>
                            <a href=\"javascript:;\" class=\"dropdown-item media\">
                                <div class=\"media-left\">
                                    <i class=\"fa fa-plus media-object bg-gray-500\"></i>
                                </div>
                                <div class=\"media-body\">
                                    <h6 class=\"media-heading\"> New User Registered</h6>
                                    <div class=\"text-muted fs-10px\">1 hour ago</div>
                                </div>
                            </a>
                            <a href=\"javascript:;\" class=\"dropdown-item media\">
                                <div class=\"media-left\">
                                    <i class=\"fa fa-envelope media-object bg-gray-500\"></i>
                                    <i class=\"fab fa-google text-warning media-object-icon fs-14px\"></i>
                                </div>
                                <div class=\"media-body\">
                                    <h6 class=\"media-heading\"> New Email From John</h6>
                                    <div class=\"text-muted fs-10px\">2 hour ago</div>
                                </div>
                            </a>
                        <div class=\"dropdown-footer text-center\">
                            <a href=\"javascript:;\" class=\"text-decoration-none\">View more</a>
                        </div>
                    </div>
                </div>
                <div class=\"navbar-item navbar-user dropdown\">
                    <a href=\"#\" class=\"navbar-link dropdown-toggle d-flex align-items-center\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img src=\"../assets/img/user/user-13.jpg\" alt=\"\">
                        <span>
                            <span class=\"d-none d-md-inline\"> ";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "session", [], "any", false, false, false, 147), "get", ["user_name"], "method", false, false, false, 147), "html", null, true);
        yield "</span>
                            
                        </span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-end me-1\" style=\"\">
                       
                        <a href=\"#\" class=\"dropdown-item\">Calendar</a>
                        ";
        // line 155
        yield "                        <div class=\"dropdown-divider\"></div>
                        <a href=\"";
        // line 156
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
        return array (  238 => 156,  235 => 155,  225 => 147,  119 => 44,  115 => 43,  110 => 41,  106 => 40,  102 => 39,  96 => 36,  92 => 35,  88 => 34,  83 => 32,  78 => 30,  73 => 28,  68 => 26,  41 => 1,);
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
                <div class=\"navbar-item dropdown\">
                    <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"navbar-link dropdown-toggle icon\">
                        <i class=\"fa fa-bell\"></i>
                        <span class=\"badge\">5</span>
                    </a>
                    <div class=\"dropdown-menu media-list dropdown-menu-end\">
                        <div class=\"dropdown-header\">NOTIFICATIONS (5)</div>
                            <a href=\"javascript:;\" class=\"dropdown-item media\">
                                <div class=\"media-left\">
                                    <i class=\"fa fa-bug media-object bg-gray-500\"></i>
                                </div>
                                <div class=\"media-body\">
                                    <h6 class=\"media-heading\">Server Error Reports <i class=\"fa fa-exclamation-circle text-danger\"></i></h6>
                                    <div class=\"text-muted fs-10px\">3 minutes ago</div>
                                </div>
                            </a>
                            <a href=\"javascript:;\" class=\"dropdown-item media\">
                                <div class=\"media-left\">
                                    <img src=\"../assets/img/user/user-1.jpg\" class=\"media-object\" alt=\"\">
                                    <i class=\"fab fa-facebook-messenger text-blue media-object-icon\"></i>
                                </div>
                                <div class=\"media-body\">
                                    <h6 class=\"media-heading\">John Smith</h6>
                                    <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                    <div class=\"text-muted fs-10px\">25 minutes ago</div>
                                </div>
                            </a>
                            <a href=\"javascript:;\" class=\"dropdown-item media\">
                                <div class=\"media-left\">
                                    <img src=\"../assets/img/user/user-2.jpg\" class=\"media-object\" alt=\"\">
                                    <i class=\"fab fa-facebook-messenger text-blue media-object-icon\"></i>
                                </div>
                                <div class=\"media-body\">
                                    <h6 class=\"media-heading\">Olivia</h6>
                                    <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                    <div class=\"text-muted fs-10px\">35 minutes ago</div>
                                </div>
                            </a>
                            <a href=\"javascript:;\" class=\"dropdown-item media\">
                                <div class=\"media-left\">
                                    <i class=\"fa fa-plus media-object bg-gray-500\"></i>
                                </div>
                                <div class=\"media-body\">
                                    <h6 class=\"media-heading\"> New User Registered</h6>
                                    <div class=\"text-muted fs-10px\">1 hour ago</div>
                                </div>
                            </a>
                            <a href=\"javascript:;\" class=\"dropdown-item media\">
                                <div class=\"media-left\">
                                    <i class=\"fa fa-envelope media-object bg-gray-500\"></i>
                                    <i class=\"fab fa-google text-warning media-object-icon fs-14px\"></i>
                                </div>
                                <div class=\"media-body\">
                                    <h6 class=\"media-heading\"> New Email From John</h6>
                                    <div class=\"text-muted fs-10px\">2 hour ago</div>
                                </div>
                            </a>
                        <div class=\"dropdown-footer text-center\">
                            <a href=\"javascript:;\" class=\"text-decoration-none\">View more</a>
                        </div>
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
</body>", "content/navbar.html.twig", "C:\\Users\\SYNS-MANAGER\\Documents\\GitHub\\pmanalysis\\templates\\content\\navbar.html.twig");
    }
}
