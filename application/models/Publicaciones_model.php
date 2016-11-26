<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicaciones_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->database();
  }
function cargarPublicacion($id)
{
  $publicacion = new stdclass();
  $publicacion->idpublicacion = 0;

  $query = $this->db->where('idpublicacion=',$id);
  $query = $this->db->get('publicacion');

  $rs = $query->result();
  if(count($rs) > 0){
    $publicacion = $rs[0];
  }

  return $publicacion;
}

function guardarRegistroPubBD($publicacion)
{

//var_dump($publicacion);
//$this->db->insert('usuario', $usuario);
  $this->db->insert('publicacion', $publicacion);
}
function ultimoId()
{
  $query = $this->db->query('SELECT max(idpublicacion) as id FROM publicacion');
  $v = $query->row();
  $id = $v->id;
return $id;
}

function imagenesEdicionPublicacion($idPP)
{
    $directory=('upload/');
    $dirint = dir($directory);
 if ($idPP == null) {
    $id = $this->ultimoId();
}

    while(($archivo = $dirint->read()) !== false)
    {
      $str = $archivo;
      $caracteres = preg_split('/_/', $str, -1, PREG_SPLIT_NO_EMPTY);
      // var_dump($caracteres);
    // $items = (string)$id;
      // var_dump($items);
      if ($caracteres['0'] === $id){
        $imagen = $id.'_'.$caracteres['1'];
        // var_dump($imagen);
         echo '<div class="col-md-6" style="width:20%;"><img src="../upload/'.$imagen.'" class="img-responsive img-thumbnail" />
           <input class="" type="file" name="nombre" value="'.$imagen.'">
         </div>'."\n";
      }
    }
    $dirint->close();
}

function presentarImagenesPublicacion($idPP)
{
    $directory=('upload/');
    $dirint = dir($directory);
if ($idPP == null) {
  $id = $this->ultimoId();
}

    while(($archivo = $dirint->read()) !== false)
    {
      $str = $archivo;
      $caracteres = preg_split('/_/', $str, -1, PREG_SPLIT_NO_EMPTY);
      // var_dump($caracteres);
    // $items = (string)$id;
      // var_dump($items);
      if ($caracteres['0'] === $id){
        $imagen = $id.'_'.$caracteres['1'];
        // var_dump($imagen);
         echo '<div class="col-md-6" style="width:20%;"><img src="../upload/'.$imagen.'" class="img-responsive img-thumbnail" /></div>'."\n";
      }
    }
    $dirint->close();
}

function ponerImagenes()
{
  //upload.php
  //echo 'done';
  $query = $this->db->query('SELECT max(idpublicacion) as id FROM publicacion');
  $v = $query->row();
  $id = $v->id+1;
  $output = '';
  $a= 0;
  $errores = '';

  $x = ".png";
  if( isset($_FILES['file']['name'][0]) )
  {
    foreach($_FILES['file']['name'] as $keys => $values)
    {
      $a = $a+1;
      $values =  $id."_".$a.$x;
        if ($keys<=9) {
          var_dump($a);
      if(move_uploaded_file($_FILES['file']['tmp_name'][$keys], 'upload/' . $values))
      {
        //var_dump($values);
        $output .= '<div class="col-md-3" style="width:150px;"><img src="upload/'.$values.'" class="img-responsive img-thumbnail" /></div>';
        }
    }/*else{
          //$errores .= $keys.", ";

    }*/
    }
  }
  echo "<script>alert('Limite de 10 imagenes, demas imagenes seran eliminadas');</script>";
  echo $output;
}
}
