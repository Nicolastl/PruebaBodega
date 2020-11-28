<?php
require('Model/Bodega_model.php');
$bod = new Bodega_model();
$bodega = $bod->getDataBodega();
require('Views/lista_bodegas.php');