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
                    <td>Bodega</td>
                    <td>Editar</td>
                    <td>Eliminar</td>
                    <td>Transferir</td>


                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($bodega as $b){
                    echo "<tr>";
                    echo "<td>".$b['id_bodega']."</td>";
                    echo "<td>".$b['nombre']."</td>";
                    echo "<td><a href='editarBodega.php?id=".$b['id_bodega']."'><button>Editar</button></a></td>";
                    echo "<td><a href='eliminarBodega.php?id=".$b['id_bodega']."'><button>Eliminar</button></a></td>";
                    echo "<td><a href='transferirBodega.php?id=".$b['id_bodega']."'><button>Transferir</button></a></td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>

        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <a href="bodegas.php"><button>Crear Bodega</button></a>
        </div>
    </div>
</div>

</body>

</html>