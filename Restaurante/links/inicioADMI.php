<?php 
  //include '../conectores/conexion.php'
    session_start();
        //session_start();
  $usuario= $_SESSION['username'];
    if (!isset($usuario)) {
      header("location: ../login.php");
    }else{
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">


  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
  <title>INICIO ADMINISTRADOR</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="inicioADMI.php">
        <img src="../img/joy.png"  class="d-inline-block align-top" width="50px"  alt="">
          joyRESTAURANTE
      </a>      

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="dropdown-item" href="#" id="navbarDropdown" role="button" onclick="MComensales('../crud-one-master/ver.php'); return false">
              PERSONAL
            </a>
          </li>
          <li class="nav-item dropdown">
              <a class="dropdown-item" href="#" onclick="getClientes(); return false">
              USUARIOS
            </a>
          </li>
      <!--user
          <li>
            <a class="nav-link" href="" onclick="MUsuario('lusuario.php'); return false">Usuarios</a>
          </li>-->
        </ul>

        <div class="nav-item dropdown navbar-nav">  
                <!--user<img src="../img/foto2.jpg" width="50px" height="50px">-->
                <div>
                  <?php 
                        //session_start();
                        $usuario= $_SESSION['username'];
                          if (!isset($usuario)) {
                              header("location: ../login.php");
                          }else{
                              echo "<h3> BIENVENIDO $usuario </h3>";
                              //echo "<a href='../cerrarSession.php'>CERRAR SESSION</a>";
                          }
                  ?>
                </div>
        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
         
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../restaurante">
              Ver pagina principal JOY
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../phps/cerrarSession.php" action="closesession.php">
             <i class="fa fa-sign-in"></i> Salir del sistema
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <br>
    
    <div type="text" id="buscar"></div>

    <div class="container" id="resultado" ></div>

      <img src="../img/foto2.jpg" width="1345" height="600">

  <script src="../js/script.js"></script>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.bundle.js"></script>

</body>
</html>