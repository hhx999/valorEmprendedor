@extends('adminlte::page')

@section('title', 'Publicidades - Agregar registro')

@section('content_header')
    <h1>Publicidades - Agregar registro</h1>
@stop

@section('content')
<div class="row">
	@if (\Session::has('success'))
	<div class="col-md-12">
	     <p> {!! \Session::get('success') !!}</p>
	</div>
	@endif
         <div class="col-md-12">
			<form method="post" name="agregarPublicidad" enctype="multipart/form-data" action="{{route('agregarPublicidad')}}" >
	          		@csrf
		             <div class="card-body">
		                <div class="form-group">
		                    <label for="nombre">Nombre</label>
		                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingresar nombre de la publicidad...">
		                </div>
		                <div class="form-group">
		                    <label for="nombre">Tipo de publicidad: </label>
		                    <select name="publicidad_tipo_id">
		                    	<option disabled selected >Seleccioná una opción...</option>
		                    	@foreach($tipos as $tipo)
		                    		<option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
		                    	@endforeach
		                    </select>
		                </div> 
			            <div class="row">
	                        <div class="col-md-6">
	                            <div class="input-group mb-3">
	                              <div class="input-group-prepend">
	                                <span class="input-group-text" id="inputGroupFileAddon01">Subir imagen descriptiva</span>
	                              </div>
	                              <div class="custom-file">
	                                <input type="file" name="imagen" class="custom-file-input" id="image" aria-describedby="inputGroupFileAddon01">
	                                <label class="custom-file-label" for="image" id="mensajeImagen">Ingresar una imagen.</label>
	                              </div>
	                              <p><b>Advertencia:</b> la imagen debe tener un tamaño menor a 2mb.
	                              </p>
	                            </div>
	                        </div>
	                        <div class="col-md-6" align="center">
	                            <img id="image_preview_container" src=""
	                                    alt="vista previa de la imagen" style="max-height: 150px;">
	                        </div>
	                    </div>
		            </div>
		          <div class="card-footer">
		              <button type="submit" class="btn btn-primary">Agregar publicidad</button>
		          </div>
	        </form>
	      </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script type="text/javascript">
     
    $(document).ready(function (e) {

 
        $('#image').change(function(){
          
            let reader = new FileReader();
            reader.onload = (e) => { 
              $('#image_preview_container').attr('src', e.target.result);
              console.log($('#image').attr('value')); 
              $("#mensajeImagen").text('Imagen agregada.');
            }
            reader.readAsDataURL(this.files[0]); 
 
        });
    });
 
</script>
@stop