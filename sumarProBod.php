<?php
require ('Model/conexion.php');
$con = new Conexion();

$id_bodega = $_POST['bodega'];
$id_producto = $_POST['producto'];
$cantidad = $_POST['cant'];
$existe_id = $con->existeProdenBod($id_producto,$id_bodega);
$existe = NULL;
foreach ($existe_id as $id){
    $existe =  $id['id_producto_bodega'];
    $valoractual = $id['cantidad'];
}

if($existe){
    $cantidad+=$valoractual;
    $con->cantidadNuevaProdBod($existe,$cantidad);
    header("Location: insertarProBod.php");
}else{
    $con->crearRelacionProBod($id_producto,$id_bodega,$cantidad);
    header("Location: insertarProBod.php");
}
