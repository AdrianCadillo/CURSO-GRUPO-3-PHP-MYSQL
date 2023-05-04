<?php
/*
$veces = 120;

for($iterador = 1;$iterador<=$veces;):
 echo $iterador;
 $iterador++;
endfor;*/

/*
Implementar un programa en php con bucle while,
 que le permita a un   usuario ingresar su fecha 
 de nacimiento, y a través de ello imprimir 
 por pantalla su número de la suerte. Ejemplo : 

Fecha Nacimiento : 05/10/1997 --> 5 + 10 +1997 = 2012 --> 2+0+1+2 = 5
*/

$FechaNacimiento = "1996-11-04";

$Anio = substr($FechaNacimiento,0,4);
$Mes = substr($FechaNacimiento,5,2);
$Dia = substr($FechaNacimiento,8,2);

$SumaFecha = $Anio + $Mes + $Dia;

$Resto = 0;

for($iterador = $SumaFecha;$iterador > 9;):
 $Resto = fmod($iterador,10);
 $iterador = floor($iterador/10);
 $iterador+=$Resto;
endfor;

echo $iterador;