<?php 
session_start();
$Persona = $_POST['persona'] ?? '';

$FechaNacimiento = $_POST['fecha'] ?? '';

$Errors = [];

$Segundos = strtotime($FechaNacimiento);/// 1996-11-04

/// CAPTURAR EL MES Y DIA date(formato,timestams) substr(cadena,8,2)

$Mes = date("m",$Segundos);/// que hace esta variable

$Dia = date("d",$Segundos);/// 

$SignoZodiacal = "";

if(isset($_POST['procesar']))
{

 if(empty($Persona))
 {
    $Errors[] = 'Complete sus nombres';
 }

 if(empty($FechaNacimiento))
 {
    $Errors[] = 'Seleccione su fecha de nacimiento';
 }

 if(count($Errors) > 0)
 {
   $_SESSION['error'] = $Errors;
 }
 else
 {
switch($Mes)
{
  case 1:$SignoZodiacal = $Dia <=20 ? 'Capricornio':'Acuario';break;  

  case 2:$SignoZodiacal = $Dia <=19 ? 'Acuario':'Piscis';break; 

  case 3:$SignoZodiacal = $Dia <=20 ? 'Piscis':'Aries';break;
  
  case 4:$SignoZodiacal = $Dia <=20 ? 'Aries':'Tauro';break;

  case 5:$SignoZodiacal = $Dia <=20 ? 'Tauro':'Géminis';break;

  case 6: $SignoZodiacal = $Dia<=21?'Géminis':'Cáncer';break;

  case 7: $SignoZodiacal = $Dia<=22?'Cáncer':'Léo';break;

  case 8: $SignoZodiacal = $Dia<=23?'Léo':'Virgo';break;

  case 9: $SignoZodiacal = $Dia<=23?'Virgo':'Libra';break;

  case 10: $SignoZodiacal = $Dia<=22?'Libra':'Escorpio';break;

  case 11: $SignoZodiacal = $Dia<=22?'Escorpio':'Sagitario';break;

  case 12:$SignoZodiacal = $Dia<=21?'Sagitario':'Capricornio';break;   

}

$_SESSION['response'] = "La persona ".$Persona." es de signo :". $SignoZodiacal;
}

header("location:vista_zodiacal.php");
}






