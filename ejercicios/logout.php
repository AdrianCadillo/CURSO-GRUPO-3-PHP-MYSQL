<?php
session_start();

session_destroy();

if(isset($_COOKIE['remember']))
{
   setcookie("remember",null,-123);
}

header("location:view/login_view.php");
?>