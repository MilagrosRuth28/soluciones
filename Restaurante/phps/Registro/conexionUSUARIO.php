<?php  
 include '../conexion.php';
session_start();

$nombre=$_POST["Nombre"];
$apellidos=$_POST["Apellidos"];
$correo=$_POST["Correo"];
$usuario=$_POST["Usuario"];
$contraseña=$_POST["Contraseña"];

$sql= "INSERT INTO usuarios VALUES('$nombre','$apellidos','$correo','$usuario','$contraseña')" ;

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo ='".$_POST["Correo"]."'");
	if (mysqli_num_rows($verificar_usuario)>0) {
		echo '<script>
				alert("EL CORREO YA ESTA EN USO");
				window.history.go(-1);
			</script>';
		exit;
	}

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario ='".$_POST["Usuario"]."'");
	if (mysqli_num_rows($verificar_usuario)>0) {
		echo '<script>
				alert("EL USUARIO YA ESTA EN USO");
				window.history.go(-1);
		  	</script>';
		exit;
	}

$resultado= mysqli_query($conexion, $sql);
	if (!$resultado) {
		echo "ERROR AL REGISTRARSE, VER 44";
	}else{
		header("location: ../links/inicioADMI.php");
		$_SESSION['username']=$_POST['Usuario'];	
	}
	mysqli_close($conexion);
