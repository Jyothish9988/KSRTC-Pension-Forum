<?php /* Smarty version 2.6.26, created on 2022-09-24 06:40:20
         compiled from login.tpl */ ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>login </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flaty User login Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<?php echo '
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="login/css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //Custom Theme files -->
<!-- js -->
<script src="login/js/jquery-2.2.3.min.js"></script>
<!-- //js -->  
<!-- web font -->
<link href=\'//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800\' rel=\'stylesheet\' type=\'text/css\'><!--web font-->
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-agileits">
		<h1></h1>
		<div class="mainw3-agileinfo form">
			<div id="login">    
				<form action="" method="post"> 
					<input type="hidden" name="hidden" value="h">
					<div class="field-wrap">
						<label> Enter Your Email<span class="req">*</span> </label>
						<input type="email"name="Email" required autocomplete="off"/>
					</div> 
					<div class="field-wrap">
						<label> Your Password<span class="req">*</span> </label>
						<input type="password" name="Password" required autocomplete="off"/>
					</div> 
					<p class="forgot"><a href="#">Forgot Password?</a></p> 
					<button class="button button-block"/>Log In</button> 
				</form> 
			</div>
         
		</div>	
	</div>	
	<!-- //main -->
	<!-- copyright -->
	<div class="w3copyright-agile">
		<p>© </a></p>
	</div>
	<!-- //copyright --> 
	<script>
	$(\'.form\').find(\'input, textarea\').on(\'keyup blur focus\', function (e) { 
	  var $this = $(this),
		  label = $this.prev(\'label\');

		  if (e.type === \'keyup\') {
				if ($this.val() === \'\') {
			  label.removeClass(\'active highlight\');
			} else {
			  label.addClass(\'active highlight\');
			}
		} else if (e.type === \'blur\') {
			if( $this.val() === \'\' ) {
				label.removeClass(\'active highlight\'); 
				} else {
				label.removeClass(\'highlight\');   
				}   
		} else if (e.type === \'focus\') {
		  
		  if( $this.val() === \'\' ) {
				label.removeClass(\'highlight\'); 
				} 
		  else if( $this.val() !== \'\' ) {
				label.addClass(\'highlight\');
				}
		}
 
	}); 
	</script>
	'; ?>

</body>
</html>