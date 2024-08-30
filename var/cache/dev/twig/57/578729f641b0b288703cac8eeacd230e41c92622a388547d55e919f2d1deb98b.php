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
    ";
        // line 19
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "session", [], "any", false, false, false, 19), "get", ["user_role"], "method", false, false, false, 19), 0, [], "array", false, false, false, 19) == "ROLE_ADMIN")) {
            // line 20
            yield "        <small>ADMINISTRATEUR </small>
    
        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 22
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "session", [], "any", false, false, false, 22), "get", ["user_role"], "method", false, false, false, 22), 0, [], "array", false, false, false, 22) == "ROLE_DIRECTEUR")) {
            // line 23
            yield "        <small>DIRECTEUR</small>
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 24
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "session", [], "any", false, false, false, 24), "get", ["user_role"], "method", false, false, false, 24), 0, [], "array", false, false, false, 24) == "ROLE_CHEF_PROJET")) {
            // line 25
            yield "        <small>CHEF DE PROJET</small>
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "session", [], "any", false, false, false, 26), "get", ["user_role"], "method", false, false, false, 26), 0, [], "array", false, false, false, 26) == "ROLE_CHEF")) {
            // line 27
            yield "        <small>CHEF D'EQUIPE</small>
        ";
        }
        // line 28
        yield " 
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
";
        // line 55
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "session", [], "any", false, false, false, 55), "get", ["user_role"], "method", false, false, false, 55), 0, [], "array", false, false, false, 55) == "ROLE_CHEF_PROJET") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "session", [], "any", false, false, false, 55), "get", ["user_role"], "method", false, false, false, 55), 0, [], "array", false, false, false, 55) == "ROLE_DIRECTEUR"))) {
            // line 56
            yield "    


            <a href=\"javascript:;\" class=\"menu-link\">
                <div class=\"menu-icon\">
                <i class=\"fa fa-briefcase\"></i> </div>
                <div class=\"menu-text\">Projet</div>
                <div class=\"menu-caret\"></div>
            </a>
            <div class=\"menu-submenu\">
                <div class=\"menu-item active\">
                    <a href=\"";
            // line 67
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projet_new");
            yield "\" class=\"menu-link\"><div class=\"menu-text\">Enregistrer projet</div></a>
                </div>
                <div class=\"menu-item\">
                    <a href=\"";
            // line 70
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projet_index");
            yield "\" class=\"menu-link\"><div class=\"menu-text\">Liste Projets</div></a>
                </div>
                ";
            // line 75
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
            // line 85
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_new");
            yield "\" class=\"menu-link\"><div class=\"menu-text\">Nouvelle Tache</div></a>
                </div>
                <div class=\"menu-item\">
                    <a href=\"";
            // line 88
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index");
            yield " \" class=\"menu-link\"><div class=\"menu-text\">Liste des taches </div></a>
                </div>
                ";
            // line 93
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
            // line 106
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipe_new");
            yield "\" class=\"menu-link\"><div class=\"menu-text\">Nouvelle equipe</div></a>
         </div>
         <div class=\"menu-item\">
             <a href=\"";
            // line 109
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipe_index");
            yield "\" class=\"menu-link\"><div class=\"menu-text\">Liste des equipes </div></a>
         </div>
         ";
            // line 114
            yield "     </div>
     <div class=\"menu-item has-sub active \">
<a href=\"javascript:;\" class=\"menu-link\">
    <div class=\"menu-icon\">
    <i class=\"fa fa-customer\"></i> </div>
    <div class=\"menu-text\">Ressource</div>
    <div class=\"menu-caret\"></div>
</a>
<div class=\"menu-submenu\">
    <div class=\"menu-item active\">
        <a href=\"";
            // line 124
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ressource_new");
            yield "\" class=\"menu-link\"><div class=\"menu-text\">Nouvelle Ressource</div></a>
    </div>
    <div class=\"menu-item\">
        <a href=\"";
            // line 127
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ressource_index");
            yield "\" class=\"menu-link\"><div class=\"menu-text\">Liste des ressources </div></a>
    </div>
    ";
            // line 132
            yield "</div>

</div>
";
        }
        // line 136
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "session", [], "any", false, false, false, 136), "get", ["user_role"], "method", false, false, false, 136), 0, [], "array", false, false, false, 136) == "ROLE_DIRECTEUR")) {
            // line 137
            yield "
<div class=\"menu-item has-sub active \">
<a href=\"javascript:;\" class=\"menu-link\">
    <div class=\"menu-icon\">
    <i class=\"fa fa-print\"></i> </div>
    <div class=\"menu-text\">Facture</div>
    <div class=\"menu-caret\"></div>
</a>
<div class=\"menu-submenu\">
    <div class=\"menu-item active\">
        <a href=\"";
            // line 147
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_new");
            yield "\" class=\"menu-link\"><div class=\"menu-text\">Nouvelle Facture</div></a>
    </div>
    <div class=\"menu-item\">
        <a href=\"";
            // line 150
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_index");
            yield "\" class=\"menu-link\"><div class=\"menu-text\">Liste des Factures </div></a>
    </div>
    ";
            // line 155
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
            // line 168
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_new");
            yield "\" class=\"menu-link\"><div class=\"menu-text\">Ajouter employé </div></a>
    </div>
    <div class=\"menu-item\">
        <a href=\"";
            // line 171
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_index");
            yield "\" class=\"menu-link\"><div class=\"menu-text\">Liste des employés</div></a>
    </div>
    ";
            // line 176
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
            // line 189
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_domaine_new");
            yield "\" class=\"menu-link\"><div class=\"menu-text\">Nouveau domaine</div></a>
    </div>
    <div class=\"menu-item\">
        <a href=\"";
            // line 192
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_domaine_index");
            yield "\" class=\"menu-link\"><div class=\"menu-text\">Liste des domaines </div></a>
    </div>
    ";
            // line 197
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
            // line 210
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_new");
            yield "\" class=\"menu-link\"><div class=\"menu-text\">Nouveau client</div></a>
    </div>
    <div class=\"menu-item\">
        <a href=\"";
            // line 213
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index");
            yield "\" class=\"menu-link\"><div class=\"menu-text\">Liste des clients </div></a>
    </div>
    ";
            // line 218
            yield "</div>


</div>
<div class=\"menu-item has-sub active \">
<a href=\"javascript:;\" class=\"menu-link\">
    <div class=\"menu-icon\">
    <i class=\"fa fa-customer\"></i> </div>
    <div class=\"menu-text\">Fonction</div>
    <div class=\"menu-caret\"></div>
</a>
<div class=\"menu-submenu\">
    <div class=\"menu-item active\">
        <a href=\"";
            // line 231
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fonction_new");
            yield "\" class=\"menu-link\"><div class=\"menu-text\">Nouvelle Fonction</div></a>
    </div>
    <div class=\"menu-item\">
        <a href=\"";
            // line 234
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fonction_index");
            yield "\" class=\"menu-link\"><div class=\"menu-text\">Liste des Fonctions </div></a>
    </div>
    ";
            // line 239
            yield "</div>


</div>


";
        }
        // line 246
        yield "</div>
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
        return array (  357 => 246,  348 => 239,  343 => 234,  337 => 231,  322 => 218,  317 => 213,  311 => 210,  296 => 197,  291 => 192,  285 => 189,  270 => 176,  265 => 171,  259 => 168,  244 => 155,  239 => 150,  233 => 147,  221 => 137,  219 => 136,  213 => 132,  208 => 127,  202 => 124,  190 => 114,  185 => 109,  179 => 106,  164 => 93,  159 => 88,  153 => 85,  141 => 75,  136 => 70,  130 => 67,  117 => 56,  115 => 55,  86 => 28,  82 => 27,  80 => 26,  77 => 25,  75 => 24,  72 => 23,  70 => 22,  66 => 20,  64 => 19,  57 => 15,  41 => 1,);
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
    {% if app.session.get('user_role')[0] == 'ROLE_ADMIN' %}
        <small>ADMINISTRATEUR </small>
    
        {% elseif app.session.get('user_role')[0] == 'ROLE_DIRECTEUR' %}
        <small>DIRECTEUR</small>
            {% elseif app.session.get('user_role')[0] == 'ROLE_CHEF_PROJET' %}
        <small>CHEF DE PROJET</small>
            {% elseif app.session.get('user_role')[0] == 'ROLE_CHEF' %}
        <small>CHEF D'EQUIPE</small>
        {% endif %} 
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
{%  if app.session.get('user_role')[0] == 'ROLE_CHEF_PROJET' or app.session.get('user_role')[0] == 'ROLE_DIRECTEUR'  %}
    


            <a href=\"javascript:;\" class=\"menu-link\">
                <div class=\"menu-icon\">
                <i class=\"fa fa-briefcase\"></i> </div>
                <div class=\"menu-text\">Projet</div>
                <div class=\"menu-caret\"></div>
            </a>
            <div class=\"menu-submenu\">
                <div class=\"menu-item active\">
                    <a href=\"{{path('app_projet_new')}}\" class=\"menu-link\"><div class=\"menu-text\">Enregistrer projet</div></a>
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
             <a href=\"{{path('app_equipe_new')}}\" class=\"menu-link\"><div class=\"menu-text\">Nouvelle equipe</div></a>
         </div>
         <div class=\"menu-item\">
             <a href=\"{{path('app_equipe_index')}}\" class=\"menu-link\"><div class=\"menu-text\">Liste des equipes </div></a>
         </div>
         {# <div class=\"menu-item\">
              <a href=\"index_v3.html\" class=\"menu-link\"><div class=\"menu-text\">Dashboard v3</div></a>
         </div> #}
     </div>
     <div class=\"menu-item has-sub active \">
<a href=\"javascript:;\" class=\"menu-link\">
    <div class=\"menu-icon\">
    <i class=\"fa fa-customer\"></i> </div>
    <div class=\"menu-text\">Ressource</div>
    <div class=\"menu-caret\"></div>
</a>
<div class=\"menu-submenu\">
    <div class=\"menu-item active\">
        <a href=\"{{path('app_ressource_new')}}\" class=\"menu-link\"><div class=\"menu-text\">Nouvelle Ressource</div></a>
    </div>
    <div class=\"menu-item\">
        <a href=\"{{path('app_ressource_index')}}\" class=\"menu-link\"><div class=\"menu-text\">Liste des ressources </div></a>
    </div>
    {# <div class=\"menu-item\">
         <a href=\"index_v3.html\" class=\"menu-link\"><div class=\"menu-text\">Dashboard v3</div></a>
    </div> #}
</div>

</div>
{% endif %}
{% if app.session.get('user_role')[0] == 'ROLE_DIRECTEUR' %}

<div class=\"menu-item has-sub active \">
<a href=\"javascript:;\" class=\"menu-link\">
    <div class=\"menu-icon\">
    <i class=\"fa fa-print\"></i> </div>
    <div class=\"menu-text\">Facture</div>
    <div class=\"menu-caret\"></div>
</a>
<div class=\"menu-submenu\">
    <div class=\"menu-item active\">
        <a href=\"{{path('app_facture_new')}}\" class=\"menu-link\"><div class=\"menu-text\">Nouvelle Facture</div></a>
    </div>
    <div class=\"menu-item\">
        <a href=\"{{path('app_facture_index')}}\" class=\"menu-link\"><div class=\"menu-text\">Liste des Factures </div></a>
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
        <a href=\"{{path('app_employe_new')}}\" class=\"menu-link\"><div class=\"menu-text\">Ajouter employé </div></a>
    </div>
    <div class=\"menu-item\">
        <a href=\"{{path('app_employe_index')}}\" class=\"menu-link\"><div class=\"menu-text\">Liste des employés</div></a>
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
        <a href=\"{{path('app_domaine_new')}}\" class=\"menu-link\"><div class=\"menu-text\">Nouveau domaine</div></a>
    </div>
    <div class=\"menu-item\">
        <a href=\"{{path('app_domaine_index')}}\" class=\"menu-link\"><div class=\"menu-text\">Liste des domaines </div></a>
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
        <a href=\"{{path('app_client_new')}}\" class=\"menu-link\"><div class=\"menu-text\">Nouveau client</div></a>
    </div>
    <div class=\"menu-item\">
        <a href=\"{{path('app_client_index')}}\" class=\"menu-link\"><div class=\"menu-text\">Liste des clients </div></a>
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
    <div class=\"menu-text\">Fonction</div>
    <div class=\"menu-caret\"></div>
</a>
<div class=\"menu-submenu\">
    <div class=\"menu-item active\">
        <a href=\"{{path('app_fonction_new')}}\" class=\"menu-link\"><div class=\"menu-text\">Nouvelle Fonction</div></a>
    </div>
    <div class=\"menu-item\">
        <a href=\"{{path('app_fonction_index')}}\" class=\"menu-link\"><div class=\"menu-text\">Liste des Fonctions </div></a>
    </div>
    {# <div class=\"menu-item\">
         <a href=\"index_v3.html\" class=\"menu-link\"><div class=\"menu-text\">Dashboard v3</div></a>
    </div> #}
</div>


</div>


{% endif %}
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
