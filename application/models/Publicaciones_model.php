<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicaciones_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function obtenerPubs($idusu='')
  {
    if($idusu!=''){
      $this->db->where('idusuario',$idusu);
      $this->db->Limit('10');
      $query= $this->db->get('publicacion');

      return $query->result();
    }else{
      $query= $this->db->get('publicacion');
      return $query->result();
    }
  }
  function desactivaPub($idpub) {
    if($idpub!=''){

      $this->db->where('idpublicacion',$idpub);
      $x= array("estatus"=>"D");
      $this->db->update('publicacion',$x);
      return 1;
    }
  }
  function activaPub($idpub) {
    if($idpub!=''){

      $this->db->where('idpublicacion',$idpub);
      $x= array("estatus"=>"A");
      $this->db->update('publicacion',$x);
      return 1;
    }
  }

}
