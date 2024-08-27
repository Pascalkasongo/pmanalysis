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

/* admindek-html/default/dt-ext-fixed-columns.html */
class __TwigTemplate_bbbf343865f9ef05ade08c6bd504846037c058e4b45792b32ec5189b417f5ccf extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admindek-html/default/dt-ext-fixed-columns.html"));

        yield "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/dt-ext-fixed-columns.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 12:17:05 GMT -->
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

<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/bower_components/datatables.net/css/jquery.dataTables.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/pages/data-table/css/buttons.dataTables.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css\">

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
<li class=\"active\">
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
 <h5>Fixed Columns</h5>
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
<li class=\"breadcrumb-item\"><a href=\"#!\">Fixed Columns</a>
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
<div class=\"col-lg-6\">
<div class=\"card\">
<div class=\"card-header\">
<h5>Left And Right Fixed Columns</h5>
<span>When displaying a table which scrolls along the x-axis, it can sometimes be useful to the end user for the left most column to be fixed in place, if it shows grouping, index or similar information. This is basically the same idea as 'freeze columns' in Excel. This can be achieved with the FixedColumns plug-in for DataTables, as shown below.</span>
</div>
<div class=\"card-block\">
<table id=\"left-right-fix\" class=\"table stripe row-border order-column\">
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4e3a6020273621200e2a2f3a2f3a2f2c222b3d60202b3a\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"d7b0f9a0beb9a3b2a5a497b3b6a3b6a3b6b5bbb2a4f9b9b2a3\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"51307f323e2911353025302530333d34227f3f3425\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"ec8fc28789808095ac888d988d988d8e80899fc2828998\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"eb8ac5988a9f849eab8f8a9f8a9f8a89878e98c5858e9f\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"44266a332d28282d2529372b2a04202530253025262821376a2a2130\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"83ebade0ebe2ede7efe6f1c3e7e2f7e2f7e2e1efe6f0adede6f7\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"96e4b8f2f7e0fff2e5f9f8d6f2f7e2f7e2f7f4faf3e5b8f8f3e2\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"5d3e7335282f2e291d393c293c293c3f31382e73333829\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"d9aaf7bfabb6aaad99bdb8adb8adb8bbb5bcaaf7b7bcad\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"12783c75737b7c776152767366736673707e77613c7c7766\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f283dc949e8b9c9cb2969386938693909e9781dc9c9786\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b0d39eddd1c2c3d8d1dcdcf0d4d1c4d1c4d1d2dcd5c39eded5c4\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b4dc9adfd1dadad1d0cdf4d0d5c0d5c0d5d6d8d1c79adad1c0\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"176339717e636d677663657e747c57737663766376757b726439797263\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"dab7f4a9b3b6acbb9abebbaebbaebbb8b6bfa9f4b4bfae\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4c2b622025383820290c282d382d382d2e20293f62222938\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"45276b223720203705212431243124272920366b2b2031\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"7f1b510d16100c3f1b1e0b1e0b1e1d131a0c51111a0b\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2b4105484a474f5c4e47476b4f4a5f4a5f4a49474e5805454e5f\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"9ee7b0fcfbecece7defaffeaffeafffcf2fbedb0f0fbea\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4b28653d2a25282e0b2f2a3f2a3f2a29272e3865252e3f\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"83e7adf4eaefe7e6f1c3e7e2f7e2f7e2e1efe6f0adede6f7\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"03622d71626e6c7043676277627762616f66702d6d6677\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b2d59cd8ddcbd1d7f2d6d3c6d3c6d3d0ded7c19cdcd7c6\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"5832763b3039363f183c392c392c393a343d2b76363d2c\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"adcf83dacccac3c8dfedc9ccd9ccd9cccfc1c8de83c3c8d9\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"e680c88194838388a6828792879287848a8395c8888392\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4734692e33283207232633263326252b223469292233\">[email&#160;protected]</a></td>
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
 <td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"3a571452554f495f7a5e5b4e5b4e5b58565f4914545f4e\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"34471a5641465f4774505540554055565851471a5a5140\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"1e6e307c7f6c6a727b6a6a5e7a7f6a7f6a7f7c727b6d30707b6a\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"8beca5e8e4f9ffeef1cbefeaffeaffeae9e7eef8a5e5eeff\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"214c0f4c424253405861454055405540434d44520f4f4455\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"097c276b7c7d656c7b496d687d687d686b656c7a27676c7d\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"d0b8feb8b1a4b6b9b5bcb490b4b1a4b1a4b1b2bcb5a3febeb5a4\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"a4cc8ac2d1c1cad0c1d7e4c0c5d0c5d0c5c6c8c1d78acac1d0\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"a0d68ec8c1d2d2c5cccce0c4c1d4c1d4c1c2ccc5d38ecec5d4\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2d59034042424348546d494c594c594c4f41485e03434859\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"7d17531f0f1c190e151c0a3d191c091c091c1f11180e53131809\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b2dd9cdedbd3dcd5f2d6d3c6d3c6d3d0ded7c19cdcd7c6\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"1f7d31717e6c775f7b7e6b7e6b7e7d737a6c31717a6b\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2e5d00574f434f43415a416e4a4f5a4f5a4f4c424b5d00404b5a\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"66124811070a12090826020712071207040a031548080312\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"37511954565a56545f5877535643564356555b524419595243\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"087b266a69646c7f6166486c697c697c696a646d7b26666d7c\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"1862367e6a797673587c796c796c797a747d6b36767d6c\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"83f9adf0e6f1f1e2edecc3e7e2f7e2f7e2e1efe6f0adede6f7\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4d27632c2e223e392c0d292c392c392c2f21283e63232839\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"97f4b9e4e3f2e1f2f9e4d7f3f6e3f6e3f6f5fbf2e4b9f9f2e3\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"afc781cddadbc3caddefcbcedbcedbcecdc3cadc81c1cadb\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"eb87c58c998e8e99ab8f8a9f8a9f8a89878e98c5858e9f\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"e288cc838e879a838c868790a2868396839683808e8791cc8c8796\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"32411c56575159574072565346534653505e57411c5c5746\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"ef82c18d9d9a8c8aaf8b8e9b8e9b8e8d838a9cc1818a9b\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"94f0bae7fafdf0f1e6d4f0f5e0f5e0f5f6f8f1e7bafaf1e0\">[email&#160;protected]</a></td>
</tr>
</tbody>
 </table>
</div>
</div>
</div>
<div class=\"col-lg-6\">
<div class=\"card\">
<div class=\"card-header\">
<h5>Right Fixed Column</h5>
<span>FixedColumns has the ability to freeze columns on both the left and right hand sides of the table. By default it will fix the first column on the left, but using the initialisation parameters leftColumns and rightColumns you can alter this to fix the columns on the right as well. This example shows a single column fixed in place, in this case the right most column.</span>
</div>
<div class=\"card-block\">
<table id=\"right-fix\" class=\"table stripe row-border order-column\">
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"8bffa5e5e2f3e4e5cbefeaffeaffeae9e7eef8a5e5eeff\">[email&#160;protected]</a></td>
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
<td>g.winte<a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"9ceeefdcf8fde8fde8fdfef0f9efb2f2f9e8\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"7b1a551814033b1f1a0f1a0f1a19171e0855151e0f\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"d2b1fcb9b7bebeab92b6b3a6b3a6b3b0beb7a1fcbcb7a6\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"d6b7f8a5b7a2b9a396b2b7a2b7a2b7b4bab3a5f8b8b3a2\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"afcd81d8c6c3c3c6cec2dcc0c1efcbcedbcedbcecdc3cadc81c1cadb\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f098de9398919e949c9582b0949184918491929c9583de9e9584\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"62104c0603140b06110d0c22060316031603000e07114c0c0716\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"d0b3feb8a5a2a3a490b4b1a4b1a4b1b2bcb5a3febeb5a4\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"fa89d49c8895898eba9e9b8e9b8e9b98969f89d4949f8e\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"32581c55535b5c574172565346534653505e57411c5c5746\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"75045b13190c1b1b35111401140114171910065b1b1001\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"9af9b4f7fbe8e9f2fbf6f6dafefbeefbeefbf8f6ffe9b4f4ffee\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"5f3771343a31313a3b261f3b3e2b3e2b3e3d333a2c71313a2b\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f286dc949b8688829386809b9199b2969386938693909e9781dc9c9786\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4c21623f25203a2d0c282d382d382d2e20293f62222938\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"7e0e501c070c1a3e1a1f0a1f0a1f1c121b0d50101b0a\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"20470e4c4954544c4560444154415441424c45530e4e4554\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b3d19dd4c1d6d6c1f3d7d2c7d2c7d2d1dfd6c09dddd6c7\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b5d19bc7dcdac6f5d1d4c1d4c1d4d7d9d0c69bdbd0c1\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2842064b49444c5f4d4444684c495c495c494a444d5b06464d5c\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"cbb2e5a9aeb9b9b28bafaabfaabfaaa9a7aeb8e5a5aebf\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"395a174f58575a5c795d584d584d585b555c4a17575c4d\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"761258011f1a12130436121702170217141a130558181302\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"e88fc68287918b8da88c899c899c898a848d9bc6868d9c\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"610b4f0209000f0621050015001500030d04124f0f0415\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"44266a3325232a213604202530253025262821376a2a2130\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"1a7c347d687f7f745a7e7b6e7b6e7b78767f6934747f6e\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"50237e39243f2510343124312431323c35237e3e3524\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"d9b4f7b1b6acaabc99bdb8adb8adb8bbb5bcaaf7b7bcad\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"a5d68bc7d0d7ced6e5c1c4d1c4d1c4c7c9c0d68bcbc0d1\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"ec9cc28e8d9e9880899898ac888d988d988d8e80899fc2828998\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"54337a373b2620312e14303520352035363831277a3a3120\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"771a591a141405160e37131603160316151b120459191203\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"c3b6eda1b6b7afa6b183a7a2b7a2b7a2a1afa6b0edada6b7\">[email&#160;protected]</a></td>
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
 <td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"036b2d6b6277656a666f6743676277627762616f66702d6d6677\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"6800460e1d0d061c0d1b280c091c091c090a040d1b46060d1c\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"25530b4d44575740494965414451445144474940560b4b4051\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"d4a0fab9bbbbbab1ad94b0b5a0b5a0b5b6b8b1a7fabab1a0\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"62084c00100306110a031522060316031603000e07114c0c0716\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"5738793b3e36393017333623362336353b322479393223\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"492b6727283a21092d283d283d282b252c3a67272c3d\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"fc8fd2859d919d91938893bc989d889d889d9e90998fd2929988\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b6c298c1d7dac2d9d8f6d2d7c2d7c2d7d4dad3c598d8d3c2\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"3b5d15585a565a5853547b5f5a4f5a4f5a59575e4815555e4f\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"483b662a29242c3f2126082c293c293c292a242d3b66262d3c\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"344e1a5246555a5f74505540554055565851471a5a5140\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"5c26722f392e2e3d32331c383d283d283d3e30392f72323928\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"fb91d59a9894888f9abb9f9a8f9a8f9a99979e88d5959e8f\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"ea89c4999e8f9c8f8499aa8e8b9e8b9e8b88868f99c4848f9e\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"c6aae8a1b4a3a3b486a2a7b2a7b2a7a4aaa3b5e8a8a3b2\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"23490d424f465b424d47465163474257425742414f46500d4d4657\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"fa89d49e9f99919f88ba9e9b8e9b8e9b98969f89d4949f8e\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2845064a5a5d4b4d684c495c495c494a444d5b06464d5c\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"0b6f257865626f6e794b6f6a7f6a7f6a69676e7825656e7f\">[email&#160;protected]</a></td>
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
<script type=\"text/javascript\" src=\"../../../cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js\"></script>
<script src=\"../files/assets/pages/data-table/extensions/fixed-colums/js/dataTables.fixedColumns.min.js\"></script>

<script src=\"../files/assets/pages/data-table/extensions/fixed-colums/js/fixed-column-custom.js\"></script>
<script src=\"../files/assets/js/pcoded.min.js\"></script>
<script src=\"../files/assets/js/vertical/vertical-layout.min.js\"></script>
<script src=\"../files/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/assets/js/script.js\"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/dt-ext-fixed-columns.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 12:17:07 GMT -->
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
        return "admindek-html/default/dt-ext-fixed-columns.html";
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

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/dt-ext-fixed-columns.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 12:17:05 GMT -->
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

<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/bower_components/datatables.net/css/jquery.dataTables.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/assets/pages/data-table/css/buttons.dataTables.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"../files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css\">

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
<li class=\"active\">
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
 <h5>Fixed Columns</h5>
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
<li class=\"breadcrumb-item\"><a href=\"#!\">Fixed Columns</a>
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
<div class=\"col-lg-6\">
<div class=\"card\">
<div class=\"card-header\">
<h5>Left And Right Fixed Columns</h5>
<span>When displaying a table which scrolls along the x-axis, it can sometimes be useful to the end user for the left most column to be fixed in place, if it shows grouping, index or similar information. This is basically the same idea as 'freeze columns' in Excel. This can be achieved with the FixedColumns plug-in for DataTables, as shown below.</span>
</div>
<div class=\"card-block\">
<table id=\"left-right-fix\" class=\"table stripe row-border order-column\">
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4e3a6020273621200e2a2f3a2f3a2f2c222b3d60202b3a\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"d7b0f9a0beb9a3b2a5a497b3b6a3b6a3b6b5bbb2a4f9b9b2a3\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"51307f323e2911353025302530333d34227f3f3425\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"ec8fc28789808095ac888d988d988d8e80899fc2828998\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"eb8ac5988a9f849eab8f8a9f8a9f8a89878e98c5858e9f\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"44266a332d28282d2529372b2a04202530253025262821376a2a2130\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"83ebade0ebe2ede7efe6f1c3e7e2f7e2f7e2e1efe6f0adede6f7\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"96e4b8f2f7e0fff2e5f9f8d6f2f7e2f7e2f7f4faf3e5b8f8f3e2\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"5d3e7335282f2e291d393c293c293c3f31382e73333829\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"d9aaf7bfabb6aaad99bdb8adb8adb8bbb5bcaaf7b7bcad\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"12783c75737b7c776152767366736673707e77613c7c7766\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f283dc949e8b9c9cb2969386938693909e9781dc9c9786\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b0d39eddd1c2c3d8d1dcdcf0d4d1c4d1c4d1d2dcd5c39eded5c4\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b4dc9adfd1dadad1d0cdf4d0d5c0d5c0d5d6d8d1c79adad1c0\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"176339717e636d677663657e747c57737663766376757b726439797263\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"dab7f4a9b3b6acbb9abebbaebbaebbb8b6bfa9f4b4bfae\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4c2b622025383820290c282d382d382d2e20293f62222938\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"45276b223720203705212431243124272920366b2b2031\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"7f1b510d16100c3f1b1e0b1e0b1e1d131a0c51111a0b\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2b4105484a474f5c4e47476b4f4a5f4a5f4a49474e5805454e5f\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"9ee7b0fcfbecece7defaffeaffeafffcf2fbedb0f0fbea\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4b28653d2a25282e0b2f2a3f2a3f2a29272e3865252e3f\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"83e7adf4eaefe7e6f1c3e7e2f7e2f7e2e1efe6f0adede6f7\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"03622d71626e6c7043676277627762616f66702d6d6677\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b2d59cd8ddcbd1d7f2d6d3c6d3c6d3d0ded7c19cdcd7c6\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"5832763b3039363f183c392c392c393a343d2b76363d2c\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"adcf83dacccac3c8dfedc9ccd9ccd9cccfc1c8de83c3c8d9\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"e680c88194838388a6828792879287848a8395c8888392\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4734692e33283207232633263326252b223469292233\">[email&#160;protected]</a></td>
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
 <td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"3a571452554f495f7a5e5b4e5b4e5b58565f4914545f4e\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"34471a5641465f4774505540554055565851471a5a5140\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"1e6e307c7f6c6a727b6a6a5e7a7f6a7f6a7f7c727b6d30707b6a\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"8beca5e8e4f9ffeef1cbefeaffeaffeae9e7eef8a5e5eeff\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"214c0f4c424253405861454055405540434d44520f4f4455\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"097c276b7c7d656c7b496d687d687d686b656c7a27676c7d\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"d0b8feb8b1a4b6b9b5bcb490b4b1a4b1a4b1b2bcb5a3febeb5a4\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"a4cc8ac2d1c1cad0c1d7e4c0c5d0c5d0c5c6c8c1d78acac1d0\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"a0d68ec8c1d2d2c5cccce0c4c1d4c1d4c1c2ccc5d38ecec5d4\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2d59034042424348546d494c594c594c4f41485e03434859\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"7d17531f0f1c190e151c0a3d191c091c091c1f11180e53131809\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b2dd9cdedbd3dcd5f2d6d3c6d3c6d3d0ded7c19cdcd7c6\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"1f7d31717e6c775f7b7e6b7e6b7e7d737a6c31717a6b\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2e5d00574f434f43415a416e4a4f5a4f5a4f4c424b5d00404b5a\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"66124811070a12090826020712071207040a031548080312\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"37511954565a56545f5877535643564356555b524419595243\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"087b266a69646c7f6166486c697c697c696a646d7b26666d7c\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"1862367e6a797673587c796c796c797a747d6b36767d6c\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"83f9adf0e6f1f1e2edecc3e7e2f7e2f7e2e1efe6f0adede6f7\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4d27632c2e223e392c0d292c392c392c2f21283e63232839\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"97f4b9e4e3f2e1f2f9e4d7f3f6e3f6e3f6f5fbf2e4b9f9f2e3\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"afc781cddadbc3caddefcbcedbcedbcecdc3cadc81c1cadb\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"eb87c58c998e8e99ab8f8a9f8a9f8a89878e98c5858e9f\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"e288cc838e879a838c868790a2868396839683808e8791cc8c8796\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"32411c56575159574072565346534653505e57411c5c5746\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"ef82c18d9d9a8c8aaf8b8e9b8e9b8e8d838a9cc1818a9b\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"94f0bae7fafdf0f1e6d4f0f5e0f5e0f5f6f8f1e7bafaf1e0\">[email&#160;protected]</a></td>
</tr>
</tbody>
 </table>
</div>
</div>
</div>
<div class=\"col-lg-6\">
<div class=\"card\">
<div class=\"card-header\">
<h5>Right Fixed Column</h5>
<span>FixedColumns has the ability to freeze columns on both the left and right hand sides of the table. By default it will fix the first column on the left, but using the initialisation parameters leftColumns and rightColumns you can alter this to fix the columns on the right as well. This example shows a single column fixed in place, in this case the right most column.</span>
</div>
<div class=\"card-block\">
<table id=\"right-fix\" class=\"table stripe row-border order-column\">
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"8bffa5e5e2f3e4e5cbefeaffeaffeae9e7eef8a5e5eeff\">[email&#160;protected]</a></td>
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
<td>g.winte<a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"9ceeefdcf8fde8fde8fdfef0f9efb2f2f9e8\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"7b1a551814033b1f1a0f1a0f1a19171e0855151e0f\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"d2b1fcb9b7bebeab92b6b3a6b3a6b3b0beb7a1fcbcb7a6\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"d6b7f8a5b7a2b9a396b2b7a2b7a2b7b4bab3a5f8b8b3a2\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"afcd81d8c6c3c3c6cec2dcc0c1efcbcedbcedbcecdc3cadc81c1cadb\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f098de9398919e949c9582b0949184918491929c9583de9e9584\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"62104c0603140b06110d0c22060316031603000e07114c0c0716\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"d0b3feb8a5a2a3a490b4b1a4b1a4b1b2bcb5a3febeb5a4\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"fa89d49c8895898eba9e9b8e9b8e9b98969f89d4949f8e\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"32581c55535b5c574172565346534653505e57411c5c5746\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"75045b13190c1b1b35111401140114171910065b1b1001\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"9af9b4f7fbe8e9f2fbf6f6dafefbeefbeefbf8f6ffe9b4f4ffee\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"5f3771343a31313a3b261f3b3e2b3e2b3e3d333a2c71313a2b\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"f286dc949b8688829386809b9199b2969386938693909e9781dc9c9786\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"4c21623f25203a2d0c282d382d382d2e20293f62222938\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"7e0e501c070c1a3e1a1f0a1f0a1f1c121b0d50101b0a\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"20470e4c4954544c4560444154415441424c45530e4e4554\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b3d19dd4c1d6d6c1f3d7d2c7d2c7d2d1dfd6c09dddd6c7\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b5d19bc7dcdac6f5d1d4c1d4c1d4d7d9d0c69bdbd0c1\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2842064b49444c5f4d4444684c495c495c494a444d5b06464d5c\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"cbb2e5a9aeb9b9b28bafaabfaabfaaa9a7aeb8e5a5aebf\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"395a174f58575a5c795d584d584d585b555c4a17575c4d\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"761258011f1a12130436121702170217141a130558181302\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"e88fc68287918b8da88c899c899c898a848d9bc6868d9c\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"610b4f0209000f0621050015001500030d04124f0f0415\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"44266a3325232a213604202530253025262821376a2a2130\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"1a7c347d687f7f745a7e7b6e7b6e7b78767f6934747f6e\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"50237e39243f2510343124312431323c35237e3e3524\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"d9b4f7b1b6acaabc99bdb8adb8adb8bbb5bcaaf7b7bcad\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"a5d68bc7d0d7ced6e5c1c4d1c4d1c4c7c9c0d68bcbc0d1\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"ec9cc28e8d9e9880899898ac888d988d988d8e80899fc2828998\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"54337a373b2620312e14303520352035363831277a3a3120\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"771a591a141405160e37131603160316151b120459191203\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"c3b6eda1b6b7afa6b183a7a2b7a2b7a2a1afa6b0edada6b7\">[email&#160;protected]</a></td>
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
 <td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"036b2d6b6277656a666f6743676277627762616f66702d6d6677\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"6800460e1d0d061c0d1b280c091c091c090a040d1b46060d1c\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"25530b4d44575740494965414451445144474940560b4b4051\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"d4a0fab9bbbbbab1ad94b0b5a0b5a0b5b6b8b1a7fabab1a0\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"62084c00100306110a031522060316031603000e07114c0c0716\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"5738793b3e36393017333623362336353b322479393223\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"492b6727283a21092d283d283d282b252c3a67272c3d\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"fc8fd2859d919d91938893bc989d889d889d9e90998fd2929988\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"b6c298c1d7dac2d9d8f6d2d7c2d7c2d7d4dad3c598d8d3c2\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"3b5d15585a565a5853547b5f5a4f5a4f5a59575e4815555e4f\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"483b662a29242c3f2126082c293c293c292a242d3b66262d3c\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"344e1a5246555a5f74505540554055565851471a5a5140\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"5c26722f392e2e3d32331c383d283d283d3e30392f72323928\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"fb91d59a9894888f9abb9f9a8f9a8f9a99979e88d5959e8f\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"ea89c4999e8f9c8f8499aa8e8b9e8b9e8b88868f99c4848f9e\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"c6aae8a1b4a3a3b486a2a7b2a7b2a7a4aaa3b5e8a8a3b2\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"23490d424f465b424d47465163474257425742414f46500d4d4657\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"fa89d49e9f99919f88ba9e9b8e9b8e9b98969f89d4949f8e\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"2845064a5a5d4b4d684c495c495c494a444d5b06464d5c\">[email&#160;protected]</a></td>
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
<td><a href=\"https://demo.dashboardpack.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"0b6f257865626f6e794b6f6a7f6a7f6a69676e7825656e7f\">[email&#160;protected]</a></td>
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
<script type=\"text/javascript\" src=\"../../../cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js\"></script>
<script src=\"../files/assets/pages/data-table/extensions/fixed-colums/js/dataTables.fixedColumns.min.js\"></script>

<script src=\"../files/assets/pages/data-table/extensions/fixed-colums/js/fixed-column-custom.js\"></script>
<script src=\"../files/assets/js/pcoded.min.js\"></script>
<script src=\"../files/assets/js/vertical/vertical-layout.min.js\"></script>
<script src=\"../files/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script type=\"text/javascript\" src=\"../files/assets/js/script.js\"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/dt-ext-fixed-columns.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 12:17:07 GMT -->
</html>
", "admindek-html/default/dt-ext-fixed-columns.html", "C:\\Users\\SYNS-MANAGER\\Documents\\GitHub\\pmanalysis\\templates\\admindek-html\\default\\dt-ext-fixed-columns.html");
    }
}
