<?php
require('Model/Conexion.php');
$con = new Conexion();
$id = $_GET['id'];
$datosBodega = $con->getBodega($id);
require('Views/editBodega.php');
