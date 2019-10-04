<?php 

include '../conexion.php';
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $usuario= $_POST['Usuario'];
    $clave  = $_POST['Clave'];

    $consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'   " or die("mal en la consulta");
    $resultado = mysqli_query($conexion, $consulta);
    
    $filas= @mysqli_num_rows($resultado);
    
        if ($filas>0) {
            $_SESSION['username']= $usuario;    
            header("location: ../links/inicioADMI.php");
        } else{
            echo "ERROR EN LA AUTENTIFICACION";
            }
}

//SISTEMA DE LOGIN CON SESSIONES USANDO PHP Y MYSQL - CURSO DE PHP7

 ?>