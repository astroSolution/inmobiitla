<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('Usuario_model','Publicaciones_model'));
    $data=array();
    $_SESSION['usuario']=new stdClass();
  }

  function index()
  {
$this->session->usuario->idusuario='1';
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
    $this->session->usuario = $this->Usuario_model->cargaUsu(Usuario::desencriptar($_GET['usuario']));

    $this->session->usuario->idusuario = Usuario::encriptar($this->session->usuario->idusuario);
    var_dump($this->session->usuario);
  }
      $data['titulo'] = "Registro";
    $this->load->view("secciones/usuarios/u_registro",$data);
  }
  function registrar(){
    $this->session->usuario = $this->Usuario_model->cargaUsu(Usuario::desencriptar('WIyf21Bn4A0zpsoSEJVWK7p8hx0iPJbsQWPqKxnPLSI='));
    if($_POST){
      $data['ok'] = "ok";
      $_POST['contrasena'] = md5($_POST['contrasena']);
      $usu = explode('@',$_POST['correo']);
      $_POST['usuario'] =$usu[0];
      $_POST['idusuario'] = Usuario::desencriptar($_POST['idusuario']);
    //  $this->Usuario_model->registraUsu($_POST);
      $data['titulo'] = "Proceso completo";
      $this->load->view('secciones/v_procesocompletado',$data);
    }
  }
  function panel(){
    $this->session->usuario->idusuario='1';
    $data['publicaciones'] = $this->Publicaciones_model->obtenerPubs($this->session->usuario->idusuario);
    $this->load->view('secciones/usuarios/u_pusuario',$data);
  }

}
