<?php
require('Model/Producto_model.php');
$pro = new Producto_model();
$producto = $pro->getDataProducto();
require('Views/lista_productos.php');