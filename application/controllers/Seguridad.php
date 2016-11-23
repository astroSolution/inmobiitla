<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seguridad extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('Usuario_model'));
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('secciones/v_login');
  }
  function login() {
    //$data["titulo"]="Error en Login";
    $usuario = $_POST['usuario'];
    $clave = md5($_POST['contrasena']);
    $tmp = $this->Usuario_model->iniciarSesion($usuario, $clave);
    if ($tmp !== false) {
      $this->session->datosusu = $tmp;

      print "<script type=\"text/javascript\">alert('Bienvenido {$usuario}'); window.location.href = \"/inmobiitla/usuario/panel/\";</script>";
    }else{
      print "<script type=\"text/javascript\">alert('Usuario o contrasena incorrectos'); window.location.href = \"/inmobiitla/usuario/registro/\";</script>";

    }
  }

}
