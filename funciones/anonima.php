<?php 

$Saludo = function(){
  echo "Hola,que tal";
};

$Funcion_A_Parametros = function(string $persona):string{
    //echo "Hola,que tal $persona";

    return 'Hola, '.$persona;
};

$Numero_1 = 5;
$Numero_2 = 67;
$MayorNumero = function() use($Numero_1,$Numero_2){
  
    return $Numero_1 > $Numero_2 ? "mayor es $Numero_1":"mayor es  $Numero_2";
};
//$Saludo();

echo $Funcion_A_Parametros("Adrian")."<br>";

echo $MayorNumero();
