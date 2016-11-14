<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  //registra usuario
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
//carga usuario para editar
function cargaUsu($id){
    $usuario ="";
    $this->db->where('idusuario=',$id);
    $query = $this->db->get('usuario');
    $rs = $query->result();
    if(count($rs) > 0){
      $usuario = $rs[0];
    }
    return $usuario;
  }

}
