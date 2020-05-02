@extends('adminlte::page')

@section('title', 'Artículos')

@section('content_header')
    <h1>Apariencia</h1>
@stop

@section('content')
@if (\Session::has('success'))
  <div class="col-md-12">
       <p> {!! \Session::get('success') !!}</p>
  </div>
  @endif
<div class="row mb-2">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Logo del sitio</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="{{route('agregar-logo')}}" method="post" name="configurar" enctype="multipart/form-data">
              	@csrf
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
                            <img id="image_preview_container" src="{{asset('img/apariencia/'.$logo->imagen) }}"
                                    alt="vista previa de la imagen" style="max-height: 150px;">
                        </div>
                    </div>
               
              	<input type="submit" name="enviar" value="Guardar cambios" class="btn btn-primary">
              </form>
          		</div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ícono del sitio</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="{{route('agregar-icono')}}" method="post" name="configurar" enctype="multipart/form-data">
              	@csrf
                   <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Subir ícono</span>
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
                            <img id="image_preview_container" src="{{asset('img/apariencia/'.$icono->imagen) }}"
                                    alt="vista previa de la imagen" style="max-height: 150px;">
                        </div>
                    </div>
               
              	<input type="submit" name="enviar" value="Guardar cambios" class="btn btn-primary">
              </form>
          		</div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div><!-- /.container-fluid -->

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