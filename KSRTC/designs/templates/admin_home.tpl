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


                            </span>
                        </div>

                       
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
                            <li><a href="admin_msg_view_stmr_send.php">Inbox ({$msg})</a></li>
                           
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

                <div class="row">
                    <!-- <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Products Sold</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">4565</h2>
                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                    </div> -->
                    <div  class="col-lg-3 col-sm-6"></div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">

                                <h3 class="card-title text-white">Total Pensioners</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{$pension}</h2>
                                    <!-- <p class="text-white mb-0">Jan - March 2019</p> -->
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Total Stationmasters</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{$station}</h2>
                                    <!-- <p class="text-white mb-0">Jan - March 2019</p> -->
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Total Messages</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{$msges}</h2>
                                    <!-- <p class="text-white mb-0">Jan - March 2019</p> -->
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="icon-envelope menu-icon"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

        <img src="user\assets\images\car-1.jpeg">

       
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>© KSRTC ALL RIGHTS RESERVED.</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="admin/plugins/common/common.min.js"></script>
    <script src="admin/js/custom.min.js"></script>
    <script src="admin/js/settings.js"></script>
    <script src="admin/js/gleek.js"></script>
    <script src="admin/js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="admin/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="admin/plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="admin/plugins/d3v3/index.js"></script>
    <script src="admin/plugins/topojson/topojson.min.js"></script>
    <script src="admin/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="admin/plugins/raphael/raphael.min.js"></script>
    <script src="admin/plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="admin/plugins/moment/moment.min.js"></script>
    <script src="admin/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="admin/plugins/chartist/js/chartist.min.js"></script>
    <script src="admin/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="admin/js/dashboard/dashboard-1.js"></script>

</body>


<!-- Mirrored from demo.themefisher.com/quixlab/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Apr 2022 16:09:53 GMT -->
</html>