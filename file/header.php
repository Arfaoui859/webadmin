<?php 
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
<header class="global-header">


<link href="css/vv.css" media="screen" rel="stylesheet" type="text/css" ><script type="text/javascript" src="../ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="js/Vergan-Venture.js"></script>
<div class="global-header__control">
	<button class="icon-menu js-toggle-icon-menu"> 
		<span>menu</span> 
	</button> 
	<a href="index.php" class="global-logo"> 
		<img src="img/logo.jpg" alt="Veggie Grill Logo"/>
	 </a>
<div class="global-scrollable"><nav class="global-nav" role="navigation">
<div class="global-nav__group"><a href="menu.php" class="global-nav__toggle js-toggle-dropdown" aria-haspopup="true">Menu</a>
<div class="global-nav__dropdown"><a href="#" class="global-nav__hide-lrg">All</a> 
	<span class="global-nav__dropdown__group">
	<?php  
	$menu1=mysqli_query($cnx,'select * from menu');
    while($menu = mysqli_fetch_array($menu1)){
		echo '<a href="menu.php?categorie='.$menu['menu'].'">'.$menu['menu'].'</a>';
	}
	?>	
	</span>
</div>
</div>


<a href="near-you.php">Locations</a>
 <a href="our-story.php">Our Story</a> 
<a href="rewards.php">VG Rewards</a>  



				
					<ul class="global-order-tag">
					
						<?php if(!(isset($_SESSION['login']))){ echo " 
							<a href='login.php' >
								login
							</a>
						
					     "; } 
					     else { 
					         echo	'
							<a href="index.php">
								'. $_SESSION['login'].'
							</a>
						';
						}?>
						<?php if(!(isset($_SESSION['login']))){ echo '    
							<a href="contact-us.php">
								Nous contacter
							</a> ';}
							else{echo '<a href="index.php?destroy=ok" >
						Deconnexion
							</a> ';}
							
							?>
					
					</ul>
			
			
 
							
</header>