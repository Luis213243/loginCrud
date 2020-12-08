<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['conU'],
		$_POST['canU'],
		$_POST['anU'],
		$_POST['idgasto']
				);

	echo $obj->actualizar($datos);
	

 ?>