<?php 
	require_once "../clases/Usuarios.php";
	$Usuarios = new Usuarios();

    $nombre=$_POST['nombre'];
    $apellidoparterno=$_POST['apellidosP'];
    $apellidomaterno=$_POST['apellidosM'];
    $CORREO=$_POST['Correo'];
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	$respuesta = $Usuarios->agregarUsuario($nombre, $apellidoparterno, $apellidomaterno, $CORREO, $usuario, $password);
 
	if ($respuesta) {
?>
	<script>
		alert("Registro exitoso!");
		window.location.href = '../registro.php';
	</script>	

<?php
		  		
	} else {
?>
		<script>
			alert("Fallo!");
			window.location.href ='../registro.php';
		</script>	
<?php 
		
	}

 ?>