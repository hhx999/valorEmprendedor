@extends('adminlte::page')

@section('title', 'Anuncios - Crear registro')

@section('content_header')
    <h1>Anuncios - Crear registro</h1>
@stop

@section('content')
<div class="row">
	@if (\Session::has('success'))
	<div class="col-md-12">
	     <p> {!! \Session::get('success') !!}</p>
	</div>
	@endif
         <div class="col-md-12">
			<form method="post" name="agregarAnuncio" enctype="multipart/form-data" action="{{route('agregarAnuncio')}}">
	          		@csrf
		             <div class="card-body">
		                  <div class="form-group">
		                    <label for="titulo">Nombre</label>
		                    <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Ingresar nombre de la anuncio...">
		                  </div>
		                  <div class="form-group">
		                    <label for="fecha">Fecha</label>
		                    <input type="text" name="fecha" class="form-control" id="nombre" placeholder="Ingresar nombre de la anuncio...">
		                  </div>
		                  <div class="form-group">
		                    <label for="horario">Horario</label>
		                    <input type="text" name="horario" class="form-control" id="nombre" placeholder="Ingresar nombre de la anuncio...">
		                  </div>
		                  <div class="form-group">
		                    <label for="lugar">Lugar</label>
		                    <input type="text" name="lugar" class="form-control" id="nombre" placeholder="Ingresar nombre de la anuncio...">
		                  </div>
		                  <div class="form-group">
		                        <label>Localidad</label>
		                        <select class="custom-select" name="localidad_id">
		                          <option selected disabled>Elegir Localidad...</option>
		                          @foreach($localidades as $localidad)
		                          <option value="{{$localidad->id}}">{{$localidad->nombre}}</option>
		                          @endforeach
		                        </select>
		                  </div>
		                  <div class="form-group">
		                        <label>Tipo de anuncio</label>
		                        <select class="custom-select" name="anuncio_tipo_id">
		                          <option selected disabled>Elegir tipo_anuncio...</option>
		                          @foreach($anuncios as $tipo_anuncio)
		                          <option value="{{$tipo_anuncio->id}}">{{$tipo_anuncio->nombre}}</option>
		                          @endforeach
		                        </select>
		                  </div>
		                  <div class="card card-primary">
		                      <div class="card-header">
		                        <h3 class="card-title">Imágen</h3>
		                      </div>
		                      <div class="card-body">
		                        <div class="form-group">
		                          <label for="portada">Imagen de portada</label>
		                          <div class="input-group">
		                            <div class="custom-file">
		                              <input name="imagen" type="file" class="custom-file-input" id="portada">
		                              <label class="custom-file-label" for="portada">Elegir imagen</label>
		                            </div>
		                            <div class="input-group-append">
		                              <span class="input-group-text" id="">Subir</span>
		                            </div>
		                          </div>
		                        </div>
		                      </div>
		                  </div>

		                  <div class="form-group">
		                    <label for="descripcion">Descripción</label>
		                    <textarea class="form-control" name="descripcion" id="descripcion"></textarea>
		                  </div>
		            </div>
		          <div class="card-footer">
		              <button type="submit" class="btn btn-primary">Agregar anuncio</button>
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