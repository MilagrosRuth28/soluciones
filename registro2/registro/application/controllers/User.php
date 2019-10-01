<?php

class User extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->library('session');

}

public function index()
{
$this->load->view("register.php");
}

public function register_user(){

    /* $this->form_validation->set_rules('codigo', 'codigo', 'numeric');
     $this->form_validation->set_rules('nombres', 'nombres', 'alpha');
     $this->form_validation->set_rules('apellidos', 'apellidos', 'alpha');
     $this->form_validation->set_rules('direccion', 'direccion', 'alpha');
     $this->form_validation->set_rules('email', 'email', 'valid_email');
     $this->form_validation->set_rules('telefono', 'telefono', 'numeric');
     $this->form_validation->set_rules('password', 'password', 'alpha');

  if ($this->form_validation->run() == FALSE){
    $resp = array('exito'=>false);
    die(json_encode($resp));

  }*/

      $user=array(
      'usua_codigo'=>$this->input->post('user_codigo'),
      'usua_nombres'=>$this->input->post('usua_nombres'),
      'usua_apellidos'=>$this->input->post('usua_apellidos'),
      'usua_direccion'=>$this->input->post('usua_direccion'),
      'usua_email'=>$this->input->post('user_email'),
      'usua_telefono'=>$this->input->post('usua_telefono'),
      'usua_password'=>md5($this->input->post('user_password')),
      
      'user_mobile'=>$this->input->post('user_mobile')
        );
        print_r($user);

$email_check=$this->user_model->email_check($user['user_email']);

if($email_check){
  $this->user_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('user/login_view');

}
else{

  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('user');


}

}

public function login_view(){

$this->load->view("/login.php");

}

function login_user(){
  $user_login=array(

  'usua_email'=>$this->input->post('usua_email'),
  'usua_password'=>md5($this->input->post('usua_password'))

    );

    $data=$this->user_model->login_user($user_login['usua_email'],$user_login['usua_password']);
      if($data)
      {
        $this->session->set_userdata('user_id',$data['user_id']);
        $this->session->set_userdata('user_email',$data['user_email']);
        $this->session->set_userdata('user_name',$data['user_name']);
        $this->session->set_userdata('user_age',$data['user_age']);
        $this->session->set_userdata('user_mobile',$data['user_mobile']);

        $this->load->view('user_profile.php');

      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view("login.php");

      }


}

function user_profile(){

$this->load->view('user_profile.php');

}
public function user_logout(){

  $this->session->sess_destroy();
  redirect('user/login_view', 'refresh');
}

}

?>
