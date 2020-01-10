<!DOCTYPE html>
<html lang="en">

<<<<<<< HEAD:view/apidoc/index/main.php
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Spirit Apidoc - 更适合自己的接口文档管理工具</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="<?php echo $static_path; ?>images/favicon.ico">

    <link href="<?php echo $static_path; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $static_path; ?>css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $static_path; ?>css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $static_path; ?>css/style.css" rel="stylesheet" type="text/css">
</head>

<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="">
                    <!--<a href="index.html" class="logo text-center">Admiria</a>-->
                    <a href="index.html" class="logo"><img src="<?php echo $static_path; ?>images/logo-sm.png" height="36" alt="logo"></a>
=======
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Spirit Apidoc - 更适合自己的接口文档管理工具</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="<?php echo $static_path;?>images/favicon.ico">

        <link href="<?php echo $static_path;?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $static_path;?>css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $static_path;?>css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $static_path;?>css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body class="fixed-left">

            <!-- Loader -->
            <div id="preloader"><div id="status"><div class="spinner"></div></div></div>
    
            <!-- Begin page -->
            <div id="wrapper">
    
                <!-- ========== Left Sidebar Start ========== -->
                <div class="left side-menu">
    
                    <!-- LOGO -->
                    <div class="topbar-left">
                        <div class="">
                            <!--<a href="index.html" class="logo text-center">Admiria</a>-->
                            <a href="index.html" class="logo"><img src="<?php echo $static_path;?>images/logo-sm.png" height="36" alt="logo"></a>
                        </div>
                    </div>
    
                    <div class="sidebar-inner slimscrollleft">
                        <div id="sidebar-menu">
                            <ul id="unique_menu">
    
                                <li class="menu-title">接口管理</li>
    
                                <li class="">
                                    <a href="<?php echo url('apidoc.api/index')?>" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> 接口列表 </span> </a>
                                 
                                </li>
    
                                <li>
                                    <a href="widgets.html" class="waves-effect"><i class="mdi mdi-cube-outline"></i><span> Widgets </span></a>
                                </li>
    
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email-outline"></i><span> Email <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="email-inbox.html">Inbox</a></li>
                                        <li><a href="email-read.html">Email Read</a></li>
                                        <li><a href="email-compose.html">Email Compose</a></li>
                                    </ul>
                                </li>
    
                                <li>
                                    <a href="calendar.html" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span> Calendar </span></a>
                                </li>
    
                                <li class="menu-title">系统配置</li>
    
                                <li class="">
                                    <a href="form-elements.html" class="waves-effect"><i class="mdi mdi-buffer"></i> <span> 模型数据源  </span> </a>
                                    
                                </li>
    
                                <li class="">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span> 错误码  </span></a> 
                                </li>
    
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-line"></i><span> Charts <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="charts-morris.html">Morris Chart</a></li>
                                        <li><a href="charts-chartist.html">Chartist Chart</a></li>
                                        <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                                        <li><a href="charts-flot.html">Flot Chart</a></li>
                                        <li><a href="charts-c3.html">C3 Chart</a></li>
                                        <li><a href="charts-sparkline.html">Sparkline Chart</a></li>
                                        <li><a href="charts-other.html">Jquery Knob Chart</a></li>
                                        <li><a href="charts-peity.html">Peity Chart</a></li>
                                    </ul>
                                </li>
    
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted-type"></i><span> Tables <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="tables-basic.html">Basic Tables</a></li>
                                        <li><a href="tables-datatable.html">Data Table</a></li>
                                        <li><a href="tables-responsive.html">Responsive Table</a></li>
                                        <li><a href="tables-editable.html">Editable Table</a></li>
                                    </ul>
                                </li>
    
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-album"></i> <span> Icons  <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></span> </a>
                                    <ul class="list-unstyled">
                                        <li><a href="icons-material.html">Material Design</a></li>
                                        <li><a href="icons-ion.html">Ion Icons</a></li>
                                        <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                        <li><a href="icons-themify.html">Themify Icons</a></li>
                                        <li><a href="icons-dripicons.html">Dripicons</a></li>
                                        <li><a href="icons-typicons.html">Typicons Icons</a></li>
                                        <li><a href="icons-weather.html">Weather Icons</a></li>
                                        <li><a href="icons-mobirise.html">Mobirise Icons</a></li>
                                    </ul>
                                </li>
    
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-maps"></i><span> Maps <span class="badge badge-pill badge-danger pull-right">2</span> </span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="maps-google.html"> Google Map</a></li>
                                        <li><a href="maps-vector.html"> Vector Map</a></li>
                                    </ul>
                                </li>
    
                                <li class="menu-title">Extras</li>
    
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-location"></i><span> Authentication <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                    <ul class="list-unstyled">
                                        <li><a target="_blank" href="pages-login.html">Login</a></li>
                                        <li><a target="_blank" href="pages-register.html">Register</a></li>
                                        <li><a target="_blank" href="pages-recoverpw.html">Recover Password</a></li>
                                        <li><a target="_blank" href="pages-lock-screen.html">Lock Screen</a></li>
                                        <li><a target="_blank" href="pages-login-2.html">Login 2</a></li>
                                        <li><a target="_blank" href="pages-register-2.html">Register 2</a></li>
                                        <li><a target="_blank" href="pages-recoverpw-2.html">Recover Password 2</a></li>
                                        <li><a target="_blank" href="pages-lock-screen-2.html">Lock Screen 2</a></li>
                                    </ul>
                                </li>
    
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Extra Pages <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="pages-timeline.html">Timeline</a></li>
                                        <li><a href="pages-invoice.html">Invoice</a></li>
                                        <li><a href="pages-directory.html">Directory</a></li>
                                        <li><a href="pages-blank.html">Blank Page</a></li>
                                        <li><a href="pages-404.html">Error 404</a></li>
                                        <li><a href="pages-500.html">Error 500</a></li>
                                        <li><a href="pages-pricing.html">Pricing</a></li>
                                        <li><a href="pages-gallery.html">Gallery</a></li>
                                        <li><a target="_blank" href="pages-maintenance.html">Maintenance</a></li>
                                        <li><a target="_blank"  href="pages-coming-soon.html">Coming Soon</a></li>
                                    </ul>
                                </li>
    
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-cart-outline"></i><span> Ecommerce <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="ecommerce-product-list.html">Product List</a></li>
                                        <li><a href="ecommerce-product-grid.html">Product Grid</a></li>
                                        <li><a href="ecommerce-order-history.html">Order History</a></li>
                                        <li><a href="ecommerce-customers.html">Customers</a></li>
                                        <li><a href="ecommerce-product-edit.html">Product Edit</a></li>
                                    </ul>
                                </li>
    
                                <li>
                                    <a href="../frontend/" class="waves-effect" target="_blank"><i class="mdi mdi-airplane"></i><span> Front End </span></a>
                                </li>
    
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-flask-outline"></i><span> Email Templates <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="email-templates-basic.html">Basic Action Email</a></li>
                                        <li><a href="email-templates-alert.html">Alert Email</a></li>
                                        <li><a href="email-templates-billing.html">Billing Email</a></li>
                                    </ul>
                                </li>
    
                                <li class="menu-title">Help & Support</li>
    
                                <li>
                                    <a href="faq.html" class="waves-effect"><i class="mdi mdi-help-circle"></i><span> FAQ </span></a>
                                </li>
    
                                <li>
                                    <a href="contact.html" class="waves-effect"><i class="mdi mdi-headset"></i><span> Contact <span class="badge badge-pill badge-warning pull-right">3</span> </span></a>
                                </li>
    
                                <li>
                                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-file-document-box"></i><span> Documentation </span></a>
                                </li>
    
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div> <!-- end sidebarinner -->
>>>>>>> d8a2a16b9c8bd17aacb240057f2e1761f072c1b1:view/apidoc/index/index.php
                </div>
            </div>

            <div class="sidebar-inner slimscrollleft">
                <div id="sidebar-menu">
                    <ul id="unique_menu">

                        <li class="menu-title">接口管理</li>

                        <li class="">
                            <a href="<?php echo url('apidoc/api/index') ?>" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> 接口列表 </span> </a>

                        </li>

                        <li>
                            <a href="widgets.html" class="waves-effect"><i class="mdi mdi-cube-outline"></i><span> 接口测试 </span></a>
                        </li>

                        

                        <li class="menu-title">通用配置</li>

                        <li class="">
                            <a href="form-elements.html" class="waves-effect"><i class="mdi mdi-buffer"></i> <span> 数据源 </span> </a>

                        </li>
                        <li class="">
                            <a href="form-elements.html" class="waves-effect"><i class="mdi mdi-buffer"></i> <span> 数据结构 </span> </a>

                        </li>
                        <li class="">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span> 错误码 </span></a>
                        </li>

                        <li class="">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span> 全局请求 </span></a>
                        </li>





                    </ul>
                </div>
                <div class="clearfix"></div>
            </div> <!-- end sidebarinner -->
        </div>
        <!-- Left Sidebar End -->


        <!-- Start right Content here -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">
                        <!-- Search input -->
                        <div class="search-wrap" id="search-wrap">
                            <div class="search-bar">
                                <input class="search-input" type="search" placeholder="Search" />
                                <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                    <i class="mdi mdi-close-circle"></i>
                                </a>
                            </div>
                        </div>

                        <ul class="list-inline float-right mb-0">
                            <!-- Search -->
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link waves-effect toggle-search" href="#" data-target="#search-wrap">
                                    <i class="mdi mdi-magnify noti-icon"></i>
                                </a>
                            </li>
                            <!-- Fullscreen -->
                            <li class="list-inline-item dropdown notification-list hidden-xs-down">
                                <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                    <i class="mdi mdi-fullscreen noti-icon"></i>
                                </a>
                            </li>
                            <!-- language-->
                            <li class="list-inline-item dropdown notification-list hidden-xs-down">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect text-muted" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    English <img src="assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt="" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-right language-switch">
                                    <a class="dropdown-item" href="#"><img src="assets/images/flags/germany_flag.jpg" alt="" height="16" /><span> German </span></a>
                                    <a class="dropdown-item" href="#"><img src="assets/images/flags/italy_flag.jpg" alt="" height="16" /><span> Italian </span></a>
                                    <a class="dropdown-item" href="#"><img src="assets/images/flags/french_flag.jpg" alt="" height="16" /><span> French </span></a>
                                    <a class="dropdown-item" href="#"><img src="assets/images/flags/spain_flag.jpg" alt="" height="16" /><span> Spanish </span></a>
                                    <a class="dropdown-item" href="#"><img src="assets/images/flags/russia_flag.jpg" alt="" height="16" /><span> Russian </span></a>
                                </div>
                            </li>
                            <!-- notification-->
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="ion-ios7-bell noti-icon"></i>
                                    <span class="badge badge-danger noti-icon-badge">3</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5>Notification (3)</h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                        <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                        <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                    </a>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        View All
                                    </a>

                                </div>
<<<<<<< HEAD:view/apidoc/index/main.php
                            </li>
                            <!-- User-->
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
                                    <a class="dropdown-item" href="#"><span class="badge badge-success pull-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a>
                                </div>
                            </li>
                        </ul>

                        <!-- Page title -->
                        <ul class="list-inline menu-left mb-0">
                            <li class="list-inline-item">
                                <button type="button" class="button-menu-mobile open-left waves-effect">
                                    <i class="ion-navicon"></i>
                                </button>
                            </li>
                            <li class="hide-phone list-inline-item app-search">
                                <h3 class="page-title">Dashboard 2</h3>
                            </li>
                        </ul>

                        <div class="clearfix"></div>
                    </nav>

                </div>
                <!-- Top Bar End -->

                <!-- ==================
=======
    
                                <ul class="list-inline float-right mb-0">
                                    <!-- Search -->
                                    <li class="list-inline-item dropdown notification-list">
                                        <a class="nav-link waves-effect toggle-search" href="#"  data-target="#search-wrap">
                                            <i class="mdi mdi-magnify noti-icon"></i>
                                        </a>
                                    </li>
                                    <!-- Fullscreen -->
                                    <li class="list-inline-item dropdown notification-list hidden-xs-down">
                                        <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                            <i class="mdi mdi-fullscreen noti-icon"></i>
                                        </a>
                                    </li>
                                    <!-- language-->
                                    <li class="list-inline-item dropdown notification-list hidden-xs-down">
                                        <a class="nav-link dropdown-toggle arrow-none waves-effect text-muted" data-toggle="dropdown" href="#" role="button"
                                           aria-haspopup="false" aria-expanded="false">
                                            English <img src="assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""/>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right language-switch">
                                            <a class="dropdown-item" href="#"><img src="assets/images/flags/germany_flag.jpg" alt="" height="16"/><span> German </span></a>
                                            <a class="dropdown-item" href="#"><img src="assets/images/flags/italy_flag.jpg" alt="" height="16"/><span> Italian </span></a>
                                            <a class="dropdown-item" href="#"><img src="assets/images/flags/french_flag.jpg" alt="" height="16"/><span> French </span></a>
                                            <a class="dropdown-item" href="#"><img src="assets/images/flags/spain_flag.jpg" alt="" height="16"/><span> Spanish </span></a>
                                            <a class="dropdown-item" href="#"><img src="assets/images/flags/russia_flag.jpg" alt="" height="16"/><span> Russian </span></a>
                                        </div>
                                    </li>
                                    <!-- notification-->
                                    <li class="list-inline-item dropdown notification-list">
                                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                           aria-haspopup="false" aria-expanded="false">
                                            <i class="ion-ios7-bell noti-icon"></i>
                                            <span class="badge badge-danger noti-icon-badge">3</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                            <!-- item-->
                                            <div class="dropdown-item noti-title">
                                                <h5>Notification (3)</h5>
                                            </div>
    
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                                <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                            </a>
    
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                                <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                            </a>
    
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                                <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                            </a>
    
                                            <!-- All-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                View All
                                            </a>
    
                                        </div>
                                    </li>
                                    <!-- User-->
                                    <li class="list-inline-item dropdown notification-list">
                                        <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                           aria-haspopup="false" aria-expanded="false">
                                            <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                            <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                                            <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
                                            <a class="dropdown-item" href="#"><span class="badge badge-success pull-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> Settings</a>
                                            <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="<?php echo url('login/logout')?>"><i class="dripicons-exit text-muted"></i> 退出登录</a>
                                        </div>
                                    </li>
                                </ul>
    
                                <!-- Page title -->
                                <ul class="list-inline menu-left mb-0">
                                    <li class="list-inline-item">
                                        <button type="button" class="button-menu-mobile open-left waves-effect">
                                            <i class="ion-navicon"></i>
                                        </button>
                                    </li>
                                    <li class="hide-phone list-inline-item app-search">
                                        <h3 class="page-title">Dashboard 2</h3>
                                    </li>
                                </ul>
    
                                <div class="clearfix"></div>
                            </nav>
    
                        </div>
                        <!-- Top Bar End -->
    
                        <!-- ==================
>>>>>>> d8a2a16b9c8bd17aacb240057f2e1761f072c1b1:view/apidoc/index/index.php
                             PAGE CONTENT START
                             ================== -->


                <div class="page-content-wrapper">

                    <div class="container-fluid" id="result">


                    </div><!-- container -->

                </div> <!-- Page content Wrapper -->

            </div> <!-- content -->

            <footer class="footer">
                © 2019 - 2020 Spirit Apidoc - 更适合自己的接口文档管理工具 <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by PHP精灵</span>
            </footer>

        </div>
    </div>
    <!-- jQuery  -->
    <script src="<?php echo $static_path; ?>js/jquery.min.js"></script>
    <script src="<?php echo $static_path; ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $static_path; ?>js/modernizr.min.js"></script>
    <script src="<?php echo $static_path; ?>js/jquery.slimscroll.js"></script>
    <script src="<?php echo $static_path; ?>js/waves.js"></script>
    <script src="<?php echo $static_path; ?>js/jquery.nicescroll.js"></script>
    <script src="<?php echo $static_path; ?>js/jquery.scrollTo.min.js"></script>


    <script src="<?php echo $static_path; ?>js/app.js"></script>
    <script src="<?php echo $static_path; ?>js/ajax.js"></script>

</body>

</html>