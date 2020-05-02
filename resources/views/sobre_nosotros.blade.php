@extends('layout')

@section('title') Valor Emprendedor - Sobre nosotros @endsection

@section('content')

<div class="container">
	<div style="margin: 40px;">
		@if($sobre_nosotros->contenido == NULL)	
			<h1>Todavía no agregamos información por acá...</h1>
		</div>
		@else
		{!! $sobre_nosotros->contenido !!}
		@endif
	</div>
</div>

@endsection