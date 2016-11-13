<?php $this->load->view('partes/p_header');?>
<?php $this->load->view('partes/p_navegacion');?>
<section id="registro">
  <div class="container">
    <form class="form-horizontal" action="<?php echo base_url('Usureg/registro');?>" method="post">
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
        <input type="text" name="cedula" class="form-control"/>
      </div>
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
        <input type="text" name="correo" class="form-control"/>
      </div>
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
        <input type="text" name="nombre" class="form-control"/>
      </div>
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
        <input type="text" name="apellido" class="form-control"/>
      </div>
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
        <input type="text" name="telefono" class="form-control"/>
      </div>
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
        <input type="text" name="celular" class="form-control"/>
      </div>
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
        <input type="text" name="fax" class="form-control"/>
      </div>
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
        <input type="text" name="mas_informacion" class="form-control"/>
      </div>
      <div class="form-group input-group">
        <button type="submit" class="btn btn-success" name="loguear">Loguear</button>
      </div>
    </form>
  </div>
</section>
<?php $this->load->view('partes/p_footer');?>
