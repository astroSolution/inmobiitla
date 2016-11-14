<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function registraUsu($usuario) {
  $id = $usuario['idusuario'];
  if($id+0 > 0) {
    $this->db->where('idusuario=',$id);
    unset($usuario['idusuario']);
    $this->db->update('usuario',$usuario);
  }else{
      $this->db->insert('usuario',$usuario);
  }
}

}
