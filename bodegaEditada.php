<?php
require('Model/Bodega_model.php');
$bod = new Bodega_model();
if(isset($_POST['envio'])){
    if(strlen ($_POST['nombre']) >= 1){
        $nombre = trim($_POST['nombre']);
        $id = trim($_POST['id']);

        $resultado = $bod->editarBodega($nombre,$id);
        if($resultado){
            echo '<h3 class="ok"> Edicion Correcta</h3>';
        }else{
            echo '<h3 class="bad"> Edicion Fallida</h3>';
        }
    }
    header("Location: lista_bodega.php");
}