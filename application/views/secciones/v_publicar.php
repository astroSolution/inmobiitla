<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">


      <h3>Datos del Usuario</h3>
      <div class="row">
      <form class="" action="<?php echo base_url('usuario/guardar')?>" method="post">
          <div class="col-md-6">
            <div class="form-group input-group">
              <span class="input-group-addon">Id:</span>
              <input class="form-control" readonly type="text" name="id" value="<?php echo $usuario->id; ?>">
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon">Usuario:</span>
              <input class="form-control" type="text" name="usuario" value="<?php echo $usuario->usuario; ?>">
            </div>


          <div class="form-group input-group">
              <span class="input-group-addon">Clave:</span>
              <input class="form-control" type="text" name="clave" value="<?php echo $usuario->clave; ?>">
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">nombre:</span>
              <input class="form-control" type="text" name="nombre" value="<?php echo $usuario->nombre; ?>">
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">email:</span>
              <input class="form-control" type="text" name="email" value="<?php echo $usuario->email; ?>">
            </div>

            <div class="text-left">


              <button class="btn btn-primary" type="sumit">Guardar</button>
            </div>
          </div>
      </form>
        </div>

      </div>
  </body>
</html>
