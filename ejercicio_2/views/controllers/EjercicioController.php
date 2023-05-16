<?php 
use models\Ejercicio;
require '../models/Ejercicio.php';
$Texto = $_POST['texto'] ?? '';
$ejercicio = new Ejercicio;
if(isset($_POST['procesar']))
{

  echo $ejercicio->ejercio_1($Texto,4,2);
}

if(isset($_POST['procesar_2']))
{

  echo $ejercicio->ejercicio_2($Texto);
}

if(isset($_POST['procesar_3']))
{

  echo $ejercicio->ejercicio_3($Texto);
}