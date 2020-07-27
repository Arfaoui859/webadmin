<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>9adhity</title>

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
</head>

<body>

	<header class="header_area">
	<?php include('header-footer/header.php'); ?>
	</header>

	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Page de catégorie</h2>
					<div class="page_link">
						<a href="index.php">Acceuil</a>
						<a href="category.php">Categorie</a>
						<?php 
						if(!empty($_GET['categorie'])){
						echo '<a href="category.php?categorie='.$_GET['categorie'].'">'.$_GET['categorie'].'</a>';
						 } ?>
						
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="cat_product_area section_gap">
		<div class="container-fluid">
			<div class="row flex-row-reverse">
				<div class="col-lg-9">
					<div class="product_top_bar">
							<nav class="cat_page" align='center'>
								<ul class="pagination">
									<li class="page-item">
										<a class="page-link" href="#">
											<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
										</a>
									</li>
									<li class="page-item active">
										<a class="page-link" href="#">1</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">2</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">3</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">4</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">5</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">6</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
							</nav>
				
					</div>
					<div class="latest_product_inner row">
				<?php 
				
				if($_GET['categorie']<>'tous'){
				    
				        if(!empty($_GET['soucategorie'])){
				            $product1=mysqli_query($cnx,"Select * from produits where categorie='".$_GET['soucategorie']."' ");
				            
				        }
				        
				        else{
				            if($_GET['categorie']=='alimentation'){
				              $product1=mysqli_query($cnx,"Select * from produits where categorie='liquides' or categorie='salee' or categorie='sucree' or categorie='frais' or categorie='surgele' ");  
				            }
				            else if($_GET['categorie']=='beaute'){
				                $product1=mysqli_query($cnx,"Select * from produits where categorie='parfumerie' or categorie='hygiene' or categorie='soincosmetiques' ");
				            }
				            else{
				               $product1=mysqli_query($cnx,"Select * from produits where categorie='entretien' "); 
				            }
				        }
				            
				        }
				        
			                                	
				       
				else{$product1=mysqli_query($cnx,"Select * from produits ");}
				
				
                 while($product=mysqli_fetch_array($product1)){
                  
				       echo '
						<div class="col-lg-3 col-md-3 col-sm-6">
							<div class="f_p_item">
								<div class="f_p_img">
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
						</div>';
						}

						?>

					</div>
				</div>
		<?php include('header-footer/menu2.php'); ?>
			</div>

			
		</div>
	</section>

	
		<?php include('header-footer/footer.php'); ?>
	</footer>
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

</html>