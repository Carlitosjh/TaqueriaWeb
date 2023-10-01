<?php 
	class usuarios{
		public function regUsuario($datos){
			$c=new conectar();
			$conexion=$c->conexion();
			$sql="INSERT into usuarios (nombre,apellido,email,password)
						values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]')";
			return mysqli_query($conexion,$sql);
		}
		public function loginUser($datos){
			$c=new conectar();
			$conexion=$c->conexion();
			// $password=sha1($datos[1]);

			$_SESSION['usuario']=$datos[0];
			$_SESSION['idusuario']=self::VerID($datos);

			$sql="SELECT * from usuarios where email='$datos[0]'and password='$datos[1]'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
		}
		public function VerID($datos){
			$c=new conectar();
			$conexion=$c->conexion();

			// $password=sha1($datos[1]);
			$sql="SELECT id_usuario from usuarios where email='$datos[0]'and password='$datos[1]'"; 
			$result=mysqli_query($conexion,$sql);
			return mysqli_fetch_row($result)[0];
		}

    }
?>