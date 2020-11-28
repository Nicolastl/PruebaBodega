<?php include('plantilla/base.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Productos/Bodega</title>
</head>

<body>
<div class="container">
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <td>Producto</td>
                <td>Bodega</td>
                <td>Cantidad</td>

            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($cantidades as $c){
                echo "<tr>";
                echo "<td>".$c['producto']."</td>";
                echo "<td>".$c['bodega']."</td>";
                echo "<td>".$c['cantidad']."</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

</body>

</html>

