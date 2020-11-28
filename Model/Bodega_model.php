<?php

require_once 'Conexion.php';
class Bodega_model extends Conexion
{

    public function __construct() {

        parent::__construct();


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
    public function desactivarBodega($id){ //Desactiva una bodega, para no borrar la data historica
        $query = $this->con->query("UPDATE bodega SET activo=0 WHERE bodega.id_bodega='$id'");
        return $query;
    }
}