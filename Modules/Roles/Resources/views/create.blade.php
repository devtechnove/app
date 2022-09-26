@extends('layouts.admin')
@section('title','ROLES')
@section('breadcrumb')
<ol class="breadcrumb m-0">
    <li class="breadcrumb-item"><a href="/home">Inicio</a></li>
    <li class="breadcrumb-item"><a href="/roles">Listado general</a></li>
    <li class="breadcrumb-item active">Nuevo registro</li>
</ol>
@endsection
@section('title', 'ROLES')
@section('content')
@include('sweetalert::alert')
<div>
 <div class="row  mt-2">
    <div class="col-sm-12">
                <form id="main-form" autocomplete="off"><br>
                  <input type="hidden" id="_url" value="{{ url('/roles') }}">
                  <input type="hidden" id="_token" value="{{ csrf_token() }}">

                    <div class="card">
                        <div class="card-header">
                            <h3>Nuevo role</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nombre del nuevo Role <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="name" required>
                            </div>


                            <hr>

                            <div class="form-group">
                                <label for="permissions">
                                    Permisos <span class="text-danger">*</span>
                                </label>
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="select-all">
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
                                                <div class="col-sm-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="acceso_usuarios" name="permissions[]"
                                                               value="acceso_usuarios" {{ old('acceso_usuarios') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="acceso_usuarios">Acceso</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Ver Usuario" name="permissions[]"
                                                               value="Ver Usuario" {{ old('Ver Usuario') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Ver Usuario">Ver</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Registrar Usuario" name="permissions[]"
                                                               value="Registrar Usuario" {{ old('Registrar Usuario') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Registrar Usuario">Registrar</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Editar Usuario" name="permissions[]"
                                                               value="Editar Usuario" {{ old('Editar Usuario') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Editar Usuario">Editar</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Eliminar Usuario" name="permissions[]"
                                                               value="Eliminar Usuario" {{ old('Eliminar Usuario') ? 'checked' : '' }}>
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
                                                <div class="col-sm-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="acceso_role" name="permissions[]"
                                                               value="acceso_role" {{ old('acceso_role') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="acceso_role">Acceso</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Ver Role" name="permissions[]"
                                                               value="Ver Role" {{ old('Ver Role') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Ver Role">Ver </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Registrar Role" name="permissions[]"
                                                               value="Registrar Role" {{ old('Registrar Role') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Registrar Role">Registrar </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Editar Role" name="permissions[]"
                                                               value="Editar Role" {{ old('Editar Role') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Editar Role">Editar </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Eliminar Role" name="permissions[]"
                                                               value="Eliminar Role" {{ old('Eliminar Role') ? 'checked' : '' }}>
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
                                                <div class="col-sm-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="acceso_permisos" name="permissions[]"
                                                               value="acceso_permisos" {{ old('acceso_permisos') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="acceso_permisos">Acceso</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Ver Permisos" name="permissions[]"
                                                               value="Ver Permisos" {{ old('Ver Permisos') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Ver Permisos">Ver </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Registrar Permisos" name="permissions[]"
                                                               value="Registrar Permisos" {{ old('Registrar Permisos') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Registrar Permisos">Registrar </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Editar Permisos" name="permissions[]"
                                                               value="Editar Permisos" {{ old('Editar Permisos') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Editar Permisos">Editar </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Eliminar Permisos" name="permissions[]"
                                                               value="Eliminar Permisos" {{ old('Eliminar Permisos') ? 'checked' : '' }}>
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
                                                <div class="col-sm-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="acceso_permisos" name="permissions[]"
                                                               value="acceso_empresa" {{ old('acceso_permisos') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="acceso_permisos">Acceso</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Ver Empresa" name="permissions[]"
                                                               value="Ver Empresa" {{ old('Ver Empresa') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Ver Empresa">Ver </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Registrar Empresa" name="permissions[]"
                                                               value="Registrar Empresa" {{ old('Registrar Empresa') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Registrar Empresa">Registrar </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Editar Empresa" name="permissions[]"
                                                               value="Editar Empresa" {{ old('Editar Empresa') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Editar Empresa">Editar </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Eliminar Empresa" name="permissions[]"
                                                               value="Eliminar Empresa" {{ old('Eliminar Empresa') ? 'checked' : '' }}>
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
                                                <div class="col-sm-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="acceso_logins" name="permissions[]"
                                                               value="acceso_logins" {{ old('acceso_logins') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="acceso_logins">Acceso</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-check form-switch form-switch-sm mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="Ver Logins" name="permissions[]"
                                                               value="Ver Logins" {{ old('Ver Logins') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="Ver Logins">Ver</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="card-footer">
                              <button type="submit" class="btn btn-primary float-left">Guardar datos <i class="bi bi-check"></i>
                        </button>

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
    <script src="{{ asset('/assets/js/admin/form/usuarios/create.js') }}"></script>
@endsection
