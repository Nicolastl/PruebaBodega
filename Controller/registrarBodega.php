<?php
require('Model/Conexion.php');
$con = new Conexion();
if(isset($_POST['envio'])){
    if(strlen ($_POST['nombre']) >= 1){
        $nombre = trim($_POST['nombre']);

        $resultado = $con->guardarBodega($nombre);
        if($resultado){
            echo '<h3 class="ok"> Envio Correcto</h3>';
        }else{
            echo '<h3 class="bad"> Envio Fallido</h3>';
        }
    }
}
