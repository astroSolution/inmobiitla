<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MisPublicaciones extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
      $this->load->model(array('Usuario_model','Publicaciones_model'));
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['titulo'] = "Panel Publicaciones";
    $this->Usuario_model->verificalogin();
    $data['publicaciones'] = $this->Publicaciones_model->obtenerPubs($this->session->datosusu[0]->idusuario);
    $this->load->view('secciones/usuarios/u_pusuario',$data);
  }
  function desactivaPub(){
    if(isset($_GET['id'])){
      print "<script>confirm('Seguro que desea desactivar esta publicacion?');</script>";
      $x = $this->Publicaciones_model->desactivaPub($_GET['id']);
      if($x==1){
        print "<script>confirm('Desactivada');window.location.href = \"/inmobiitla/mispublicaciones/\";</script>";
      }
    }
  }
  function activaPub(){
    if(isset($_GET['id'])){
      print "<script>confirm('Se activara la publicacion');</script>";
      $x = $this->Publicaciones_model->activaPub($_GET['id']);
      if($x==1){
        print "<script>confirm('Activada');window.location.href = \"/inmobiitla/mispublicaciones/\";</script>";
      }
    }else {
    print "<script>alert('Debe elegir una publicacion');window.location.href = \"/inmobiitla/mispublicaciones/\";</script>";
    }
  }
}
