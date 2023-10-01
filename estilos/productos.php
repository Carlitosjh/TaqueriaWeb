<?php
session_start();
if (isset($_SESSION['usuario'])) {
    require_once "../conexionbd/Conexion.php"; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $cantidad = $_POST["cantidad"];
        $precio = $_POST["precio"];

        $db = new conectar();
        $conexion = $db->conexion();

        if (!$conexion) {
            die("La conexión a la base de datos falló: " . mysqli_connect_error());
        }
        $sql = "INSERT INTO producto (nombre, cantidad, precio) VALUES ('$nombre', $cantidad, $precio)";

		if (mysqli_query($conexion, $sql)) {
            header("Location: listaproducto.php");
            exit; 
        } else {
            echo "Error al agregar el producto: " . mysqli_error($conexion);
        }

        mysqli_close($conexion);
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tacos</title>
    <?php require_once "menu.php"; ?>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Gestión de Productos</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Agregar Producto</h2>
                        <form id="frmProducto" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre del Producto</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="cantidad" class="form-label">Cantidad</label>
                                <input type="text" class="form-control" id="cantidad" name="cantidad" required>
                            </div>
                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="text" class="form-control" id="precio" name="precio" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Productos Disponibles</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="../Imagenes/Carn.jpg" alt="Carne" class="img-fluid mb-3">
                                <p class="text-center">Tacos de carnitas</p>
                            </div>
                            <div class="col-md-6">
                                <img src="../Imagenes/Chesco.jpg" alt="Queso" class="img-fluid mb-3">
                                <p class="text-center">Refresco</p>
                            </div>
                        </div>
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
