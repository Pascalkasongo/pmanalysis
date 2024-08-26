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

/* home_user/security/auth.html.twig */
class __TwigTemplate_7b12e3c829b039c752f84838fe69231195fd7d7a1c73deecb2b9dba408d5db57 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_user/security/auth.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/auth-sign-in-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 12:17:57 GMT -->
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

<link rel=\"stylesheet\" href=\"../files/assets/pages/waves/css/waves.min.css\" type=\"text/css\" media=\"all\"> <link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/icon/feather/css/feather.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/icon/themify-icons/themify-icons.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/icon/icofont/css/icofont.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/icon/font-awesome/css/font-awesome.min.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/css/style.css\"><link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/css/pages.css\">
</head>
<body themebg-pattern=\"theme1\">

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

<section class=\"login-block\">

<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-sm-12\">

<form class=\"md-float-material form-material\" method=\"post\">

    ";
        // line 98
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 98, $this->source); })())) {
            // line 99
            yield "        <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 99, $this->source); })()), "messageKey", [], "any", false, false, false, 99), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 99, $this->source); })()), "messageData", [], "any", false, false, false, 99), "security"), "html", null, true);
            yield "</div>
     ";
        }
        // line 101
        yield "
    ";
        // line 102
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102)) {
            // line 103
            yield "        <div class=\"mb-3\">
            You are logged in as  ";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "userIdentifier", [], "any", false, false, false, 104), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
        </div>
    ";
        }
        // line 107
        yield "
    <div class=\"auth-box card\">
    <div class=\"card-block\">
    <div class=\"row m-b-20\">
    <div class=\"col-md-12\">
    <h3 class=\"text-center txt-primary\">Sign In</h3>
    </div>
    </div>
    <div class=\"row m-b-20\">
    <div class=\"col-md-6\">
    <button class=\"btn btn-facebook m-b-20 btn-block\"><i class=\"icofont icofont-social-facebook\"></i>facebook</button>
    </div>
    <div class=\"col-md-6\">
    <button class=\"btn btn-twitter m-b-20 btn-block\"><i class=\"icofont icofont-social-twitter\"></i>twitter</button>
    </div>
    </div>
    <p class=\"text-muted text-center p-b-5\">Sign in with your regular account</p>
    <label for=\"username\">Email</label>
        <input type=\"email\" value=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 125, $this->source); })()), "html", null, true);
        yield "\" name=\"_username\" id=\"username\" class=\"form-control\" autocomplete=\"email\" required autofocus>
        <label for=\"password\">Password</label>
        <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\" autocomplete=\"current-password\" required>

    <div class=\"row m-t-25 text-left\">
    <div class=\"col-12\">
    <div class=\"checkbox-fade fade-in-primary\">
    <label>
    <input type=\"checkbox\" value=\"\">
    <span class=\"cr\"><i class=\"cr-icon icofont icofont-ui-check txt-primary\"></i></span>
    <span class=\"text-inverse\">Remember me</span>
    </label>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\"
               value=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\"
        >
    <div class=\"forgot-phone text-right float-right\">
    <a href=\"auth-reset-password.html\" class=\"text-right f-w-600\"> Forgot Password?</a>
    </div>
    </div>
    </div>
    <div class=\"row m-t-30\">
    <div class=\"col-md-12\">
    <button type=\"submit\" class=\"btn btn-primary btn-md btn-block waves-effect text-center m-b-20\">LOGIN</button>
    </div>
    </div>
    <p class=\"text-inverse text-left\">Don't have an account?<a href=\"auth-sign-up-social.html\"> <b>Register here </b></a>for free!</p>
    </div>
    </div>
</form>

</div>

</div>

</div>

</div>

</section>


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
<script type=\"text/javascript\" src=\"../files/assets/js/common-pages.js\"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/auth-sign-in-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 12:17:58 GMT -->
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
        return "home_user/security/auth.html.twig";
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
        return array (  201 => 139,  184 => 125,  164 => 107,  156 => 104,  153 => 103,  151 => 102,  148 => 101,  142 => 99,  140 => 98,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/auth-sign-in-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 12:17:57 GMT -->
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

<link rel=\"stylesheet\" href=\"../files/assets/pages/waves/css/waves.min.css\" type=\"text/css\" media=\"all\"> <link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/icon/feather/css/feather.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/icon/themify-icons/themify-icons.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/icon/icofont/css/icofont.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/icon/font-awesome/css/font-awesome.min.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/css/style.css\"><link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/css/pages.css\">
</head>
<body themebg-pattern=\"theme1\">

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

<section class=\"login-block\">

<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-sm-12\">

<form class=\"md-float-material form-material\" method=\"post\">

    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
     {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as  {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}

    <div class=\"auth-box card\">
    <div class=\"card-block\">
    <div class=\"row m-b-20\">
    <div class=\"col-md-12\">
    <h3 class=\"text-center txt-primary\">Sign In</h3>
    </div>
    </div>
    <div class=\"row m-b-20\">
    <div class=\"col-md-6\">
    <button class=\"btn btn-facebook m-b-20 btn-block\"><i class=\"icofont icofont-social-facebook\"></i>facebook</button>
    </div>
    <div class=\"col-md-6\">
    <button class=\"btn btn-twitter m-b-20 btn-block\"><i class=\"icofont icofont-social-twitter\"></i>twitter</button>
    </div>
    </div>
    <p class=\"text-muted text-center p-b-5\">Sign in with your regular account</p>
    <label for=\"username\">Email</label>
        <input type=\"email\" value=\"{{ last_username }}\" name=\"_username\" id=\"username\" class=\"form-control\" autocomplete=\"email\" required autofocus>
        <label for=\"password\">Password</label>
        <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\" autocomplete=\"current-password\" required>

    <div class=\"row m-t-25 text-left\">
    <div class=\"col-12\">
    <div class=\"checkbox-fade fade-in-primary\">
    <label>
    <input type=\"checkbox\" value=\"\">
    <span class=\"cr\"><i class=\"cr-icon icofont icofont-ui-check txt-primary\"></i></span>
    <span class=\"text-inverse\">Remember me</span>
    </label>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\"
               value=\"{{ csrf_token('authenticate') }}\"
        >
    <div class=\"forgot-phone text-right float-right\">
    <a href=\"auth-reset-password.html\" class=\"text-right f-w-600\"> Forgot Password?</a>
    </div>
    </div>
    </div>
    <div class=\"row m-t-30\">
    <div class=\"col-md-12\">
    <button type=\"submit\" class=\"btn btn-primary btn-md btn-block waves-effect text-center m-b-20\">LOGIN</button>
    </div>
    </div>
    <p class=\"text-inverse text-left\">Don't have an account?<a href=\"auth-sign-up-social.html\"> <b>Register here </b></a>for free!</p>
    </div>
    </div>
</form>

</div>

</div>

</div>

</div>

</section>


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
<script type=\"text/javascript\" src=\"../files/assets/js/common-pages.js\"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/auth-sign-in-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 12:17:58 GMT -->
</html>
", "home_user/security/auth.html.twig", "C:\\Users\\SYNS-MANAGER\\Nouveau dossier\\my_project_directory\\templates\\home_user\\security\\auth.html.twig");
    }
}
