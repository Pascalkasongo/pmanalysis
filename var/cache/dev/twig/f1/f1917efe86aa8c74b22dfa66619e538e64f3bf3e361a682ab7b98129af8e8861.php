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

        </div>

        
        <div class=\"row\">
        ";
        // line 52
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "session", [], "any", false, false, false, 52), "get", ["user_role"], "method", false, false, false, 52), 0, [], "array", false, false, false, 52) == "ROLE_DIRECTEUR")) {
            // line 53
            yield "
<div class=\"col-xl-3\">

<div class=\"card border-0 mb-3 overflow-hidden bg-gray-800 text-white\">

<div class=\"card-body\">

<div class=\"row\">

<div class=\"col-xl-7 col-lg-8\">

<div class=\"mb-3 text-gray-500\">
<b>TOTAL FACTURE</b>
<span class=\"ms-2\">
<i class=\"fa fa-info-circle\" data-bs-toggle=\"popover\" data-bs-trigger=\"hover\" data-bs-title=\"Total sales\" data-bs-placement=\"top\" data-bs-content=\"Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels.\"></i>
</span>
</div>


<div class=\"d-flex mb-1\">
<h2 class=\"mb-0\">
    <span data-animation=\"number\" data-value=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 74, $this->source); })()), "html", null, true);
            yield "\" class=\"currency\">
        \$";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 75, $this->source); })()), "html", null, true);
            yield "
    </span>
</h2>
</div>
";
        }
        // line 80
        yield "





<div class=\"col-xl-5 col-lg-4 align-items-center d-flex justify-content-center\">
<img src=\"https://seantheme.com/color-admin/admin/assets/img/svg/img-1.svg\" height=\"150px\" class=\"d-none d-lg-block\">
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
        // line 109
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
        return array (  175 => 109,  144 => 80,  136 => 75,  132 => 74,  109 => 53,  107 => 52,  92 => 40,  76 => 27,  60 => 14,  45 => 2,  41 => 1,);
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

        </div>

        
        <div class=\"row\">
        {% if app.session.get('user_role')[0] == 'ROLE_DIRECTEUR' %}

<div class=\"col-xl-3\">

<div class=\"card border-0 mb-3 overflow-hidden bg-gray-800 text-white\">

<div class=\"card-body\">

<div class=\"row\">

<div class=\"col-xl-7 col-lg-8\">

<div class=\"mb-3 text-gray-500\">
<b>TOTAL FACTURE</b>
<span class=\"ms-2\">
<i class=\"fa fa-info-circle\" data-bs-toggle=\"popover\" data-bs-trigger=\"hover\" data-bs-title=\"Total sales\" data-bs-placement=\"top\" data-bs-content=\"Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels.\"></i>
</span>
</div>


<div class=\"d-flex mb-1\">
<h2 class=\"mb-0\">
    <span data-animation=\"number\" data-value=\"{{ facture }}\" class=\"currency\">
        \${{ facture }}
    </span>
</h2>
</div>
{% endif %}






<div class=\"col-xl-5 col-lg-4 align-items-center d-flex justify-content-center\">
<img src=\"https://seantheme.com/color-admin/admin/assets/img/svg/img-1.svg\" height=\"150px\" class=\"d-none d-lg-block\">
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
