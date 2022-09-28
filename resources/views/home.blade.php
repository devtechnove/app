@extends('layouts.admin')
@section('title','INICIO')
@section('content')
<div>
    @if(\Auth::user()->hasRole('Administrador'))
    <div class="col-sm-12 mt-2">
        <div class="card mt-2">
            <div class="card-header">
               <h4>Consultar al paciente</h4>
            </div>
             <form id="main-form" autocomplete="off">
                <input type="hidden" id="_url" value="{{ route('pastor.buscar') }}">
                <input type="hidden" id="_token" value="{{ csrf_token() }}">
                <div class="card-body">
                  <h4><p class="text-center"><b>Bienvenidos a la búsqueda rápida</b></p></h4>
                   <center><label for="cedula">Ingrese la cédula del pastor</label></center>
                    <div class="row">
                     <div class="mx-auto" style="width: 200px;">
                        <div class="col-sm-12">
                            <input id="nu_cedula" type="number" class="form-control @error('nu_cedula') is-invalid @enderror" name="nu_cedula" value="{{ old('nu_cedula') }}" required autofocus>
                                @error('nu_cedula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           <div class="col-sm-12 mt-2">
                              <button type="submit" class="btn btn-primary form-control" id="boton">
                                <i class="fas fa-user-tie text-white" id="ajax-icon"></i> <span class="text-white ">{{ __('Buscar empleado') }}</span>
                            </button>
                         </div>
                      </div>

                    </div>
                 </div>
             </form>
         </div>
     </div>
   @else
   @endif
</div>
@endsection
@section('scripts')
<script>

$(document).ready(function(){

  $('#main-form').submit(function(){

        $('.missing_alert').css('display', 'none');

        var data = $('#main-form').serialize();

        $('#main-form input, #main-form button').attr('disabled','true');
        $('#ajax-icon').removeClass('fas fa-user-tie').addClass('spinner-border spinner-border-sm');


            $.ajax({
              url: $('#main-form #_url').val(),
              headers: {'X-CSRF-TOKEN': $('#main-form #_token').val()},
              type: 'POST',
              cache: false,
              data: data,
              success: function (response) {
                var json = $.parseJSON(response);

                 if(json.success){
                   $('#ajax-icon').removeClass('fas fa-user-tie').addClass('spinner-border spinner-border-sm');
                   {
                    if ( json.success) {

                        Toastify(
                    {
                        text: 'Datos verificados satisfactoriamente.',
                        duration: 3000,
                        close: true,
                        gravity: "top", // `top` or `bottom`
                        position: "right", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        style:
                        {
                           background: "#12DB03",
                        },
                    }
                    ).showToast();

                      window.location.href = '/actividad/'+json.pastorid+'/asistencia';

                    }

                  }
                  $('#main-form input, #main-form button').removeAttr('disabled');
                  $('#ajax-icon').removeClass('spinner-border spinner-border-sm').addClass('fas fa-user-tie');
                  $('#nu_cedula').val('')
                  }
                  else
                  {
            Toastify(
                    {
                        text: '¡Lo siento! No se han encontrado datos',
                        duration: 3000,
                        close: true,
                        gravity: "top", // `top` or `bottom`
                        position: "right", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        style:
                        {
                           background: "#EA0000",
                        },
                    }
                    ).showToast();
                    window.location.href = '/registro/pastor';
                  $('#main-form input, #main-form button').removeAttr('disabled');
                  $('#ajax-icon').removeClass('spinner-border spinner-border-sm').addClass('fas fa-user-tie');
                  }
              },error: function (data) {
                var errors = data.responseJSON;
                $.each( errors.errors, function( key, value ) {
                  toastr.error(value);

                });

                $('#main-form input, #main-form button').removeAttr('disabled');
                $('#ajax-icon').removeClass('spinner-border spinner-border-sm').addClass('fas fa-user-tie');
            }
           });


       return false;

    });
});
</script>
@endsection
