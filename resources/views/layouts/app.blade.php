<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard </title>
    <link rel="apple-touch-icon" sizes="60x60" href="app-assets/img/ico/apple-icon-60.html">
    <link rel="apple-touch-icon" sizes="76x76" href="app-assets/img/ico/apple-icon-76.html">
    <link rel="apple-touch-icon" sizes="120x120" href="app-assets/img/ico/apple-icon-120.html">
    <link rel="apple-touch-icon" sizes="152x152" href="app-assets/img/ico/apple-icon-152.html">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="app-assets/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/prism.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
    @yield('header')
</head>
<body data-col="2-columns" class=" 2-columns ">
<div class="wrapper  nav-collapsed  menu-collapsed ">

    <!-- collapece  -->
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
    <div data-active-color="white" data-background-color="purple-bliss" data-image="app-assets/img/sidebar-bg/01.jpg" class="app-sidebar">
        <!-- main menu header-->
        <!-- Sidebar Header starts-->
        <div class="sidebar-header">
            <div class="logo clearfix"><a href="index-2.html" class="logo-text float-left">
                    <div class="logo-img"><img src="app-assets/img/logo.png"/></div><span class="text align-middle">APEX</span></a><a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i data-toggle="collapsed" class="ft-toggle-left toggle-icon"></i></a><a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-x"></i></a></div>
        </div>
        <!-- Sidebar Header Ends-->
        <!-- / main menu header-->
        <!-- main menu content-->
        <div class="sidebar-content">
            <div class="nav-container">
                <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                    <li class="has-sub nav-item"><a href="#"><i class="ft-home"></i><span data-i18n="" class="menu-title">Dashboard</span><span class="tag badge badge-pill badge-danger float-right mr-1 mt-1">2</span></a>
                        <ul class="menu-content">
                            <li class="active"><a href="dashboard1.html" class="menu-item">Dashboard1</a>
                            </li>
                            <li><a href="dashboard2.html" class="menu-item">Dashboard2</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a href="color-palette.html"><i class="ft-droplet"></i><span data-i18n="" class="menu-title">Color Palette</span></a>
                    </li>
                    <li class=" nav-item"><a href="inbox.html"><i class="ft-mail"></i><span data-i18n="" class="menu-title">Inbox</span></a>
                    </li>
                    <li class=" nav-item"><a href="chat.html"><i class="ft-message-square"></i><span data-i18n="" class="menu-title">Chat</span></a>
                    </li>
                    <li class=" nav-item"><a href="taskboard.html"><i class="ft-file-text"></i><span data-i18n="" class="menu-title">Task Board</span></a>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="ft-aperture"></i><span data-i18n="" class="menu-title">UI Kit</span></a>
                        <ul class="menu-content">
                            <li><a href="grids.html" class="menu-item">Grid</a>
                            </li>
                            <li><a href="typography.html" class="menu-item">Typography</a>
                            </li>
                            <li><a href="syntax-highlighter.html" class="menu-item">Syntax Highlighter</a>
                            </li>
                            <li><a href="helper-classes.html" class="menu-item">Helper Classes</a>
                            </li>
                            <li><a href="text-utilities.html" class="menu-item">Text Utilities</a>
                            </li>
                            <li class="has-sub"><a href="#" class="menu-item">Icons</a>
                                <ul class="menu-content">
                                    <li><a href="feather.html" class="menu-item">Feather Icon</a>
                                    </li>
                                    <li><a href="font-awesome.html" class="menu-item">Font Awesome Icon</a>
                                    </li>
                                    <li><a href="simple-line.html" class="menu-item">Simple Line Icon</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="ft-box"></i><span data-i18n="" class="menu-title">Components</span></a>
                        <ul class="menu-content">
                            <li class="has-sub"><a href="#" class="menu-item">Bootstrap</a>
                                <ul class="menu-content">
                                    <li><a href="components-lists.html" class="menu-item">List</a>
                                    </li>
                                    <li><a href="components-buttons.html" class="menu-item">Buttons</a>
                                    </li>
                                    <li><a href="components-alerts.html" class="menu-item">Alerts</a>
                                    </li>
                                    <li><a href="components-badges.html" class="menu-item">Badges</a>
                                    </li>
                                    <li><a href="components-dropdowns.html" class="menu-item">Dropdowns</a>
                                    </li>
                                    <li><a href="components-media-objects.html" class="menu-item">Media Objects</a>
                                    </li>
                                    <li><a href="components-pagination.html" class="menu-item">Pagination</a>
                                    </li>
                                    <li><a href="components-progress.html" class="menu-item">Progress Bars</a>
                                    </li>
                                    <li><a href="components-modals.html" class="menu-item">Modals</a>
                                    </li>
                                    <li><a href="components-collapse.html" class="menu-item">Collapse</a>
                                    </li>
                                    <li><a href="components-accordion.html" class="menu-item">Accordion</a>
                                    </li>
                                    <li><a href="components-carousel.html" class="menu-item">Carousel</a>
                                    </li>
                                    <li><a href="components-datepicker.html" class="menu-item">Datepicker</a>
                                    </li>
                                    <li><a href="components-popover.html" class="menu-item">Popover</a>
                                    </li>
                                    <li><a href="components-tabs.html" class="menu-item">Tabs</a>
                                    </li>
                                    <li><a href="components-tooltip.html" class="menu-item">Tooltip</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub"><a href="#" class="menu-item">Extra</a>
                                <ul class="menu-content">
                                    <li><a href="sweet-alerts.html" class="menu-item">Sweet Alert</a>
                                    </li>
                                    <li><a href="toastr.html" class="menu-item">Toastr</a>
                                    </li>
                                    <li><a href="nouislider.html" class="menu-item">NoUI Slider</a>
                                    </li>
                                    <li><a href="upload.html" class="menu-item">Upload</a>
                                    </li>
                                    <li><a href="editor.html" class="menu-item">Editor</a>
                                    </li>
                                    <li><a href="dragndrop.html" class="menu-item">Drag and Drop</a>
                                    </li>
                                    <li><a href="tour.html" class="menu-item">Tour</a>
                                    </li>
                                    <li><a href="image-cropper.html" class="menu-item">Image Cropper</a>
                                    </li>
                                    <li><a href="tags-input.html" class="menu-item">Input Tag</a>
                                    </li>
                                    <li><a href="switch.html" class="menu-item">Switch</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="ft-edit"></i><span data-i18n="" class="menu-title">Forms</span></a>
                        <ul class="menu-content">
                            <li class="has-sub"><a href="#" class="menu-item">Elements</a>
                                <ul class="menu-content">
                                    <li><a href="inputs.html" class="menu-item">Inputs</a>
                                    </li>
                                    <li><a href="input-groups.html" class="menu-item">Input Groups</a>
                                    </li>
                                    <li><a href="input-grid.html" class="menu-item">Input Grid</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub"><a href="#" class="menu-item">Layouts</a>
                                <ul class="menu-content">
                                    <li><a href="basic-forms.html" class="menu-item">Basic Forms</a>
                                    </li>
                                    <li><a href="horizontal-forms.html" class="menu-item">Horizontal Forms</a>
                                    </li>
                                    <li><a href="hidden-labels.html" class="menu-item">Hidden Labels</a>
                                    </li>
                                    <li><a href="form-actions.html" class="menu-item">Form Actions</a>
                                    </li>
                                    <li><a href="bordered-forms.html" class="menu-item">Bordered Forms</a>
                                    </li>
                                    <li><a href="striped-rows.html" class="menu-item">Striped Rows</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="validation-forms.html" class="menu-item">Validation</a>
                            </li>
                            <li><a href="wizard-forms.html" class="menu-item">Wizard</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="ft-grid"></i><span data-i18n="" class="menu-title">Tables</span></a>
                        <ul class="menu-content">
                            <li><a href="regular-table.html" class="menu-item">Regular</a>
                            </li>
                            <li><a href="extended-table.html" class="menu-item">Extended</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="ft-layout"></i><span data-i18n="" class="menu-title">Data Tables</span></a>
                        <ul class="menu-content">
                            <li><a href="dt-basic-initialization.html" class="menu-item">Basic Initialisation</a>
                            </li>
                            <li><a href="dt-advanced-initialization.html" class="menu-item">Advanced initialisation</a>
                            </li>
                            <li><a href="dt-styling.html" class="menu-item">Styling</a>
                            </li>
                            <li><a href="dt-data-sources.html" class="menu-item">Data Sources</a>
                            </li>
                            <li><a href="dt-api.html" class="menu-item">API</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="ft-layers"></i><span data-i18n="" class="menu-title">Cards</span></a>
                        <ul class="menu-content">
                            <li><a href="basic-cards.html" class="menu-item">Basic Cards</a>
                            </li>
                            <li><a href="advanced-cards.html" class="menu-item">Advanced Cards</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="ft-layers"></i><span data-i18n="" class="menu-title">Maps</span></a>
                        <ul class="menu-content">
                            <li><a href="google-map.html" class="menu-item">Google Map</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="ft-bar-chart-2"></i><span data-i18n="" class="menu-title">Charts</span></a>
                        <ul class="menu-content">
                            <li><a href="chartjs.html" class="menu-item">ChartJs</a>
                            </li>
                            <li><a href="chartist.html" class="menu-item">Chartist</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a href="calendar.html"><i class="ft-calendar"></i><span data-i18n="" class="menu-title">Calendar</span></a>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="ft-copy"></i><span data-i18n="" class="menu-title">Pages</span></a>
                        <ul class="menu-content">
                            <li><a href="forgot-password-page.html" class="menu-item">Forgot Password</a>
                            </li>
                            <li><a href="horizontal-timeline-page.html" class="menu-item">Horizontal Timeline</a>
                            </li>
                            <li><a href="vertical-timeline-page.html" class="menu-item">Vertical Timeline</a>
                            </li>
                            <li><a href="login-page.html" class="menu-item">Login</a>
                            </li>
                            <li><a href="register-page.html" class="menu-item">Register</a>
                            </li>
                            <li><a href="user-profile-page.html" class="menu-item">User Profile</a>
                            </li>
                            <li><a href="lock-screen-page.html" class="menu-item">Lock Screen</a>
                            </li>
                            <li><a href="invoice-page.html" class="menu-item">Invoice</a>
                            </li>
                            <li><a href="error-page.html" class="menu-item">Error</a>
                            </li>
                            <li><a href="coming-soon-page.html" class="menu-item">Coming Soon</a>
                            </li>
                            <li><a href="maintenance-page.html" class="menu-item">Maintenance</a>
                            </li>
                            <li><a href="gallery-page.html" class="menu-item">Gallery</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a href="https://pixinvent.com/apex-angular-4-bootstrap-admin-template/documentation"><i class="ft-book"></i><span data-i18n="" class="menu-title">Documentation</span></a>
                    </li>
                    <li class=" nav-item"><a href="https://pixinvent.ticksy.com/"><i class="ft-life-buoy"></i><span data-i18n="" class="menu-title">Support</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- main menu content-->
        <div class="sidebar-background"></div>
        <!-- main menu footer-->
        <!-- include includes/menu-footer-->
        <!-- main menu footer-->
    </div>
    <!-- / main menu-->
    <!-- Navbar (Header) Starts-->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <form role="search" class="navbar-form navbar-right mt-1">
                    <div class="position-relative has-icon-right">
                        <input type="text" placeholder="Search" class="form-control round"/>
                        <div class="form-control-position"><i class="ft-search"></i></div>
                    </div>
                </form>
            </div>
            <div class="navbar-container">
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item mr-2">
                            <a id="navbar-fullscreen" href="javascript:;" class="nav-link apptogglefullscreen">
                                <i class="ft-maximize font-medium-3 blue-grey darken-4"></i>
                                <p class="d-none">fullscreen</p>
                            </a>
                        </li>
                        <li class="dropdown nav-item"><a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle"><i class="ft-flag font-medium-3 blue-grey darken-4"></i><span class="selected-language d-none"></span></a>
                            <div class="dropdown-menu dropdown-menu-right"><a href="javascript:;" class="dropdown-item py-1"><img src="app-assets/img/flags/us.png" class="langimg"/><span> English</span></a><a href="javascript:;" class="dropdown-item py-1"><img src="app-assets/img/flags/es.png" class="langimg"/><span> Spanish</span></a><a href="javascript:;" class="dropdown-item py-1"><img src="app-assets/img/flags/br.png" class="langimg"/><span> Portuguese</span></a><a href="javascript:;" class="dropdown-item"><img src="app-assets/img/flags/de.png" class="langimg"/><span> French</span></a></div>
                        </li>
                        <li class="dropdown nav-item"><a id="dropdownBasic2" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle"><i class="ft-bell font-medium-3 blue-grey darken-4"></i><span class="notification badge badge-pill badge-danger">4</span>
                                <p class="d-none">Notifications</p></a>
                            <div class="notification-dropdown dropdown-menu dropdown-menu-right">
                                <div class="noti-list"><a class="dropdown-item noti-container py-3 border-bottom border-bottom-blue-grey border-bottom-lighten-4"><i class="ft-bell info float-left d-block font-large-1 mt-1 mr-2"></i><span class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 info">New Order Received</span><span class="noti-text">Lorem ipsum dolor sit ametitaque in, et!</span></span></a><a class="dropdown-item noti-container py-3 border-bottom border-bottom-blue-grey border-bottom-lighten-4"><i class="ft-bell warning float-left d-block font-large-1 mt-1 mr-2"></i><span class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 warning">New User Registered</span><span class="noti-text">Lorem ipsum dolor sit ametitaque in </span></span></a><a class="dropdown-item noti-container py-3 border-bottom border-bottom-blue-grey border-bottom-lighten-4"><i class="ft-bell danger float-left d-block font-large-1 mt-1 mr-2"></i><span class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 danger">New Order Received</span><span class="noti-text">Lorem ipsum dolor sit ametest?</span></span></a><a class="dropdown-item noti-container py-3"><i class="ft-bell success float-left d-block font-large-1 mt-1 mr-2"></i><span class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 success">New User Registered</span><span class="noti-text">Lorem ipsum dolor sit ametnatus aut.</span></span></a></div><a class="noti-footer primary text-center d-block border-top border-top-blue-grey border-top-lighten-4 text-bold-400 py-1">Read All Notifications</a>
                            </div>
                        </li>
                        <li class="dropdown nav-item">
                            <a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle">
                                <i class="ft-user font-medium-3 blue-grey darken-4"></i>
                                <p class="d-none">User Settings</p>
                            </a>
                            <div ngbdropdownmenu="" aria-labelledby="dropdownBasic3" class="dropdown-menu dropdown-menu-right">
                                <a href="javascript:;" class="dropdown-item py-1">
                                    <i class="ft-settings mr-2"></i>
                                    <span>Settings</span>
                                </a>
                                <a href="javascript:;" class="dropdown-item py-1">
                                    <i class="ft-edit mr-2"></i>
                                    <span>Edit Profile</span>
                                </a>
                                <a href="javascript:;" class="dropdown-item py-1">
                                    <i class="ft-mail mr-2"></i>
                                    <span>My Inbox</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="ft-power mr-2"></i>
                                    <span>Salir</span>
                                </a>
                            </div>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        <li class="nav-item"><a href="javascript:;" class="nav-link position-relative notification-sidebar-toggle"><i class="ft-align-left font-medium-3 blue-grey darken-4"></i>
                                <p class="d-none">Notifications Sidebar</p></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar (Header) Ends-->

    <div class="main-panel">
        <div class="main-content">
            <div class="content-wrapper"><!--Statistics cards Starts-->
                @yield('content')
            </div>
        </div>

        <footer class="footer footer-static footer-light">
            <p class="clearfix text-muted text-sm-center px-2"><span>Copyright  &copy; 2018 <a href="#" id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2">CodsitTEAM </a>, All rights reserved. </span></p>
        </footer>

    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<!-- START Notification Sidebar-->
<aside id="notification-sidebar" class="notification-sidebar d-none d-sm-none d-md-block"><a class="notification-sidebar-close"><i class="ft-x font-medium-3"></i></a>
    <div class="side-nav notification-sidebar-content">
        <div class="row">
            <div class="col-12 mt-1">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#activity-tab" aria-expanded="true" class="nav-link active">Activity</a></li>
                    <li class="nav-item"><a id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#chat-tab" aria-expanded="false" class="nav-link">Chat</a></li>
                    <li class="nav-item"><a id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#settings-tab" aria-expanded="false" class="nav-link">Settings</a></li>
                </ul>
                <div class="tab-content px-1 pt-1">
                    <div id="activity-tab" role="tabpanel" aria-expanded="true" aria-labelledby="base-tab1" class="tab-pane active">
                        <div id="activity" class="col-12 timeline-left">
                            <h6 class="mt-1 mb-3 text-bold-400">RECENT ACTIVITY</h6>
                            <div id="timeline" class="timeline-left timeline-wrapper">
                                <ul class="timeline">
                                    <li class="timeline-line"></li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-purple bg-lighten-1"><i class="ft-shopping-cart"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="deep-purple-text medium-small">just now</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jim Doe Purchased new equipments for zonal office.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-info bg-lighten-1"><i class="fa fa-plane"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="cyan-text medium-small">Yesterday</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Your Next flight for USA will be on 15th August 2015.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-success bg-lighten-1"><i class="ft-mic"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="green-text medium-small">5 Days Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-warning bg-lighten-1"><i class="ft-map-pin"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="amber-text medium-small">1 Week Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-red bg-lighten-1"><i class="ft-inbox"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="deep-orange-text medium-small">2 Week Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-cyan bg-lighten-1"><i class="ft-mic"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="brown-text medium-small">1 Month Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-amber bg-lighten-1"><i class="ft-map-pin"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="deep-purple-text medium-small">3 Month Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-grey bg-lighten-1"><i class="ft-inbox"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="grey-text medium-small">1 Year Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="chat-tab" aria-labelledby="base-tab2" class="tab-pane">
                        <div id="chatapp" class="col-12">
                            <h6 class="mt-1 mb-3 text-bold-400">RECENT CHAT</h6>
                            <div class="collection border-none">
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-12.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Elizabeth Elliott </h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.00 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Thank you </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-6.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Mary Adams </h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.14 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Hello Boo </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-11.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Caleb Richards </h4><span class="medium-small float-right blue-grey-text text-lighten-3">9.00 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Keny ! </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-18.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">June Lane </h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.14 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Ohh God </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-1.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Edward Fletcher </h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.15 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Love you </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-2.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Crystal Bates </h4><span class="medium-small float-right blue-grey-text text-lighten-3">8.00 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Can we </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-3.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Nathan Watts </h4><span class="medium-small float-right blue-grey-text text-lighten-3">9.53 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Great! </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-15.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Willard Wood </h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.20 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Do it </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-19.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Ronnie Ellis </h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.30 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Got that </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-14.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Gwendolyn Wood </h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.34 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Like you </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-13.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Daniel Russell </h4><span class="medium-small float-right blue-grey-text text-lighten-3">12.00 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Thank you </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-22.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Sarah Graves </h4><span class="medium-small float-right blue-grey-text text-lighten-3">11.14 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Okay you </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-9.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Andrew Hoffman </h4><span class="medium-small float-right blue-grey-text text-lighten-3">7.30 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Can do </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-20.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Camila Lynch </h4><span class="medium-small float-right blue-grey-text text-lighten-3">2.00 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Leave it </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="settings-tab" aria-labelledby="base-tab3" class="tab-pane">
                        <div id="settings" class="col-12">
                            <h6 class="mt-1 mb-3 text-bold-400">GENERAL SETTINGS</h6>
                            <ul class="list-unstyled">
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Notifications</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="notifications1" checked="checked" type="checkbox" class="custom-control-input cz-bg-image-display">
                                                    <label for="notifications1" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Use checkboxes when looking for yes or no answers.</p>
                                </li>
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Show recent activity</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="recent-activity1" checked="checked" type="checkbox" class="custom-control-input cz-bg-image-display">
                                                    <label for="recent-activity1" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                </li>
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Notifications</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="notifications2" type="checkbox" class="custom-control-input cz-bg-image-display">
                                                    <label for="notifications2" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Use checkboxes when looking for yes or no answers.</p>
                                </li>
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Show recent activity</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="recent-activity2" type="checkbox" class="custom-control-input cz-bg-image-display">
                                                    <label for="recent-activity2" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                </li>
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Show your emails</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="show-emails" type="checkbox" class="custom-control-input cz-bg-image-display">
                                                    <label for="show-emails" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Use checkboxes when looking for yes or no answers.</p>
                                </li>
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Show Task statistics</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="show-stats" type="checkbox" class="custom-control-input cz-bg-image-display">
                                                    <label for="show-stats" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- END Notification Sidebar-->
<!-- Theme customizer Starts-->
<div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-sm-none d-md-block"><a class="customizer-close"><i class="ft-x font-medium-3"></i></a><a id="customizer-toggle-icon" class="customizer-toggle bg-danger"><i class="ft-settings font-medium-4 fa fa-spin white align-middle"></i></a>
    <div data-ps-id="df6a5ce4-a175-9172-4402-dabd98fc9c0a" class="customizer-content p-3 ps-container ps-theme-dark">
        <h4 class="text-uppercase mb-0 text-bold-400">Theme Customizer</h4>
        <p>Customize & Preview in Real Time</p>
        <hr>
        <!-- Sidebar Options Starts-->
        <h6 class="text-center text-bold-500 mb-3 text-uppercase">Sidebar Color Options</h6>
        <div class="cz-bg-color">
            <div class="row p-1">
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="pomegranate" class="gradient-pomegranate d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="king-yna" class="gradient-king-yna d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="ibiza-sunset" class="gradient-ibiza-sunset d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="flickr" class="gradient-flickr d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="purple-bliss" class="gradient-purple-bliss d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="man-of-steel" class="gradient-man-of-steel d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="purple-love" class="gradient-purple-love d-block rounded-circle"></span></div>
            </div>
            <div class="row p-1">
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="black" class="bg-black d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="white" class="bg-grey d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="primary" class="bg-primary d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="success" class="bg-success d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="warning" class="bg-warning d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="info" class="bg-info d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="danger" class="bg-danger d-block rounded-circle"></span></div>
            </div>
        </div>
        <!-- Sidebar Options Ends-->
        <hr>
        <!-- Sidebar BG Image Starts-->
        <h6 class="text-center text-bold-500 mb-3 text-uppercase">Sidebar Bg Image</h6>
        <div class="cz-bg-image row">
            <div class="col mb-3"><img src="app-assets/img/sidebar-bg/01.jpg" width="90" class="rounded"></div>
            <div class="col mb-3"><img src="app-assets/img/sidebar-bg/02.jpg" width="90" class="rounded"></div>
            <div class="col mb-3"><img src="app-assets/img/sidebar-bg/03.jpg" width="90" class="rounded"></div>
            <div class="col mb-3"><img src="app-assets/img/sidebar-bg/04.jpg" width="90" class="rounded"></div>
            <div class="col mb-3"><img src="app-assets/img/sidebar-bg/05.jpg" width="90" class="rounded"></div>
            <div class="col mb-3"><img src="app-assets/img/sidebar-bg/06.jpg" width="90" class="rounded"></div>
        </div>
        <!-- Sidebar BG Image Ends-->
        <hr>
        <!-- Sidebar BG Image Toggle Starts-->
        <div class="togglebutton">
            <div class="switch"><span>Sidebar Bg Image</span>
                <div class="float-right">
                    <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                        <input id="sidebar-bg-img" type="checkbox" checked="" class="custom-control-input cz-bg-image-display">
                        <label for="sidebar-bg-img" class="custom-control-label"></label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar BG Image Toggle Ends-->
        <hr>
        <!-- Compact Menu Starts-->
        <div class="togglebutton">
            <div class="switch"><span>Compact Menu</span>
                <div class="float-right">
                    <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                        <input id="cz-compact-menu" type="checkbox" class="custom-control-input cz-compact-menu">
                        <label for="cz-compact-menu" class="custom-control-label"></label>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div>
            <label for="cz-sidebar-width">Sidebar Width</label>
            <select id="cz-sidebar-width" class="custom-select cz-sidebar-width float-right">
                <option value="small">Small</option>
                <option value="medium" selected="">Medium</option>
                <option value="large">Large</option>
            </select>
        </div>
    </div>
</div>
<script src="app-assets/vendors/js/core/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/core/popper.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/prism.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/jquery.matchHeight-min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/screenfull.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/pace/pace.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="app-assets/vendors/js/jquery.steps.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/pickadate/picker.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/pickadate/picker.date.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/pickadate/picker.time.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/pickadate/legacy.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN APEX JS-->
<script src="app-assets/js/app-sidebar.js" type="text/javascript"></script>
<script src="app-assets/js/notification-sidebar.js" type="text/javascript"></script>
<script src="app-assets/js/customizer.js" type="text/javascript"></script>
<script src="app-assets/js/components-modal.min.js" type="text/javascript"></script>
<!-- END APEX JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@yield('script')

</body>
</html>