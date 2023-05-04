<?php 
session_start();
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

$FechaNacimiento = $_POST['fecha'] ?? ''; /// 1996 + 11 +4 =2011 => 2+0+1+1 = 4

/// año,mes y dia 2011/10 => C=201 , R=1

if(isset($_POST['suerte'])):
    $Anio = substr($FechaNacimiento,0,4);
    $Mes = substr($FechaNacimiento,5,2);
    $Dia = substr($FechaNacimiento,8,2);
    
    $SumaFechaNac = $Anio + $Mes + $Dia;/// 2011
    
    $Resto = 0;
    
    while($SumaFechaNac > 9):
    $Resto = fmod($SumaFechaNac,10);// R = 1, R = 2,R=2
    $SumaFechaNac = floor($SumaFechaNac/10);//C=201,C=20,C=2
    $SumaFechaNac+=$Resto;// 202,22,4
    endwhile;
    
    echo $SumaFechaNac;
endif;
