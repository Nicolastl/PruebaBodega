<?php include('plantilla/base.php'); ?>
<!DOCTYPE HTML>
<html>
<h1>Formulario Crear Bodega</h1>
<body>
<a href="index.php"><button>Volver</button></a>
<form  method="post">
    <div class="row">
        <div class="col-6">
    Nombre de la Bodega: <input type="text" name="nombre" required><br>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <input type="submit" name="envio" value="Guardar">
        </div>
    </div>
</form>
<?php
include("Controller/registrarBodega.php");
?>
</body>
</html>