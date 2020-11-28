<?php
require ('Model/Producto_model.php');
require ('Model/Bodega_model.php');
$pro = new Producto_model();
$bod = new Bodega_model();
$productos = $pro->getDataProducto();
$bodegas = $bod->getDataBodega();
require('Views/insertar.php');