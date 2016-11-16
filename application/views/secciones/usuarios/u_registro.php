<?php $this->load->view('partes/p_header', $titulo);?>
<section id="registro">
  <div class="container">
    <div class="col-md-6 col-md-offset-3">
      <h2 class="text-center">Registro</h2>
      <hr>
      <a href="?usuario=<?php echo $usuid?>">editar</a>
    <form class="form-horizontal" action="<?php echo base_url('Usuario/registrar');?>" method="post">
      <input type="hidden" name="idusuario" value="<?php echo (isset($_SESSION['usuario']->idusuario) ? $_SESSION['usuario']->idusuario : ""); ?>">
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
        <input type="text" name="cedula"  placeholder="Cedula" required class="form-control" value="<?php echo (isset($_SESSION['usuario']->cedula) ? $_SESSION['usuario']->cedula : ""); ?>" <?php echo (isset($_SESSION['usuario']->cedula) ? "readonly" : ""); ?>/>
      </div>
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <input type="email" name="correo" placeholder="Correo" data-container="body"  data-toggle="popover" data-trigger="focus" title="Informacion" data-content="Utilizamos los caracteres que estan antes de la @ para crear su nombre de usuario, esto har&aacute; que pueda hacer login solo con la parte antes de la @." required class="form-control" value="<?php echo (isset($_SESSION['usuario']->correo) ? $_SESSION['usuario']->correo : ""); ?>" <?php echo (isset($_SESSION['usuario']->correo) ? "readonly" : ""); ?>/>
      </div>
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" name="nombre" placeholder="Nombres" required class="form-control" value="<?php echo (isset($_SESSION['usuario']->nombre) ? $_SESSION['usuario']->nombre : ""); ?>"/>
      </div>
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" name="apellido"  placeholder="Apellido" required class="form-control" value="<?php echo (isset($_SESSION['usuario']->apellido) ? $_SESSION['usuario']->apellido : ""); ?>"/>
      </div>
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
        <input type="text" name="telefono" placeholder="Tel&eacute;fono" required class="form-control" value="<?php echo (isset($_SESSION['usuario']->telefono) ? $_SESSION['usuario']->telefono : ""); ?>"/>
      </div>
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
        <input type="text" name="celular" placeholder="Celular" class="form-control" value="<?php echo (isset($_SESSION['usuario']->celular) ? $_SESSION['usuario']->celular : ""); ?>"/>
      </div>
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-print"></i></span>
        <input type="text" name="fax" placeholder="Fax" class="form-control" value="<?php echo (isset($_SESSION['usuario']->fax) ? $_SESSION['usuario']->fax : ""); ?>"/>
      </div>
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-option-horizontal"></i></span>
        <input type="password" name="contrasena" <?php echo (!isset($_SESSION['usuario']->contrasena) ? "required" : ""); ?>  placeholder="contrase&ntilde;a" class="form-control"/>
      </div>
      <div class="form-group input-group">
        <span class="input-group input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
        <textarea type="text" name="mas_informacion" placeholder="Informaci&oacute;n" class="form-control"><?php echo (isset($_SESSION['usuario']->mas_informacion) ? $_SESSION['usuario']->mas_informacion : ""); ?></textarea>
      </div>
      <div class="form-group input-group">
        <button type="submit" class="btn btn-success">Continuar<i class="glyphicon glyphicon-chevron-right"></i></button>
      </div>
    </form>
      <input type="file" name="files[]" id="filer_input2" multiple="multiple">
    </div>
  </div>
</section>
