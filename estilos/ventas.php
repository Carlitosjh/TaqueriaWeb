<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ventas</title>
	<?php require_once "menu.php"; ?>
</head>
<body>
	<div class="container">
		 <h1>Venta de productos</h1>
		 <div class="row">
		 	<div class="col-sm-12">

		 	</div>
		 </div>
		 <div class="row">
		 	<div class="col-sm-12">
		 		<div id="ventaProductos"></div>
		 		<div id="ventasHechas"></div>
		 	</div>
		 </div>
	</div>
</body>
</html>
	

<?php 
	}else{
		header("location:../index.php");
	}
 ?>