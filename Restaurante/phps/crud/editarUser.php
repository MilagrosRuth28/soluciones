<?php

	$var_id = $_POST['login'];

	if(!empty($_POST)){
	if(isset($_POST["nombre"]) &&isset($_POST["apellidos"]) &&isset($_POST["correo"]) &&isset($_POST["usuario"])){
		if($_POST["nombre"]!=""&& $_POST["apellidos"]!=""&&$_POST["correo"]!=""){
				include 'conectores/conexion.php';	

			$sql = "update usuarios set nombre=\"$_POST[Nombre]\",apellidos=\"$_POST[Apellidos]\",correo=\"$_POST[Correo]\",usuario=\"$_POST[Usuario]\" where usuario=".$_POST["usuario"];
			$query = $conexion->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");</script>";

			}
		}
	}
}



?>