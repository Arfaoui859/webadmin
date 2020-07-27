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
<link rel="icon" href="img/logo11.png" type="image/png">
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
<link href="css/vv.css" media="screen" rel="stylesheet" type="text/css" ><script type="text/javascript" src="../ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="js/Vergan-Venture.js"></script>
		
		
		
		<meta name="google-site-verification" content="Ypnwlkj5qlciMaUuJpFkGN_V98VgrfAPA7TNX4BDfUo" />

	</head>

	
<body>


<noscript><iframe src="https://www.googletagmanager.com/ns.php?id=GTM-P59J28"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<div class="page">
<?php include('file/header.php') ?>
		<h1 class="u-text-centered green">VG Rewards</h1>
<div class="grid u-align-center  "><div class="    ">
<div class="img-banner ">

  
      <picture>
        <img src="img/reward.jpg" alt="Banner Image" width="1200 px" />
      </picture>
    
</div>
</div>
</div>
<div class="grid u-align-center  "><div class=" col-12 col-8-med  ">
<p class="MsoNormal" align="center" style="text-align: center;"><b><span style="font-size: 14.0pt; line-height: 107%;"></span></b></p></div></div><div class="grid u-align-center  "><div class=" col-12   "><h2 class="title-lined">How it Works</h2>
</div><div class=" col-6 col-6-med col-3-lrg "><div class="callout callout--promotion"><picture><img src="https://d3vhp0ldxntuok.cloudfront.net/image/610/b10/0.5,0.5/small" alt="VG Rewards Icon_Order"/></picture><br />
<div class="callout__content">
<p>Use the app to order ahead.</p>
</div>
</div></div><div class=" col-6 col-6-med col-3-lrg "><div class="callout callout--promotion"><picture><img src="https://d3vhp0ldxntuok.cloudfront.net/image/612/b10/0.5,0.5/small" alt="VG Rewards Icon_Scan"/></picture><br />
<div class="callout__content">
<p>Scan the app at the register when you pay.</p>
</div>
</div></div><div class=" col-6 col-6-med col-3-lrg "><div class="callout callout--promotion"><picture><img src="https://d3vhp0ldxntuok.cloudfront.net/image/609/b10/0.5,0.5/small" alt="VG Rewards Icon_Redeem"/></picture><br />
<div class="callout__content">
<p>Redeem exclusive member offers.</p>
</div>
</div></div><div class=" col-6 col-6-med col-3-lrg "><div class="callout callout--promotion"><picture><img src="https://d3vhp0ldxntuok.cloudfront.net/image/613/b10/0.5,0.5/small" alt="VG Rewards Icon_Track"/></picture><br />
<div class="callout__content">
<p>Track, store, and use your Rewards.</p>
</div>
</div></div></div><div class="grid  "><div class=" col-12   "><h2 class="title-lined">Rewards</h2>
</div><div class=" col-12 col-4-med  "><picture><img src="https://d3vhp0ldxntuok.cloudfront.net/image/614/b10/0.5,0.5/small" alt="VG Rewards Icon_Earn_SignUp"/></picture><br />
<p class="u-text-centered">Start earning: Place your first order and get credit towards your next Vergan Venture purchase.<br /><br /></p></div><div class=" col-12 col-4-med  "><picture><img src="https://d3vhp0ldxntuok.cloudfront.net/image/615/b10/0.5,0.5/small" alt="VG Rewards Icon_SkipLine"/></picture><br />
<p class="u-text-centered">Skip the line: Order ahead so your veggies are ready when you are.</p></div><div class=" col-12 col-4-med  "><picture><img src="https://d3vhp0ldxntuok.cloudfront.net/image/616/b10/0.5,0.5/small" alt="VG Rewards Icon_Earn$9"/></picture><br />
<p class="u-text-centered"> Earn free food by ordering and paying through the app.</p></div></div>
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



<script type="text/javascript" data-cfasync="false">
  (function(W,i,s,e,P,o,p){W['WisePopsObject']=P;W[P]=W[P]||function(){
  (W[P].q=W[P].q||[]).push(arguments)},W[P].l=1*new Date();o=i.createElement(s),
  p=i.getElementsByTagName(s)[0];o.async=1;o.src=e;p.parentNode.insertBefore(o,p)
  })(window,document,'script','../loader.wisepops.com/get-loader1f1e.js?v=1&amp;site=YAGTUdSucB','wisepops');
</script>
</body> 
	

			<script type="text/script">
				</script>
		

</html>
