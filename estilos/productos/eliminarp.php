<?php
session_start();
if (isset($_SESSION['usuario'])) {
    if (isset($_GET['id'])) {
        $id_producto = $_GET['id'];

        require_once "../../conexionbd/Conexion.php"; 

        $db = new conectar();
        $conexion = $db->conexion();

        if (!$conexion) {
            die("La conexión a la base de datos falló: " . mysqli_connect_error());
        }

        $sql = "DELETE FROM producto WHERE id_producto = $id_producto";

        if (mysqli_query($conexion, $sql)) {
            header("Location: estilos/listaproducto.php");
            exit; 
        } else {
            echo "Error al eliminar el producto: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    } else {
        echo "ID del producto no proporcionado.";
    }
} else {
    header("location:../index.php");
}
?>
