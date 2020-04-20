@extends('adminlte::page')

@section('title', 'Artículos')

@section('content_header')
    <h1>Artículos</h1>
@stop

@section('content')

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
                      <th>Usuario</th>
                      <th>Fecha</th>
                      <th>Título</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($articulos as $articulo)
                      <tr>
                        <td>{{$articulo->id}}</td>
                        <td>{{$articulo->verUsuario}}</td>
                        <td>{{$articulo->created_at}}</td>
                        <td>{{$articulo->titulo}}</td>
                        <td><a href="{{route('editarArticulo',$articulo->id)}}"><i class="nav-icon fas fa-edit"></a></i><a class="articuloEliminar" data-toggle="modal" data-target="#articuloEliminar"><i class="nav-icon fas fa-trash"></i></a>
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
    <script> console.log('Hi!'); </script>
@stop