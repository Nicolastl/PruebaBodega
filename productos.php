<?php include('plantilla/base.php'); ?>
<!DOCTYPE HTML>
<html>

<body>
<form  method="post">
    <div class="container">
        <h4>Formulario Crear Producto</h4>
        <div class="row">
            <div class="col-6">
                Nombre del Producto: <input type="text" name="nombre" required>
                <input type="submit" name="envio" value="Guardar">
            </div>

        </div>
    </div>

</form>
<?php
include("Controller/registrarProducto.php");
?>
</body>
</html>