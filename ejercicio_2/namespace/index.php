<?php

use namespace_use\Ejemplo;
use namespace_use_1\Ejemplo as ejemplo_1;

include '../layout/app.php';
?>

<?php 
include '../components/navbar.php';
?>


<?php 
require '../namespace_use/Ejemplo.php';
require '../namespace_use_1/Archivo.php';

$objeto1 = new Ejemplo;

$objeto2 = new ejemplo_1;

$objeto1->metodo1();

 
?>
 

<?php 
include '../components/footer.php';
?>