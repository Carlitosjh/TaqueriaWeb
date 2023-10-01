
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
                <form id="frmRegistro">
                    <h2>Registrarse</h2>
                    <h3>Tacos los primos</h3>
					<label>Nombre:</label>
					<input type="text" class="form-control input-sm" name="nombre" id="nombre">
					<label>Apellido:</label>
					<input type="text" class="form-control input-sm" name="apellido" id="apellido">
					<label>Usuario:</label>
					<input type="text" class="form-control input-sm" name="usuario" id="usuario">
					<label>Contraseña:</label>
					<input type="text" class="form-control input-sm" name="password" id="password">
				    <span class="btn btn-primary" id="registro">Registrarse</span>
					<a href="index.php" class="btn btn-danger">Inicio</a>
				</form>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registro').click(function(){
			vacios=validarFormVacio('frmRegistro');
			if(vacios > 0){
				alert("Campos vacios");
				return false;
			}
			datos=$('#frmRegistro').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"regbd/regLogin/regUsuario.php",
				success:function(r){
					alert(r);
					if(r==1){
						alert("Registrado");
					}else{
						alert("Error");
					}
				}
			});
		});
	});
</script>