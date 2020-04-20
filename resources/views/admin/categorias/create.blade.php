@extends('adminlte::page')

@section('title', 'Categorías')

@section('content_header')
    <h1>Categorías</h1>
@stop

@section('content')
<div class="row">
	@if (\Session::has('success'))
	<div class="col-md-12">
	     <p> {!! \Session::get('success') !!}</p>
	</div>
	@endif
         <div class="col-md-12">
			<form method="post" name="agregarCategoria" action="{{route('agregarCategoria')}}">
	          		@csrf
		             <div class="card-body">
		                  <div class="form-group">
		                    <label for="nombre">Nombre</label>
		                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingresar nombre de la categoría...">
		                  </div>
		                  <div class="form-group">
		                    <label for="descripcion">Descripción</label>
		                    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Ingresar descripción...">
		                  </div>
		            </div>
		          <div class="card-footer">
		              <button type="submit" class="btn btn-primary">Agregar categoría</button>
		          </div>
	        </form>
	      </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop