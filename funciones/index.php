<?php 

function sumar($a,$b)
{
   echo $a+$b; 
}

function sumar_(int $a,int $b):array
{
   return [$a+$b]; 
}

//sumar(4,6);

print_r(sumar_(6,9));