<?php 

/*
final class Login
{
  
}*/

 class Login
{
  
    final public function Attemp()
    {
        echo "login attemp";
    }
}

/*
class ProcessLogin extends Login 
{
    public function Attemp()
    {
        echo "login attemp";
    }

}*/

readonly class Persona 
{
    public string $Nombre;

    public function __construct(string $Nombre_)
    {
        $this->Nombre = $Nombre_;
    }
}

$persona = new Persona("Adrian");

$persona->Nombre = "ss";

