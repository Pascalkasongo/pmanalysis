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
<div class=\"theme-panel\">
<a href=\"javascript:;\" data-toggle=\"theme-panel-expand\" class=\"theme-collapse-btn\"><i class=\"fa fa-cog\"></i></a>
<div class=\"theme-panel-content\" data-scrollbar=\"true\" data-height=\"100%\" style=\"height: 100%; overflow-x: scroll;\">
<h5>App Settings</h5>

<div class=\"theme-list\">
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-red\" data-theme-class=\"theme-red\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Red\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-pink\" data-theme-class=\"theme-pink\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Pink\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-orange\" data-theme-class=\"theme-orange\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Orange\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-yellow\" data-theme-class=\"theme-yellow\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Yellow\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-lime\" data-theme-class=\"theme-lime\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Lime\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-green\" data-theme-class=\"theme-green\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Green\">&nbsp;</a></div>
<div class=\"theme-list-item active\"><a href=\"javascript:;\" class=\"theme-list-link bg-teal\" data-theme-class=\"\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Default\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-cyan\" data-theme-class=\"theme-cyan\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Cyan\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-blue\" data-theme-class=\"theme-blue\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Blue\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-purple\" data-theme-class=\"theme-purple\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Purple\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-indigo\" data-theme-class=\"theme-indigo\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Indigo\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-black\" data-theme-class=\"theme-gray-600\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Black\">&nbsp;</a></div>
</div>

<div class=\"theme-panel-divider\"></div>
<div class=\"row mt-10px\">
<div class=\"col-8 control-label text-body fw-bold\">
<div>Dark Mode <span class=\"badge bg-primary ms-1 py-2px position-relative\" style=\"top: -1px;\">NEW</span></div>
<div class=\"lh-14\">
<small class=\"text-body opacity-50\">
Adjust the appearance to reduce glare and give your eyes a break.
</small>
</div>
</div>
<div class=\"col-4 d-flex\">
<div class=\"form-check form-switch ms-auto mb-0\">
<input type=\"checkbox\" class=\"form-check-input\" name=\"app-theme-dark-mode\" id=\"appThemeDarkMode\" value=\"1\">
<label class=\"form-check-label\" for=\"appThemeDarkMode\">&nbsp;</label>
</div>
</div>
</div>
<div class=\"theme-panel-divider\"></div>

<div class=\"row mt-10px align-items-center\">
<div class=\"col-8 control-label text-body fw-bold\">Header Fixed</div>
<div class=\"col-4 d-flex\">
<div class=\"form-check form-switch ms-auto mb-0\">
<input type=\"checkbox\" class=\"form-check-input\" name=\"app-header-fixed\" id=\"appHeaderFixed\" value=\"1\" checked=\"\">
<label class=\"form-check-label\" for=\"appHeaderFixed\">&nbsp;</label>
</div>
</div>
</div>
<div class=\"row mt-10px align-items-center\">
<div class=\"col-8 control-label text-body fw-bold\">Header Inverse</div>
<div class=\"col-4 d-flex\">
<div class=\"form-check form-switch ms-auto mb-0\">
<input type=\"checkbox\" class=\"form-check-input\" name=\"app-header-inverse\" id=\"appHeaderInverse\" value=\"1\">
<label class=\"form-check-label\" for=\"appHeaderInverse\">&nbsp;</label>
</div>
</div>
</div>
<div class=\"row mt-10px align-items-center\">
<div class=\"col-8 control-label text-body fw-bold\">Sidebar Fixed</div>
<div class=\"col-4 d-flex\">
<div class=\"form-check form-switch ms-auto mb-0\">
<input type=\"checkbox\" class=\"form-check-input\" name=\"app-sidebar-fixed\" id=\"appSidebarFixed\" value=\"1\" checked=\"\">
<label class=\"form-check-label\" for=\"appSidebarFixed\">&nbsp;</label>
</div>
</div>
</div>
<div class=\"row mt-10px align-items-center\">
<div class=\"col-8 control-label text-body fw-bold\">Sidebar Grid</div>
<div class=\"col-4 d-flex\">
<div class=\"form-check form-switch ms-auto mb-0\">
<input type=\"checkbox\" class=\"form-check-input\" name=\"app-sidebar-grid\" id=\"appSidebarGrid\" value=\"1\">
<label class=\"form-check-label\" for=\"appSidebarGrid\">&nbsp;</label>
</div>
</div>
</div>
<div class=\"row mt-10px align-items-center\">
<div class=\"col-8 control-label text-body fw-bold\">Gradient Enabled</div>
<div class=\"col-4 d-flex\">
<div class=\"form-check form-switch ms-auto mb-0\">
<input type=\"checkbox\" class=\"form-check-input\" name=\"app-gradient-enabled\" id=\"appGradientEnabled\" value=\"1\">
<label class=\"form-check-label\" for=\"appGradientEnabled\">&nbsp;</label>
</div>
</div>
</div>

<div class=\"theme-panel-divider\"></div>
<h5>Admin Design (6)</h5>

<div class=\"theme-version\">
<div class=\"theme-version-item\">
<a href=\"index-2.html\" class=\"theme-version-link active\">
<span style=\"background-image: url(../assets/img/theme/default.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/admin/transparent/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/theme/transparent.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/admin/apple/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/theme/apple.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/admin/material/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/theme/material.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/admin/facebook/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/theme/facebook.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/admin/google/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/theme/google.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
</div>

<div class=\"theme-panel-divider\"></div>
<h5>Language Version (9)</h5>

<div class=\"theme-version\">
<div class=\"theme-version-item\">
<a href=\"index-2.html\" class=\"theme-version-link active\">
<span style=\"background-image: url(../assets/img/version/html.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/admin/ajax/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/version/ajax.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/admin/angularjs/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/version/angular1x.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/admin/angularjs18/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/version/angular10x.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/admin/svelte/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/version/svelte.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"javascript:alert('Laravel 11 Version only available in downloaded version.');\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/version/laravel.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"javascript:alert('Django Version only available in downloaded version.');\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/version/django.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/admin/vue3/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/version/vuejs.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/admin/react/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/version/reactjs.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"javascript:alert('.NET Core 8.0 MVC Version only available in downloaded version.');\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/version/dotnet.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
</div>

<div class=\"theme-panel-divider\"></div>
<h5>Frontend Design (5)</h5>

<div class=\"theme-version\">
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/frontend/one-page-parallax/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/theme/one-page-parallax.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/frontend/e-commerce/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/theme/e-commerce.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/frontend/blog/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/theme/blog.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/frontend/forum/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/theme/forum.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/frontend/corporate/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/theme/corporate.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
</div>

<div class=\"theme-panel-divider\"></div>
<a href=\"https://seantheme.com/color-admin/documentation/\" class=\"btn btn-dark d-block w-100 rounded-pill mb-10px\" target=\"_blank\"><b>Documentation</b></a>
<a href=\"javascript:;\" class=\"btn btn-default d-block w-100 rounded-pill\" data-toggle=\"reset-local-storage\"><b>Reset Local Storage</b></a>
</div>
</div>
</div>
<script src=\"../assets/js/vendor.min.js\" type=\"text/javascript\"></script>
<script src=\"../assets/js/app.min.js\" type=\"text/javascript\"></script>
<script src=\"../assets/plugins/gritter/js/jquery.gritter.js\" type=\"text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.canvaswrapper.js\" type=\"text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.colorhelpers.js\" type=\"text/javascript\"></script>

<script src=\"../assets/js/vendor.min.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/js/app.min.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>


<script src=\"../assets/plugins/gritter/js/jquery.gritter.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.canvaswrapper.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.colorhelpers.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.saturated.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.browser.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.drawSeries.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.uiConstants.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.time.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.resize.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.pie.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.crosshair.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.categories.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.navigate.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.touchNavigate.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.hover.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.touch.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.selection.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.symbol.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.legend.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/jquery-sparkline/jquery.sparkline.min.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/jvectormap-next/jquery-jvectormap.min.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/jvectormap-content/world-mill.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/js/demo/dashboard.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>

<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-Y3Q0VGQKY3\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script type=\"1894f5cfe7cb54fe35cd248f-text/javascript\">
\twindow.dataLayer = window.dataLayer || [];
\tfunction gtag(){dataLayer.push(arguments);}
\tgtag('js', new Date());
\t
\tgtag('config', 'G-Y3Q0VGQKY3');
\t</script>
<script src=\"../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js\" data-cf-settings=\"1894f5cfe7cb54fe35cd248f-|49\" defer></script><script defer src=\"https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015\" integrity=\"sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==\" data-cf-beacon='{\"rayId\":\"8b38fe88aec895f9\",\"version\":\"2024.8.0\",\"r\":1,\"serverTiming\":{\"name\":{\"cfL4\":true}},\"token\":\"4db8c6ef997743fda032d4f73cfeff63\",\"b\":1}' crossorigin=\"anonymous\"></script>
</body>

<!-- Mirrored from seantheme.com/color-admin/admin/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 11:56:13 GMT -->
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
    public function getDebugInfo()
    {
        return array ();
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
<div class=\"theme-panel\">
<a href=\"javascript:;\" data-toggle=\"theme-panel-expand\" class=\"theme-collapse-btn\"><i class=\"fa fa-cog\"></i></a>
<div class=\"theme-panel-content\" data-scrollbar=\"true\" data-height=\"100%\" style=\"height: 100%; overflow-x: scroll;\">
<h5>App Settings</h5>

<div class=\"theme-list\">
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-red\" data-theme-class=\"theme-red\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Red\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-pink\" data-theme-class=\"theme-pink\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Pink\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-orange\" data-theme-class=\"theme-orange\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Orange\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-yellow\" data-theme-class=\"theme-yellow\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Yellow\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-lime\" data-theme-class=\"theme-lime\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Lime\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-green\" data-theme-class=\"theme-green\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Green\">&nbsp;</a></div>
<div class=\"theme-list-item active\"><a href=\"javascript:;\" class=\"theme-list-link bg-teal\" data-theme-class=\"\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Default\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-cyan\" data-theme-class=\"theme-cyan\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Cyan\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-blue\" data-theme-class=\"theme-blue\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Blue\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-purple\" data-theme-class=\"theme-purple\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Purple\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-indigo\" data-theme-class=\"theme-indigo\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Indigo\">&nbsp;</a></div>
<div class=\"theme-list-item\"><a href=\"javascript:;\" class=\"theme-list-link bg-black\" data-theme-class=\"theme-gray-600\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Black\">&nbsp;</a></div>
</div>

<div class=\"theme-panel-divider\"></div>
<div class=\"row mt-10px\">
<div class=\"col-8 control-label text-body fw-bold\">
<div>Dark Mode <span class=\"badge bg-primary ms-1 py-2px position-relative\" style=\"top: -1px;\">NEW</span></div>
<div class=\"lh-14\">
<small class=\"text-body opacity-50\">
Adjust the appearance to reduce glare and give your eyes a break.
</small>
</div>
</div>
<div class=\"col-4 d-flex\">
<div class=\"form-check form-switch ms-auto mb-0\">
<input type=\"checkbox\" class=\"form-check-input\" name=\"app-theme-dark-mode\" id=\"appThemeDarkMode\" value=\"1\">
<label class=\"form-check-label\" for=\"appThemeDarkMode\">&nbsp;</label>
</div>
</div>
</div>
<div class=\"theme-panel-divider\"></div>

<div class=\"row mt-10px align-items-center\">
<div class=\"col-8 control-label text-body fw-bold\">Header Fixed</div>
<div class=\"col-4 d-flex\">
<div class=\"form-check form-switch ms-auto mb-0\">
<input type=\"checkbox\" class=\"form-check-input\" name=\"app-header-fixed\" id=\"appHeaderFixed\" value=\"1\" checked=\"\">
<label class=\"form-check-label\" for=\"appHeaderFixed\">&nbsp;</label>
</div>
</div>
</div>
<div class=\"row mt-10px align-items-center\">
<div class=\"col-8 control-label text-body fw-bold\">Header Inverse</div>
<div class=\"col-4 d-flex\">
<div class=\"form-check form-switch ms-auto mb-0\">
<input type=\"checkbox\" class=\"form-check-input\" name=\"app-header-inverse\" id=\"appHeaderInverse\" value=\"1\">
<label class=\"form-check-label\" for=\"appHeaderInverse\">&nbsp;</label>
</div>
</div>
</div>
<div class=\"row mt-10px align-items-center\">
<div class=\"col-8 control-label text-body fw-bold\">Sidebar Fixed</div>
<div class=\"col-4 d-flex\">
<div class=\"form-check form-switch ms-auto mb-0\">
<input type=\"checkbox\" class=\"form-check-input\" name=\"app-sidebar-fixed\" id=\"appSidebarFixed\" value=\"1\" checked=\"\">
<label class=\"form-check-label\" for=\"appSidebarFixed\">&nbsp;</label>
</div>
</div>
</div>
<div class=\"row mt-10px align-items-center\">
<div class=\"col-8 control-label text-body fw-bold\">Sidebar Grid</div>
<div class=\"col-4 d-flex\">
<div class=\"form-check form-switch ms-auto mb-0\">
<input type=\"checkbox\" class=\"form-check-input\" name=\"app-sidebar-grid\" id=\"appSidebarGrid\" value=\"1\">
<label class=\"form-check-label\" for=\"appSidebarGrid\">&nbsp;</label>
</div>
</div>
</div>
<div class=\"row mt-10px align-items-center\">
<div class=\"col-8 control-label text-body fw-bold\">Gradient Enabled</div>
<div class=\"col-4 d-flex\">
<div class=\"form-check form-switch ms-auto mb-0\">
<input type=\"checkbox\" class=\"form-check-input\" name=\"app-gradient-enabled\" id=\"appGradientEnabled\" value=\"1\">
<label class=\"form-check-label\" for=\"appGradientEnabled\">&nbsp;</label>
</div>
</div>
</div>

<div class=\"theme-panel-divider\"></div>
<h5>Admin Design (6)</h5>

<div class=\"theme-version\">
<div class=\"theme-version-item\">
<a href=\"index-2.html\" class=\"theme-version-link active\">
<span style=\"background-image: url(../assets/img/theme/default.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/admin/transparent/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/theme/transparent.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/admin/apple/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/theme/apple.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/admin/material/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/theme/material.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/admin/facebook/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/theme/facebook.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/admin/google/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/theme/google.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
</div>

<div class=\"theme-panel-divider\"></div>
<h5>Language Version (9)</h5>

<div class=\"theme-version\">
<div class=\"theme-version-item\">
<a href=\"index-2.html\" class=\"theme-version-link active\">
<span style=\"background-image: url(../assets/img/version/html.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/admin/ajax/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/version/ajax.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/admin/angularjs/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/version/angular1x.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/admin/angularjs18/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/version/angular10x.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/admin/svelte/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/version/svelte.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"javascript:alert('Laravel 11 Version only available in downloaded version.');\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/version/laravel.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"javascript:alert('Django Version only available in downloaded version.');\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/version/django.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/admin/vue3/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/version/vuejs.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/admin/react/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/version/reactjs.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"javascript:alert('.NET Core 8.0 MVC Version only available in downloaded version.');\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/version/dotnet.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
</div>

<div class=\"theme-panel-divider\"></div>
<h5>Frontend Design (5)</h5>

<div class=\"theme-version\">
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/frontend/one-page-parallax/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/theme/one-page-parallax.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/frontend/e-commerce/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/theme/e-commerce.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/frontend/blog/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/theme/blog.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/frontend/forum/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/theme/forum.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
<div class=\"theme-version-item\">
<a href=\"https://seantheme.com/color-admin/frontend/corporate/\" class=\"theme-version-link\">
<span style=\"background-image: url(../assets/img/theme/corporate.jpg);\" class=\"theme-version-cover\"></span>
</a>
</div>
</div>

<div class=\"theme-panel-divider\"></div>
<a href=\"https://seantheme.com/color-admin/documentation/\" class=\"btn btn-dark d-block w-100 rounded-pill mb-10px\" target=\"_blank\"><b>Documentation</b></a>
<a href=\"javascript:;\" class=\"btn btn-default d-block w-100 rounded-pill\" data-toggle=\"reset-local-storage\"><b>Reset Local Storage</b></a>
</div>
</div>
</div>
<script src=\"../assets/js/vendor.min.js\" type=\"text/javascript\"></script>
<script src=\"../assets/js/app.min.js\" type=\"text/javascript\"></script>
<script src=\"../assets/plugins/gritter/js/jquery.gritter.js\" type=\"text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.canvaswrapper.js\" type=\"text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.colorhelpers.js\" type=\"text/javascript\"></script>

<script src=\"../assets/js/vendor.min.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/js/app.min.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>


<script src=\"../assets/plugins/gritter/js/jquery.gritter.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.canvaswrapper.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.colorhelpers.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.saturated.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.browser.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.drawSeries.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.uiConstants.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.time.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.resize.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.pie.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.crosshair.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.categories.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.navigate.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.touchNavigate.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.hover.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.touch.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.selection.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.symbol.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/flot/source/jquery.flot.legend.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/jquery-sparkline/jquery.sparkline.min.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/jvectormap-next/jquery-jvectormap.min.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/jvectormap-content/world-mill.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script src=\"../assets/js/demo/dashboard.js\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>

<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-Y3Q0VGQKY3\" type=\"1894f5cfe7cb54fe35cd248f-text/javascript\"></script>
<script type=\"1894f5cfe7cb54fe35cd248f-text/javascript\">
\twindow.dataLayer = window.dataLayer || [];
\tfunction gtag(){dataLayer.push(arguments);}
\tgtag('js', new Date());
\t
\tgtag('config', 'G-Y3Q0VGQKY3');
\t</script>
<script src=\"../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js\" data-cf-settings=\"1894f5cfe7cb54fe35cd248f-|49\" defer></script><script defer src=\"https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015\" integrity=\"sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==\" data-cf-beacon='{\"rayId\":\"8b38fe88aec895f9\",\"version\":\"2024.8.0\",\"r\":1,\"serverTiming\":{\"name\":{\"cfL4\":true}},\"token\":\"4db8c6ef997743fda032d4f73cfeff63\",\"b\":1}' crossorigin=\"anonymous\"></script>
</body>

<!-- Mirrored from seantheme.com/color-admin/admin/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 11:56:13 GMT -->
</html>
", "content/data.html.twig", "C:\\Users\\SYNS-MANAGER\\Documents\\GitHub\\pmanalysis\\templates\\content\\data.html.twig");
    }
}
