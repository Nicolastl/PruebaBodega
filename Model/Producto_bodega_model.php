<?php

require_once 'Conexion.php';
class Producto_bodega_model extends Conexion
{

    public function __construct() {

        parent::__construct();


    }
    public function existeProdenBod($prod, $bod){ //Revisa si ya existe una relacion entre producto y bodega
        $query = $this->con->query("SELECT producto_bodega.id_producto_bodega, producto_bodega.cantidad FROM producto_bodega WHERE producto_bodega.id_bodega = '$bod' AND producto_bodega.id_producto = '$prod'");
        return $query;
    }
    public function cantidadNuevaProdBod($id,$cant){ //Reemplaza el valor ya existente de una relacion producto-bodega
        $query = $this->con->query("UPDATE producto_bodega SET cantidad='$cant' WHERE producto_bodega.id_producto_bodega='$id'");
        return $query;
    }
    public function crearRelacionProBod($prod,$bod,$cant){ //Si no existe una relacion entre producto y bodega, se crea a partir de aqui
        $query = $this->con->query("INSERT INTO producto_bodega(id_producto,id_bodega,cantidad) VALUES ('$prod','$bod','$cant')");
        return $query;
    }
    public function datosBodegaID($id){ //Obtener datos especificos de bodega por id
        $query = $this->con->query("SELECT producto_bodega.id_producto,producto_bodega.id_producto_bodega , producto.nombre as producto, bodega.nombre as bodega, producto_bodega.cantidad
                                            FROM producto_bodega, producto, bodega 
                                            WHERE producto_bodega.id_bodega = '$id'
                                            AND producto_bodega.id_producto = producto.id_producto 
                                            AND producto_bodega.id_bodega = bodega.id_bodega ");
        $retorno = [];
        $i=0;
        while ($fila = $query->fetch_assoc()){
            $retorno[$i]=$fila;
            $i++;
        }
        return $retorno;
    }
}