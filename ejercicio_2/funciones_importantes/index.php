<?php
include '../layout/app.php';
?>

<?php 
include '../components/navbar.php';
?>

<div class="m-4">
 <?php 
  $Texto = "Estoy programando";

  $SubCadena = substr($Texto,-3,2);

  echo $SubCadena;
 ?>
</div>

<?php 
include '../components/footer.php';
?>