<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_Publicaciones extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Publicaciones_model');
  }
  function index()
  {
    //Aqui le seteo el titulo, a la ventana
    $data['titulo'] = "Publicar";
    $this->load->view('secciones/newfolder/dragdrop/index.php',$data);
  }
  function cargaFotoDragDrop()
  {
    $this->Publicaciones_model->ponerImagenes();
  }
  function guardarRegistroPub()
  {
    if ($_POST) {
      $this->Publicaciones_model->guardarRegistroPubBD($_POST);
    }
  }

}
