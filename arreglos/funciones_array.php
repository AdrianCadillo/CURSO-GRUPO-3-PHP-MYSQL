<?php 
/*
$Usuarios = [
    [
        "username"=>"adrian@2000",
        "password"=> 12345,
        "perfil"=>"Docente"
    ],
    [
        "username"=>"Pedro@2000",
        "password"=> 1234511,
        "perfil"=>"Estudiante"
    ]
];

$json = json_encode(["usuarios"=>$Usuarios]);

print_r(json_decode($json));

return;

echo count($Usuarios) > 0 ? var_dump($Usuarios):'no hay datos';*/
/*
$variable = [4,7,8,"adrian"];

if(is_array($variable))
{
   print_r($variable);
}
else 
{
    echo "no eres array";
}*/

/*
$Elemento_Verificar = "Fresa";

$Frutas = ["Piña","Sandia","Mandarina","Fresa"];

if(in_array($Elemento_Verificar,$Frutas))
{
    echo "si pertenece";
}
else{

    echo "no pertenece";
}
*/

/*
$Url = "usuarios/create";

$Url = explode("/",$Url);

$Controlador = $Url[0]."Controller";

echo $Controlador;*/

$frutas = ['Mango','Lima','Fresa','Higo'];

$frutas = implode(" - ",$frutas);

echo $frutas;


