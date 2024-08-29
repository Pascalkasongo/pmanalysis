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

/* content/slidebar.html.twig */
class __TwigTemplate_0a4de1b128d853722a4b4bd3a2f0de86da1ab155a9c2c6d847041cda4a417a12 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/slidebar.html.twig"));

        // line 1
        yield "<div id=\"sidebar\" class=\"app-sidebar\" data-bs-theme=\"dark\">

    <div class=\"app-sidebar-content\" data-scrollbar=\"true\" data-height=\"100%\" style=\"height: 100%; overflow-x: scroll;\">

    <div class=\"menu\">
    <div class=\"menu-profile\">
    <a href=\"javascript:;\" class=\"menu-profile-link\" data-toggle=\"app-sidebar-profile\" data-target=\"#appSidebarProfileMenu\">
    <div class=\"menu-profile-cover with-shadow\"></div>
    <div class=\"menu-profile-image\">
    <img src=\"../assets/img/user/user-13.jpg\" alt=\"\">
    </div>
    <div class=\"menu-profile-info\">
    <div class=\"d-flex align-items-center\">
    <div class=\"flex-grow-1\">
        ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "session", [], "any", false, false, false, 15), "get", ["user_name"], "method", false, false, false, 15), "html", null, true);
        yield "
    </div>
    <div class=\"menu-caret ms-auto\"></div>
    </div>
    <small> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "session", [], "any", false, false, false, 19), "get", ["user_role"], "method", false, false, false, 19), 0, [], "array", false, false, false, 19), "html", null, true);
        yield "</small>
    </div>
    </a>
    </div>
    <div id=\"appSidebarProfileMenu\" class=\"collapse\">
    <div class=\"menu-item pt-5px\">
    <a href=\"javascript:;\" class=\"menu-link\">
    <div class=\"menu-icon\"><i class=\"fa fa-cog\"></i></div>
    <div class=\"menu-text\">Settings</div>
    </a>
    </div>
    <div class=\"menu-item\">
    <a href=\"javascript:;\" class=\"menu-link\">
    <div class=\"menu-icon\"><i class=\"fa fa-pencil-alt\"></i></div>
    <div class=\"menu-text\"> Send Feedback</div>
    </a>
    </div>
    <div class=\"menu-item pb-5px\">
    <a href=\"javascript:;\" class=\"menu-link\">
    <div class=\"menu-icon\"><i class=\"fa fa-question-circle\"></i></div>
    <div class=\"menu-text\"> Helps</div>
    </a>
    </div>
    <div class=\"menu-divider m-0\"></div>
    </div>
    <div class=\"menu-header\">Navigation</div>
        <div class=\"menu-item has-sub active closed\">
            <a href=\"javascript:;\" class=\"menu-link\">
                <div class=\"menu-icon\">
                <i class=\"fa fa-briefcase\"></i> </div>
                <div class=\"menu-text\">Projet</div>
                <div class=\"menu-caret\"></div>
            </a>
            <div class=\"menu-submenu\">
                <div class=\"menu-item active\">
                    <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projet_new");
        yield "\" class=\"menu-link\"><div class=\"menu-text\">Informations projet</div></a>
                </div>
                <div class=\"menu-item\">
                    <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projet_index");
        yield "\" class=\"menu-link\"><div class=\"menu-text\">Liste Projets</div></a>
                </div>
                ";
        // line 62
        yield "            </div> 
        <div class=\"menu-item has-sub active \">
            <a href=\"javascript:;\" class=\"menu-link\">
                <div class=\"menu-icon\">
                <i class=\"fa fa-tasks\"></i> </div>
                <div class=\"menu-text\">Tache</div>
                <div class=\"menu-caret\"></div>
            </a>
            <div class=\"menu-submenu\">
                <div class=\"menu-item active\">
                    <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_new");
        yield "\" class=\"menu-link\"><div class=\"menu-text\">Nouvelle Tache</div></a>
                </div>
                <div class=\"menu-item\">
                    <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index");
        yield " \" class=\"menu-link\"><div class=\"menu-text\">Liste des taches </div></a>
                </div>
                ";
        // line 80
        yield "            </div>
            
    
     </div>
     <div class=\"menu-item has-sub active \">
     <a href=\"javascript:;\" class=\"menu-link\">
         <div class=\"menu-icon\">
         <i class=\"fa fa-user-circle\"></i> </div>
         <div class=\"menu-text\">Equipe</div>
         <div class=\"menu-caret\"></div>
     </a>
     <div class=\"menu-submenu\">
         <div class=\"menu-item active\">
             <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipe_new");
        yield "\" class=\"menu-link\"><div class=\"menu-text\">Nouvelle Tache</div></a>
         </div>
         <div class=\"menu-item\">
             <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipe_index");
        yield "\" class=\"menu-link\"><div class=\"menu-text\">Liste des taches </div></a>
         </div>
         ";
        // line 101
        yield "     </div>
     

</div><div class=\"menu-item has-sub active \">
<a href=\"javascript:;\" class=\"menu-link\">
    <div class=\"menu-icon\">
    <i class=\"fa fa-print\"></i> </div>
    <div class=\"menu-text\">Facture</div>
    <div class=\"menu-caret\"></div>
</a>
<div class=\"menu-submenu\">
    <div class=\"menu-item active\">
        <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_new");
        yield "\" class=\"menu-link\"><div class=\"menu-text\">Nouvelle Tache</div></a>
    </div>
    <div class=\"menu-item\">
        <a href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_index");
        yield "\" class=\"menu-link\"><div class=\"menu-text\">Liste des taches </div></a>
    </div>
    ";
        // line 121
        yield "</div>


</div>
<div class=\"menu-item has-sub active \">
<a href=\"javascript:;\" class=\"menu-link\">
    <div class=\"menu-icon\">
    <i class=\"fa fa-users\"></i> </div>
    <div class=\"menu-text\">Employe</div>
    <div class=\"menu-caret\"></div>
</a>
<div class=\"menu-submenu\">
    <div class=\"menu-item active\">
        <a href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_new");
        yield "\" class=\"menu-link\"><div class=\"menu-text\">Nouvelle Tache</div></a>
    </div>
    <div class=\"menu-item\">
        <a href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_index");
        yield "\" class=\"menu-link\"><div class=\"menu-text\">Liste des taches </div></a>
    </div>
    ";
        // line 142
        yield "</div>


</div>
<div class=\"menu-item has-sub active \">
<a href=\"javascript:;\" class=\"menu-link\">
    <div class=\"menu-icon\">
    <i class=\"fa fa-cogs\"></i> </div>
    <div class=\"menu-text\">Domaine</div>
    <div class=\"menu-caret\"></div>
</a>
<div class=\"menu-submenu\">
    <div class=\"menu-item active\">
        <a href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_domaine_new");
        yield "\" class=\"menu-link\"><div class=\"menu-text\">Nouvelle Tache</div></a>
    </div>
    <div class=\"menu-item\">
        <a href=\"";
        // line 158
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_domaine_index");
        yield "\" class=\"menu-link\"><div class=\"menu-text\">Liste des taches </div></a>
    </div>
    ";
        // line 163
        yield "</div>


</div>
<div class=\"menu-item has-sub active \">
<a href=\"javascript:;\" class=\"menu-link\">
    <div class=\"menu-icon\">
    <i class=\"fa fa-customer\"></i> </div>
    <div class=\"menu-text\">Client</div>
    <div class=\"menu-caret\"></div>
</a>
<div class=\"menu-submenu\">
    <div class=\"menu-item active\">
        <a href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_new");
        yield "\" class=\"menu-link\"><div class=\"menu-text\">Nouvelle Tache</div></a>
    </div>
    <div class=\"menu-item\">
        <a href=\"";
        // line 179
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index");
        yield "\" class=\"menu-link\"><div class=\"menu-text\">Liste des taches </div></a>
    </div>
    ";
        // line 184
        yield "</div>


</div>
    </div>
</div>
    </div>

</div>
<div class=\"app-sidebar-bg\" data-bs-theme=\"dark\"></div>
<div class=\"app-sidebar-mobile-backdrop\"><a href=\"#\" data-dismiss=\"app-sidebar-mobile\" class=\"stretched-link\"></a></div>
<div id=\"content\" class=\"app-content\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "content/slidebar.html.twig";
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
        return array (  265 => 184,  260 => 179,  254 => 176,  239 => 163,  234 => 158,  228 => 155,  213 => 142,  208 => 137,  202 => 134,  187 => 121,  182 => 116,  176 => 113,  162 => 101,  157 => 96,  151 => 93,  136 => 80,  131 => 75,  125 => 72,  113 => 62,  108 => 57,  102 => 54,  64 => 19,  57 => 15,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"sidebar\" class=\"app-sidebar\" data-bs-theme=\"dark\">

    <div class=\"app-sidebar-content\" data-scrollbar=\"true\" data-height=\"100%\" style=\"height: 100%; overflow-x: scroll;\">

    <div class=\"menu\">
    <div class=\"menu-profile\">
    <a href=\"javascript:;\" class=\"menu-profile-link\" data-toggle=\"app-sidebar-profile\" data-target=\"#appSidebarProfileMenu\">
    <div class=\"menu-profile-cover with-shadow\"></div>
    <div class=\"menu-profile-image\">
    <img src=\"../assets/img/user/user-13.jpg\" alt=\"\">
    </div>
    <div class=\"menu-profile-info\">
    <div class=\"d-flex align-items-center\">
    <div class=\"flex-grow-1\">
        {{app.session.get('user_name')}}
    </div>
    <div class=\"menu-caret ms-auto\"></div>
    </div>
    <small> {{app.session.get('user_role')[0]}}</small>
    </div>
    </a>
    </div>
    <div id=\"appSidebarProfileMenu\" class=\"collapse\">
    <div class=\"menu-item pt-5px\">
    <a href=\"javascript:;\" class=\"menu-link\">
    <div class=\"menu-icon\"><i class=\"fa fa-cog\"></i></div>
    <div class=\"menu-text\">Settings</div>
    </a>
    </div>
    <div class=\"menu-item\">
    <a href=\"javascript:;\" class=\"menu-link\">
    <div class=\"menu-icon\"><i class=\"fa fa-pencil-alt\"></i></div>
    <div class=\"menu-text\"> Send Feedback</div>
    </a>
    </div>
    <div class=\"menu-item pb-5px\">
    <a href=\"javascript:;\" class=\"menu-link\">
    <div class=\"menu-icon\"><i class=\"fa fa-question-circle\"></i></div>
    <div class=\"menu-text\"> Helps</div>
    </a>
    </div>
    <div class=\"menu-divider m-0\"></div>
    </div>
    <div class=\"menu-header\">Navigation</div>
        <div class=\"menu-item has-sub active closed\">
            <a href=\"javascript:;\" class=\"menu-link\">
                <div class=\"menu-icon\">
                <i class=\"fa fa-briefcase\"></i> </div>
                <div class=\"menu-text\">Projet</div>
                <div class=\"menu-caret\"></div>
            </a>
            <div class=\"menu-submenu\">
                <div class=\"menu-item active\">
                    <a href=\"{{path('app_projet_new')}}\" class=\"menu-link\"><div class=\"menu-text\">Informations projet</div></a>
                </div>
                <div class=\"menu-item\">
                    <a href=\"{{path('app_projet_index')}}\" class=\"menu-link\"><div class=\"menu-text\">Liste Projets</div></a>
                </div>
                {# <div class=\"menu-item\">
                     <a href=\"index_v3.html\" class=\"menu-link\"><div class=\"menu-text\">Dashboard v3</div></a>
                </div> #}
            </div> 
        <div class=\"menu-item has-sub active \">
            <a href=\"javascript:;\" class=\"menu-link\">
                <div class=\"menu-icon\">
                <i class=\"fa fa-tasks\"></i> </div>
                <div class=\"menu-text\">Tache</div>
                <div class=\"menu-caret\"></div>
            </a>
            <div class=\"menu-submenu\">
                <div class=\"menu-item active\">
                    <a href=\"{{path('app_tache_new')}}\" class=\"menu-link\"><div class=\"menu-text\">Nouvelle Tache</div></a>
                </div>
                <div class=\"menu-item\">
                    <a href=\"{{path('app_tache_index')}} \" class=\"menu-link\"><div class=\"menu-text\">Liste des taches </div></a>
                </div>
                {# <div class=\"menu-item\">
                     <a href=\"index_v3.html\" class=\"menu-link\"><div class=\"menu-text\">Dashboard v3</div></a>
                </div> #}
            </div>
            
    
     </div>
     <div class=\"menu-item has-sub active \">
     <a href=\"javascript:;\" class=\"menu-link\">
         <div class=\"menu-icon\">
         <i class=\"fa fa-user-circle\"></i> </div>
         <div class=\"menu-text\">Equipe</div>
         <div class=\"menu-caret\"></div>
     </a>
     <div class=\"menu-submenu\">
         <div class=\"menu-item active\">
             <a href=\"{{path('app_equipe_new')}}\" class=\"menu-link\"><div class=\"menu-text\">Nouvelle Tache</div></a>
         </div>
         <div class=\"menu-item\">
             <a href=\"{{path('app_equipe_index')}}\" class=\"menu-link\"><div class=\"menu-text\">Liste des taches </div></a>
         </div>
         {# <div class=\"menu-item\">
              <a href=\"index_v3.html\" class=\"menu-link\"><div class=\"menu-text\">Dashboard v3</div></a>
         </div> #}
     </div>
     

</div><div class=\"menu-item has-sub active \">
<a href=\"javascript:;\" class=\"menu-link\">
    <div class=\"menu-icon\">
    <i class=\"fa fa-print\"></i> </div>
    <div class=\"menu-text\">Facture</div>
    <div class=\"menu-caret\"></div>
</a>
<div class=\"menu-submenu\">
    <div class=\"menu-item active\">
        <a href=\"{{path('app_facture_new')}}\" class=\"menu-link\"><div class=\"menu-text\">Nouvelle Tache</div></a>
    </div>
    <div class=\"menu-item\">
        <a href=\"{{path('app_facture_index')}}\" class=\"menu-link\"><div class=\"menu-text\">Liste des taches </div></a>
    </div>
    {# <div class=\"menu-item\">
         <a href=\"index_v3.html\" class=\"menu-link\"><div class=\"menu-text\">Dashboard v3</div></a>
    </div> #}
</div>


</div>
<div class=\"menu-item has-sub active \">
<a href=\"javascript:;\" class=\"menu-link\">
    <div class=\"menu-icon\">
    <i class=\"fa fa-users\"></i> </div>
    <div class=\"menu-text\">Employe</div>
    <div class=\"menu-caret\"></div>
</a>
<div class=\"menu-submenu\">
    <div class=\"menu-item active\">
        <a href=\"{{path('app_employe_new')}}\" class=\"menu-link\"><div class=\"menu-text\">Nouvelle Tache</div></a>
    </div>
    <div class=\"menu-item\">
        <a href=\"{{path('app_employe_index')}}\" class=\"menu-link\"><div class=\"menu-text\">Liste des taches </div></a>
    </div>
    {# <div class=\"menu-item\">
         <a href=\"index_v3.html\" class=\"menu-link\"><div class=\"menu-text\">Dashboard v3</div></a>
    </div> #}
</div>


</div>
<div class=\"menu-item has-sub active \">
<a href=\"javascript:;\" class=\"menu-link\">
    <div class=\"menu-icon\">
    <i class=\"fa fa-cogs\"></i> </div>
    <div class=\"menu-text\">Domaine</div>
    <div class=\"menu-caret\"></div>
</a>
<div class=\"menu-submenu\">
    <div class=\"menu-item active\">
        <a href=\"{{path('app_domaine_new')}}\" class=\"menu-link\"><div class=\"menu-text\">Nouvelle Tache</div></a>
    </div>
    <div class=\"menu-item\">
        <a href=\"{{path('app_domaine_index')}}\" class=\"menu-link\"><div class=\"menu-text\">Liste des taches </div></a>
    </div>
    {# <div class=\"menu-item\">
         <a href=\"index_v3.html\" class=\"menu-link\"><div class=\"menu-text\">Dashboard v3</div></a>
    </div> #}
</div>


</div>
<div class=\"menu-item has-sub active \">
<a href=\"javascript:;\" class=\"menu-link\">
    <div class=\"menu-icon\">
    <i class=\"fa fa-customer\"></i> </div>
    <div class=\"menu-text\">Client</div>
    <div class=\"menu-caret\"></div>
</a>
<div class=\"menu-submenu\">
    <div class=\"menu-item active\">
        <a href=\"{{path('app_client_new')}}\" class=\"menu-link\"><div class=\"menu-text\">Nouvelle Tache</div></a>
    </div>
    <div class=\"menu-item\">
        <a href=\"{{path('app_client_index')}}\" class=\"menu-link\"><div class=\"menu-text\">Liste des taches </div></a>
    </div>
    {# <div class=\"menu-item\">
         <a href=\"index_v3.html\" class=\"menu-link\"><div class=\"menu-text\">Dashboard v3</div></a>
    </div> #}
</div>


</div>
    </div>
</div>
    </div>

</div>
<div class=\"app-sidebar-bg\" data-bs-theme=\"dark\"></div>
<div class=\"app-sidebar-mobile-backdrop\"><a href=\"#\" data-dismiss=\"app-sidebar-mobile\" class=\"stretched-link\"></a></div>
<div id=\"content\" class=\"app-content\">
", "content/slidebar.html.twig", "C:\\Users\\SYNS-MANAGER\\Documents\\GitHub\\pmanalysis\\templates\\content\\slidebar.html.twig");
    }
}
