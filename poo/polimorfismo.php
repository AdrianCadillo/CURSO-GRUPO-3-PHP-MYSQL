<?php 

abstract class Orm
{
 /// definir métodos

 public abstract function Insert(string $Tabla,array $datos);
}


class OrmImpl extends Orm
{
    public function Insert(string $Tabla,array $datos)
    {
      /// proceso 1
      /*
      INSERT INTO tabla(atributo1,atributo2,atribut3) VALUES(:atributo1,:atributo2);
      */

      $Query = "INSERT INTO $Tabla(";

      foreach($datos as $atribute=>$value)
      {
        $Query.=$atribute.",";
      }

      $Query = rtrim($Query,",").") VALUES(";

      foreach($datos as $atribute=>$value)
      {
        $Query.=":".$atribute.",";
      }

      $Query = rtrim($Query,",").")";

      return $Query;
    }
}


class OrmImpl_ extends Orm
{
    public function Insert(string $Tabla,array $datos)
    {
      /// proceso 1
      /*
      INSERT INTO tabla(atributo1,atributo2) VALUES(?,?);
      */

      $Query = "INSERT INTO $Tabla(";

      foreach($datos as $atribute=>$value)
      {
        $Query.=$atribute.",";
      }

      $Query = rtrim($Query,",").") VALUES(";

      foreach($datos as $atribute=>$value)
      {
        $Query.="?,";
      }

      $Query = rtrim($Query,",").")";

      return $Query;
    }
}

$objeto = [
  new OrmImpl,
  new OrmImpl_
];

foreach($objeto as $obj)
{
  echo $obj->Insert("usuarios",["username"=>"usuario","email"=>"email@gmail.com"])."<br>";
}



