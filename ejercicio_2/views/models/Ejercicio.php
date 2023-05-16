<?php 
namespace models;

class Ejercicio
{
    public function ejercio_1(string $texto,int $inicio,int $fin):string
    {
      return substr($texto,$inicio,$fin);
    }

    public function ejercicio_2(string $texto){/// hola mundo

        for ($i=0; $i <strlen($texto) ; $i++) { 
           
            if(substr($texto,$i,1) === ' ')
            {
                $texto[$i] ="_";
            }
        }
        return $texto;
    }

    public function ejercicio_3(string $texto){/// Adrian Rosales

        $Iniciales = $texto[0]; /// A

        for ($i=0; $i <strlen($texto) ; $i++) { 
           
            if(substr($texto,$i,1) === ' ')
            {
                $Iniciales.=substr($texto,($i+1),1);
            }
        }
        return $Iniciales;
    }


}