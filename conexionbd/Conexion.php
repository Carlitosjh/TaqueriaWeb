<?php 
	class conectar{
		private $servidor="localhost";
		private $usuario="root";
		private $password="1234";
		private $bd="primos";
		public function conexion(){
			$conexion=mysqli_connect($this->servidor, $this->usuario,$this->password, $this->bd);
			return $conexion;
		}
	}
/*     $obj = new conectar();
    var_dump($obj->conexion()); */
 ?>