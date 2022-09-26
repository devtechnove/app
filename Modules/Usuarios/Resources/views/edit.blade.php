@extends('layouts/admin')
@section('title', 'USUARIOS')
@section('breadcrumb')
<ol class="breadcrumb m-0">
    <li class="breadcrumb-item"><a href="/home">Inicio</a></li>
    <li class="breadcrumb-item"><a href="/usuarios">Listado general</a></li>
    <li class="breadcrumb-item active">Nuevo registro</li>
</ol>
@endsection
@section('content')
<div class="row mt-2">
    <div class="col-sm-12">
        <div class="card">
              <form id="main-form" autocomplete="off"><br>
                  <input type="hidden" id="_url" value="{{ route('usuarios.update',$usuarios->id) }}">
                  <input type="hidden" id="_token" value="{{ csrf_token() }}">
               <div class="card-body">
               <div class="row">
                   <div class="col-sm-6 mt-2">
                        <div class="form-group">
                            <label for="register-email" class="form-label">Nombre completo</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="register-name" name="name" placeholder="Nombre del usuario" aria-describedby="register-name" tabindex="2" value="{{ $usuarios->name }}" />
                            @error('name')
                              <span class="invalid-feedback" role="alert">
                                <small>{{ $message }}</small>
                              </span>
                            @enderror
                         </div>
                    </div>
                    <div class="col-sm-6 mt-2">
                        <div class="form-group">
                            <label for="register-username" class="form-label">Usuario</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" id="register-username" name="username" placeholder="Distrito del usuario" aria-describedby="register-username" tabindex="2" value="{{ $usuarios->username }}" />
                            @error('username')
                              <span class="invalid-feedback" role="alert">
                                <small>{{ $message }}</small>
                              </span>
                            @enderror
                         </div>
                    </div>
                     <div class="col-sm-6 mt-2">
                        <div class="form-group">
                            <label for="register-zona" class="form-label">Zona</label>
                            <input type="number" class="form-control @error('zona') is-invalid @enderror" id="register-zona" name="zona" placeholder="Zona del usuario" aria-describedby="register-zona" tabindex="2" value="{{ $usuarios->zona }}" />
                            @error('zona')
                              <span class="invalid-feedback" role="alert">
                                <small>{{ $message }}</small>
                              </span>
                            @enderror
                         </div>
                    </div>
                    <div class="col-sm-6 mt-2">
                        <div class="form-group">
                            <label for="register-distrito" class="form-label">Distrito</label>
                            <input type="number" class="form-control @error('distrito') is-invalid @enderror" id="register-distrito" name="distrito" placeholder="Distrito del usuario" aria-describedby="register-distrito" tabindex="2" value="{{ $usuarios->distrito }}" />
                            @error('distrito')
                              <span class="invalid-feedback" role="alert">
                                <small>{{ $message }}</small>
                              </span>
                            @enderror
                         </div>
                    </div>

                          <div class="col-sm-4 mt-2">
                            <div class="form-group">
                                <label for="register-email" class="form-label">Corre electrónico</label>
                                <input type="email" class="form-control @error('name') is-invalid @enderror" id="register-email" name="email" placeholder="Corre electrónico del usuario" aria-describedby="register-email" tabindex="2" value="{{ $usuarios->email }}" />
                                @error('email')
                                  <span class="invalid-feedback" role="alert">
                                    <small>{{ $message }}</small>
                                  </span>
                                @enderror
                             </div>
                         </div>
                         <div class="col-sm-4 mt-2">
                            <label for="nu_contacto">Empresa</label>
                          {!! Form::select('empresa_id', $empresas, null, [
                             'class' => 'form-control', 'id' =>'register-empresa']) !!}
                         </div>
                          <div class="col-sm-4 mt-2">
                            <label for="nu_contacto">Estado del usuario</label>

                              <select name="status" id="" class="form-control">
                                <option value="1"  {{ ( $usuarios->status == 1) ? 'selected' : '' }}>Activo</option>
                                <option value="2"  {{ ( $usuarios->status == 2) ? 'selected' : '' }}>Inactivo</option>
                            </select>
                          </div>
                        <div class="col-sm-4 mt-2">
                            <label for="nu_contacto">Role del usuario</label>
                            <select name="role_id" id="" class="form-control">
                                @foreach ($roles as $element)
                                   <option value="{{ $element->id }}"  {{ ( $element->id == $usuarios->role_id) ? 'selected' : '' }}>{{ $element->name }}</option>
                                @endforeach
                            </select>
                       </div>
                        <div class="col-sm-4 mt-2">
                            <div class="form-group">
                                <label for="register-password" class="form-label">Contraseña</label>

                                <div class="input-group input-group-merge form-password-toggle @error('password') is-invalid @enderror">
                                  <input type="password" class="form-control form-control-merge @error('password') is-invalid @enderror" id="register-password" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="register-password" tabindex="3" />

                                </div>
                                @error('password')
                                  <span class="invalid-feedback" role="alert">
                                    <small>{{ $message }}</small>
                                  </span>
                                @enderror
                              </div>
                       </div>
                       <div class="col-sm-4 mt-2">
                            <div class="form-group">
                            <label for="register-password-confirm" class="form-label">Confirmación de contraseña</label>
                            <div class="input-group input-group-merge form-password-toggle">
                              <input type="password" class="form-control form-control-merge" id="register-password-confirm" name="password_confirmation" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="register-password" tabindex="3" />

                            </div>
                          </div>
                       </div>
                    </div>
               </div>
              <div class="card-footer">
                <button class="btn btn-primary float-right mb-2">Guardar</button>
            </div>
              </div>
              {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection
@section('scripts')
  <script src="{{ asset('/assets/js/admin/form/usuarios/edit.js') }}"></script>
@endsection
