<?php include('plantilla/base.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-6">
            <table class="table">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Producto</td>
                    <td>Editar</td>
                    <td>Eliminar</td>


                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($producto as $p){
                    echo "<tr>";
                    echo "<td>".$p['id_producto']."</td>";
                    echo "<td>".$p['nombre']."</td>";
                    echo "<td><a href='editarProducto.php?id=".$p['id_producto']."'><button>Editar</button></a></td>";
                    echo "<td><a href='eliminarProducto.php?id=".$p['id_producto']."'><button>Eliminar</button></a></td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <a href="productos.php"><button>Crear Producto</button></a>
        </div>
    </div>
</div>

</body>

</html>