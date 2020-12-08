
<?php 

	class Conexion{
		public function conectar(){
			$conexion = mysqli_connect('localhost', 
										'root', 
										'', 
										'locrud');
			return $conexion;
		}
	}
 ?>