@extends('adminlte::page')

@section('title', 'Artículos')

@section('content_header')
    <h1>Artículos</h1>
@stop

@section('content')
<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
<div class="row">
  @if (\Session::has('success'))
  <div class="col-md-12">
       <p> {!! \Session::get('success') !!}</p>
  </div>
  @endif
          <div class="col-md-12">
          <form method="post" name="agregarArticulo" action="{{route('agregarArticulo')}}" enctype="multipart/form-data">
                @csrf
             <div class="card-body">
                  <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Ingresar título del artículo...">
                  </div>
                  <div class="form-group">
                    <label for="copete">Copete</label>
                    <input type="text" name="copete" class="form-control" id="copete" placeholder="Ingresar copete...">
                  </div>
                  <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Portada</h3>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label for="descripcionPortada">Descripción de la portada</label>
                          <input type="text" name="descripcionPortada" class="form-control" id="descripcionPortada" placeholder="Ingresar de descripcion portada...">
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
                        <label>Categoría</label>
                        <select class="custom-select" name="categoria">
                          <option selected disabled>Elegir categoría...</option>
                          @foreach($categorias as $categoria)
                          <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                          @endforeach
                        </select>
                  </div>
            </div>
          <!-- EDITOR -->
            <!-- /.card-header -->
            <div class="panel-body">
                            <textarea class="ckeditor"  name="cuerpo" id="editor1" rows="100" cols="80">
                                Este es el textarea que es modificado por la clase ckeditor
                            </textarea>
            </div>
          <div class="card-footer">
              <button type="submit" class="btn btn-primary">Agregar artículo</button>
          </div>
        </form>

@stop

@section('css')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script> console.log('Hi!'); </script>
@stop