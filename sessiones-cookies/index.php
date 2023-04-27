<?php 
session_start();

$_SESSION['username'] = 'Adrian@gmail.com';

if(!array_key_exists("carrito",$_SESSION))
{
    $_SESSION['carrito'] = [];
}
/// si un producto no existe en carrito
if(!array_key_exists("Coca cola de 2 litros",$_SESSION['carrito']))
{
    /// lo agregamos

    $_SESSION['carrito']["Coca cola de 2 litros"]['cantidad'] =1;
    $_SESSION['carrito']["Coca cola de 2 litros"]['precio'] =10;
}
else{

    $_SESSION['carrito']["Coca cola de 2 litros"]['cantidad'] +=1;   
}


/// imprimir

if(isset($_SESSION['carrito']))
{
    print_r($_SESSION['carrito']);
}



