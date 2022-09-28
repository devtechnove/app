@extends('layouts/admin')
@section('title', 'PASTORES')
@section('breadcrumb')
 <ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Datos generales de pastores.</li>
 </ol>
@endsection

@section('content')
 @include('sweetalert::alert')
<div class="row mt-2">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                Registro de pastores

                 <a href="{{ route('pastor.create') }}" class="btn btn-primary float-end"><i class="mdi mdi-plus fa-1x"></i> Nuevo pastor</a>

            </div>
            <div class="card-body">

                 <div class="table-responsive">
                      <table id="tableExport" class="table table-bordered table-hover table-sm">
               <thead>
                <tr class="text-center">
                    <th>#</th>
                    <th>Nombres</th>
                    <th>Cédula</th>
                    <th>Zona - Distrito</th>
                    <th>Grado ministerial</th>
                    <th>Estado del pastor</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($pastores as $value)
                <tr class="text-center">
                  <td>{{ $value->id }}</td>
                  <td>{{ $value->tx_nombres}} {{ $value->tx_apellidos}}</td>
                  <td>{{ $value->nu_cedula}}</td>
                  <td>{{ $value->nu_zona}} - {{ $value->distrito}}</td>
                  <td>{{ $value->empGradoMinisterial->nb_grado_ministerial}}</td>
                  <td>
                    <span class="badge text-white fa-1x {{ $value->status ? 'green' : 'red' }}">{{ $value->display_status }}
                    </span>
                 </td>
                  <td>
                       <a class="btn btn-round red darken-4" href="{{ url('pastor', [$value->id,'edit']) }}"><i class="mdi mdi-tooltip-edit  text-white"></i></a>
                       <a class="btn btn-round green darken-4" href="{{ url('imprimir', [$value->id]) }}"><i class="mdi mdi-printer  text-white"></i> </a>
                       <a class="btn btn-round yellow darken-4" href="{{ url('pastor', [$value->id,'iglesia']) }}"><i class="mdi mdi-church text-white"></i> </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
              </table>
                 </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script src="{{ asset('assets/js/system.js') }}"></script>
@endsection
