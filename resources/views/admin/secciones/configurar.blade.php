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
              <form action="{{route('configurarSecciones')}}" method="post" name="configurar">
              	@csrf
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Posición</th>
                      <th>Título</th>
                      <th>Categoría</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($secciones as $seccion)
                      <tr>
                      	<input type="hidden" name="id[]" value="{{$seccion->id}}">
                        <td>{{$seccion->id}}</td>
                        <td>{{$seccion->posicion}}</td>
                        <td><input type="text" name="titulo[]" value="{{$seccion->titulo}}"></td>
                        <td>

                        	<select name="categoria_id[]">
                        		<option value="0" selected>Sin asignar</option>

                        		@foreach($categorias as $categoria)
	                        		@if($seccion->categoria_id == $categoria->id)
	                        			<option value="{{$seccion->categoria_id}}" selected>{{$seccion->categoria->nombre}}</option>
	                				@else
	                				<option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
	                				@endif
                        		@endforeach

                        	</select>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              	<input type="submit" name="enviar" value="Guardar cambios" class="btn btn-primary">
              </form>
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