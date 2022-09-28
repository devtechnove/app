@extends('layouts/admin')
@section('title', 'PASTORES')
@section('breadcrumb')
 <ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Registro de pastor</li>
 </ol>
@endsection

@section('content')
 @include('sweetalert::alert')
<div class="row mt-2">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                Registro de pastores
            </div>
            <form id="main-form" autocomplete="off">
              <input type="hidden" id="_url" value="{{ url('/registro/pastor') }}">
              <input type="hidden" id="_token" value="{{ csrf_token() }}">
              <div class="card-body">
                  <div class="row">
                      <div class="col-sm-4 mt-2">
                          <label for="">Nombres</label>
                          <input type="text" class="form-control" name="tx_nombres" placeholder="Ingrese el nombre" autofocus >
                      </div>
                      <div class="col-sm-4 mt-2">
                          <label for="">Apellidos</label>
                          <input type="text" class="form-control" name="tx_apellidos" placeholder= "Ingre los apellidos" >
                      </div>
                      <div class="col-sm-4 mt-2">
                          <label for="">Cédula</label>
                          <input type="number" name="nu_cedula" placeholder="Ingrese el número de cédula" class="form-control">
                      </div>
                       <div class="col-sm-4 mt-2">
                          <label for="">Teléfono</label>
                          <input type="number" name="nu_telefono" placeholder="Ingrese el número de teléfono" class="form-control">
                      </div>
                      <div class="col-sm-4 mt-2">
                          <label for="">Zona</label>
                          <input type="number" name="nu_zona" placeholder="Ingrese el número de zona" class="form-control">
                      </div>
                      <div class="col-sm-4 mt-2">
                          <label for="">Distrito</label>
                          <input type="number" name="distrito" placeholder="Ingrese el número de distrito" class="form-control">
                      </div>
                      <div class="col-sm-6 mt-2">
                      <label>Nacionalidad</label>
                        <div class="form-group">
                            {!! Form::select('nacionalidad_id', $nacionalidad, null,array('class' => 'form-control ','placeholder'=>'Nacionalidad','id'=>'nacionalidad_id')) !!}
                      </div>
                    </div>
                    <div class="col-sm-6 mt-2">
                      <label>Género</label>
                        <div class="form-group">
                         {!! Form::select('genero_id', $genero, null,array('class' => 'form-control input-sm ','placeholder'=>'Género','id'=>'genero_id')) !!}
                      </div>
                    </div>
                    <div class="col-sm-6 mt-2">
                      <label>Grado ministerial</label>
                        <div class="form-group">
                            {!! Form::select('grado_ministerial_id', $gradoMin, null,array('class' => 'form-control ','placeholder'=>'Grado ministerial','id'=>'grado_ministerial_id')) !!}
                      </div>
                    </div>
                    <div class="col-sm-6 mt-2">
                          <label for="">Fecha de nacimiento</label>
                          <input type="date" name="fe_nacimiento" placeholder="Ingrese el número de distrito" class="form-control">
                      </div>
                  </div>
              </div>
              <input type="hidden" name="status_id" value="1">
              <div class="card-footer">
                  <div class="col-sm-6">
                    <button class="btn btn-primary float-right mb-2">Guardar</button>
               </div>
              </div>
          </form>
        </div>
    </div>
</div>

@endsection
@section('scripts')
  <script src="{{ asset('/assets/js/admin/form/usuarios/create.js') }}"></script>
@endsection
