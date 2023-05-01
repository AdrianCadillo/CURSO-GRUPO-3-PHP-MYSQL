<?php 
session_start();


/// Username y Password credenciales (statica)

$Username_ = "Curso_Php";

$Password_ = "123456789";

$Username = $_POST["username"] ?? '';

$Password = $_POST["password"] ?? '';

$Remember = isset($_POST["remember"])?true:false;

if(isset($_POST['entrar']))
{
    
if($Username === $Username_ and $Password === $Password_)
{
  if($Remember)
  {
    setcookie("remember",openssl_encrypt($Username,"AES-128-ECB","**_"),time()+60);

    $_SESSION['username'] = $Username;

  }
  else{
    setcookie("remember",openssl_encrypt("*********","AES-128-ECB","**_"));
    $_SESSION['username'] = $Username;
  }

    /// redirigir

    header("location:view/Dashboard.php");

}
else{
    echo "credenciales incorrectas";
}
}

