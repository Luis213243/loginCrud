<!DOCTYPE html>
<html>
<head>
	<title>Registro de usuario</title>
	<?php require_once "dependencias.php"; ?>
</head>
<body background="fondos/registra.jpg">
	<div class="container">
		<h1>Registro de usuarios</h1>
		<div class="row justify-content-center align-items-center">
			<div class="col-sm-4">
				<form action="procesos/registro.php" method="post">
					<label for="nombre">nombre</label>
					<input type="text" name="nombre" class="form-control" required="">
					<label for="password">apellidos Paterno</label>
					<input type="text" name="apellidosP" class="form-control" required="">
					<label for="password">apellidos Materno</label>
					<input type="text" name="apellidosM" class="form-control" required="">
					<label for="password">Correo</label>
					<input type="text" name="Correo" class="form-control" required="">
					<label for="usuario">Usuario</label>
					<input type="text" name="usuario" class="form-control" required="">
					<label for="password">Password</label>
					<input type="text" name="password" class="form-control" required="">
					<br>
					<button class="btn btn-danger">Registrar</button>
					<a  style="color: red;" href="index.php" >Logear</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>