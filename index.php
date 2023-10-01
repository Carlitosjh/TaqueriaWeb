<?php 
	
	require_once "conexionbd/Conexion.php";
	$obj= new conectar();
	$conexion=$obj->conexion();

	$sql="SELECT * from usuarios where email='admin'";
	$result=mysqli_query($conexion,$sql);
	$validar=0;
	if(mysqli_num_rows($result) > 0){
		$validar=1;
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tacos Los Primos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.2.1.min.js"></script>
	<script src="validar/funciones.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>
<body>
    <style>
        body{
            background: rgb(221,222,3);
            background: linear-gradient(90deg, rgba(221,222,3,1) 0%, rgba(219,163,5,0.8995973389355743) 54%, rgba(255,171,0,1) 91%);
        }
    </style>
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
                <img src="Imagenes/Primoss.jpg" alt="20" class="img-fluid">
            </div>
			<div class="col-lg-5">
				<form id="frmLogin">
                    <h2>Iniciar Sesión</h2>
                    <h3>Tacos los primos</h3>
					<label>Usuario:</label>
					<input type="text" class="form-control input-sm" name="usuario" id="usuario">
					<label>Contraseña:</label>
					<input type="password" name="password" id="password" class="form-control input-sm">
					<span class="btn btn-primary" id="login">Login</span>
					<a href="sign.php" class="btn btn-danger">Sign Up</a>
				</form>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#login').click(function(){
		vacios=validarFormVacio('frmLogin');
			if(vacios > 0){
				alert("Campos vacios");
				return false;
			}
		datos=$('#frmLogin').serialize();
		$.ajax({
			type:"POST",
			data:datos,
            url:"regbd/regLogin/login.php",
			success:function(r){

				if(r==1){
					window.location="estilos/principal.php";
				}else{
					alert("Error");
				}
			}
		});
	});
	});
</script>