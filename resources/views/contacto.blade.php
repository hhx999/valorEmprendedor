@extends('layout')

@section('title') Valor Emprendedor - Sobre nosotros @endsection

@section('content')

<div class="container">
	@if($contacto->contenido == NULL)
	<div style="margin: 40px;">
		<h1>Todavía no agregamos información por acá...</h1>
	</div>
	@else
	{!! $contacto->contenido !!}
	@endif
</div>



@endsection