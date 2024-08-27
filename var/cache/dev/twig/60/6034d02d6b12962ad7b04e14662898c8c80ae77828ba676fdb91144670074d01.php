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

/* security/login.html.twig */
class __TwigTemplate_e147a5dd912ceebf49d71a0ba1916a2cd478cd06484a6ac03aa5ec4f1312505d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        yield "<html lang=\"en\">

<!-- Mirrored from seantheme.com/color-admin/admin/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 11:57:42 GMT -->
<head>
<meta charset=\"utf-8\" />
<title>PMAnalysis | connexion</title>
<meta content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" name=\"viewport\" />
<meta content name=\"description\" />
<meta content name=\"author\" />

<link href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/vendor.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
<link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/default/app.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />

</head>
<body class=\"pace-top\">


<div id=\"app\" class=\"app\">

<div class=\"login login-v1\">

<div class=\"login-container\">

<div class=\"login-header\">
<div class=\"brand\">
<div class=\"d-flex align-items-center\">
<span class=\"logo\"></span> <b class=\"me-1\">PMANALYSIS</b> Connexion
</div>
</div>
<div class=\"icon\">
<i class=\"fa fa-lock\"></i>
</div>
</div>


<div class=\"login-body\">

<div class=\"login-content fs-13px\">
<form method=\"post\">
    ";
        // line 40
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 40, $this->source); })())) {
            // line 41
            yield "        <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 41, $this->source); })()), "messageKey", [], "any", false, false, false, 41), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 41, $this->source); })()), "messageData", [], "any", false, false, false, 41), "security"), "html", null, true);
            yield "</div>
    ";
        }
        // line 43
        yield "
    ";
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44)) {
            // line 45
            yield "        <div class=\"mb-3\">
            You are logged in as ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "userIdentifier", [], "any", false, false, false, 46), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
        </div>
    ";
        }
        // line 49
        yield "
    <label for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 51, $this->source); })()), "html", null, true);
        yield "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
    <label for=\"inputPassword\">Password</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\"
    >
    <br>
    <button class=\"btn btn-lg btn-primary\" type=\"submit\">
        Se Connecter
    </button>
</form>
</div>

</div>

</div>

</div>



<div class=\"theme-list\">
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-red\" data-theme-class=\"theme-red\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Red\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-pink\" data-theme-class=\"theme-pink\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Pink\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-orange\" data-theme-class=\"theme-orange\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Orange\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-yellow\" data-theme-class=\"theme-yellow\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Yellow\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-lime\" data-theme-class=\"theme-lime\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Lime\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-green\" data-theme-class=\"theme-green\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Green\">&nbsp;</a></div>
<div class=\"theme-list-item active\"><a href=\"javascript:;\" class=\"theme-list-link bg-teal\" data-theme-class data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Default\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-cyan\" data-theme-class=\"theme-cyan\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Cyan\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-blue\" data-theme-class=\"theme-blue\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Blue\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-purple\" data-theme-class=\"theme-purple\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Purple\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-indigo\" data-theme-class=\"theme-indigo\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Indigo\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-black\" data-theme-class=\"theme-gray-600\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Black\">&nbsp;</a></div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
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
        return array (  124 => 56,  116 => 51,  112 => 49,  104 => 46,  101 => 45,  99 => 44,  96 => 43,  90 => 41,  88 => 40,  57 => 12,  53 => 11,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\">

<!-- Mirrored from seantheme.com/color-admin/admin/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 11:57:42 GMT -->
<head>
<meta charset=\"utf-8\" />
<title>PMAnalysis | connexion</title>
<meta content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" name=\"viewport\" />
<meta content name=\"description\" />
<meta content name=\"author\" />

<link href=\"{{asset('assets/css/vendor.min.css')}}\" rel=\"stylesheet\" />
<link href=\"{{asset('assets/css/default/app.min.css')}}\" rel=\"stylesheet\" />

</head>
<body class=\"pace-top\">


<div id=\"app\" class=\"app\">

<div class=\"login login-v1\">

<div class=\"login-container\">

<div class=\"login-header\">
<div class=\"brand\">
<div class=\"d-flex align-items-center\">
<span class=\"logo\"></span> <b class=\"me-1\">PMANALYSIS</b> Connexion
</div>
</div>
<div class=\"icon\">
<i class=\"fa fa-lock\"></i>
</div>
</div>


<div class=\"login-body\">

<div class=\"login-content fs-13px\">
<form method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}

    <label for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
    <label for=\"inputPassword\">Password</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\"
    >
    <br>
    <button class=\"btn btn-lg btn-primary\" type=\"submit\">
        Se Connecter
    </button>
</form>
</div>

</div>

</div>

</div>



<div class=\"theme-list\">
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-red\" data-theme-class=\"theme-red\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Red\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-pink\" data-theme-class=\"theme-pink\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Pink\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-orange\" data-theme-class=\"theme-orange\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Orange\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-yellow\" data-theme-class=\"theme-yellow\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Yellow\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-lime\" data-theme-class=\"theme-lime\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Lime\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-green\" data-theme-class=\"theme-green\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Green\">&nbsp;</a></div>
<div class=\"theme-list-item active\"><a href=\"javascript:;\" class=\"theme-list-link bg-teal\" data-theme-class data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Default\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-cyan\" data-theme-class=\"theme-cyan\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Cyan\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-blue\" data-theme-class=\"theme-blue\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Blue\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-purple\" data-theme-class=\"theme-purple\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Purple\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-indigo\" data-theme-class=\"theme-indigo\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Indigo\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-black\" data-theme-class=\"theme-gray-600\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Black\">&nbsp;</a></div>
</div>
", "security/login.html.twig", "C:\\Users\\SYNS-MANAGER\\Documents\\GitHub\\pmanalysis\\templates\\security\\login.html.twig");
    }
}
