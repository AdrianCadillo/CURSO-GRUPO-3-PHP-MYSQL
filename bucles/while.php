<?php 
/*
$numero = 2;

while($numero <=20):/// mientras V,V
 echo "Hola Mundo<br>";
 $numero+=1; /// 3,4
endwhile;*/

/*
Implementar un programa en php con bucle while,
que le permita a un   usuario ingresar su fecha
de nacimiento, y a través de ello imprimir 
por pantalla su número de la suerte. Ejemplo : 

Fecha Nacimiento : 05/10/1997 --> 5 + 10 +1997 = 2012 --> 2+0+1+2 = 5
*/
# paso 1 (extraer año,mes y dia de la fecha de nacimiento)

$FechaNacimiento = "1996-11-04"; /// 1996 + 11 +4 =2011 => 2+0+1+1 = 4

/// año,mes y dia

$Anio = substr($FechaNacimiento,0,4);
$Mes = substr($FechaNacimiento,5,2);
$Dia = substr($FechaNacimiento,8,2);

$SumaFechaNac = $Anio + $Mes + $Dia;

echo $SumaFechaNac;
