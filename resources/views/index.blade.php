@extends('layout')

@section('title') Valor Emprendedor - Inicio @endsection

@section('content')

		@if(count($ultimos_articulos) > 0)
			<!-- Owl Carousel 1 -->
			<div id="owl-carousel-1" class="owl-carousel owl-theme center-owl-nav">

				@foreach($ultimos_articulos as $articulo)
					<!-- ARTICLE -->
					<article class="article thumb-article">
						<div class="article-img" style="height: 400px;">
							<img style="height: 400px;" src="{{asset('img/portadas/'.$articulo->imagen)}}" alt="">
						</div>
						<div class="article-body">
							<ul class="article-info">
								<li class="article-category"><a href="{{url('/categoria/'.$articulo->categoria->slug)}}">{{$articulo->categoria->nombre}}</a></li>
								<!--
								<li class="article-type"><i class="fa fa-camera"></i></li>
								-->
							</ul>
							<h2 class="article-title"><a href="{{url('/articulo/'.$articulo->categoria->slug.'/'.$articulo->slug)}}">{{$articulo->titulo}}</a></h2>
							<ul class="article-meta">
								<li><i class="fa fa-clock-o"></i> {{$articulo->created_at}}</li>
								<li><i class="fa fa-comments"></i> {{$articulo->total_respuestas}}</li>
							</ul>
						</div>
					</article>
					<!-- /ARTICLE -->
				@endforeach	
			</div>
			<!-- /Owl Carousel 1 -->

		@else
		<div class="row">
			<div class="col-md-12" align="center">
				<img src="{{asset('img/Recursos/mensaje_error_ultimos_articulos.png')}}">
			</div>
		</div>
		@endif
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title">Últimos artículos</h2>
							<!-- tab nav -->
							<!--
								Implementar con ajax que puedan ver los últimos artículos de secciones
							<ul class="tab-nav pull-right">
								<li class="active"><a data-toggle="tab" href="#tab1">Todos</a></li>
								<li><a data-toggle="tab" href="#tab1">Noticias</a></li>
								<li><a data-toggle="tab" href="#tab1">Novedades</a></li>
								<li><a data-toggle="tab" href="#tab1">Sección 1</a></li>
								<li><a data-toggle="tab" href="#tab1">Sección 2</a></li>
								<li><a data-toggle="tab" href="#tab1">Sección 3</a></li>
							</ul>
							-->
							<!-- /tab nav -->
						</div>
						<!-- /section title -->
						
						<!-- Tab content -->
						<div class="tab-content">
							<!-- tab1 -->
							<div id="tab1" class="tab-pane fade in active">
								<!-- row -->
								@if($articulos->isEmpty())
								<div class="row">
									<div class="col-md-12">
										<p>
											Por ahora no tenemos artículos cargados...
										</p>
									</div>
								</div>
								@endif
								<div class="row">
										<div class="row">
									@foreach($articulos as $articulo)
									<!-- /Column -->
									@if($loop->index > 3)
										<!-- row -->
												<!-- Column 1 -->
												<div class="col-md-4 col-sm-6">
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
																<li><i class="fa fa-clock-o"></i>{{$articulo->created_at}}</li>
																<li><i class="fa fa-comments"></i> {{$articulo->total_comentarios}}</li>
															</ul>
														</div>
													</article>
													<!-- /ARTICLE -->
												</div>
												<!-- /Column 1 -->
									@else
									<!-- /Column -->
									<!-- Column -->
									<div class="col-md-3 col-sm-6">
										<!-- ARTICLE -->
										<article class="article">
											<div class="article-img">
												<a href="{{url('/articulo/'.$articulo->categoria->slug.'/'.$articulo->slug)}}">
													<img style="height: 200px;" src="{{asset('img/portadas/'.$articulo->imagen)}}" alt="">
												</a>
												<!--
												<ul class="article-info">
													<li class="article-type"><i class="fa fa-camera"></i></li>
												</ul>
												-->
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="{{url('/articulo/'.$articulo->categoria->slug.'/'.$articulo->slug)}}">{{$articulo->titulo}}</a></h4>
												<ul class="article-meta">
													<li style="color: gray !important;"><i class="fa fa-clock-o"></i> {{$articulo->created_at}}</li>
													<li style="color: gray !important;"><i class="fa fa-comments"></i> {{$articulo->total_comentarios}}</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
									</div>
									@endif
									
									
									@endforeach
									</div>

								</div>
								<!-- /row -->
							</div>
							<!-- /tab1 -->
						</div>
						<!-- /tab content -->
					</div>
					<!-- /Main Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->

		<!-- AD SECTION -->
		<div class="visible-lg visible-md">
			<img class="center-block" src="./img/ad-3.jpg" alt="">
		</div>
		<!-- /AD SECTION -->
		
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-8">
						<!-- row -->
						<div class="row">
							<!-- Column 1 -->
							<div class="col-md-12 col-sm-12">
								<!-- section title -->
								<div class="section-title">
									<h2 class="title">Últimos anuncios</h2>
								</div>
								<!-- /section title -->
								
								@if($ultimos_anuncios->isEmpty())
								<p> Por ahora no hay nada cargado por acá...</p>
								@endif
								@foreach($ultimos_anuncios as $anuncio)
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img" style="width: 200px !important;">
											<img src="{{asset('img/anuncios/'.$anuncio->imagen)}}" alt="{{$anuncio->titulo}}">
									</div>
									<div class="article-body">
										<h3 class="article-title">{{$anuncio->titulo}}</h3>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> {{$anuncio->fecha}}</li>
										</ul>
										<p>{{$anuncio->descripcion}}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
							</div>
							<!-- /Column 1 -->
						</div>
						<!-- /row -->

							
						</div>
					<!-- /Main Column -->
					
					<!-- Aside Column -->
					<div class="col-md-4">
						<!-- Ad widget -->
						<!-- Funcionalidad de publicidades acá PUBLICIDADES -->
						<!--<div class="widget center-block hidden-xs" align="center">-->
							@if($publicidades)
								@foreach($publicidades as $publicidad)

								<div class="widget center-block hidden-xs">
										<img class="center-block" style="width: 300px;height: 250px;"  src="{{asset('img/sitio/'.$publicidad->imagen)}}" alt="{{$publicidad->nombre}}">
								</div>
								
									
								@endforeach
							@else
								<div style="width: 300px;height: 250px;background: lightgray;padding: 20px"><p>AD 250px x 300px</p> </div>
							@endif
						<!--</div>-->
						<!-- /Ad widget -->
						
						<!-- social widget -->
						<div class="widget social-widget" align="center">
							<div class="widget-title">
								<h2 class="title">Nuestras redes</h2>
							</div>
							<ul>
								@if($facebook->url)
								<li><a href="{{$facebook->url}}" class="facebook"><i class="fa fa-facebook"></i></a></li>
								@endif
								@if($instagram->url)
								<li><a href="{{$instagram->url}}" class="instagram"><i class="fa fa-instagram"></i></a></li>
								@endif
							</ul>
								@if($facebook->url == null || $instagram->url == null)
								<p style="text-align:center;">
									Proximamente agregaremos el contacto de nuestras redes sociales!
								</p>
								@endif
						</div>
						<!-- /social widget -->
						
						<!-- subscribe widget -->
						<div class="widget subscribe-widget" align="center">
							<div class="widget-title">
								<h2 class="title">Envianos tu mensaje!</h2>
							</div>
							<form action="{{route('enviarMensaje')}}" method="post" name="enviarMensaje">
								@csrf
								<input class="input" name="nombre" type="text" placeholder="Ingresá tu nombre">

								<input class="input" name="email" type="email" placeholder="Ingresá tu email">
								<select name="categoria_mensaje_id">
									@foreach($categoria_mensajes as $categoria)
									<option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
									@endforeach
								</select>
								<hr>
								<textarea rows="4" class="textarea" name="contenido"></textarea>
								<button class="input-btn">Enviar mensaje</button>
							</form>
						</div>
						<!-- /subscribe widget -->
					</div>
					<!-- /Aside Column -->
				</div>
				<!-- /ROW -->
				<div class="row">
								<div class="col-md-12">
									@foreach($categorias as $categoria)
									<span> <a href="{{url('/'.$categoria->slug)}}">{{$categoria->nombre}}</a> / </span>
									@endforeach
								</div>
				</div>
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
@endsection