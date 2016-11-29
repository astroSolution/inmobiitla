<?php $this->load->view('partes/p_header');?>
    <style>
.file_drag_area
{

     height:150px;

     display: block;
     width: 100%;
     margin: 0 auto 25px auto;
     padding: 25px;
     color: #97A1A8;
     background: #F9FBFE;
     border: 2px dashed #578abd;
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
#map{
  position: static!important;
  overflow: hidden;
width: 100%;
}
.asd{
  display: block;
  float: left;
}
</style>
<!-- Aqui termina-->

</head>
<?php $this->load->view('partes/p_navegacion');?>
<div class="col-md-1">
</div>

<section id="publicar">


    <div class="container">

      <div class="col-md-4">

      <h3>Publicar</h3>
      <div class="row">
      <form class="" action="<?php echo base_url('Publicar/guardarRegistroPub')?>" method="post">
            <div class="form-group input-group">

              <input class="form-control" readonly type="hidden" name="idpublicacion" value="<?php echo $publicacionid->idpublicacion; ?>">
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Titulo:</span>
              <input class="form-control" type="text" name="titulo" value="" required>
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon">Direccion:</span>
              <input class="form-control" type="text" name="direccion" value="" required>
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Tipo:</span>
              <input class="form-control" type="text" name="tipo" value="" required>
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Precio:</span>
              <input class="form-control" type="text" name="precio" value="" required>
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Accion:</span>
              <input class="form-control" type="text" name="accion" value="" required>
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Descripcion:</span>
              <input class="form-control" type="text-area" name="descripcion" value="" required>
            </div>

            <div class="form-group input-group">
              <!--<span class="input-group-addon">Mapita:</span>-->
              <input class="form-control" type="hidden" name="LTN" id="lat" value="" required>
            </div>
            <div class="form-group input-group">

              <!--<span class="input-group-addon">Mapita:</span>-->
              <input class="form-control" type="hidden" name="LGT" id="lng" value="" required>
            </div>

            <div class="form-group input-group">

              <input class="form-control" readonly type="hidden" name="idusuario" value="1">
            </div>
            <div class="text-left">


              <button class="btn btn-primary" type="sumit">Guardar</button>
            </div>
          </div>
      </form>
        </div>



<div class="col-md-6">
      <div id="map"></div>
</div>
      <div class="col-md-12">
        <br />
        <div class="container" style="width:100%;" align="center">
             <span class="text-center">Arrastre aqui la Imgen de su Publicacion</span><br />
             <div class="file_drag_area">
                  Arrastrar Imagen/es
                  <!--<input type="file" name="" value="">-->
             </div>

             <div id="uploaded_file"></div>
        </div>
        <br />
<script type="text/javascript">
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
               url:"<?php echo base_url('Publicar/cargaFotoDragDrop')?>",
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

/*
@Organization: ASTRO
@Author: JOSE GABRIEL ESCOBOSO
*/

var marcador; //variable para mas marcadores
var posicion;
//funcion para iniciar mapa y marcador
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 8,
    center: {lat: 18.6976733, lng: -71.2867375} //coordenadas Republica Dominicana
  });
  marcador = new google.maps.Marker({
    map: map,
    draggable: true,
    animation: google.maps.Animation.DROP,
    position: {lat: 18.6976733, lng: -71.2867375} //posicion inicial del marcador
  });
  marcador.addListener('drag', obtnCoodenada);
}
//funcion que obtiene las coordenadas para cuardar en la base de datos
function obtnCoodenada() {
  posicion = marcador.getPosition();
  document.getElementById('lat').value = posicion.lat();
  document.getElementById('lng').value = posicion.lng();
  //activa o no activa animacion
  if (marcador.getAnimation() !== null) {
    marcador.setAnimation(null);
  } else {
    marcador.setAnimation(google.maps.Animation.BOUNCE);
  }
}
</script>
</div>

</div>
<script async defer  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBC93hYoP_ZYTy7DZQLWJF1S65D7_uA9E&callback=initMap"></script>
</section>
<?php $this->load->view('partes/p_footer.php'); ?>
