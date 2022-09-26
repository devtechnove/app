@extends('layouts/admin')
@section('title', 'ORGANIZACION')
@section('breadcrumb')
 <ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Datos principales de la organización.</li>
 </ol>
@endsection

@section('content')
 @include('sweetalert::alert')
<div class="row mt-2">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                Datos de la organización
                @can('Registrar Empresas')
                 <a href="{{ route('empresa.create') }}" class="btn btn-primary float-end"><i class="mdi mdi-plus fa-1x"></i> Nueva organi</a>
                 @endcan
            </div>
            <div class="card-body">

                 <div class="table-responsive">
                     <table  class="table table-hover table-bordered table-sm  " id="tableExport">
                    <thead>
                      <tr class="text-center">

                      <th>Logo</th>
                      <th>Razón social</th>
                      <th>Documento</th>
                      <th>Teléfono</th>
                      <th>Estado de la empresa</th>

                      <th>Opciones</th>
                      </tr>
                    </thead>
                        <tbody>
                          @foreach ($empresa as $element)

                            <tr class="text-center">

                             <td> <img src="{{ asset('images/logo/'.$element->logo_empresa) }}" alt="" height="40"></td>
                             <td>{{ $element->razon_social }}</td>
                             <td>{{ $element->documento }}</td>
                             <td>{{ $element->telefono }}</td>
                             <td>
                                @if ($element->is_active == 1)
                                  <span class="badge bg-primary" >ACTIVO</span>
                                  @else
                                  <span class="badge bg-danger" >INACTIVO</span>
                                 @endif
                            </td>

                            <td>
                                @can('Editar Empresa')
                                <a href="{{ route('empresa.edit',$element->id) }}" class="btn btn-primary round btn-sm"><i class="far fa-edit"></i> Editar</a>
                                @endcan
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
