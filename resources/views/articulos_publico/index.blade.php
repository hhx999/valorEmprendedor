@extends('layout')

@section('title') Valor Emprendedor - {{$articulo->titulo}} @endsection

@section('content')
<style type="text/css">
	img{
		max-width: 100% !important;
		max-height: 420px !important;
	}
</style>

<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-8">

						<!-- breadcrumb -->
						<ul class="article-breadcrumb" style="margin-top: 20px;">
							<li><a href="{{url('/')}}">Inicio</a></li>
							<li><a href="{{route('verCategoria', $articulo->categoria->slug)}}">{{$articulo->categoria->nombre}}</a></li>
							<li style="color: gray;">{{$articulo->titulo}}</li>
						</ul>
						<!-- /breadcrumb -->
					
						<!-- ARTICLE POST -->
						<article class="article article-post">
							<!-- AddToAny BEGIN -->
							<div class="a2a_kit a2a_kit_size_32 a2a_default_style" style="margin-bottom: 30px;">
							<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
							<a class="a2a_button_copy_link"></a>
							<a class="a2a_button_facebook"></a>
							<a class="a2a_button_whatsapp"></a>
							<a class="a2a_button_twitter"></a>
							<a class="a2a_button_email"></a>
							<a class="a2a_button_telegram"></a>
							</div>
							<div class="col-md-12">
								<div style="background: url('{{asset('img/portadas/'.$articulo->imagen)}}');background-size: contain;
	background-position: center center; width: 100%;height: 400px;background-repeat: no-repeat;">
								</div>
							</div>
							<!--
							<div class="article-main-img" style="width: 750px;height: 422px;">
								<img src="{{asset('img/portadas/'.$articulo->imagen)}}" alt="">
							</div>
							-->
							<div class="article-body">
								<ul class="article-info">
									<li class="article-category"><a href="{{route('verCategoria', $articulo->categoria->slug)}}">{{$articulo->categoria->nombre}}</a></li>
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>
								<h1 class="article-title">{{$articulo->titulo}}</h1>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i> {{$articulo->created_at}}</li>
									<li><i class="fa fa-comments"></i> {{$articulo->total_comentarios}}</li>
								</ul>
								{!! $articulo->cuerpo !!}
							</div>
						</article>
						<!-- /ARTICLE POST -->
						
						<!-- widget tags -->
						<!--
						<div class="widget-tags">
							<ul>
								<li><a href="#">News</a></li>
								<li><a href="#">Sport</a></li>
								<li><a href="#">Lifestyle</a></li>
								<li><a href="#">Fashion</a></li>
								<li><a href="#">Music</a></li>
								<li><a href="#">Business</a></li>
							</ul>
						</div>
						-->
						<!-- /widget tags -->
						
						<!-- article comments -->
						<div class="article-comments">
							<div class="section-title">
								<h2 class="title">Comentarios</h2>
							</div>
								
							@foreach($comentarios as $comentario)
							<!-- comment -->
							<div class="media">
								<!--
								<div class="media-left">
									<img src="img/av-1.jpg" alt="">
								</div>
								-->
								<div class="media-body">
									<div class="media-heading">
										<h5>{{$comentario->nombre}} <span class="reply-time">{{$comentario->created_at}}</span></h5>
									</div>
									<p>{{$comentario->contenido}}</p>
								</div>
							</div>
							<!-- /comment -->
							@endforeach
						</div>
						<!-- /article comments -->

						
						<!-- reply form -->
						<div class="article-reply-form">
							@if (\Session::has('msg'))
							<div class="col-md-12">
							     <p> {!! \Session::get('msg') !!}</p>
							</div>
							@endif
							<div class="section-title">
								<h2 class="title">Dejanos tu comentario...</h2>
							</div>
								
							<form action="{{route('agregarComentario')}}" name="agregarComentario" method="post">
								@csrf
								<input type="hidden" name="articulo_id" value="{{$articulo->id}}">
								<input class="input" name="nombre" placeholder="Ingrese su nombre" type="text">
								<input class="input" name="email" placeholder="Ingrese su email..." type="email">
								<textarea class="input" name="contenido" placeholder="Ingrese su comentario..."></textarea>
								<button class="input-btn">Enviar mensaje</button>
							</form>
						</div>
						<!-- /reply form -->
					</div>
					<!-- /Main Column -->
					
					<!-- Aside Column -->
					<div class="col-md-4">
						<!-- Ad widget -->
						<div class="widget center-block hidden-xs">
							<img class="center-block" src="./img/ad-1.jpg" alt=""> 
						</div>
						<!-- /Ad widget -->
						
						<!-- social widget -->
						<div class="widget social-widget" align="center">
							<div class="widget-title">
								<h2 class="title">Seguí conectado</h2>
							</div>
							<ul>
								@if($facebook->url)
								<li><a class="facebook" href="{{$facebook->url}}"><i class="fa fa-facebook"></i></a></li>
								@endif
								@if($instagram->url)
								<li><a class="instagram" href="{{$instagram->url}}"><i class="fa fa-instagram"></i></a></li>
								@endif
							</ul>
						</div>
						<!-- /social widget -->
						
						
								@if($publicidades)
								@foreach($publicidades as $publicidad)

								<div class="widget center-block hidden-xs">
										<img class="center-block" style="width: 300px;height: 250px;"  src="{{asset('img/sitio/'.$publicidad->imagen)}}" alt="{{$publicidad->nombre}}">
								</div>
								
									
								@endforeach
							@else
								<div style="width: 300px;height: 250px;background: lightgray;padding: 20px"><p>AD 250px x 300px</p> </div>
							@endif
						<!-- article widget -->
						<div class="widget">
							<div class="widget-title">
								<h2 class="title">Últimos artículos relacionados</h2>
							</div>
							@foreach($ultimos_articulos as $articulo)
							
							<!-- ARTICLE -->
							<article class="article widget-article">
								<div class="article-img">
									<a href="{{url('/articulo/'.$articulo->categoria->slug.'/'.$articulo->slug)}}">
										<img src="{{asset('img/portadas/'.$articulo->imagen)}}" alt="">
									</a>
								</div>
								<div class="article-body">
									<h4 class="article-title"><a href="{{url('/articulo/'.$articulo->categoria->slug.'/'.$articulo->slug)}}">{{$articulo->titulo}}</a></h4>
									<ul class="article-meta">
										<li><i class="fa fa-clock-o"></i> {{$articulo->created_at}}</li>
										<li><i class="fa fa-comments"></i> {{$articulo->total_comentarios}}</li>
									</ul>
								</div>
							</article>
							<!-- /ARTICLE -->
							@endforeach
							
						</div>
						
					</div>
					<!-- /Aside Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
	

		
		
<script async src="https://static.addtoany.com/menu/page.js"></script>		

@endsection