<?php include('plantilla/base.php'); ?>
<!DOCTYPE HTML>
<html>

<body>

<form  method="post" action="transferenciaEnviada.php">
    <div class="container">
        <h1>Formulario Transferir Bodega</h1>
        <div class="row">
            <div class="col-6">
                <input type="number" id="bodega_principal" name="bodega_principal" value="<?php echo $id ?>" hidden>
                <label for="bod">Escoja Bodega Destino:</label>
                <select name="bod" id="bod" class="form-control input-sm">
                    <?php
                    foreach ($bodegas as $b){
                        if($b['id_bodega']!=$id){
                            ?>
                            <option value="<?php echo $b['id_bodega'] ?>"><?php echo $b['nombre'] ?></option>
                            <?php
                        }
                    }
                    ?></select>
                <?php
                foreach ($datosBodega as $d){?>
                    <label for="cantidad"><?php echo $d['producto'].'(Cantidad: '.$d['cantidad'].')' ?>:</label>
                    <input type="number" id="cantidad" name="cantidad[]" min="0" max="<?php echo $d['cantidad'] ?>" value="0" required class="form-control input-sm"><br>
                    <input type="number" id="id_producto" name="id_producto[]" value="<?php echo $d['id_producto'] ?>" hidden>
                    <input type="number" id="cantActual" name="cantActual[]" value="<?php echo $d['cantidad'] ?>" hidden><?php
                }
                ?>
                <input type="submit" name="envio">
            </div>
        </div>
    </div>



</form>
</body>
</html>
