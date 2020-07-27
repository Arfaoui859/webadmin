<!DOCTYPE html>
<html lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

        <script>
        if(!(('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch)) {
	        	var html = document.documentElement;
	        	html.classList.add('no-touch');
        }
        </script>

	<title>Vegan Venture</title><meta http-equiv="content-type" content="text/html; charset=utf-8" ><link href="../d3vhp0ldxntuok.cloudfront.net/img/global/touch-icon.png" rel="apple-touch-icon-precomposed" >
<link href="https://d3vhp0ldxntuok.cloudfront.net/img/global/favicon.svg" rel="mask-icon" >
<link href="css/vv.css" media="screen" rel="stylesheet" type="text/css" ><script type="text/javascript" src="../ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="js/veggie-grill.min.js"></script>
	
	
		<noscript><img src="https://www.facebook.com/tr?id=218660358645248&amp;ev=PageView&amp;noscript=1" height="1" width="1" style="display:none"/></noscript>
	
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
	<noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-P59J28"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P59J28');
</script>
<div class='page'>
<?php include('file/header.php'); ?>
	<div class="locations">
		<div class="locations__content">
			<h1 class="u-text-centered">Find a Veggie Grill</h1>
						<div class="tabs">
				<a href="near-you.html" class="tab active">Near You</a>
				
			</div>
			
						<form class="vg-form" id="vg-form" method="post">
				<div class="vg-form__combo-input-button">
					<input type="text" placeholder="Search by address or zip" name="address" value="" aria-label="address" />
					<input type="hidden" name="bounds" value=""/>
					<button type="submit" class="button button--brand-green">Go</button>
				</div>
			</form>
			
							<p class="no-results">
					No restaurants currently in this area. Please check your address or try another location.
				</p>
						</ul>
		</div>

		<div id="locations__map"></div>

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdRm9-RT9a5N4OzS9mR50iq8OrdV-Sbu4&amp;v=3.exp"></script>
		<script src="js/locations.min.js"></script>
				<script>
			$( document ).ready(function() {
				
				google.maps.event.addDomListener(window, 'load', initializeMap([],{"country_code":"TN","country_name":"Tunisia","region":"11","city":"Tunis","postal_code":null,"latitude":36.8049,"longitude":10.1778,"area_code":"","dma_code":null,"metro_code":null,"continent_code":"AF","isp":"TOPNET","time_zone":"Africa\/Tunis"}));
				
				$('form#vg-form').submit(function() {
					var boundaries = map.getBounds();
					var ne = boundaries.getNorthEast();
					var sw = boundaries.getSouthWest();
					var boundslatlng = sw.lat() +','+ sw.lng() + '|' + ne.lat() +','+ ne.lng();
					$("form#vg-form input[name='bounds']").val(boundslatlng);
				});
			});
		</script>
			</div>
</div>

<script type="text/javascript">
(function() {
var sz = document.createElement('script'); sz.type = 'text/javascript'; sz.async = true;
sz.src = '../siteimproveanalytics.com/js/siteanalyze_6090192.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sz, s);
})();
</script>



</html>
