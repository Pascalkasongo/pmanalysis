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

/* admindek-html/default/dt-ext-responsive.html */
class __TwigTemplate_b44381a9297b6bf54c438472fd3aaf27fe36433d1f0cd7ad8be06fea990edf01 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admindek-html/default/dt-ext-responsive.html"));

        yield "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/dt-ext-responsive.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 12:17:09 GMT -->
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

<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/pages/data-table/css/buttons.dataTables.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/pages/data-table/extensions/responsive/css/responsive.dataTables.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/css/style.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/css/pages.css\">
</head>
<body>

<div class=\"loader-bg\">
<div class=\"loader-bar\"></div>
</div>

<div id=\"pcoded\" class=\"pcoded\">
<div class=\"pcoded-overlay-box\"></div>
<div class=\"pcoded-container navbar-wrapper\">

<nav class=\"navbar header-navbar pcoded-header\">
<div class=\"navbar-wrapper\">
<div class=\"navbar-logo\">
<a href=\"../index.html\">
<img class=\"img-fluid\" src=\"../files/assets/images/logo.png\" alt=\"Theme-Logo\" />
</a>
<a class=\"mobile-menu\" id=\"mobile-collapse\" href=\"#!\">
<i class=\"feather icon-menu icon-toggle-right\"></i>
</a>
<a class=\"mobile-options waves-effect waves-light\">
<i class=\"feather icon-more-horizontal\"></i>
 </a>
</div>
<div class=\"navbar-container container-fluid\">
<ul class=\"nav-left\">
<li class=\"header-search\">
<div class=\"main-search morphsearch-search\">
<div class=\"input-group\">
<span class=\"input-group-prepend search-close\">
<i class=\"feather icon-x input-group-text\"></i>
</span>
<input type=\"text\" class=\"form-control\" placeholder=\"Enter Keyword\">
<span class=\"input-group-append search-btn\">
<i class=\"feather icon-search input-group-text\"></i>
</span>
</div>
</div>
</li>
<li>
<a href=\"#!\" onclick=\"javascript:toggleFullScreen()\" class=\"waves-effect waves-light\">
<i class=\"full-screen feather icon-maximize\"></i>
</a>
</li>
</ul>
<ul class=\"nav-right\">
<li class=\"header-notification\">
<div class=\"dropdown-primary dropdown\">
<div class=\"dropdown-toggle\" data-toggle=\"dropdown\">
<i class=\"feather icon-bell\"></i>
<span class=\"badge bg-c-red\">5</span>
</div>
<ul class=\"show-notification notification-view dropdown-menu\" data-dropdown-in=\"fadeIn\" data-dropdown-out=\"fadeOut\">
<li>
<h6>Notifications</h6>
<label class=\"label label-danger\">New</label>
</li>
<li>
<div class=\"media\">
<img class=\"img-radius\" src=\"../files/assets/images/avatar-4.jpg\" alt=\"Generic placeholder image\">
<div class=\"media-body\">
<h5 class=\"notification-user\">John Doe</h5>
<p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class=\"notification-time\">30 minutes ago</span>
</div>
</div>
</li>
<li>
<div class=\"media\">
<img class=\"img-radius\" src=\"../files/assets/images/avatar-3.jpg\" alt=\"Generic placeholder image\">
<div class=\"media-body\">
<h5 class=\"notification-user\">Joseph William</h5>
<p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class=\"notification-time\">30 minutes ago</span>
</div>
</div>
</li>
<li>
<div class=\"media\">
<img class=\"img-radius\" src=\"../files/assets/images/avatar-4.jpg\" alt=\"Generic placeholder image\">
<div class=\"media-body\">
<h5 class=\"notification-user\">Sara Soudein</h5>
<p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class=\"notification-time\">30 minutes ago</span>
</div>
</div>
</li>
</ul>
</div>
</li>
<li class=\"header-notification\">
<div class=\"dropdown-primary dropdown\">
<div class=\"displayChatbox dropdown-toggle\" data-toggle=\"dropdown\">
<i class=\"feather icon-message-square\"></i>
<span class=\"badge bg-c-green\">3</span>
</div>
</div>
</li>
<li class=\"user-profile header-notification\">
<div class=\"dropdown-primary dropdown\">
<div class=\"dropdown-toggle\" data-toggle=\"dropdown\">
<img src=\"../files/assets/images/avatar-4.jpg\" class=\"img-radius\" alt=\"User-Profile-Image\">
<span>John Doe</span>
<i class=\"feather icon-chevron-down\"></i>
</div>
<ul class=\"show-notification profile-notification dropdown-menu\" data-dropdown-in=\"fadeIn\" data-dropdown-out=\"fadeOut\">
<li>
<a href=\"#!\">
<i class=\"feather icon-settings\"></i> Settings
</a>
</li>
<li>
<a href=\"#\">
<i class=\"feather icon-user\"></i> Profile
</a>
</li>
<li>
<a href=\"email-inbox.html\">
<i class=\"feather icon-mail\"></i> My Messages
</a>
</li>
<li>
<a href=\"auth-lock-screen.html\">
<i class=\"feather icon-lock\"></i> Lock Screen
</a>
</li>
<li>
<a href=\"auth-sign-in-social.html\">
<i class=\"feather icon-log-out\"></i> Logout
</a>
</li>
</ul>
</div>
</li>
</ul>
</div>
</div>
</nav>

<div id=\"sidebar\" class=\"users p-chat-user showChat\">
<div class=\"had-container\">
<div class=\"p-fixed users-main\">
<div class=\"user-box\">
<div class=\"chat-search-box\"> 
<a class=\"back_friendlist\">
<i class=\"feather icon-x\"></i>
</a>
<div class=\"right-icon-control\">
<div class=\"input-group input-group-button\">
<input type=\"text\" id=\"search-friends\" name=\"footer-email\" class=\"form-control\" placeholder=\"Search Friend\">
<div class=\"input-group-append\">
<button class=\"btn btn-primary waves-effect waves-light\" type=\"button\"><i class=\"feather icon-search\"></i></button>
</div>
</div>
</div>
</div>
<div class=\"main-friend-list\">
<div class=\"media userlist-box waves-effect waves-light\" data-id=\"1\" data-status=\"online\" data-username=\"Josephin Doe\">
<a class=\"media-left\" href=\"#!\">
<img class=\"media-object img-radius img-radius\" src=\"../files/assets/images/avatar-3.jpg\" alt=\"Generic placeholder image \">
<div class=\"live-status bg-success\"></div>
</a>
<div class=\"media-body\">
<div class=\"chat-header\">Josephin Doe</div>
</div>
</div>
<div class=\"media userlist-box waves-effect waves-light\" data-id=\"2\" data-status=\"online\" data-username=\"Lary Doe\">
<a class=\"media-left\" href=\"#!\">
<img class=\"media-object img-radius\" src=\"../files/assets/images/avatar-2.jpg\" alt=\"Generic placeholder image\">
<div class=\"live-status bg-success\"></div>
</a>
<div class=\"media-body\">
<div class=\"f-13 chat-header\">Lary Doe</div>
</div>
</div>
<div class=\"media userlist-box waves-effect waves-light\" data-id=\"3\" data-status=\"online\" data-username=\"Alice\">
<a class=\"media-left\" href=\"#!\">
<img class=\"media-object img-radius\" src=\"../files/assets/images/avatar-4.jpg\" alt=\"Generic placeholder image\">
<div class=\"live-status bg-success\"></div>
</a>
<div class=\"media-body\">
<div class=\"f-13 chat-header\">Alice</div>
</div>
</div>
<div class=\"media userlist-box waves-effect waves-light\" data-id=\"4\" data-status=\"offline\" data-username=\"Alia\">
<a class=\"media-left\" href=\"#!\">
<img class=\"media-object img-radius\" src=\"../files/assets/images/avatar-3.jpg\" alt=\"Generic placeholder image\">
<div class=\"live-status bg-default\"></div>
</a>
<div class=\"media-body\">
<div class=\"f-13 chat-header\">Alia<small class=\"d-block text-muted\">10 min ago</small></div>
</div>
</div>
<div class=\"media userlist-box waves-effect waves-light\" data-id=\"5\" data-status=\"offline\" data-username=\"Suzen\">
<a class=\"media-left\" href=\"#!\">
<img class=\"media-object img-radius\" src=\"../files/assets/images/avatar-2.jpg\" alt=\"Generic placeholder image\">
<div class=\"live-status bg-default\"></div>
</a>
<div class=\"media-body\">
<div class=\"f-13 chat-header\">Suzen<small class=\"d-block text-muted\">15 min ago</small></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class=\"showChat_inner\">
<div class=\"media chat-inner-header\">
<a class=\"back_chatBox\">
<i class=\"feather icon-x\"></i> Josephin Doe
</a>
</div>
<div class=\"main-friend-chat\">
<div class=\"media chat-messages\">
<a class=\"media-left photo-table\" href=\"#!\">
<img class=\"media-object img-radius img-radius m-t-5\" src=\"../files/assets/images/avatar-2.jpg\" alt=\"Generic placeholder image\">
</a>
<div class=\"media-body chat-menu-content\">
<div class=\"\">
<p class=\"chat-cont\">I'm just looking around. Will you tell me something about yourself?</p>
</div>
<p class=\"chat-time\">8:20 a.m.</p>
</div>
</div>
<div class=\"media chat-messages\">
<div class=\"media-body chat-menu-reply\">
<div class=\"\">
<p class=\"chat-cont\">Ohh! very nice</p>
</div>
<p class=\"chat-time\">8:22 a.m.</p>
</div>
</div>
<div class=\"media chat-messages\">
<a class=\"media-left photo-table\" href=\"#!\">
<img class=\"media-object img-radius img-radius m-t-5\" src=\"../files/assets/images/avatar-2.jpg\" alt=\"Generic placeholder image\">
</a>
<div class=\"media-body chat-menu-content\">
<div class=\"\">
<p class=\"chat-cont\">can you come with me?</p>
</div>
<p class=\"chat-time\">8:20 a.m.</p>
</div>
</div>
</div>
<div class=\"chat-reply-box\">
<div class=\"right-icon-control\">
<div class=\"input-group input-group-button\">
<input type=\"text\" class=\"form-control\" placeholder=\"Write hear . . \">
<div class=\"input-group-append\">
<button class=\"btn btn-primary waves-effect waves-light\" type=\"button\"><i class=\"feather icon-message-circle\"></i></button>
</div>
</div>
</div>
</div>
</div>

<div class=\"pcoded-main-container\">
<div class=\"pcoded-wrapper\">

<nav class=\"pcoded-navbar\">
<div class=\"nav-list\">
<div class=\"pcoded-inner-navbar main-menu\">
<div class=\"pcoded-navigation-label\">Navigation</div>
<ul class=\"pcoded-item pcoded-left-item\">
<li class=\"pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\"><i class=\"feather icon-home\"></i></span>
<span class=\"pcoded-mtext\">Dashboard</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"../index.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Default</span>
</a>
</li>
<li class=\"\">
<a href=\"dashboard-crm.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">CRM</span>
</a>
</li>
<li class=\"\">
<a href=\"dashboard-analytics.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Analytics</span>
<span class=\"pcoded-badge label label-info \">NEW</span>
</a>
</li>
</ul>
</li>
<li class=\"pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\"><i class=\"feather icon-sidebar\"></i></span>
<span class=\"pcoded-mtext\">Page layouts</span>
<span class=\"pcoded-badge label label-warning\">NEW</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\" pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Vertical</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"menu-static.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Static Layout</span>
</a>
</li>
<li class=\"\">
<a href=\"menu-header-fixed.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Header Fixed</span>
</a>
</li>
<li class=\"\">
<a href=\"menu-compact.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Compact</span>
 </a>
</li>
<li class=\"\">
<a href=\"menu-sidebar.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Sidebar Fixed</span>
</a>
</li>
</ul>
</li>
<li class=\" pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Horizontal</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"menu-horizontal-static.html\" target=\"_blank\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Static Layout</span>
</a>
</li>
<li class=\"\">
<a href=\"menu-horizontal-fixed.html\" target=\"_blank\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Fixed layout</span>
</a>
</li>
<li class=\"\">
<a href=\"menu-horizontal-icon.html\" target=\"_blank\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Static With Icon</span>
</a>
</li>
<li class=\"\">
<a href=\"menu-horizontal-icon-fixed.html\" target=\"_blank\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Fixed With Icon</span>
</a>
</li>
</ul>
</li>
<li class=\"\">
<a href=\"menu-bottom.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Bottom Menu</span>
</a>
</li>
</ul>
</li>
<li class=\"\">
<a href=\"navbar-light.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-menu\"></i>
</span>
<span class=\"pcoded-mtext\">Navigation</span>
</a>
</li>
<li class=\"pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-layers\"></i>
</span>
<span class=\"pcoded-mtext\">Widget</span>
<span class=\"pcoded-badge label label-danger\">100+</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"widget-statistic.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Statistic</span>
</a>
</li>
<li class=\"\">
<a href=\"widget-data.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Data</span>
</a>
</li>
<li class=\"\">
<a href=\"widget-chart.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Chart Widget</span>
</a>
</li>
</ul>
</li>
</ul>
<div class=\"pcoded-navigation-label\">UI Element</div>
<ul class=\"pcoded-item pcoded-left-item\">
<li class=\"pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-box\"></i>
</span>
<span class=\"pcoded-mtext\">Basic</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"alert.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Alert</span>
</a>
</li>
<li class=\"\">
<a href=\"breadcrumb.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Breadcrumbs</span>
</a>
</li>
<li class=\"\">
<a href=\"button.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Button</span>
</a>
</li>
<li class=\"\">
<a href=\"box-shadow.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Box-Shadow</span>
</a>
</li>
<li class=\"\">
<a href=\"accordion.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Accordion</span>
</a>
</li>
<li class=\"\">
<a href=\"generic-class.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Generic Class</span>
</a>
</li>
<li class=\" \">
<a href=\"tabs.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Tabs</span>
</a>
</li>
<li class=\" \">
<a href=\"color.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Color</span>
</a>
</li>
<li class=\" \">
<a href=\"label-badge.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Label Badge</span>
</a>
</li>
<li class=\" \">
<a href=\"progress-bar.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Progress Bar</span>
</a>
</li>
<li class=\" \">
<a href=\"list.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">List</span>
</a>
</li>
<li class=\" \">
<a href=\"tooltip.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Tooltip And Popover</span>
</a>
</li>
<li class=\" \">
<a href=\"typography.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Typography</span>
</a>
</li>
<li class=\" \">
<a href=\"other.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Other</span>
</a>
</li>
</ul>
</li>
<li class=\"pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-gitlab\"></i>
</span>
<span class=\"pcoded-mtext\">Advance</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\" \">
<a href=\"draggable.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Draggable</span>
</a>
</li>
</li>
<li class=\" \">
<a href=\"modal.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Modal</span>
</a>
</li>
<li class=\" \">
<a href=\"notification.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Notifications</span>
</a>
</li>
<li class=\" \">
<a href=\"rating.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Rating</span>
</a>
</li>
<li class=\" \">
<a href=\"range-slider.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Range Slider</span>
</a>
</li>
<li class=\" \">
<a href=\"slider.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Slider</span>
</a>
</li>
<li class=\" \">
<a href=\"syntax-highlighter.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Syntax Highlighter</span>
</a>
</li>
<li class=\" \">
<a href=\"tour.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Tour</span>
</a>
</li>
<li class=\" \">
<a href=\"treeview.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Tree View</span>
</a>
</li>
<li class=\" \">
<a href=\"nestable.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Nestable</span>
</a>
</li>
<li class=\" \">
<a href=\"toolbar.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Toolbar</span>
</a>
</li>
</ul>
</li>
<li class=\"pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-package\"></i>
</span>
<span class=\"pcoded-mtext\">Extra</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\" \">
<a href=\"session-timeout.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Session Timeout</span>
</a>
</li>
<li class=\" \">
<a href=\"session-idle-timeout.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Session Idle Timeout</span>
</a>
</li>
<li class=\" \">
<a href=\"offline.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Offline</span>
</a>
</li>
</ul>
</li>
<li class=\" \">
<a href=\"animation.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-aperture rotate-refresh\"></i>
</span>
<span class=\"pcoded-mtext\">Animations</span>
</a>
</li>
<li class=\"pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-command\"></i>
</span>
<span class=\"pcoded-mtext\">Icons</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\" \">
<a href=\"icon-font-awesome.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Font Awesome</span>
</a>
</li>
<li class=\" \">
<a href=\"icon-themify.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Themify</span>
</a>
</li>
<li class=\" \">
<a href=\"icon-simple-line.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Simple Line Icon</span>
</a>
</li>
</ul>
</li>
</ul>
<div class=\"pcoded-navigation-label\">Forms</div>
<ul class=\"pcoded-item pcoded-left-item\">
<li class=\"pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-clipboard\"></i>
</span>
<span class=\"pcoded-mtext\">Form</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\" \">
<a href=\"form-elements-component.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Components</span>
</a>
</li>
<li class=\" \">
<a href=\"form-elements-add-on.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Add-On</span>
</a>
</li>
<li class=\" \">
<a href=\"form-elements-advance.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Advance</span>
</a>
</li>
<li class=\" \">
<a href=\"form-validation.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Validation</span>
</a>
</li>
</ul>
</li>
<li class=\" \">
<a href=\"form-picker.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-edit-1\"></i>
</span>
<span class=\"pcoded-mtext\">Form Picker</span>
<span class=\"pcoded-badge label label-warning\">NEW</span>
</a>
</li>
<li class=\" \">
<a href=\"form-select.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-feather\"></i>
</span>
<span class=\"pcoded-mtext\">Form Select</span>
</a>
</li>
<li class=\" \">
<a href=\"form-masking.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-shield\"></i>
</span>
<span class=\"pcoded-mtext\">Form Masking</span>
</a>
</li>
<li class=\" \">
<a href=\"form-wizard.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-tv\"></i>
</span>
<span class=\"pcoded-mtext\">Form Wizard</span>
</a>
</li>
</ul>
<div class=\"pcoded-navigation-label\">Tables</div>
<ul class=\"pcoded-item pcoded-left-item\">
<li class=\"pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-credit-card\"></i>
</span>
<span class=\"pcoded-mtext\">Bootstrap Table</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\" \">
<a href=\"bs-basic-table.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Basic Table</span>
</a>
</li>
<li class=\" \">
<a href=\"bs-table-sizing.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Sizing Table</span>
</a>
</li>
<li class=\" \">
<a href=\"bs-table-border.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Border Table</span>
</a>
</li>
<li class=\" \">
<a href=\"bs-table-styling.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Styling Table</span>
</a>
</li>
</ul>
</li>
<li class=\"pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-inbox\"></i>
</span>
<span class=\"pcoded-mtext\">Data Table</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\" \">
<a href=\"dt-basic.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Basic Initialization</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-advance.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Advance Initialization</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-styling.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Styling</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-api.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">API</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-ajax.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Ajax</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-server-side.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Server Side</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-plugin.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Plug-In</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-data-sources.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Data Sources</span>
</a>
</li>
</ul>
</li>
<li class=\"pcoded-hasmenu active pcoded-trigger\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-server\"></i>
</span>
<span class=\"pcoded-mtext\">DT Extensions</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\" \">
<a href=\"dt-ext-autofill.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">AutoFill</span>
</a>
</li>
<li class=\"pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Button</span>
 </a>
<ul class=\"pcoded-submenu\">
<li class=\" \">
<a href=\"dt-ext-basic-buttons.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Basic Button</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-ext-buttons-html-5-data-export.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Data Export</span>
</a>
</li>
</ul>
</li>
<li class=\" \">
<a href=\"dt-ext-col-reorder.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Col Reorder</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-ext-fixed-columns.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Fixed Columns</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-ext-fixed-header.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Fixed Header</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-ext-key-table.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Key Table</span>
</a>
</li>
<li class=\"active\">
<a href=\"dt-ext-responsive.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Responsive</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-ext-row-reorder.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Row Reorder</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-ext-scroller.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Scroller</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-ext-select.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Select Table</span>
</a>
 </li>
</ul>
</li>
<li class=\" \">
<a href=\"foo-table.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-hash\"></i>
</span>
<span class=\"pcoded-mtext\">FooTable</span>
</a>
</li>
<li class=\"pcoded-hasmenu \">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-airplay\"></i>
</span>
<span class=\"pcoded-mtext\">Handson Table</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"handson-appearance.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Appearance</span>
</a>
</li>
<li class=\"\">
<a href=\"handson-data-operation.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Data Operation</span>
</a>
</li>
<li class=\"\">
<a href=\"handson-rows-cols.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Rows Columns</span>
</a>
</li>
<li class=\"\">
<a href=\"handson-columns-only.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Columns Only</span>
</a>
</li>
<li class=\"\">
<a href=\"handson-cell-features.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Cell Features</span>
</a>
</li>
<li class=\"\">
<a href=\"handson-cell-types.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Cell Types</span>
</a>
</li>
<li class=\"\">
<a href=\"handson-integrations.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Integrations</span>
</a>
</li>
<li class=\"\">
<a href=\"handson-rows-only.html\" class=\"waves-effect waves-dark\">
 <span class=\"pcoded-mtext\">Rows Only</span>
</a>
</li>
<li class=\"\">
<a href=\"handson-utilities.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Utilities</span>
</a>
</li>
</ul>
</li>
<li class=\"\">
<a href=\"editable-table.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-edit\"></i>
</span>
<span class=\"pcoded-mtext\">Editable Table</span>
</a>
</li>
</ul>
<div class=\"pcoded-navigation-label\">Chart And Maps</div>
<ul class=\"pcoded-item pcoded-left-item\">
<li class=\"pcoded-hasmenu \">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-pie-chart\"></i>
</span>
<span class=\"pcoded-mtext\">Charts</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"chart-google.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Google Chart</span>
</a>
</li>
<li class=\"\">
<a href=\"chart-chartjs.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">ChartJs</span>
</a>
</li>
<li class=\"\">
<a href=\"chart-list.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">List Chart</span>
</a>
</li>
<li class=\"\">
<a href=\"chart-float.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Float Chart</span>
</a>
</li>
<li class=\"\">
<a href=\"chart-knob.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Knob chart</span>
</a>
</li>
<li class=\"\">
<a href=\"chart-morris.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Morris Chart</span>
</a>
</li>
<li class=\"\">
<a href=\"chart-nvd3.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Nvd3 Chart</span>
</a>
</li>
<li class=\"\">
<a href=\"chart-peity.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Peity Chart</span>
</a>
</li>
<li class=\"\">
<a href=\"chart-radial.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Radial Chart</span>
</a>
</li>
<li class=\"\">
<a href=\"chart-rickshaw.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Rickshaw Chart</span>
</a>
</li>
<li class=\"\">
<a href=\"chart-sparkline.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Sparkline Chart</span>
</a>
</li>
<li class=\"\">
<a href=\"chart-c3.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">C3 Chart</span>
</a>
</li>
</ul>
</li>
<li class=\"pcoded-hasmenu \">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-map\"></i>
</span>
<span class=\"pcoded-mtext\">Maps</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"map-google.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Google Maps</span>
</a>
</li>
<li class=\"\">
<a href=\"map-vector.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Vector Maps</span>
</a>
</li>
<li class=\"\">
<a href=\"map-api.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Google Map Search API</span>
</a>
 </li>
<li class=\"\">
<a href=\"location.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Location</span>
</a>
</li>
</ul>
</li>
</ul>
<div class=\"pcoded-navigation-label\">Pages</div>
<ul class=\"pcoded-item pcoded-left-item\">
<li class=\"pcoded-hasmenu \">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-unlock\"></i>
</span>
<span class=\"pcoded-mtext\">Authentication</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"auth-sign-in-social.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Login</span>
</a>
</li>
<li class=\"\">
<a href=\"auth-sign-up-social.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Registration</span>
</a>
</li>
<li class=\"\">
<a href=\"auth-reset-password.html\" target=\"_blank\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Forgot Password</span>
</a>
</li>
<li class=\"\">
<a href=\"auth-lock-screen.html\" target=\"_blank\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Lock Screen</span>
</a>
</li>
</ul>
</li>
<li class=\"pcoded-hasmenu \">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-sliders\"></i>
</span>
<span class=\"pcoded-mtext\">Maintenance</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"error.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Error</span>
</a>
</li>
<li class=\"\">
<a href=\"comming-soon.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Comming Soon</span>
</a>
</li>
<li class=\"\">
<a href=\"offline-ui.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Offline UI</span>
</a>
</li>
</ul>
</li>
<li class=\"pcoded-hasmenu \">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-mail\"></i>
</span>
<span class=\"pcoded-mtext\">Email</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"email-compose.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Compose Email</span>
</a>
</li>
<li class=\"\">
<a href=\"email-inbox.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Inbox</span>
</a>
</li>
<li class=\"\">
<a href=\"email-read.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Read Mail</span>
</a>
</li>
</ul>
</li>
</ul>
<div class=\"pcoded-navigation-label\">App</div>
<ul class=\"pcoded-item pcoded-left-item\">
<a href=\"todo.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-bookmark\"></i>
</span>
<span class=\"pcoded-mtext\">To-Do</span>
</a>
</li>
</ul>
<div class=\"pcoded-navigation-label\">Extension</div>
<ul class=\"pcoded-item pcoded-left-item\">
<li class=\"pcoded-hasmenu \">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-file-plus\"></i>
</span>
<span class=\"pcoded-mtext\">Editor</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"ck-editor.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">CK-Editor</span>
</a>
 </li>
<li class=\"\">
<a href=\"wysiwyg-editor.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">WYSIWYG Editor</span>
</a>
</li>
</ul>
</li>
<li class=\"pcoded-hasmenu \">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-calendar\"></i>
</span>
<span class=\"pcoded-mtext\">Event Calendar</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"event-full-calender.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Full Calendar</span>
</a>
</li>
<li class=\"\">
<a href=\"event-clndr.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">CLNDER</span>
<span class=\"pcoded-badge label label-info\">NEW</span>
</a>
</li>
</ul>
</li>
<li class=\"\">
<a href=\"image-crop.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-scissors\"></i>
<b>IC</b>
</span>
<span class=\"pcoded-mtext\">Image Cropper</span>
</a>
</li>
<li class=\"\">
<a href=\"file-upload.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-upload-cloud\"></i>
</span>
<span class=\"pcoded-mtext\">File Upload</span>
</a>
</li>
<li class=\"\">
<a href=\"change-loges.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-briefcase\"></i>
</span>
<span class=\"pcoded-mtext\">Change Loges</span>
<span class=\"pcoded-badge label label-warning\">1.0</span>
</a>
</li>
</ul>
<div class=\"pcoded-navigation-label\">Other</div>
<ul class=\"pcoded-item pcoded-left-item\">
<li class=\"pcoded-hasmenu \">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-list\"></i>
</span>
<span class=\"pcoded-mtext\">Menu Levels</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Menu Level 2.1</span>
</a>
</li>
<li class=\"pcoded-hasmenu \">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Menu Level 2.2</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Menu Level 3.1</span>
</a>
</li>
</ul>
</li>
<li class=\"\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Menu Level 2.3</span>
</a>
</li>
</ul>
</li>
<li class=\"\">
<a href=\"javascript:void(0)\" class=\"disabled waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-power\"></i>
<b>D</b>
</span>
<span class=\"pcoded-mtext\">Disabled Menu</span>
</a>
</li>
<li class=\"\">
<a href=\"sample-page.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-watch\"></i>
</span>
<span class=\"pcoded-mtext\">Sample Page</span>
</a>
</li>
</ul>
</div>
</div>
</nav>

<div class=\"pcoded-content\">

<div class=\"page-header card\">
<div class=\"row align-items-end\">
<div class=\"col-lg-8\">
<div class=\"page-header-title\">
<i class=\"feather icon-server bg-c-blue\"></i>
<div class=\"d-inline\">
<h5>Responsive DataTable</h5>
<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
</div>
</div>
</div>
<div class=\"col-lg-4\">
<div class=\"page-header-breadcrumb\">
<ul class=\" breadcrumb breadcrumb-title\">
<li class=\"breadcrumb-item\">
<a href=\"../index.html\"><i class=\"feather icon-home\"></i></a>
</li>
<li class=\"breadcrumb-item\"><a href=\"#!\">Data Table</a>
</li>
<li class=\"breadcrumb-item\"><a href=\"#!\">Responsive Initialization</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class=\"pcoded-inner-content\">
<div class=\"main-body\">
<div class=\"page-wrapper\">
<div class=\"page-body\">

<div class=\"card\">
<div class=\"card-header\">
<h5>Configuration Option</h5>
<span>The Responsive extension for DataTables can be applied to a DataTable in one of two ways; with a specific class name on the table, or using the DataTables initialisation options. This method shows the latter, with the responsive option being set to the boolean value true.</span>
</div>
<div class=\"card-block\">
<table id=\"res-config\" class=\"table display\">
<thead>
<tr>
<th>First name</th>
<th>Last name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
<th>Extn.</th>
<th>E-mail</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger</td>
<td>Nixon</td>
<td>System Architect</td>
<td>Edinburgh</td>
<td>61</td>
<td>2011/04/25</td>
 <td>\$320,800</td>
<td>5421</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"c1b5efafa8b9aeaf81a5a0b5a0b5a0a3ada4b2efafa4b5\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Garrett</td>
<td>Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>63</td>
<td>2011/07/25</td>
<td>\$170,750</td>
<td>8422</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f295dc859b9c86978081b2969386938693909e9781dc9c9786\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Ashton</td>
<td>Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>\$86,000</td>
<td>1562</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"31501f525e4971555045504550535d54421f5f5445\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Cedric</td>
<td>Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
<td>2012/03/29</td>
<td>\$433,060</td>
<td>6224</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"7e1d50151b1212073e1a1f0a1f0a1f1c121b0d50101b0a\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Airi</td>
<td>Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>\$162,700</td>
<td>5407</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"40216e3321342f3500242134213421222c25336e2e2534\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brielle</td>
<td>Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
 <td>61</td>
<td>2012/12/02</td>
<td>\$372,000</td>
<td>4804</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4d2f633a242121242c203e22230d292c392c392c2f21283e63232839\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Herrod</td>
<td>Chandler</td>
<td>Sales Assistant</td>
<td>San Francisco</td>
<td>59</td>
<td>2012/08/06</td>
<td>\$137,500</td>
<td>9608</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"1a723479727b747e767f685a7e7b6e7b6e7b78767f6934747f6e\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Rhona</td>
<td>Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
<td>55</td>
<td>2010/10/14</td>
<td>\$327,900</td>
<td>6200</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"e694c88287908f82958988a6828792879287848a8395c8888392\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Colleen</td>
<td>Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>39</td>
<td>2009/09/15</td>
<td>\$205,500</td>
<td>2360</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f291dc9a87808186b2969386938693909e9781dc9c9786\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Sonya</td>
<td>Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>23</td>
<td>2008/12/13</td>
<td>\$103,600</td>
<td>1667</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"7b08551d0914080f3b1f1a0f1a0f1a19171e0855151e0f\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jena</td>
<td>Gaines</td>
 <td>Office Manager</td>
<td>London</td>
<td>30</td>
<td>2008/12/19</td>
<td>\$90,560</td>
<td>3814</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"066c2861676f68637546626772677267646a637528686372\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Quinn</td>
<td>Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>22</td>
<td>2013/03/03</td>
<td>\$342,000</td>
<td>9497</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2b5a054d475245456b4f4a5f4a5f4a49474e5805454e5f\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Charde</td>
<td>Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
<td>36</td>
<td>2008/10/16</td>
<td>\$470,600</td>
<td>6741</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"63004d0e0211100b020f0f23070217021702010f06104d0d0617\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Haley</td>
<td>Kennedy</td>
<td>Senior Marketing Designer</td>
<td>London</td>
<td>43</td>
<td>2012/12/18</td>
<td>\$313,500</td>
<td>3597</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"9bf3b5f0fef5f5feffe2dbfffaeffaeffaf9f7fee8b5f5feef\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Tatyana</td>
<td>Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>19</td>
<td>2010/03/17</td>
<td>\$385,750</td>
<td>1965</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"5d29733b3429272d3c292f343e361d393c293c293c3f31382e73333829\">[email&#160;protected]</a></td>
</tr>
<tr>
 <td>Michael</td>
<td>Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>66</td>
<td>2012/11/27</td>
<td>\$198,500</td>
<td>1581</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"88e5a6fbe1e4fee9c8ece9fce9fce9eae4edfba6e6edfc\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Paul</td>
<td>Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>64</td>
<td>2010/06/09</td>
<td>\$725,000</td>
<td>3059</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f080de92898294b0949184918491929c9583de9e9584\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gloria</td>
<td>Little</td>
<td>Systems Administrator</td>
<td>New York</td>
<td>59</td>
<td>2009/04/10</td>
<td>\$237,500</td>
<td>1721</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"3a5d1456534e4e565f7a5e5b4e5b4e5b58565f4914545f4e\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bradley</td>
<td>Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>\$132,000</td>
<td>2558</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"7e1c50190c1b1b0c3e1a1f0a1f0a1f1c121b0d50101b0a\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Dai</td>
<td>Rios</td>
<td>Personnel Lead</td>
<td>Edinburgh</td>
<td>35</td>
<td>2012/09/26</td>
<td>\$217,500</td>
<td>2290</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"1b7f35697274685b7f7a6f7a6f7a79777e6835757e6f\">[email&#160;protected]</a></td>
 </tr>
<tr>
<td>Jenette</td>
<td>Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>30</td>
<td>2011/09/03</td>
<td>\$345,000</td>
<td>1937</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"8ae0a4e9ebe6eefdefe6e6caeeebfeebfeebe8e6eff9a4e4effe\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Yuri</td>
<td>Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>40</td>
<td>2009/06/25</td>
<td>\$675,000</td>
<td>6154</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"fa83d4989f888883ba9e9b8e9b8e9b98969f89d4949f8e\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Caesar</td>
<td>Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>\$106,450</td>
<td>8330</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"1c7f326a7d727f795c787d687d687d7e70796f32727968\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Doris</td>
<td>Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>23</td>
<td>2010/09/20</td>
<td>\$85,600</td>
<td>3023</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"52367c253b3e36372012363326332633303e37217c3c3726\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Angelica</td>
<td>Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>\$1,200,000</td>
 <td>5797</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"62034c10030f0d1122060316031603000e07114c0c0716\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>42</td>
<td>2010/12/22</td>
<td>\$92,575</td>
<td>8822</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"d8bff6b2b7a1bbbd98bcb9acb9acb9bab4bdabf6b6bdac\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jennifer</td>
<td>Chang</td>
<td>Regional Director</td>
<td>Singapore</td>
<td>28</td>
<td>2010/11/14</td>
<td>\$357,650</td>
<td>9239</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"72185c111a131c1532161306130613101e17015c1c1706\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brenden</td>
<td>Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>\$206,850</td>
<td>1314</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4f2d61382e28212a3d0f2b2e3b2e3b2e2d232a3c61212a3b\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Fiona</td>
<td>Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>48</td>
<td>2010/03/11</td>
<td>\$850,000</td>
<td>2947</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"badc94ddc8dfdfd4fadedbcedbcedbd8d6dfc994d4dfce\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Shou</td>
<td>Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>20</td>
 <td>2011/08/14</td>
<td>\$163,000</td>
<td>8899</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"30431e59445f4570545144514451525c55431e5e5544\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michelle</td>
<td>House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>37</td>
<td>2011/06/02</td>
<td>\$95,400</td>
<td>2769</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"c6abe8aea9b3b5a386a2a7b2a7b2a7a4aaa3b5e8a8a3b2\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Suki</td>
<td>Burks</td>
<td>Developer</td>
<td>London</td>
<td>53</td>
<td>2009/10/22</td>
<td>\$114,500</td>
<td>6832</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"7b0855190e0910083b1f1a0f1a0f1a19171e0855151e0f\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Prescott</td>
<td>Bartlett</td>
<td>Technical Author</td>
<td>London</td>
<td>27</td>
<td>2011/05/07</td>
<td>\$145,000</td>
<td>3606</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"23530d414251574f46575763474257425742414f46500d4d4657\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Cortez</td>
<td>Team Leader</td>
<td>San Francisco</td>
<td>22</td>
<td>2008/10/26</td>
<td>\$235,500</td>
<td>2860</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f89fd69b978a8c9d82b89c998c998c999a949d8bd6969d8c\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Martena</td>
<td>Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>46</td>
<td>2011/03/09</td>
<td>\$324,050</td>
<td>8240</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f994d7949a9a8b9880b99d988d988d989b959c8ad7979c8d\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Unity</td>
<td>Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/12/09</td>
<td>\$85,675</td>
<td>5384</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"63164d0116170f061123070217021702010f06104d0d0617\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Howard</td>
<td>Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>51</td>
<td>2008/12/16</td>
<td>\$164,500</td>
<td>7031</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"452d6b2d2431232c20292105212431243124272920366b2b2031\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hope</td>
<td>Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>41</td>
<td>2010/02/12</td>
<td>\$109,850</td>
<td>6318</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"137b3d7566767d67766053777267726772717f76603d7d7667\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Vivian</td>
<td>Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>62</td>
<td>2009/02/14</td>
<td>\$452,500</td>
<td>9422</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"493f6721283b3b2c2525092d283d283d282b252c3a67272c3d\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Timothy</td>
<td>Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>37</td>
<td>2008/12/11</td>
<td>\$136,200</td>
<td>7580</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"3743195a585859524e77535643564356555b524419595243\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jackson</td>
<td>Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>65</td>
<td>2008/09/26</td>
<td>\$645,750</td>
<td>1042</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"8fe5a1edfdeeebfce7eef8cfebeefbeefbeeede3eafca1e1eafb\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Olivia</td>
<td>Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>64</td>
<td>2011/02/03</td>
<td>\$234,500</td>
<td>2120</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"503f7e3c39313e3710343124312431323c35237e3e3524\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bruno</td>
<td>Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>\$163,500</td>
<td>6222</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"62004c0c03110a22060316031603000e07114c0c0716\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Sakura</td>
<td>Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>37</td>
<td>2009/08/19</td>
<td>\$139,575</td>
<td>9383</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f281dc8b939f939f9d869db2969386938693909e9781dc9c9786\">[email&#160;protected]</a></td>
</tr>
<tr>
 <td>Thor</td>
<td>Walton</td>
<td>Developer</td>
<td>New York</td>
<td>61</td>
<td>2013/08/11</td>
<td>\$98,540</td>
<td>8327</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"eb9fc59c8a879f8485ab8f8a9f8a9f8a89878e98c5858e9f\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Finn</td>
<td>Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/07/07</td>
<td>\$87,500</td>
<td>2927</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"c0a6eea3a1ada1a3a8af80a4a1b4a1b4a1a2aca5b3eeaea5b4\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Serge</td>
<td>Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>64</td>
<td>2012/04/09</td>
<td>\$138,575</td>
<td>8352</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"7b0855191a171f0c12153b1f1a0f1a0f1a19171e0855151e0f\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zenaida</td>
<td>Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>63</td>
<td>2010/01/04</td>
<td>\$125,250</td>
<td>7439</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"dca6f2baaebdb2b79cb8bda8bda8bdbeb0b9aff2b2b9a8\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zorita</td>
<td>Serrano</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>56</td>
<td>2012/06/01</td>
<td>\$115,000</td>
<td>4389</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"fa80d4899f88889b9495ba9e9b8e9b8e9b98969f89d4949f8e\">[email&#160;protected]</a></td>
 </tr>
<tr>
<td>Jennifer</td>
<td>Acosta</td>
<td>Junior Javascript Developer</td>
<td>Edinburgh</td>
<td>43</td>
<td>2013/02/01</td>
<td>\$75,650</td>
<td>3431</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f993d7989a968a8d98b99d988d988d989b959c8ad7979c8d\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Cara</td>
<td>Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>\$145,600</td>
<td>3990</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f794d984839281929984b7939683968396959b9284d9999283\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hermione</td>
<td>Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>47</td>
<td>2011/03/21</td>
<td>\$356,250</td>
<td>1016</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"84ecaae6f1f0e8e1f6c4e0e5f0e5f0e5e6e8e1f7aaeae1f0\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Lael</td>
<td>Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>21</td>
<td>2009/02/27</td>
<td>\$103,500</td>
<td>6733</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f39fdd9481969681b3979287928792919f9680dd9d9687\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jonas</td>
<td>Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>30</td>
<td>2010/07/14</td>
<td>\$86,500</td>
 <td>8196</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"147e3a7578716c757a70716654707560756075767871673a7a7160\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Shad</td>
<td>Decker</td>
<td>Regional Director</td>
<td>Edinburgh</td>
<td>51</td>
<td>2008/11/13</td>
<td>\$183,000</td>
<td>6373</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"d7a4f9b3b2b4bcb2a597b3b6a3b6a3b6b5bbb2a4f9b9b2a3\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michael</td>
<td>Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>29</td>
<td>2011/06/27</td>
<td>\$183,000</td>
<td>5384</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"55387b372720363015313421342134373930267b3b3021\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Donna</td>
<td>Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>27</td>
<td>2011/01/25</td>
<td>\$112,000</td>
<td>4226</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"ec88c29f828588899eac888d988d988d8e80899fc2828998\">[email&#160;protected]</a></td>
</tr>
</tbody>
</table>
</div>
</div>


<div class=\"card\">
<div class=\"card-header\">
<h5>`New` Constructor</h5>
<span>Responsive will automatically detect new DataTable instances being created on a page and initialize itself if it finds the responsive option or responsive class name on the table, as shown in the other examples.</span>
</div>
<div class=\"card-block\">
<div class=\"dt-responsive table-responsive\">
<table id=\"new-cons\" class=\"table table-striped table-bordered nowrap\">
<thead>
<tr>
 <th>First name</th>
<th>Last name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
<th>Extn.</th>
<th>E-mail</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger</td>
<td>Nixon</td>
<td>System Architect</td>
<td>Edinburgh</td>
<td>61</td>
<td>2011/04/25</td>
<td>\$320,800</td>
<td>5421</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"493d672720312627092d283d283d282b252c3a67272c3d\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Garrett</td>
<td>Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>63</td>
<td>2011/07/25</td>
<td>\$170,750</td>
<td>8422</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"a5c28bd2cccbd1c0d7d6e5c1c4d1c4d1c4c7c9c0d68bcbc0d1\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Ashton</td>
<td>Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>\$86,000</td>
<td>1562</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"a7c689c4c8dfe7c3c6d3c6d3c6c5cbc2d489c9c2d3\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Cedric</td>
<td>Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
 <td>2012/03/29</td>
<td>\$433,060</td>
<td>6224</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"791a57121c151500391d180d180d181b151c0a57171c0d\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Airi</td>
<td>Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>\$162,700</td>
<td>5407</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"6b0a45180a1f041e2b0f0a1f0a1f0a09070e1845050e1f\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brielle</td>
<td>Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
<td>61</td>
<td>2012/12/02</td>
<td>\$372,000</td>
<td>4804</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"22400c554b4e4e4b434f514d4c62464356435643404e47510c4c4756\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Herrod</td>
<td>Chandler</td>
<td>Sales Assistant</td>
<td>San Francisco</td>
<td>59</td>
<td>2012/08/06</td>
<td>\$137,500</td>
<td>9608</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"9cf4b2fff4fdf2f8f0f9eedcf8fde8fde8fdfef0f9efb2f2f9e8\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Rhona</td>
<td>Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
<td>55</td>
<td>2010/10/14</td>
<td>\$327,900</td>
<td>6200</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"63114d0702150a07100c0d23070217021702010f06104d0d0617\">[email&#160;protected]</a></td>
</tr>
<tr>
 <td>Colleen</td>
<td>Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>39</td>
<td>2009/09/15</td>
<td>\$205,500</td>
<td>2360</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"1c7f3274696e6f685c787d687d687d7e70796f32727968\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Sonya</td>
<td>Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>23</td>
<td>2008/12/13</td>
<td>\$103,600</td>
<td>1667</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"a8db86cedac7dbdce8ccc9dcc9dcc9cac4cddb86c6cddc\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jena</td>
<td>Gaines</td>
<td>Office Manager</td>
<td>London</td>
<td>30</td>
<td>2008/12/19</td>
<td>\$90,560</td>
<td>3814</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2f4501484e46414a5c6f4b4e5b4e5b4e4d434a5c01414a5b\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Quinn</td>
<td>Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>22</td>
<td>2013/03/03</td>
<td>\$342,000</td>
<td>9497</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4938672f25302727092d283d283d282b252c3a67272c3d\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Charde</td>
<td>Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
<td>36</td>
<td>2008/10/16</td>
<td>\$470,600</td>
 <td>6741</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"e083ce8d81929388818c8ca0848194819481828c8593ce8e8594\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Haley</td>
<td>Kennedy</td>
<td>Senior Marketing Designer</td>
<td>London</td>
<td>43</td>
<td>2012/12/18</td>
<td>\$313,500</td>
<td>3597</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"bed690d5dbd0d0dbdac7fedadfcadfcadfdcd2dbcd90d0dbca\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Tatyana</td>
<td>Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>19</td>
<td>2010/03/17</td>
<td>\$385,750</td>
<td>1965</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"99edb7fff0ede3e9f8edebf0faf2d9fdf8edf8edf8fbf5fceab7f7fced\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michael</td>
<td>Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>66</td>
<td>2012/11/27</td>
<td>\$198,500</td>
<td>1581</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"422f6c312b2e342302262336233623202e27316c2c2736\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Paul</td>
<td>Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>64</td>
<td>2010/06/09</td>
<td>\$725,000</td>
<td>3059</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b1c19fd3c8c3d5f1d5d0c5d0c5d0d3ddd4c29fdfd4c5\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gloria</td>
<td>Little</td>
 <td>Systems Administrator</td>
<td>New York</td>
<td>59</td>
<td>2009/04/10</td>
<td>\$237,500</td>
<td>1721</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"85e2abe9ecf1f1e9e0c5e1e4f1e4f1e4e7e9e0f6abebe0f1\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bradley</td>
<td>Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>\$132,000</td>
<td>2558</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"02602c657067677042666376637663606e67712c6c6776\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Dai</td>
<td>Rios</td>
<td>Personnel Lead</td>
<td>Edinburgh</td>
<td>35</td>
<td>2012/09/26</td>
<td>\$217,500</td>
<td>2290</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2c48025e45435f6c484d584d584d4e40495f02424958\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jenette</td>
<td>Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>30</td>
<td>2011/09/03</td>
<td>\$345,000</td>
<td>1937</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"610b4f02000d0516040d0d21050015001500030d04124f0f0415\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Yuri</td>
<td>Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>40</td>
<td>2009/06/25</td>
<td>\$675,000</td>
<td>6154</td>
 <td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"fd84d39f988f8f84bd999c899c899c9f91988ed3939889\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Caesar</td>
<td>Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>\$106,450</td>
<td>8330</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"25460b53444b464065414451445144474940560b4b4051\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Doris</td>
<td>Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>23</td>
<td>2010/09/20</td>
<td>\$85,600</td>
<td>3023</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"583c762f31343c3d2a183c392c392c393a343d2b76363d2c\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Angelica</td>
<td>Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>\$1,200,000</td>
<td>5797</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"81e0aff3e0eceef2c1e5e0f5e0f5e0e3ede4f2afefe4f5\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>42</td>
<td>2010/12/22</td>
<td>\$92,575</td>
<td>8822</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"197e377376607a7c597d786d786d787b757c6a37777c6d\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jennifer</td>
<td>Chang</td>
<td>Regional Director</td>
<td>Singapore</td>
 <td>28</td>
<td>2010/11/14</td>
<td>\$357,650</td>
<td>9239</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"6c06420f040d020b2c080d180d180d0e00091f42020918\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brenden</td>
<td>Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>\$206,850</td>
<td>1314</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"583a762f393f363d2a183c392c392c393a343d2b76363d2c\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Fiona</td>
<td>Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>48</td>
<td>2010/03/11</td>
<td>\$850,000</td>
<td>2947</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"6e0840091c0b0b002e0a0f1a0f1a0f0c020b1d40000b1a\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Shou</td>
<td>Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>20</td>
<td>2011/08/14</td>
<td>\$163,000</td>
<td>8899</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"592a77302d362c193d382d382d383b353c2a77373c2d\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michelle</td>
<td>House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>37</td>
<td>2011/06/02</td>
<td>\$95,400</td>
<td>2769</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"a1cc8fc9ced4d2c4e1c5c0d5c0d5c0c3cdc4d28fcfc4d5\">[email&#160;protected]</a></td>
</tr>
 <tr>
<td>Suki</td>
<td>Burks</td>
<td>Developer</td>
<td>London</td>
<td>53</td>
<td>2009/10/22</td>
<td>\$114,500</td>
<td>6832</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"13603d716661786053777267726772717f76603d7d7667\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Prescott</td>
<td>Bartlett</td>
<td>Technical Author</td>
<td>London</td>
<td>27</td>
<td>2011/05/07</td>
<td>\$145,000</td>
<td>3606</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"1b6b35797a696f777e6f6f5b7f7a6f7a6f7a79777e6835757e6f\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Cortez</td>
<td>Team Leader</td>
<td>San Francisco</td>
<td>22</td>
<td>2008/10/26</td>
<td>\$235,500</td>
<td>2860</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"7f18511c100d0b1a053f1b1e0b1e0b1e1d131a0c51111a0b\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Martena</td>
<td>Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>46</td>
<td>2011/03/09</td>
<td>\$324,050</td>
<td>8240</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"224f0c4f414150435b62464356435643404e47510c4c4756\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Unity</td>
<td>Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/12/09</td>
 <td>\$85,675</td>
<td>5384</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b7c299d5c2c3dbd2c5f7d3d6c3d6c3d6d5dbd2c499d9d2c3\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Howard</td>
<td>Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>51</td>
<td>2008/12/16</td>
<td>\$164,500</td>
<td>7031</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"e28acc8a8396848b878e86a2868396839683808e8791cc8c8796\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hope</td>
<td>Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>41</td>
<td>2010/02/12</td>
<td>\$109,850</td>
<td>6318</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"3e5610584b5b504a5b4d7e5a5f4a5f4a5f5c525b4d10505b4a\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Vivian</td>
<td>Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>62</td>
<td>2009/02/14</td>
<td>\$452,500</td>
<td>9422</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b7c199dfd6c5c5d2dbdbf7d3d6c3d6c3d6d5dbd2c499d9d2c3\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Timothy</td>
<td>Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>37</td>
<td>2008/12/11</td>
<td>\$136,200</td>
<td>7580</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"8bffa5e6e4e4e5eef2cbefeaffeaffeae9e7eef8a5e5eeff\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jackson</td>
<td>Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>65</td>
<td>2008/09/26</td>
<td>\$645,750</td>
<td>1042</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"6e04400c1c0f0a1d060f192e0a0f1a0f1a0f0c020b1d40000b1a\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Olivia</td>
<td>Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>64</td>
<td>2011/02/03</td>
<td>\$234,500</td>
<td>2120</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"016e2f6d68606f6641656075607560636d64722f6f6475\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bruno</td>
<td>Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>\$163,500</td>
<td>6222</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"6b0945050a18032b0f0a1f0a1f0a09070e1845050e1f\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Sakura</td>
<td>Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>37</td>
<td>2009/08/19</td>
<td>\$139,575</td>
<td>9383</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2c5f02554d414d414358436c484d584d584d4e40495f02424958\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Thor</td>
<td>Walton</td>
<td>Developer</td>
<td>New York</td>
<td>61</td>
<td>2013/08/11</td>
<td>\$98,540</td>
<td>8327</td>
 <td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"9aeeb4edfbf6eef5f4dafefbeefbeefbf8f6ffe9b4f4ffee\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Finn</td>
<td>Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/07/07</td>
<td>\$87,500</td>
<td>2927</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"adcb83ceccc0cccec5c2edc9ccd9ccd9cccfc1c8de83c3c8d9\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Serge</td>
<td>Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>64</td>
<td>2012/04/09</td>
<td>\$138,575</td>
<td>8352</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"ddaef3bfbcb1b9aab4b39db9bca9bca9bcbfb1b8aef3b3b8a9\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zenaida</td>
<td>Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>63</td>
<td>2010/01/04</td>
<td>\$125,250</td>
<td>7439</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"1f6531796d7e71745f7b7e6b7e6b7e7d737a6c31717a6b\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zorita</td>
<td>Serrano</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>56</td>
<td>2012/06/01</td>
<td>\$115,000</td>
<td>4389</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b0ca9ec3d5c2c2d1dedff0d4d1c4d1c4d1d2dcd5c39eded5c4\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jennifer</td>
<td>Acosta</td>
<td>Junior Javascript Developer</td>
 <td>Edinburgh</td>
<td>43</td>
<td>2013/02/01</td>
<td>\$75,650</td>
<td>3431</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"096327686a667a7d68496d687d687d686b656c7a27676c7d\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Cara</td>
<td>Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>\$145,600</td>
<td>3990</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"80e3aef3f4e5f6e5eef3c0e4e1f4e1f4e1e2ece5f3aeeee5f4\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hermione</td>
<td>Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>47</td>
<td>2011/03/21</td>
<td>\$356,250</td>
<td>1016</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"adc583cfd8d9c1c8dfedc9ccd9ccd9cccfc1c8de83c3c8d9\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Lael</td>
<td>Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>21</td>
<td>2009/02/27</td>
<td>\$103,500</td>
<td>6733</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2f4301485d4a4a5d6f4b4e5b4e5b4e4d434a5c01414a5b\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jonas</td>
<td>Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>30</td>
<td>2010/07/14</td>
<td>\$86,500</td>
<td>8196</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"d9b3f7b8b5bca1b8b7bdbcab99bdb8adb8adb8bbb5bcaaf7b7bcad\">[email&#160;protected]</a></td>
</tr>
 <tr>
<td>Shad</td>
<td>Decker</td>
<td>Regional Director</td>
<td>Edinburgh</td>
<td>51</td>
<td>2008/11/13</td>
<td>\$183,000</td>
<td>6373</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2e5d004a4b4d454b5c6e4a4f5a4f5a4f4c424b5d00404b5a\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michael</td>
<td>Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>29</td>
<td>2011/06/27</td>
<td>\$183,000</td>
<td>5384</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4825662a3a3d2b2d082c293c293c292a242d3b66262d3c\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Donna</td>
<td>Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>27</td>
<td>2011/01/25</td>
<td>\$112,000</td>
<td>4226</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"45216b362b2c21203705212431243124272920366b2b2031\">[email&#160;protected]</a></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>


<div class=\"card\">
<div class=\"card-header\">
<h5>Immediately Show Hidden Details</h5>
<span>Responsive has the ability to display the details that it has hidden in a variety of different ways. Its default is to allow the end user to toggle the the display by clicking on a row and showing the information in a DataTables child row. At times it can be useful not to require end user interaction to display the hidden data in a responsive manner, which can be done with the childRowImmediate display type.</span>
</div>
<div class=\"card-block\">
<div class=\"dt-responsive table-responsive\">
<table id=\"show-hide-res\" class=\"table table-striped table-bordered nowrap\">
<thead>
<tr>
<th>First name</th>
<th>Last name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
<th>Extn.</th>
<th>E-mail</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger</td>
<td>Nixon</td>
<td>System Architect</td>
<td>Edinburgh</td>
<td>61</td>
<td>2011/04/25</td>
<td>\$320,800</td>
<td>5421</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"87f3a9e9eeffe8e9c7e3e6f3e6f3e6e5ebe2f4a9e9e2f3\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Garrett</td>
<td>Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>63</td>
<td>2011/07/25</td>
<td>\$170,750</td>
<td>8422</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b6d198c1dfd8c2d3c4c5f6d2d7c2d7c2d7d4dad3c598d8d3c2\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Ashton</td>
<td>Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>\$86,000</td>
<td>1562</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"9effb0fdf1e6defaffeaffeafffcf2fbedb0f0fbea\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Cedric</td>
<td>Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
<td>2012/03/29</td>
<td>\$433,060</td>
<td>6224</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"284b06434d444451684c495c495c494a444d5b06464d5c\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Airi</td>
<td>Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>\$162,700</td>
<td>5407</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"caabe4b9abbea5bf8aaeabbeabbeaba8a6afb9e4a4afbe\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brielle</td>
<td>Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
<td>61</td>
<td>2012/12/02</td>
<td>\$372,000</td>
<td>4804</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"9efcb0e9f7f2f2f7fff3edf1f0defaffeaffeafffcf2fbedb0f0fbea\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Herrod</td>
<td>Chandler</td>
<td>Sales Assistant</td>
<td>San Francisco</td>
<td>59</td>
<td>2012/08/06</td>
<td>\$137,500</td>
<td>9608</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"432b6d202b222d272f263103272237223722212f26306d2d2637\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Rhona</td>
<td>Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
<td>55</td>
<td>2010/10/14</td>
<td>\$327,900</td>
<td>6200</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"493b672d283f202d3a2627092d283d28\">[email&#160;protected]</a>tables.net</td>
</tr>
<tr>
<td>Colleen</td>
<td>Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>39</td>
<td>2009/09/15</td>
<td>\$205,500</td>
<td>2360</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"c1a2efa9b4b3b2b581a5a0b5a0b5a0a3ada4b2efafa4b5\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Sonya</td>
<td>Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>23</td>
<td>2008/12/13</td>
<td>\$103,600</td>
<td>1667</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"fb88d59d8994888fbb9f9a8f9a8f9a99979e88d5959e8f\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jena</td>
<td>Gaines</td>
<td>Office Manager</td>
<td>London</td>
<td>30</td>
<td>2008/12/19</td>
<td>\$90,560</td>
<td>3814</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2b41054c4a42454e586b4f4a5f4a5f4a49474e5805454e5f\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Quinn</td>
<td>Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>22</td>
<td>2013/03/03</td>
<td>\$342,000</td>
<td>9497</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"ff8ed19993869191bf9b9e8b9e8b9e9d939a8cd1919a8b\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Charde</td>
<td>Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
 <td>36</td>
<td>2008/10/16</td>
<td>\$470,600</td>
<td>6741</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b2d19cdfd3c0c1dad3dedef2d6d3c6d3c6d3d0ded7c19cdcd7c6\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Haley</td>
<td>Kennedy</td>
<td>Senior Marketing Designer</td>
<td>London</td>
<td>43</td>
<td>2012/12/18</td>
<td>\$313,500</td>
<td>3597</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b6de98ddd3d8d8d3d2cff6d2d7c2d7c2d7d4dad3c598d8d3c2\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Tatyana</td>
<td>Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>19</td>
<td>2010/03/17</td>
<td>\$385,750</td>
<td>1965</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"6d19430b0419171d0c191f040e062d090c190c190c0f01081e43030819\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michael</td>
<td>Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>66</td>
<td>2012/11/27</td>
<td>\$198,500</td>
<td>1581</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b3de9dc0dadfc5d2f3d7d2c7d2c7d2d1dfd6c09dddd6c7\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Paul</td>
<td>Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>64</td>
<td>2010/06/09</td>
<td>\$725,000</td>
<td>3059</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"21510f4358534561454055405540434d44520f4f4455\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gloria</td>
<td>Little</td>
<td>Systems Administrator</td>
<td>New York</td>
<td>59</td>
<td>2009/04/10</td>
<td>\$237,500</td>
<td>1721</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"9afdb4f6f3eeeef6ffdafefbeefbeefbf8f6ffe9b4f4ffee\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bradley</td>
<td>Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>\$132,000</td>
<td>2558</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4e2c60293c2b2b3c0e2a2f3a2f3a2f2c222b3d60202b3a\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Dai</td>
<td>Rios</td>
<td>Personnel Lead</td>
<td>Edinburgh</td>
<td>35</td>
<td>2012/09/26</td>
<td>\$217,500</td>
<td>2290</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"cfabe1bda6a0bc8fabaebbaebbaeada3aabce1a1aabb\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jenette</td>
<td>Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>30</td>
<td>2011/09/03</td>
<td>\$345,000</td>
<td>1937</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"771d5914161b1300121b1b37131603160316151b120459191203\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Yuri</td>
<td>Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>40</td>
<td>2009/06/25</td>
 <td>\$675,000</td>
<td>6154</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"6d14430f081f1f142d090c190c190c0f01081e43030819\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Caesar</td>
<td>Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>\$106,450</td>
<td>8330</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"7f1c51091e111c1a3f1b1e0b1e0b1e1d131a0c51111a0b\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Doris</td>
<td>Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>23</td>
<td>2010/09/20</td>
<td>\$85,600</td>
<td>3023</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"81e5aff6e8ede5e4f3c1e5e0f5e0f5e0e3ede4f2afefe4f5\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Angelica</td>
<td>Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>\$1,200,000</td>
<td>5797</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"ee8fc09c8f83819dae8a8f9a8f9a8f8c828b9dc0808b9a\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>42</td>
<td>2010/12/22</td>
<td>\$92,575</td>
<td>8822</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2c4b024643554f496c484d584d584d4e40495f02424958\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jennifer</td>
<td>Chang</td> 
<td>Regional Director</td>
<td>Singapore</td>
<td>28</td>
<td>2010/11/14</td>
<td>\$357,650</td>
<td>9239</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b0da9ed3d8d1ded7f0d4d1c4d1c4d1d2dcd5c39eded5c4\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brenden</td>
<td>Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>\$206,850</td>
<td>1314</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"c7a5e9b0a6a0a9a2b587a3a6b3a6b3a6a5aba2b4e9a9a2b3\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Fiona</td>
<td>Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>48</td>
<td>2010/03/11</td>
<td>\$850,000</td>
<td>2947</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"5a3c743d283f3f341a3e3b2e3b2e3b38363f2974343f2e\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Shou</td>
<td>Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>20</td>
<td>2011/08/14</td>
<td>\$163,000</td>
<td>8899</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f88bd6918c978db89c998c998c999a949d8bd6969d8c\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michelle</td>
<td>House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>37</td>
<td>2011/06/02</td>
<td>\$95,400</td>
<td>2769</td>
 <td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"0c61226463797f694c686d786d786d6e60697f22626978\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Suki</td>
<td>Burks</td>
<td>Developer</td>
<td>London</td>
<td>53</td>
<td>2009/10/22</td>
<td>\$114,500</td>
<td>6832</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"e192cf8394938a92a1858095809580838d8492cf8f8495\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Prescott</td>
<td>Bartlett</td>
<td>Technical Author</td>
<td>London</td>
<td>27</td>
<td>2011/05/07</td>
<td>\$145,000</td>
<td>3606</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"aede80cccfdcdac2cbdadaeecacfdacfdacfccc2cbdd80c0cbda\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Cortez</td>
<td>Team Leader</td>
<td>San Francisco</td>
<td>22</td>
<td>2008/10/26</td>
<td>\$235,500</td>
<td>2860</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"abcc85c8c4d9dfced1ebcfcadfcadfcac9c7ced885c5cedf\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Martena</td>
<td>Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>46</td>
<td>2011/03/09</td>
<td>\$324,050</td>
<td>8240</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"0a6724676969786b734a6e6b7e6b7e6b68666f7924646f7e\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Unity</td>
<td>Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/12/09</td>
<td>\$85,675</td>
<td>5384</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"780d561a0d0c141d0a381c190c190c191a141d0b56161d0c\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Howard</td>
<td>Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>51</td>
<td>2008/12/16</td>
<td>\$164,500</td>
<td>7031</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"49216721283d2f202c252d092d283d283d282b252c3a67272c3d\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hope</td>
<td>Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>41</td>
<td>2010/02/12</td>
<td>\$109,850</td>
<td>6318</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4d25632b38282339283e0d292c392c392c2f21283e63232839\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Vivian</td>
<td>Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>62</td>
<td>2009/02/14</td>
<td>\$452,500</td>
<td>9422</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"c1b7efa9a0b3b3a4adad81a5a0b5a0b5a0a3ada4b2efafa4b5\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Timothy</td>
<td>Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>37</td>
<td>2008/12/11</td>
<td>\$136,200</td>
<td>7580</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"0a7e24676565646f734a6e6b7e6b7e6b68666f7924646f7e\">[email&#160;protected]</a></td>
</tr>
 <tr>
<td>Jackson</td>
<td>Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>65</td>
<td>2008/09/26</td>
<td>\$645,750</td>
<td>1042</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4822662a3a292c3b20293f082c293c293c292a242d3b66262d3c\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Olivia</td>
<td>Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>64</td>
<td>2011/02/03</td>
<td>\$234,500</td>
<td>2120</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"ed82c381848c838aad898c998c998c8f81889ec3838899\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bruno</td>
<td>Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>\$163,500</td>
<td>6222</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"0a6824646b79624a6e6b7e6b7e6b68666f7924646f7e\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Sakura</td>
<td>Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>37</td>
<td>2009/08/19</td>
<td>\$139,575</td>
<td>9383</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"fb88d5829a969a96948f94bb9f9a8f9a8f9a99979e88d5959e8f\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Thor</td>
<td>Walton</td>
<td>Developer</td>
<td>New York</td>
<td>61</td>
<td>2013/08/11</td>
<td>\$98,540</td>
<td>8327</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"a3d78dd4c2cfd7cccde3c7c2d7c2d7c2c1cfc6d08dcdc6d7\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Finn</td>
<td>Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/07/07</td>
<td>\$87,500</td>
<td>2927</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"77115914161a16141f1837131603160316151b120459191203\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Serge</td>
<td>Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>64</td>
<td>2012/04/09</td>
<td>\$138,575</td>
<td>8352</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"aedd80cccfc2cad9c7c0eecacfdacfdacfccc2cbdd80c0cbda\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zenaida</td>
<td>Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>63</td>
<td>2010/01/04</td>
<td>\$125,250</td>
<td>7439</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"c5bfeba3b7a4abae85a1a4b1a4b1a4a7a9a0b6ebaba0b1\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zorita</td>
<td>Serrano</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>56</td>
<td>2012/06/01</td>
<td>\$115,000</td>
<td>4389</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"116b3f62746363707f7e51757065706570737d74623f7f7465\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jennifer</td>
 <td>Acosta</td>
<td>Junior Javascript Developer</td>
<td>Edinburgh</td>
<td>43</td>
<td>2013/02/01</td>
<td>\$75,650</td>
<td>3431</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"fc96d29d9f938f889dbc989d889d889d9e90998fd2929988\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Cara</td>
<td>Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>\$145,600</td>
<td>3990</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"94f7bae7e0f1e2f1fae7d4f0f5e0f5e0f5f6f8f1e7bafaf1e0\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hermione</td>
<td>Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>47</td>
<td>2011/03/21</td>
<td>\$356,250</td>
<td>1016</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"89e1a7ebfcfde5ecfbc9ede8fde8fde8ebe5ecfaa7e7ecfd\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Lael</td>
<td>Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>21</td>
<td>2009/02/27</td>
<td>\$103,500</td>
<td>6733</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"6a06440d180f0f182a0e0b1e0b1e0b08060f1944040f1e\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jonas</td>
<td>Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>30</td>
<td>2010/07/14</td>
<td>\$86,500</td>
 <td>8196</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"13793d727f766b727d77766153777267726772717f76603d7d7667\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Shad</td>
<td>Decker</td>
<td>Regional Director</td>
<td>Edinburgh</td>
<td>51</td>
<td>2008/11/13</td>
<td>\$183,000</td>
<td>6373</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"0a79246e6f69616f784a6e6b7e6b7e6b68666f7924646f7e\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michael</td>
<td>Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>29</td>
<td>2011/06/27</td>
<td>\$183,000</td>
<td>5384</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"5835763a2a2d3b3d183c392c392c393a343d2b76363d2c\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Donna</td>
<td>Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>27</td>
<td>2011/01/25</td>
<td>\$112,000</td>
<td>4226</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"3f5b114c51565b5a4d7f5b5e4b5e4b5e5d535a4c11515a4b\">[email&#160;protected]</a></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>

<div id=\"styleSelector\">
</div>
</div>
</div>
</div>
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


<script data-cfasync=\"false\" src=\"../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js\"></script><script type=\"text/javascript\" src=\"../files/bower_components/jquery/js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/bower_components/jquery-ui/js/jquery-ui.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/bower_components/popper.js/js/popper.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/bower_components/bootstrap/js/bootstrap.min.js\"></script>

<script src=\"../files/assets/pages/waves/js/waves.min.js\"></script>

<script type=\"text/javascript\" src=\"../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js\"></script>

<script type=\"text/javascript\" src=\"../files/bower_components/modernizr/js/modernizr.js\"></script>
<script type=\"text/javascript\" src=\"../files/bower_components/modernizr/js/css-scrollbars.js\"></script>

<script src=\"../files/bower_components/datatables.net/js/jquery.dataTables.min.js\"></script>
<script src=\"../files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js\"></script>
<script src=\"../files/assets/pages/data-table/js/jszip.min.js\"></script>
<script src=\"../files/assets/pages/data-table/js/pdfmake.min.js\"></script>
<script src=\"../files/assets/pages/data-table/js/vfs_fonts.js\"></script>
<script src=\"../files/assets/pages/data-table/extensions/responsive/js/dataTables.responsive.min.js\"></script>
<script src=\"../files/bower_components/datatables.net-buttons/js/buttons.print.min.js\"></script>
<script src=\"../files/bower_components/datatables.net-buttons/js/buttons.html5.min.js\"></script>
<script src=\"../files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js\"></script>
<script src=\"../files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js\"></script>
<script src=\"../files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js\"></script>

<script src=\"../files/assets/pages/data-table/extensions/responsive/js/responsive-custom.js\"></script>
<script src=\"../files/assets/js/pcoded.min.js\"></script>
<script src=\"../files/assets/js/vertical/vertical-layout.min.js\"></script>
<script src=\"../files/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/assets/js/script.js\"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/dt-ext-responsive.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 12:17:10 GMT -->
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
        return "admindek-html/default/dt-ext-responsive.html";
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

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/dt-ext-responsive.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 12:17:09 GMT -->
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

<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/pages/data-table/css/buttons.dataTables.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/pages/data-table/extensions/responsive/css/responsive.dataTables.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/css/style.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/css/pages.css\">
</head>
<body>

<div class=\"loader-bg\">
<div class=\"loader-bar\"></div>
</div>

<div id=\"pcoded\" class=\"pcoded\">
<div class=\"pcoded-overlay-box\"></div>
<div class=\"pcoded-container navbar-wrapper\">

<nav class=\"navbar header-navbar pcoded-header\">
<div class=\"navbar-wrapper\">
<div class=\"navbar-logo\">
<a href=\"../index.html\">
<img class=\"img-fluid\" src=\"../files/assets/images/logo.png\" alt=\"Theme-Logo\" />
</a>
<a class=\"mobile-menu\" id=\"mobile-collapse\" href=\"#!\">
<i class=\"feather icon-menu icon-toggle-right\"></i>
</a>
<a class=\"mobile-options waves-effect waves-light\">
<i class=\"feather icon-more-horizontal\"></i>
 </a>
</div>
<div class=\"navbar-container container-fluid\">
<ul class=\"nav-left\">
<li class=\"header-search\">
<div class=\"main-search morphsearch-search\">
<div class=\"input-group\">
<span class=\"input-group-prepend search-close\">
<i class=\"feather icon-x input-group-text\"></i>
</span>
<input type=\"text\" class=\"form-control\" placeholder=\"Enter Keyword\">
<span class=\"input-group-append search-btn\">
<i class=\"feather icon-search input-group-text\"></i>
</span>
</div>
</div>
</li>
<li>
<a href=\"#!\" onclick=\"javascript:toggleFullScreen()\" class=\"waves-effect waves-light\">
<i class=\"full-screen feather icon-maximize\"></i>
</a>
</li>
</ul>
<ul class=\"nav-right\">
<li class=\"header-notification\">
<div class=\"dropdown-primary dropdown\">
<div class=\"dropdown-toggle\" data-toggle=\"dropdown\">
<i class=\"feather icon-bell\"></i>
<span class=\"badge bg-c-red\">5</span>
</div>
<ul class=\"show-notification notification-view dropdown-menu\" data-dropdown-in=\"fadeIn\" data-dropdown-out=\"fadeOut\">
<li>
<h6>Notifications</h6>
<label class=\"label label-danger\">New</label>
</li>
<li>
<div class=\"media\">
<img class=\"img-radius\" src=\"../files/assets/images/avatar-4.jpg\" alt=\"Generic placeholder image\">
<div class=\"media-body\">
<h5 class=\"notification-user\">John Doe</h5>
<p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class=\"notification-time\">30 minutes ago</span>
</div>
</div>
</li>
<li>
<div class=\"media\">
<img class=\"img-radius\" src=\"../files/assets/images/avatar-3.jpg\" alt=\"Generic placeholder image\">
<div class=\"media-body\">
<h5 class=\"notification-user\">Joseph William</h5>
<p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class=\"notification-time\">30 minutes ago</span>
</div>
</div>
</li>
<li>
<div class=\"media\">
<img class=\"img-radius\" src=\"../files/assets/images/avatar-4.jpg\" alt=\"Generic placeholder image\">
<div class=\"media-body\">
<h5 class=\"notification-user\">Sara Soudein</h5>
<p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class=\"notification-time\">30 minutes ago</span>
</div>
</div>
</li>
</ul>
</div>
</li>
<li class=\"header-notification\">
<div class=\"dropdown-primary dropdown\">
<div class=\"displayChatbox dropdown-toggle\" data-toggle=\"dropdown\">
<i class=\"feather icon-message-square\"></i>
<span class=\"badge bg-c-green\">3</span>
</div>
</div>
</li>
<li class=\"user-profile header-notification\">
<div class=\"dropdown-primary dropdown\">
<div class=\"dropdown-toggle\" data-toggle=\"dropdown\">
<img src=\"../files/assets/images/avatar-4.jpg\" class=\"img-radius\" alt=\"User-Profile-Image\">
<span>John Doe</span>
<i class=\"feather icon-chevron-down\"></i>
</div>
<ul class=\"show-notification profile-notification dropdown-menu\" data-dropdown-in=\"fadeIn\" data-dropdown-out=\"fadeOut\">
<li>
<a href=\"#!\">
<i class=\"feather icon-settings\"></i> Settings
</a>
</li>
<li>
<a href=\"#\">
<i class=\"feather icon-user\"></i> Profile
</a>
</li>
<li>
<a href=\"email-inbox.html\">
<i class=\"feather icon-mail\"></i> My Messages
</a>
</li>
<li>
<a href=\"auth-lock-screen.html\">
<i class=\"feather icon-lock\"></i> Lock Screen
</a>
</li>
<li>
<a href=\"auth-sign-in-social.html\">
<i class=\"feather icon-log-out\"></i> Logout
</a>
</li>
</ul>
</div>
</li>
</ul>
</div>
</div>
</nav>

<div id=\"sidebar\" class=\"users p-chat-user showChat\">
<div class=\"had-container\">
<div class=\"p-fixed users-main\">
<div class=\"user-box\">
<div class=\"chat-search-box\"> 
<a class=\"back_friendlist\">
<i class=\"feather icon-x\"></i>
</a>
<div class=\"right-icon-control\">
<div class=\"input-group input-group-button\">
<input type=\"text\" id=\"search-friends\" name=\"footer-email\" class=\"form-control\" placeholder=\"Search Friend\">
<div class=\"input-group-append\">
<button class=\"btn btn-primary waves-effect waves-light\" type=\"button\"><i class=\"feather icon-search\"></i></button>
</div>
</div>
</div>
</div>
<div class=\"main-friend-list\">
<div class=\"media userlist-box waves-effect waves-light\" data-id=\"1\" data-status=\"online\" data-username=\"Josephin Doe\">
<a class=\"media-left\" href=\"#!\">
<img class=\"media-object img-radius img-radius\" src=\"../files/assets/images/avatar-3.jpg\" alt=\"Generic placeholder image \">
<div class=\"live-status bg-success\"></div>
</a>
<div class=\"media-body\">
<div class=\"chat-header\">Josephin Doe</div>
</div>
</div>
<div class=\"media userlist-box waves-effect waves-light\" data-id=\"2\" data-status=\"online\" data-username=\"Lary Doe\">
<a class=\"media-left\" href=\"#!\">
<img class=\"media-object img-radius\" src=\"../files/assets/images/avatar-2.jpg\" alt=\"Generic placeholder image\">
<div class=\"live-status bg-success\"></div>
</a>
<div class=\"media-body\">
<div class=\"f-13 chat-header\">Lary Doe</div>
</div>
</div>
<div class=\"media userlist-box waves-effect waves-light\" data-id=\"3\" data-status=\"online\" data-username=\"Alice\">
<a class=\"media-left\" href=\"#!\">
<img class=\"media-object img-radius\" src=\"../files/assets/images/avatar-4.jpg\" alt=\"Generic placeholder image\">
<div class=\"live-status bg-success\"></div>
</a>
<div class=\"media-body\">
<div class=\"f-13 chat-header\">Alice</div>
</div>
</div>
<div class=\"media userlist-box waves-effect waves-light\" data-id=\"4\" data-status=\"offline\" data-username=\"Alia\">
<a class=\"media-left\" href=\"#!\">
<img class=\"media-object img-radius\" src=\"../files/assets/images/avatar-3.jpg\" alt=\"Generic placeholder image\">
<div class=\"live-status bg-default\"></div>
</a>
<div class=\"media-body\">
<div class=\"f-13 chat-header\">Alia<small class=\"d-block text-muted\">10 min ago</small></div>
</div>
</div>
<div class=\"media userlist-box waves-effect waves-light\" data-id=\"5\" data-status=\"offline\" data-username=\"Suzen\">
<a class=\"media-left\" href=\"#!\">
<img class=\"media-object img-radius\" src=\"../files/assets/images/avatar-2.jpg\" alt=\"Generic placeholder image\">
<div class=\"live-status bg-default\"></div>
</a>
<div class=\"media-body\">
<div class=\"f-13 chat-header\">Suzen<small class=\"d-block text-muted\">15 min ago</small></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class=\"showChat_inner\">
<div class=\"media chat-inner-header\">
<a class=\"back_chatBox\">
<i class=\"feather icon-x\"></i> Josephin Doe
</a>
</div>
<div class=\"main-friend-chat\">
<div class=\"media chat-messages\">
<a class=\"media-left photo-table\" href=\"#!\">
<img class=\"media-object img-radius img-radius m-t-5\" src=\"../files/assets/images/avatar-2.jpg\" alt=\"Generic placeholder image\">
</a>
<div class=\"media-body chat-menu-content\">
<div class=\"\">
<p class=\"chat-cont\">I'm just looking around. Will you tell me something about yourself?</p>
</div>
<p class=\"chat-time\">8:20 a.m.</p>
</div>
</div>
<div class=\"media chat-messages\">
<div class=\"media-body chat-menu-reply\">
<div class=\"\">
<p class=\"chat-cont\">Ohh! very nice</p>
</div>
<p class=\"chat-time\">8:22 a.m.</p>
</div>
</div>
<div class=\"media chat-messages\">
<a class=\"media-left photo-table\" href=\"#!\">
<img class=\"media-object img-radius img-radius m-t-5\" src=\"../files/assets/images/avatar-2.jpg\" alt=\"Generic placeholder image\">
</a>
<div class=\"media-body chat-menu-content\">
<div class=\"\">
<p class=\"chat-cont\">can you come with me?</p>
</div>
<p class=\"chat-time\">8:20 a.m.</p>
</div>
</div>
</div>
<div class=\"chat-reply-box\">
<div class=\"right-icon-control\">
<div class=\"input-group input-group-button\">
<input type=\"text\" class=\"form-control\" placeholder=\"Write hear . . \">
<div class=\"input-group-append\">
<button class=\"btn btn-primary waves-effect waves-light\" type=\"button\"><i class=\"feather icon-message-circle\"></i></button>
</div>
</div>
</div>
</div>
</div>

<div class=\"pcoded-main-container\">
<div class=\"pcoded-wrapper\">

<nav class=\"pcoded-navbar\">
<div class=\"nav-list\">
<div class=\"pcoded-inner-navbar main-menu\">
<div class=\"pcoded-navigation-label\">Navigation</div>
<ul class=\"pcoded-item pcoded-left-item\">
<li class=\"pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\"><i class=\"feather icon-home\"></i></span>
<span class=\"pcoded-mtext\">Dashboard</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"../index.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Default</span>
</a>
</li>
<li class=\"\">
<a href=\"dashboard-crm.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">CRM</span>
</a>
</li>
<li class=\"\">
<a href=\"dashboard-analytics.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Analytics</span>
<span class=\"pcoded-badge label label-info \">NEW</span>
</a>
</li>
</ul>
</li>
<li class=\"pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\"><i class=\"feather icon-sidebar\"></i></span>
<span class=\"pcoded-mtext\">Page layouts</span>
<span class=\"pcoded-badge label label-warning\">NEW</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\" pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Vertical</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"menu-static.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Static Layout</span>
</a>
</li>
<li class=\"\">
<a href=\"menu-header-fixed.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Header Fixed</span>
</a>
</li>
<li class=\"\">
<a href=\"menu-compact.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Compact</span>
 </a>
</li>
<li class=\"\">
<a href=\"menu-sidebar.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Sidebar Fixed</span>
</a>
</li>
</ul>
</li>
<li class=\" pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Horizontal</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"menu-horizontal-static.html\" target=\"_blank\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Static Layout</span>
</a>
</li>
<li class=\"\">
<a href=\"menu-horizontal-fixed.html\" target=\"_blank\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Fixed layout</span>
</a>
</li>
<li class=\"\">
<a href=\"menu-horizontal-icon.html\" target=\"_blank\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Static With Icon</span>
</a>
</li>
<li class=\"\">
<a href=\"menu-horizontal-icon-fixed.html\" target=\"_blank\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Fixed With Icon</span>
</a>
</li>
</ul>
</li>
<li class=\"\">
<a href=\"menu-bottom.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Bottom Menu</span>
</a>
</li>
</ul>
</li>
<li class=\"\">
<a href=\"navbar-light.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-menu\"></i>
</span>
<span class=\"pcoded-mtext\">Navigation</span>
</a>
</li>
<li class=\"pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-layers\"></i>
</span>
<span class=\"pcoded-mtext\">Widget</span>
<span class=\"pcoded-badge label label-danger\">100+</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"widget-statistic.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Statistic</span>
</a>
</li>
<li class=\"\">
<a href=\"widget-data.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Data</span>
</a>
</li>
<li class=\"\">
<a href=\"widget-chart.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Chart Widget</span>
</a>
</li>
</ul>
</li>
</ul>
<div class=\"pcoded-navigation-label\">UI Element</div>
<ul class=\"pcoded-item pcoded-left-item\">
<li class=\"pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-box\"></i>
</span>
<span class=\"pcoded-mtext\">Basic</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"alert.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Alert</span>
</a>
</li>
<li class=\"\">
<a href=\"breadcrumb.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Breadcrumbs</span>
</a>
</li>
<li class=\"\">
<a href=\"button.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Button</span>
</a>
</li>
<li class=\"\">
<a href=\"box-shadow.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Box-Shadow</span>
</a>
</li>
<li class=\"\">
<a href=\"accordion.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Accordion</span>
</a>
</li>
<li class=\"\">
<a href=\"generic-class.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Generic Class</span>
</a>
</li>
<li class=\" \">
<a href=\"tabs.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Tabs</span>
</a>
</li>
<li class=\" \">
<a href=\"color.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Color</span>
</a>
</li>
<li class=\" \">
<a href=\"label-badge.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Label Badge</span>
</a>
</li>
<li class=\" \">
<a href=\"progress-bar.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Progress Bar</span>
</a>
</li>
<li class=\" \">
<a href=\"list.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">List</span>
</a>
</li>
<li class=\" \">
<a href=\"tooltip.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Tooltip And Popover</span>
</a>
</li>
<li class=\" \">
<a href=\"typography.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Typography</span>
</a>
</li>
<li class=\" \">
<a href=\"other.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Other</span>
</a>
</li>
</ul>
</li>
<li class=\"pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-gitlab\"></i>
</span>
<span class=\"pcoded-mtext\">Advance</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\" \">
<a href=\"draggable.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Draggable</span>
</a>
</li>
</li>
<li class=\" \">
<a href=\"modal.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Modal</span>
</a>
</li>
<li class=\" \">
<a href=\"notification.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Notifications</span>
</a>
</li>
<li class=\" \">
<a href=\"rating.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Rating</span>
</a>
</li>
<li class=\" \">
<a href=\"range-slider.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Range Slider</span>
</a>
</li>
<li class=\" \">
<a href=\"slider.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Slider</span>
</a>
</li>
<li class=\" \">
<a href=\"syntax-highlighter.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Syntax Highlighter</span>
</a>
</li>
<li class=\" \">
<a href=\"tour.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Tour</span>
</a>
</li>
<li class=\" \">
<a href=\"treeview.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Tree View</span>
</a>
</li>
<li class=\" \">
<a href=\"nestable.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Nestable</span>
</a>
</li>
<li class=\" \">
<a href=\"toolbar.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Toolbar</span>
</a>
</li>
</ul>
</li>
<li class=\"pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-package\"></i>
</span>
<span class=\"pcoded-mtext\">Extra</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\" \">
<a href=\"session-timeout.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Session Timeout</span>
</a>
</li>
<li class=\" \">
<a href=\"session-idle-timeout.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Session Idle Timeout</span>
</a>
</li>
<li class=\" \">
<a href=\"offline.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Offline</span>
</a>
</li>
</ul>
</li>
<li class=\" \">
<a href=\"animation.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-aperture rotate-refresh\"></i>
</span>
<span class=\"pcoded-mtext\">Animations</span>
</a>
</li>
<li class=\"pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-command\"></i>
</span>
<span class=\"pcoded-mtext\">Icons</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\" \">
<a href=\"icon-font-awesome.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Font Awesome</span>
</a>
</li>
<li class=\" \">
<a href=\"icon-themify.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Themify</span>
</a>
</li>
<li class=\" \">
<a href=\"icon-simple-line.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Simple Line Icon</span>
</a>
</li>
</ul>
</li>
</ul>
<div class=\"pcoded-navigation-label\">Forms</div>
<ul class=\"pcoded-item pcoded-left-item\">
<li class=\"pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-clipboard\"></i>
</span>
<span class=\"pcoded-mtext\">Form</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\" \">
<a href=\"form-elements-component.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Components</span>
</a>
</li>
<li class=\" \">
<a href=\"form-elements-add-on.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Add-On</span>
</a>
</li>
<li class=\" \">
<a href=\"form-elements-advance.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Advance</span>
</a>
</li>
<li class=\" \">
<a href=\"form-validation.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Validation</span>
</a>
</li>
</ul>
</li>
<li class=\" \">
<a href=\"form-picker.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-edit-1\"></i>
</span>
<span class=\"pcoded-mtext\">Form Picker</span>
<span class=\"pcoded-badge label label-warning\">NEW</span>
</a>
</li>
<li class=\" \">
<a href=\"form-select.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-feather\"></i>
</span>
<span class=\"pcoded-mtext\">Form Select</span>
</a>
</li>
<li class=\" \">
<a href=\"form-masking.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-shield\"></i>
</span>
<span class=\"pcoded-mtext\">Form Masking</span>
</a>
</li>
<li class=\" \">
<a href=\"form-wizard.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-tv\"></i>
</span>
<span class=\"pcoded-mtext\">Form Wizard</span>
</a>
</li>
</ul>
<div class=\"pcoded-navigation-label\">Tables</div>
<ul class=\"pcoded-item pcoded-left-item\">
<li class=\"pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-credit-card\"></i>
</span>
<span class=\"pcoded-mtext\">Bootstrap Table</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\" \">
<a href=\"bs-basic-table.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Basic Table</span>
</a>
</li>
<li class=\" \">
<a href=\"bs-table-sizing.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Sizing Table</span>
</a>
</li>
<li class=\" \">
<a href=\"bs-table-border.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Border Table</span>
</a>
</li>
<li class=\" \">
<a href=\"bs-table-styling.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Styling Table</span>
</a>
</li>
</ul>
</li>
<li class=\"pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-inbox\"></i>
</span>
<span class=\"pcoded-mtext\">Data Table</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\" \">
<a href=\"dt-basic.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Basic Initialization</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-advance.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Advance Initialization</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-styling.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Styling</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-api.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">API</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-ajax.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Ajax</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-server-side.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Server Side</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-plugin.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Plug-In</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-data-sources.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Data Sources</span>
</a>
</li>
</ul>
</li>
<li class=\"pcoded-hasmenu active pcoded-trigger\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-server\"></i>
</span>
<span class=\"pcoded-mtext\">DT Extensions</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\" \">
<a href=\"dt-ext-autofill.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">AutoFill</span>
</a>
</li>
<li class=\"pcoded-hasmenu\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Button</span>
 </a>
<ul class=\"pcoded-submenu\">
<li class=\" \">
<a href=\"dt-ext-basic-buttons.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Basic Button</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-ext-buttons-html-5-data-export.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Data Export</span>
</a>
</li>
</ul>
</li>
<li class=\" \">
<a href=\"dt-ext-col-reorder.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Col Reorder</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-ext-fixed-columns.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Fixed Columns</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-ext-fixed-header.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Fixed Header</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-ext-key-table.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Key Table</span>
</a>
</li>
<li class=\"active\">
<a href=\"dt-ext-responsive.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Responsive</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-ext-row-reorder.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Row Reorder</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-ext-scroller.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Scroller</span>
</a>
</li>
<li class=\" \">
<a href=\"dt-ext-select.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Select Table</span>
</a>
 </li>
</ul>
</li>
<li class=\" \">
<a href=\"foo-table.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-hash\"></i>
</span>
<span class=\"pcoded-mtext\">FooTable</span>
</a>
</li>
<li class=\"pcoded-hasmenu \">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-airplay\"></i>
</span>
<span class=\"pcoded-mtext\">Handson Table</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"handson-appearance.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Appearance</span>
</a>
</li>
<li class=\"\">
<a href=\"handson-data-operation.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Data Operation</span>
</a>
</li>
<li class=\"\">
<a href=\"handson-rows-cols.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Rows Columns</span>
</a>
</li>
<li class=\"\">
<a href=\"handson-columns-only.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Columns Only</span>
</a>
</li>
<li class=\"\">
<a href=\"handson-cell-features.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Cell Features</span>
</a>
</li>
<li class=\"\">
<a href=\"handson-cell-types.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Cell Types</span>
</a>
</li>
<li class=\"\">
<a href=\"handson-integrations.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Integrations</span>
</a>
</li>
<li class=\"\">
<a href=\"handson-rows-only.html\" class=\"waves-effect waves-dark\">
 <span class=\"pcoded-mtext\">Rows Only</span>
</a>
</li>
<li class=\"\">
<a href=\"handson-utilities.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Utilities</span>
</a>
</li>
</ul>
</li>
<li class=\"\">
<a href=\"editable-table.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-edit\"></i>
</span>
<span class=\"pcoded-mtext\">Editable Table</span>
</a>
</li>
</ul>
<div class=\"pcoded-navigation-label\">Chart And Maps</div>
<ul class=\"pcoded-item pcoded-left-item\">
<li class=\"pcoded-hasmenu \">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-pie-chart\"></i>
</span>
<span class=\"pcoded-mtext\">Charts</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"chart-google.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Google Chart</span>
</a>
</li>
<li class=\"\">
<a href=\"chart-chartjs.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">ChartJs</span>
</a>
</li>
<li class=\"\">
<a href=\"chart-list.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">List Chart</span>
</a>
</li>
<li class=\"\">
<a href=\"chart-float.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Float Chart</span>
</a>
</li>
<li class=\"\">
<a href=\"chart-knob.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Knob chart</span>
</a>
</li>
<li class=\"\">
<a href=\"chart-morris.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Morris Chart</span>
</a>
</li>
<li class=\"\">
<a href=\"chart-nvd3.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Nvd3 Chart</span>
</a>
</li>
<li class=\"\">
<a href=\"chart-peity.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Peity Chart</span>
</a>
</li>
<li class=\"\">
<a href=\"chart-radial.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Radial Chart</span>
</a>
</li>
<li class=\"\">
<a href=\"chart-rickshaw.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Rickshaw Chart</span>
</a>
</li>
<li class=\"\">
<a href=\"chart-sparkline.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Sparkline Chart</span>
</a>
</li>
<li class=\"\">
<a href=\"chart-c3.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">C3 Chart</span>
</a>
</li>
</ul>
</li>
<li class=\"pcoded-hasmenu \">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-map\"></i>
</span>
<span class=\"pcoded-mtext\">Maps</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"map-google.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Google Maps</span>
</a>
</li>
<li class=\"\">
<a href=\"map-vector.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Vector Maps</span>
</a>
</li>
<li class=\"\">
<a href=\"map-api.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Google Map Search API</span>
</a>
 </li>
<li class=\"\">
<a href=\"location.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Location</span>
</a>
</li>
</ul>
</li>
</ul>
<div class=\"pcoded-navigation-label\">Pages</div>
<ul class=\"pcoded-item pcoded-left-item\">
<li class=\"pcoded-hasmenu \">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-unlock\"></i>
</span>
<span class=\"pcoded-mtext\">Authentication</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"auth-sign-in-social.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Login</span>
</a>
</li>
<li class=\"\">
<a href=\"auth-sign-up-social.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Registration</span>
</a>
</li>
<li class=\"\">
<a href=\"auth-reset-password.html\" target=\"_blank\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Forgot Password</span>
</a>
</li>
<li class=\"\">
<a href=\"auth-lock-screen.html\" target=\"_blank\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Lock Screen</span>
</a>
</li>
</ul>
</li>
<li class=\"pcoded-hasmenu \">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-sliders\"></i>
</span>
<span class=\"pcoded-mtext\">Maintenance</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"error.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Error</span>
</a>
</li>
<li class=\"\">
<a href=\"comming-soon.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Comming Soon</span>
</a>
</li>
<li class=\"\">
<a href=\"offline-ui.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Offline UI</span>
</a>
</li>
</ul>
</li>
<li class=\"pcoded-hasmenu \">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-mail\"></i>
</span>
<span class=\"pcoded-mtext\">Email</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"email-compose.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Compose Email</span>
</a>
</li>
<li class=\"\">
<a href=\"email-inbox.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Inbox</span>
</a>
</li>
<li class=\"\">
<a href=\"email-read.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Read Mail</span>
</a>
</li>
</ul>
</li>
</ul>
<div class=\"pcoded-navigation-label\">App</div>
<ul class=\"pcoded-item pcoded-left-item\">
<a href=\"todo.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-bookmark\"></i>
</span>
<span class=\"pcoded-mtext\">To-Do</span>
</a>
</li>
</ul>
<div class=\"pcoded-navigation-label\">Extension</div>
<ul class=\"pcoded-item pcoded-left-item\">
<li class=\"pcoded-hasmenu \">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-file-plus\"></i>
</span>
<span class=\"pcoded-mtext\">Editor</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"ck-editor.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">CK-Editor</span>
</a>
 </li>
<li class=\"\">
<a href=\"wysiwyg-editor.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">WYSIWYG Editor</span>
</a>
</li>
</ul>
</li>
<li class=\"pcoded-hasmenu \">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-calendar\"></i>
</span>
<span class=\"pcoded-mtext\">Event Calendar</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"event-full-calender.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Full Calendar</span>
</a>
</li>
<li class=\"\">
<a href=\"event-clndr.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">CLNDER</span>
<span class=\"pcoded-badge label label-info\">NEW</span>
</a>
</li>
</ul>
</li>
<li class=\"\">
<a href=\"image-crop.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-scissors\"></i>
<b>IC</b>
</span>
<span class=\"pcoded-mtext\">Image Cropper</span>
</a>
</li>
<li class=\"\">
<a href=\"file-upload.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-upload-cloud\"></i>
</span>
<span class=\"pcoded-mtext\">File Upload</span>
</a>
</li>
<li class=\"\">
<a href=\"change-loges.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-briefcase\"></i>
</span>
<span class=\"pcoded-mtext\">Change Loges</span>
<span class=\"pcoded-badge label label-warning\">1.0</span>
</a>
</li>
</ul>
<div class=\"pcoded-navigation-label\">Other</div>
<ul class=\"pcoded-item pcoded-left-item\">
<li class=\"pcoded-hasmenu \">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-list\"></i>
</span>
<span class=\"pcoded-mtext\">Menu Levels</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Menu Level 2.1</span>
</a>
</li>
<li class=\"pcoded-hasmenu \">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Menu Level 2.2</span>
</a>
<ul class=\"pcoded-submenu\">
<li class=\"\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Menu Level 3.1</span>
</a>
</li>
</ul>
</li>
<li class=\"\">
<a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">Menu Level 2.3</span>
</a>
</li>
</ul>
</li>
<li class=\"\">
<a href=\"javascript:void(0)\" class=\"disabled waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-power\"></i>
<b>D</b>
</span>
<span class=\"pcoded-mtext\">Disabled Menu</span>
</a>
</li>
<li class=\"\">
<a href=\"sample-page.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-micon\">
<i class=\"feather icon-watch\"></i>
</span>
<span class=\"pcoded-mtext\">Sample Page</span>
</a>
</li>
</ul>
</div>
</div>
</nav>

<div class=\"pcoded-content\">

<div class=\"page-header card\">
<div class=\"row align-items-end\">
<div class=\"col-lg-8\">
<div class=\"page-header-title\">
<i class=\"feather icon-server bg-c-blue\"></i>
<div class=\"d-inline\">
<h5>Responsive DataTable</h5>
<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
</div>
</div>
</div>
<div class=\"col-lg-4\">
<div class=\"page-header-breadcrumb\">
<ul class=\" breadcrumb breadcrumb-title\">
<li class=\"breadcrumb-item\">
<a href=\"../index.html\"><i class=\"feather icon-home\"></i></a>
</li>
<li class=\"breadcrumb-item\"><a href=\"#!\">Data Table</a>
</li>
<li class=\"breadcrumb-item\"><a href=\"#!\">Responsive Initialization</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class=\"pcoded-inner-content\">
<div class=\"main-body\">
<div class=\"page-wrapper\">
<div class=\"page-body\">

<div class=\"card\">
<div class=\"card-header\">
<h5>Configuration Option</h5>
<span>The Responsive extension for DataTables can be applied to a DataTable in one of two ways; with a specific class name on the table, or using the DataTables initialisation options. This method shows the latter, with the responsive option being set to the boolean value true.</span>
</div>
<div class=\"card-block\">
<table id=\"res-config\" class=\"table display\">
<thead>
<tr>
<th>First name</th>
<th>Last name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
<th>Extn.</th>
<th>E-mail</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger</td>
<td>Nixon</td>
<td>System Architect</td>
<td>Edinburgh</td>
<td>61</td>
<td>2011/04/25</td>
 <td>\$320,800</td>
<td>5421</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"c1b5efafa8b9aeaf81a5a0b5a0b5a0a3ada4b2efafa4b5\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Garrett</td>
<td>Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>63</td>
<td>2011/07/25</td>
<td>\$170,750</td>
<td>8422</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f295dc859b9c86978081b2969386938693909e9781dc9c9786\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Ashton</td>
<td>Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>\$86,000</td>
<td>1562</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"31501f525e4971555045504550535d54421f5f5445\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Cedric</td>
<td>Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
<td>2012/03/29</td>
<td>\$433,060</td>
<td>6224</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"7e1d50151b1212073e1a1f0a1f0a1f1c121b0d50101b0a\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Airi</td>
<td>Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>\$162,700</td>
<td>5407</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"40216e3321342f3500242134213421222c25336e2e2534\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brielle</td>
<td>Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
 <td>61</td>
<td>2012/12/02</td>
<td>\$372,000</td>
<td>4804</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4d2f633a242121242c203e22230d292c392c392c2f21283e63232839\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Herrod</td>
<td>Chandler</td>
<td>Sales Assistant</td>
<td>San Francisco</td>
<td>59</td>
<td>2012/08/06</td>
<td>\$137,500</td>
<td>9608</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"1a723479727b747e767f685a7e7b6e7b6e7b78767f6934747f6e\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Rhona</td>
<td>Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
<td>55</td>
<td>2010/10/14</td>
<td>\$327,900</td>
<td>6200</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"e694c88287908f82958988a6828792879287848a8395c8888392\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Colleen</td>
<td>Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>39</td>
<td>2009/09/15</td>
<td>\$205,500</td>
<td>2360</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f291dc9a87808186b2969386938693909e9781dc9c9786\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Sonya</td>
<td>Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>23</td>
<td>2008/12/13</td>
<td>\$103,600</td>
<td>1667</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"7b08551d0914080f3b1f1a0f1a0f1a19171e0855151e0f\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jena</td>
<td>Gaines</td>
 <td>Office Manager</td>
<td>London</td>
<td>30</td>
<td>2008/12/19</td>
<td>\$90,560</td>
<td>3814</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"066c2861676f68637546626772677267646a637528686372\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Quinn</td>
<td>Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>22</td>
<td>2013/03/03</td>
<td>\$342,000</td>
<td>9497</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2b5a054d475245456b4f4a5f4a5f4a49474e5805454e5f\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Charde</td>
<td>Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
<td>36</td>
<td>2008/10/16</td>
<td>\$470,600</td>
<td>6741</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"63004d0e0211100b020f0f23070217021702010f06104d0d0617\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Haley</td>
<td>Kennedy</td>
<td>Senior Marketing Designer</td>
<td>London</td>
<td>43</td>
<td>2012/12/18</td>
<td>\$313,500</td>
<td>3597</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"9bf3b5f0fef5f5feffe2dbfffaeffaeffaf9f7fee8b5f5feef\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Tatyana</td>
<td>Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>19</td>
<td>2010/03/17</td>
<td>\$385,750</td>
<td>1965</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"5d29733b3429272d3c292f343e361d393c293c293c3f31382e73333829\">[email&#160;protected]</a></td>
</tr>
<tr>
 <td>Michael</td>
<td>Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>66</td>
<td>2012/11/27</td>
<td>\$198,500</td>
<td>1581</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"88e5a6fbe1e4fee9c8ece9fce9fce9eae4edfba6e6edfc\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Paul</td>
<td>Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>64</td>
<td>2010/06/09</td>
<td>\$725,000</td>
<td>3059</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f080de92898294b0949184918491929c9583de9e9584\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gloria</td>
<td>Little</td>
<td>Systems Administrator</td>
<td>New York</td>
<td>59</td>
<td>2009/04/10</td>
<td>\$237,500</td>
<td>1721</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"3a5d1456534e4e565f7a5e5b4e5b4e5b58565f4914545f4e\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bradley</td>
<td>Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>\$132,000</td>
<td>2558</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"7e1c50190c1b1b0c3e1a1f0a1f0a1f1c121b0d50101b0a\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Dai</td>
<td>Rios</td>
<td>Personnel Lead</td>
<td>Edinburgh</td>
<td>35</td>
<td>2012/09/26</td>
<td>\$217,500</td>
<td>2290</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"1b7f35697274685b7f7a6f7a6f7a79777e6835757e6f\">[email&#160;protected]</a></td>
 </tr>
<tr>
<td>Jenette</td>
<td>Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>30</td>
<td>2011/09/03</td>
<td>\$345,000</td>
<td>1937</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"8ae0a4e9ebe6eefdefe6e6caeeebfeebfeebe8e6eff9a4e4effe\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Yuri</td>
<td>Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>40</td>
<td>2009/06/25</td>
<td>\$675,000</td>
<td>6154</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"fa83d4989f888883ba9e9b8e9b8e9b98969f89d4949f8e\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Caesar</td>
<td>Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>\$106,450</td>
<td>8330</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"1c7f326a7d727f795c787d687d687d7e70796f32727968\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Doris</td>
<td>Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>23</td>
<td>2010/09/20</td>
<td>\$85,600</td>
<td>3023</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"52367c253b3e36372012363326332633303e37217c3c3726\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Angelica</td>
<td>Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>\$1,200,000</td>
 <td>5797</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"62034c10030f0d1122060316031603000e07114c0c0716\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>42</td>
<td>2010/12/22</td>
<td>\$92,575</td>
<td>8822</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"d8bff6b2b7a1bbbd98bcb9acb9acb9bab4bdabf6b6bdac\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jennifer</td>
<td>Chang</td>
<td>Regional Director</td>
<td>Singapore</td>
<td>28</td>
<td>2010/11/14</td>
<td>\$357,650</td>
<td>9239</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"72185c111a131c1532161306130613101e17015c1c1706\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brenden</td>
<td>Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>\$206,850</td>
<td>1314</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4f2d61382e28212a3d0f2b2e3b2e3b2e2d232a3c61212a3b\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Fiona</td>
<td>Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>48</td>
<td>2010/03/11</td>
<td>\$850,000</td>
<td>2947</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"badc94ddc8dfdfd4fadedbcedbcedbd8d6dfc994d4dfce\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Shou</td>
<td>Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>20</td>
 <td>2011/08/14</td>
<td>\$163,000</td>
<td>8899</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"30431e59445f4570545144514451525c55431e5e5544\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michelle</td>
<td>House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>37</td>
<td>2011/06/02</td>
<td>\$95,400</td>
<td>2769</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"c6abe8aea9b3b5a386a2a7b2a7b2a7a4aaa3b5e8a8a3b2\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Suki</td>
<td>Burks</td>
<td>Developer</td>
<td>London</td>
<td>53</td>
<td>2009/10/22</td>
<td>\$114,500</td>
<td>6832</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"7b0855190e0910083b1f1a0f1a0f1a19171e0855151e0f\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Prescott</td>
<td>Bartlett</td>
<td>Technical Author</td>
<td>London</td>
<td>27</td>
<td>2011/05/07</td>
<td>\$145,000</td>
<td>3606</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"23530d414251574f46575763474257425742414f46500d4d4657\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Cortez</td>
<td>Team Leader</td>
<td>San Francisco</td>
<td>22</td>
<td>2008/10/26</td>
<td>\$235,500</td>
<td>2860</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f89fd69b978a8c9d82b89c998c998c999a949d8bd6969d8c\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Martena</td>
<td>Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>46</td>
<td>2011/03/09</td>
<td>\$324,050</td>
<td>8240</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f994d7949a9a8b9880b99d988d988d989b959c8ad7979c8d\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Unity</td>
<td>Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/12/09</td>
<td>\$85,675</td>
<td>5384</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"63164d0116170f061123070217021702010f06104d0d0617\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Howard</td>
<td>Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>51</td>
<td>2008/12/16</td>
<td>\$164,500</td>
<td>7031</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"452d6b2d2431232c20292105212431243124272920366b2b2031\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hope</td>
<td>Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>41</td>
<td>2010/02/12</td>
<td>\$109,850</td>
<td>6318</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"137b3d7566767d67766053777267726772717f76603d7d7667\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Vivian</td>
<td>Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>62</td>
<td>2009/02/14</td>
<td>\$452,500</td>
<td>9422</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"493f6721283b3b2c2525092d283d283d282b252c3a67272c3d\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Timothy</td>
<td>Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>37</td>
<td>2008/12/11</td>
<td>\$136,200</td>
<td>7580</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"3743195a585859524e77535643564356555b524419595243\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jackson</td>
<td>Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>65</td>
<td>2008/09/26</td>
<td>\$645,750</td>
<td>1042</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"8fe5a1edfdeeebfce7eef8cfebeefbeefbeeede3eafca1e1eafb\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Olivia</td>
<td>Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>64</td>
<td>2011/02/03</td>
<td>\$234,500</td>
<td>2120</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"503f7e3c39313e3710343124312431323c35237e3e3524\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bruno</td>
<td>Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>\$163,500</td>
<td>6222</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"62004c0c03110a22060316031603000e07114c0c0716\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Sakura</td>
<td>Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>37</td>
<td>2009/08/19</td>
<td>\$139,575</td>
<td>9383</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f281dc8b939f939f9d869db2969386938693909e9781dc9c9786\">[email&#160;protected]</a></td>
</tr>
<tr>
 <td>Thor</td>
<td>Walton</td>
<td>Developer</td>
<td>New York</td>
<td>61</td>
<td>2013/08/11</td>
<td>\$98,540</td>
<td>8327</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"eb9fc59c8a879f8485ab8f8a9f8a9f8a89878e98c5858e9f\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Finn</td>
<td>Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/07/07</td>
<td>\$87,500</td>
<td>2927</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"c0a6eea3a1ada1a3a8af80a4a1b4a1b4a1a2aca5b3eeaea5b4\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Serge</td>
<td>Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>64</td>
<td>2012/04/09</td>
<td>\$138,575</td>
<td>8352</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"7b0855191a171f0c12153b1f1a0f1a0f1a19171e0855151e0f\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zenaida</td>
<td>Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>63</td>
<td>2010/01/04</td>
<td>\$125,250</td>
<td>7439</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"dca6f2baaebdb2b79cb8bda8bda8bdbeb0b9aff2b2b9a8\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zorita</td>
<td>Serrano</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>56</td>
<td>2012/06/01</td>
<td>\$115,000</td>
<td>4389</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"fa80d4899f88889b9495ba9e9b8e9b8e9b98969f89d4949f8e\">[email&#160;protected]</a></td>
 </tr>
<tr>
<td>Jennifer</td>
<td>Acosta</td>
<td>Junior Javascript Developer</td>
<td>Edinburgh</td>
<td>43</td>
<td>2013/02/01</td>
<td>\$75,650</td>
<td>3431</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f993d7989a968a8d98b99d988d988d989b959c8ad7979c8d\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Cara</td>
<td>Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>\$145,600</td>
<td>3990</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f794d984839281929984b7939683968396959b9284d9999283\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hermione</td>
<td>Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>47</td>
<td>2011/03/21</td>
<td>\$356,250</td>
<td>1016</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"84ecaae6f1f0e8e1f6c4e0e5f0e5f0e5e6e8e1f7aaeae1f0\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Lael</td>
<td>Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>21</td>
<td>2009/02/27</td>
<td>\$103,500</td>
<td>6733</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f39fdd9481969681b3979287928792919f9680dd9d9687\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jonas</td>
<td>Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>30</td>
<td>2010/07/14</td>
<td>\$86,500</td>
 <td>8196</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"147e3a7578716c757a70716654707560756075767871673a7a7160\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Shad</td>
<td>Decker</td>
<td>Regional Director</td>
<td>Edinburgh</td>
<td>51</td>
<td>2008/11/13</td>
<td>\$183,000</td>
<td>6373</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"d7a4f9b3b2b4bcb2a597b3b6a3b6a3b6b5bbb2a4f9b9b2a3\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michael</td>
<td>Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>29</td>
<td>2011/06/27</td>
<td>\$183,000</td>
<td>5384</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"55387b372720363015313421342134373930267b3b3021\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Donna</td>
<td>Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>27</td>
<td>2011/01/25</td>
<td>\$112,000</td>
<td>4226</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"ec88c29f828588899eac888d988d988d8e80899fc2828998\">[email&#160;protected]</a></td>
</tr>
</tbody>
</table>
</div>
</div>


<div class=\"card\">
<div class=\"card-header\">
<h5>`New` Constructor</h5>
<span>Responsive will automatically detect new DataTable instances being created on a page and initialize itself if it finds the responsive option or responsive class name on the table, as shown in the other examples.</span>
</div>
<div class=\"card-block\">
<div class=\"dt-responsive table-responsive\">
<table id=\"new-cons\" class=\"table table-striped table-bordered nowrap\">
<thead>
<tr>
 <th>First name</th>
<th>Last name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
<th>Extn.</th>
<th>E-mail</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger</td>
<td>Nixon</td>
<td>System Architect</td>
<td>Edinburgh</td>
<td>61</td>
<td>2011/04/25</td>
<td>\$320,800</td>
<td>5421</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"493d672720312627092d283d283d282b252c3a67272c3d\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Garrett</td>
<td>Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>63</td>
<td>2011/07/25</td>
<td>\$170,750</td>
<td>8422</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"a5c28bd2cccbd1c0d7d6e5c1c4d1c4d1c4c7c9c0d68bcbc0d1\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Ashton</td>
<td>Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>\$86,000</td>
<td>1562</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"a7c689c4c8dfe7c3c6d3c6d3c6c5cbc2d489c9c2d3\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Cedric</td>
<td>Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
 <td>2012/03/29</td>
<td>\$433,060</td>
<td>6224</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"791a57121c151500391d180d180d181b151c0a57171c0d\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Airi</td>
<td>Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>\$162,700</td>
<td>5407</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"6b0a45180a1f041e2b0f0a1f0a1f0a09070e1845050e1f\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brielle</td>
<td>Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
<td>61</td>
<td>2012/12/02</td>
<td>\$372,000</td>
<td>4804</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"22400c554b4e4e4b434f514d4c62464356435643404e47510c4c4756\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Herrod</td>
<td>Chandler</td>
<td>Sales Assistant</td>
<td>San Francisco</td>
<td>59</td>
<td>2012/08/06</td>
<td>\$137,500</td>
<td>9608</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"9cf4b2fff4fdf2f8f0f9eedcf8fde8fde8fdfef0f9efb2f2f9e8\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Rhona</td>
<td>Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
<td>55</td>
<td>2010/10/14</td>
<td>\$327,900</td>
<td>6200</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"63114d0702150a07100c0d23070217021702010f06104d0d0617\">[email&#160;protected]</a></td>
</tr>
<tr>
 <td>Colleen</td>
<td>Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>39</td>
<td>2009/09/15</td>
<td>\$205,500</td>
<td>2360</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"1c7f3274696e6f685c787d687d687d7e70796f32727968\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Sonya</td>
<td>Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>23</td>
<td>2008/12/13</td>
<td>\$103,600</td>
<td>1667</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"a8db86cedac7dbdce8ccc9dcc9dcc9cac4cddb86c6cddc\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jena</td>
<td>Gaines</td>
<td>Office Manager</td>
<td>London</td>
<td>30</td>
<td>2008/12/19</td>
<td>\$90,560</td>
<td>3814</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2f4501484e46414a5c6f4b4e5b4e5b4e4d434a5c01414a5b\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Quinn</td>
<td>Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>22</td>
<td>2013/03/03</td>
<td>\$342,000</td>
<td>9497</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4938672f25302727092d283d283d282b252c3a67272c3d\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Charde</td>
<td>Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
<td>36</td>
<td>2008/10/16</td>
<td>\$470,600</td>
 <td>6741</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"e083ce8d81929388818c8ca0848194819481828c8593ce8e8594\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Haley</td>
<td>Kennedy</td>
<td>Senior Marketing Designer</td>
<td>London</td>
<td>43</td>
<td>2012/12/18</td>
<td>\$313,500</td>
<td>3597</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"bed690d5dbd0d0dbdac7fedadfcadfcadfdcd2dbcd90d0dbca\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Tatyana</td>
<td>Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>19</td>
<td>2010/03/17</td>
<td>\$385,750</td>
<td>1965</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"99edb7fff0ede3e9f8edebf0faf2d9fdf8edf8edf8fbf5fceab7f7fced\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michael</td>
<td>Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>66</td>
<td>2012/11/27</td>
<td>\$198,500</td>
<td>1581</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"422f6c312b2e342302262336233623202e27316c2c2736\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Paul</td>
<td>Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>64</td>
<td>2010/06/09</td>
<td>\$725,000</td>
<td>3059</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b1c19fd3c8c3d5f1d5d0c5d0c5d0d3ddd4c29fdfd4c5\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gloria</td>
<td>Little</td>
 <td>Systems Administrator</td>
<td>New York</td>
<td>59</td>
<td>2009/04/10</td>
<td>\$237,500</td>
<td>1721</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"85e2abe9ecf1f1e9e0c5e1e4f1e4f1e4e7e9e0f6abebe0f1\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bradley</td>
<td>Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>\$132,000</td>
<td>2558</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"02602c657067677042666376637663606e67712c6c6776\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Dai</td>
<td>Rios</td>
<td>Personnel Lead</td>
<td>Edinburgh</td>
<td>35</td>
<td>2012/09/26</td>
<td>\$217,500</td>
<td>2290</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2c48025e45435f6c484d584d584d4e40495f02424958\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jenette</td>
<td>Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>30</td>
<td>2011/09/03</td>
<td>\$345,000</td>
<td>1937</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"610b4f02000d0516040d0d21050015001500030d04124f0f0415\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Yuri</td>
<td>Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>40</td>
<td>2009/06/25</td>
<td>\$675,000</td>
<td>6154</td>
 <td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"fd84d39f988f8f84bd999c899c899c9f91988ed3939889\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Caesar</td>
<td>Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>\$106,450</td>
<td>8330</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"25460b53444b464065414451445144474940560b4b4051\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Doris</td>
<td>Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>23</td>
<td>2010/09/20</td>
<td>\$85,600</td>
<td>3023</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"583c762f31343c3d2a183c392c392c393a343d2b76363d2c\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Angelica</td>
<td>Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>\$1,200,000</td>
<td>5797</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"81e0aff3e0eceef2c1e5e0f5e0f5e0e3ede4f2afefe4f5\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>42</td>
<td>2010/12/22</td>
<td>\$92,575</td>
<td>8822</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"197e377376607a7c597d786d786d787b757c6a37777c6d\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jennifer</td>
<td>Chang</td>
<td>Regional Director</td>
<td>Singapore</td>
 <td>28</td>
<td>2010/11/14</td>
<td>\$357,650</td>
<td>9239</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"6c06420f040d020b2c080d180d180d0e00091f42020918\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brenden</td>
<td>Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>\$206,850</td>
<td>1314</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"583a762f393f363d2a183c392c392c393a343d2b76363d2c\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Fiona</td>
<td>Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>48</td>
<td>2010/03/11</td>
<td>\$850,000</td>
<td>2947</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"6e0840091c0b0b002e0a0f1a0f1a0f0c020b1d40000b1a\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Shou</td>
<td>Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>20</td>
<td>2011/08/14</td>
<td>\$163,000</td>
<td>8899</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"592a77302d362c193d382d382d383b353c2a77373c2d\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michelle</td>
<td>House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>37</td>
<td>2011/06/02</td>
<td>\$95,400</td>
<td>2769</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"a1cc8fc9ced4d2c4e1c5c0d5c0d5c0c3cdc4d28fcfc4d5\">[email&#160;protected]</a></td>
</tr>
 <tr>
<td>Suki</td>
<td>Burks</td>
<td>Developer</td>
<td>London</td>
<td>53</td>
<td>2009/10/22</td>
<td>\$114,500</td>
<td>6832</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"13603d716661786053777267726772717f76603d7d7667\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Prescott</td>
<td>Bartlett</td>
<td>Technical Author</td>
<td>London</td>
<td>27</td>
<td>2011/05/07</td>
<td>\$145,000</td>
<td>3606</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"1b6b35797a696f777e6f6f5b7f7a6f7a6f7a79777e6835757e6f\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Cortez</td>
<td>Team Leader</td>
<td>San Francisco</td>
<td>22</td>
<td>2008/10/26</td>
<td>\$235,500</td>
<td>2860</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"7f18511c100d0b1a053f1b1e0b1e0b1e1d131a0c51111a0b\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Martena</td>
<td>Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>46</td>
<td>2011/03/09</td>
<td>\$324,050</td>
<td>8240</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"224f0c4f414150435b62464356435643404e47510c4c4756\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Unity</td>
<td>Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/12/09</td>
 <td>\$85,675</td>
<td>5384</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b7c299d5c2c3dbd2c5f7d3d6c3d6c3d6d5dbd2c499d9d2c3\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Howard</td>
<td>Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>51</td>
<td>2008/12/16</td>
<td>\$164,500</td>
<td>7031</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"e28acc8a8396848b878e86a2868396839683808e8791cc8c8796\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hope</td>
<td>Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>41</td>
<td>2010/02/12</td>
<td>\$109,850</td>
<td>6318</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"3e5610584b5b504a5b4d7e5a5f4a5f4a5f5c525b4d10505b4a\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Vivian</td>
<td>Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>62</td>
<td>2009/02/14</td>
<td>\$452,500</td>
<td>9422</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b7c199dfd6c5c5d2dbdbf7d3d6c3d6c3d6d5dbd2c499d9d2c3\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Timothy</td>
<td>Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>37</td>
<td>2008/12/11</td>
<td>\$136,200</td>
<td>7580</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"8bffa5e6e4e4e5eef2cbefeaffeaffeae9e7eef8a5e5eeff\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jackson</td>
<td>Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>65</td>
<td>2008/09/26</td>
<td>\$645,750</td>
<td>1042</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"6e04400c1c0f0a1d060f192e0a0f1a0f1a0f0c020b1d40000b1a\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Olivia</td>
<td>Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>64</td>
<td>2011/02/03</td>
<td>\$234,500</td>
<td>2120</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"016e2f6d68606f6641656075607560636d64722f6f6475\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bruno</td>
<td>Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>\$163,500</td>
<td>6222</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"6b0945050a18032b0f0a1f0a1f0a09070e1845050e1f\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Sakura</td>
<td>Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>37</td>
<td>2009/08/19</td>
<td>\$139,575</td>
<td>9383</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2c5f02554d414d414358436c484d584d584d4e40495f02424958\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Thor</td>
<td>Walton</td>
<td>Developer</td>
<td>New York</td>
<td>61</td>
<td>2013/08/11</td>
<td>\$98,540</td>
<td>8327</td>
 <td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"9aeeb4edfbf6eef5f4dafefbeefbeefbf8f6ffe9b4f4ffee\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Finn</td>
<td>Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/07/07</td>
<td>\$87,500</td>
<td>2927</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"adcb83ceccc0cccec5c2edc9ccd9ccd9cccfc1c8de83c3c8d9\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Serge</td>
<td>Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>64</td>
<td>2012/04/09</td>
<td>\$138,575</td>
<td>8352</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"ddaef3bfbcb1b9aab4b39db9bca9bca9bcbfb1b8aef3b3b8a9\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zenaida</td>
<td>Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>63</td>
<td>2010/01/04</td>
<td>\$125,250</td>
<td>7439</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"1f6531796d7e71745f7b7e6b7e6b7e7d737a6c31717a6b\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zorita</td>
<td>Serrano</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>56</td>
<td>2012/06/01</td>
<td>\$115,000</td>
<td>4389</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b0ca9ec3d5c2c2d1dedff0d4d1c4d1c4d1d2dcd5c39eded5c4\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jennifer</td>
<td>Acosta</td>
<td>Junior Javascript Developer</td>
 <td>Edinburgh</td>
<td>43</td>
<td>2013/02/01</td>
<td>\$75,650</td>
<td>3431</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"096327686a667a7d68496d687d687d686b656c7a27676c7d\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Cara</td>
<td>Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>\$145,600</td>
<td>3990</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"80e3aef3f4e5f6e5eef3c0e4e1f4e1f4e1e2ece5f3aeeee5f4\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hermione</td>
<td>Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>47</td>
<td>2011/03/21</td>
<td>\$356,250</td>
<td>1016</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"adc583cfd8d9c1c8dfedc9ccd9ccd9cccfc1c8de83c3c8d9\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Lael</td>
<td>Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>21</td>
<td>2009/02/27</td>
<td>\$103,500</td>
<td>6733</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2f4301485d4a4a5d6f4b4e5b4e5b4e4d434a5c01414a5b\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jonas</td>
<td>Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>30</td>
<td>2010/07/14</td>
<td>\$86,500</td>
<td>8196</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"d9b3f7b8b5bca1b8b7bdbcab99bdb8adb8adb8bbb5bcaaf7b7bcad\">[email&#160;protected]</a></td>
</tr>
 <tr>
<td>Shad</td>
<td>Decker</td>
<td>Regional Director</td>
<td>Edinburgh</td>
<td>51</td>
<td>2008/11/13</td>
<td>\$183,000</td>
<td>6373</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2e5d004a4b4d454b5c6e4a4f5a4f5a4f4c424b5d00404b5a\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michael</td>
<td>Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>29</td>
<td>2011/06/27</td>
<td>\$183,000</td>
<td>5384</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4825662a3a3d2b2d082c293c293c292a242d3b66262d3c\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Donna</td>
<td>Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>27</td>
<td>2011/01/25</td>
<td>\$112,000</td>
<td>4226</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"45216b362b2c21203705212431243124272920366b2b2031\">[email&#160;protected]</a></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>


<div class=\"card\">
<div class=\"card-header\">
<h5>Immediately Show Hidden Details</h5>
<span>Responsive has the ability to display the details that it has hidden in a variety of different ways. Its default is to allow the end user to toggle the the display by clicking on a row and showing the information in a DataTables child row. At times it can be useful not to require end user interaction to display the hidden data in a responsive manner, which can be done with the childRowImmediate display type.</span>
</div>
<div class=\"card-block\">
<div class=\"dt-responsive table-responsive\">
<table id=\"show-hide-res\" class=\"table table-striped table-bordered nowrap\">
<thead>
<tr>
<th>First name</th>
<th>Last name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
<th>Extn.</th>
<th>E-mail</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger</td>
<td>Nixon</td>
<td>System Architect</td>
<td>Edinburgh</td>
<td>61</td>
<td>2011/04/25</td>
<td>\$320,800</td>
<td>5421</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"87f3a9e9eeffe8e9c7e3e6f3e6f3e6e5ebe2f4a9e9e2f3\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Garrett</td>
<td>Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>63</td>
<td>2011/07/25</td>
<td>\$170,750</td>
<td>8422</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b6d198c1dfd8c2d3c4c5f6d2d7c2d7c2d7d4dad3c598d8d3c2\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Ashton</td>
<td>Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>\$86,000</td>
<td>1562</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"9effb0fdf1e6defaffeaffeafffcf2fbedb0f0fbea\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Cedric</td>
<td>Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
<td>2012/03/29</td>
<td>\$433,060</td>
<td>6224</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"284b06434d444451684c495c495c494a444d5b06464d5c\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Airi</td>
<td>Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>\$162,700</td>
<td>5407</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"caabe4b9abbea5bf8aaeabbeabbeaba8a6afb9e4a4afbe\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brielle</td>
<td>Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
<td>61</td>
<td>2012/12/02</td>
<td>\$372,000</td>
<td>4804</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"9efcb0e9f7f2f2f7fff3edf1f0defaffeaffeafffcf2fbedb0f0fbea\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Herrod</td>
<td>Chandler</td>
<td>Sales Assistant</td>
<td>San Francisco</td>
<td>59</td>
<td>2012/08/06</td>
<td>\$137,500</td>
<td>9608</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"432b6d202b222d272f263103272237223722212f26306d2d2637\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Rhona</td>
<td>Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
<td>55</td>
<td>2010/10/14</td>
<td>\$327,900</td>
<td>6200</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"493b672d283f202d3a2627092d283d28\">[email&#160;protected]</a>tables.net</td>
</tr>
<tr>
<td>Colleen</td>
<td>Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>39</td>
<td>2009/09/15</td>
<td>\$205,500</td>
<td>2360</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"c1a2efa9b4b3b2b581a5a0b5a0b5a0a3ada4b2efafa4b5\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Sonya</td>
<td>Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>23</td>
<td>2008/12/13</td>
<td>\$103,600</td>
<td>1667</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"fb88d59d8994888fbb9f9a8f9a8f9a99979e88d5959e8f\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jena</td>
<td>Gaines</td>
<td>Office Manager</td>
<td>London</td>
<td>30</td>
<td>2008/12/19</td>
<td>\$90,560</td>
<td>3814</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2b41054c4a42454e586b4f4a5f4a5f4a49474e5805454e5f\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Quinn</td>
<td>Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>22</td>
<td>2013/03/03</td>
<td>\$342,000</td>
<td>9497</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"ff8ed19993869191bf9b9e8b9e8b9e9d939a8cd1919a8b\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Charde</td>
<td>Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
 <td>36</td>
<td>2008/10/16</td>
<td>\$470,600</td>
<td>6741</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b2d19cdfd3c0c1dad3dedef2d6d3c6d3c6d3d0ded7c19cdcd7c6\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Haley</td>
<td>Kennedy</td>
<td>Senior Marketing Designer</td>
<td>London</td>
<td>43</td>
<td>2012/12/18</td>
<td>\$313,500</td>
<td>3597</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b6de98ddd3d8d8d3d2cff6d2d7c2d7c2d7d4dad3c598d8d3c2\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Tatyana</td>
<td>Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>19</td>
<td>2010/03/17</td>
<td>\$385,750</td>
<td>1965</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"6d19430b0419171d0c191f040e062d090c190c190c0f01081e43030819\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michael</td>
<td>Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>66</td>
<td>2012/11/27</td>
<td>\$198,500</td>
<td>1581</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b3de9dc0dadfc5d2f3d7d2c7d2c7d2d1dfd6c09dddd6c7\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Paul</td>
<td>Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>64</td>
<td>2010/06/09</td>
<td>\$725,000</td>
<td>3059</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"21510f4358534561454055405540434d44520f4f4455\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gloria</td>
<td>Little</td>
<td>Systems Administrator</td>
<td>New York</td>
<td>59</td>
<td>2009/04/10</td>
<td>\$237,500</td>
<td>1721</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"9afdb4f6f3eeeef6ffdafefbeefbeefbf8f6ffe9b4f4ffee\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bradley</td>
<td>Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>\$132,000</td>
<td>2558</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4e2c60293c2b2b3c0e2a2f3a2f3a2f2c222b3d60202b3a\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Dai</td>
<td>Rios</td>
<td>Personnel Lead</td>
<td>Edinburgh</td>
<td>35</td>
<td>2012/09/26</td>
<td>\$217,500</td>
<td>2290</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"cfabe1bda6a0bc8fabaebbaebbaeada3aabce1a1aabb\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jenette</td>
<td>Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>30</td>
<td>2011/09/03</td>
<td>\$345,000</td>
<td>1937</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"771d5914161b1300121b1b37131603160316151b120459191203\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Yuri</td>
<td>Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>40</td>
<td>2009/06/25</td>
 <td>\$675,000</td>
<td>6154</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"6d14430f081f1f142d090c190c190c0f01081e43030819\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Caesar</td>
<td>Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>\$106,450</td>
<td>8330</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"7f1c51091e111c1a3f1b1e0b1e0b1e1d131a0c51111a0b\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Doris</td>
<td>Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>23</td>
<td>2010/09/20</td>
<td>\$85,600</td>
<td>3023</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"81e5aff6e8ede5e4f3c1e5e0f5e0f5e0e3ede4f2afefe4f5\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Angelica</td>
<td>Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>\$1,200,000</td>
<td>5797</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"ee8fc09c8f83819dae8a8f9a8f9a8f8c828b9dc0808b9a\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>42</td>
<td>2010/12/22</td>
<td>\$92,575</td>
<td>8822</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2c4b024643554f496c484d584d584d4e40495f02424958\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jennifer</td>
<td>Chang</td> 
<td>Regional Director</td>
<td>Singapore</td>
<td>28</td>
<td>2010/11/14</td>
<td>\$357,650</td>
<td>9239</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b0da9ed3d8d1ded7f0d4d1c4d1c4d1d2dcd5c39eded5c4\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brenden</td>
<td>Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>\$206,850</td>
<td>1314</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"c7a5e9b0a6a0a9a2b587a3a6b3a6b3a6a5aba2b4e9a9a2b3\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Fiona</td>
<td>Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>48</td>
<td>2010/03/11</td>
<td>\$850,000</td>
<td>2947</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"5a3c743d283f3f341a3e3b2e3b2e3b38363f2974343f2e\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Shou</td>
<td>Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>20</td>
<td>2011/08/14</td>
<td>\$163,000</td>
<td>8899</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f88bd6918c978db89c998c998c999a949d8bd6969d8c\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michelle</td>
<td>House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>37</td>
<td>2011/06/02</td>
<td>\$95,400</td>
<td>2769</td>
 <td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"0c61226463797f694c686d786d786d6e60697f22626978\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Suki</td>
<td>Burks</td>
<td>Developer</td>
<td>London</td>
<td>53</td>
<td>2009/10/22</td>
<td>\$114,500</td>
<td>6832</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"e192cf8394938a92a1858095809580838d8492cf8f8495\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Prescott</td>
<td>Bartlett</td>
<td>Technical Author</td>
<td>London</td>
<td>27</td>
<td>2011/05/07</td>
<td>\$145,000</td>
<td>3606</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"aede80cccfdcdac2cbdadaeecacfdacfdacfccc2cbdd80c0cbda\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Cortez</td>
<td>Team Leader</td>
<td>San Francisco</td>
<td>22</td>
<td>2008/10/26</td>
<td>\$235,500</td>
<td>2860</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"abcc85c8c4d9dfced1ebcfcadfcadfcac9c7ced885c5cedf\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Martena</td>
<td>Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>46</td>
<td>2011/03/09</td>
<td>\$324,050</td>
<td>8240</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"0a6724676969786b734a6e6b7e6b7e6b68666f7924646f7e\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Unity</td>
<td>Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/12/09</td>
<td>\$85,675</td>
<td>5384</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"780d561a0d0c141d0a381c190c190c191a141d0b56161d0c\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Howard</td>
<td>Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>51</td>
<td>2008/12/16</td>
<td>\$164,500</td>
<td>7031</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"49216721283d2f202c252d092d283d283d282b252c3a67272c3d\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hope</td>
<td>Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>41</td>
<td>2010/02/12</td>
<td>\$109,850</td>
<td>6318</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4d25632b38282339283e0d292c392c392c2f21283e63232839\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Vivian</td>
<td>Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>62</td>
<td>2009/02/14</td>
<td>\$452,500</td>
<td>9422</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"c1b7efa9a0b3b3a4adad81a5a0b5a0b5a0a3ada4b2efafa4b5\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Timothy</td>
<td>Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>37</td>
<td>2008/12/11</td>
<td>\$136,200</td>
<td>7580</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"0a7e24676565646f734a6e6b7e6b7e6b68666f7924646f7e\">[email&#160;protected]</a></td>
</tr>
 <tr>
<td>Jackson</td>
<td>Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>65</td>
<td>2008/09/26</td>
<td>\$645,750</td>
<td>1042</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4822662a3a292c3b20293f082c293c293c292a242d3b66262d3c\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Olivia</td>
<td>Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>64</td>
<td>2011/02/03</td>
<td>\$234,500</td>
<td>2120</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"ed82c381848c838aad898c998c998c8f81889ec3838899\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bruno</td>
<td>Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>\$163,500</td>
<td>6222</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"0a6824646b79624a6e6b7e6b7e6b68666f7924646f7e\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Sakura</td>
<td>Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>37</td>
<td>2009/08/19</td>
<td>\$139,575</td>
<td>9383</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"fb88d5829a969a96948f94bb9f9a8f9a8f9a99979e88d5959e8f\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Thor</td>
<td>Walton</td>
<td>Developer</td>
<td>New York</td>
<td>61</td>
<td>2013/08/11</td>
<td>\$98,540</td>
<td>8327</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"a3d78dd4c2cfd7cccde3c7c2d7c2d7c2c1cfc6d08dcdc6d7\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Finn</td>
<td>Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/07/07</td>
<td>\$87,500</td>
<td>2927</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"77115914161a16141f1837131603160316151b120459191203\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Serge</td>
<td>Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>64</td>
<td>2012/04/09</td>
<td>\$138,575</td>
<td>8352</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"aedd80cccfc2cad9c7c0eecacfdacfdacfccc2cbdd80c0cbda\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zenaida</td>
<td>Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>63</td>
<td>2010/01/04</td>
<td>\$125,250</td>
<td>7439</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"c5bfeba3b7a4abae85a1a4b1a4b1a4a7a9a0b6ebaba0b1\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zorita</td>
<td>Serrano</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>56</td>
<td>2012/06/01</td>
<td>\$115,000</td>
<td>4389</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"116b3f62746363707f7e51757065706570737d74623f7f7465\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jennifer</td>
 <td>Acosta</td>
<td>Junior Javascript Developer</td>
<td>Edinburgh</td>
<td>43</td>
<td>2013/02/01</td>
<td>\$75,650</td>
<td>3431</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"fc96d29d9f938f889dbc989d889d889d9e90998fd2929988\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Cara</td>
<td>Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>\$145,600</td>
<td>3990</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"94f7bae7e0f1e2f1fae7d4f0f5e0f5e0f5f6f8f1e7bafaf1e0\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hermione</td>
<td>Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>47</td>
<td>2011/03/21</td>
<td>\$356,250</td>
<td>1016</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"89e1a7ebfcfde5ecfbc9ede8fde8fde8ebe5ecfaa7e7ecfd\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Lael</td>
<td>Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>21</td>
<td>2009/02/27</td>
<td>\$103,500</td>
<td>6733</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"6a06440d180f0f182a0e0b1e0b1e0b08060f1944040f1e\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jonas</td>
<td>Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>30</td>
<td>2010/07/14</td>
<td>\$86,500</td>
 <td>8196</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"13793d727f766b727d77766153777267726772717f76603d7d7667\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Shad</td>
<td>Decker</td>
<td>Regional Director</td>
<td>Edinburgh</td>
<td>51</td>
<td>2008/11/13</td>
<td>\$183,000</td>
<td>6373</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"0a79246e6f69616f784a6e6b7e6b7e6b68666f7924646f7e\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michael</td>
<td>Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>29</td>
<td>2011/06/27</td>
<td>\$183,000</td>
<td>5384</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"5835763a2a2d3b3d183c392c392c393a343d2b76363d2c\">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Donna</td>
<td>Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>27</td>
<td>2011/01/25</td>
<td>\$112,000</td>
<td>4226</td>
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"3f5b114c51565b5a4d7f5b5e4b5e4b5e5d535a4c11515a4b\">[email&#160;protected]</a></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>

<div id=\"styleSelector\">
</div>
</div>
</div>
</div>
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


<script data-cfasync=\"false\" src=\"../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js\"></script><script type=\"text/javascript\" src=\"../files/bower_components/jquery/js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/bower_components/jquery-ui/js/jquery-ui.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/bower_components/popper.js/js/popper.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/bower_components/bootstrap/js/bootstrap.min.js\"></script>

<script src=\"../files/assets/pages/waves/js/waves.min.js\"></script>

<script type=\"text/javascript\" src=\"../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js\"></script>

<script type=\"text/javascript\" src=\"../files/bower_components/modernizr/js/modernizr.js\"></script>
<script type=\"text/javascript\" src=\"../files/bower_components/modernizr/js/css-scrollbars.js\"></script>

<script src=\"../files/bower_components/datatables.net/js/jquery.dataTables.min.js\"></script>
<script src=\"../files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js\"></script>
<script src=\"../files/assets/pages/data-table/js/jszip.min.js\"></script>
<script src=\"../files/assets/pages/data-table/js/pdfmake.min.js\"></script>
<script src=\"../files/assets/pages/data-table/js/vfs_fonts.js\"></script>
<script src=\"../files/assets/pages/data-table/extensions/responsive/js/dataTables.responsive.min.js\"></script>
<script src=\"../files/bower_components/datatables.net-buttons/js/buttons.print.min.js\"></script>
<script src=\"../files/bower_components/datatables.net-buttons/js/buttons.html5.min.js\"></script>
<script src=\"../files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js\"></script>
<script src=\"../files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js\"></script>
<script src=\"../files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js\"></script>

<script src=\"../files/assets/pages/data-table/extensions/responsive/js/responsive-custom.js\"></script>
<script src=\"../files/assets/js/pcoded.min.js\"></script>
<script src=\"../files/assets/js/vertical/vertical-layout.min.js\"></script>
<script src=\"../files/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/assets/js/script.js\"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/dt-ext-responsive.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 12:17:10 GMT -->
</html>
", "admindek-html/default/dt-ext-responsive.html", "C:\\Users\\SYNS-MANAGER\\Nouveau dossier\\my_project_directory\\templates\\admindek-html\\default\\dt-ext-responsive.html");
    }
}
