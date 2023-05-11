<?php 

/// clase hija
class Persona 
{
    public string $dni;

    public string $apellidos;

    public string $nombre;


    public function __construct(string $dni_,string $apellidos_,string $nombre_)
    {
      $this->dni = $dni_; $this->apellidos = $apellidos_; $this->nombre = $nombre_;
    }


    

}

/// clase hija
class Estudiante extends Persona
{
 
private string $codigo;

private string $profesion;

public function __construct(string $dni_,string $apellidos_,string $nombre_,string $codigo_,
                   string $profesion_)
{
 parent::__construct($dni_,$apellidos_,$nombre_);

 $this->codigo = $codigo_;  $this->profesion = $profesion_;
 
}

public function getDataEstudiante()
{
  return 'CODIGO ESTUDIANTE : '.$this->codigo."<br>ESTUDIANTE: ".$this->apellidos.' '.
         $this->nombre."<br>PROFESION: ".$this->profesion; 
}

}


$estudiante = new Estudiante(
    "77567890",
    "Armas Peña",
    "Carla Susana",
    "0199199111",
    "Ing.de sistemas"
);

echo $estudiante->getDataEstudiante();