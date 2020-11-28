<?php
require('Model/Bodega_model.php');
$bod = new Bodega_model();
$id = $_GET['id'];
$datosBodega = $bod->getBodega($id);
require('Views/editBodega.php');
