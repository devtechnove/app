 @extends('layouts.admin')

@section('title', 'Pastores')
@section('page_title', 'Pastores')
@section('page_subtitle', 'Listado')

@section('breadcrumb')
 <ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/pastor') }}">Listado general</a></li>
    <li class="breadcrumb-item active">Nuevo registro.</li>
 </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
      <div class="card ">
        <div class="card-header ">
          <h3 class="card-title">Nuevo registro de pastor</h3>
         </div>
        <form id="main-form" autocomplete="off">
              <input type="hidden" id="_url" value="{{ url('/pastor') }}">
              <input type="hidden" id="_token" value="{{ csrf_token() }}">

         <div class="card-body ">

                 @include('pastor::partials.form')
                 @include('pastor::partials.eclesiasticos')
                 @include('pastor::partials.medicos')
                 @include('pastor::partials.estado')

         </div>
         <div class="card-footer">
          <div class="col-sm-6">
               <button class="btn btn-primary float-right mb-2">Guardar</button>
          </div>
        </form>

        </div>
      </div>
    </div>
  </div>

@endsection
@section('scripts')
  <script src="{{ asset('/assets/js/admin/form/usuarios/create.js') }}"></script>
  <script type="text/javascript">

jQuery(document).ready(function() {

     form = $('#pastor_form');

    $('#nb_ins_teologico').unbind('change');//borro evento click
    $('#nb_ins_teologico').on("change", function(e) { //asigno el evento change u otro
    if ( $("#nb_ins_teologico").val() == 'No')
                    {


                        $('#nb_desc_ins_teologico').val('N/A');


                        $('#nu_tiempo_ins').val('N/A');


                        $('#nb_titulo_obtenido').val('N/A');


                    }
                else
                {

                        $('#nb_desc_ins_teologico').val('');


                        $('#nu_tiempo_ins').val('');


                        $('#nb_titulo_obtenido').val('');
                }





    });

    $('#nb_sufre_enfermedad').unbind('change');//borro evento click
    $('#nb_sufre_enfermedad').on("change", function(e) { //asigno el evento change u otro
    if ( $("#nb_sufre_enfermedad").val() == 'No')
                    {


                        $('#nb_descripcion_enfermedad').val('N/A');


                    }
                    else
                    {

                        $('#nb_descripcion_enfermedad').val('');

                    }




    });

});


    </script>
@endsection




