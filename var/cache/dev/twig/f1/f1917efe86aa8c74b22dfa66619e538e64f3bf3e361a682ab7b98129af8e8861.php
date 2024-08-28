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

/* admindek-html/index.html.twig */
class __TwigTemplate_44363b2556f85bba59fd2dac754cc215cf364c626e5976eb17efdad304e42711 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admindek-html/index.html.twig"));

        // line 1
        yield Twig\Extension\CoreExtension::include($this->env, $context, "content/navbar.html.twig");
        yield "
";
        // line 2
        yield Twig\Extension\CoreExtension::include($this->env, $context, "content/slidebar.html.twig");
        yield "

<div class=\"pcoded-content\">
<div class=\"container mt-4\">
  
    <!-- Ajout du padding -->
        <div class=\"row\">
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"widget widget-stats bg-blue\">
                    <div class=\"stats-icon\"><i class=\"fa fa-desktop\"></i></div>
                    <div class=\"stats-info\">
                        <h4>Projet</h4>
                        <p>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 14, $this->source); })())), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"stats-link\">
                <a href=\"javascript:;\"> </a>
            </div>
                </div>
            </div>

            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"widget widget-stats bg-info\">
                    <div class=\"stats-icon\"><i class=\"fa fa-link\"></i></div>
                    <div class=\"stats-info\">
                        <h4>Tache</h4>
                        <p>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 27, $this->source); })())), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"stats-link\">
                        <a href=\"javascript:;\"> </a>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"widget widget-stats bg-orange\">
                    <div class=\"stats-icon\"><i class=\"fa fa-users\"></i></div>
                    <div class=\"stats-info\">
                        <h4>Equipe</h4>
                        <p>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["equipe"]) || array_key_exists("equipe", $context) ? $context["equipe"] : (function () { throw new RuntimeError('Variable "equipe" does not exist.', 40, $this->source); })())), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"stats-link\">
                        <a href=\"javascript:;\"></a>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"widget widget-stats bg-red\">
                    <div class=\"stats-icon\"><i class=\"fa fa-book\"></i></div>
                    <div class=\"stats-info\">
                        <h4>Tache</h4>
                        <p>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 53, $this->source); })())), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"stats-link\">
                        <a href=\"javascript:;\"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">

<div class=\"col-xl-6\">

<div class=\"card border-0 mb-3 overflow-hidden bg-gray-800 text-white\">

<div class=\"card-body\">

<div class=\"row\">

<div class=\"col-xl-7 col-lg-8\">

<div class=\"mb-3 text-gray-500\">
<b>TRESORERIE</b>
<span class=\"ms-2\">
<i class=\"fa fa-info-circle\" data-bs-toggle=\"popover\" data-bs-trigger=\"hover\" data-bs-title=\"Total sales\" data-bs-placement=\"top\" data-bs-content=\"Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels.\"></i>
</span>
</div>


<div class=\"d-flex mb-1\">
<h2 class=\"mb-0\"><span data-animation=\"number\" data-value=\"64559.25\">0</span></h2>
<div class=\"ms-auto mt-n1 mb-n1\"><div id=\"total-sales-sparkline\" style=\"min-height: 36px;\"><div id=\"apexcharts5c17akzr\" class=\"apexcharts-canvas apexcharts5c17akzr apexcharts-theme-\" style=\"width: 200px; height: 36px;\"><svg id=\"SvgjsSvg1315\" width=\"200\" height=\"36\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev\" class=\"apexcharts-svg\" xmlns:data=\"ApexChartsNS\" transform=\"translate(0, 0)\"><foreignObject x=\"0\" y=\"0\" width=\"200\" height=\"36\"><div class=\"apexcharts-legend\" xmlns=\"http://www.w3.org/1999/xhtml\" style=\"max-height: 18px;\"></div></foreignObject><rect id=\"SvgjsRect1319\" width=\"0\" height=\"0\" x=\"0\" y=\"0\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fefefe\"></rect><g id=\"SvgjsG1323\" class=\"apexcharts-datalabels-group\" transform=\"translate(0, 0) scale(1)\"></g><g id=\"SvgjsG1324\" class=\"apexcharts-datalabels-group\" transform=\"translate(0, 0) scale(1)\"></g><g id=\"SvgjsG1352\" class=\"apexcharts-yaxis\" rel=\"0\" transform=\"translate(-18, 0)\"></g><g id=\"SvgjsG1317\" class=\"apexcharts-inner apexcharts-graphical\" transform=\"translate(0, 1.5)\"><defs id=\"SvgjsDefs1316\"><clipPath id=\"gridRectMask5c17akzr\"><rect id=\"SvgjsRect1321\" width=\"207\" height=\"40\" x=\"-3.5\" y=\"-3.5\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fff\"></rect></clipPath><clipPath id=\"forecastMask5c17akzr\"></clipPath><clipPath id=\"nonForecastMask5c17akzr\"></clipPath><clipPath id=\"gridRectMarkerMask5c17akzr\"><rect id=\"SvgjsRect1322\" width=\"204\" height=\"37\" x=\"-2\" y=\"-2\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fff\"></rect></clipPath><linearGradient id=\"SvgjsLinearGradient1329\" x1=\"0\" y1=\"1\" x2=\"1\" y2=\"1\"><stop id=\"SvgjsStop1330\" stop-opacity=\"1\" stop-color=\"#348fe2\" offset=\"0\"></stop><stop id=\"SvgjsStop1331\" stop-opacity=\"1\" stop-color=\"#8753de\" offset=\"1\"></stop></linearGradient></defs><line id=\"SvgjsLine1320\" x1=\"0\" y1=\"0\" x2=\"0\" y2=\"33\" stroke=\"#b6b6b6\" stroke-dasharray=\"3\" stroke-linecap=\"butt\" class=\"apexcharts-xcrosshairs\" x=\"0\" y=\"0\" width=\"1\" height=\"33\" fill=\"#b1b9c4\" filter=\"none\" fill-opacity=\"0.9\" stroke-width=\"1\"></line><g id=\"SvgjsG1333\" class=\"apexcharts-grid\"><g id=\"SvgjsG1334\" class=\"apexcharts-gridlines-horizontal\" style=\"display: none;\"><line id=\"SvgjsLine1337\" x1=\"0\" y1=\"0\" x2=\"200\" y2=\"0\" stroke=\"#e0e0e0\" stroke-dasharray=\"0\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line><line id=\"SvgjsLine1338\" x1=\"0\" y1=\"33\" x2=\"200\" y2=\"33\" stroke=\"#e0e0e0\" stroke-dasharray=\"0\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line></g><g id=\"SvgjsG1335\" class=\"apexcharts-gridlines-vertical\" style=\"display: none;\"></g><line id=\"SvgjsLine1340\" x1=\"0\" y1=\"33\" x2=\"200\" y2=\"33\" stroke=\"transparent\" stroke-dasharray=\"0\" stroke-linecap=\"butt\"></line><line id=\"SvgjsLine1339\" x1=\"0\" y1=\"1\" x2=\"0\" y2=\"33\" stroke=\"transparent\" stroke-dasharray=\"0\" stroke-linecap=\"butt\"></line></g><g id=\"SvgjsG1336\" class=\"apexcharts-grid-borders\" style=\"display: none;\"></g><g id=\"SvgjsG1325\" class=\"apexcharts-line-series apexcharts-plot-series\"><g id=\"SvgjsG1326\" class=\"apexcharts-series\" zIndex=\"0\" seriesName=\"series-1\" data:longestSeries=\"true\" rel=\"1\" data:realIndex=\"0\"><path id=\"SvgjsPath1332\" d=\"M 0 10.719413571428571C 11.666666666666666 10.719413571428571 21.66666666666667 7.026949285714284 33.333333333333336 7.026949285714284C 45 7.026949285714284 55.00000000000001 15.801413571428572 66.66666666666667 15.801413571428572C 78.33333333333334 15.801413571428572 88.33333333333334 18.21060214285714 100 18.21060214285714C 111.66666666666667 18.21060214285714 121.66666666666667 14.321882142857142 133.33333333333334 14.321882142857142C 145 14.321882142857142 155.00000000000003 17.48684142857143 166.66666666666669 17.48684142857143C 178.33333333333334 17.48684142857143 188.33333333333334 2.550098571428574 200 2.550098571428574\" fill=\"none\" fill-opacity=\"1\" stroke=\"url(#SvgjsLinearGradient1329)\" stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"3\" stroke-dasharray=\"0\" class=\"apexcharts-line\" index=\"0\" clip-path=\"url(#gridRectMask5c17akzr)\" pathTo=\"M 0 10.719413571428571C 11.666666666666666 10.719413571428571 21.66666666666667 7.026949285714284 33.333333333333336 7.026949285714284C 45 7.026949285714284 55.00000000000001 15.801413571428572 66.66666666666667 15.801413571428572C 78.33333333333334 15.801413571428572 88.33333333333334 18.21060214285714 100 18.21060214285714C 111.66666666666667 18.21060214285714 121.66666666666667 14.321882142857142 133.33333333333334 14.321882142857142C 145 14.321882142857142 155.00000000000003 17.48684142857143 166.66666666666669 17.48684142857143C 178.33333333333334 17.48684142857143 188.33333333333334 2.550098571428574 200 2.550098571428574\" pathFrom=\"M 0 33 L 0 33 L 33.333333333333336 33 L 66.66666666666667 33 L 100 33 L 133.33333333333334 33 L 166.66666666666669 33 L 200 33\" fill-rule=\"evenodd\"></path><g id=\"SvgjsG1327\" class=\"apexcharts-series-markers-wrap apexcharts-hidden-element-shown\" data:realIndex=\"0\"><g class=\"apexcharts-series-markers\"><circle id=\"SvgjsCircle1356\" r=\"0\" cx=\"0\" cy=\"0\" class=\"apexcharts-marker w9wnxvgkk no-pointer-events\" stroke=\"#ffffff\" fill=\"#008ffb\" fill-opacity=\"1\" stroke-width=\"2\" stroke-opacity=\"0.9\" default-marker-size=\"0\"></circle></g></g></g><g id=\"SvgjsG1328\" class=\"apexcharts-datalabels\" data:realIndex=\"0\"></g></g><line id=\"SvgjsLine1341\" x1=\"0\" y1=\"0\" x2=\"200\" y2=\"0\" stroke=\"#b6b6b6\" stroke-dasharray=\"0\" stroke-width=\"1\" stroke-linecap=\"butt\" class=\"apexcharts-ycrosshairs\"></line><line id=\"SvgjsLine1342\" x1=\"0\" y1=\"0\" x2=\"200\" y2=\"0\" stroke-dasharray=\"0\" stroke-width=\"0\" stroke-linecap=\"butt\" class=\"apexcharts-ycrosshairs-hidden\"></line><g id=\"SvgjsG1343\" class=\"apexcharts-xaxis\" transform=\"translate(0, 0)\"><g id=\"SvgjsG1344\" class=\"apexcharts-xaxis-texts-g\" transform=\"translate(0, -4)\"></g></g><g id=\"SvgjsG1353\" class=\"apexcharts-yaxis-annotations\"></g><g id=\"SvgjsG1354\" class=\"apexcharts-xaxis-annotations\"></g><g id=\"SvgjsG1355\" class=\"apexcharts-point-annotations\"></g></g></svg><div class=\"apexcharts-tooltip apexcharts-theme-dark\"><div class=\"apexcharts-tooltip-series-group\" style=\"order: 1;\"><span class=\"apexcharts-tooltip-marker\" style=\"background-color: rgb(0, 143, 251);\"></span><div class=\"apexcharts-tooltip-text\" style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><div class=\"apexcharts-tooltip-y-group\"><span class=\"apexcharts-tooltip-text-y-label\"></span><span class=\"apexcharts-tooltip-text-y-value\"></span></div><div class=\"apexcharts-tooltip-goals-group\"><span class=\"apexcharts-tooltip-text-goals-label\"></span><span class=\"apexcharts-tooltip-text-goals-value\"></span></div><div class=\"apexcharts-tooltip-z-group\"><span class=\"apexcharts-tooltip-text-z-label\"></span><span class=\"apexcharts-tooltip-text-z-value\"></span></div></div></div></div><div class=\"apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark\"><div class=\"apexcharts-yaxistooltip-text\"></div></div></div></div></div>
</div>


<div class=\"mb-3 text-gray-500\">
<i class=\"fa fa-caret-up\"></i> <span data-animation=\"number\" data-value=\"33.21\">0</span> compare to last week
</div>

<hr class=\"bg-white bg-opacity-50\">

<div class=\"row text-truncate\">

<div class=\"col-6\">
<div class=\" text-gray-500\">Depense</div>
<div class=\"fs-18px mb-5px fw-bold\" data-animation=\"number\" data-value=\"1568\">0</div>
<div class=\"progress h-5px rounded-3 bg-gray-900 mb-5px\">
<div class=\"progress-bar progress-bar-striped rounded-right bg-teal\" data-animation=\"width\" data-value=\"55%\" style=\"width: 55%;\"></div>
</div>
</div>


<div class=\"col-6\">
<div class=\" text-gray-500\">Recette</div>
<div class=\"fs-18px mb-5px fw-bold\">\$<span data-animation=\"number\" data-value=\"41.20\">0</span></div>
<div class=\"progress h-5px rounded-3 bg-gray-900 mb-5px\">
<div class=\"progress-bar progress-bar-striped rounded-right\" data-animation=\"width\" data-value=\"55%\" style=\"width: 55%;\"></div>
</div>
</div>

</div>

</div>


<div class=\"col-xl-5 col-lg-4 align-items-center d-flex justify-content-center\">
<img src=\"https://seantheme.com/color-admin/admin/assets/img/svg/img-1.svg\" height=\"150px\" class=\"d-none d-lg-block\">
</div>

</div>

</div>

</div>

</div>


<div class=\"col-xl-6\">

<div class=\"row\">

<div class=\"col-sm-6\">

<div class=\"card border-0 text-truncate mb-3 bg-gray-800 text-white\">

<div class=\"card-body\">

<div class=\"mb-3 text-gray-500\">
<b class=\"mb-3\">DEPENSE PAR SERVICE</b>
<span class=\"ms-2\"><i class=\"fa fa-info-circle\" data-bs-toggle=\"popover\" data-bs-trigger=\"hover\" data-bs-title=\"Conversion Rate\" data-bs-placement=\"top\" data-bs-content=\"Percentage of sessions that resulted in orders from total number of sessions.\" data-original-title=\"\" title=\"\"></i></span>
</div>


<div class=\"d-flex align-items-center mb-1\">
<h2 class=\"text-white mb-0\"><span data-animation=\"number\" data-value=\"2.19\">0</span></h2>
<div class=\"ms-auto\">
<div id=\"conversion-rate-sparkline\" style=\"min-height: 28px;\"><div id=\"apexchartsv9i7fg1w\" class=\"apexcharts-canvas apexchartsv9i7fg1w apexcharts-theme-\" style=\"width: 160px; height: 28px;\"><svg id=\"SvgjsSvg1270\" width=\"160\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev\" class=\"apexcharts-svg\" xmlns:data=\"ApexChartsNS\" transform=\"translate(0, 0)\"><foreignObject x=\"0\" y=\"0\" width=\"160\" height=\"28\"><div class=\"apexcharts-legend\" xmlns=\"http://www.w3.org/1999/xhtml\" style=\"max-height: 14px;\"></div></foreignObject><rect id=\"SvgjsRect1275\" width=\"0\" height=\"0\" x=\"0\" y=\"0\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fefefe\"></rect><g id=\"SvgjsG1279\" class=\"apexcharts-datalabels-group\" transform=\"translate(0, 0) scale(1)\"></g><g id=\"SvgjsG1280\" class=\"apexcharts-datalabels-group\" transform=\"translate(0, 0) scale(1)\"></g><g id=\"SvgjsG1309\" class=\"apexcharts-yaxis\" rel=\"0\" transform=\"translate(-18, 0)\"></g><g id=\"SvgjsG1272\" class=\"apexcharts-inner apexcharts-graphical\" transform=\"translate(0, 1.5)\"><defs id=\"SvgjsDefs1271\"><clipPath id=\"gridRectMaskv9i7fg1w\"><rect id=\"SvgjsRect1277\" width=\"167\" height=\"32\" x=\"-3.5\" y=\"-3.5\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fff\"></rect></clipPath><clipPath id=\"forecastMaskv9i7fg1w\"></clipPath><clipPath id=\"nonForecastMaskv9i7fg1w\"></clipPath><clipPath id=\"gridRectMarkerMaskv9i7fg1w\"><rect id=\"SvgjsRect1278\" width=\"164\" height=\"29\" x=\"-2\" y=\"-2\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fff\"></rect></clipPath><linearGradient id=\"SvgjsLinearGradient1285\" x1=\"0\" y1=\"1\" x2=\"1\" y2=\"1\"><stop id=\"SvgjsStop1286\" stop-opacity=\"1\" stop-color=\"#ff5b57\" offset=\"0\"></stop><stop id=\"SvgjsStop1287\" stop-opacity=\"1\" stop-color=\"#f59c1a\" offset=\"0.5\"></stop><stop id=\"SvgjsStop1288\" stop-opacity=\"1\" stop-color=\"#90ca4b\" offset=\"1\"></stop></linearGradient></defs><line id=\"SvgjsLine1276\" x1=\"0\" y1=\"0\" x2=\"0\" y2=\"25\" stroke=\"#b6b6b6\" stroke-dasharray=\"3\" stroke-linecap=\"butt\" class=\"apexcharts-xcrosshairs\" x=\"0\" y=\"0\" width=\"1\" height=\"25\" fill=\"#b1b9c4\" filter=\"none\" fill-opacity=\"0.9\" stroke-width=\"1\"></line><g id=\"SvgjsG1290\" class=\"apexcharts-grid\"><g id=\"SvgjsG1291\" class=\"apexcharts-gridlines-horizontal\" style=\"display: none;\"><line id=\"SvgjsLine1294\" x1=\"0\" y1=\"0\" x2=\"160\" y2=\"0\" stroke=\"#e0e0e0\" stroke-dasharray=\"0\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line><line id=\"SvgjsLine1295\" x1=\"0\" y1=\"25\" x2=\"160\" y2=\"25\" stroke=\"#e0e0e0\" stroke-dasharray=\"0\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line></g><g id=\"SvgjsG1292\" class=\"apexcharts-gridlines-vertical\" style=\"display: none;\"></g><line id=\"SvgjsLine1297\" x1=\"0\" y1=\"25\" x2=\"160\" y2=\"25\" stroke=\"transparent\" stroke-dasharray=\"0\" stroke-linecap=\"butt\"></line><line id=\"SvgjsLine1296\" x1=\"0\" y1=\"1\" x2=\"0\" y2=\"25\" stroke=\"transparent\" stroke-dasharray=\"0\" stroke-linecap=\"butt\"></line></g><g id=\"SvgjsG1293\" class=\"apexcharts-grid-borders\" style=\"display: none;\"></g><g id=\"SvgjsG1281\" class=\"apexcharts-line-series apexcharts-plot-series\"><g id=\"SvgjsG1282\" class=\"apexcharts-series\" zIndex=\"0\" seriesName=\"series-1\" data:longestSeries=\"true\" rel=\"1\" data:realIndex=\"0\"><path id=\"SvgjsPath1289\" d=\"M 0 5.714285714285708C 9.333333333333334 5.714285714285708 17.333333333333336 1.25 26.666666666666668 1.25C 36 1.25 44 17.142857142857146 53.333333333333336 17.142857142857146C 62.66666666666667 17.142857142857146 70.66666666666667 24.821428571428573 80 24.821428571428573C 89.33333333333333 24.821428571428573 97.33333333333334 20 106.66666666666667 20C 116 20 124.00000000000001 24.642857142857142 133.33333333333334 24.642857142857142C 142.66666666666669 24.642857142857142 150.66666666666669 3.5714285714285765 160 3.5714285714285765\" fill=\"none\" fill-opacity=\"1\" stroke=\"url(#SvgjsLinearGradient1285)\" stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"3\" stroke-dasharray=\"0\" class=\"apexcharts-line\" index=\"0\" clip-path=\"url(#gridRectMaskv9i7fg1w)\" pathTo=\"M 0 5.714285714285708C 9.333333333333334 5.714285714285708 17.333333333333336 1.25 26.666666666666668 1.25C 36 1.25 44 17.142857142857146 53.333333333333336 17.142857142857146C 62.66666666666667 17.142857142857146 70.66666666666667 24.821428571428573 80 24.821428571428573C 89.33333333333333 24.821428571428573 97.33333333333334 20 106.66666666666667 20C 116 20 124.00000000000001 24.642857142857142 133.33333333333334 24.642857142857142C 142.66666666666669 24.642857142857142 150.66666666666669 3.5714285714285765 160 3.5714285714285765\" pathFrom=\"M 0 53.57142857142858 L 0 53.57142857142858 L 26.666666666666668 53.57142857142858 L 53.333333333333336 53.57142857142858 L 80 53.57142857142858 L 106.66666666666667 53.57142857142858 L 133.33333333333334 53.57142857142858 L 160 53.57142857142858\" fill-rule=\"evenodd\"></path><g id=\"SvgjsG1283\" class=\"apexcharts-series-markers-wrap apexcharts-hidden-element-shown\" data:realIndex=\"0\"><g class=\"apexcharts-series-markers\"><circle id=\"SvgjsCircle1313\" r=\"0\" cx=\"0\" cy=\"0\" class=\"apexcharts-marker wrgy2p61 no-pointer-events\" stroke=\"#ffffff\" fill=\"#008ffb\" fill-opacity=\"1\" stroke-width=\"2\" stroke-opacity=\"0.9\" default-marker-size=\"0\"></circle></g></g></g><g id=\"SvgjsG1284\" class=\"apexcharts-datalabels\" data:realIndex=\"0\"></g></g><line id=\"SvgjsLine1298\" x1=\"0\" y1=\"0\" x2=\"160\" y2=\"0\" stroke=\"#b6b6b6\" stroke-dasharray=\"0\" stroke-width=\"1\" stroke-linecap=\"butt\" class=\"apexcharts-ycrosshairs\"></line><line id=\"SvgjsLine1299\" x1=\"0\" y1=\"0\" x2=\"160\" y2=\"0\" stroke-dasharray=\"0\" stroke-width=\"0\" stroke-linecap=\"butt\" class=\"apexcharts-ycrosshairs-hidden\"></line><g id=\"SvgjsG1300\" class=\"apexcharts-xaxis\" transform=\"translate(0, 0)\"><g id=\"SvgjsG1301\" class=\"apexcharts-xaxis-texts-g\" transform=\"translate(0, 4)\"></g></g><g id=\"SvgjsG1310\" class=\"apexcharts-yaxis-annotations\"></g><g id=\"SvgjsG1311\" class=\"apexcharts-xaxis-annotations\"></g><g id=\"SvgjsG1312\" class=\"apexcharts-point-annotations\"></g></g></svg><div class=\"apexcharts-tooltip apexcharts-theme-dark\"><div class=\"apexcharts-tooltip-series-group\" style=\"order: 1;\"><span class=\"apexcharts-tooltip-marker\" style=\"background-color: rgb(0, 143, 251);\"></span><div class=\"apexcharts-tooltip-text\" style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><div class=\"apexcharts-tooltip-y-group\"><span class=\"apexcharts-tooltip-text-y-label\"></span><span class=\"apexcharts-tooltip-text-y-value\"></span></div><div class=\"apexcharts-tooltip-goals-group\"><span class=\"apexcharts-tooltip-text-goals-label\"></span><span class=\"apexcharts-tooltip-text-goals-value\"></span></div><div class=\"apexcharts-tooltip-z-group\"><span class=\"apexcharts-tooltip-text-z-label\"></span><span class=\"apexcharts-tooltip-text-z-value\"></span></div></div></div></div><div class=\"apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark\"><div class=\"apexcharts-yaxistooltip-text\"></div></div></div></div>
</div>
</div>


<div class=\"mb-4 text-gray-500 \">
<i class=\"fa fa-caret-down\"></i> <span data-animation=\"number\" data-value=\"0.50\">0</span>% compare to last week
</div>


<div class=\"d-flex mb-2\">
<div class=\"d-flex align-items-center\">
<i class=\"fa fa-circle text-red fs-8px me-2\"></i>
Gynécologie
</div>
<div class=\"d-flex align-items-center ms-auto\">
<div class=\"text-gray-500 small\"><i class=\"fa fa-caret-up\"></i> <span data-animation=\"number\" data-value=\"262\">0</span></div>
<div class=\"w-50px text-end ps-2 fw-bold\"><span data-animation=\"number\" data-value=\"3.79\">0</span></div>
</div>
</div>


<div class=\"d-flex mb-2\">
<div class=\"d-flex align-items-center\">
<i class=\"fa fa-circle text-warning fs-8px me-2\"></i>
Chirurgie
</div>
<div class=\"d-flex align-items-center ms-auto\">
<div class=\"text-gray-500 small\"><i class=\"fa fa-caret-up\"></i> <span data-animation=\"number\" data-value=\"11\">0</span></div>
<div class=\"w-50px text-end ps-2 fw-bold\"><span data-animation=\"number\" data-value=\"3.85\">0</span></div>
</div>
</div>


<div class=\"d-flex\">
<div class=\"d-flex align-items-center\">
<i class=\"fa fa-circle text-lime fs-8px me-2\"></i>
    Dentiserie
</div>
<div class=\"d-flex align-items-center ms-auto\">
<div class=\"text-gray-500 small\"><i class=\"fa fa-caret-up\"></i> <span data-animation=\"number\" data-value=\"57\">0</span></div>
<div class=\"w-50px text-end ps-2 fw-bold\"><span data-animation=\"number\" data-value=\"2.19\">0</span></div>
</div>
</div>

</div>

</div>

</div>


<div class=\"col-sm-6\">

<div class=\"card border-0 text-truncate mb-3 bg-gray-800 text-white\">

<div class=\"card-body\">

<div class=\"mb-3 text-gray-500\">
<b class=\"mb-3\">RECETTE PAR SERVICE</b>
<span class=\"ms-2\"><i class=\"fa fa-info-circle\" data-bs-toggle=\"popover\" data-bs-trigger=\"hover\" data-bs-title=\"Store Sessions\" data-bs-placement=\"top\" data-bs-content=\"Number of sessions on your online store. A session is a period of continuous activity from a visitor.\" data-original-title=\"\" title=\"\"></i></span>
</div>


<div class=\"d-flex align-items-center mb-1\">
<h2 class=\"text-white mb-0\"><span data-animation=\"number\" data-value=\"70719\">0</span></h2>
<div class=\"ms-auto\">
<div id=\"store-session-sparkline\" style=\"min-height: 28px;\"><div id=\"apexcharts8welg95bh\" class=\"apexcharts-canvas apexcharts8welg95bh apexcharts-theme-\" style=\"width: 160px; height: 28px;\"><svg id=\"SvgjsSvg1358\" width=\"160\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev\" class=\"apexcharts-svg\" xmlns:data=\"ApexChartsNS\" transform=\"translate(0, 0)\"><foreignObject x=\"0\" y=\"0\" width=\"160\" height=\"28\"><div class=\"apexcharts-legend\" xmlns=\"http://www.w3.org/1999/xhtml\" style=\"max-height: 14px;\"></div></foreignObject><rect id=\"SvgjsRect1363\" width=\"0\" height=\"0\" x=\"0\" y=\"0\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fefefe\"></rect><g id=\"SvgjsG1367\" class=\"apexcharts-datalabels-group\" transform=\"translate(0, 0) scale(1)\"></g><g id=\"SvgjsG1368\" class=\"apexcharts-datalabels-group\" transform=\"translate(0, 0) scale(1)\"></g><g id=\"SvgjsG1397\" class=\"apexcharts-yaxis\" rel=\"0\" transform=\"translate(-18, 0)\"></g><g id=\"SvgjsG1360\" class=\"apexcharts-inner apexcharts-graphical\" transform=\"translate(0, 1.5)\"><defs id=\"SvgjsDefs1359\"><clipPath id=\"gridRectMask8welg95bh\"><rect id=\"SvgjsRect1365\" width=\"167\" height=\"32\" x=\"-3.5\" y=\"-3.5\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fff\"></rect></clipPath><clipPath id=\"forecastMask8welg95bh\"></clipPath><clipPath id=\"nonForecastMask8welg95bh\"></clipPath><clipPath id=\"gridRectMarkerMask8welg95bh\"><rect id=\"SvgjsRect1366\" width=\"164\" height=\"29\" x=\"-2\" y=\"-2\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fff\"></rect></clipPath><linearGradient id=\"SvgjsLinearGradient1373\" x1=\"0\" y1=\"1\" x2=\"1\" y2=\"1\"><stop id=\"SvgjsStop1374\" stop-opacity=\"1\" stop-color=\"#00acac\" offset=\"0\"></stop><stop id=\"SvgjsStop1375\" stop-opacity=\"1\" stop-color=\"#348fe2\" offset=\"0.5\"></stop><stop id=\"SvgjsStop1376\" stop-opacity=\"1\" stop-color=\"#49b6d6\" offset=\"1\"></stop></linearGradient></defs><line id=\"SvgjsLine1364\" x1=\"0\" y1=\"0\" x2=\"0\" y2=\"25\" stroke=\"#b6b6b6\" stroke-dasharray=\"3\" stroke-linecap=\"butt\" class=\"apexcharts-xcrosshairs\" x=\"0\" y=\"0\" width=\"1\" height=\"25\" fill=\"#b1b9c4\" filter=\"none\" fill-opacity=\"0.9\" stroke-width=\"1\"></line><g id=\"SvgjsG1378\" class=\"apexcharts-grid\"><g id=\"SvgjsG1379\" class=\"apexcharts-gridlines-horizontal\" style=\"display: none;\"><line id=\"SvgjsLine1382\" x1=\"0\" y1=\"0\" x2=\"160\" y2=\"0\" stroke=\"#e0e0e0\" stroke-dasharray=\"0\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line><line id=\"SvgjsLine1383\" x1=\"0\" y1=\"25\" x2=\"160\" y2=\"25\" stroke=\"#e0e0e0\" stroke-dasharray=\"0\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line></g><g id=\"SvgjsG1380\" class=\"apexcharts-gridlines-vertical\" style=\"display: none;\"></g><line id=\"SvgjsLine1385\" x1=\"0\" y1=\"25\" x2=\"160\" y2=\"25\" stroke=\"transparent\" stroke-dasharray=\"0\" stroke-linecap=\"butt\"></line><line id=\"SvgjsLine1384\" x1=\"0\" y1=\"1\" x2=\"0\" y2=\"25\" stroke=\"transparent\" stroke-dasharray=\"0\" stroke-linecap=\"butt\"></line></g><g id=\"SvgjsG1381\" class=\"apexcharts-grid-borders\" style=\"display: none;\"></g><g id=\"SvgjsG1369\" class=\"apexcharts-line-series apexcharts-plot-series\"><g id=\"SvgjsG1370\" class=\"apexcharts-series\" zIndex=\"0\" seriesName=\"series-1\" data:longestSeries=\"true\" rel=\"1\" data:realIndex=\"0\"><path id=\"SvgjsPath1377\" d=\"M 0 9.962499999999999C 9.333333333333334 9.962499999999999 17.333333333333336 8.146875000000001 26.666666666666668 8.146875000000001C 36 8.146875000000001 44 20.903125 53.333333333333336 20.903125C 62.66666666666667 20.903125 70.66666666666667 22.39375 80 22.39375C 89.33333333333333 22.39375 97.33333333333334 13.712499999999999 106.66666666666667 13.712499999999999C 116 13.712499999999999 124.00000000000001 8.75 133.33333333333334 8.75C 142.66666666666669 8.75 150.66666666666669 1.3843749999999986 160 1.3843749999999986\" fill=\"none\" fill-opacity=\"1\" stroke=\"url(#SvgjsLinearGradient1373)\" stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"3\" stroke-dasharray=\"0\" class=\"apexcharts-line\" index=\"0\" clip-path=\"url(#gridRectMask8welg95bh)\" pathTo=\"M 0 9.962499999999999C 9.333333333333334 9.962499999999999 17.333333333333336 8.146875000000001 26.666666666666668 8.146875000000001C 36 8.146875000000001 44 20.903125 53.333333333333336 20.903125C 62.66666666666667 20.903125 70.66666666666667 22.39375 80 22.39375C 89.33333333333333 22.39375 97.33333333333334 13.712499999999999 106.66666666666667 13.712499999999999C 116 13.712499999999999 124.00000000000001 8.75 133.33333333333334 8.75C 142.66666666666669 8.75 150.66666666666669 1.3843749999999986 160 1.3843749999999986\" pathFrom=\"M 0 43.75 L 0 43.75 L 26.666666666666668 43.75 L 53.333333333333336 43.75 L 80 43.75 L 106.66666666666667 43.75 L 133.33333333333334 43.75 L 160 43.75\" fill-rule=\"evenodd\"></path><g id=\"SvgjsG1371\" class=\"apexcharts-series-markers-wrap apexcharts-hidden-element-shown\" data:realIndex=\"0\"><g class=\"apexcharts-series-markers\"><circle id=\"SvgjsCircle1401\" r=\"0\" cx=\"0\" cy=\"0\" class=\"apexcharts-marker w5rb324or no-pointer-events\" stroke=\"#ffffff\" fill=\"#008ffb\" fill-opacity=\"1\" stroke-width=\"2\" stroke-opacity=\"0.9\" default-marker-size=\"0\"></circle></g></g></g><g id=\"SvgjsG1372\" class=\"apexcharts-datalabels\" data:realIndex=\"0\"></g></g><line id=\"SvgjsLine1386\" x1=\"0\" y1=\"0\" x2=\"160\" y2=\"0\" stroke=\"#b6b6b6\" stroke-dasharray=\"0\" stroke-width=\"1\" stroke-linecap=\"butt\" class=\"apexcharts-ycrosshairs\"></line><line id=\"SvgjsLine1387\" x1=\"0\" y1=\"0\" x2=\"160\" y2=\"0\" stroke-dasharray=\"0\" stroke-width=\"0\" stroke-linecap=\"butt\" class=\"apexcharts-ycrosshairs-hidden\"></line><g id=\"SvgjsG1388\" class=\"apexcharts-xaxis\" transform=\"translate(0, 0)\"><g id=\"SvgjsG1389\" class=\"apexcharts-xaxis-texts-g\" transform=\"translate(0, 4)\"></g></g><g id=\"SvgjsG1398\" class=\"apexcharts-yaxis-annotations\"></g><g id=\"SvgjsG1399\" class=\"apexcharts-xaxis-annotations\"></g><g id=\"SvgjsG1400\" class=\"apexcharts-point-annotations\"></g></g></svg><div class=\"apexcharts-tooltip apexcharts-theme-dark\"><div class=\"apexcharts-tooltip-series-group\" style=\"order: 1;\"><span class=\"apexcharts-tooltip-marker\" style=\"background-color: rgb(0, 143, 251);\"></span><div class=\"apexcharts-tooltip-text\" style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><div class=\"apexcharts-tooltip-y-group\"><span class=\"apexcharts-tooltip-text-y-label\"></span><span class=\"apexcharts-tooltip-text-y-value\"></span></div><div class=\"apexcharts-tooltip-goals-group\"><span class=\"apexcharts-tooltip-text-goals-label\"></span><span class=\"apexcharts-tooltip-text-goals-value\"></span></div><div class=\"apexcharts-tooltip-z-group\"><span class=\"apexcharts-tooltip-text-z-label\"></span><span class=\"apexcharts-tooltip-text-z-value\"></span></div></div></div></div><div class=\"apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark\"><div class=\"apexcharts-yaxistooltip-text\"></div></div></div></div>
</div>
</div>


<div class=\"mb-4 text-gray-500 \">
<i class=\"fa fa-caret-up\"></i> <span data-animation=\"number\" data-value=\"9.5\"></span>% compare to last week
</div>


<div class=\"d-flex mb-2\">
<div class=\"d-flex align-items-center\">
<i class=\"fa fa-circle text-teal fs-8px me-2\"></i>
Gynécologie
</div>
<div class=\"d-flex align-items-center ms-auto\">
<div class=\"text-gray-500 small\"><i class=\"fa fa-caret-up\"></i> <span data-animation=\"number\" data-value=\"25.7\">0</span></div>
<div class=\"w-50px text-end ps-2 fw-bold\"><span data-animation=\"number\" data-value=\"53210\">0</span></div>
</div>
</div>


<div class=\"d-flex mb-2\">
<div class=\"d-flex align-items-center\">
<i class=\"fa fa-circle text-blue fs-8px me-2\"></i>
    Chirurgie
</div>
<div class=\"d-flex align-items-center ms-auto\">
<div class=\"text-gray-500 small\"><i class=\"fa fa-caret-up\"></i> <span data-animation=\"number\" data-value=\"16.0\">0</span></div>
<div class=\"w-50px text-end ps-2 fw-bold\"><span data-animation=\"number\" data-value=\"11959\">0</span></div>
</div>
</div>


<div class=\"d-flex\">
<div class=\"d-flex align-items-center\">
<i class=\"fa fa-circle text-cyan fs-8px me-2\"></i>
    Dentiserie
</div>
<div class=\"d-flex align-items-center ms-auto\">
<div class=\"text-gray-500 small\"><i class=\"fa fa-caret-up\"></i> <span data-animation=\"number\" data-value=\"7.9\">0</span></div>
<div class=\"w-50px text-end ps-2 fw-bold\"><span data-animation=\"number\" data-value=\"5545\">0</span></div>
</div>
</div>

</div>

</div>

</div>

</div>

</div>

</div>

    </div>
</div>


";
        // line 277
        yield Twig\Extension\CoreExtension::include($this->env, $context, "content/data.html.twig");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admindek-html/index.html.twig";
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
        return array (  335 => 277,  108 => 53,  92 => 40,  76 => 27,  60 => 14,  45 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{include('content/navbar.html.twig')}}
{{include('content/slidebar.html.twig')}}

<div class=\"pcoded-content\">
<div class=\"container mt-4\">
  
    <!-- Ajout du padding -->
        <div class=\"row\">
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"widget widget-stats bg-blue\">
                    <div class=\"stats-icon\"><i class=\"fa fa-desktop\"></i></div>
                    <div class=\"stats-info\">
                        <h4>Projet</h4>
                        <p>{{ projet|length }}</p>
                    </div>
                    <div class=\"stats-link\">
                <a href=\"javascript:;\"> </a>
            </div>
                </div>
            </div>

            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"widget widget-stats bg-info\">
                    <div class=\"stats-icon\"><i class=\"fa fa-link\"></i></div>
                    <div class=\"stats-info\">
                        <h4>Tache</h4>
                        <p>{{ tache|length }}</p>
                    </div>
                    <div class=\"stats-link\">
                        <a href=\"javascript:;\"> </a>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"widget widget-stats bg-orange\">
                    <div class=\"stats-icon\"><i class=\"fa fa-users\"></i></div>
                    <div class=\"stats-info\">
                        <h4>Equipe</h4>
                        <p>{{ equipe|length }}</p>
                    </div>
                    <div class=\"stats-link\">
                        <a href=\"javascript:;\"></a>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"widget widget-stats bg-red\">
                    <div class=\"stats-icon\"><i class=\"fa fa-book\"></i></div>
                    <div class=\"stats-info\">
                        <h4>Tache</h4>
                        <p>{{ tache|length }}</p>
                    </div>
                    <div class=\"stats-link\">
                        <a href=\"javascript:;\"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">

<div class=\"col-xl-6\">

<div class=\"card border-0 mb-3 overflow-hidden bg-gray-800 text-white\">

<div class=\"card-body\">

<div class=\"row\">

<div class=\"col-xl-7 col-lg-8\">

<div class=\"mb-3 text-gray-500\">
<b>TRESORERIE</b>
<span class=\"ms-2\">
<i class=\"fa fa-info-circle\" data-bs-toggle=\"popover\" data-bs-trigger=\"hover\" data-bs-title=\"Total sales\" data-bs-placement=\"top\" data-bs-content=\"Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels.\"></i>
</span>
</div>


<div class=\"d-flex mb-1\">
<h2 class=\"mb-0\"><span data-animation=\"number\" data-value=\"64559.25\">0</span></h2>
<div class=\"ms-auto mt-n1 mb-n1\"><div id=\"total-sales-sparkline\" style=\"min-height: 36px;\"><div id=\"apexcharts5c17akzr\" class=\"apexcharts-canvas apexcharts5c17akzr apexcharts-theme-\" style=\"width: 200px; height: 36px;\"><svg id=\"SvgjsSvg1315\" width=\"200\" height=\"36\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev\" class=\"apexcharts-svg\" xmlns:data=\"ApexChartsNS\" transform=\"translate(0, 0)\"><foreignObject x=\"0\" y=\"0\" width=\"200\" height=\"36\"><div class=\"apexcharts-legend\" xmlns=\"http://www.w3.org/1999/xhtml\" style=\"max-height: 18px;\"></div></foreignObject><rect id=\"SvgjsRect1319\" width=\"0\" height=\"0\" x=\"0\" y=\"0\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fefefe\"></rect><g id=\"SvgjsG1323\" class=\"apexcharts-datalabels-group\" transform=\"translate(0, 0) scale(1)\"></g><g id=\"SvgjsG1324\" class=\"apexcharts-datalabels-group\" transform=\"translate(0, 0) scale(1)\"></g><g id=\"SvgjsG1352\" class=\"apexcharts-yaxis\" rel=\"0\" transform=\"translate(-18, 0)\"></g><g id=\"SvgjsG1317\" class=\"apexcharts-inner apexcharts-graphical\" transform=\"translate(0, 1.5)\"><defs id=\"SvgjsDefs1316\"><clipPath id=\"gridRectMask5c17akzr\"><rect id=\"SvgjsRect1321\" width=\"207\" height=\"40\" x=\"-3.5\" y=\"-3.5\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fff\"></rect></clipPath><clipPath id=\"forecastMask5c17akzr\"></clipPath><clipPath id=\"nonForecastMask5c17akzr\"></clipPath><clipPath id=\"gridRectMarkerMask5c17akzr\"><rect id=\"SvgjsRect1322\" width=\"204\" height=\"37\" x=\"-2\" y=\"-2\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fff\"></rect></clipPath><linearGradient id=\"SvgjsLinearGradient1329\" x1=\"0\" y1=\"1\" x2=\"1\" y2=\"1\"><stop id=\"SvgjsStop1330\" stop-opacity=\"1\" stop-color=\"#348fe2\" offset=\"0\"></stop><stop id=\"SvgjsStop1331\" stop-opacity=\"1\" stop-color=\"#8753de\" offset=\"1\"></stop></linearGradient></defs><line id=\"SvgjsLine1320\" x1=\"0\" y1=\"0\" x2=\"0\" y2=\"33\" stroke=\"#b6b6b6\" stroke-dasharray=\"3\" stroke-linecap=\"butt\" class=\"apexcharts-xcrosshairs\" x=\"0\" y=\"0\" width=\"1\" height=\"33\" fill=\"#b1b9c4\" filter=\"none\" fill-opacity=\"0.9\" stroke-width=\"1\"></line><g id=\"SvgjsG1333\" class=\"apexcharts-grid\"><g id=\"SvgjsG1334\" class=\"apexcharts-gridlines-horizontal\" style=\"display: none;\"><line id=\"SvgjsLine1337\" x1=\"0\" y1=\"0\" x2=\"200\" y2=\"0\" stroke=\"#e0e0e0\" stroke-dasharray=\"0\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line><line id=\"SvgjsLine1338\" x1=\"0\" y1=\"33\" x2=\"200\" y2=\"33\" stroke=\"#e0e0e0\" stroke-dasharray=\"0\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line></g><g id=\"SvgjsG1335\" class=\"apexcharts-gridlines-vertical\" style=\"display: none;\"></g><line id=\"SvgjsLine1340\" x1=\"0\" y1=\"33\" x2=\"200\" y2=\"33\" stroke=\"transparent\" stroke-dasharray=\"0\" stroke-linecap=\"butt\"></line><line id=\"SvgjsLine1339\" x1=\"0\" y1=\"1\" x2=\"0\" y2=\"33\" stroke=\"transparent\" stroke-dasharray=\"0\" stroke-linecap=\"butt\"></line></g><g id=\"SvgjsG1336\" class=\"apexcharts-grid-borders\" style=\"display: none;\"></g><g id=\"SvgjsG1325\" class=\"apexcharts-line-series apexcharts-plot-series\"><g id=\"SvgjsG1326\" class=\"apexcharts-series\" zIndex=\"0\" seriesName=\"series-1\" data:longestSeries=\"true\" rel=\"1\" data:realIndex=\"0\"><path id=\"SvgjsPath1332\" d=\"M 0 10.719413571428571C 11.666666666666666 10.719413571428571 21.66666666666667 7.026949285714284 33.333333333333336 7.026949285714284C 45 7.026949285714284 55.00000000000001 15.801413571428572 66.66666666666667 15.801413571428572C 78.33333333333334 15.801413571428572 88.33333333333334 18.21060214285714 100 18.21060214285714C 111.66666666666667 18.21060214285714 121.66666666666667 14.321882142857142 133.33333333333334 14.321882142857142C 145 14.321882142857142 155.00000000000003 17.48684142857143 166.66666666666669 17.48684142857143C 178.33333333333334 17.48684142857143 188.33333333333334 2.550098571428574 200 2.550098571428574\" fill=\"none\" fill-opacity=\"1\" stroke=\"url(#SvgjsLinearGradient1329)\" stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"3\" stroke-dasharray=\"0\" class=\"apexcharts-line\" index=\"0\" clip-path=\"url(#gridRectMask5c17akzr)\" pathTo=\"M 0 10.719413571428571C 11.666666666666666 10.719413571428571 21.66666666666667 7.026949285714284 33.333333333333336 7.026949285714284C 45 7.026949285714284 55.00000000000001 15.801413571428572 66.66666666666667 15.801413571428572C 78.33333333333334 15.801413571428572 88.33333333333334 18.21060214285714 100 18.21060214285714C 111.66666666666667 18.21060214285714 121.66666666666667 14.321882142857142 133.33333333333334 14.321882142857142C 145 14.321882142857142 155.00000000000003 17.48684142857143 166.66666666666669 17.48684142857143C 178.33333333333334 17.48684142857143 188.33333333333334 2.550098571428574 200 2.550098571428574\" pathFrom=\"M 0 33 L 0 33 L 33.333333333333336 33 L 66.66666666666667 33 L 100 33 L 133.33333333333334 33 L 166.66666666666669 33 L 200 33\" fill-rule=\"evenodd\"></path><g id=\"SvgjsG1327\" class=\"apexcharts-series-markers-wrap apexcharts-hidden-element-shown\" data:realIndex=\"0\"><g class=\"apexcharts-series-markers\"><circle id=\"SvgjsCircle1356\" r=\"0\" cx=\"0\" cy=\"0\" class=\"apexcharts-marker w9wnxvgkk no-pointer-events\" stroke=\"#ffffff\" fill=\"#008ffb\" fill-opacity=\"1\" stroke-width=\"2\" stroke-opacity=\"0.9\" default-marker-size=\"0\"></circle></g></g></g><g id=\"SvgjsG1328\" class=\"apexcharts-datalabels\" data:realIndex=\"0\"></g></g><line id=\"SvgjsLine1341\" x1=\"0\" y1=\"0\" x2=\"200\" y2=\"0\" stroke=\"#b6b6b6\" stroke-dasharray=\"0\" stroke-width=\"1\" stroke-linecap=\"butt\" class=\"apexcharts-ycrosshairs\"></line><line id=\"SvgjsLine1342\" x1=\"0\" y1=\"0\" x2=\"200\" y2=\"0\" stroke-dasharray=\"0\" stroke-width=\"0\" stroke-linecap=\"butt\" class=\"apexcharts-ycrosshairs-hidden\"></line><g id=\"SvgjsG1343\" class=\"apexcharts-xaxis\" transform=\"translate(0, 0)\"><g id=\"SvgjsG1344\" class=\"apexcharts-xaxis-texts-g\" transform=\"translate(0, -4)\"></g></g><g id=\"SvgjsG1353\" class=\"apexcharts-yaxis-annotations\"></g><g id=\"SvgjsG1354\" class=\"apexcharts-xaxis-annotations\"></g><g id=\"SvgjsG1355\" class=\"apexcharts-point-annotations\"></g></g></svg><div class=\"apexcharts-tooltip apexcharts-theme-dark\"><div class=\"apexcharts-tooltip-series-group\" style=\"order: 1;\"><span class=\"apexcharts-tooltip-marker\" style=\"background-color: rgb(0, 143, 251);\"></span><div class=\"apexcharts-tooltip-text\" style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><div class=\"apexcharts-tooltip-y-group\"><span class=\"apexcharts-tooltip-text-y-label\"></span><span class=\"apexcharts-tooltip-text-y-value\"></span></div><div class=\"apexcharts-tooltip-goals-group\"><span class=\"apexcharts-tooltip-text-goals-label\"></span><span class=\"apexcharts-tooltip-text-goals-value\"></span></div><div class=\"apexcharts-tooltip-z-group\"><span class=\"apexcharts-tooltip-text-z-label\"></span><span class=\"apexcharts-tooltip-text-z-value\"></span></div></div></div></div><div class=\"apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark\"><div class=\"apexcharts-yaxistooltip-text\"></div></div></div></div></div>
</div>


<div class=\"mb-3 text-gray-500\">
<i class=\"fa fa-caret-up\"></i> <span data-animation=\"number\" data-value=\"33.21\">0</span> compare to last week
</div>

<hr class=\"bg-white bg-opacity-50\">

<div class=\"row text-truncate\">

<div class=\"col-6\">
<div class=\" text-gray-500\">Depense</div>
<div class=\"fs-18px mb-5px fw-bold\" data-animation=\"number\" data-value=\"1568\">0</div>
<div class=\"progress h-5px rounded-3 bg-gray-900 mb-5px\">
<div class=\"progress-bar progress-bar-striped rounded-right bg-teal\" data-animation=\"width\" data-value=\"55%\" style=\"width: 55%;\"></div>
</div>
</div>


<div class=\"col-6\">
<div class=\" text-gray-500\">Recette</div>
<div class=\"fs-18px mb-5px fw-bold\">\$<span data-animation=\"number\" data-value=\"41.20\">0</span></div>
<div class=\"progress h-5px rounded-3 bg-gray-900 mb-5px\">
<div class=\"progress-bar progress-bar-striped rounded-right\" data-animation=\"width\" data-value=\"55%\" style=\"width: 55%;\"></div>
</div>
</div>

</div>

</div>


<div class=\"col-xl-5 col-lg-4 align-items-center d-flex justify-content-center\">
<img src=\"https://seantheme.com/color-admin/admin/assets/img/svg/img-1.svg\" height=\"150px\" class=\"d-none d-lg-block\">
</div>

</div>

</div>

</div>

</div>


<div class=\"col-xl-6\">

<div class=\"row\">

<div class=\"col-sm-6\">

<div class=\"card border-0 text-truncate mb-3 bg-gray-800 text-white\">

<div class=\"card-body\">

<div class=\"mb-3 text-gray-500\">
<b class=\"mb-3\">DEPENSE PAR SERVICE</b>
<span class=\"ms-2\"><i class=\"fa fa-info-circle\" data-bs-toggle=\"popover\" data-bs-trigger=\"hover\" data-bs-title=\"Conversion Rate\" data-bs-placement=\"top\" data-bs-content=\"Percentage of sessions that resulted in orders from total number of sessions.\" data-original-title=\"\" title=\"\"></i></span>
</div>


<div class=\"d-flex align-items-center mb-1\">
<h2 class=\"text-white mb-0\"><span data-animation=\"number\" data-value=\"2.19\">0</span></h2>
<div class=\"ms-auto\">
<div id=\"conversion-rate-sparkline\" style=\"min-height: 28px;\"><div id=\"apexchartsv9i7fg1w\" class=\"apexcharts-canvas apexchartsv9i7fg1w apexcharts-theme-\" style=\"width: 160px; height: 28px;\"><svg id=\"SvgjsSvg1270\" width=\"160\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev\" class=\"apexcharts-svg\" xmlns:data=\"ApexChartsNS\" transform=\"translate(0, 0)\"><foreignObject x=\"0\" y=\"0\" width=\"160\" height=\"28\"><div class=\"apexcharts-legend\" xmlns=\"http://www.w3.org/1999/xhtml\" style=\"max-height: 14px;\"></div></foreignObject><rect id=\"SvgjsRect1275\" width=\"0\" height=\"0\" x=\"0\" y=\"0\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fefefe\"></rect><g id=\"SvgjsG1279\" class=\"apexcharts-datalabels-group\" transform=\"translate(0, 0) scale(1)\"></g><g id=\"SvgjsG1280\" class=\"apexcharts-datalabels-group\" transform=\"translate(0, 0) scale(1)\"></g><g id=\"SvgjsG1309\" class=\"apexcharts-yaxis\" rel=\"0\" transform=\"translate(-18, 0)\"></g><g id=\"SvgjsG1272\" class=\"apexcharts-inner apexcharts-graphical\" transform=\"translate(0, 1.5)\"><defs id=\"SvgjsDefs1271\"><clipPath id=\"gridRectMaskv9i7fg1w\"><rect id=\"SvgjsRect1277\" width=\"167\" height=\"32\" x=\"-3.5\" y=\"-3.5\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fff\"></rect></clipPath><clipPath id=\"forecastMaskv9i7fg1w\"></clipPath><clipPath id=\"nonForecastMaskv9i7fg1w\"></clipPath><clipPath id=\"gridRectMarkerMaskv9i7fg1w\"><rect id=\"SvgjsRect1278\" width=\"164\" height=\"29\" x=\"-2\" y=\"-2\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fff\"></rect></clipPath><linearGradient id=\"SvgjsLinearGradient1285\" x1=\"0\" y1=\"1\" x2=\"1\" y2=\"1\"><stop id=\"SvgjsStop1286\" stop-opacity=\"1\" stop-color=\"#ff5b57\" offset=\"0\"></stop><stop id=\"SvgjsStop1287\" stop-opacity=\"1\" stop-color=\"#f59c1a\" offset=\"0.5\"></stop><stop id=\"SvgjsStop1288\" stop-opacity=\"1\" stop-color=\"#90ca4b\" offset=\"1\"></stop></linearGradient></defs><line id=\"SvgjsLine1276\" x1=\"0\" y1=\"0\" x2=\"0\" y2=\"25\" stroke=\"#b6b6b6\" stroke-dasharray=\"3\" stroke-linecap=\"butt\" class=\"apexcharts-xcrosshairs\" x=\"0\" y=\"0\" width=\"1\" height=\"25\" fill=\"#b1b9c4\" filter=\"none\" fill-opacity=\"0.9\" stroke-width=\"1\"></line><g id=\"SvgjsG1290\" class=\"apexcharts-grid\"><g id=\"SvgjsG1291\" class=\"apexcharts-gridlines-horizontal\" style=\"display: none;\"><line id=\"SvgjsLine1294\" x1=\"0\" y1=\"0\" x2=\"160\" y2=\"0\" stroke=\"#e0e0e0\" stroke-dasharray=\"0\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line><line id=\"SvgjsLine1295\" x1=\"0\" y1=\"25\" x2=\"160\" y2=\"25\" stroke=\"#e0e0e0\" stroke-dasharray=\"0\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line></g><g id=\"SvgjsG1292\" class=\"apexcharts-gridlines-vertical\" style=\"display: none;\"></g><line id=\"SvgjsLine1297\" x1=\"0\" y1=\"25\" x2=\"160\" y2=\"25\" stroke=\"transparent\" stroke-dasharray=\"0\" stroke-linecap=\"butt\"></line><line id=\"SvgjsLine1296\" x1=\"0\" y1=\"1\" x2=\"0\" y2=\"25\" stroke=\"transparent\" stroke-dasharray=\"0\" stroke-linecap=\"butt\"></line></g><g id=\"SvgjsG1293\" class=\"apexcharts-grid-borders\" style=\"display: none;\"></g><g id=\"SvgjsG1281\" class=\"apexcharts-line-series apexcharts-plot-series\"><g id=\"SvgjsG1282\" class=\"apexcharts-series\" zIndex=\"0\" seriesName=\"series-1\" data:longestSeries=\"true\" rel=\"1\" data:realIndex=\"0\"><path id=\"SvgjsPath1289\" d=\"M 0 5.714285714285708C 9.333333333333334 5.714285714285708 17.333333333333336 1.25 26.666666666666668 1.25C 36 1.25 44 17.142857142857146 53.333333333333336 17.142857142857146C 62.66666666666667 17.142857142857146 70.66666666666667 24.821428571428573 80 24.821428571428573C 89.33333333333333 24.821428571428573 97.33333333333334 20 106.66666666666667 20C 116 20 124.00000000000001 24.642857142857142 133.33333333333334 24.642857142857142C 142.66666666666669 24.642857142857142 150.66666666666669 3.5714285714285765 160 3.5714285714285765\" fill=\"none\" fill-opacity=\"1\" stroke=\"url(#SvgjsLinearGradient1285)\" stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"3\" stroke-dasharray=\"0\" class=\"apexcharts-line\" index=\"0\" clip-path=\"url(#gridRectMaskv9i7fg1w)\" pathTo=\"M 0 5.714285714285708C 9.333333333333334 5.714285714285708 17.333333333333336 1.25 26.666666666666668 1.25C 36 1.25 44 17.142857142857146 53.333333333333336 17.142857142857146C 62.66666666666667 17.142857142857146 70.66666666666667 24.821428571428573 80 24.821428571428573C 89.33333333333333 24.821428571428573 97.33333333333334 20 106.66666666666667 20C 116 20 124.00000000000001 24.642857142857142 133.33333333333334 24.642857142857142C 142.66666666666669 24.642857142857142 150.66666666666669 3.5714285714285765 160 3.5714285714285765\" pathFrom=\"M 0 53.57142857142858 L 0 53.57142857142858 L 26.666666666666668 53.57142857142858 L 53.333333333333336 53.57142857142858 L 80 53.57142857142858 L 106.66666666666667 53.57142857142858 L 133.33333333333334 53.57142857142858 L 160 53.57142857142858\" fill-rule=\"evenodd\"></path><g id=\"SvgjsG1283\" class=\"apexcharts-series-markers-wrap apexcharts-hidden-element-shown\" data:realIndex=\"0\"><g class=\"apexcharts-series-markers\"><circle id=\"SvgjsCircle1313\" r=\"0\" cx=\"0\" cy=\"0\" class=\"apexcharts-marker wrgy2p61 no-pointer-events\" stroke=\"#ffffff\" fill=\"#008ffb\" fill-opacity=\"1\" stroke-width=\"2\" stroke-opacity=\"0.9\" default-marker-size=\"0\"></circle></g></g></g><g id=\"SvgjsG1284\" class=\"apexcharts-datalabels\" data:realIndex=\"0\"></g></g><line id=\"SvgjsLine1298\" x1=\"0\" y1=\"0\" x2=\"160\" y2=\"0\" stroke=\"#b6b6b6\" stroke-dasharray=\"0\" stroke-width=\"1\" stroke-linecap=\"butt\" class=\"apexcharts-ycrosshairs\"></line><line id=\"SvgjsLine1299\" x1=\"0\" y1=\"0\" x2=\"160\" y2=\"0\" stroke-dasharray=\"0\" stroke-width=\"0\" stroke-linecap=\"butt\" class=\"apexcharts-ycrosshairs-hidden\"></line><g id=\"SvgjsG1300\" class=\"apexcharts-xaxis\" transform=\"translate(0, 0)\"><g id=\"SvgjsG1301\" class=\"apexcharts-xaxis-texts-g\" transform=\"translate(0, 4)\"></g></g><g id=\"SvgjsG1310\" class=\"apexcharts-yaxis-annotations\"></g><g id=\"SvgjsG1311\" class=\"apexcharts-xaxis-annotations\"></g><g id=\"SvgjsG1312\" class=\"apexcharts-point-annotations\"></g></g></svg><div class=\"apexcharts-tooltip apexcharts-theme-dark\"><div class=\"apexcharts-tooltip-series-group\" style=\"order: 1;\"><span class=\"apexcharts-tooltip-marker\" style=\"background-color: rgb(0, 143, 251);\"></span><div class=\"apexcharts-tooltip-text\" style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><div class=\"apexcharts-tooltip-y-group\"><span class=\"apexcharts-tooltip-text-y-label\"></span><span class=\"apexcharts-tooltip-text-y-value\"></span></div><div class=\"apexcharts-tooltip-goals-group\"><span class=\"apexcharts-tooltip-text-goals-label\"></span><span class=\"apexcharts-tooltip-text-goals-value\"></span></div><div class=\"apexcharts-tooltip-z-group\"><span class=\"apexcharts-tooltip-text-z-label\"></span><span class=\"apexcharts-tooltip-text-z-value\"></span></div></div></div></div><div class=\"apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark\"><div class=\"apexcharts-yaxistooltip-text\"></div></div></div></div>
</div>
</div>


<div class=\"mb-4 text-gray-500 \">
<i class=\"fa fa-caret-down\"></i> <span data-animation=\"number\" data-value=\"0.50\">0</span>% compare to last week
</div>


<div class=\"d-flex mb-2\">
<div class=\"d-flex align-items-center\">
<i class=\"fa fa-circle text-red fs-8px me-2\"></i>
Gynécologie
</div>
<div class=\"d-flex align-items-center ms-auto\">
<div class=\"text-gray-500 small\"><i class=\"fa fa-caret-up\"></i> <span data-animation=\"number\" data-value=\"262\">0</span></div>
<div class=\"w-50px text-end ps-2 fw-bold\"><span data-animation=\"number\" data-value=\"3.79\">0</span></div>
</div>
</div>


<div class=\"d-flex mb-2\">
<div class=\"d-flex align-items-center\">
<i class=\"fa fa-circle text-warning fs-8px me-2\"></i>
Chirurgie
</div>
<div class=\"d-flex align-items-center ms-auto\">
<div class=\"text-gray-500 small\"><i class=\"fa fa-caret-up\"></i> <span data-animation=\"number\" data-value=\"11\">0</span></div>
<div class=\"w-50px text-end ps-2 fw-bold\"><span data-animation=\"number\" data-value=\"3.85\">0</span></div>
</div>
</div>


<div class=\"d-flex\">
<div class=\"d-flex align-items-center\">
<i class=\"fa fa-circle text-lime fs-8px me-2\"></i>
    Dentiserie
</div>
<div class=\"d-flex align-items-center ms-auto\">
<div class=\"text-gray-500 small\"><i class=\"fa fa-caret-up\"></i> <span data-animation=\"number\" data-value=\"57\">0</span></div>
<div class=\"w-50px text-end ps-2 fw-bold\"><span data-animation=\"number\" data-value=\"2.19\">0</span></div>
</div>
</div>

</div>

</div>

</div>


<div class=\"col-sm-6\">

<div class=\"card border-0 text-truncate mb-3 bg-gray-800 text-white\">

<div class=\"card-body\">

<div class=\"mb-3 text-gray-500\">
<b class=\"mb-3\">RECETTE PAR SERVICE</b>
<span class=\"ms-2\"><i class=\"fa fa-info-circle\" data-bs-toggle=\"popover\" data-bs-trigger=\"hover\" data-bs-title=\"Store Sessions\" data-bs-placement=\"top\" data-bs-content=\"Number of sessions on your online store. A session is a period of continuous activity from a visitor.\" data-original-title=\"\" title=\"\"></i></span>
</div>


<div class=\"d-flex align-items-center mb-1\">
<h2 class=\"text-white mb-0\"><span data-animation=\"number\" data-value=\"70719\">0</span></h2>
<div class=\"ms-auto\">
<div id=\"store-session-sparkline\" style=\"min-height: 28px;\"><div id=\"apexcharts8welg95bh\" class=\"apexcharts-canvas apexcharts8welg95bh apexcharts-theme-\" style=\"width: 160px; height: 28px;\"><svg id=\"SvgjsSvg1358\" width=\"160\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev\" class=\"apexcharts-svg\" xmlns:data=\"ApexChartsNS\" transform=\"translate(0, 0)\"><foreignObject x=\"0\" y=\"0\" width=\"160\" height=\"28\"><div class=\"apexcharts-legend\" xmlns=\"http://www.w3.org/1999/xhtml\" style=\"max-height: 14px;\"></div></foreignObject><rect id=\"SvgjsRect1363\" width=\"0\" height=\"0\" x=\"0\" y=\"0\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fefefe\"></rect><g id=\"SvgjsG1367\" class=\"apexcharts-datalabels-group\" transform=\"translate(0, 0) scale(1)\"></g><g id=\"SvgjsG1368\" class=\"apexcharts-datalabels-group\" transform=\"translate(0, 0) scale(1)\"></g><g id=\"SvgjsG1397\" class=\"apexcharts-yaxis\" rel=\"0\" transform=\"translate(-18, 0)\"></g><g id=\"SvgjsG1360\" class=\"apexcharts-inner apexcharts-graphical\" transform=\"translate(0, 1.5)\"><defs id=\"SvgjsDefs1359\"><clipPath id=\"gridRectMask8welg95bh\"><rect id=\"SvgjsRect1365\" width=\"167\" height=\"32\" x=\"-3.5\" y=\"-3.5\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fff\"></rect></clipPath><clipPath id=\"forecastMask8welg95bh\"></clipPath><clipPath id=\"nonForecastMask8welg95bh\"></clipPath><clipPath id=\"gridRectMarkerMask8welg95bh\"><rect id=\"SvgjsRect1366\" width=\"164\" height=\"29\" x=\"-2\" y=\"-2\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fff\"></rect></clipPath><linearGradient id=\"SvgjsLinearGradient1373\" x1=\"0\" y1=\"1\" x2=\"1\" y2=\"1\"><stop id=\"SvgjsStop1374\" stop-opacity=\"1\" stop-color=\"#00acac\" offset=\"0\"></stop><stop id=\"SvgjsStop1375\" stop-opacity=\"1\" stop-color=\"#348fe2\" offset=\"0.5\"></stop><stop id=\"SvgjsStop1376\" stop-opacity=\"1\" stop-color=\"#49b6d6\" offset=\"1\"></stop></linearGradient></defs><line id=\"SvgjsLine1364\" x1=\"0\" y1=\"0\" x2=\"0\" y2=\"25\" stroke=\"#b6b6b6\" stroke-dasharray=\"3\" stroke-linecap=\"butt\" class=\"apexcharts-xcrosshairs\" x=\"0\" y=\"0\" width=\"1\" height=\"25\" fill=\"#b1b9c4\" filter=\"none\" fill-opacity=\"0.9\" stroke-width=\"1\"></line><g id=\"SvgjsG1378\" class=\"apexcharts-grid\"><g id=\"SvgjsG1379\" class=\"apexcharts-gridlines-horizontal\" style=\"display: none;\"><line id=\"SvgjsLine1382\" x1=\"0\" y1=\"0\" x2=\"160\" y2=\"0\" stroke=\"#e0e0e0\" stroke-dasharray=\"0\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line><line id=\"SvgjsLine1383\" x1=\"0\" y1=\"25\" x2=\"160\" y2=\"25\" stroke=\"#e0e0e0\" stroke-dasharray=\"0\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line></g><g id=\"SvgjsG1380\" class=\"apexcharts-gridlines-vertical\" style=\"display: none;\"></g><line id=\"SvgjsLine1385\" x1=\"0\" y1=\"25\" x2=\"160\" y2=\"25\" stroke=\"transparent\" stroke-dasharray=\"0\" stroke-linecap=\"butt\"></line><line id=\"SvgjsLine1384\" x1=\"0\" y1=\"1\" x2=\"0\" y2=\"25\" stroke=\"transparent\" stroke-dasharray=\"0\" stroke-linecap=\"butt\"></line></g><g id=\"SvgjsG1381\" class=\"apexcharts-grid-borders\" style=\"display: none;\"></g><g id=\"SvgjsG1369\" class=\"apexcharts-line-series apexcharts-plot-series\"><g id=\"SvgjsG1370\" class=\"apexcharts-series\" zIndex=\"0\" seriesName=\"series-1\" data:longestSeries=\"true\" rel=\"1\" data:realIndex=\"0\"><path id=\"SvgjsPath1377\" d=\"M 0 9.962499999999999C 9.333333333333334 9.962499999999999 17.333333333333336 8.146875000000001 26.666666666666668 8.146875000000001C 36 8.146875000000001 44 20.903125 53.333333333333336 20.903125C 62.66666666666667 20.903125 70.66666666666667 22.39375 80 22.39375C 89.33333333333333 22.39375 97.33333333333334 13.712499999999999 106.66666666666667 13.712499999999999C 116 13.712499999999999 124.00000000000001 8.75 133.33333333333334 8.75C 142.66666666666669 8.75 150.66666666666669 1.3843749999999986 160 1.3843749999999986\" fill=\"none\" fill-opacity=\"1\" stroke=\"url(#SvgjsLinearGradient1373)\" stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"3\" stroke-dasharray=\"0\" class=\"apexcharts-line\" index=\"0\" clip-path=\"url(#gridRectMask8welg95bh)\" pathTo=\"M 0 9.962499999999999C 9.333333333333334 9.962499999999999 17.333333333333336 8.146875000000001 26.666666666666668 8.146875000000001C 36 8.146875000000001 44 20.903125 53.333333333333336 20.903125C 62.66666666666667 20.903125 70.66666666666667 22.39375 80 22.39375C 89.33333333333333 22.39375 97.33333333333334 13.712499999999999 106.66666666666667 13.712499999999999C 116 13.712499999999999 124.00000000000001 8.75 133.33333333333334 8.75C 142.66666666666669 8.75 150.66666666666669 1.3843749999999986 160 1.3843749999999986\" pathFrom=\"M 0 43.75 L 0 43.75 L 26.666666666666668 43.75 L 53.333333333333336 43.75 L 80 43.75 L 106.66666666666667 43.75 L 133.33333333333334 43.75 L 160 43.75\" fill-rule=\"evenodd\"></path><g id=\"SvgjsG1371\" class=\"apexcharts-series-markers-wrap apexcharts-hidden-element-shown\" data:realIndex=\"0\"><g class=\"apexcharts-series-markers\"><circle id=\"SvgjsCircle1401\" r=\"0\" cx=\"0\" cy=\"0\" class=\"apexcharts-marker w5rb324or no-pointer-events\" stroke=\"#ffffff\" fill=\"#008ffb\" fill-opacity=\"1\" stroke-width=\"2\" stroke-opacity=\"0.9\" default-marker-size=\"0\"></circle></g></g></g><g id=\"SvgjsG1372\" class=\"apexcharts-datalabels\" data:realIndex=\"0\"></g></g><line id=\"SvgjsLine1386\" x1=\"0\" y1=\"0\" x2=\"160\" y2=\"0\" stroke=\"#b6b6b6\" stroke-dasharray=\"0\" stroke-width=\"1\" stroke-linecap=\"butt\" class=\"apexcharts-ycrosshairs\"></line><line id=\"SvgjsLine1387\" x1=\"0\" y1=\"0\" x2=\"160\" y2=\"0\" stroke-dasharray=\"0\" stroke-width=\"0\" stroke-linecap=\"butt\" class=\"apexcharts-ycrosshairs-hidden\"></line><g id=\"SvgjsG1388\" class=\"apexcharts-xaxis\" transform=\"translate(0, 0)\"><g id=\"SvgjsG1389\" class=\"apexcharts-xaxis-texts-g\" transform=\"translate(0, 4)\"></g></g><g id=\"SvgjsG1398\" class=\"apexcharts-yaxis-annotations\"></g><g id=\"SvgjsG1399\" class=\"apexcharts-xaxis-annotations\"></g><g id=\"SvgjsG1400\" class=\"apexcharts-point-annotations\"></g></g></svg><div class=\"apexcharts-tooltip apexcharts-theme-dark\"><div class=\"apexcharts-tooltip-series-group\" style=\"order: 1;\"><span class=\"apexcharts-tooltip-marker\" style=\"background-color: rgb(0, 143, 251);\"></span><div class=\"apexcharts-tooltip-text\" style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><div class=\"apexcharts-tooltip-y-group\"><span class=\"apexcharts-tooltip-text-y-label\"></span><span class=\"apexcharts-tooltip-text-y-value\"></span></div><div class=\"apexcharts-tooltip-goals-group\"><span class=\"apexcharts-tooltip-text-goals-label\"></span><span class=\"apexcharts-tooltip-text-goals-value\"></span></div><div class=\"apexcharts-tooltip-z-group\"><span class=\"apexcharts-tooltip-text-z-label\"></span><span class=\"apexcharts-tooltip-text-z-value\"></span></div></div></div></div><div class=\"apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark\"><div class=\"apexcharts-yaxistooltip-text\"></div></div></div></div>
</div>
</div>


<div class=\"mb-4 text-gray-500 \">
<i class=\"fa fa-caret-up\"></i> <span data-animation=\"number\" data-value=\"9.5\"></span>% compare to last week
</div>


<div class=\"d-flex mb-2\">
<div class=\"d-flex align-items-center\">
<i class=\"fa fa-circle text-teal fs-8px me-2\"></i>
Gynécologie
</div>
<div class=\"d-flex align-items-center ms-auto\">
<div class=\"text-gray-500 small\"><i class=\"fa fa-caret-up\"></i> <span data-animation=\"number\" data-value=\"25.7\">0</span></div>
<div class=\"w-50px text-end ps-2 fw-bold\"><span data-animation=\"number\" data-value=\"53210\">0</span></div>
</div>
</div>


<div class=\"d-flex mb-2\">
<div class=\"d-flex align-items-center\">
<i class=\"fa fa-circle text-blue fs-8px me-2\"></i>
    Chirurgie
</div>
<div class=\"d-flex align-items-center ms-auto\">
<div class=\"text-gray-500 small\"><i class=\"fa fa-caret-up\"></i> <span data-animation=\"number\" data-value=\"16.0\">0</span></div>
<div class=\"w-50px text-end ps-2 fw-bold\"><span data-animation=\"number\" data-value=\"11959\">0</span></div>
</div>
</div>


<div class=\"d-flex\">
<div class=\"d-flex align-items-center\">
<i class=\"fa fa-circle text-cyan fs-8px me-2\"></i>
    Dentiserie
</div>
<div class=\"d-flex align-items-center ms-auto\">
<div class=\"text-gray-500 small\"><i class=\"fa fa-caret-up\"></i> <span data-animation=\"number\" data-value=\"7.9\">0</span></div>
<div class=\"w-50px text-end ps-2 fw-bold\"><span data-animation=\"number\" data-value=\"5545\">0</span></div>
</div>
</div>

</div>

</div>

</div>

</div>

</div>

</div>

    </div>
</div>


{{include('content/data.html.twig')}}", "admindek-html/index.html.twig", "C:\\Users\\SYNS-MANAGER\\Documents\\GitHub\\pmanalysis\\templates\\admindek-html\\index.html.twig");
    }
}
