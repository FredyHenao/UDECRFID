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
          Detalle usuario
        </h1>

      </div>
      <div class="portlet-body" style="margin-top: 2em;">
        <div class="row">
          <div class="col-12 text-center">
            @if(!empty($usuario->image))
             <img src="{{ $usuario->image->url }}" alt="" style="width: 350px; height: auto;">
            @else
              <img src="{{ asset('images/default.gif') }}" alt="" style="width: 150px; height: auto;">
            @endif
          </div>
        </div>
        <div class="row">

          <div class="col-12 col-md-6">
            <div class="form-group"><label for="nombre"></label><input type="text" disabled value="{{ $usuario->name . ' ' . $usuario->lastname }}" class="form-control" id="nombre"></div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-group"><label for="programa"></label><input type="text" disabled value="{{ $usuario->programa->PR_Nombre }}" class="form-control" id="programa"></div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-group"><label for="codigo_estu"></label><input type="text" disabled value="{{ $usuario->code }}" class="form-control" id="codigo_estu"></div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-group">
              <label for="codigo_tar"></label>
              @if(!empty($usuario->card_code))
                <label for="codigo_estu"></label><input type="text" value="{{ $usuario->card_code }}" class="form-control" id="codigo_estu" disabled >
              @else
                <select id="codigo_tar" class="form-control">
                  <option value="" selected></option>
                  @foreach($listens as $listen)
                    <option value="{{ $listen->PK_IdListen }}">{{ $listen->LI_Codigo }}</option>
                  @endforeach
                </select>
              @endif
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-group">
              @if(!empty($usuario->card_code))
                <a href="{{ route('GenerarCarnet', [ 'id' => $usuario->id ]) }}">
                  <button class="btn btn-primary">Generar carnet</button>
                </a>
              @else
                <button class="btn btn-primary" id="generar_carnet_btn">Generar carnet</button>
              @endif
            </div>
          </div>
        </div><!-- End row -->
      </div><!-- Card body -->
  </div>
</div>

@endsection
@section('modals')

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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
    $(document).ready(function() {
      jQuery.ajaxSetup({
        headers: {
          'x-csrf-token': '{{ csrf_token() }}'
        }
      });
    });

    $('#generar_carnet_btn').click(function() {
     var select = $('#codigo_tar').val();
     $.ajax({
       method: 'POST',
       url: '/guardar-y-generar-carnet',
       data: {
         select: select,
         usuario_id: {{ $usuario->id }}
       },
       success: function(res) {
        window.location.href = '/generar-carnet/' + {{ $usuario->id }}
       },
       error: function(res) {
         swal('Error', 'El código ya ha sido asignado o no es válido', 'warning');
       }
     });

    });
  </script>
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

@endpush
