@extends('layouts.admin')

@section('title', 'ROLES')

@section('styles')
 <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset('/assets/libs/animate.css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/css/config-page.css') }}">
@endsection
@section('content')
@include('sweetalert::alert')
  <div class="mt-2">
      <div class="row">
    <div class="col-sm-12">
        <div class="card">
                <form action="{{ route('roles.update', $role->id) }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="form-group">



                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nombre del nuevo Role <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" value="{{ $role->name }}" name="name" required>
                            </div>


                            <hr>
                            <div class="form-group">
                                <label for="permissions">
                                    Permisos <span class="text-danger">*</span>
                                </label>
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="select-all">
                                    <label class="custom-control-label" for="select-all">Asignar todos los permisos</label>
                                </div>
                            </div>
                            <div class="row">
                                 <!-- Usuarios Permission -->
                                <div class="mt-2 col-lg-4 col-md-6">
                                    <div class="card h-100 border-0 shadow">
                                        <div class="card-header">
                                            Usuarios
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="acceso_usuarios" name="permissions[]"
                                                               value="acceso_usuarios" {{ $role->hasPermissionTo('acceso_usuarios') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="acceso_usuarios">Acceso</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Ver Usuario" name="permissions[]"
                                                               value="Ver Usuario" {{  $role->hasPermissionTo('Ver Usuario') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Ver Usuario">Ver</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Registrar Usuario" name="permissions[]"
                                                               value="Registrar Usuario" {{  $role->hasPermissionTo('Registrar Usuario') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Registrar Usuario">Registrar</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Editar Usuario" name="permissions[]"
                                                               value="Editar Usuario" {{  $role->hasPermissionTo('Editar Usuario') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Editar Usuario">Editar</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Eliminar Usuario" name="permissions[]"
                                                               value="Eliminar Usuario" {{  $role->hasPermissionTo('Eliminar Usuario') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Eliminar Usuario">Eliminar</label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                  <!-- Roles Permission -->
                                <div class="mt-2 col-lg-4 col-md-6">
                                    <div class="card h-100 border-0 shadow">
                                        <div class="card-header">
                                            Roles
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="acceso_role" name="permissions[]"
                                                               value="acceso_role" {{  $role->hasPermissionTo('acceso_role') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="acceso_role">Acceso</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Ver Role" name="permissions[]"
                                                               value="Ver Role" {{  $role->hasPermissionTo('Ver Role') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Ver Role">Ver </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Registrar Role" name="permissions[]"
                                                               value="Registrar Role" {{  $role->hasPermissionTo('Registrar Role') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Registrar Role">Registrar </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Editar Role" name="permissions[]"
                                                               value="Editar Role" {{  $role->hasPermissionTo('Editar Role') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Editar Role">Editar </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Eliminar Role" name="permissions[]"
                                                               value="Eliminar Role" {{  $role->hasPermissionTo('Eliminar Role') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Eliminar Role">Eliminar </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <!-- Permisos Permission -->
                                <div class="mt-2 col-lg-4 col-md-6">
                                    <div class="card h-100 border-0 shadow">
                                        <div class="card-header">
                                            Permisos
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="acceso_permisos" name="permissions[]"
                                                               value="acceso_permisos" {{  $role->hasPermissionTo('acceso_permisos') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="acceso_permisos">Acceso</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Ver Permisos" name="permissions[]"
                                                               value="Ver Permisos" {{  $role->hasPermissionTo('Ver Permisos') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Ver Permisos">Ver </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Registrar Permisos" name="permissions[]"
                                                               value="Registrar Permisos" {{  $role->hasPermissionTo('Registrar Permisos') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Registrar Permisos">Registrar </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Editar Permisos" name="permissions[]"
                                                               value="Editar Permisos" {{  $role->hasPermissionTo('Editar Permisos') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Editar Permisos">Editar </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Eliminar Permisos" name="permissions[]"
                                                               value="Eliminar Permisos" {{  $role->hasPermissionTo('Eliminar Permisos') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Eliminar Permisos">Eliminar </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  <!-- Permisos Permission -->
                                <div class="mt-2 col-lg-4 col-md-6">
                                    <div class="card h-100 border-0 shadow">
                                        <div class="card-header">
                                            Ente
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="acceso_empresa" name="permissions[]"
                                                               value="acceso_empresa" {{  $role->hasPermissionTo('acceso_empresa') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="acceso_empresa">Acceso</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Ver Empresa" name="permissions[]"
                                                               value="Ver Empresa" {{  $role->hasPermissionTo('Ver Empresa') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Ver Empresa">Ver </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Registrar Empresa" name="permissions[]"
                                                               value="Registrar Empresa" {{  $role->hasPermissionTo('Registrar Empresa') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Registrar Empresa">Registrar </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Editar Empresa" name="permissions[]"
                                                               value="Editar Empresa" {{  $role->hasPermissionTo('Editar Empresa') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Editar Empresa">Editar </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Eliminar Empresa" name="permissions[]"
                                                               value="Eliminar Empresa" {{  $role->hasPermissionTo('Eliminar Empresa') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Eliminar Empresa">Eliminar </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <!-- Permisos Permission -->
                                <div class="mt-2 col-lg-4 col-md-6">
                                    <div class="card h-100 border-0 shadow">
                                        <div class="card-header">
                                            Historial de sesión
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="acceso_logins" name="permissions[]"
                                                               value="acceso_logins" {{  $role->hasPermissionTo('acceso_logins') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="acceso_logins">Acceso</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Ver Logins" name="permissions[]"
                                                               value="Ver Logins" {{  $role->hasPermissionTo('Ver Logins') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Ver Logins">Ver</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  <!-- Especialidades Permission -->


                            </div>
                        </div>
                        <div class="card-footer">
                              <button type="submit" class="btn btn-primary float-left">Guardar datos <i class="bi bi-check"></i>
                        </button>

                        </div>
                    </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>


        $(document).ready(function() {
            $('#select-all').click(function() {
                var checked = this.checked;
                $('input[type="checkbox"]').each(function() {
                    this.checked = checked;
                });
            })
        });
    </script>
    <script src="assets/js/pages/form-advanced.init.js"></script>
@endsection
