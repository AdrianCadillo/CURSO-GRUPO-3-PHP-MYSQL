<?php 
session_start();
/*
$numero = 2;

do{
echo "estoy programando";
$numero++;/// 3,4,5
}while($numero<=5);/// */

/*
Implementar el problema anterior para devolver 
los número primos en un rango de números, por ejemplo [12-190]
*/
$Inicio = 3; $Final = 13; //// 3,4,5,6,7.....13 ; (1,2,3) (1,2,3,4)
$Primos = "";

do{
 $Iterador = 1; $contador = 0;
do{
   if(fmod($Inicio,$Iterador) == 0)
   {
     $contador++;
   }
   $Iterador++;
}while($Iterador<=$Inicio);

if($contador == 2)
{
   $Primos.=$Inicio." - ";
}
$Inicio ++;//13
}while($Inicio<=$Final);

$Primos = rtrim($Primos," - ");

// variable de session para almacenar la variable Primos

echo $Primos;
