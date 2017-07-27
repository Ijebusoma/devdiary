<!DOCTYPE html>
<!--

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/metro.css" rel="stylesheet" />
    <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/font-awesome-min/css/font-awesome.min.css">
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/style_responsive.css" rel="stylesheet" />
    <link href="assets/css/style_default.css" rel="stylesheet" id="style_color" />
    <link rel="stylesheet" type="text/css" href="assets/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico" />
</head>

<body class="fixed-top">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="container-fluid">
            <!-- BEGIN LOGO -->
            <a class="brand" href="/dashboard">
                <img src="assets/img/logo.png" alt="logo" />
            </a>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                <img src="assets/img/menu-toggler.png" alt="" />
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <ul class="nav pull-right">
                <li class="dropdown user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img alt="" src="assets/img/avatar1_small.jpg" />
                        <span class="username">{{Auth::user()->name}}</span>
                        <i class="icon-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="/profile"><i class="icon-user"></i> My Profile</a></li>
                        <li><a href="calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>
                        <li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">

                                <i class="icon-key"></i> Log Out

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
@yield('content');


<div class="page-container row-fluid">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar nav-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul>
            <li>
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->

                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li>
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->

                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="start active ">
                <a href="/dashboard">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>

            <li class="has-sub ">
                <a href="javascript:;">
                    <i class="icon-table"></i>
                    <span class="title">Form Stuff</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub">
                    <li ><a href="form_layout.html">Form Layouts</a></li>
                    <li ><a href="form_samples.html">Advance Form Samples</a></li>
                    <li ><a href="form_component.html">Form Components</a></li>
                    <li ><a href="form_wizard.html">Form Wizard</a></li>
                    <li ><a href="form_validation.html">Form Validation</a></li>
                    <li ><a href="form_fileupload.html">Multiple File Upload</a></li>
                    <li ><a href="form_dropzone.html">Dropzone File Upload</a></li>
                </ul>
            </li>
            <li class="has-sub ">
                <a href="javascript:;">
                    <i class="icon-th-list"></i>
                    <span class="title">Data Tables</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub">
                    <li ><a href="table_basic.html">Basic Tables</a></li>
                    <li ><a href="table_managed.html">Managed Tables</a></li>
                    <li ><a href="table_editable.html">Editable Tables</a></li>
                </ul>
            </li>
            <li class="has-sub ">
                <a href="javascript:;">
                    <i class="icon-th-list"></i>
                    <span class="title">Portlets</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub">
                    <li ><a href="portlet_general.html">General Portlets</a></li>
                    <li ><a href="portlet_draggable.html">Draggable Portlets</a></li>
                </ul>
            </li>

            <li class="">
                <a href="charts.html">
                    <i class="icon-bar-chart"></i>
                    <span class="title">Visual Charts</span>
                </a>
            </li>
            <li class="">
                <a href="calendar.html">
                    <i class="icon-calendar"></i>
                    <span class="title">Calendar</span>
                </a>
            </li>
            <li class="">
                <a href="gallery.html">
                    <i class="icon-camera"></i>
                    <span class="title">Gallery</span>
                </a>
            </li>
            <li class="has-sub ">
                <a href="javascript:;">
                    <i class="icon-briefcase"></i>
                    <span class="title">Extra</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub">
                    <li ><a href="extra_profile.html">User Profile</a></li>
                    <li ><a href="extra_faq.html">FAQ</a></li>
                    <li ><a href="extra_search.html">Search Results</a></li>
                    <li ><a href="extra_invoice.html">Invoice</a></li>
                    <li ><a href="extra_pricing_table.html">Pricing Tables</a></li>
                    <li ><a href="extra_404.html">404 Page</a></li>
                    <li ><a href="extra_500.html">500 Page</a></li>
                    <li ><a href="extra_blank.html">Blank Page</a></li>
                    <li ><a href="extra_full_width.html">Full Width Page</a></li>
                </ul>
            </li>
            <li class="">
                <a href="login.html">
                    <i class="icon-user"></i>
                    <span class="title">Login Page</span>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN PAGE -->
    <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div id="portlet-config" class="modal hide">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button"></button>
                <h3>Widget Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here will be a configuration form</p>
            </div>
        </div>
        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <!-- BEGIN PAGE CONTAINER-->
        <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
                <div class="span12">

                    <h3 class="page-title">
                        Hi {{Auth::user()->name}}
                        <small></small>
                    </h3>
                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="/dashboard">Home</a>
                            <i class="icon-angle-right"></i>
                        </li>
                        <li><a href="/dashboard">Dashboard</a></li>
                        <li class="pull-right no-text-shadow">
                            <div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">
                                <i class="icon-calendar"></i>
                                <span></span>
                                <i class="icon-angle-down"></i>
                            </div>
                        </li>
                    </ul>
                    <!-- END PAGE TITLE & BREADCRUMB-->
                </div>
            </div>
            <!-- END PAGE HEADER-->
            <div id="dashboard">

                <div class="clearfix"></div>
                <div class="row-fluid">
                    <div class="span6">

                    </div>
                    <div class="span6">

                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row-fluid">
                    <div class="span6">

                    </div>
                    <div class="span6">

                    </div>

            </div>
            <div class="span6">

            </div>
        </div>
    </div>
</div>
<!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->
</div>
@yield('sidebar')

<!--PROFILE -->
<h3 class="page-title">
    User Profile				<small>user profile sample</small>
</h3>
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <a href="#">Extra</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">User Profile</a></li>
</ul>
<!-- END PAGE TITLE & BREADCRUMB-->
</div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid profile">
    <div class="span12">
        <!--BEGIN TABS-->
        <div class="tabbable tabbable-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1_1" data-toggle="tab">Overview</a></li>
                <li><a href="#tab_1_2" data-toggle="tab">Profile Info</a></li>
                <li><a href="#tab_1_3" data-toggle="tab">Account</a></li>
                <li><a href="#tab_1_4" data-toggle="tab">Projects</a></li>
                <li><a href="#tab_1_6" data-toggle="tab">Help</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane row-fluid active" id="tab_1_1">
                    <ul class="unstyled profile-nav span3">
                        <li><img src="assets/img/profile/profile-img.png" alt="" /> <a href="#" class="profile-edit">edit</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Messages <span>3</span></a></li>
                        <li><a href="#">Friends</a></li>
                        <li><a href="#">Settings</a></li>
                    </ul>
                    <div class="span9">
                        <div class="row-fluid">
                            <div class="span8 profile-info">
                                <h1>John Doe</h1>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam tincidunt erat volutpat.</p>
                                <p><a href="#">www.mywebsite.com</a></p>
                                <ul class="unstyled inline">
                                    <li><i class="icon-map-marker"></i> Spain</li>
                                    <li><i class="icon-calendar"></i> 18 Jan 1982</li>
                                    <li><i class="icon-briefcase"></i> Design</li>
                                    <li><i class="icon-star"></i> Top Seller</li>
                                    <li><i class="icon-heart"></i> BASE Jumping</li>
                                </ul>
                            </div>
                            <!--end span8-->
                            <div class="span4">
                                <div class="portlet sale-summary">
                                    <div class="portlet-title">
                                        <h4>Sales Summary</h4>
                                        <div class="tools">
                                            <a class="reload" href="javascript:;"></a>
                                        </div>
                                    </div>
                                    <ul class="unstyled">
                                        <li>
                                            <span class="sale-info">TODAY SOLD <i class="icon-img-up"></i></span>
                                            <span class="sale-num">23</span>
                                        </li>
                                        <li>
                                            <span class="sale-info">WEEKLY SALES <i class="icon-img-down"></i></span>
                                            <span class="sale-num">87</span>
                                        </li>
                                        <li>
                                            <span class="sale-info">TOTAL SOLD</span>
                                            <span class="sale-num">2377</span>
                                        </li>
                                        <li>
                                            <span class="sale-info">EARNS</span>
                                            <span class="sale-num">$37.990</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--end span4-->
                        </div>
                        <!--end row-fluid-->
                        <div class="tabbable tabbable-custom tabbable-custom-profile">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_1_11" data-toggle="tab">Latest Customers</a></li>
                                <li class=""><a href="#tab_1_22" data-toggle="tab">Feeds</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1_11">
                                    <div class="portlet-body" style="display: block;">
                                        <table class="table table-striped table-bordered table-advance table-hover">
                                            <thead>
                                            <tr>
                                                <th><i class="icon-briefcase"></i> Company</th>
                                                <th class="hidden-phone"><i class="icon-question-sign"></i> Descrition</th>
                                                <th><i class="icon-bookmark"></i> Amount</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><a href="#">Pixel Ltd</a></td>
                                                <td class="hidden-phone">Server hardware purchase</td>
                                                <td>52560.10$ <span class="label label-success label-mini">Paid</span></td>
                                                <td><a class="btn mini green-stripe" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        Smart House
                                                    </a>
                                                </td>
                                                <td class="hidden-phone">Office furniture purchase</td>
                                                <td>5760.00$ <span class="label label-warning label-mini">Pending</span></td>
                                                <td><a class="btn mini blue-stripe" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        FoodMaster Ltd
                                                    </a>
                                                </td>
                                                <td class="hidden-phone">Company Anual Dinner Catering</td>
                                                <td>12400.00$ <span class="label label-success label-mini">Paid</span></td>
                                                <td><a class="btn mini blue-stripe" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        WaterPure Ltd
                                                    </a>
                                                </td>
                                                <td class="hidden-phone">Payment for Jan 2013</td>
                                                <td>610.50$ <span class="label label-danger label-mini">Overdue</span></td>
                                                <td><a class="btn mini red-stripe" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">Pixel Ltd</a></td>
                                                <td class="hidden-phone">Server hardware purchase</td>
                                                <td>52560.10$ <span class="label label-success label-mini">Paid</span></td>
                                                <td><a class="btn mini green-stripe" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        Smart House
                                                    </a>
                                                </td>
                                                <td class="hidden-phone">Office furniture purchase</td>
                                                <td>5760.00$ <span class="label label-warning label-mini">Pending</span></td>
                                                <td><a class="btn mini blue-stripe" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        FoodMaster Ltd
                                                    </a>
                                                </td>
                                                <td class="hidden-phone">Company Anual Dinner Catering</td>
                                                <td>12400.00$ <span class="label label-success label-mini">Paid</span></td>
                                                <td><a class="btn mini blue-stripe" href="#">View</a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--tab-pane-->
                                <div class="tab-pane" id="tab_1_22">
                                    <div class="tab-pane active" id="tab_1_1_1">
                                        <div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
                                            <ul class="feeds">
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-success">
                                                                    <i class="icon-bell"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    You have 4 pending tasks.
                                                                    <span class="label label-important label-mini">
																					Take action
																					<i class="icon-share-alt"></i>
																					</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            Just now
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-success">
                                                                        <i class="icon-bell"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc">
                                                                        New version v1.4 just lunched!
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date">
                                                                20 mins
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-important">
                                                                    <i class="icon-bolt"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    Database server #12 overloaded. Please fix the issue.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            24 mins
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-info">
                                                                    <i class="icon-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New order received. Please take care of it.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            30 mins
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-success">
                                                                    <i class="icon-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New order received. Please take care of it.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            40 mins
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-warning">
                                                                    <i class="icon-plus"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New user registered.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            1.5 hours
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-success">
                                                                    <i class="icon-bell-alt"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    Web server hardware needs to be upgraded.
                                                                    <span class="label label-inverse label-mini">Overdue</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            2 hours
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label">
                                                                    <i class="icon-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New order received. Please take care of it.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            3 hours
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-warning">
                                                                    <i class="icon-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New order received. Please take care of it.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            5 hours
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-info">
                                                                    <i class="icon-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New order received. Please take care of it.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            18 hours
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label">
                                                                    <i class="icon-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New order received. Please take care of it.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            21 hours
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-info">
                                                                    <i class="icon-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New order received. Please take care of it.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            22 hours
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label">
                                                                    <i class="icon-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New order received. Please take care of it.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            21 hours
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-info">
                                                                    <i class="icon-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New order received. Please take care of it.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            22 hours
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label">
                                                                    <i class="icon-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New order received. Please take care of it.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            21 hours
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-info">
                                                                    <i class="icon-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New order received. Please take care of it.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            22 hours
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label">
                                                                    <i class="icon-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New order received. Please take care of it.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            21 hours
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-info">
                                                                    <i class="icon-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New order received. Please take care of it.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            22 hours
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--tab-pane-->
                            </div>
                        </div>
                    </div>
                    <!--end span9-->
                </div>
                <!--end tab-pane-->
                <div class="tab-pane profile-classic row-fluid" id="tab_1_2">
                    <div class="span2"><img src="assets/img/profile/profile-img.png" alt="" /> <a href="#" class="profile-edit">edit</a></div>
                    <ul class="unstyled span10">
                        <li><span>User Name:</span> JDuser</li>
                        <li><span>First Name:</span> John</li>
                        <li><span>Last Name:</span> Doe</li>
                        <li><span>Counrty:</span> Spain</li>
                        <li><span>Birthday:</span> 18 Jan 1982</li>
                        <li><span>Occupation:</span> Web Developer</li>
                        <li><span>Email:</span> <a href="#">john@mywebsite.com</a></li>
                        <li><span>Interests:</span> Design, Web etc.</li>
                        <li><span>Website Url:</span> <a href="#">http://www.mywebsite.com</a></li>
                        <li><span>Mobile Number:</span> +1 646 580 DEMO (6284)</li>
                        <li><span>About:</span> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</li>
                    </ul>
                </div>
                <!--tab_1_2-->
                <div class="tab-pane row-fluid profile-account" id="tab_1_3">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="span3">
                                <ul class="ver-inline-menu tabbable margin-bottom-10">
                                    <li class="active">
                                        <a data-toggle="tab" href="#tab_1-1">
                                            <i class="icon-cog"></i>
                                            Personal info
                                        </a>
                                        <span class="after"></span>
                                    </li>
                                    <li class=""><a data-toggle="tab" href="#tab_2-2"><i class="icon-picture"></i> Change Avatar</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab_3-3"><i class="icon-lock"></i> Change Password</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab_4-4"><i class="icon-eye-open"></i> Privacity Settings</a></li>
                                </ul>
                            </div>
                            <div class="span9">
                                <div class="tab-content">
                                    <div id="tab_1-1" class="tab-pane active">
                                        <div style="height: auto;" id="accordion1-1" class="accordion collapse">
                                            <form action="#">
                                                <label class="control-label">First Name</label>
                                                <input type="text" placeholder="John" class="m-wrap span8" />
                                                <label class="control-label">Last Name</label>
                                                <input type="text" placeholder="Doe" class="m-wrap span8" />
                                                <label class="control-label">Mobile Number</label>
                                                <input type="text" placeholder="+1 646 580 DEMO (6284)" class="m-wrap span8" />
                                                <label class="control-label">Interests</label>
                                                <input type="text" placeholder="Design, Web etc." class="m-wrap span8" />
                                                <label class="control-label">Occupation</label>
                                                <input type="text" placeholder="Web Developer" class="m-wrap span8" />
                                                <label class="control-label">Counrty</label>
                                                <div class="controls">
                                                    <input type="text" class="span8 m-wrap" style="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source="[&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;US&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]" />
                                                    <p class="help-block"><span class="muted">Start typing to auto complete!. E.g: US</span></p>
                                                </div>
                                                <label class="control-label">About</label>
                                                <textarea class="span8 m-wrap" rows="3"></textarea>
                                                <label class="control-label">Website Url</label>
                                                <input type="text" placeholder="http://www.mywebsite.com" class="m-wrap span8" />
                                                <div class="submit-btn">
                                                    <a href="#" class="btn green">Save Changes</a>
                                                    <a href="#" class="btn">Cancel</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div id="tab_2-2" class="tab-pane">
                                        <div style="height: auto;" id="accordion2-2" class="accordion collapse">
                                            <form action="#">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                                <br />
                                                <div class="controls">
                                                    <div class="thumbnail" style="width: 291px; height: 170px;">
                                                        <img src="http://www.placehold.it/291x170/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                                    </div>
                                                </div>
                                                <div class="space10"></div>
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="input-append">
                                                        <div class="uneditable-input">
                                                            <i class="icon-file fileupload-exists"></i>
                                                            <span class="fileupload-preview"></span>
                                                        </div>
                                                        <span class="btn btn-file">
																		<span class="fileupload-new">Select file</span>
																		<span class="fileupload-exists">Change</span>
																		<input type="file" class="default" />
																		</span>
                                                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="controls">
                                                    <span class="label label-important">NOTE!</span>
                                                    <span>You can write some information here..</span>
                                                </div>
                                                <div class="space10"></div>
                                                <div class="submit-btn">
                                                    <a href="#" class="btn green">Submit</a>
                                                    <a href="#" class="btn">Cancel</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div id="tab_3-3" class="tab-pane">
                                        <div style="height: auto;" id="accordion3-3" class="accordion collapse">
                                            <form action="#">
                                                <label class="control-label">Current Password</label>
                                                <input type="password" class="m-wrap span8" />
                                                <label class="control-label">New Password</label>
                                                <input type="password" class="m-wrap span8" />
                                                <label class="control-label">Re-type New Password</label>
                                                <input type="password" class="m-wrap span8" />
                                                <div class="submit-btn">
                                                    <a href="#" class="btn green">Change Password</a>
                                                    <a href="#" class="btn">Cancel</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div id="tab_4-4" class="tab-pane">
                                        <div style="height: auto;" id="accordion4-4" class="accordion collapse">
                                            <form action="#">
                                                <div class="profile-settings row-fluid">
                                                    <div class="span9">
                                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus..</p>
                                                    </div>
                                                    <div class="control-group span3">
                                                        <div class="controls">
                                                            <label class="radio">
                                                                <input type="radio" name="optionsRadios1" value="option1" />
                                                                Yes
                                                            </label>
                                                            <label class="radio">
                                                                <input type="radio" name="optionsRadios1" value="option2" checked />
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end profile-settings-->
                                                <div class="profile-settings row-fluid">
                                                    <div class="span9">
                                                        <p>Enim eiusmod high life accusamus terry richardson ad squid wolf moon</p>
                                                    </div>
                                                    <div class="control-group span3">
                                                        <div class="controls">
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="" /> All
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="" /> Friends
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end profile-settings-->
                                                <div class="profile-settings row-fluid">
                                                    <div class="span9">
                                                        <p>Pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson</p>
                                                    </div>
                                                    <div class="control-group span3">
                                                        <div class="controls">
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="" /> Yes
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end profile-settings-->
                                                <div class="profile-settings row-fluid">
                                                    <div class="span9">
                                                        <p>Cliche reprehenderit enim eiusmod high life accusamus terry</p>
                                                    </div>
                                                    <div class="control-group span3">
                                                        <div class="controls">
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="" /> Yes
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end profile-settings-->
                                                <div class="profile-settings row-fluid">
                                                    <div class="span9">
                                                        <p>Oiusmod high life accusamus terry richardson ad squid wolf fwopo</p>
                                                    </div>
                                                    <div class="control-group span3">
                                                        <div class="controls">
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="" /> Yes
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end profile-settings-->
                                                <div class="space5"></div>
                                                <div class="submit-btn">
                                                    <a href="#" class="btn green">Save Changes</a>
                                                    <a href="#" class="btn">Cancel</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end span9-->
                        </div>
                    </div>
                </div>
                <!--end tab-pane-->
                <div class="tab-pane" id="tab_1_4">
                    <div class="row-fluid add-portfolio">
                        <div class="pull-left">
                            <span>502 Items sold this week</span>
                        </div>
                        <div class="pull-right">
                            <a href="#" class="btn icn-only green">Add a new Project <i class="m-icon-swapright m-icon-white"></i></a>
                        </div>
                    </div>
                    <!--end add-portfolio-->
                    <div class="row-fluid portfolio-block">
                        <div class="span5 portfolio-text">
                            <img src="assets/img/profile/portfolio/logo_metronic.jpg" alt="" />
                            <div class="portfolio-text-info">
                                <h4>Metronic - Responsive Template</h4>
                                <p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="span5" style="overflow:hidden;">
                            <div class="portfolio-info">
                                Today Sold
                                <span>187</span>
                            </div>
                            <div class="portfolio-info">
                                Total Sold
                                <span>1789</span>
                            </div>
                            <div class="portfolio-info">
                                Earns
                                <span>$37.240</span>
                            </div>
                        </div>
                        @yield('profile')
<!--Profile ends -->

<!-- BEGIN FOOTER -->
<div class="footer">

    <div class="span pull-right">
        <span class="go-top"><i class="icon-angle-up"></i></span>
    </div>
</div>
@yield('footer')

<script src="assets/js/jquery-1.8.3.min.js"></script>
<!--[if lt IE 9]>
<script src="assets/js/excanvas.js"></script>
<script src="assets/js/respond.js"></script>
<![endif]-->
<script src="assets/breakpoints/breakpoints.js"></script>
<script src="assets/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
<script src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.blockui.js"></script>
<script src="assets/js/jquery.cookie.js"></script>
<script src="assets/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="assets/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="assets/flot/jquery.flot.js"></script>
<script src="assets/flot/jquery.flot.resize.js"></script>
<script type="text/javascript" src="assets/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.pulsate.min.js"></script>
<script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="assets/js/app.js"></script>
<script>
    jQuery(document).ready(function() {
        App.setPage("index");  // set current page
        App.init(); // init the rest of plugins and elements
    });
</script>
<!-- END JAVASCRIPTS -->
