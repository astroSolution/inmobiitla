<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->helper(array('funciones'));
    $this->load->model(array('Publicaciones_model'));
  }

  function index()
  {
    $data['publicaciones'] = $this->Publicaciones_model->obtenerPubs();
    $this->load->view('secciones/v_principal', $data);
  }

}
