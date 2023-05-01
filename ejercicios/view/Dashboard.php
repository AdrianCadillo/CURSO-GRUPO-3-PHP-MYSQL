<?php 
 session_start();

 if(!isset($_COOKIE['remember']))
 {
    header("location:login_view.php");
   
 }
 else{
  if(isset($_SESSION['username']))
  {
    $UserConect = $_SESSION['username'];
     
  }
  else{
    $UserConect = openssl_decrypt($_COOKIE['remember'],"AES-128-ECB","**_"); 
  }

 }
?>

<h1>Bienvenido al sistema <?php echo $UserConect;?></h1>

<a href="../logout.php">Salir</a>