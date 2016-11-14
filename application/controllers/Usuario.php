<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('Usuario_model'));
  }

  function index()
  {

  }
  function registro(){
      $data['titulo'] = "Registro";
    $this->load->view("secciones/usuarios/u_registro",$data);
  }
  function registrar(){
    if($_POST){
      $data['ok'] = "ok";
      $_POST['contrasena'] = md5($_POST['contrasena']);
      $usu = explode('@',$_POST['correo']);
      $_POST['usuario'] =$usu[0];
var_dump($_POST);
      $this->Usuario_model->registraUsu($_POST);
      //redirect('Usuario/registro',$data);
    }
  }

}
