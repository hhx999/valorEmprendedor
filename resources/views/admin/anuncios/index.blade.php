@extends('adminlte::page')

@section('title', 'Anuncios')

@section('content_header')
    <h1>Anuncios</h1>
@stop

@section('content')
<!-- Modal -->
<div id="anuncioEliminar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
<form method="post" name="eliminaranuncio" action="{{route('eliminarAnuncio')}}">
    <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Eliminar anuncio</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          @csrf
                   <div class="card-body">
                    <input type="hidden" name="idEliminar" id="idEliminar">
                     <p id="mensajeModalEliminar"></p>
                  </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Eliminar anuncio</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
</form>
</div>
</div>
<!-- End Modal -->
@if (\Session::has('success'))
  <div class="col-md-12">
       <p> {!! \Session::get('success') !!}</p>
  </div>
  @endif
<div class="row mb-2">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Registros</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Descripción</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($anuncios as $anuncio)
                      <tr>
                        <td>{{$anuncio->id}}</td>
                        <td>{{$anuncio->nombre}}</td>
                        <td>{{$anuncio->descripcion}}</td>
                        <td><a href="{{route('editaranuncio',$anuncio->id)}}"><i class="nav-icon fas fa-edit"></a></i><a class="anuncioEliminar" data-toggle="modal" data-target="#anuncioEliminar"><i class="nav-icon fas fa-trash"></i></a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
      </div><!-- /.container-fluid -->

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 
      $('.anuncioEliminar').on('click', function() {
          var id = $(this).parents("tr").find("td").eq(0).text();
          $('#idEliminar').val(undefined);
          $('#idEliminar').val(id);
          $('#mensajeModalEliminar').text('Desea eliminar la anuncio con id '+id+'?');
      })
    </script>
@stop