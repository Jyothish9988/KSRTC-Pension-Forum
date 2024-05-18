<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.codezion.com/themes/html/toor/user/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Apr 2022 15:54:01 GMT -->
<head>
      {literal}
      <style>
      }
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
{/literal}
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="#">
<meta name="description" content="#">
<title>pension main header</title>

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="user/assets/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="user/assets/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="user/assets/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="user/assets/images/favicon.ico">
<link rel="shortcut icon" href="user/assets/images/favicon.ico">

<link href="user/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="user/assets/css/chat.css" rel="stylesheet">

<link href="user/assets/css/font-awesome.css" rel="stylesheet">

<link href="user/assets/css/font/flaticon.css" rel="stylesheet">

<link href="user/assets/css/slick.css" rel="stylesheet">

<link href="user/assets/css/ion.rangeSlider.min.css" rel="stylesheet">

<link href="user/assets/css/datepicker.css" rel="stylesheet">

<link href="user/assets/css/magnific-popup.css" rel="stylesheet">

<link href="user/assets/css/nice-select.css" rel="stylesheet">

<link href="user/assets/css/style.css" rel="stylesheet">

<link href="user/assets/css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">

<!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->

<!--[if lt IE 9]>
      <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->

</head>
<body>

<header class="header">

<div class="topbar bg-custom-blue">
<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="left-side">
<ul class="custom-flex">
<li>
<a href="#" class="text-custom-white">
<i class="fab fa-facebook-f"></i>
</a>
</li>
<li>
<a href="#" class="text-custom-white">
<i class="fab fa-twitter"></i>
</a>
</li>
<li>
<a href="#" class="text-custom-white">
<i class="fab fa-instagram"></i>
</a>
</li>
<li>
<a href="#" class="text-custom-white">
<i class="fab fa-linkedin"></i>
</a>
</li>
</ul>
</div>
</div>
<div class="col-sm-6">
<div class="right-side">
 <ul class="custom-flex">


<li>
<a href="#" class="text-custom-white">Hi, {$uid}</a>
</li>
<!-- <li>
<select>
<option>USD</option>
<option>INR</option>
<option>EURO</option>
</select>
</li -->
</ul>
</div>
</div>
</div>
</div>
</div>


<div class="navigation">
<div class="container">
<div class="row">
<div class="col-12">
<div class="main-navigation">
<div class="logo">
<a href="user/index.html">
<img src="user/assets/images/toor-logo.png" class="img-fluid image-fit" alt="img">
</a>
</div>
<div class="main-menu">
<div class="logo">
<a href="user/index.html">
<img src="user/assets/images/toor-logo.png" class="img-fluid image-fit" alt="img">
</a>
</div>
<nav>
<ul class="custom-flex">
<li class="menu-item menu-item-has-children active">
<a href="#" class="text-light-dark">Home</a>
<ul class="custom sub-menu">
<li class="menu-item">
<a href="pension_home.php" class="text-custom-white">Homepage</a>
</li>
</ul>
</li>




<li class="menu-item menu-item-has-children">
<a href="#" class="text-light-dark">PROFILE</a>
<ul class="custom sub-menu">
<!-- <li class="menu-item menu-item-has-children">
<a href="#" class="text-custom-white">Flights Grid</a>
<ul class="custom sub-menu">
<li class="menu-item">
<a href="user/flights.html" class="text-custom-white">Full Width</a>
</li>
<li class="menu-item">
<a href="user/flights-left-sidebar.html" class="text-custom-white">Left Sidebar</a>
</li>
<li class="menu-item">
<a href="user/flights-right-sidebar.html" class="text-custom-white">Right Sidebar</a>
</li>
</ul>
</li> -->
<li class="menu-item">
<a href="pension_profile.php" class="text-custom-white">PROFILE</a>
</li>
</ul>
</li>





<li class="menu-item menu-item-has-children">
<a href="#" class="text-light-dark">NEWS</a>
<ul class="custom sub-menu">
<!-- <li class="menu-item menu-item-has-children">
<a href="#" class="text-custom-white">Flights Grid</a>
<ul class="custom sub-menu">
<li class="menu-item">
<a href="user/flights.html" class="text-custom-white">Full Width</a>
</li>
<li class="menu-item">
<a href="user/flights-left-sidebar.html" class="text-custom-white">Left Sidebar</a>
</li>
<li class="menu-item">
<a href="user/flights-right-sidebar.html" class="text-custom-white">Right Sidebar</a>
</li>
</ul>
</li> -->
<li class="menu-item">
<a href="pension_news.php" class="text-custom-white">NEWS</a>
</li>
</ul>
</li>




<li class="menu-item menu-item-has-children">
<a href="#" class="text-light-dark">Feedback</a>
<ul class="custom sub-menu">
<!-- <li class="menu-item menu-item-has-children">
<a href="#" class="text-custom-white">Flights Grid</a>
<ul class="custom sub-menu">
<li class="menu-item">
<a href="user/flights.html" class="text-custom-white">Full Width</a>
</li>
<li class="menu-item">
<a href="user/flights-left-sidebar.html" class="text-custom-white">Left Sidebar</a>
</li>
<li class="menu-item">
<a href="user/flights-right-sidebar.html" class="text-custom-white">Right Sidebar</a>
</li>
</ul>
</li> -->
<li class="menu-item">
<a href="pension_feedback.php" class="text-custom-white">Feedback</a>
<li class="menu-item">
<a href="pension_feedback_view.php" class="text-custom-white">Feedback View</a>
</li>
</li>
</ul>
</li>


<li class="menu-item menu-item-has-children">
<a href="#" class="text-light-dark">PENSION</a>
<ul class="custom sub-menu">



<li class="menu-item">
<a href="pension_notification.php" class="text-custom-white">NOTIFICATION({$notif})</a>
</li>


<li class="menu-item">
      <a href="pension_apply.php" class="text-custom-white">PENSION APPLY</a>
</li>
<li class="menu-item">
      <a href="pension_apply_view.php" class="text-custom-white">PENSION VIEW</a>
</li>
</ul>
</li>



<li class="menu-item menu-item-has-children">
<a href="#" class="text-light-dark">MESSAGE</a>
<ul class="custom sub-menu">


      <li class="menu-item">
      <a href="pension_message_send.php" class="text-custom-white">Compose message to station master</a>
      </li>

      <li class="menu-item">
      <a href="pension_stmr_message_reply_view.php" class="text-custom-white">View stationmaster message</a>
      </li>

      <li class="menu-item">
      <a href="pension_msg_pension_view.php" class="text-custom-white">View  message</a>
      </li>
</ul>
</li>




<li class="menu-item menu-item-has-children">
<a href="#" class="text-light-dark">Complaint</a>
<ul class="custom sub-menu">
<li class="menu-item">
<a href="pension_complaint.php" class="text-custom-white">Send </a>
</li>
<li class="menu-item">
<a href="pension_complaint_view.php" class="text-custom-white">VIEW</a>
</li>
</ul>
</li>





</ul>
</nav>
<div class="cta-btn">
<a href="logout.php" class="btn-first btn-submit">Logout</a>
</div>
</div>
<div class="hamburger-menu">
<div class="menu-btn">
<span></span>
<span></span>
<span></span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</header>


<div class="slider p-relative">
<div class="main-banner arrow-layout-1 ">
<div class="slide-item">
<img src="user/assets/images/flight-2.jpg" class="image-fit" alt="Slider">
<div class="transform-center">
<div class="container">
<div class="row">
<div class="col-lg-7">
<div class="slider-content">

</li>
<li class="text-custom-white">

</li>
</ul>

</div>
</div>
</div>
</div>
</div>
</div>
<div class="slide-item">
<img src="user/assets/images/hotel-1.jpg" class="image-fit" alt="Slider">
<div class="transform-center">
<div class="container">
<div class="row">
<div class="col-lg-7">
<div class="slider-content">
<h1 class="text-custom-white"><span class="text-custom-blue"></span></h1>
<ul class="custom">
<li class="text-custom-white">
<!-- <i class="fas fa-building"></i> -->

</li>
<li class="text-custom-white">
<!-- <i class="fas fa-map-marker-alt"></i> -->

</li>
<li class="text-custom-white">
<!-- <i class="fas fa-dollar-sign"></i> -->

</li>
<li class="text-custom-white">
<!-- <i class="fas fa-comments"></i> -->

</li>
</ul>
<!-- <a href="user/hotels.html" class="btn-first btn-small"></a> -->
</div>
</div>
</div>
</div>
</div>
</div>
<div class="slide-item">
<img src="user/assets/images/car-1.jpg" class="image-fit" alt="Slider">
<div class="transform-center">
<div class="container">
<div class="row">
<div class="col-lg-7">
<div class="slider-content">
<h1 class="text-custom-white"><span class="text-custom-blue"></span></h1>
<ul class="custom">
<li class="text-custom-white">
<!-- <i class="fas fa-dollar-sign"></i> -->

</li>
 <li class="text-custom-white">
<!-- <i class="fas fa-car"></i> -->

</li>
<li class="text-custom-white">
<!-- <i class="fas fa-laptop"></i> -->

</li>
<li class="text-custom-white">
<!-- <i class="fas fa-headphones-alt"></i> -->
</li>
</ul>
<!-- <a href="user/cruise.html" class="btn-first btn-small"></a> -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
{literal}
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
{/literal}
</body>
</html>
