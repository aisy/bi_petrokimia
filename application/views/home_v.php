<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

	<!-- Datatable-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/plugins/datatables/media/css/dataTables.bootstrap.css">

	 <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/plugins/magnific/magnific-popup.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/skin/default_skin/css/theme.css">

 	<!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin-tools/admin-forms/css/admin-forms.css">

    <!-- Admin Modals CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin-tools/admin-plugins/admin-modal/adminmodal.css">
    <!-- Admin Panels CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin-tools/admin-plugins/admin-panels/adminpanels.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin-tools/admin-forms/css/admin-forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
   <![endif]-->
</head>

<body class="dashboard-page sb-l-o sb-r-c">

    <!-- Start: Theme Preview Pane -->
    <div id="skin-toolbox">
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-icon"><i class="fa fa-gear text-primary"></i>
                </span>
                <span class="panel-title"> Theme Options</span>
            </div>
            <div class="panel-body pn">

                <ul class="nav nav-list nav-list-sm pl15 pt10" role="tablist">
                    <li class="active">
                        <a href="#toolbox-header" role="tab" data-toggle="tab">Navbar</a>
                    </li>
                    <li>
                        <a href="#toolbox-sidebar" role="tab" data-toggle="tab">Sidebar</a>
                    </li>
                    <li>
                        <a href="#toolbox-settings" role="tab" data-toggle="tab">Misc</a>
                    </li>
                </ul>

                <div class="tab-content p20 ptn pb15">
                    <div role="tabpanel" class="tab-pane active" id="toolbox-header">
                        <form id="toolbox-header-skin">
                            <h4 class="mv20">Header Skins</h4>

                            <div class="skin-toolbox-swatches">
                                <div class="checkbox-custom checkbox-disabled fill mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin8" checked value="bg-light">
                                    <label for="headerSkin8">Light</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-primary mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin1" value="bg-primary">
                                    <label for="headerSkin1">Primary</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-info mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin3" value="bg-info">
                                    <label for="headerSkin3">Info</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-warning mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin4" value="bg-warning">
                                    <label for="headerSkin4">Warning</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-danger mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin5" value="bg-danger">
                                    <label for="headerSkin5">Danger</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-alert mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin6" value="bg-alert">
                                    <label for="headerSkin6">Alert</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-system mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin7" value="bg-system">
                                    <label for="headerSkin7">System</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-success mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin2" value="bg-success">
                                    <label for="headerSkin2">Success</label>
                                </div>
                                <div class="checkbox-custom fill mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin9" value="bg-dark">
                                    <label for="headerSkin9">Dark</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="toolbox-sidebar">
                        <form id="toolbox-sidebar-skin">

                            <h4 class="mv20">Sidebar Skins</h4>
                            <div class="skin-toolbox-swatches">
                                <div class="checkbox-custom fill mb5">
                                    <input type="radio" name="sidebarSkin" checked id="sidebarSkin3" value="">
                                    <label for="sidebarSkin3">Dark</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-disabled mb5">
                                    <input type="radio" name="sidebarSkin" id="sidebarSkin1" value="sidebar-light">
                                    <label for="sidebarSkin1">Light</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-light mb5">
                                    <input type="radio" name="sidebarSkin" id="sidebarSkin2" value="sidebar-light light">
                                    <label for="sidebarSkin2">Lighter</label>
                                </div>

                            </div>

                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="toolbox-settings">
                        <form id="toolbox-settings-misc">
                            <h4 class="mv20 mtn">Layout Options</h4>
                            <div class="form-group">
                                <div class="checkbox-custom fill mb5">
                                    <input type="checkbox" checked="" id="header-option">
                                    <label for="header-option">Fixed Header</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox-custom fill mb5">
                                    <input type="checkbox" id="sidebar-option">
                                    <label for="sidebar-option">Fixed Sidebar</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox-custom fill mb5">
                                    <input type="checkbox" id="breadcrumb-option">
                                    <label for="breadcrumb-option">Fixed Breadcrumbs</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox-custom fill mb5">
                                    <input type="checkbox" id="breadcrumb-hidden">
                                    <label for="breadcrumb-hidden">Hide Breadcrumbs</label>
                                </div>
                            </div>
                            <h4 class="mv20">Layout Options</h4>
                            <div class="form-group">
                                <div class="radio-custom mb5">
                                    <input type="radio" id="fullwidth-option" checked name="layout-option">
                                    <label for="fullwidth-option">Fullwidth Layout</label>
                                </div>
                            </div>
                            <div class="form-group mb20">
                                <div class="radio-custom radio-disabled mb5">
                                    <input type="radio" id="boxed-option" name="layout-option" disabled>
                                    <label for="boxed-option">Boxed Layout <b class="text-muted">(Coming Soon)</b></label>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="form-group mn br-t p15">
                    <a href="#" id="clearLocalStorage" class="btn btn-primary btn-block pb10 pt10">Clear LocalStorage</a>
                </div>

            </div>
        </div>
    </div>
    <!-- End: Theme Preview Pane -->

    <!-- Start: Main -->
    <div id="main">

        <!-- Start: Header -->
        <header class="navbar navbar-fixed-top bg-light">
            <div class="navbar-branding">
                <a class="navbar-brand" href="dashboard.html"> <b>Admin</b>Designs
                </a>
                <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
                <ul class="nav navbar-nav pull-right hidden">
                    <li>
                        <a href="#" class="sidebar-menu-toggle">
                            <span class="octicon octicon-ruby fs20 mr10 pull-right "></span>
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a class="sidebar-menu-toggle" href="#">
                        <span class="octicon octicon-ruby fs18"></span>
                    </a>
                </li>
                <li>
                    <a class="topbar-menu-toggle" href="#">
                        <span class="glyphicons glyphicons-magic fs16"></span>
                    </a>
                </li>
                <li>
                    <span id="toggle_sidemenu_l2" class="glyphicon glyphicon-log-in fa-flip-horizontal hidden"></span>
                </li>
                <li class="dropdown hidden">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="glyphicons glyphicons-settings fs14"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="javascript:void(0);">
                                <span class="fa fa-times-circle-o pr5 text-primary"></span> Reset LocalStorage </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="fa fa-slideshare pr5 text-info"></span> Force Global Logout </a>
                        </li>
                        <li class="divider mv5"></li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="fa fa-tasks pr5 text-danger"></span> Run Cron Job </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="fa fa-wrench pr5 text-warning"></span> Maintenance Mode </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="request-fullscreen toggle-active" href="#">
                        <span class="octicon octicon-screen-full fs18"></span>
                    </a>
                </li>
            </ul>
            <form class="navbar-form navbar-left navbar-search ml5" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search..." value="Search...">
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="flag-xs flag-us"></span>
                        <span class="fw600">US</span>
                    </a>
                    <ul class="dropdown-menu animated animated-short flipInX" role="menu">
                        <li>
                            <a href="javascript:void(0);" class="fw600">
                                <span class="flag-xs flag-in mr10"></span> Hindu </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="fw600">
                                <span class="flag-xs flag-tr mr10"></span> Turkish </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="fw600">
                                <span class="flag-xs flag-es mr10"></span> Spanish </a>
                        </li>
                    </ul>
                </li>
                <li class="ph10 pv20"> <i class="fa fa-circle text-tp fs8"></i>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <img src="<?php echo base_url();?>assets/img/avatars/5.jpg" alt="avatar" class="mw30 br64 mr15">
                        <span>John.Smith</span>
                        <span class="caret caret-tp"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">
                        <li class="bg-light br-b br-light p8">
                            <span class="pull-left ml10">
                                <select id="user-status">
                                    <optgroup label="Current Status:">
                                        <option value="1-1">Away</option>
                                        <option value="1-2">Offline</option>
                                        <option value="1-3" selected="selected">Online</option>
                                    </optgroup>
                                </select>
                            </span>

                            <span class="pull-right mr10">
                                <select id="user-role">
                                    <optgroup label="Logged in As:">
                                        <option value="1-1">Client</option>
                                        <option value="1-2">Editor</option>
                                        <option value="1-3" selected="selected">Admin</option>
                                    </optgroup>
                                </select>
                            </span>
                            <div class="clearfix"></div>

                        </li>
                        <li class="of-h">
                            <a href="#" class="fw600 p12 animated animated-short fadeInUp">
                                <span class="fa fa-envelope pr5"></span> Messages
                                <span class="pull-right lh20 h-20 label label-warning label-sm">2</span>
                            </a>
                        </li>
                        <li class="br-t of-h">
                            <a href="#" class="fw600 p12 animated animated-short fadeInUp">
                                <span class="fa fa-user pr5"></span> Friends
                                <span class="pull-right lh20 h-20 label label-warning label-sm">6</span>
                            </a>
                        </li>
                        <li class="br-t of-h">
                            <a href="#" class="fw600 p12 animated animated-short fadeInDown">
                                <span class="fa fa-gear pr5"></span> Account Settings </a>
                        </li>
                        <li class="br-t of-h">
                            <a href="<?php echo base_url();?>login/logout" class="fw600 p12 animated animated-short fadeInDown">
                                <span class="fa fa-power-off pr5"></span> Logout </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </header>
        <!-- End: Header -->

        <!-- Start: Sidebar -->
        <aside id="sidebar_left" class="nano nano-primary">
            <div class="nano-content">

                <!-- Start: Sidebar Header -->
                <header class="sidebar-header">
                    <div class="user-menu">
                        <div class="row text-center mbn">
                            <div class="col-xs-4">
                                <a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="Dashboard">
                                    <span class="glyphicons glyphicons-home"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">
                                    <span class="glyphicons glyphicons-inbox"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">
                                    <span class="glyphicons glyphicons-bell"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">
                                    <span class="glyphicons glyphicons-imac"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
                                    <span class="glyphicons glyphicons-settings"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">
                                    <span class="glyphicons glyphicons-restart"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- End: Sidebar Header -->

                <!-- sidebar menu -->
                <ul class="nav sidebar-menu">
                    <li class="sidebar-label pt20">Menu</li>
                    <li <?php if($view=='home'){echo $active;}?>>
                        <a href="<?php echo base_url();?>home">
                            <span class="glyphicons glyphicons-home"></span>
                            <span class="sidebar-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-label pt15">Exclusive Tools</li>
                    <li>
                        <a <?php if ($view=='admin'){echo $open;}else {echo 'class="accordion-toggle"';}?> href="#">
                            <span class="glyphicons glyphicons-fire"></span>
                            <span class="sidebar-title">Manajemen</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
                                <li <?php if($view=='pupuk'){echo $active;}?>>
                                <a href="<?php echo base_url();?>pupuk">
                                    <span class="glyphicons glyphicons-book"></span> Pupuk </a>
                            </li>
                            <li>
                                <a href="admin_plugins-modals.html">
                                    <span class="glyphicons glyphicons-show_big_thumbnails"></span> Bahan Baku </a>
                            </li>
                            <li <?php if($view=='admin'){echo $active;}?>>
                                <a href="<?php echo base_url();?>admin">
                                    <span class="glyphicons glyphicons-sampler"></span> Admin </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="accordion-toggle" href="#">
                            <span class="glyphicons glyphicons-cup"></span>
                            <span class="sidebar-title">Laporan Penjualan </span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
                                <a href="admin_forms-elements.html">
                                    <span class="glyphicons glyphicons-edit"></span> Pupuk Subsidi </a>
                            </li>
                            <li>
                                <a href="admin_forms-widgets.html">
                                    <span class="glyphicons glyphicons-calendar"></span> Pupuk Non-Subsidi </a>
                            </li>
                            <li>

                        </ul>
                    </li>

                    <!-- sidebar resources -->
                    <li class="sidebar-label pt20">Elements</li>
                    <li>
                        <a class="accordion-toggle" href="#">
                            <span class="glyphicons glyphicons-bell"></span>
                            <span class="sidebar-title">Peramalan</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
                                <a href="ui_alerts.html">
                                    <span class="glyphicons glyphicons-warning_sign"></span> Penjualan </a>
                            </li>
                            <li>
                                <a href="ui_animations.html">
                                    <span class="glyphicons glyphicons-dislikes"></span> Stok Bahan Baku </a>
                            </li>

                        </ul>
                    </li>



                </ul>
                <div class="sidebar-toggle-mini">
                    <a href="#">
                        <span class="fa fa-sign-out"></span>
                    </a>
                </div>
            </div>
        </aside>

        <!-- Start: Content -->
        <section id="content_wrapper">

            <!-- Start: Topbar-Dropdown -->
            <div id="topbar-dropmenu">
                <div class="topbar-menu row">
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-success">
                            <span class="metro-icon glyphicons glyphicons-inbox"></span>
                            <p class="metro-title">Messages</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-info">
                            <span class="metro-icon glyphicons glyphicons-parents"></span>
                            <p class="metro-title">Users</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-alert">
                            <span class="metro-icon glyphicons glyphicons-headset"></span>
                            <p class="metro-title">Support</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-primary">
                            <span class="metro-icon glyphicons glyphicons-cogwheels"></span>
                            <p class="metro-title">Settings</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-warning">
                            <span class="metro-icon glyphicons glyphicons-facetime_video"></span>
                            <p class="metro-title">Videos</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-system">
                            <span class="metro-icon glyphicons glyphicons-picture"></span>
                            <p class="metro-title">Pictures</p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End: Topbar-Dropdown -->

            <!-- Start: Topbar -->
            <header id="topbar">
                <div class="topbar-left">
                    <ol class="breadcrumb">
                        <li class="crumb-active">
                            <a href="dashboard.html">Dashboard</a>
                        </li>
                        <li class="crumb-icon">
                            <a href="dashboard.html">
                                <span class="glyphicon glyphicon-home"></span>
                            </a>
                        </li>
                        <li class="crumb-link">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="crumb-trail">Dashboard</li>
                    </ol>
                </div>
                <div class="topbar-right">
                    <div class="ib topbar-dropdown">
                        <label for="topbar-multiple" class="control-label pr10 fs11 text-muted">Reporting Period</label>
                        <select id="topbar-multiple" multiple="multiple">
                            <optgroup label="Filter By:">
                                <option value="1-1">Last 30 Days</option>
                                <option value="1-2" selected="selected">Last 60 Days</option>
                                <option value="1-3">Last Year</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="ml15 ib va-m" id="toggle_sidemenu_r">
                        <a href="#" class="pl5"> <i class="fa fa-sign-in fs22 text-primary"></i>
                            <span class="badge badge-hero badge-danger">3</span>
                        </a>
                    </div>
                </div>
            </header>
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content">

                <?php $this->load->view($page);?>
            </section>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->

        <!-- Start: Right Sidebar -->
        <aside id="sidebar_right" class="nano">
            <div class="sidebar_right_content nano-content">
                <div class="tab-block sidebar-block br-n">
                    <ul class="nav nav-tabs tabs-border nav-justified hidden">
                        <li class="active">
                            <a href="#sidebar-right-tab1" data-toggle="tab">Tab 1</a>
                        </li>
                        <li>
                            <a href="#sidebar-right-tab2" data-toggle="tab">Tab 2</a>
                        </li>
                        <li>
                            <a href="#sidebar-right-tab3" data-toggle="tab">Tab 3</a>
                        </li>
                    </ul>
                    <div class="tab-content br-n">
                        <div id="sidebar-right-tab1" class="tab-pane active">

                            <h5 class="title-divider text-muted mb20"> Server Statistics <span class="pull-right"> 2013 <i class="fa fa-caret-down ml5"></i> </span> </h5>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
                                    <span class="fs11">DB Request</span>
                                </div>
                            </div>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
                                    <span class="fs11 text-left">Server Load</span>
                                </div>
                            </div>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
                                    <span class="fs11 text-left">Server Connections</span>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt30 mb10">Traffic Margins</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">132</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-success-dark mn"> <i class="fa fa-caret-up"></i> 13.2% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt25 mb10">Database Request</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">212</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-success-dark mn"> <i class="fa fa-caret-up"></i> 25.6% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt25 mb10">Server Response</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">82.5</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-danger mn"> <i class="fa fa-caret-down"></i> 17.9% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt40 mb20"> Server Statistics <span class="pull-right text-primary fw600">USA</span> </h5>
                            <div id="sidebar-right-map" class="hide-jzoom" style="width: 100%; height: 180px;"></div>

                        </div>
                        <div id="sidebar-right-tab2" class="tab-pane"></div>
                        <div id="sidebar-right-tab3" class="tab-pane"></div>
                    </div>
                    <!-- end: .tab-content -->
                </div>
            </div>
        </aside>
        <!-- End: Right Sidebar -->

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- Google Map API -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="<?php echo base_url();?>vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap/bootstrap.min.js"></script>

	<!-- Page Plugins -->
    <script type="text/javascript" src="<?php echo base_url();?>vendor/plugins/magnific/jquery.magnific-popup.js"></script>
     <!-- Admin Forms Javascript -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin-tools/admin-forms/js/jquery-ui-monthpicker.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin-tools/admin-forms/js/jquery-ui-timepicker.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin-tools/admin-forms/js/jquery-ui-touch-punch.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin-tools/admin-forms/js/jquery.spectrum.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin-tools/admin-forms/js/jquery.stepper.min.js"></script>

 	<!-- Datatables -->
    <script type="text/javascript" src="<?php echo base_url();?>vendor/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>vendor/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
    <!-- Sparklines CDN -->
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>

    <!-- Chart Plugins -->
    <script type="text/javascript" src="<?php echo base_url();?>vendor/plugins/highcharts/highcharts.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>vendor/plugins/circles/circles.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>vendor/plugins/raphael/raphael.js"></script>

    <!-- Holder js  -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap/holder.min.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/demo.js"></script>

    <!-- Admin Panels  -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin-tools/admin-plugins/admin-panels/json2.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin-tools/admin-plugins/admin-panels/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin-tools/admin-plugins/admin-panels/adminpanels.js"></script>

    <!-- Page Javascript -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/widgets.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {

        "use strict";

        // Init Theme Core
        Core.init({
            sbm: "sb-l-c",
        });

        // Init Demo JS
        Demo.init();

        // Init Widget Demo JS
        // demoHighCharts.init();

        // Because we are using Admin Panels we use the OnFinish
        // callback to activate the demoWidgets. It's smoother if
        // we let the panels be moved and organized before
        // filling them with content from various plugins

        // Init plugins used on this page
        // HighCharts, JvectorMap, Admin Panels

        // Init Admin Panels on widgets inside the ".admin-panels" container
        $('.admin-panels').adminpanel({
            grid: '.admin-grid',
            draggable: true,
            mobile: true,
            callback: function() {
                bootbox.confirm('<h3>A Custom Callback!</h3>', function() {});
            },
            onFinish: function() {
                $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onLoad');

                // Init the rest of the plugins now that the panels
                // have had a chance to be moved and organized.
                // It's less taxing to organize empty panels
                demoHighCharts.init();
                runVectorMaps();

                // We also refresh any "in-view" waypoints to ensure
                // the correct position is being calculated after the
                // Admin Panels plugin moved everything
                Waypoint.refreshAll();

            },
            onSave: function() {
                $(window).trigger('resize');
            }
        });

        // Widget VectorMap
        function runVectorMaps() {

            // Jvector Map Plugin
            var runJvectorMap = function() {
                // Data set
                var mapData = [900, 700, 350, 500];
                // Init Jvector Map
                $('#WidgetMap').vectorMap({
                    map: 'us_lcc_en',
                    //regionsSelectable: true,
                    backgroundColor: 'transparent',
                    series: {
                        markers: [{
                            attribute: 'r',
                            scale: [3, 7],
                            values: mapData
                        }]
                    },
                    regionStyle: {
                        initial: {
                            fill: '#E5E5E5'
                        },
                        hover: {
                            "fill-opacity": 0.3
                        }
                    },
                    markers: [{
                        latLng: [37.78, -122.41],
                        name: 'San Francisco,CA'
                    }, {
                        latLng: [36.73, -103.98],
                        name: 'Texas,TX'
                    }, {
                        latLng: [38.62, -90.19],
                        name: 'St. Louis,MO'
                    }, {
                        latLng: [40.67, -73.94],
                        name: 'New York City,NY'
                    }],
                    markerStyle: {
                        initial: {
                            fill: '#a288d5',
                            stroke: '#b49ae0',
                            "fill-opacity": 1,
                            "stroke-width": 10,
                            "stroke-opacity": 0.3,
                            r: 3
                        },
                        hover: {
                            stroke: 'black',
                            "stroke-width": 2
                        },
                        selected: {
                            fill: 'blue'
                        },
                        selectedHover: {}
                    },
                });
                // Manual code to alter the Vector map plugin to
                // allow for individual coloring of countries
                var states = ['US-CA', 'US-TX', 'US-MO',
                    'US-NY'
                ];
                var colors = [bgWarningLr, bgPrimaryLr, bgInfoLr, bgAlertLr];
                var colors2 = [bgWarning, bgPrimary, bgInfo, bgAlert];
                $.each(states, function(i, e) {
                    $("#WidgetMap path[data-code=" + e + "]").css({
                        fill: colors[i]
                    });
                });
                $('#WidgetMap').find('.jvectormap-marker')
                    .each(function(i, e) {
                        $(e).css({
                            fill: colors2[i],
                            stroke: colors2[i]
                        });
                    });
            }

            if ($('#WidgetMap').length) {
                runJvectorMap();
            }
        }

		$('#datatable2').dataTable({
            "aoColumnDefs": [{
                'bSortable': false,
                'aTargets': [-1]
            }],
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": "",
                    "sNext": ""
                }
            },
            "iDisplayLength": 5,
            "aLengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
            "sDom": '<"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>',
            "oTableTools": {
                "sSwfPath": "<?php echo base_url();?>vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
            }
        });



    });
</script>

    <!-- END: PAGE SCRIPTS -->

</body>

</html>
