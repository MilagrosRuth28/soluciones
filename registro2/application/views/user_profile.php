<?php
$usua_id=$this->session->userdata('usua_id');

if(!$usua_id){

  redirect('user/login_view');
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Profile Dashboard-CodeIgniter Login Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>

<div class="container">
  <div class="row">
    <div class="col-md-4">

      <table class="table table-bordered table-striped">


        <tr>
          <th colspan="2"><h4 class="text-center">User Info</h3></th>

        </tr>
          <tr>
            <td>Name</td>
            <td><?php echo $this->session->userdata('usua_nombres'); ?></td>
          </tr>
          <tr>
            <td>Apellidos</td>
            <td><?php echo $this->session->userdata('usua_apellidos');  ?></td>
          </tr>
          <tr>
            <td>Direccion</td>
            <td><?php echo $this->session->userdata('usua_direccion');  ?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><?php echo $this->session->userdata('usua_email');  ?></td>
          </tr>
          <tr>
            <td>Telefono</td>
            <td><?php echo $this->session->userdata('usua_telefono');  ?></td>
          </tr>
          <tr>
            <td>Codigo</td>
            <td><?php echo $this->session->userdata('usua_codigo');  ?></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><?php echo $this->session->userdata('usua_password');  ?></td>
          </tr>
      </table>


    </div>
  </div>
<a href="<?php echo base_url('user/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
</div>
  </body>
</html>
