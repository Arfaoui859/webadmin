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

        

					
	<title>Vegan Venture</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" >
<meta name="keywords" content="plant based, vegan restaurant, vegetarian menu, salads, veggie grill bowl, best vegan restaurant" >
<meta name="description" content="Looking for vegetarian, vegan or plant based food near you? Try any of our chef-driven seasonal menu offerings for breakfast, lunch or dinner." ><link href="../d3vhp0ldxntuok.cloudfront.net/img/global/touch-icon.png" rel="apple-touch-icon-precomposed" >
<link href="https://d3vhp0ldxntuok.cloudfront.net/img/global/favicon.svg" rel="mask-icon" >

		
		
		
		<meta name="google-site-verification" content="Ypnwlkj5qlciMaUuJpFkGN_V98VgrfAPA7TNX4BDfUo" />

	</head>

	
<body>


<noscript><iframe src="https://www.googletagmanager.com/ns.php?id=GTM-P59J28"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div class="page">
<?php include('file/header.php') ?>
<div class="slideshow-container">

	<div class="mySlides fade">
	  <div class="numbertext">1 / 7</div>
	  <img src="img/pix1.jpg" style="width:100%">
	  <div class="text">Caption Text</div>
	</div>
	
	<div class="mySlides fade">
	  <div class="numbertext">2 / 7</div>
	  <img src="img/pix2.jpg" style="width:100%">
	  <div class="text">Caption Two</div>
	</div>
	
	<div class="mySlides fade">
	  <div class="numbertext">3 / 7</div>
	  <img src="img/pix3.jpg" style="width:100%">
	  <div class="text">Caption Three</div>
	</div>
	<div class="mySlides fade">
		<div class="numbertext">4/ 7</div>
		<img src="img/pix4.jpg" style="width:100%">
		<div class="text">Caption Three</div>
	  </div>
	  <div class="mySlides fade">
		<div class="numbertext">5/ 7</div>
		<img src="img/pix5.jpg" style="width:100%">
		<div class="text">Caption Three</div>
	  </div>
	  <div class="mySlides fade">
		<div class="numbertext">6/ 7</div>
		<img src="img/pix6.jpg" style="width:100%">
		<div class="text">Caption Three</div>
	  </div>
	  <div class="mySlides fade">
		<div class="numbertext">7/ 7</div>
		<img src="img/pix7.jpg" style="width:100%">
		<div class="text">Caption Three</div>
	  </div>
	
	</div>
	<br>
	
	<div style="text-align:center">
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	</div>
</div>

<section class="feature_product_area section_gap">
	<div class="main_box">
		<div class="container-fluid">
			<div class="row">
				<div class="main_title">
				</div>
				<div class="grid  "><div class=" col-12   "><h2 class="u-brand-green u-text-centered">Our 100% Plant-Based Menu</h2>
<div class="button-block"><a href="menu.php" class="button button--outline-brand-green">View All</a><a href="nutrition.php" class="button button--outline-brand-green">Nutrition</a></div><div class="slider" data-slider-nav-arrows data-slider-show-multiple>
	


	<div class="slider__crop">
		<div class="slider__viewport">
			<div class="slider__canvas">				
						<?php 
			$product1=mysqli_query($cnx,"Select * from produits order by id Desc limit 100 ");
			$i=1;
			 while($product=mysqli_fetch_array($product1)){
				   echo '
				   <div class="slider__item" id=>
				   <div class="slider__block">
					   <div class="callout callout--product">
							<img class="img-fluid" src="'.$product["image"].'" alt="">
							<div class="p_icon">
								<a href="#">
									<i class="lnr lnr-heart"></i>
								</a>
								<a href="#">
									<i class="lnr lnr-cart"></i>
								</a>
							</div>
						</div>
						<a href="#">
							<h4>'.$product["produit"].'</h4>
						</a>
						<h5>'.$product["prix"].' Tnd</h5>
					</div>
				</div>
				';
					$i++ ;
				}

					?>
						
					
						</div>
		</div>
	</div>
</div>
</div></div>
<div class="feature">
	<picture>
                    <source srcset="https://d3vhp0ldxntuok.cloudfront.net/image/180/b14/0.5,0.5/small"  media="(max-width: 768px)">
        		<source srcset="https://d3vhp0ldxntuok.cloudfront.net/image/180/b14/0.5,0.5/large" class="js-object-fit-fallback">
		<img src="https://d3vhp0ldxntuok.cloudfront.net/image/180/b14/0.5,0.5/small" alt="Veggie Grill Story" class="feature__bg"/>
	</picture>

	<div class="feature__overlay u-align-middle">
		<div class="feature__content">
			
				<p class="feature__sub-title">Our Story</p>

			
			<h1>Great Taste.<br>Greater Good. </h1>

										<a href=our-story.php class="button button--brand-orange">Explore What We're Up To</a>
					</div>
	</div>
</div>

<div class="feature feature--location locations">
	<div id="locations__map" class='locations__map_locator'></div>


	<div class="feature__overlay u-align-middle u-align-end">
		<div class="feature__content">

			<div class="location-info location-info--featured">
							<h6>Find a Veggie Grill</h6>
				<form class="vg-form" action="https://www.veggiegrill.com/locations.php">
					<input type="text" placeholder="Search by address or zip" name="address"/>
					<button type="submit" class="button button--outline-white">Find Locations</button>
				</form>
						</div>
		</div>
	</div>
</div>




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
<div class="modal">
<div class="modal__close">Close Button</div>
<div class="modal__content"></div>
</div>
<div class="fixed-to-bottom">
	</div>

</div>


<script>
	var slideIndex = 0;
	showSlides();
	
	function showSlides() {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";  
	  }
	  slideIndex++;
	  if (slideIndex > slides.length) {slideIndex = 1}    
	  for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	  setTimeout(showSlides, 2000); 
	}
	</script>
	
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendors/flipclock/timer.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/theme.js"></script>
</body> 
</.php>
