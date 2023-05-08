<?php 
 /*
$Frutas = ["Piña","Cereza","Pera","Naranja"];

$Fruta1 = ["name"=>"Piña","color"=>"amarillo"];

$Route = ["Producto","delete","34"];

$controlador = "usuario";

$methodo = "editar";

$Estudiante_ = [
    "codigo"=>"00348243",
    "nombre"=>"Pedro",
    "apellidos"=>"Mendoza"
];

$a = [3,4,5,5,6];

extract($Estudiante_);

$Comptac = compact("controlador","methodo");

//print_r(array_diff($Frutas,$Fruta1));

list($Controlador,$Methodo,$Parametro) = $Route;

//sort($Frutas);

//print_r($Frutas);
//echo $codigo;
//echo $Controlador;
print_r($Comptac);
return;
$Estudiante = [
"codigo"=>"00348243",
"nombre"=>"Pedro",
"apellidos"=>"Mendoza"
];

$Estudiante_Keys = array_keys($Estudiante);

$Estudiante_key_First = array_key_first($Estudiante);

$Estudiante_Values = array_values($Estudiante);

/*
array_push($Frutas,"Mandarina");
/// realizar un programa aplicando arreglos y funciones arreglos para filtrar los número  
/// perfectos de una colección de elementos
array_pop($Frutas); 
//var_export($Estudiante_Keys[2]);

//echo $Estudiante_key_First;
var_dump($Estudiante_Values);*/


$Router = "/usuario/create";

$Route_ = explode("/",$Router);

//$Route_ = array_filter($Route_);
/*
$Numeros = [-12,-6,-7,3,4,5,16,-6];

$Numeros_Positivos = array_filter($Numeros,function($number){
    return $number > 0;
});

var_export($Numeros_Positivos);*/

$mascotas = ["gato","perro","loro"];
$Numeros = [-12,-6,-7,3,4,5,16,-6];
$Mascotas_Mayuscula = array_map("strtoupper",$mascotas);

$Numero_Multiplicados = array_map(function($number){
    return $number*5;
},$Numeros);

//print_r($Mascotas_Mayuscula);

print_r($Numero_Multiplicados);

 



 

 