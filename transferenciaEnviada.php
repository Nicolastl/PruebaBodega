<?php
require('Model/Conexion.php');
$conex = new Conexion();

$cantidad =  $_POST['cantidad'];
$productos = $_POST['id_producto'];
$id_bodega_emisor = $_POST['bodega_principal'][0];
$id_bodega_receptor = $_POST['bod'][0];
$cActual = $_POST['cantActual'];

$i=0;
foreach ($cantidad as $c){
    $cantAct = $c; //cantidad de producto transferido
    $id_p = $productos[$i]; //id de producto transferido
    $CantBodEmisor = $cActual[$i] - $cantAct; //descuento de la bodega que envia
    $i++;
    if($cantAct != 0){ //si es 0, no hara ninguna de las siguientes secuencias
        $existe_id = $conex->existeProdenBod($id_p,$id_bodega_receptor); //comprobar si existe una relacion bodega producto con la bodega receptora y el producot
        $bodegaProdEmisor = $conex->existeProdenBod($id_p,$id_bodega_emisor); //conseguir ID de la relacion bodega emisor con producto
        $existe = NULL;
        foreach ($existe_id as $id){
            $existe =  $id['id_producto_bodega'];
            $valoractual = $id['cantidad'];
        }
        if($existe) {
            $cantAct += $valoractual; //suma de producto de bodega receptor
            $conex->cantidadNuevaProdBod($existe, $cantAct); //guardar dato
        }else {
            $conex->crearRelacionProBod($id_p, $id_bodega_receptor, $cantAct); // si no existe la relacion se crea y se guarda dato
        }
        foreach ($bodegaProdEmisor as $emi){
            echo 'ID: '.$emi['id_producto_bodega'].'Cant que tenia: '.$emi['cantidad'].'cantidad que quedara: '.$CantBodEmisor.'<br>';
            $conex->cantidadNuevaProdBod($emi['id_producto_bodega'], $CantBodEmisor); // guarda el nuevo valor de bodega emisor
        }
        $CantBodEmisor=0;
    }
    header("Location: index.php");

}
