@extends('adminlte::page')

@section('title', 'Mensajes')

@section('content_header')
    <h1>Mensajes</h1>
@stop

@section('content')
<!-- Modal -->
<div id="mensajeEliminar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
<form method="post" name="eliminarMensaje" action="{{route('eliminarMensaje')}}">
    <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Eliminar mensaje</h4>
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
          <button type="submit" class="btn btn-danger">Eliminar mensaje</button>
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
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Mensaje</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($mensajes as $mensaje)
                      <tr>
                        <td>{{$mensaje->id}}</td>
                        <td>{{$mensaje->nombre}}</td>
                        <td>{{$mensaje->email}}</td>
                        <td>{{$mensaje->contenido}}</td>
                        <td><a class="mensajeEliminar" data-toggle="modal" data-target="#mensajeEliminar"><i class="nav-icon fas fa-trash"></i></a>
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
      $('.mensajeEliminar').on('click', function() {
          var id = $(this).parents("tr").find("td").eq(0).text();
          $('#idEliminar').val(undefined);
          $('#idEliminar').val(id);
          $('#mensajeModalEliminar').text('Desea eliminar el mensaje con id '+id+'?');
      })
    </script>
@stop