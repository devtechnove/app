@extends('layouts.admin')
@section('title','NACIONALIDAD')
@section('breadcrumb')
 <ol class="breadcrumb m-0">
    <li class="breadcrumb-item"><a href="/home">Inicio</a></li>
    <li class="breadcrumb-item active">Listado de nacionalidad</li>
</ol>
@endsection
@section('content')
<div class="row mt-2">
     <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3>Listado de Nacionalidad</h3>
      </div>
       <!-- /.card-header -->
          <div class="card-body table-responsive">
             <br>
          <table id="tableExport" class="table table-hover table-bordered table-sm" >
              <thead>
              <tr class="text-center">
              <th>#</th>
               <th>Nacionalidad</th>
              <th>Fecha de registro</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($nacionalidad as $login)
              <tr class="row{{ $login->id }} text-center">
              <td>{{ $login->id }}</td>
              <td>{{ $login->nb_nacionalidad }}</td>
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
