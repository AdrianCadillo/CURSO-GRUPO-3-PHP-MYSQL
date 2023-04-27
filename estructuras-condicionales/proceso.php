<?php 
/*
Escribir un programa en el lenguaje de PHP, 
que  calcule el salario total de un trabajador
de la empresa TecnologySoft, donde la empresa 
realiza aumentos por el buén trabajo que realizan
y dependiendo del cargo que ocupan, entre ellos 
tenemos (Ing. de sistemas, Administrador, Contador, y Programador) 
.El programa debe de permitir al usuario ingresar su nombre, 
salario antes de recibir los aumentos.

Los porcentajes de aumentos se muestran en la siguiente tabla:
*/
/// cliente
$Cliente = $_POST['cliente'] ?? '';
$Cargo = $_POST['cargo']?? '';
$Aumento = 0.00;
$Salario = $_POST['salario'] ?? '';
/// constantes para los aumentos deacuerdo al cargo
define("A_sistemas",0.20);
define("A_Administrador",0.15);
define("A_Contador",0.14);
define("A_Programador",0.16);

if($Cargo === 'Ing.Sistemas'):
 $Aumento = A_sistemas*$Salario;
else:
    if($Cargo === 'Administrador'):
      $Aumento = A_Administrador*$Salario;
    else:
        if($Cargo === 'Contador'):
            $Aumento = A_Contador*$Salario;
        else:
            $Aumento = A_Programador*$Salario;
        endif;
    endif;
endif;

$Salario+=$Aumento;

echo $Salario;


