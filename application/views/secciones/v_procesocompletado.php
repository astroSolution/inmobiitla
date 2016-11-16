<?php
 $this->load->view('partes/p_header', $titulo);?>
<section id="completado">
  <div class="container">
    <div class="col-md-3 col-md-offset-3">
      <div class="">
        <h2>¡LISTO!</h2>
        <ul>


          <?php
          unset($_SESSION['usuario']->idusuario);
          unset($_SESSION['usuario']->contrasena);
            foreach ($_SESSION['usuario'] as $key => $value) {

              echo "<li>".$key."</li>".$value;
            }
          ?>
        </ul>
      </div>
    </div>
  </div>
</section>
