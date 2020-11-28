<?php
require('Model/Conexion.php');
$con = new Conexion();
$id = $_GET['id'];
$datosBodega = $con->datosBodegaID($id);
$bodegas = $con->getDataBodega();
require('Views/transferirBodega.php');
