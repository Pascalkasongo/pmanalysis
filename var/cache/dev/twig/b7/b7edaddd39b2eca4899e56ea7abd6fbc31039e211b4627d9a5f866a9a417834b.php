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
class __TwigTemplate_7abebcb6e0b60796823bbea529f6f626367475eb501f9dfa454c5043bb46c1b8 extends Template
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
        yield "
<div class=\"pcoded-main-container\">
    <div class=\"pcoded-wrapper\">

        <nav class=\"pcoded-navbar\">
            <div class=\"nav-list\">
                <div class=\"pcoded-inner-navbar main-menu\">

                    <ul class=\"pcoded-item pcoded-left-item\">
                        <li class=\"pcoded-hasmenu active pcoded-trigger\">
                            <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                <span class=\"pcoded-micon\"><i class=\"feather icon-home\"></i></span>
                                <span class=\"pcoded-mtext\">Projet</span>
                            </a>
                            <ul class=\"pcoded-submenu\">
                                <li class=\"active\">
                                    <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projet_new");
        yield "\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">ajouter</span>
                                    </a>
                                </li>
                                <li class=\"\">
                                    <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projet_index");
        yield "\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">Lister</span>
                                    </a>
                                </li>
                            </ul>
                            

                        </li>
                        <li class=\"pcoded-hasmenu active pcoded-trigger\">
                            <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                <span class=\"pcoded-micon\"><i class=\"feather icon-home\"></i></span>
                                <span class=\"pcoded-mtext\">Tache</span>
                            </a>
                            <ul class=\"pcoded-submenu\">
                                <li class=\"active\">
                                    <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_new");
        yield "\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">ajouter</span>
                                    </a>
                                </li>
                                <li class=\"\">
                                    <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index");
        yield "\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">Lister</span>
                                    </a>
                                </li>
                            </ul>
                            

                        </li>
                        <li class=\"pcoded-hasmenu active pcoded-trigger\">
                            <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                <span class=\"pcoded-micon\"><i class=\"feather icon-home\"></i></span>
                                <span class=\"pcoded-mtext\">Equipe</span>
                            </a>
                            <ul class=\"pcoded-submenu\">
                                <li class=\"active\">
                                    <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipe_new");
        yield "\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">ajouter</span>
                                    </a>
                                </li>
                                <li class=\"active\">
                                    <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipe_index");
        yield "\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">Lister</span>
                                    </a>
                                </li>
                            </ul>
                            

                        </li>
                        <li class=\"pcoded-hasmenu active pcoded-trigger\">
                            <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                <span class=\"pcoded-micon\"><i class=\"feather icon-home\"></i></span>
                                <span class=\"pcoded-mtext\">Domaine</span>
                            </a>
                            <ul class=\"pcoded-submenu\">
                                <li class=\"active\">
                                    <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_domaine_new");
        yield "\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">ajouter</span>
                                    </a>
                                </li>
                                <li class=\"\">
                                    <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_domaine_index");
        yield "\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">Lister</span>
                                    </a>
                                </li>
                            </ul>
                            

                        </li>
                        <li class=\"pcoded-hasmenu active pcoded-trigger\">
                            <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                <span class=\"pcoded-micon\"><i class=\"feather icon-home\"></i></span>
                                <span class=\"pcoded-mtext\">Employé</span>
                            </a>
                            <ul class=\"pcoded-submenu\">
                                <li class=\"active\">
                                    <a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_new");
        yield "\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">ajouter</span>
                                    </a>
                                </li>
                                <li class=\"\">
                                    <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_index");
        yield "\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">Lister</span>
                                    </a>
                                </li>
                            </ul>
                            

                        </li>
                        <li class=\"pcoded-hasmenu active pcoded-trigger\">
                            <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                <span class=\"pcoded-micon\"><i class=\"feather icon-home\"></i></span>
                                <span class=\"pcoded-mtext\">Facture</span>
                            </a>
                            <ul class=\"pcoded-submenu\">
                                <li class=\"active\">
                                    <a href=\"";
        // line 117
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_new");
        yield "\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">ajouter</span>
                                    </a>
                                </li>
                                <li class=\"\">
                                    <a href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_index");
        yield "\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">Lister</span>
                                    </a>
                                </li>
                            </ul>
                            

                        </li>
                        <li class=\"pcoded-hasmenu active pcoded-trigger\">
                            <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                <span class=\"pcoded-micon\"><i class=\"feather icon-home\"></i></span>
                                <span class=\"pcoded-mtext\">Ressource</span>
                            </a>
                            <ul class=\"pcoded-submenu\">
                                <li class=\"active\">
                                    <a href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ressource_new");
        yield "\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">ajouter</span>
                                    </a>
                                </li>
                                <li class=\"\">
                                    <a href=\"";
        // line 142
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ressource_index");
        yield "\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">Lister</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
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
        return array (  223 => 142,  215 => 137,  197 => 122,  189 => 117,  171 => 102,  163 => 97,  145 => 82,  137 => 77,  119 => 62,  111 => 57,  93 => 42,  85 => 37,  67 => 22,  59 => 17,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"pcoded-main-container\">
    <div class=\"pcoded-wrapper\">

        <nav class=\"pcoded-navbar\">
            <div class=\"nav-list\">
                <div class=\"pcoded-inner-navbar main-menu\">

                    <ul class=\"pcoded-item pcoded-left-item\">
                        <li class=\"pcoded-hasmenu active pcoded-trigger\">
                            <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                <span class=\"pcoded-micon\"><i class=\"feather icon-home\"></i></span>
                                <span class=\"pcoded-mtext\">Projet</span>
                            </a>
                            <ul class=\"pcoded-submenu\">
                                <li class=\"active\">
                                    <a href=\"{{path('app_projet_new')}}\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">ajouter</span>
                                    </a>
                                </li>
                                <li class=\"\">
                                    <a href=\"{{path('app_projet_index')}}\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">Lister</span>
                                    </a>
                                </li>
                            </ul>
                            

                        </li>
                        <li class=\"pcoded-hasmenu active pcoded-trigger\">
                            <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                <span class=\"pcoded-micon\"><i class=\"feather icon-home\"></i></span>
                                <span class=\"pcoded-mtext\">Tache</span>
                            </a>
                            <ul class=\"pcoded-submenu\">
                                <li class=\"active\">
                                    <a href=\"{{path('app_tache_new')}}\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">ajouter</span>
                                    </a>
                                </li>
                                <li class=\"\">
                                    <a href=\"{{path('app_tache_index')}}\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">Lister</span>
                                    </a>
                                </li>
                            </ul>
                            

                        </li>
                        <li class=\"pcoded-hasmenu active pcoded-trigger\">
                            <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                <span class=\"pcoded-micon\"><i class=\"feather icon-home\"></i></span>
                                <span class=\"pcoded-mtext\">Equipe</span>
                            </a>
                            <ul class=\"pcoded-submenu\">
                                <li class=\"active\">
                                    <a href=\"{{path('app_equipe_new')}}\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">ajouter</span>
                                    </a>
                                </li>
                                <li class=\"active\">
                                    <a href=\"{{path('app_equipe_index')}}\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">Lister</span>
                                    </a>
                                </li>
                            </ul>
                            

                        </li>
                        <li class=\"pcoded-hasmenu active pcoded-trigger\">
                            <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                <span class=\"pcoded-micon\"><i class=\"feather icon-home\"></i></span>
                                <span class=\"pcoded-mtext\">Domaine</span>
                            </a>
                            <ul class=\"pcoded-submenu\">
                                <li class=\"active\">
                                    <a href=\"{{path('app_domaine_new')}}\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">ajouter</span>
                                    </a>
                                </li>
                                <li class=\"\">
                                    <a href=\"{{path('app_domaine_index')}}\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">Lister</span>
                                    </a>
                                </li>
                            </ul>
                            

                        </li>
                        <li class=\"pcoded-hasmenu active pcoded-trigger\">
                            <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                <span class=\"pcoded-micon\"><i class=\"feather icon-home\"></i></span>
                                <span class=\"pcoded-mtext\">Employé</span>
                            </a>
                            <ul class=\"pcoded-submenu\">
                                <li class=\"active\">
                                    <a href=\"{{path('app_employe_new')}}\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">ajouter</span>
                                    </a>
                                </li>
                                <li class=\"\">
                                    <a href=\"{{path('app_employe_index')}}\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">Lister</span>
                                    </a>
                                </li>
                            </ul>
                            

                        </li>
                        <li class=\"pcoded-hasmenu active pcoded-trigger\">
                            <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                <span class=\"pcoded-micon\"><i class=\"feather icon-home\"></i></span>
                                <span class=\"pcoded-mtext\">Facture</span>
                            </a>
                            <ul class=\"pcoded-submenu\">
                                <li class=\"active\">
                                    <a href=\"{{path('app_facture_new')}}\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">ajouter</span>
                                    </a>
                                </li>
                                <li class=\"\">
                                    <a href=\"{{path('app_employe_index')}}\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">Lister</span>
                                    </a>
                                </li>
                            </ul>
                            

                        </li>
                        <li class=\"pcoded-hasmenu active pcoded-trigger\">
                            <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                <span class=\"pcoded-micon\"><i class=\"feather icon-home\"></i></span>
                                <span class=\"pcoded-mtext\">Ressource</span>
                            </a>
                            <ul class=\"pcoded-submenu\">
                                <li class=\"active\">
                                    <a href=\"{{path('app_ressource_new')}}\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">ajouter</span>
                                    </a>
                                </li>
                                <li class=\"\">
                                    <a href=\"{{path('app_ressource_index')}}\" class=\"waves-effect waves-dark\">
                                        <span class=\"pcoded-mtext\">Lister</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
", "content/slidebar.html.twig", "C:\\Users\\SYNS-MANAGER\\Nouveau dossier\\my_project_directory\\templates\\content\\slidebar.html.twig");
    }
}
