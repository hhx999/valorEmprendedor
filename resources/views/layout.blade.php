<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>@yield('title')</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400" rel="stylesheet"> 
		<link rel="icon" type="image/png" href="{{asset('img/apariencia/'.$icono->imagen)}}" />

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{asset('style/css/bootstrap.min.css')}}"/>

		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="{{asset('style/css/owl.carousel.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{asset('style/css/owl.theme.default.css')}}" />
		
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset('style/css/font-awesome.min.css')}}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset('style/css/style.css')}}"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
	
		<!-- Header -->
		<header id="header">
			<!-- Top Header -->
			<div id="top-header">
				<div class="container">
					<div class="header-links">
						<ul>
							<li><a href="{{url('/sobre-nosotros')}}">Sobre nosotros</a></li>
							<li><a href="{{url('/contacto')}}">Contacto</a></li>
							<!--<li><a href="#">Advertisement</a></li>
							<li><a href="#">Privacy</a></li>-->
							@if(Session::get('cargo') == 'administrador' )
							<li><a href="{{url('/admin/dashboard/index')}}"><i class="fa fa-sign-in"></i> Panel de administración</a></li>
							@endif
						</ul>
					</div>
					<div class="header-social">
						<ul>
							@if($facebook->url)
							<li><a href="{{$facebook->url}}"><i class="fa fa-facebook"></i></a></li>
							@endif
							@if($instagram->url)
							<li><a href="{{$instagram->url}}"><i class="fa fa-instagram"></i></a></li>
							@endif
						</ul>
					</div>
				</div>
			</div>
			<!-- /Top Header -->
			
			<!-- Center Header -->
			<div id="center-header">
				<div class="container">
					<!-- Agregar logo ingresado en apariencia -->
					<!--
					<div class="header-logo">
						<a href="{{url('/')}}" class="logo"><img src="{{asset('img/apariencia/'.$logo->imagen)}}" alt=""></a>
					</div>-->
					<!-- Agregar ads ingresadas en publicidad -->
					<!--
						<div style="float: right;">
							<a href="#" class="logo"><img style="width: 728px;height: 90px;" src="@if($publicidad_header)
								{{asset('img/sitio/'.$publicidad_header->imagen)}}
								@else 
								{{asset('style/img/img-widget-11.jpg')}}
								@endif
								" alt=""></a>
						</div>
					-->
					<div class="row">
						<div class="col-md-6">
							<a href="{{url('/')}}" class="logo"><img style="width: 100%;" src="{{asset('img/apariencia/'.$logo->imagen)}}" alt=""></a>
						</div>
						<div class="col-md-6">
							@if($publicidad_header)
							<a href="#" class="logo"><img style="width: 728px;height: 90px;" src="
								{{asset('img/sitio/'.$publicidad_header->imagen)}}" alt=""></a>
							@endif
						</div>
					</div>
				</div>
			</div>
			<!-- /Center Header -->
			
			<!-- Nav Header -->
			<div id="nav-header">
				<div class="container">
					<nav id="main-nav">
						<div class="nav-logo">
							<a href="{{url('/')}}" class="logo"><img src="{{asset('style/img/logo-alt.png')}}" alt=""></a>
						</div>
						<ul class="main-nav nav navbar-nav">
							<li class="active"><a href="{{url('/')}}">Inicio</a></li>
							@foreach($secciones as $seccion)
								<li><a href="{{url('/categoria/'.$seccion->categoria->slug)}}">{{$seccion->titulo}}</a></li>
							@endforeach
						</ul>
					</nav>
					<div class="button-nav">
						<button class="search-collapse-btn"><i class="fa fa-search"></i></button>
						<button class="nav-collapse-btn"><i class="fa fa-bars"></i></button>
						<div class="search-form">
							<form>
								<input class="input" type="text" name="search" placeholder="Search">
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /Nav Header -->
		</header>
		<!-- /Header -->

<!-- CONTENIDO DEL SITIO  -->

@yield('content')


		
<!-- /CONTENIDO DEL SITIO -->		
		<!-- FOOTER -->
		<footer id="footer">
			<!-- Top Footer -->
			<div id="top-footer" class="section">
				<!-- CONTAINER -->
				<div class="container">
					<!-- ROW -->
					<div class="row">
						<!-- Column 1 -->
						<div class="col-md-4">
							<!-- footer about -->
							<!--
							<div class="footer-widget about-widget">
								<div class="footer-logo">
									<a href="#" class="logo"><img src="./img/logo-alt.png" alt=""></a>
									<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui.</p>
								</div>
							</div>
							-->
							<!-- /footer about -->
							
							<!-- footer social -->
							<div class="footer-widget social-widget">
								<div class="widget-title">
									<h3 class="title">Seguinos</h3>
								</div>
								<ul>
									@if($facebook->url)
									<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
									@endif
									@if($instagram->url)
									<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
									@endif
								</ul>
							</div>
							<!-- /footer social -->
						</div>
						<!-- /Column 1 -->
						
						<!-- Column 2 -->
						<div class="col-md-4">
							<!-- footer subscribe -->
							<div class="footer-widget subscribe-widget">
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
							
						</div>
							<!-- /footer subscribe -->
							<!-- Column 3 -->
							<div class="col-md-4">
								<div class="footer-widget subscribe-widget">
								<div class="widget-title">
									<h2 class="title">Mapa del sitio</h2>
								</div>
									@foreach($secciones as $seccion)
									<span style="color: white;"><a href="{{url('/categoria/'.$seccion->categoria->slug)}}">{{$seccion->titulo}}</a> <b style="color: gray;">|</b> </span>
									@endforeach
								</div>
								
							</div>
							<!-- /Column 3 -->
						</div>
						<!-- /Column 2 -->
						
					</div>
					<!-- /ROW -->
				</div>
				<!-- /CONTAINER -->
			</div>
			<!-- /Top Footer -->
			
			<!-- Bottom Footer -->
			<div id="bottom-footer" class="section">
				<!-- CONTAINER -->
				<div class="container">
					<!-- ROW -->
					<div class="row">
						<!-- footer links -->
						<div class="col-md-6 col-md-push-6">
							<ul class="footer-links">
								<li><a href="{{url('/sobre-nosotros')}}">Sobre nosotros</a></li>
								<li><a href="{{url('/contacto')}}">Contacto</a></li>
							</ul>
						</div>
						<!-- /footer links -->
						
						<!-- footer copyright -->
						<div class="col-md-6 col-md-pull-6">
							<div class="footer-copyright">
								<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Sitio creado por Borjas Vega Riveras - <a href="mailto:borjas.vegariveras@gmail.com">borjas.vegariveras@gmail.com</a><br>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
							</div>
						</div>
						<!-- /footer copyright -->
					</div>
					<!-- /ROW -->
				</div>
				<!-- /CONTAINER -->
			</div>
			<!-- /Bottom Footer -->
		</footer>
		<!-- /FOOTER -->
		
		<!-- Back to top -->
		<div id="back-to-top"></div>
		<!-- Back to top -->
		
		<!-- jQuery Plugins -->
		<script src="{{asset('style/js/jquery.min.js')}}"></script>
		<script src="{{asset('style/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('style/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('style/js/main.js')}}"></script>

	</body>
</html>