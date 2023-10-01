<?php 
	session_start();
	if(isset($_SESSION['usuario'])){	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pagina principal</title>
		<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
		<script src="librerias/jquery-3.2.1.min.js"></script>
		<script src="validar/funciones.js"></script> 
	<?php require_once "menu.php"; ?>
	<style>
        body {
			background: rgb(221,222,3);
            background: linear-gradient(90deg, rgba(221,222,3,1) 0%, rgba(219,163,5,0.8995973389355743) 54%, rgba(255,171,0,1) 91%);
            font-family: Arial, sans-serif;
        }
        .jumbotron {
			background-color: #ff0000;
            background-size: cover;
            text-align: center;
            color: white;
        }
        .jumbotron h1 {
            font-size: 3em;
        }
        .btn-tacos {
            background-color: #ff9800;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="jumbotron">
        <h1>Bienvenido a Tacos Los Primos</h1>
        <p>Servimos los mejores tacos de MÉXICO</p>
        <a href="listaproducto.php" class="btn btn-lg btn-tacos">Productos</a>
    </div>
    
    <div class="container">
        <div class="row">
		<!-- <img src="Imagenes/Carn.jpg"class="img-fluid"> -->
            <div class="col-md-6">
                <h2>Tacos y Refrescos</h2>
                <p>Descubre nuestra variedad de tacos de carnitas.</p>
            </div>
            <div class="col-md-6">
                <h2>Ubicacion</h2>
                <p>Estamos ubicados en el municipio de Chicoloapan</p>
            </div>
        </div>
    </div>

    <footer class="text-center py-3">
        <p>&copy; 2023 Tacos los primos</p>
    </footer>

</body>
</html>
<?php 
	}else{
		header("location:../index.php");
	}
 ?>