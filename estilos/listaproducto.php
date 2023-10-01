<?php
session_start();
if (isset($_SESSION['usuario'])) {
    require_once "../conexionbd/Conexion.php";


    $db = new conectar();
    $conexion = $db->conexion();

    if (!$conexion) {
        die("La conexión a la base de datos falló: " . mysqli_connect_error());
    }
    $query = "SELECT id_producto, nombre, cantidad, precio FROM producto";
    $result = mysqli_query($conexion, $query);
    mysqli_close($conexion);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Productos</title>
    <?php require_once "menu.php"; ?>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Lista de Productos</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Eliminar Producto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id_producto'] . "</td>";
                                    echo "<td>" . $row['nombre'] . "</td>";
                                    echo "<td>" . $row['cantidad'] . "</td>";
                                    echo "<td>$" . $row['precio'] . "</td>";
                                    echo "<td>
                                            <a href='../estilos/productos/eliminarp.php?id=" . $row['id_producto'] . "' class='btn btn-danger'>Eliminar</a>
                                        </td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


<?php
} else {
    header("location:../index.php");
}
?>
