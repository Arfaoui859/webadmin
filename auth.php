<?php
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'resto';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {

	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ( !isset($_POST['username'], $_POST['Password']) ) {
	
	header('Location: login.php');
}

if ($stmt = $con->prepare('SELECT id, mdp FROM client WHERE nome = ?')) {

	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();

	$stmt->store_result();
}
if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();

	if ($_POST['Password'] === $password)  {
		
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['login'] = $_POST['username'];
		$_SESSION['id'] = $id;
		$_SESSION['pwd'] = $_POST['Password'];


          $okok="SELECT * FROM client where id='".$id."'";
                         $ree=mysqli_query($con,$okok);
                         $row = mysqli_fetch_array($ree);
   
      if ($row["type"]==="vendeur") {
      	   header('Location: vendeur/');
      	  $_SESSION['login'] = $_POST['username'];
		  $_SESSION['pwd'] = $_POST['Password'];
      	     }
      	else if($row["type"]==="user"){
          header('Location: index.php');
          $_SESSION['login'] = $_POST['username'];
		  $_SESSION['pwd'] = $_POST['Password'];
      	}
		
	
                                                         }
} else {
	header('Location: login.php');
}
$stmt->close();
?>