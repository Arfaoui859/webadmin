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
<link rel="icon" href="img/logo11.png" type="image/png">
	<title>Vegan Venture</title>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

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
<?php include('file/header.php') ?><main>
				<div class="our-story">
					<div class="feature">
						<a href="https://www.youtube.com/embed/m8kWGA_Aj5k" class="video-link js-open-video js-video-clip">
							<video autoplay loop muted class="video-clip" >
								<source data-src="https://d3vhp0ldxntuok.cloudfront.net/video/our-story-01.mp4" type="video/mp4">
							</video>
							
							<picture class="video-clip-poster">
								<source srcset="https://d3vhp0ldxntuok.cloudfront.net/img/our-story/poster-video-01-s.jpg" media="(max-width: 768px)">
							    <source srcset="https://d3vhp0ldxntuok.cloudfront.net/img/our-story/poster-video-01.jpg" class="js-object-fit-fallback">
							    <img srcset="https://d3vhp0ldxntuok.cloudfront.net/img/our-story/poster-video-01-s.jpg" alt="More Veggies Please" class="feature__bg">
							</picture>
							
							<div class="feature__overlay u-align-center u-align-middle">
								<div class="feature__content feature__content--full-width">
									<picture class="no-touch-only">
										<img srcset="https://d3vhp0ldxntuok.cloudfront.net/img/temp/feature/more-veggies-please-big.png" alt="">
									</picture>
									<picture>
										<source srcset="https://d3vhp0ldxntuok.cloudfront.net/img/temp/feature/more-veggies-please-small.png" media="(max-width: 768px)">
										<source srcset="../d3vhp0ldxntuok.cloudfront.net/img/temp/feature/more-veggies-please-big.png">
										<img srcset="https://d3vhp0ldxntuok.cloudfront.net/img/temp/feature/more-veggies-please-small.png" alt="">
									</picture>
								</div>
							</div>
						</a>
					</div>

					<div class="grid">
						<div class="col-12 col-6-med">
							<div class="animate-fadein">
								<picture>
									<img srcset="https://d3vhp0ldxntuok.cloudfront.net/img/our-story/text-at-veggie-grill.png" alt="At Veggie Grill, we see veggies for what they are.">
								</picture>
							</div>
						</div>
						<div class="col-12 col-6-med">
							<div class="animate-slideup">
								<picture>
									<img srcset="https://d3vhp0ldxntuok.cloudfront.net/img/our-story/bowl-napkin.jpg" alt="Bowl of Food">
								</picture>
							</div>
						</div>
						
						<div class="col-12 col-6-med">
							<div class="animate-slideup js-video-clip">
								<video autoplay loop muted class="video-clip">
									<source data-src="https://d3vhp0ldxntuok.cloudfront.net/video/our-story-02.mp4" type="video/mp4">
								</video>
								
								<picture class="video-clip-poster">
								    <img srcset="https://d3vhp0ldxntuok.cloudfront.net/img/our-story/poster-video-02.jpg" alt="">
								</picture>
							</div>							
						</div>
						<div class="col-12 col-6-med">
							<div class="animate-fadein">
								<picture>
									<img srcset="https://d3vhp0ldxntuok.cloudfront.net/img/our-story/text-conversation-starters.png" alt="The conversation starters">
								</picture>								
							</div>
							
							<div class="animate-slideup">
								<picture class="thumbnail align-left">
									<img srcset="https://d3vhp0ldxntuok.cloudfront.net/image/248/0/0" alt="Bonfire">
								</picture>
							</div>
						</div>
						
						<div class="col-12 col-6-med">
							<div class="animate-fadein">
								<picture>
									<img srcset="https://d3vhp0ldxntuok.cloudfront.net/img/our-story/text-smile-filled-bites.png" alt="The gooey smile-filled bites">
								</picture>
							</div>
							
							<div class="animate-slideup">
								<picture class="thumbnail align-right">
									<img srcset="https://d3vhp0ldxntuok.cloudfront.net/img/our-story/mac-and-cheese.jpg" alt="Mac and Cheese">
								</picture>
							</div>
						</div>
						<div class="col-12 col-6-med">
							<div class="animate-slideup">
								<picture>
									<img srcset="https://d3vhp0ldxntuok.cloudfront.net/img/our-story/eating-nachos.jpg" alt="Girl eating nachos">
								</picture>
							</div>
						</div>
						
						<div class="col-12">
							<div class="animate-fadein">
								<picture>
									<img srcset="https://d3vhp0ldxntuok.cloudfront.net/img/our-story/text-friendship-builders.png" alt="The spicy friendship-builders">
								</picture>
							</div>
							<div class="animate-slideup animate-slideup--wide js-video-clip">
								<video autoplay loop muted class="video-clip">
									<source data-src="https://d3vhp0ldxntuok.cloudfront.net/video/our-story-03.mp4" type="video/mp4">
								</video>
								
								<picture class="video-clip-poster">
								    <img srcset="https://d3vhp0ldxntuok.cloudfront.net/img/our-story/poster-video-03.jpg" alt="">
								</picture>
							</div>
						</div>
						
						<div class="col-12 col-6-med">
							<div class="animate-fadein">
								<picture>
									<img srcset="https://d3vhp0ldxntuok.cloudfront.net/img/our-story/text-each-season.png" alt="And at our place, we think that each season is a reason to create fresh and new ways to bring people together.">
								</picture>
							</div>
							
							<div class="animate-slideup">
								<picture class="thumbnail align-right">
									<img srcset="https://d3vhp0ldxntuok.cloudfront.net/img/our-story/grilling.jpg" alt="Grilling">
								</picture>
							</div>
						</div>
						<div class="col-12 col-6-med">
							<div class="animate-slideup">
								<picture>
									<img srcset="https://d3vhp0ldxntuok.cloudfront.net/img/our-story/bowl.jpg" alt="Bowl of food">
								</picture>
							</div>
						</div>
						
						<div class="col-12 col-6-med">
							<div class="animate-slideup js-video-clip">
								<video autoplay loop muted class="video-clip">
									<source data-src="https://d3vhp0ldxntuok.cloudfront.net/video/our-story-04.mp4" type="video/mp4">
								</video>
								
								<picture class="video-clip-poster">
								    <img srcset="https://d3vhp0ldxntuok.cloudfront.net/img/our-story/poster-video-04.jpg" alt="">
								</picture>
							</div>
						</div>
						<div class="col-12 col-6-med">
							<div class="animate-fadein">
								<picture>
									<img srcset="https://d3vhp0ldxntuok.cloudfront.net/img/our-story/text-our-celebration.png" alt="So come join our celebration of the veggie, the fruit, the grain and the nut of the dishes that power you up and have you saying...More Veggies Please">
								</picture>
							</div>
						</div>
					</div>
					
					<div class="grid grid--full-width">
						<div class="col-12">
							<div class="animate-slideup">
								<picture class="u-bg-yellow">
									<img srcset="https://d3vhp0ldxntuok.cloudfront.net/img/our-story/text-more-veggies-please.png" alt="More Veggies Please">
								</picture>
							</div>
						</div>
					</div>
					
					<div class="grid">
						<div class="col-12 col-6-med">
							<div class="animate-fadein">
								<picture>
									<img srcset="https://d3vhp0ldxntuok.cloudfront.net/img/our-story/text-veggies.png" alt="You've never tasted veggies like this.">
								</picture>
								
								<p>Behind each veggie-filled dish is a story that starts long before that first bite. It all begins with like-minded people we love&mdash;those who go the extra mile to grow the best ingredients out there. Once those fresh ingredients reach our kitchen, we take our time to make each dish right.</p>
							</div>
						</div>
						<div class="col-12 col-4-med">
							<div class="animate-slideup">
								<picture>
									<img srcset="https://d3vhp0ldxntuok.cloudfront.net/img/our-story/kale.jpg" alt="Kale">
								</picture>
							</div>
						</div>
						<div class="col-12 col-2-med">
							<div class="animate-slideup animate-slideup--tall">
								<picture class="thumbnail">
									<img srcset="https://d3vhp0ldxntuok.cloudfront.net/img/our-story/carrots.jpg" alt="Carrots">
								</picture>
							</div>
						</div>
						
						<div class="col-12 col-6-med">
							<div class="animate-slideup js-video-clip">
								<video autoplay loop muted class="video-clip">
									<source data-src="https://d3vhp0ldxntuok.cloudfront.net/video/our-story-05.mp4" type="video/mp4">
								</video>
								
								<picture class="video-clip-poster">
								    <img srcset="https://d3vhp0ldxntuok.cloudfront.net/img/our-story/poster-video-05.jpg" alt="">
								</picture>
							</div>
						</div>
						<div class="col-12 col-6-med">
							<div class="animate-fadein">
								<picture>
									<img srcset="https://d3vhp0ldxntuok.cloudfront.net/img/our-story/text-we-cut-veggies.png" alt="At Veggie Grill, we cut veggies, not corners.">
								</picture>
								
								<p>That means from chopping to saucing, we are always coming up with new ways to celebrate the best of every season, bite after craveable bite. At our place, we work to make bold and innovative dishes that offer a whole new experience for your taste buds and make you feel like you&rsquo;ve never felt before.</p>
							</div>
						</div>
						
						<div class="col-12 col-6-med">
							<div class="animate-fadein">
								<picture>
									<img srcset="https://d3vhp0ldxntuok.cloudfront.net/img/our-story/text-moments.png" alt="Because after all, it's the moments that makes the meal so great.">
								</picture>
								
								<p>It&rsquo;s that last bite you fight over, that side you share while you tell a story, the drinks you&rsquo;ll make a toast to. And that&rsquo;s what we&rsquo;re about. Because at Veggie Grill, we believe in firsts, and seconds, and thirds. We believe in &ldquo;more veggies, please!&rdquo;</p>
							</div>
						</div>
						<div class="col-12 col-6-med">
							<div class="animate-slideup">
								<picture>
									<img srcset="https://d3vhp0ldxntuok.cloudfront.net/img/our-story/laughing.jpg" alt="People laghing">
								</picture>
							</div>
						</div>
					</div>
				
				</div>
			</main>
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
<script>
			$(function(){
			
				$.fn.animateBlocks = function(){
					'use strict';
					return this.each(function(){
						var $window = $(window),
							$block = $(this),
							$scrollTop = $window.scrollTop(),
							$windowHt = $window.height();
						
						$block.each(function() {
							var $itemScrollTop = parseInt($block.offset().top, 10);
							if ($itemScrollTop + 200 <= $scrollTop + $windowHt) {
								$block.addClass('js-trigger-animation');
							}
						});
					});
				};
			
				if ( $('html').hasClass('no-touch') && window.matchMedia('(min-width: 1024px)').matches ) {
					$('.our-story').addClass('js-prep-animation');
					$(window).on('scroll load resize', function() {
						$('.animate-fadein, .animate-slideup').animateBlocks();
					});
				}
			
				
				$.fn.videoClipControl = function(){
					'use strict';
					return this.each(function(){
						var $trigger = $(this),
							$source = $trigger.find('source');
						
						if ( $('html').hasClass('no-touch') ) {
							
							$source.each(function() {
								$(this).attr("src", $(this).data('src')).removeAttr('data-src');

								$trigger.find('video')[0].load();
								$trigger.addClass('js-video-clip--show');
							});
						}
					});
				};
				$(window).on('load', function() {
					 
					$('.js-video-clip').videoClipControl();
				});
			});
		</script>
	

			<script type="text/script">
				</script>
		

</html>
