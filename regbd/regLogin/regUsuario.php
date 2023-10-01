<?php 
	require_once "../../conexionbd/Conexion.php";
	require_once "../../conexionbd/Usuarios.php";

	$obj= new usuarios();

	$datos=array(
		$_POST['nombre'],
		$_POST['apellido'],
		$_POST['usuario'],
		$_POST['password']);
	echo $obj->regUsuario($datos);
?>