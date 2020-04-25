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
								<li class="article-category"><a href="{{url('/'.$articulo->categoria->slug)}}">{{$articulo->categoria->nombre}}</a></li>
								<!--
								<li class="article-type"><i class="fa fa-camera"></i></li>
								-->
							</ul>
							<h2 class="article-title"><a href="{{url('/'.$articulo->categoria->slug.'/'.$articulo->slug)}}">{{$articulo->titulo}}</a></h2>
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
								<div class="row">
									@foreach($articulos as $articulo)
									<!-- /Column -->
									@if($loop->index > 3)
										<!-- row -->
										<div class="row">
												<!-- Column 1 -->
												<div class="col-md-4 col-sm-6">
													<!-- ARTICLE -->
													<article class="article widget-article">
														<div class="article-img">
															<a href="{{url('/'.$articulo->categoria->slug.'/'.$articulo->slug)}}">
																<img src="{{asset('img/portadas/'.$articulo->imagen)}}" alt="">
															</a>
														</div>
														<div class="article-body">
															<h4 class="article-title"><a href="{{url('/'.$articulo->categoria->slug.'/'.$articulo->slug)}}">{{$articulo->titulo}}</a></h4>
															<ul class="article-meta">
																<li><i class="fa fa-clock-o"></i>{{$articulo->created_at}}</li>
																<li><i class="fa fa-comments"></i> {{$articulo->total_comentarios}}</li>
															</ul>
														</div>
													</article>
													<!-- /ARTICLE -->
												</div>
												<!-- /Column 1 -->
										</div>

									@else
									<!-- /Column -->
									<!-- Column -->
									<div class="col-md-3 col-sm-6">
										<!-- ARTICLE -->
										<article class="article">
											<div class="article-img">
												<a href="{{url('/'.$articulo->categoria->slug.'/'.$articulo->slug)}}">
													<img style="height: 200px;" src="{{asset('img/portadas/'.$articulo->imagen)}}" alt="">
												</a>
												<!--
												<ul class="article-info">
													<li class="article-type"><i class="fa fa-camera"></i></li>
												</ul>
												-->
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="{{url('/'.$articulo->categoria->slug.'/'.$articulo->slug)}}">{{$articulo->titulo}}</a></h4>
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
								

								@foreach($ultimos_anuncios as $anuncio)
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img" style="width: 200px !important;">
										<a href="#">
											<img src="{{asset('img/anuncios/'.$anuncio->imagen)}}" alt="{{$anuncio->titulo}}">
										</a>
									</div>
									<div class="article-body">
										<h3 class="article-title"><a href="#">{{$anuncio->titulo}}</a></h3>
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
							@foreach($publicidades as $publicidad)
							<img style="width: 300px;height: 250px;"  src="{{asset('storage/ads/'.$publicidad->imagen)}}" alt="">
								
							@endforeach

							<div style="width: 300px;height: 250px;background: lightgray;padding: 20px"><p>AD 250px x 300px</p> </div>
						<!--</div>-->
						<!-- /Ad widget -->
						
						<!-- social widget -->
						<div class="widget social-widget">
							<div class="widget-title">
								<h2 class="title">Nuestras redes</h2>
							</div>
							<ul>
								<li><a href="#" class="facebook"><i class="fa fa-facebook"></i><br><span>Facebook</span></a></li>
								<!--<li><a href="#" class="twitter"><i class="fa fa-twitter"></i><br><span>Twitter</span></a></li>
								<li><a href="#" class="google"><i class="fa fa-google"></i><br><span>Google+</span></a></li>-->
								<li><a href="#" class="instagram"><i class="fa fa-instagram"></i><br><span>Instagram</span></a></li>
								<!--<li><a href="#" class="youtube"><i class="fa fa-youtube"></i><br><span>Youtube</span></a></li>-->
								<li><a href="#" class="rss"><i class="fa fa-rss"></i><br><span>RSS</span></a></li>
							</ul>
						</div>
						<!-- /social widget -->
						
						<!-- subscribe widget -->
						<div class="widget subscribe-widget">
							<div class="widget-title">
								<h2 class="title">Suscribite para estar al tanto de nuestras novedades!</h2>
							</div>
							<form>
								<input class="input" type="email" placeholder="Ingresá tu email">
								<button class="input-btn">Suscribir</button>
							</form>
						</div>
						<!-- /subscribe widget -->
					</div>
					<!-- /Aside Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
@endsection