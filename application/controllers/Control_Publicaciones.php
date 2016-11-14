<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_Publicaciones extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function index()
  {
    //Aqui le seteo el titulo, a la ventana
    $data['titulo'] = "Publicar";
    $this->load->view('secciones/v_publicar',$data);
  }

}
