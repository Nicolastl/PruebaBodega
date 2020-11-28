<?php include('plantilla/base.php'); ?>
<!DOCTYPE HTML>
<html>

<body>
<div class="container">
    <h4>Editar Bodega</h4>
    <div class="row">
        <form  method="post" action="bodegaEditada.php">
            <?php

            foreach ($datosBodega as $d){
                echo 'ID: '.$d['id_bodega'].'<br>';
                echo 'Nombre actual de la Bodega: '.$d['nombre'].'<br>';
                echo 'Nuevo Nombre: <input type="text" name="nombre" required><input type="text" name="id" value="'.$d['id_bodega'].'" hidden><br>
    <input type="submit" name="envio" value="Guardar">';
            }
            ?>

        </form>
    </div>
</div>

</body>
</html>
