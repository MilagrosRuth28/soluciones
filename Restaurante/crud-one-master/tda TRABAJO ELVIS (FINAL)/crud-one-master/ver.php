<html>
	<head>
		<title>.: CRUD :.</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">

		<script src="../js/jquery.min.js"></script>
	</head>
	<body>
<div class="container"> 
<div class="row">
<div class="col-md-12">
		<h2 class="text-center">LISTA DE COMENSALES joyRESTAURANTE</h2>
<!-- Button trigger modal -->
<br>
 
  <div>
      <a data-toggle="modal" href="#myModal" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar</a>
        <section class="text-right">
            <form class="navbar-form navbar-left" role="search" action="../crud-one-master/buscar.php">
               <input type="text" class="btn border-primary"  name="s" placeholder="Buscar"> <i class="fa fa-search"></i>         
            </form>
        </section>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
<form role="form" method="post" action="../crud-one-master/php/agregar.php">
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" name="name" required>
  </div>
  <div class="form-group">
    <label for="lastname">Apellido</label>
    <input type="text" class="form-control" name="lastname" required>
  </div>
  <div class="form-group">
    <label for="address">Domicilio</label>
    <input type="text" class="form-control" name="address" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" >
  </div>
  <div class="form-group">
    <label for="phone">Telefono</label>
    <input type="text" class="form-control" name="phone" >
  </div>

  <button type="submit" class="btn btn-default">Agregar</button>
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<?php include "php/tabla.php"; ?>
</div>
</div>
</div>

<script src="../js/bootstrap.min.js"></script>
	</body>
</html>