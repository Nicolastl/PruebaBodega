<?php
class Conexion{
    public $con;
    public function __construct() // Crear Conexion con la base de datos
    {
        $this->con = new mysqli('localhost', 'root','','prueba_bodega'); //Probar en localhost con estos parametros, en caso de que sean probados en otra cuenta, verificar, desconozco la data del computador donde se probara
    }

    public function getCon(){
        $conexion = $this->con;
        return $conexion;
    }
    public function getDataBodega(){ //Obtener todas las bodegas
        $query = $this->con->query('SELECT * FROM bodega WHERE bodega.activo = 1');
        $retorno = [];
        $i=0;
        while ($fila = $query->fetch_assoc()){
            $retorno[$i]=$fila;
            $i++;
        }
        return $retorno;
    }

    public function getBodega($id){ //Obtener bodega por id
        $query = $this->con->query("SELECT * FROM bodega WHERE bodega.id_bodega = '$id' ");
        $retorno = [];
        $i=0;
        while ($fila = $query->fetch_assoc()){
            $retorno[$i]=$fila;
            $i++;
        }
        return $retorno;
    }


    public function guardarBodega($nombre){//Guardar Bodega Nueva
        $query = $this->con->query("INSERT INTO bodega(nombre) VALUES ('$nombre')");
        return $query;
    }

    public function editarBodega($nombre,$id){ //Editar Bodega, buscara cual es con su id
        $query = $this->con->query("UPDATE bodega SET nombre='$nombre' WHERE bodega.id_bodega='$id'");
        return $query;
    }
    public function desactivarProducto($id){ //Desactiva un producto, para no borrar la data historica
    $query = $this->con->query("UPDATE producto SET activo=0 WHERE producto.id_producto='$id'");
    return $query;
    }
    public function desactivarBodega($id){ //Desactiva una bodega, para no borrar la data historica
        $query = $this->con->query("UPDATE bodega SET activo=0 WHERE bodega.id_bodega='$id'");
        return $query;
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