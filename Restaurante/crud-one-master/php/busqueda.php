<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from person where name like '%$_GET[s]%' or lastname like '%$_GET[s]%' or address like '%$_GET[s]%' or email like '%$_GET[s]%' or phone like '%$_GET[s]%' ";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="container table table-hover table-responsive-sm">
<thead>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Email</th>
	<th>Direccion</th>
	<th>Telefono</th>
	<th>Acciones</th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["name"]; ?></td>
	<td><?php echo $r["lastname"]; ?></td>
	<td><?php echo $r["email"]; ?></td>
	<td><?php echo $r["address"]; ?></td>
	<td><?php echo $r["phone"]; ?></td>
	<td style="width:150px;">
		<a href="../crud-one-master/editar.php?id=<?php echo $r["id"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="../crud-one-master/php/eliminar.php?id=<?php echo $r["id"];?>"" id="del-<?php echo $r["id"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["id"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./php/eliminar.php?id="+<?php echo $r["id"];?>;

			}

		});
		</script>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
