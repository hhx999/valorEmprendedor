@extends('adminlte::page')

@section('title', 'Información del sitio')

@section('content_header')
    <h1>Información del sitio </h1>
@stop
@section('content')
<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>

@if (\Session::has('success'))
  <div class="col-md-12">
       <p> {!! \Session::get('success') !!}</p>
  </div>
  @endif
<div class="container">

	<form method="post" name="configurarContacto" action="{{route('configurarContacto')}}" >
                @csrf
             <div class="card-body">
             	<div class="card-header">
             		<h2>Página de contacto:</h2>
             	</div>
                  <div class="panel-body">
                            <textarea class="ckeditor"  name="contacto" id="editor1" rows="150" cols="80">{{$contacto->contenido}}</textarea>
                  </div>
	          <div class="card-footer">
	              <button type="submit" class="btn btn-primary">Guardar</button>
	          </div>
            </div>
    </form>
    <hr>
    <form method="post" name="configurarNosotros" action="{{route('configurarNosotros')}}" >
                @csrf
             <div class="card-body">
             	<div class="card-header">
             		<h2>Página de Sobre Nosotros:</h2>
             	</div>
                  <div class="panel-body">
                            <textarea class="ckeditor"  name="sobre_nosotros" id="editor1" rows="150" cols="80">{{$sobre_nosotros->contenido}}</textarea>
                  </div>
	          <div class="card-footer">
	              <button type="submit" class="btn btn-primary">
	              Guardar</button>
	          </div>
            </div>
    </form>
    <hr>
    <form method="post" name="configurarFacebook" action="{{route('configurarFacebook')}}" >
                @csrf
             <div class="card-body">
             	<div class="card-header">
             		<h2>Facebook:</h2>
             	</div>
             	<div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" name="facebook" class="form-control" id="facebook" placeholder="Ingresar facebook..." value="{{$facebook->url}}">
                 </div>
                <div class="card-footer">
	              <button type="submit" class="btn btn-primary">
	              Guardar</button>
	          </div>
            </div>
    </form>
    <hr>
    <form method="post" name="configurarInstagram" action="{{route('configurarInstagram')}}" >
                @csrf
             <div class="card-body">
             	<div class="card-header">
             		<h2>Instagram:</h2>
             	</div>
             	<div class="form-group">
                    <label for="instagram">Instagram</label>
                    <input type="text" name="instagram" class="form-control" id="instagram" placeholder="Ingresar instagram..." value="{{$instagram->url}}">
                 </div>
                <div class="card-footer">
	              <button type="submit" class="btn btn-primary">
	              Guardar</button>
	          </div>
            </div>
    </form>

	
</div>



@stop

@section('css')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script> console.log('Hi!'); </script>
@stop