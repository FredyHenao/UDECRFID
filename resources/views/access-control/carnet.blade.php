{{--
|--------------------------------------------------------------------------
| Extends
|--------------------------------------------------------------------------
|
| Hereda los estilos y srcipts de la de la plantilla original.
| Es la base para todas las páginas que se deseen crear.
|
--}}
@extends('material.layouts.dashboard')

{{--
|--------------------------------------------------------------------------
| Styles
|--------------------------------------------------------------------------
|
| Inyecta CSS requerido ya sea por un JS o para un elemento específico
|
| @push('styles')
|
| @endpush
--}}
@push('styles')
<!-- Datatables Croppie -->
<link rel="stylesheet" href="{{ asset('css/croppie.css') }}">

<style>
  .swal-overlay {
    z-index: 200000;
  }
</style>
@endpush


{{--
|--------------------------------------------------------------------------
| Title
|--------------------------------------------------------------------------
|
| Inyecta el título de la página a la etiqueta <title></title> de la plantilla
| Recibe texto o variables de los controladores
| Sin embargo, también se puede usar de la siguiente forma
|
| @section('title', $miVariable)
| @section('title', 'Título')
--}}
@section('title', '| Dashboard')

{{--
|--------------------------------------------------------------------------
| Page Title
|--------------------------------------------------------------------------
|
| Inyecta el título a la sección del contenido de página.
| Recibe texto o variables de los controladores
| Sin embargo, también se puede usar de la siguiente forma
|
| @section('page-title', $miVariable)
| @section('page-title', 'Título')
|
|
--}}
@section('page-title', 'Dashboard')
{{--
|--------------------------------------------------------------------------
| Page Description
|--------------------------------------------------------------------------
|
| Inyecta una breve descripción a la sección del contenido de página.
| Recibe texto o variables de los controladores o se puede dejar sin datos
| Sin embargo, también se puede usar de la siguiente forma
|
| @section('page-description', $miVariable)
| @section('page-description', 'Título')
--}}

@section('page-description', 'Breve descripción de la página')

{{--
|--------------------------------------------------------------------------
| Content
|--------------------------------------------------------------------------
|
| Inyecta el contenido HTML que se usará en la página
|
| @section('content')
|
| @endsection
--}}
@section('content')
    <div class="col-md-12">
        <div class="portlet light ">
          <div class="portlet-title">
            <h1>
              Carnets
              <button type="button" class="btn btn-primary pull-right" name="button" id="crearCarnet">Crear carnet</button>
            </h1>

          </div>
          <div class="portlet-body" style="margin-top: 2em;">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> # </font></font></th>
                    <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Imagen </font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Nombre </font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Programa </font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Código </font></font></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody id="app">
                  <tr v-for="(carnet, index) in carnets">
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" v-text="carnet.id"></font></font></td>
                    <td class="text-center">
                      <img :src="carnet.imagen" width="85">
                    </td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" v-text="carnet.nombre"> Celda de tabla </font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" v-text="carnet.programa"> Celda de tabla </font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" v-text="carnet.codigo"> Celda de tabla </font></font></td>
                    <td>
                      <button type="button" class="btn btn-danger" @click="eliminar(index)"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>

@endsection
@section('modals')

<!-- Modal -->
<div class="modal fade" id="crear_carnet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Crear carnet</h4>
      </div>
      <div class="modal-body">

        <div class="form-group text-center">
          <form id="form_avatar" enctype="multipart/form-data">
            <div class="row">
              <div class="col-xs-12 col-md-6 col-md-offset-3">
                <img src="/images/default.gif" id="avatar_perfil" style="width: 100%;"><br>
                <label for="avatar" style="margin-top: 1em;">
                  <span class="btn btn-info">Seleccionar imagen</span>
                </label>
                <input type="file" id="avatar" name="imagen" style="display: none;">
              </div>
            </div>
          </form>
        </div>

        <form id="form_carnet">

          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre">
          </div>
          <div class="form-group">
            <label for="programa">Programa</label>
            <input type="text" class="form-control" name="programa" id="programa">
          </div>
          <div class="form-group">
            <label for="codigo">Código</label>
            <input type="text" class="form-control" name="codigo" id="codigo">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="guardar_registro">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal de recorte de imagen -->
<div id="subir_imagen" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h2>Recortar imagen</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-12" id="resetear">
            <div class="row">
              <div class="col-12">
                <span style="color: #727272;">
                  Cargando imagen...
                </span>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary disabled" id="guardar_imagen" data-dismiss="modal">Guardar Cambios</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>

    </div>
  </div>
</div>
@endsection

{{--
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| Inyecta scripts necesarios para usar plugins
| > Tablas
| > Checkboxes
| > Radios
| > Mapas
| > Notificaciones
| > Validaciones de Formularios por JS
| > Entre otros
| @push('functions')
|
| @endpush
--}}

@push('plugins')
<!-- Script para subir y cortar imagenes -->
<script src="{{ asset('js/croppie.min.js') }}"></script>
<script src="{{ asset('js/base64.js') }}"></script>
<script src="{{ asset('js/canvas2Image.js') }}"></script>
<script src="{{ asset('js/html2canvas.js') }}"></script>
<script src="{{ asset('js/vue.min.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endpush

{{--
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| Inyecta scripts para inicializar componentes Javascript como
| > Tablas
| > Checkboxes
| > Radios
| > Mapas
| > Notificaciones
| > Validaciones de Formularios por JS
| > Entre otros
| @push('functions')
|
| @endpush
--}}
@push('functions')
<script>

  $(document).ready(function(){

    jQuery.ajaxSetup({
      headers: {
        'x-csrf-token': '{{ csrf_token() }}'
      }
    });

    // Codigo de vue

    var app = new Vue({
      el: '#app',
      created: function(){
        this.traer();
      },
      data: {
        carnets: []
      },
      methods: {
        traer: function() {
          var $this = this;
          $.ajax({
            method: 'post',
            url: '/lista-carnets',
            success: function(res) {
              $this.carnets = res;
            }
          });
        },
        eliminar: function(index){
          var $this = this;

          swal({
            title: "¿Estás seguro?",
            text: 'Deseas eliminar este carnet: ' + this.carnets[index].codigo ,
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then(function(willDelete) {
            if (willDelete) {

              $.ajax({
                method: 'post',
                url: '/eliminar-carnet',
                data: {id: $this.carnets[index].id},
                success: function() {
                  $this.carnets.splice(index, 1);
                }
              });

            }
          }); // End mensaje seguro que deseas eliminar?

        }
      } // End methods
    }); // End vue


    $('#crearCarnet').click(function(){
      $('#crear_carnet').modal('toggle');
    });

    $('#avatar').change(function() {

      $('#resetear').html('<div class="row"><div class="col-12 col-md-4 offset-md-4 text-center"><span style="color: #727272;" id="mensaje">Preparando imagen por favor espere unos segundos...</span></div></div>');

      var formData = new FormData(document.getElementById("form_avatar"));

      $.ajax({
        method: 'POST',
        url: '/subir-imagen',
        data: formData ,
        dataType: "html",
        contentType: false,
        processData: false,
        beforeSend: function() {
          $('#subir_imagen').modal('toggle');
        },
        success: function(res) {
          $('#avatar').val('');
          $('#mensaje').hide();
          $('#resetear').html('<div id="myImg"></div><div id="ovalo_cutter"></div>');

          var el = document.getElementById('myImg');

          // Tamaño para los banners de retos y de imagenes
          vanilla = new Croppie(el, {
            viewport: { width: 300, height: 300, type: 'square'},
            boundary: { width: 600, height: 440},
            showZoomer: true,
            enableOrientation: true
          });

          vanilla.bind({
            url: res,
            orientation: 1
          });

          $('#guardar_imagen').removeClass('disabled');
        },
        error: function(error) {
          swal('Error', 'Por favor ingresa una imagen válida', 'warning');
          $('#subir_imagen').modal('hide');
        }
      });
    });

    $('#guardar_imagen').click(function() {

       vanilla.result('base64').then(function(blob) {
         $.ajax({
           url:"/recortar-imagen-perfil",
           // Enviar un parámetro post con el nombre base64 y con la imagen en el
           data:{
             base64: blob,
           },
           // Método POST
           type:"post",
           beforeSend: function(){
             $('#mesage_avatar').removeClass('hide');
             $('label[for="avatar"]').addClass('disabled');
             $('#avatar').attr('disabled', 'disabled');
           },
           success: function(res){
             $('#avatar_perfil').attr('src', res);
             $('#mesage_avatar').addClass('hide');
             $('label[for="avatar"]').removeClass('disabled');
             $('#avatar').removeAttr('disabled');
           }
         });
       });
     });


   $('#guardar_registro').click(function(){

     // Traer datos formulario
     var form = $('#form_carnet').serialize();
     form = form + '&imagen=' + $('#avatar_perfil').attr('src');

     $.ajax({
       method: 'post',
       url: '/guardar-carnet',
       data: form,
       success: function(res) {
         swal({
           title: 'Registrado',
           text: 'El carnet se ha registrado',
           icon: 'success',
           closeOnClickOutside: false,
           closeOnEsc: false
         }).then(function() {
           app.traer();
           $('#crear_carnet').modal('hide');
           $('#avatar_perfil').attr('src', '/images/default.gif');
           $('#nombre').val('');
           $('#programa').val('');
           $('#codigo').val('');
         });
       },
       error: function(er) {
         console.log(er);
         var er = er.responseJSON;

          if(er.errors.hasOwnProperty('nombre')){
            swal('Error', er.errors.nombre[0], 'error');
          }else if(er.errors.hasOwnProperty('programa')) {
            swal('Error', er.errors.programa[0], 'error');
          }else if(er.errors.hasOwnProperty('codigo')) {
            swal('Error', er.errors.codigo[0], 'error');
          }

       }
     });

   });





  });
</script>
@endpush
