<?php /* Smarty version 2.6.26, created on 2022-08-29 07:42:47
         compiled from admin_msg_view_reply_stmr_send.tpl */ ?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.themefisher.com/quixlab/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Apr 2022 16:10:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="admin/images/favicon.png">
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
                <a href="admin/index-2.html">
                    <b class="logo-abbr"><img src="admin/images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="admin/images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="admin/images/logo-text.png" alt="">
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
              <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">


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
                            <li><a href="admin_stmr_view.php" aria-expanded="false">Station master</a></li>
                            <!-- <li><a href="admin_pension_view.php" aria-expanded="false">Pension</a></li> -->
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
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin/javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="admin/javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                

                                <div class="form-validation">
                                    <form class="form-valide" action="" method="POST">
                                        <input type="hidden" name="hide" value='h'>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Message<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="msg" placeholder="Enter Reply..">
                                            </div>
                                        </div>
                                       
                                      
                                       
                                      
                                       
                                      
                                        <!-- <div class="form-group row">
                                            <label class="col-lg-4 col-form-label"><a href="admin/#">Terms &amp; Conditions</a>  <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <label class="css-control css-control-primary css-checkbox" for="val-terms">
                                                    <input type="checkbox" class="css-control-input" id="val-terms" name="val-terms" value="1"> <span class="css-control-indicator"></span> I agree to the terms</label>
                                            </div>
                                        </div> -->
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="admin/https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
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

    <script src="admin/plugins/validation/jquery.validate.min.js"></script>
    <script src="admin/plugins/validation/jquery.validate-init.js"></script>

</body>


<!-- Mirrored from demo.themefisher.com/quixlab/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Apr 2022 16:10:29 GMT -->
</html>