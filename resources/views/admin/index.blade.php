@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$articulos}}</h3>

                <p>Artículos</p>
              </div>
              <div class="icon">
                <i class="ion ion-document-text"></i>
              </div>
              <a href="{{url('admin/articulos/index')}}" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$mensajes}}</h3>

                <p>Mensajes</p>
              </div>
              <div class="icon">
                <i class="ion ion-chatbubbles"></i>
              </div>
              <a href="{{url('admin/mensajes/index')}}" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$categorias}}</h3>

                <p>Categorias</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{url('admin/categorias/index')}}" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-5 connectedSortable">
            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Últimos mensajes
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                  @foreach($ultimos_mensajes as $mensaje)
                  <li>
                    <!-- drag handle -->
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <!-- todo text -->
                    <span class="text">{{$mensaje->nombre}}</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger">{{$mensaje->categoria->nombre}}</small>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-7 connectedSortable">
              <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Últimos artículos</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Artículo ID</th>
                      <th>Nombre</th>
                      <th>Categoría</th>
                      <th>Comentarios</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($ultimos_articulos as $articulo)
                    <tr>
                      <td><a href="pages/examples/invoice.html">{{$articulo->id}}</a></td>
                      <td>Artículo 1</td>
                      <td><span class="badge badge-success">{{$articulo->categoria->nombre}}</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">{{$articulo->total_comentarios}}</div>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop