<?php
require('Model/Bodega_model.php');
$bod = new Bodega_model();
$id = $_GET['id'];
$datosBodega = $bod->desactivarBodega($id);
header("Location: lista_bodega.php");
