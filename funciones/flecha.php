<?php

$Numero = 89;
$saludar = fn()=>'hola, buenas noches';

$flecha = fn(int $numero_):int=>$Numero+$numero_;

$Credenciales = "Adrian|1234567";

$Credenciales = explode("|",$Credenciales);

$login = fn(string $user,string $pass)=> $Credenciales[0] === $user and $Credenciales[1] === $pass;



echo $login("Adrian","12345647");