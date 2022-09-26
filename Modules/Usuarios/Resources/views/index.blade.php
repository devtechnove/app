@extends('layouts/admin')
@section('title', 'USUARIOS')
@section('breadcrumb')
 <ol class="breadcrumb m-0">
    <li class="breadcrumb-item"><a href="/home">Inicio</a></li>
    <li class="breadcrumb-item"><a href="/usuarios">Usuarios</a></li>
    <li class="breadcrumb-item active">Listado general</li>
</ol>
@endsection
@section('breadcrumb')

   <div class="container-fluid">
        <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
        <li class="breadcrumb-item active">Datos principales de los usuarios.</li>
    </ol>
   </div>
@endsection
@section('content')
 @include('sweetalert::alert')
 <div class="row mt-2">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                Datos de los usuarios
                  <a href="{{ route('usuarios.create') }}" class="btn btn-primary float-end"><i class="mdi mdi-plus fa-1x"></i> Nuevo usuario</a>
            </div>

            <div class="card-body">
                 <div class="table-responsive">
                     <table  class="table table-hover table-bordered table-sm  " id="tableExport">
                    <thead>
                      <tr class="text-center">
                      
                      <th>Nombre completo</th>
                      <th>Correo electrónico</th>
                      <th>Estado del usuario</th>
                      <th>Role</th>
                      <th>Cédula</th>
                      <th>Opciones</th>
                      </tr>
                    </thead>
                        <tbody>
                          @foreach ($usuarios as $element)

                            <tr class="text-center">
                             
                             <td>{{ $element->name }}</td>
                             <td>{{ $element->email }}</td>
                             <td>
                                 @if ($element->status == 1)
                                    <span class="badge bg-primary">ACTIVO</span>
                                 @else
                                    <span class="badge bg-danger">INACTIVO</span>
                                 @endif
                             </td>
                             <td>
                                 {{ $element->role->name }}
                             </td>
                              <td>
                                {{ $element->cedula }}
                             </td>

                            <td>
                               <div class="btn-group">
                                       <a href="{{ route('usuarios.edit', $element->id) }}" class="btn btn-sm btn-primary ">
                                        <i class="mdi mdi-pencil"></i>
                                            Modificar
                                        </a>
                                        <button id="delete" class="btn btn-sm btn-danger " onclick="
                                            event.preventDefault();
                                            if (confirm('¿Estás seguro (a)? Se eliminará permanentemente!')) {
                                            document.getElementById('destroy{{ $element->id }}').submit();
                                            }
                                            ">
                                            <i class="mdi mdi-delete"></i>
                                            Borrar
                                            <form id="destroy{{ $element->id }}" class="d-none" action="{{ route('usuarios.destroy', $element->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </button>
                                       </div>

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

