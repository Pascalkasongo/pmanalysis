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

/* content/data.html.twig */
class __TwigTemplate_f4b123c24488f44b6d3b2b63c808bcf8662f2d9484a4e1040e5a0e0c00ae9ef9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/data.html.twig"));

        // line 1
        yield "
<!--[if lt IE 10]>
    <div class=\"ie-warning\">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade
            <br/>to any of the following web browsers to access this website.
        </p>
        <div class=\"iew-container\">
            <ul class=\"iew-download\">
                <li>
                    <a href=\"http://www.google.com/chrome/\">
                        <img src=\"./files/assets/images/browser/chrome.png\" alt=\"Chrome\">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href=\"https://www.mozilla.org/en-US/firefox/new/\">
                        <img src=\"./files/assets/images/browser/firefox.png\" alt=\"Firefox\">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href=\"http://www.opera.com\">
                        <img src=\"./files/assets/images/browser/opera.png\" alt=\"Opera\">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href=\"https://www.apple.com/safari/\">
                        <img src=\"./files/assets/images/browser/safari.png\" alt=\"Safari\">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href=\"http://windows.microsoft.com/en-us/internet-explorer/download-ie\">
                        <img src=\"./files/assets/images/browser/ie.png\" alt=\"\">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
<![endif]-->


<script data-cfasync=\"false\" src=\"../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js\"></script><script type=\"text/javascript\" src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("files/bower_components/jquery/js/jquery.min.js"), "html", null, true);
        yield "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("files/bower_components/jquery-ui/js/jquery-ui.min.js"), "html", null, true);
        yield "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("files/bower_components/popper.js/js/popper.min.js"), "html", null, true);
        yield "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("files/bower_components/bootstrap/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("files/assets/pages/waves/js/waves.min.js"), "html", null, true);
        yield "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("files/assets/pages/chart/float/jquery.flot.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("files/assets/pages/chart/float/jquery.flot.categories.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("files/assets/pages/chart/float/curvedLines.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("files/assets/pages/chart/float/jquery.flot.tooltip.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("files/bower_components/chartist/js/chartist.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("files/assets/pages/widget/amchart/amcharts.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("files/assets/pages/widget/amchart/serial.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("files/assets/pages/widget/amchart/light.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("files/assets/js/pcoded.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("files/assets/js/vertical/vertical-layout.min.js"), "html", null, true);
        yield "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("files/assets/pages/dashboard/custom-dashboard.min.js"), "html", null, true);
        yield "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("files/assets/js/script.min.js"), "html", null, true);
        yield "\"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/admindek-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 12:15:07 GMT -->
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
        return "content/data.html.twig";
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
        return array (  163 => 70,  159 => 69,  155 => 68,  151 => 67,  146 => 65,  142 => 64,  138 => 63,  133 => 61,  128 => 59,  124 => 58,  120 => 57,  116 => 56,  111 => 54,  106 => 52,  101 => 50,  97 => 49,  93 => 48,  89 => 47,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!--[if lt IE 10]>
    <div class=\"ie-warning\">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade
            <br/>to any of the following web browsers to access this website.
        </p>
        <div class=\"iew-container\">
            <ul class=\"iew-download\">
                <li>
                    <a href=\"http://www.google.com/chrome/\">
                        <img src=\"./files/assets/images/browser/chrome.png\" alt=\"Chrome\">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href=\"https://www.mozilla.org/en-US/firefox/new/\">
                        <img src=\"./files/assets/images/browser/firefox.png\" alt=\"Firefox\">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href=\"http://www.opera.com\">
                        <img src=\"./files/assets/images/browser/opera.png\" alt=\"Opera\">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href=\"https://www.apple.com/safari/\">
                        <img src=\"./files/assets/images/browser/safari.png\" alt=\"Safari\">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href=\"http://windows.microsoft.com/en-us/internet-explorer/download-ie\">
                        <img src=\"./files/assets/images/browser/ie.png\" alt=\"\">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
<![endif]-->


<script data-cfasync=\"false\" src=\"../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js\"></script><script type=\"text/javascript\" src=\"{{asset('files/bower_components/jquery/js/jquery.min.js')}}\"></script>
<script type=\"text/javascript\" src=\"{{asset('files/bower_components/jquery-ui/js/jquery-ui.min.js')}}\"></script>
<script type=\"text/javascript\" src=\"{{asset('files/bower_components/popper.js/js/popper.min.js')}}\"></script>
<script type=\"text/javascript\" src=\"{{asset('files/bower_components/bootstrap/js/bootstrap.min.js')}}\"></script>

<script src=\"{{asset('files/assets/pages/waves/js/waves.min.js')}}\"></script>

<script type=\"text/javascript\" src=\"{{asset('files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}\"></script>

<script src=\"{{asset('files/assets/pages/chart/float/jquery.flot.js')}}\"></script>
<script src=\"{{asset('files/assets/pages/chart/float/jquery.flot.categories.js')}}\"></script>
<script src=\"{{asset('files/assets/pages/chart/float/curvedLines.js')}}\"></script>
<script src=\"{{asset('files/assets/pages/chart/float/jquery.flot.tooltip.min.js')}}\"></script>

<script src=\"{{asset('files/bower_components/chartist/js/chartist.js')}}\"></script>

<script src=\"{{asset('files/assets/pages/widget/amchart/amcharts.js')}}\"></script>
<script src=\"{{asset('files/assets/pages/widget/amchart/serial.js')}}\"></script>
<script src=\"{{asset('files/assets/pages/widget/amchart/light.js')}}\"></script>

<script src=\"{{asset('files/assets/js/pcoded.min.js')}}\"></script>
<script src=\"{{asset('files/assets/js/vertical/vertical-layout.min.js')}}\"></script>
<script type=\"text/javascript\" src=\"{{asset('files/assets/pages/dashboard/custom-dashboard.min.js')}}\"></script>
<script type=\"text/javascript\" src=\"{{asset('files/assets/js/script.min.js')}}\"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/admindek-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 12:15:07 GMT -->
</html>
", "content/data.html.twig", "C:\\Users\\SYNS-MANAGER\\Nouveau dossier\\my_project_directory\\templates\\content\\data.html.twig");
    }
}
