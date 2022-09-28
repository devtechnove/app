 @extends('layouts.admin')

@section('title', 'ASISTENCIA')
@section('page_title', 'ASISTENCIA')
@section('page_subtitle', 'Listado')

@section('breadcrumb')
 <ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/pastor') }}">Listado general de pastores</a></li>
    <li class="breadcrumb-item active">Nuevo registro.</li>
 </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
      <div class="card ">
        <div class="card-header ">
          <h3 class="card-title">Histórico de asistencia</h3>
         </div>

          <div class="card-body">
            <div class="table-responsive">
                      <table id="tableExport" class="table table-bordered table-hover table-sm">
               <thead>
                <tr class="text-center">
                    <th>#</th>
                    <th>Pastor</th>
                    <th>Actividad</th>
                    <th>Zona</th>
                    <th>Distrito</th>
                    <th>Grado Ministerial</th>
                    <th>Asistencia</th>
                    <th>Fecha</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($actividad as $value)
                <tr class="text-center">
                  <th>{{ $value->id }}</th>
                  <td>{{ $value->pastor->tx_nombres.' '.$value->pastor->tx_apellidos }}</td>
                  <td>{{ $value->actividad }}</td>
                  <td>{{ $value->pastor->nu_zona }}</td>
                  <td>{{ $value->pastor->distrito }}</td>
                  <td>{{ $value->pastor->empGradoMinisterial->nb_grado_ministerial }}</td>
                  <td>
                      @if ($value->asistencia == 1)
                          <span class="badge bg-success">PRESENTE</span>
                      @endif
                  </td>
                  <td>{{ $value->fecha }}</td>

                </tr>
                @endforeach
              </tbody>
              </table>
             </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
@section('scripts')
  <script src="{{ asset('assets/js/system.js') }}"></script>
@endsection




