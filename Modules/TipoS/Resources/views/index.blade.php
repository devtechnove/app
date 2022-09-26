@extends('layouts.admin')
@section('title','TIPO DE SANGRE')
@section('breadcrumb')
 <ol class="breadcrumb m-0">
    <li class="breadcrumb-item"><a href="/home">Inicio</a></li>
    <li class="breadcrumb-item active">Listado de tipos de sangre</li>
</ol>
@endsection
@section('content')
<div class="row mt-2">
     <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3>Listado de tipos de sangre</h3>
      </div>
       <!-- /.card-header -->
          <div class="card-body table-responsive">
             <br>
          <table id="tableExport" class="table table-hover table-bordered table-sm" >
              <thead>
              <tr class="text-center">
              <th>#</th>
               <th>Pais</th>
              <th>Fecha de registro</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($tipos as $tipo)
              <tr class="row{{ $tipo->id }} text-center">
              <td>{{ $tipo->id }}</td>
              <td>{{ $tipo->nb_tipo_sangre }}</td>
              <td>{{ $tipo->created_at }}</td>
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
