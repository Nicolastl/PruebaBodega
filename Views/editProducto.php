<?php include('plantilla/base.php'); ?>
<!DOCTYPE HTML>
<html>

<body>
<div class="container">
    <h4>Editar Producto</h4>
    <div class="row">
        <form  method="post" action="productoEditado.php">
            <?php

            foreach ($datosProducto as $d){
                echo 'ID: '.$d['id_producto'].'<br>';
                echo 'Nombre actual del producto: '.$d['nombre'].'<br>';
                echo 'Nuevo Nombre: <input type="text" name="nombre" required><input type="text" name="id" value="'.$d['id_producto'].'" hidden><br>
    <input type="submit" name="envio" value="Guardar">';
            }
            ?>
        </form>
    </div>
</div>

</body>
</html>
