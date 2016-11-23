<?php $this->load->view('partes/p_header');?>
<head>



<script src="<?php echo base_url('/public/js/jquery-3.1.1.min.js')?>"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
.file_drag_area
{

     height:150px;

     display: block;
     width: 600px;
     margin: 0 auto 25px auto;
     padding: 25px;
     color: #97A1A8;
     background: #F9FBFE;
     border: 2px dashed #C8CBCE;
     text-align: center;
     -webkit-transition: box-shadow 0.3s,
                         border-color 0.3s;
     -moz-transition: box-shadow 0.3s,
                         border-color 0.3s;
     transition: box-shadow 0.3s,
                         border-color 0.3s;
}
.file_drag_over{
     color:#0080FF;
     border-color:#0080FF;
}

</style>
<!-- Aqui termina-->

</head>
<?php $this->load->view('partes/p_navegacion');?>
<div class="col-md-1">
</div>


    <div class="container">

      <div class="col-md-4">

      <h3>Publicar</h3>
      <div class="row">
      <form class="" action="<?php echo base_url('Control_Publicaciones/guardarRegistroPub')?>" method="post">
<!--            <div class="form-group input-group">
              <span class="input-group-addon">Id:</span>
              <input class="form-control" readonly type="text" name="id" value="">
            </div>-->

            <div class="form-group input-group">
              <span class="input-group-addon">Titulo:</span>
              <input class="form-control" type="text" name="titulo" value="">
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon">Direccion:</span>
              <input class="form-control" type="text" name="direccion" value="">
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Tipo:</span>
              <input class="form-control" type="text" name="" value="">
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Precio:</span>
              <input class="form-control" type="text" name="precop" value="">
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Accion:</span>
              <input class="form-control" type="text" name="accion" value="">
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Descripcion:</span>
              <input class="form-control" type="text-area" name="descripcion" value="">
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Mapita:</span>
              <input class="form-control" type="text-area" name="" value="">
            </div>
            <div class="text-left">


              <button class="btn btn-primary" type="sumit">Guardar</button>
            </div>
          </div>
      </form>
        </div>





      <div class="col-md-6">
        <br />
        <div class="container" style="width:700px;" align="center">
             <span class="text-center">Arrastre aqui la Imgen de su Publicacion</spa><br />
             <div class="file_drag_area">
                  Arrastrar Imagen/es
             </div>
             <div id="uploaded_file"></div>
        </div>
        <br />

          </div>
          <script>
          $(document).ready(function(){
               $('.file_drag_area').on('dragover', function(){
                    $(this).addClass('file_drag_over');
                    return false;
               });
               $('.file_drag_area').on('dragleave', function(){
                    $(this).removeClass('file_drag_over');
                    return false;
               });
               $('.file_drag_area').on('drop', function(e){
                    e.preventDefault();
                    $(this).removeClass('file_drag_over');
                    var formData = new FormData();
                    var files_list = e.originalEvent.dataTransfer.files;
                    //console.log(files_list);
                    for(var i=0; i<files_list.length; i++)
                    {
                         formData.append('file[]', files_list[i]);
                    }
                    //console.log(formData);
                    $.ajax({
                         url:"<?php echo base_url('/Control_Publicaciones/cargaFotoDragDrop')?>",
                         method:"POST",
                         data:formData,
                         contentType:false,
                         cache: false,
                         processData: false,
                         success:function(data){
                              $('#uploaded_file').html(data);
                         }
                    })
               });
          });
          </script>

          </div>
