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

function paiement(){
   $cnx= new mysqli("localhost","root","","resto");
$num = $_POST["number"];
$cvv = $_POST["cvv"];
$années = $_POST["années"];
$mois=$_POST["mois"];
$result = mysqli_query($cnx,"SELECT * FROM carte_bancaire  WHERE  num_carte='".$num."'");
if(mysqli_num_rows($result) >0 )
{
 
   
 echo'<div class="col-6 col-4-med col-4-lrg">
 <div class="callout callout--product">
 <p >operation vrai !</p>
 </div>
	</div>';
}
else
{
echo'<div class="alert alert-danger" role="alert">
cette carte n existe pas verifier votre carte !
</div>';

}

}
if(isset($_POST['b']))
{
   paiement();
}
?>