@extends('layouts.admin')
@section('title','GRADO DE INSTRUCCION')
@section('breadcrumb')
 <ol class="breadcrumb m-0">
    <li class="breadcrumb-item"><a href="/home">Inicio</a></li>
    <li class="breadcrumb-item active">Listado de grado de instrucción</li>
</ol>
@endsection
@section('content')
<div class="row mt-2">
     <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3>Listado de grado de instrucción</h3>
      </div>
       <!-- /.card-header -->
          <div class="card-body table-responsive">
             <br>
          <table id="tableExport" class="table table-hover table-bordered table-sm" >
              <thead>
              <tr class="text-center">
              <th>#</th>
               <th>Grado de instrucción</th>
              <th>Fecha de registro</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($gradoi as $genero)
              <tr class="row{{ $genero->id }} text-center">
              <td>{{ $genero->id }}</td>
              <td>{{ $genero->nb_grado_instruccion }}</td>

              <td>{{ $genero->created_at }}</td>
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
      </div>
  </div>
</div>
@endsection

@section('scripts')
   <script src="{{ asset('assets/js/system.js') }}"></script>
@endsection
