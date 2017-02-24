<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>AdminDesigns - A Responsive HTML5 Admin UI Framework</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/skin/default_skin/css/theme.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin-tools/admin-forms/css/admin-forms.css">

  <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url();?>login/css/mdb.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
   <![endif]-->

<style>
.card-block {
  padding: 1.25rem;
}

.card-block::after {
  content: "";
  display: table;
  clear: both;
}
</style>

</head>

<body class="external-page sb-l-c sb-r-c">

    <!-- Start: Settings Scripts -->
    <script>
        var boxtest = localStorage.getItem('boxed');

        if (boxtest === 'true') {
            document.body.className += ' boxed-layout';
        }
    </script>
    <!-- End: Settings Scripts -->

    <!-- Start: Main -->
    <div id="main" class="animated fadeIn">

        <!-- Start: Content -->
        <section id="content_wrapper">

            <!-- begin canvas animation bg -->
            <div id="canvas-wrapper">
                <canvas id="demo-canvas"></canvas>
            </div>

            <!-- Begin: Content -->
            <section id="content">

                <div class="admin-form theme-info" id="login1">

                    <div class="row mb15 table-layout">

                        <div class="col-xs-6 va-m pln">
                            <a href="dashboard.html" title="Return to Dashboard">
                                <img src="assets/img/logos/logo_white.png" title="AdminDesigns Logo" class="img-responsive w250">
                            </a>
                        </div>

                    </div>

                    <div class="panel panel-info mt10 br-n">
                        <div class="col-lg-12 wow fadeInRight">
                            <!--Form-->
                            <form action="<?= base_url('login/login') ?>" method="post" id="form_login">

                                <div class="card wow fadeInRight" style="background:#FFF;">
                                    <div class="card-block">

                                        <!--Body-->
                                        <div class="md-form">
                                            <i class="fa fa-user prefix"></i>
                                            <input type="text" name="username" id="form3" class="form-control-login">
                                            <label for="form3">Username</label>
                                        </div>

                                        <div class="md-form">
                                            <i class="fa fa-lock prefix"></i>
                                            <input type="password" name="password" id="form4" class="form-control-login">
                                            <label for="form4">Password</label>
                                        </div>

                                        <div class="text-xs-center">
                                            <button class="btn btn-ins btn-lg" type="submit" id="btn_login" >Sign Up</button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                            <!--/.Form-->
                        </div>
                    </div>
                </div>

            </section>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- Google Map API -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="<?php echo base_url();?>vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- Tooltips -->
    <script type="text/javascript" src="<?php echo base_url();?>login/js/tether.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Page Plugins -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/login/EasePack.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/login/rAF.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/login/TweenLite.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/login/login.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/demo.js"></script>



    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url();?>login/js/mdb.min.js"></script>

</body>

</html>
