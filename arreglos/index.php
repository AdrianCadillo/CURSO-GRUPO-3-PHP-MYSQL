<?php 
/// primera manera 

/*
$Array = array("elemento1",23,true,45.67);

$Array[] = "Elemento nuevo";

print_r($Array);
echo "<br>";
var_dump($Array);*/

/// segunda forma
/*
$Paises = [];
$Paises[] = "Perú";  $Paises[] = "Ecuador";

echo $Paises[1]."<br>";
var_dump($Paises);*/

$Paises = ["Perú","Bolivia",'Venezuela',"Mexico"];
/*
foreach($Paises as $pais):
echo "<li>$pais</li>"."<br>";
endforeach;*/

foreach($Paises as $Indice=>$pais):

    $Item = $Indice+1;
    echo "<li>$Item $pais</li>"."<br>";
endforeach;

$Estudiante = [
"name"=>"Susana",
"lastname"=>"Santillán",
"profesion"=>"Médico"
];

echo $Estudiante["lastname"]."<br>"; //// Santillán

$Docente = [
    "name"=>"Hugo Pedro",
    "Edad"=>45,
    "profesiones"=>[
     "Ing.sistemas","Ing.Civil","Medicina"
    ]
];

echo $Docente["profesiones"][1];