<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicacion extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('Publicaciones_model'));
  }

  function index()
  {

  }

  function listar($tipo,$id){
    if($id=="fincas"){
      print "<script>alert('Fincas'); window.location.href = \"/inmobiitla/\";</script>";
    }
    if($id=="casas"){
      print "<script>alert('Casas'); window.location.href = \"/inmobiitla/\";</script>";
    }
    if($id=="apartamentos"){
      print "<script>alert('Apartamentos'); window.location.href = \"/inmobiitla/\";</script>";
    }
  }
  function ver($titulo, $id){
    $data['publicacion'] = $this->Publicaciones_model->cargaPub($id);
    $data['titulo'] = $data['publicacion'][0]->titulo;
    if($data['publicacion'][0]->estatus =='D' ){
      print "<script>alert('Publicacion Desactivada'); window.location.href = \"/inmobiitla/\";</script>";
    }else{
      $this->load->view('secciones/publicacion/detalle', $data);
    }
  }

}
