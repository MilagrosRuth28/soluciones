<?php

	$var_id = $_POST['login'];

	include '../../conexion.php';

	$query = "DELETE FROM usuarios WHERE usuario='$var_id'";
	$conexion->query( $query);


?>