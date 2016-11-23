<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicaciones_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->database();
  }
function ponerImagenes()
{
  //upload.php
  //echo 'done';
  $output = '';
  if(isset($_FILES['file']['name'][0]))
  {
       //echo 'OK';
       foreach($_FILES['file']['name'] as $keys => $values)
       {
        $x = ".png";
         $values =  "887".$x;
            if(move_uploaded_file($_FILES['file']['tmp_name'][$keys], 'upload/' . $values) && $keys<=9)
            {
              var_dump($values);
                 $output .= '<div class="col-md-3" style="width:150px;"><img src="upload/'.$values.'" class="img-responsive img-thumbnail" /></div>';
            }
            if ($keys>9) {
              echo "<script>alert('Limite de 10 imagenes se elmiminara la img No.'+'".$keys."');</script>";
            }
       }
  }
  echo $output;
}

function guardarRegistroPubBD($pubData)
{

  $this->db->insert('publicacion',$pubData);
}
}
