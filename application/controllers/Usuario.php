<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('Usuario_model'));
    $data=array();
  }

  function index()
  {

  }
  function encriptar($cadena){
    $key='';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
    $encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $cadena, MCRYPT_MODE_CBC, md5(md5($key))));
    return $encrypted; //Devuelve el string encriptado

}

function desencriptar($cadena){
     $key='';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
     $decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($cadena), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
    return $decrypted;  //Devuelve el string desencriptado
}
  function registro(){
    $data['usuid'] = Usuario::encriptar('1');
    if(isset($_GET['usuario'])){
    $data['usuario'] = $this->Usuario_model->cargaUsu(Usuario::desencriptar($_GET['usuario']));
    $data['usuario']->idusuario = Usuario::encriptar($data['usuario']->idusuario);
  }
      $data['titulo'] = "Registro";
    $this->load->view("secciones/usuarios/u_registro",$data);
  }
  function registrar(){
    if($_POST){
      $data['ok'] = "ok";
      $_POST['contrasena'] = md5($_POST['contrasena']);
      $usu = explode('@',$_POST['correo']);
      $_POST['usuario'] =$usu[0];
      $_POST['idusuario'] = Usuario::desencriptar($_POST['idusuario']);
    //  $this->Usuario_model->registraUsu($_POST);
      $data['titulo'] = "Proceso completo";
      $this->load->view('secciones/v_procesocompletado', $data);
    }
  }

}
