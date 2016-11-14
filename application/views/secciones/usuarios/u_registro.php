<?php $this->load->view('partes/p_header', $titulo);
echo $ok;
?>
<section id="registro">
  <div class="container">
    <div class="col-md-6 col-md-offset-3">
      <h2 class="text-center">Registro</h2>
      <hr>
    <form class="form-horizontal" action="<?php echo base_url('Usuario/registrar');?>" method="post">
      <input type="hidden" name="idusuario" value="">
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
        <input type="text" name="cedula" placeholder="Cedula" class="form-control"/>
      </div>
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <input type="email" name="correo" placeholder="Correo" class="form-control"/>
      </div>
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" name="nombre" placeholder="Nombres" class="form-control"/>
      </div>
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" name="apellido"  placeholder="Apellido" class="form-control"/>
      </div>
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
        <input type="text" name="telefono" placeholder="Tel&eacute;fono" class="form-control"/>
      </div>
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
        <input type="text" name="celular" placeholder="Celular" class="form-control"/>
      </div>
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-print"></i></span>
        <input type="text" name="fax" placeholder="Fax" class="form-control"/>
      </div>
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-password"></i></span>
        <input type="text" name="contrasena" placeholder="contrase&ntilde;a" class="form-control"/>
      </div>
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
        <textarea type="text" name="mas_informacion" placeholder="Informaci&oacute;n" class="form-control">
        </textarea>
      </div>
      <div class="form-group input-group">
        <button type="submit" class="btn btn-success">Registrarme<i class="glyphicon glyphicon-chevron-right"></i></button>
      </div>
    </form>
    </div>
  </div>
</section>
<?php $this->load->view('partes/p_footer');?>
