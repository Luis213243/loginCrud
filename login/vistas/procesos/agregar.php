<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['cons'],
		$_POST['can'],
		$_POST['an']
				);

	echo $obj->agregar($datos);
	

 ?>