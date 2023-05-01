<?php 
 session_start();

 if(!isset($_SESSION['username']) and !isset($_COOKIE['remember']))
 {
    header("location:login_view.php");
 }
 else{
  if(isset($_COOKIE['remember']))
  {
    $UserConect = openssl_decrypt($_COOKIE['remember'],"AES-128-ECB","**_");
  }
  else{
    $UserConect = $_SESSION['username'];
  }
 }
?>

<h1>Bienvenido al sistema <?php echo $UserConect;?></h1>

<a href="../logout.php">Salir</a>