<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicar extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More

    $this->load->model('Publicaciones_model');
  }
  function index()
  {
    //Aqui le seteo el titulo, a la ventana
    $data = array();
    $id = 0;
    if (isset($_GET['id'])) {
      $id = $_GET['id']+0;
    }
    $data['publicacionid'] = $this->Publicaciones_model->cargarPublicacion($id);
    $data['titulo'] = "Publicar";
    $this->load->view('secciones/v_publicar.php',$data);
  }
  function cargaFotoDragDrop()
  {
    //$idPub = $_POST['idpublicacion'];

    $this->Publicaciones_model->ponerImagenes();
  }
  // function cargaFotoPublicacion()
  // {
  //   $this->Publicaciones_model->presentarImagenesPublicacion();
  // }
  function guardarRegistroPub()
  {
    if ($_POST) {
      $this->Publicaciones_model->guardarRegistroPubBD($_POST);
    }

    $data['titulo'] = "Publicar";
    $id = $this->Publicaciones_model->ultimoId();
    $data['resumen'] = $this->Publicaciones_model->cargarPublicacion($id);
    //$data['img'] = $this->Publicaciones_model->presentarImagenesPublicacion();

      $this->load->view('secciones/v_resumenPublicar.php',$data);


  }

}
