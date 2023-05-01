<?php
session_start();

session_destroy();

if(isset($_COOKIE['remember']))
{
    unset($_COOKIE['remember']);
}

header("location:view/login_view.php");
?>