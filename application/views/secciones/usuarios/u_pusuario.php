<?php
$titulo="Panel Usuario";
 $this->load->view('partes/p_header', $titulo);?>
<section>
  <div class="container">
    <?php
      foreach ($publicaciones as $v) {
        $estatus =  ($v->estatus=='A') ? "Desactivar" : "Activar";
        $estatusf = ($v->estatus=='A') ? "desactivaPub" : "activaPub";
    ?>

    <div class="col-md-3">
      <div class="pub thumbnail ">
          <img src="<?php echo $v->idpublicacion;?>" alt="">
          <div class="info">
              <h4><a href="#"><?php echo $v->titulo; ?></a>
              </h4>
              <h5><?php echo ($v->accion=='V') ? 'Venta' : 'Alquiler'; ?></h5>
              <h4 class="text-success">RD$<?php echo $v->precio; ?></h4>
              <p><?php echo $v->descripcion; ?></p>
          </div>
          <div>
            <a href="<?php echo base_url('mispublicaciones/'.$estatusf.'?id='.$v->idpublicacion);?>" name="button" class="btn btn-default btn-xs"><?=$estatus;?></a>
            <a href="<?php echo base_url('mispublicaciones/editarPub?id='.$v->idpublicacion);?>" name="button" class="btn btn-default btn-xs">editar</a>
          </div>
      </div>
    </div>
    <?php } ?>

  </div>
</section>
