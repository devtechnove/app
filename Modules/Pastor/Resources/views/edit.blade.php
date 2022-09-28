 @extends('layouts.admin')

@section('title', 'PASTOR')
@section('page_title', 'PASTOR')
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

         {!!Form::model($pastor,['method'=>'PUT','route'=>['pastor.update',$pastor->id],'id'=>'pastor_form'])!!}
         <div class="card-body ">

                 @include('pastor::partials.form')
                 @include('pastor::partials.eclesiasticos')
                  <div class="mt-2">
                      @include('pastor::partials.medicos')
                  </div>
                <div class="mt-2">
                     @include('pastor::partials.estado')
                </div>

         </div>
         <div class="card-footer">
          <div class="col-sm-6">
               <button class="btn btn-primary float-right mb-2">Guardar</button>
          </div>
         {!! Form::close()!!}

        </div>
      </div>
    </div>
  </div>

@endsection
@section('scripts')
  <script src="{{ asset('/assets/js/admin/form/usuarios/edit.js') }}"></script>
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




