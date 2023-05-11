<?php 

class UsuarioController 
{

}

class ProductoController 
{

 public function __construct()
 {
    echo "soy el constructor de producto controller";
 }
 public $codigo;
 
 private string $descripcion;


}

class CategoryController 
{
    
    public function soyUnMetodo(){}
}

$productoController = new ProductoController;

$productoController->codigo;