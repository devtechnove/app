@extends('layouts.admin')
@section('title','PAISES')
@section('breadcrumb')
 <ol class="breadcrumb m-0">
    <li class="breadcrumb-item"><a href="/home">Inicio</a></li>
    <li class="breadcrumb-item active">Listado de géneros</li>
</ol>
@endsection
@section('content')
<div class="row mt-2">
     <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3>Listado de género</h3>
      </div>
       <!-- /.card-header -->
          <div class="card-body table-responsive">
             <br>
          <table id="tableExport" class="table table-hover table-bordered table-sm" >
              <thead>
              <tr class="text-center">
              <th>#</th>
               <th>Géneros</th>
               <th>Ícono</th>
              <th>Fecha de registro</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($generos as $genero)
              <tr class="row{{ $genero->id }} text-center">
              <td>{{ $genero->id }}</td>
              <td>{{ $genero->nb_genero }}</td>
              <td>
                  @if ($genero->nb_genero == 'Masculino')
                      <span><i class="mdi mdi-human-male blue-text" style="font-size:200%"></i></span>
                  @else
                      <span><i class="mdi mdi-human-female pink-text" style="font-size:200%"></i></span>
                  @endif
              </td>
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
