<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<title>joyRESTAURANTE</title>
</head>
<style type="text/css">
body{
	background-image: url('../../img/foto3.jpg');
}
h1{
	color:black;
	text-align: center;
}

</style>
<body>
	<div class="contenedor-formulario">
		<div class="wrap">
			<form action="conexionUSUARIO.php" class="formulario" name="formulario_registro" method="POST">
				<div>
					<h1>Bienvenido a Joy</h1><br>
					<div class="input-group">
						<input type="text" id="nombre" name="Usuario">
						<label class="label" for="nombre">Nombre:</label>
					</div>
					<div class="input-group">
						<input type="text" id="pass" name="Apellidos">
						<label class="label" for="pass">Apellidos:</label>
					</div>
					<div class="input-group">
						<input type="text" id="pass" name="Correo">
						<label class="label" for="pass">Correo:</label>
					</div>
					<div class="input-group">
						<input type="text" id="pass" name="Usuario">
						<label class="label" for="pass">Usuario</label>
					</div>
					<div class="input-group">
						<input type="password" id="pass" name="Clave">
						<label class="label" for="pass">Contraseña:</label>
					</div>
					<input type="submit" id="btn-submit" value="Enviar">
				</div>
			</form>
		</div>
	</div>

	<script src="../js/formulario.js"></script>
</body>
</html>