<?php
require('Model/Bodega_model.php');
require('Model/Producto_bodega_model.php');
$bod = new Bodega_model();
$bodP = new Producto_bodega_model();
$id = $_GET['id'];
$datosBodega = $bodP->datosBodegaID($id);
$bodegas = $bod->getDataBodega();
require('Views/transferirBodega.php');
