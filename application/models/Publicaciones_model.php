<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicaciones_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function obtenerPubs($idusu)
  {
    if($idusu!=''){
      $this->db->where('idusuario=',$idusu);
      $query= $this->db->get('publicacion');

      return $query->result();
    }else{
      $query= $this->db->get('publicacion');
      return $query->result();
    }
  }

}
