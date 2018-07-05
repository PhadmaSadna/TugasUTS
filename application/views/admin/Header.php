<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo site_url('asset/css/normalize.css')?>">
    <link rel="stylesheet" href="<?php echo site_url('asset/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo site_url('asset/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?php echo site_url('asset/css/themify-icons.css')?>">
    <link rel="stylesheet" href="<?php echo site_url('asset/css/flag-icon.min.css')?>">
    <link rel="stylesheet" href="<?php echo site_url('asset/css/cs-skin-elastic.css')?>">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo site_url('asset/scss/style.css')?>">
    <link href="<?php echo site_url('asset/css/lib/vector-map/jqvmap.min.css')?>" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    <!-- Data Tables -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <script type="text/javascript" src="<?php echo site_url('assets/js/custom.js')?>"></script>

</head>
<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="<?php echo base_url()?>asset/images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url()?>Customer/"> <i class="menu-icon fa fa-female"></i>Data Customer </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url()?>Guide/"> <i class="menu-icon fa fa-male"></i>Data Guide</a>
                    </li>
                    <li class="active">
                        <a href="#"> <i class="menu-icon fa fa-users"></i>Data Account</a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url()?>Paket_Tour/"> <i class="menu-icon fa fa-suitcase"></i>Data Paket Tour</a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url()?>BookingTour/"> <i class="menu-icon fa fa-tasks"></i>Data Booking Tour </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">
                <div class="col-sm-7"></div>
                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo base_url()?>asset/images/admin.jpg" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>
                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
    <script src="<?php echo site_url('asset/js/vendor/jquery-2.1.4.min.js')?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="<?php echo site_url('asset/js/plugins.js')?>"></script>
    <script src="<?php echo site_url('asset/js/main.js')?>"></script>


    <script src="<?php echo site_url('asset/js/lib/chart-js/Chart.bundle.js')?>"></script>
    <script src="<?php echo site_url('asset/js/dashboard.js')?>"></script>
    <script src="<?php echo site_url('asset/js/widgets.js')?>"></script>
    
</body>
</html>

</html>