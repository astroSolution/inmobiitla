<title><?php echo $titulo; ?></title>
    <div class="container">


      <h3>Publicar</h3>
      <div class="row">
      <form class="" action="<?php //echo base_url('usuario/guardar')?>" method="post">
          <div class="col-md-6">
            <div class="form-group input-group">
              <span class="input-group-addon">Id:</span>
              <input class="form-control" readonly type="text" name="id" value="">
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon">Usuario:</span>
              <input class="form-control" type="text" name="usuario" value="">
            </div>


          <div class="form-group input-group">
              <span class="input-group-addon">Clave:</span>
              <input class="form-control" type="text" name="clave" value="">
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">nombre:</span>
              <input class="form-control" type="text" name="nombre" value="">
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">email:</span>
              <input class="form-control" type="text" name="email" value="">
            </div>

            <div class="text-left">


              <button class="btn btn-primary" type="sumit">Guardar</button>
            </div>
          </div>
      </form>
        </div>

      </div>
