<?php
require('Model/Conexion.php');
$con = new Conexion();
$id = $_GET['id'];
$datosBodega = $con->desactivarBodega($id);
header("Location: lista_bodega.php");
