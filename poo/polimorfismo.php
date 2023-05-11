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
    }
}


class OrmImpl_ extends Orm
{
    public function Insert(string $Tabla,array $datos)
    {
      /// proceso 1
    }
}

