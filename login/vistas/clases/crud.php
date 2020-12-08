<?php 

	class crud{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="INSERT into t_gasto (consepto,cantida,anio)
									values ('$datos[0]',
											'$datos[1]',
											'$datos[2]')";
			return mysqli_query($conexion,$sql);
		}

		public function obtenDatos($idgasto){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT id_gastos,
							consepto,
							cantida,
							anio
					from t_gasto 
					where id_gastos='$idgasto'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_gastos' => $ver[0],
				'consepto' => $ver[1],
				'cantida' => $ver[2],
				'anio' => $ver[3]
				);
			return $datos;
		}

		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE t_gasto set consepto='$datos[0]',
									cantida='$datos[1]',
										anio='$datos[2]'
						where id_gastos='$datos[3]'";
			return mysqli_query($conexion,$sql);
		}
		public function eliminar($idgasto){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from t_gasto where id_gastos='$idgasto'";
			return mysqli_query($conexion,$sql);
		}
	}

 ?>