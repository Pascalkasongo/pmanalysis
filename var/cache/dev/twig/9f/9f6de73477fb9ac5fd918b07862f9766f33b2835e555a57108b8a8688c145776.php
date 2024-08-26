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

/* admindek-html/default/offline-ui.html */
class __TwigTemplate_47ea263e0ab67b179f24b0bf7c67752e514bd643d34e4b7fa8bacc58add1ec04 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admindek-html/default/offline-ui.html"));

        yield "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/offline-ui.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 12:18:08 GMT -->
<head>
<title>Admindek | Admin Template</title>


<!--[if lt IE 10]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
<meta name=\"description\" content=\"Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs.\" />
<meta name=\"keywords\" content=\"bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive\" />
<meta name=\"author\" content=\"colorlib\" />

<link rel=\"icon\" href=\"../files/assets/images/favicon.ico\" type=\"image/x-icon\">

<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800\" rel=\"stylesheet\"><link href=\"https://fonts.googleapis.com/css?family=Quicksand:500,700\" rel=\"stylesheet\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/bower_components/bootstrap/css/bootstrap.min.css\">

<link rel=\"stylesheet\" href=\"../files/assets/pages/waves/css/waves.min.css\" type=\"text/css\" media=\"all\">
 <link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/icon/feather/css/feather.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/icon/themify-icons/themify-icons.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/icon/icofont/css/icofont.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/icon/font-awesome/css/font-awesome.min.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/css/style.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/css/pages.css\">
</head>
<body themebg-pattern=\"theme6\">

<div class=\"theme-loader\">
<div class=\"loader-track\">
<div class=\"preloader-wrapper\">
<div class=\"spinner-layer spinner-blue\">
<div class=\"circle-clipper left\">
<div class=\"circle\"></div>
</div>
<div class=\"gap-patch\">
<div class=\"circle\"></div>
</div>
<div class=\"circle-clipper right\">
<div class=\"circle\"></div>
</div>
</div>
<div class=\"spinner-layer spinner-red\">
<div class=\"circle-clipper left\">
<div class=\"circle\"></div>
</div>
<div class=\"gap-patch\">
<div class=\"circle\"></div>
</div>
<div class=\"circle-clipper right\">
<div class=\"circle\"></div>
</div>
</div>
<div class=\"spinner-layer spinner-yellow\">
<div class=\"circle-clipper left\">
<div class=\"circle\"></div>
</div>
<div class=\"gap-patch\">
<div class=\"circle\"></div>
</div>
<div class=\"circle-clipper right\">
<div class=\"circle\"></div>
</div>
</div>
<div class=\"spinner-layer spinner-green\">
<div class=\"circle-clipper left\">
<div class=\"circle\"></div>
</div>
<div class=\"gap-patch\">
<div class=\"circle\"></div>
</div>
<div class=\"circle-clipper right\">
<div class=\"circle\"></div>
</div>
</div>
</div>
</div>
</div>

<div id=\"pcoded\" class=\"pcoded\">
<div class=\"pcoded-overlay-box\"></div>
<div class=\"pcoded-container navbar-wrapper\">
<nav class=\"navbar header-navbar pcoded-header\" header-theme=\"theme6\">
<div class=\"navbar-wrapper\">
<div class=\"navbar-logo\">
<a href=\"../index.html\">
<img class=\"img-fluid\" src=\"../files/assets/images/logo.png\" alt=\"Theme-Logo\" />
</a>
</div>
<div class=\"navbar-container container-fluid\">
<ul class=\"nav-left\">
<li>
<a href=\"#!\" onclick=\"javascript:toggleFullScreen()\" class=\"waves-effect waves-light\">
<i class=\"full-screen feather icon-maximize\"></i>
</a>
</li>
</ul>
</div>
</div>
</nav>
</div>

<section class=\"login-block offline-404\">

<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-sm-12\">

<div class=\"card auth-box\">
<div class=\"card-block text-center\">
<form>
<h1>Offline</h1>
<h2 class=\"m-b-15 text-muted\">Oops! Website Is Temporarily Offline</h2>
<div class=\"left-icon-control\">
<input type=\"text\" class=\"form-control form-control-lg\" placeholder=\"Try a new Search\">
<div class=\"form-icon\">
<i class=\"icofont icofont-search\"></i>
</div>
</div>
<a href=\"../index.html\" class=\"btn btn-inverse m-t-30\">Back to Home</a>
</form>
</div>
</div>

</div>
</div>
</div>
</section>

</div>


<!--[if lt IE 10]>
<div class=\"ie-warning\">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class=\"iew-container\">
        <ul class=\"iew-download\">
            <li>
                <a href=\"http://www.google.com/chrome/\">
                    <img src=\"../files/assets/images/browser/chrome.png\" alt=\"Chrome\">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href=\"https://www.mozilla.org/en-US/firefox/new/\">
                    <img src=\"../files/assets/images/browser/firefox.png\" alt=\"Firefox\">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href=\"http://www.opera.com\">
                    <img src=\"../files/assets/images/browser/opera.png\" alt=\"Opera\">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href=\"https://www.apple.com/safari/\">
                    <img src=\"../files/assets/images/browser/safari.png\" alt=\"Safari\">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href=\"http://windows.microsoft.com/en-us/internet-explorer/download-ie\">
                    <img src=\"../files/assets/images/browser/ie.png\" alt=\"\">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script type=\"text/javascript\" src=\"../files/bower_components/jquery/js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/bower_components/jquery-ui/js/jquery-ui.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/bower_components/popper.js/js/popper.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/bower_components/bootstrap/js/bootstrap.min.js\"></script>

<script src=\"../files/assets/pages/waves/js/waves.min.js\"></script>

<script type=\"text/javascript\" src=\"../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js\"></script>

<script type=\"text/javascript\" src=\"../files/bower_components/modernizr/js/modernizr.js\"></script>
<script type=\"text/javascript\" src=\"../files/bower_components/modernizr/js/css-scrollbars.js\"></script>

<script type=\"text/javascript\" src=\"../files/assets/js/script.js\"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/offline-ui.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 12:18:08 GMT -->
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admindek-html/default/offline-ui.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/offline-ui.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 12:18:08 GMT -->
<head>
<title>Admindek | Admin Template</title>


<!--[if lt IE 10]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
<meta name=\"description\" content=\"Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs.\" />
<meta name=\"keywords\" content=\"bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive\" />
<meta name=\"author\" content=\"colorlib\" />

<link rel=\"icon\" href=\"../files/assets/images/favicon.ico\" type=\"image/x-icon\">

<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800\" rel=\"stylesheet\"><link href=\"https://fonts.googleapis.com/css?family=Quicksand:500,700\" rel=\"stylesheet\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/bower_components/bootstrap/css/bootstrap.min.css\">

<link rel=\"stylesheet\" href=\"../files/assets/pages/waves/css/waves.min.css\" type=\"text/css\" media=\"all\">
 <link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/icon/feather/css/feather.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/icon/themify-icons/themify-icons.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/icon/icofont/css/icofont.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/icon/font-awesome/css/font-awesome.min.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/css/style.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/css/pages.css\">
</head>
<body themebg-pattern=\"theme6\">

<div class=\"theme-loader\">
<div class=\"loader-track\">
<div class=\"preloader-wrapper\">
<div class=\"spinner-layer spinner-blue\">
<div class=\"circle-clipper left\">
<div class=\"circle\"></div>
</div>
<div class=\"gap-patch\">
<div class=\"circle\"></div>
</div>
<div class=\"circle-clipper right\">
<div class=\"circle\"></div>
</div>
</div>
<div class=\"spinner-layer spinner-red\">
<div class=\"circle-clipper left\">
<div class=\"circle\"></div>
</div>
<div class=\"gap-patch\">
<div class=\"circle\"></div>
</div>
<div class=\"circle-clipper right\">
<div class=\"circle\"></div>
</div>
</div>
<div class=\"spinner-layer spinner-yellow\">
<div class=\"circle-clipper left\">
<div class=\"circle\"></div>
</div>
<div class=\"gap-patch\">
<div class=\"circle\"></div>
</div>
<div class=\"circle-clipper right\">
<div class=\"circle\"></div>
</div>
</div>
<div class=\"spinner-layer spinner-green\">
<div class=\"circle-clipper left\">
<div class=\"circle\"></div>
</div>
<div class=\"gap-patch\">
<div class=\"circle\"></div>
</div>
<div class=\"circle-clipper right\">
<div class=\"circle\"></div>
</div>
</div>
</div>
</div>
</div>

<div id=\"pcoded\" class=\"pcoded\">
<div class=\"pcoded-overlay-box\"></div>
<div class=\"pcoded-container navbar-wrapper\">
<nav class=\"navbar header-navbar pcoded-header\" header-theme=\"theme6\">
<div class=\"navbar-wrapper\">
<div class=\"navbar-logo\">
<a href=\"../index.html\">
<img class=\"img-fluid\" src=\"../files/assets/images/logo.png\" alt=\"Theme-Logo\" />
</a>
</div>
<div class=\"navbar-container container-fluid\">
<ul class=\"nav-left\">
<li>
<a href=\"#!\" onclick=\"javascript:toggleFullScreen()\" class=\"waves-effect waves-light\">
<i class=\"full-screen feather icon-maximize\"></i>
</a>
</li>
</ul>
</div>
</div>
</nav>
</div>

<section class=\"login-block offline-404\">

<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-sm-12\">

<div class=\"card auth-box\">
<div class=\"card-block text-center\">
<form>
<h1>Offline</h1>
<h2 class=\"m-b-15 text-muted\">Oops! Website Is Temporarily Offline</h2>
<div class=\"left-icon-control\">
<input type=\"text\" class=\"form-control form-control-lg\" placeholder=\"Try a new Search\">
<div class=\"form-icon\">
<i class=\"icofont icofont-search\"></i>
</div>
</div>
<a href=\"../index.html\" class=\"btn btn-inverse m-t-30\">Back to Home</a>
</form>
</div>
</div>

</div>
</div>
</div>
</section>

</div>


<!--[if lt IE 10]>
<div class=\"ie-warning\">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class=\"iew-container\">
        <ul class=\"iew-download\">
            <li>
                <a href=\"http://www.google.com/chrome/\">
                    <img src=\"../files/assets/images/browser/chrome.png\" alt=\"Chrome\">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href=\"https://www.mozilla.org/en-US/firefox/new/\">
                    <img src=\"../files/assets/images/browser/firefox.png\" alt=\"Firefox\">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href=\"http://www.opera.com\">
                    <img src=\"../files/assets/images/browser/opera.png\" alt=\"Opera\">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href=\"https://www.apple.com/safari/\">
                    <img src=\"../files/assets/images/browser/safari.png\" alt=\"Safari\">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href=\"http://windows.microsoft.com/en-us/internet-explorer/download-ie\">
                    <img src=\"../files/assets/images/browser/ie.png\" alt=\"\">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script type=\"text/javascript\" src=\"../files/bower_components/jquery/js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/bower_components/jquery-ui/js/jquery-ui.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/bower_components/popper.js/js/popper.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/bower_components/bootstrap/js/bootstrap.min.js\"></script>

<script src=\"../files/assets/pages/waves/js/waves.min.js\"></script>

<script type=\"text/javascript\" src=\"../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js\"></script>

<script type=\"text/javascript\" src=\"../files/bower_components/modernizr/js/modernizr.js\"></script>
<script type=\"text/javascript\" src=\"../files/bower_components/modernizr/js/css-scrollbars.js\"></script>

<script type=\"text/javascript\" src=\"../files/assets/js/script.js\"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/offline-ui.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 12:18:08 GMT -->
</html>
", "admindek-html/default/offline-ui.html", "C:\\Users\\SYNS-MANAGER\\Nouveau dossier\\my_project_directory\\templates\\admindek-html\\default\\offline-ui.html");
    }
}
