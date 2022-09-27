@extends('layouts.admin')
@section('title','TIPO DE LOCAL')
@section('breadcrumb')
 <ol class="breadcrumb m-0">
    <li class="breadcrumb-item"><a href="/home">Inicio</a></li>
    <li class="breadcrumb-item active">Listado de tipos de locales</li>
</ol>
@endsection
@section('content')
<div class="row mt-2">
     <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3>Listado de tipos de locales</h3>
      </div>
       <!-- /.card-header -->
          <div class="card-body table-responsive">
             <br>
          <table id="tableExport" class="table table-hover table-bordered table-sm" >
              <thead>
              <tr class="text-center">
              <th>#</th>
               <th>Tipo de local</th>
               <th>Fecha de creación</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($tipol as $tipo)
              <tr class="row{{ $tipo->id }} text-center">
              <td>{{ $tipo->id }}</td>
              <td>{{ $tipo->nb_nombre }}</td>
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
