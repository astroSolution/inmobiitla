<?php $this->load->view('partes/p_header');?>
<?php $this->load->view('partes/p_navegacion');?>
<section id="login">
  <div class="container">
    <form class="form-horizontal" action="<?php echo base_url('Usureg/login');?>" method="post">
      <div class="form-group input-group">
        <span class="input-group input-group-addon"></span>
        <input type="text" name="usuario" class="form-control"/>
      </div>
      <div class="form-group input-group">
        <span class="input-group input-group-addon"></span>
        <input type="text" name="usuario" class="form-control"/>
      </div>
      <div class="form-group input-group">
        <button type="submit" name="loguear">Loguear</button>
      </div>
    </form>
  </div>
</section>
<?php $this->load->view('partes/p_footer');?>
