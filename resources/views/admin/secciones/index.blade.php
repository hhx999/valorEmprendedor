@extends('adminlte::page')

@section('title', 'Artículos')

@section('content_header')
    <h1>Secciones</h1>
@stop

@section('content')

<div class="row mb-2">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Secciones</h3>

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
                      <th>Posición</th>
                      <th>Título</th>
                      <th>Artículo</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($secciones as $seccion)
                      <tr>
                        <td>{{$seccion->id}}</td>
                        <td>{{$seccion->posicion}}</td>
                        <td>{{$seccion->titulo}}</td>
                        <td>{{$seccion->articulo->titulo}}</td>
                        <td><a href="{{route('editarSeccion',$seccion->id)}}"><i class="nav-icon fas fa-edit"></a></i>
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