<?php include('plantilla/base.php'); ?>
<!DOCTYPE HTML>
<html>
<h1>Formulario Crear Producto</h1>
<body>
<form  method="post">
<div class="row">
    <div class="col-6">
        Nombre del Producto: <input type="text" name="nombre" required>

</form>
<?php
include("Controller/registrarProducto.php");
?>
</body>
</html>