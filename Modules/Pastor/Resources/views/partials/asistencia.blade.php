 @extends('layouts.admin')

@section('title', 'ASISTENCIA')
@section('page_title', 'ASISTENCIA')
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
          <h3 class="card-title">Nuevo registro de asistencia</h3>
         </div>
        <form id="main-form" autocomplete="off">
              <input type="hidden" id="_url" value="{{ url('/actividad/asistencia') }}">
              <input type="hidden" id="_token" value="{{ csrf_token() }}">

                <div class="card-body ">

                   <div class="row">
                     <div class="col-sm-6 mt-2">
                        <label for="">Pastor(a)</label>
                        <input type="text" value="{{ $pastor->tx_nombres .' '.$pastor->tx_apellidos }}" class="form-control" disabled >
                        <input type="hidden" name ="pastor_id"  value="{{ $pastor->id }}" >
                  </div>
                  <div class="col-sm-6 mt-2">
                    <label for="">Actividad</label>
                    <select name="actividad" id="" class="form-control">
                        <option value="Convencion de nacional">Convención nacional</option>
                    </select>
                </div>
               </div>
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
  <script src="{{ asset('/assets/js/admin/form/asistencia/create.js') }}"></script>
@endsection




