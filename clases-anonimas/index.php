<?php

/*
$Persona = new class("876534598","Santiago Mendes","Irma Tatiana")
{
 /// atributos o propiedades
 private string $dni;

 private string $apellidos;

 private string $nombres;

 /// constructor

 public function __construct(private string $dni_,private string $apellidos_,private string $nombres_)
 {
  $this->dni = $dni_;  $this->apellidos = $apellidos_;

  $this->nombres = $nombres_;
 }

 /// acciones o métodos

  

 public function setDni(string $dni)
 {
  $this->dni = $dni;
 }

 public function setApellidos(string $apellidos)
 {
    $this->apellidos = $apellidos;
 }

 public function setNombres(string $nombres)
 {
    $this->nombres = $nombres;
 } 

 public function getDni():string 
 {
    return $this->dni;
 }

 public function getApellidos():string 
 {
    return $this->apellidos;
 }

 public function getNombres():string 
 {
    return $this->nombres;
 }
}; 

echo $Persona->getApellidos()."<br>";

echo $Persona->getDni();*/

/*
$Login = new class 
{

    private $SignIn;

    public function setSignIn($SignIn_)
    {
        $this->SignIn = $SignIn_;
    }

    public function getSignIn()
    {
        return $this->SignIn;
    }

};

$Login->setSignIn(new class{
 
    private array $CredencialesBD ;

    public function setCredencialesBD(array $credenciales)
    {
        $this->CredencialesBD = $credenciales;
    }

    public function Attemp(array $MisCredenciales):bool
    {
     return (
       $this->CredencialesBD["username"] === $MisCredenciales["username"] AND 
       $this->CredencialesBD["password"] === $MisCredenciales["password"]
     );
    }
});

$Login->getSignIn()->setCredencialesBD([
    "username"=>"sistemas",
    "password"=>"12345678"
]);


echo $Login->getSignIn()->Attemp([
    "username"=>"sistemas",
    "password"=>"12345678" 
]);
*/

class Ventas 
{

    private $venta;


    public function setVenta($venta)
    {
        $this->venta = $venta;
    }

    public function getVenta()
    {
        return $this->venta;
    }

}

$venta = new Ventas;

$venta->setVenta(new class{

    private array $productos;

    public function setProducto(array $producto)
    {
        $this->productos = $producto;
    }

     /// igv no incluido en la venta 0.18  1/18
    public function SubTotal():int
    {
      $SubTotal = 0.00;

      $Venta = array_map(function($producto){

        $SubTotal = $producto['precio']*$producto['cantidad'];
        return $SubTotal;
      },$this->productos);
     

      return array_sum($Venta);

    }

    /// igv

    /// Importe a pagar
});

$venta->getVenta()->setProducto([
    [
     "descripcion"=>"Coca cola de 3 litros",
     "precio"=>9.80,
     "cantidad"=>2,
     "stock"=>23
    ],
    [
        "descripcion"=>"Aceite",
        "precio"=>4.60,
        "cantidad"=>4,
        "stock"=>24
    ]
]);

print_r($venta->getVenta()->SubTotal());



