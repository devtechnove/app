@extends('layouts.admin')
@section('title','PAISES')
@section('breadcrumb')
 <ol class="breadcrumb m-0">
    <li class="breadcrumb-item"><a href="/home">Inicio</a></li>
    <li class="breadcrumb-item active">Listado de países</li>
</ol>
@endsection
@section('content')
<div class="row mt-2">
     <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3>Listado de países cargados al  sistema</h3>
      </div>
       <!-- /.card-header -->
          <div class="card-body table-responsive">
             <br>
          <table id="tableExport" class="table table-hover table-bordered table-sm" >
              <thead>
              <tr>
              <th>#</th>
               <th>Pais</th>
              <th>Fecha de registro</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($paises as $login)
              <tr class="row{{ $login->id }}">
              <td>{{ $login->id }}</td>
              <td>{{ $login->nb_pais }}</td>
              <td>{{ $login->created_at }}</td>
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
