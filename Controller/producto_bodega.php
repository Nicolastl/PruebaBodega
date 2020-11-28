<?php
require ('Model/Producto_model.php');
$producto = new Producto_model();
$cantidades = $producto->getDataProducto_Bodega();
require('Views/ver.php');