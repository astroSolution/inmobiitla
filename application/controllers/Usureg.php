<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usureg extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {

  }
  function regitro(){
    $this->load->helper('form');
    $this->load->view("secciones/usuarios/u_registro");
  }

}
