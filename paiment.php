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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>	
	<title>Vegan Venture</title>

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

		
				
			<title>Only delicious Vegetarian and Vegan Plant Based Food. - Vergan Venture</title><meta name="viewport" content="width=device-width, initial-scale=1.0" >
<meta http-equiv="content-type" content="text/html; charset=utf-8" >
<meta name="keywords" content="plant based, vegan restaurant, vegetarian menu, salads, veggie grill bowl, best vegan restaurant" >
<meta name="description" content="Looking for vegetarian, vegan or plant based food near you? Try any of our chef-driven seasonal menu offerings for breakfast, lunch or dinner." ><link href="../d3vhp0ldxntuok.cloudfront.net/img/global/touch-icon.png" rel="apple-touch-icon-precomposed" >
<link href="https://d3vhp0ldxntuok.cloudfront.net/img/global/favicon.svg" rel="mask-icon" >
<script type="text/javascript" src="js/Vergan-Venture.js"></script>
		
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
		<img src="https://ct.pinterest.com/v3/?tid=2615212381851&amp;pd[em]=<hashed_email_address>" height="1" width="1" style="display:none;"/>&noscript=1" />
		</noscript>
		
		<meta name="google-site-verification" content="Ypnwlkj5qlciMaUuJpFkGN_V98VgrfAPA7TNX4BDfUo" />

	</head>
	
	
<body>


<noscript><iframe src="https://www.googletagmanager.com/ns.php?id=GTM-P59J28"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<div class="page">
<?php include('file/header.php') ?>
		
<div class="img-banner img-banner--title">

  
      <picture>
        <img src="https://d3vhp0ldxntuok.cloudfront.net/image/1093/b5/0.5,0.5/small" class="img-banner__main-img js-object-fit-fallback" alt="Banner Image"/>
      </picture>
      <div class="img-banner__content">
        <h1 class='u-font-jumbo'>Our Menu</h1>
      </div>

    
</div>
<div class="grid  "><div class=" col-12  col-3-lrg "><nav class="inpage-nav">

 <form accept-charset="UTF-8" action="script.php" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓" /><input name="_method" type="hidden" value="PUT" /><input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" /></div>
          
		   <div class='form-row'>
              
            </div>
            <div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                <label class='control-label'>Card Number</label>
                <input autocomplete='off' class='form-control card-number' size='20' type='text' name="number">
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-4 form-group cvc required'>
                <label class='control-label'>CVC</label>
                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text' name="cvv">
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'>Expiration</label>
                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text' name="mois">
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'> </label>
                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'name ="années">
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12'>
                
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12 form-group'>
                <button class='form-control btn btn-success submit-button' name="b" type='submit'>Pay »</button>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12 error form-group hide'>
                
              </div>
            </div>
          </form>
        </div>
        <div class='col-md-4'></div>
    </div>
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

<script type="text/javascript">
(function() {
var sz = document.createElement('script'); sz.type = 'text/javascript'; sz.async = true;
sz.src = '../siteimproveanalytics.com/js/siteanalyze_6090192.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sz, s);
})();
</script>

<script>
!function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
},s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='../static.ads-twitter.com/uwt.js',
a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');

twq('init','nyjkc');
twq('track','PageView');
</script>

<script type="text/javascript" data-cfasync="false">
  (function(W,i,s,e,P,o,p){W['WisePopsObject']=P;W[P]=W[P]||function(){
  (W[P].q=W[P].q||[]).push(arguments)},W[P].l=1*new Date();o=i.createElement(s),
  p=i.getElementsByTagName(s)[0];o.async=1;o.src=e;p.parentNode.insertBefore(o,p)
  })(window,document,'script','../loader.wisepops.com/get-loader1f1e.js?v=1&amp;site=YAGTUdSucB','wisepops');
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
	<script src="js/mail-script.js"></script>
	<script src="vendors/jquery-ui/jquery-ui.js"></script>
	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/theme.js"></script>
</body> 


			<script type="text/script">
				</script>
		

</html>
