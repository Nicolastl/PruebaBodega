<?php include('plantilla/base.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Insertar Productos</title>
</head>

<body>

<form  method="post" action="sumarProBod.php">
    <div class="container">
        <div class="row">
            <div class="col-1">
                <label for="bodega">Bodega: </label>
            </div>
            <div class="col-2">
                <select name="bodega" id="bodega" class="form-control input-sm">
                    <?php foreach($bodegas as $b){
                        ?>
                        <option value="<?php echo $b['id_bodega'];?>"><?php echo $b['nombre'];     ?></option>
                    <?php } ?>
                </select>
            </div>


        </div>
        <div class="row">
            <div class="col-1">
                <label for="producto">Producto:</label>
            </div>
            <div class="col-2">
                <select name="producto" id="producto" class="form-control input-sm">
                    <?php foreach($productos as $p){ ?>
                        Producto: <option value="<?php echo $p['id_producto'];?>"><?php echo $p['nombre'];?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-1">
                <label for="cant">Cantidad:
            </div>
            <div class="col-2">
                <?php
                echo '</label> <input type="number" name="cant" id="cant" class="form-control" min="0"><br>';
                ?>
            </div>

        </div>
        <input type="submit" name="envio">
    </div>

</form>
</body>

</html>