<?php 
session_start();
/* 
Dada una cantidad expresada en pies y otra en metros. 
Determinar la suma pero convertida a pulgadas, a yardas, a 
metros y a millas por separado. Considere las siguientes 
equivalencias:
*/

$Cantidad_Pies = $_POST['pies'] ?? '';

$Cantidad_Metros = $_POST['metros'] ?? '';

/// de pies a pulgadas

$Pies_A_Pulgadas = $Cantidad_Pies*12;

/// de Metros a pulgadas

$Metros_A_pulgadas = $Cantidad_Metros/0.0254;

/// de pies a Yardas 

$Pies_A_Yardas = $Cantidad_Pies/3;

/// de Metros a Yardas

$Metros_A_Yardas = ($Metros_A_pulgadas/12)/3;

/// de pies a metros

$Pies_A_Metros = $Pies_A_Pulgadas*0.0254;

/// de pies a millas

$Pies_A_Millas = $Pies_A_Metros/1609;

/// de metros a millas
$Metros_A_Millas = $Cantidad_Metros/1609;
/// total de pulgadas

$Total_Pulgadas = $Pies_A_Pulgadas + $Metros_A_pulgadas;

$Total_Yardas = $Pies_A_Yardas + $Metros_A_Yardas;

$Total_Metros = $Cantidad_Metros +$Pies_A_Metros;

$Total_Millas = $Pies_A_Millas +$Metros_A_Millas;



/// resultados 1234.567 => 1  234,567

$Resultado = "TOTAL DE PULGADAS : ".number_format($Total_Pulgadas,4,","," ")."<br>
      TOTAL DE YARDAS : ".number_format($Total_Yardas,4,","," ")."<br>
      TOTAL DE METROS : ".number_format($Total_Metros,4,","," ")."<br>
      TOTAL DE MILLAS ".number_format($Total_Millas,4,","," ");

$_SESSION['response'] = $Resultado;

// redirigir a la vista

header("location:view/vista.php");
