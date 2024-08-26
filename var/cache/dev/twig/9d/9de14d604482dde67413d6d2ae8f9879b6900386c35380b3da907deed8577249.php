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

/* admindek-html/default/form-validation.html */
class __TwigTemplate_332f3100d693f48ab362885b70d4d430812af71d642efff2a3d64ebc8fac86c0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admindek-html/default/form-validation.html"));

        yield "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 12:16:40 GMT -->
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
<li class=\" \">
<a href=\"x-editable.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">X-Editable</span>
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
<li class=\"pcoded-hasmenu active pcoded-trigger\">
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
<li class=\"active\">
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
<li class=\"pcoded-hasmenu\">
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
<li class=\" \">
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
<li class=\"\">
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
<i class=\"feather icon-clipboard bg-c-blue\"></i>
<div class=\"d-inline\">
<h5>Forms Validation</h5>
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
<li class=\"breadcrumb-item\"><a href=\"#!\">Form Components</a>
</li>
<li class=\"breadcrumb-item\">
<a href=\"#!\">Forms Validation</a>
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
<div class=\"row\">
<div class=\"col-sm-12\">

<div class=\"card\">
<div class=\"card-header\">
<h5>Basic Inputs Validation</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class=\"card-block\">
<form id=\"main\" method=\"post\" action=\"https://demo.dashboardpack.com/\" novalidate>
<div class=\"form-group row\">
<label class=\"col-sm-2 col-form-label\">Simple Input</label>
<div class=\"col-sm-10\">
<input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"Text Input Validation\">
<span class=\"messages\"></span>
</div>
</div>
<div class=\"form-group row\">
<label class=\"col-sm-2 col-form-label\">Password</label>
<div class=\"col-sm-10\">
<input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Password input\">
<span class=\"messages\"></span>
</div>
</div>
<div class=\"form-group row\">
<label class=\"col-sm-2 col-form-label\">Repeat Password</label>
<div class=\"col-sm-10\">
<input type=\"password\" class=\"form-control\" id=\"repeat-password\" name=\"repeat-password\" placeholder=\"Repeat Password\">
<span class=\"messages\"></span>
</div>
</div>
<div class=\"form-group row\">
<label class=\"col-sm-2 col-form-label\">Email</label>
<div class=\"col-sm-10\">
<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Enter valid e-mail address\">
<span class=\"messages\"></span>
</div>
</div>
<div class=\"row\">
<label class=\"col-sm-2 col-form-label\">Radio Buttons</label>
<div class=\"col-sm-10\">
<div class=\"form-check form-check-inline\">
<label class=\"form-check-label\">
<input class=\"form-check-input\" type=\"radio\" name=\"gender\" id=\"gender-1\" value=\"option1\"> Male
</label>
</div>
<div class=\"form-check form-check-inline\">
<label class=\"form-check-label\">
<input class=\"form-check-input\" type=\"radio\" name=\"gender\" id=\"gender-2\" value=\"option2\"> Female
</label>
</div>
<span class=\"messages\"></span>
</div>
</div>
<div class=\"form-group row\">
<label class=\"col-sm-2\"></label>
<div class=\"col-sm-10\">
<button type=\"submit\" class=\"btn btn-primary m-b-0\">Submit</button>
</div>
</div>
</form>
</div>
</div>


<div class=\"card\">
<div class=\"card-header\">
<h5>Tooltip Validation</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class=\"card-block\">
<form id=\"second\" action=\"https://demo.dashboardpack.com/\" method=\"post\" novalidate>
<div class=\"form-group row\">
<label class=\"col-sm-2 col-form-label\">Enter Username</label>
<div class=\"col-sm-10\">
<input type=\"text\" class=\"form-control\" id=\"usernameP\" name=\"Username\" placeholder=\"Enter Username\">
<span class=\"messages popover-valid\"></span>
</div>
</div>
<div class=\"form-group row\">
<label class=\"col-sm-2 col-form-label\">Enter Email-id</label>
<div class=\"col-sm-10\">
<input type=\"text\" class=\"form-control\" id=\"EmailP\" name=\"Email\" placeholder=\"Enter email id\">
<span class=\"messages popover-valid\"></span>
</div>
</div>
<div class=\"row\">
<label class=\"col-sm-2\"></label>
<div class=\"col-sm-10\">
<button type=\"submit\" class=\"btn btn-primary m-b-0\">Submit</button>
</div>
</div>
</form>
</div>
</div>


<div class=\"card\">
<div class=\"card-header\">
<h5>Number Validation</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class=\"card-block\">
<form id=\"number_form\" action=\"https://demo.dashboardpack.com/\" method=\"post\" novalidate>
<div class=\"form-group row\">
<label class=\"col-sm-2 col-form-label\">Integers Only</label>
<div class=\"col-sm-10\">
<input type=\"text\" class=\"form-control\" name=\"integer\" id=\"integer\" placeholder=\"Integers Only\">
<span class=\"messages\"></span>
</div>
</div>
<div class=\"form-group row\">
<label class=\"col-sm-2 col-form-label\">Numbers Only</label>
<div class=\"col-sm-10\">
<input type=\"text\" class=\"form-control\" name=\"numeric\" id=\"numeric\" placeholder=\"Numbers Only\">
<span class=\"messages\"></span>
</div>
</div>
<div class=\"form-group row\">
<label class=\"col-sm-2 col-form-label\">Greater number</label>
<div class=\"col-sm-10\">
<input type=\"text\" class=\"form-control\" name=\"Number\" id=\"greater\" placeholder=\"Number Greter than 50\">
<span class=\"messages\"></span>
</div>
</div>
<div class=\"form-group row\">
<label class=\"col-sm-2 col-form-label\">Less number</label>
<div class=\"col-sm-10\">
<input type=\"text\" class=\"form-control\" name=\"Numbers\" id=\"less\" placeholder=\"Number Less than 50\">
<span class=\"messages\"></span>
</div>
</div>
<div class=\"row\">
<label class=\"col-sm-2\"></label>
<div class=\"col-sm-10\">
<button type=\"submit\" class=\"btn btn-primary m-b-0\">Submit</button>
</div>
</div>
</form>
</div>
</div>


<div class=\"card\">
<div class=\"card-header\">
<h5>Form Components Validation</h5>
 <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class=\"card-block\">
<form id=\"checkdrop\" action=\"https://demo.dashboardpack.com/\" method=\"post\" novalidate>
<div class=\"form-group row\">
<label class=\"col-sm-2\">Radio Buttons</label>
<div class=\"col-sm-10\">
<div class=\"form-radio\">
<div class=\"radio radiofill radio-primary radio-inline\">
<label>
<input type=\"radio\" name=\"member\" value=\"free\" data-bv-field=\"member\">
<i class=\"helper\"></i>Select here
</label>
</div>
<div class=\"radio radiofill radio-primary radio-inline\">
<label>
<input type=\"radio\" name=\"member\" value=\"personal\" data-bv-field=\"member\">
<i class=\"helper\"></i>Another select
</label>
</div>
</div>
<span class=\"messages\"></span>
</div>
</div>
<div class=\"form-group row\">
<label class=\"col-sm-2\">Select Checkbox</label>
<div class=\"col-sm-10\">
<div class=\"checkbox-fade fade-in-primary\">
<label>
<input type=\"checkbox\" id=\"checkbox\" name=\"Language\" value=\"HTML\">
<span class=\"cr\">
<i class=\"cr-icon icofont icofont-ui-check txt-primary\"></i>
</span>
<span>HTML</span>
</label>
</div>
<div class=\"checkbox-fade fade-in-primary\">
<label>
<input type=\"checkbox\" id=\"checkbox2\" name=\"Language\" value=\"CSS\">
<span class=\"cr\">
<i class=\"cr-icon icofont icofont-ui-check txt-primary\"></i>
</span>
<span>CSS</span>
</label>
</div>
<span class=\"messages\"></span>
</div>
</div>
<div class=\"row\">
<label class=\"col-sm-2\"></label>
<div class=\"col-sm-10\">
<button type=\"submit\" class=\"btn btn-primary m-b-0\">Submit</button>
</div>
</div>
</form>
</div>
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


<script type=\"text/javascript\" src=\"../files/bower_components/jquery/js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/bower_components/jquery-ui/js/jquery-ui.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/bower_components/popper.js/js/popper.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/bower_components/bootstrap/js/bootstrap.min.js\"></script>

<script src=\"../files/assets/pages/waves/js/waves.min.js\"></script>

<script type=\"text/javascript\" src=\"../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js\"></script>

<script type=\"text/javascript\" src=\"../files/bower_components/modernizr/js/modernizr.js\"></script>
<script type=\"text/javascript\" src=\"../files/bower_components/modernizr/js/css-scrollbars.js\"></script>

<script src=\"../../../cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js\"></script>
<script src=\"../../../cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/assets/pages/form-validation/validate.js\"></script>

<script type=\"text/javascript\" src=\"../files/assets/pages/form-validation/form-validation.js\"></script>
<script src=\"../files/assets/js/pcoded.min.js\"></script>
<script src=\"../files/assets/js/vertical/vertical-layout.min.js\"></script>
<script src=\"../files/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/assets/js/script.js\"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 12:16:43 GMT -->
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
        return "admindek-html/default/form-validation.html";
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

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 12:16:40 GMT -->
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
<li class=\" \">
<a href=\"x-editable.html\" class=\"waves-effect waves-dark\">
<span class=\"pcoded-mtext\">X-Editable</span>
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
<li class=\"pcoded-hasmenu active pcoded-trigger\">
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
<li class=\"active\">
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
<li class=\"pcoded-hasmenu\">
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
<li class=\" \">
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
<li class=\"\">
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
<i class=\"feather icon-clipboard bg-c-blue\"></i>
<div class=\"d-inline\">
<h5>Forms Validation</h5>
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
<li class=\"breadcrumb-item\"><a href=\"#!\">Form Components</a>
</li>
<li class=\"breadcrumb-item\">
<a href=\"#!\">Forms Validation</a>
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
<div class=\"row\">
<div class=\"col-sm-12\">

<div class=\"card\">
<div class=\"card-header\">
<h5>Basic Inputs Validation</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class=\"card-block\">
<form id=\"main\" method=\"post\" action=\"https://demo.dashboardpack.com/\" novalidate>
<div class=\"form-group row\">
<label class=\"col-sm-2 col-form-label\">Simple Input</label>
<div class=\"col-sm-10\">
<input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"Text Input Validation\">
<span class=\"messages\"></span>
</div>
</div>
<div class=\"form-group row\">
<label class=\"col-sm-2 col-form-label\">Password</label>
<div class=\"col-sm-10\">
<input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Password input\">
<span class=\"messages\"></span>
</div>
</div>
<div class=\"form-group row\">
<label class=\"col-sm-2 col-form-label\">Repeat Password</label>
<div class=\"col-sm-10\">
<input type=\"password\" class=\"form-control\" id=\"repeat-password\" name=\"repeat-password\" placeholder=\"Repeat Password\">
<span class=\"messages\"></span>
</div>
</div>
<div class=\"form-group row\">
<label class=\"col-sm-2 col-form-label\">Email</label>
<div class=\"col-sm-10\">
<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Enter valid e-mail address\">
<span class=\"messages\"></span>
</div>
</div>
<div class=\"row\">
<label class=\"col-sm-2 col-form-label\">Radio Buttons</label>
<div class=\"col-sm-10\">
<div class=\"form-check form-check-inline\">
<label class=\"form-check-label\">
<input class=\"form-check-input\" type=\"radio\" name=\"gender\" id=\"gender-1\" value=\"option1\"> Male
</label>
</div>
<div class=\"form-check form-check-inline\">
<label class=\"form-check-label\">
<input class=\"form-check-input\" type=\"radio\" name=\"gender\" id=\"gender-2\" value=\"option2\"> Female
</label>
</div>
<span class=\"messages\"></span>
</div>
</div>
<div class=\"form-group row\">
<label class=\"col-sm-2\"></label>
<div class=\"col-sm-10\">
<button type=\"submit\" class=\"btn btn-primary m-b-0\">Submit</button>
</div>
</div>
</form>
</div>
</div>


<div class=\"card\">
<div class=\"card-header\">
<h5>Tooltip Validation</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class=\"card-block\">
<form id=\"second\" action=\"https://demo.dashboardpack.com/\" method=\"post\" novalidate>
<div class=\"form-group row\">
<label class=\"col-sm-2 col-form-label\">Enter Username</label>
<div class=\"col-sm-10\">
<input type=\"text\" class=\"form-control\" id=\"usernameP\" name=\"Username\" placeholder=\"Enter Username\">
<span class=\"messages popover-valid\"></span>
</div>
</div>
<div class=\"form-group row\">
<label class=\"col-sm-2 col-form-label\">Enter Email-id</label>
<div class=\"col-sm-10\">
<input type=\"text\" class=\"form-control\" id=\"EmailP\" name=\"Email\" placeholder=\"Enter email id\">
<span class=\"messages popover-valid\"></span>
</div>
</div>
<div class=\"row\">
<label class=\"col-sm-2\"></label>
<div class=\"col-sm-10\">
<button type=\"submit\" class=\"btn btn-primary m-b-0\">Submit</button>
</div>
</div>
</form>
</div>
</div>


<div class=\"card\">
<div class=\"card-header\">
<h5>Number Validation</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class=\"card-block\">
<form id=\"number_form\" action=\"https://demo.dashboardpack.com/\" method=\"post\" novalidate>
<div class=\"form-group row\">
<label class=\"col-sm-2 col-form-label\">Integers Only</label>
<div class=\"col-sm-10\">
<input type=\"text\" class=\"form-control\" name=\"integer\" id=\"integer\" placeholder=\"Integers Only\">
<span class=\"messages\"></span>
</div>
</div>
<div class=\"form-group row\">
<label class=\"col-sm-2 col-form-label\">Numbers Only</label>
<div class=\"col-sm-10\">
<input type=\"text\" class=\"form-control\" name=\"numeric\" id=\"numeric\" placeholder=\"Numbers Only\">
<span class=\"messages\"></span>
</div>
</div>
<div class=\"form-group row\">
<label class=\"col-sm-2 col-form-label\">Greater number</label>
<div class=\"col-sm-10\">
<input type=\"text\" class=\"form-control\" name=\"Number\" id=\"greater\" placeholder=\"Number Greter than 50\">
<span class=\"messages\"></span>
</div>
</div>
<div class=\"form-group row\">
<label class=\"col-sm-2 col-form-label\">Less number</label>
<div class=\"col-sm-10\">
<input type=\"text\" class=\"form-control\" name=\"Numbers\" id=\"less\" placeholder=\"Number Less than 50\">
<span class=\"messages\"></span>
</div>
</div>
<div class=\"row\">
<label class=\"col-sm-2\"></label>
<div class=\"col-sm-10\">
<button type=\"submit\" class=\"btn btn-primary m-b-0\">Submit</button>
</div>
</div>
</form>
</div>
</div>


<div class=\"card\">
<div class=\"card-header\">
<h5>Form Components Validation</h5>
 <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class=\"card-block\">
<form id=\"checkdrop\" action=\"https://demo.dashboardpack.com/\" method=\"post\" novalidate>
<div class=\"form-group row\">
<label class=\"col-sm-2\">Radio Buttons</label>
<div class=\"col-sm-10\">
<div class=\"form-radio\">
<div class=\"radio radiofill radio-primary radio-inline\">
<label>
<input type=\"radio\" name=\"member\" value=\"free\" data-bv-field=\"member\">
<i class=\"helper\"></i>Select here
</label>
</div>
<div class=\"radio radiofill radio-primary radio-inline\">
<label>
<input type=\"radio\" name=\"member\" value=\"personal\" data-bv-field=\"member\">
<i class=\"helper\"></i>Another select
</label>
</div>
</div>
<span class=\"messages\"></span>
</div>
</div>
<div class=\"form-group row\">
<label class=\"col-sm-2\">Select Checkbox</label>
<div class=\"col-sm-10\">
<div class=\"checkbox-fade fade-in-primary\">
<label>
<input type=\"checkbox\" id=\"checkbox\" name=\"Language\" value=\"HTML\">
<span class=\"cr\">
<i class=\"cr-icon icofont icofont-ui-check txt-primary\"></i>
</span>
<span>HTML</span>
</label>
</div>
<div class=\"checkbox-fade fade-in-primary\">
<label>
<input type=\"checkbox\" id=\"checkbox2\" name=\"Language\" value=\"CSS\">
<span class=\"cr\">
<i class=\"cr-icon icofont icofont-ui-check txt-primary\"></i>
</span>
<span>CSS</span>
</label>
</div>
<span class=\"messages\"></span>
</div>
</div>
<div class=\"row\">
<label class=\"col-sm-2\"></label>
<div class=\"col-sm-10\">
<button type=\"submit\" class=\"btn btn-primary m-b-0\">Submit</button>
</div>
</div>
</form>
</div>
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


<script type=\"text/javascript\" src=\"../files/bower_components/jquery/js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/bower_components/jquery-ui/js/jquery-ui.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/bower_components/popper.js/js/popper.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/bower_components/bootstrap/js/bootstrap.min.js\"></script>

<script src=\"../files/assets/pages/waves/js/waves.min.js\"></script>

<script type=\"text/javascript\" src=\"../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js\"></script>

<script type=\"text/javascript\" src=\"../files/bower_components/modernizr/js/modernizr.js\"></script>
<script type=\"text/javascript\" src=\"../files/bower_components/modernizr/js/css-scrollbars.js\"></script>

<script src=\"../../../cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js\"></script>
<script src=\"../../../cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/assets/pages/form-validation/validate.js\"></script>

<script type=\"text/javascript\" src=\"../files/assets/pages/form-validation/form-validation.js\"></script>
<script src=\"../files/assets/js/pcoded.min.js\"></script>
<script src=\"../files/assets/js/vertical/vertical-layout.min.js\"></script>
<script src=\"../files/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/assets/js/script.js\"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 12:16:43 GMT -->
</html>
", "admindek-html/default/form-validation.html", "C:\\Users\\SYNS-MANAGER\\Nouveau dossier\\my_project_directory\\templates\\admindek-html\\default\\form-validation.html");
    }
}
