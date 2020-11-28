<?php
require ('Model/Producto_model.php');
$pro = new Producto_model();
$productos = $pro->getDataProducto();
$bodegas = $con->getDataBodega();
require('Views/insertar.php');