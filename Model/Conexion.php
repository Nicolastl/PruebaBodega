<?php
class Conexion{
    protected $con;
    public function __construct() // Crear Conexion con la base de datos
    {
        $this->con = new mysqli('localhost', 'root','','prueba_bodega'); //Probar en localhost con estos parametros, en caso de que sean probados en otra cuenta, verificar, desconozco la data del computador donde se probara
    }

}