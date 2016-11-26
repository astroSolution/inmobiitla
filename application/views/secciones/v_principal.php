<?php $this->load->view('partes/p_header'); ?>
<?php $this->load->view('partes/p_navegacion'); ?>
<section>
  <div class="container">
    <div class="col-md-3">
sdfad
    </div>
    <div class="col-md-9">
      <?php
        foreach ($publicaciones as $v) {
      ?>
      <div class="col-md-3">
        <div class="pub thumbnail ">
          <img src="<?php echo base_url('public/imagenes/img.jpg'); ?>" class="img-responsive">
            <div class="info">
                <h4><a href="<?php echo base_url('publicacion/ver/'.urls_amigables($v->titulo).'/'.$v->idpublicacion); ?>"><?php echo $v->titulo; ?></a>
                </h4>
                <h5><?php echo ($v->accion=='V') ? 'Venta' : 'Alquiler'; ?></h5>
                <h4 class="text-success">RD$<?php echo $v->precio; ?></h4>
            </div>
        </div>
      </div>
      <?php } ?>

    </div>
  </div>
</section>
<?php $this->load->view('partes/p_footer'); ?>
