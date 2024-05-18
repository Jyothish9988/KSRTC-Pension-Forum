<?php /* Smarty version 2.6.26, created on 2022-10-09 11:43:41
         compiled from admin_sub_header.tpl */ ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themefisher.com/quixlab/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Apr 2022 16:09:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ADMIN</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="admin/images/favicon.png">
    <!-- Pignose Calender -->
    <link href="admin/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="admin/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="admin/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
      <link href="admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="admin/css/style.css" rel="stylesheet">
 
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
       <div class="nav-header">
            <div class="brand-logo">
                <a href="#">
                    <!-- <b class="logo-abbr"><img src="images/logo.png" alt=""> </b> -->
                    <!-- <span class="logo-compact"><img src="images/logo-compact.png" alt=""></span> -->
                    <span class="brand-title">
                        <h1>KSRTC</h1>
                        <!-- <img src="home/img/logo.png" alt=""> -->
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1">
                                <!-- <i class="mdi mdi-magnify"></i> -->
                            </span>
                        </div>
                      <!--   <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div> -->
                    </div>
                </div>
                
 <div class="header-right">

<li><a href="logout.php"><i class="icon-key"></i> <span>Logout</span></a></li>
                       
                    
</div>


            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
 <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Login Approval Panel</span>
                        </a>
                        <ul aria-expanded="false">
                             <li><a href="admin_stmr_view.php" aria-expanded="false">Station master</a></li>
                            <li><a href="admin_pension_view.php" aria-expanded="false">Pension</a></li>
                        </ul>
                    </li>


<!-- mesage-start -->
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Message</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="admin_msg_view_stmr_send.php">Inbox (<?php echo $this->_tpl_vars['msg']; ?>
)</a></li>
                           
                        </ul>
                    </li>
<!-- message-close -->

<!-- news-start -->
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-grid menu-icon"></i><span class="nav-text">NEWS</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="admin_news.php">NEWS SEND</a></li>
                            <li><a href="admin_news_view.php">NEWS VIEW</a></li>

                        </ul>
                    </li>
<!-- news end -->

<!-- panel-start -->
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i><span class="nav-text">Panel</span>
                        </a>
                        <ul aria-expanded="false">
                            
                            <li><a href="admin_pension_complaint_view.php" aria-expanded="false">Pension complaint</a></li> 
                            <li><a href="admin_pension_feedback_view.php" aria-expanded="false">Pension Feedback</a></li> 
                            <li><a href="admin_stmr_pension_panel_view.php" aria-expanded="false">Stationmaster Approved Pensions</a></li>  
                            <li><a href="admin_pension_approved_view.php" aria-expanded="false">Pension Approved List</a></li>                  
                        </ul>
                    </li>
<!-- panel-end -->






                </ul>
            </div>
        </div>
<!-- sidebar-end -->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li> -->
                        <li class="breadcrumb-item active"><a href="admin_home.php"><i class="icon-home"><span>Home</span></i></a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h4 class="card-title">Data Table</h4> -->
                                <div class="table-responsive">
                
                                    <table class="table table-striped table-bordered zero-configuration">
                                       <!--  <center> -->


      