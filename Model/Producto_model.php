<?php

require 'Conexion.php';
class Producto_model extends Conexion
{

    public function __construct() {

        parent::__construct();


    }
    public function getDataProducto_Bodega(){ //Obtencion de datos relacionados entre la bodega y sus productos
        $query = $this->con->query('SELECT producto_bodega.cantidad, producto.nombre as producto, bodega.nombre as bodega
                                            FROM producto_bodega, producto, bodega
                                            WHERE producto.id_producto = producto_bodega.id_producto
                                            AND bodega.id_bodega = producto_bodega.id_bodega 
                                            AND bodega.activo=1
                                            AND producto.activo=1
                                            ORDER BY bodega.nombre');
        $retorno = [];
        $i=0;
        while ($fila = $query->fetch_assoc()){
            $retorno[$i]=$fila;
            $i++;
        }
        return $retorno;
    }
    public function getDataProducto(){ //Obtener todos los productos
        $query = $this->con->query('SELECT * FROM producto WHERE producto.activo = 1');
        $retorno = [];
        $i=0;
        while ($fila = $query->fetch_assoc()){
            $retorno[$i]=$fila;
            $i++;
        }
        return $retorno;
    }
    public function getProducto($id){ //Obtener producto por id
        $query = $this->con->query("SELECT * FROM producto WHERE producto.id_producto = '$id' ");
        $retorno = [];
        $i=0;
        while ($fila = $query->fetch_assoc()){
            $retorno[$i]=$fila;
            $i++;
        }
        return $retorno;
    }
    public function guardarProducto($nombre){ //Guardar Producto Nuevo
        $query = $this->con->query("INSERT INTO producto(nombre) VALUES ('$nombre')");
        return $query;
    }
    public function editarProducto($nombre,$id){ //Editar Producto, buscara cual es con su id
        $query = $this->con->query("UPDATE producto SET nombre='$nombre' WHERE producto.id_producto='$id'");
        return $query;
    }
    public function desactivarProducto($id){ //Desactiva un producto, para no borrar la data historica
        $query = $this->con->query("UPDATE producto SET activo=0 WHERE producto.id_producto='$id'");
        return $query;
    }
}