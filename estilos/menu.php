<?php require_once "dependencias.php" ?>
<!DOCTYPE html>
<html> 
  <head>
    <title>Pagina Principal</title>
  </head>
  <body>
    <style>
      body{
        background: rgb(221,150,7);
      }
    </style>
      <div id="nav">
        <div class="navbar navbar-default navbar-fixed-top" data-spy="affix" data-offset-top="100">
          <div class="container">
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="principal.php"> Inicio </a>
                </li>
                <li><a href="clientes.php"> Clientes</a>
                </li>
                <li><a href="productos.php"> Agregar Productos</a>
                </li>
                <li><a href="listaproducto.php"> Lista Productos</a>
                </li>
                <li><a href="ventas.php"> Venta </a>
                </li>
                <li class="dropdown navbar-right" >
                  <a href="#" class="dropdown-toggle navbar-right" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Usuario: </a>
                  <ul class="dropdown-menu">
                    <li><a href="#"><?php echo $_SESSION['usuario']; ?></a></li>
                    <li> <a href="../regbd/salir.php">Cerrar Sesion</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>