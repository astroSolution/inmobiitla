<?php
$titulo="Panel Usuario";
 $this->load->view('partes/p_header', $titulo);?>
<section>
  <div class="container">
    <?php
      foreach ($publicaciones as $v) {
    ?>

    <div class="col-md-3">
      <div class="pub thumbnail ">
          <img src="<?php echo $v->idpublicacion; ?>" alt="">
          <div class="info">
              <h4><a href="#"><?php echo $v->titulo; ?></a>
              </h4>
              <h5><?php echo ($v->accion=='V') ? 'Venta' : 'Alquiler'; ?></h5>
              <h4 class="text-success">RD$<?php echo $v->precio; ?></h4>
              <p><?php echo $v->descripcion; ?></p>
          </div>
          <div>
            <button type="button" name="button" class="btn btn-warning">Desactivar</button>
            <button type="button" name="button" class="btn btn-danger">Eliminar</button>
          </div>
      </div>
    </div>
    <?php } ?>

  </div>
</section>
