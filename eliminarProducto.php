<?php
require('Model/Conexion.php');
$con = new Conexion();
$id = $_GET['id'];
$datosProducto = $con->desactivarProducto($id);
header("Location: lista_producto.php");
