<?php 
	session_start();
	require_once "../../conexionbd/Conexion.php";
	require_once "../../conexionbd/Usuarios.php";

	$obj= new usuarios();

	$datos=array(
		$_POST['usuario'],
	    $_POST['password']
	);
	echo $obj->loginUser($datos);
?>