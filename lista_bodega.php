<?php
require('Model/Conexion.php');
$con = new Conexion();
$bodega = $con->getDataBodega();
require('Views/lista_bodegas.php');