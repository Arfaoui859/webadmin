
<?php 
session_start(); 
$cnx= new mysqli("localhost","root","","resto");
if(!empty($_POST['username'])){
   $_SESSION['login']=$_POST['username'];
}

if(!empty($_GET['destroy'])){
    session_destroy();
    unset($_SESSION['login']);
	header("Location: index.php");
	
}
?>
<!DOCTYPE html>
<html lang="en-US">

	
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/logo11.png" type="image/png">
	<title>Vegan Venture</title>

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	


        <script>
        if(!(('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch)) {
	        	var html = document.documentElement;
	        	html.classList.add('no-touch');
        }
        </script>
		
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../www.googletagmanager.com/gtm5445.php?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P59J28');</script>

				
			<title>Vegan and Vegetarian Plant Based Food Near You! - Vergan Venture</title><meta name="viewport" content="width=device-width, initial-scale=1.0" >
<meta http-equiv="content-type" content="text/html; charset=utf-8" >

	
		
		<script>
		!function(e){if(!window.pintrk){window.pintrk = function () {
		window.pintrk.queue.push(Array.prototype.slice.call(arguments))};var
		      n=window.pintrk;n.queue=[],n.version="3.0";var
		      t=document.createElement("script");t.async=!0,t.src=e;var
		      r=document.getElementsByTagName("script")[0];
		      r.parentNode.insertBefore(t,r)}}("../s.pinimg.com/ct/core.js");
		pintrk('load', '2615212381851', {em: '<user_email_address>'});
		pintrk('page');
		</script>
		<noscript>
		</noscript>
		

		<meta name="google-site-verification" content="Ypnwlkj5qlciMaUuJpFkGN_V98VgrfAPA7TNX4BDfUo" />

	</head>

	
<body>
<?php include('file/header.php') ?>

					<section class="login_box_area p_120">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="img/create.jpg" alt="">
						<div class="hover">
							<a class="main_btn" href="registration.php">Create an Account</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Log in to enter</h3>
						<form class="row login_form" action="auth.php" method="post" id="contactForm" >
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="Password" name="Password" placeholder="Password" required>
							</div>
							
							<div class="col-md-12 form-group">
								<input type="submit" value="Log In" class="btn submit_btn">
								<a href="#">Forgot Password?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

		
	


	



	
<footer class="global-footer">
<div class="grid u-align-center">
<div class="col-12 col-3-med u-order-last u-order-first-med">

<h5>About Vegan venture</h5>
<a href="about-us.php" class="global-footer__link u-font-small">
About Us</a> <a href="contact-us.php" class="global-footer__link u-font-small">
Contact Us</a> </div>
<div class="col-12 col-3-med u-order-last u-order-first-med">
<h5>Services</h5>
<a href="menu.php" class="global-footer__link u-font-small">Menu</a>
<a href="nutrition.php" class="global-footer__link u-font-small">Nutrition</a></div>
<div class="col-12 col-3-med">


<h5>Connect with Us</h5>

<a class="js-open-modal sign-up-for-free global-footer__link u-font-small">
Subscribe to Newsletter</a></div>

<div class="col-12 u-order-last">
<ul class="tertiary">
<li><a href="http://www.hellodesign.com/" target="_blank" class="global-footer__link">

Site by Tek-up Team</a></li>

<li>@ 2020 Vergan Venture</li>
<li><a href="terms-and-conditions.php" class="global-footer__link">Terms &amp; Conditions</a></li>
<li><a href="privacy-policy.php" class="global-footer__link">Privacy Policy</a></li>
<li><a href="web-accessibility.php" class="global-footer__link">Web Accessibility</a></li>
</ul>
</div>
</div>

</footer>
</body> 
</html>
