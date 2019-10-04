<?php

include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$var_usuario = $_POST['usuario'];

$query = "select * from usuarios where usuario like '%$var_usuario%'";
$result = $conexion->query($query);
$i = 0;
while($row = $result->fetch_array()){
    $registros[$i] = array( 'nombre'=>$row['nombre'],
                            'apellidos'=>$row['apellidos'],
                            'correo'=>$row['correo'],
                            'usuario'=>$row['usuario']
                      );
    $i++;
}        

$output = json_encode($registros);
print($output);
}
?>
