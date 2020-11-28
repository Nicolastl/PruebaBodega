<?php
require('Model/Producto_model.php');
$pro = new Producto_model();
$id = $_GET['id'];
$datosProducto = $pro->getProducto($id);
require('Views/editProducto.php');
