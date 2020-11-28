<?php
require('Model/Producto_model.php');
$con = new Producto_model();
$id = $_GET['id'];
$datosProducto = $con->desactivarProducto($id);
header("Location: lista_producto.php");
