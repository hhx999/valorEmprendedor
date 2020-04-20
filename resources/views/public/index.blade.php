<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Emprendedores</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400" rel="stylesheet"> 
		
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
							<li><a href="#">Sobre nosotros</a></li>
							<li><a href="#">Contacto</a></li>
							<!--<li><a href="#">Advertisement</a></li>
							<li><a href="#">Privacy</a></li>-->
							<li><a href="#"><i class="fa fa-sign-in"></i> Inicio sesión</a></li>
						</ul>
					</div>
					<div class="header-social">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<!--<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Top Header -->
			
			<!-- Center Header -->
			<div id="center-header">
				<div class="container">
					<div class="header-logo">
						<a href="#" class="logo"><img src="{{asset('style/img/logo.png')}}" alt=""></a>
					</div>
					<div class="header-ads">
						<img class="center-block" src="{{asset('style/img/ad-2.jpg')}}" alt=""> 
					</div>
				</div>
			</div>
			<!-- /Center Header -->
			
			<!-- Nav Header -->
			<div id="nav-header">
				<div class="container">
					<nav id="main-nav">
						<div class="nav-logo">
							<a href="#" class="logo"><img src="{{asset('style/img/logo-alt.png')}}" alt=""></a>
						</div>
						<ul class="main-nav nav navbar-nav">
							<li class="active"><a href="#">Inicio</a></li>
							<li><a href="#">Noticias</a></li>
							<li><a href="#">Novedades</a></li>
							<li><a href="#">Sección 1</a></li>
							<li><a href="#">Sección 2</a></li>
							<li><a href="#">Sección 3</a></li>
							<li><a href="#">Sección 4</a></li>
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
		
		<!-- Owl Carousel 1 -->
		<div id="owl-carousel-1" class="owl-carousel owl-theme center-owl-nav">
			<!-- ARTICLE -->
			<article class="article thumb-article">
				<div class="article-img">
					<img src="{{asset('style/img/img-lg-1.jpg')}}" alt="">
				</div>
				<div class="article-body">
					<ul class="article-info">
						<li class="article-category"><a href="#">Novedad</a></li>
						<li class="article-type"><i class="fa fa-camera"></i></li>
					</ul>
					<h2 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h2>
					<ul class="article-meta">
						<li><i class="fa fa-clock-o"></i> Enero 31, 2020</li>
						<li><i class="fa fa-comments"></i> 33</li>
					</ul>
				</div>
			</article>
			<!-- /ARTICLE -->
			
			<!-- ARTICLE -->
			<article class="article thumb-article">
				<div class="article-img">
					<img src="{{asset('style/img/img-lg-2.jpg')}}" alt="">
				</div>
				<div class="article-body">
					<ul class="article-info">
						<li class="article-category"><a href="#">Novedad</a></li>
						<li class="article-type"><i class="fa fa-file-text"></i></li>
					</ul>
					<h2 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h2>
					<ul class="article-meta">
						<li><i class="fa fa-clock-o"></i> Enero 31, 2020</li>
						<li><i class="fa fa-comments"></i> 33</li>
					</ul>
				</div>
			</article>
			<!-- /ARTICLE -->
			
			<!-- ARTICLE -->
			<article class="article thumb-article">
				<div class="article-img">
					<img src="{{asset('style/img/img-lg-3.jpg')}}" alt="">
				</div>
				<div class="article-body">
					<ul class="article-info">
						<li class="article-category"><a href="#">Novedadt</a></li>
						<li class="article-type"><i class="fa fa-camera"></i></li>
					</ul>
					<h2 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h2>
					<ul class="article-meta">
						<li><i class="fa fa-clock-o"></i> Enero 31, 2020</li>
						<li><i class="fa fa-comments"></i> 33</li>
					</ul>
				</div>
			</article>
			<!-- /ARTICLE -->
		</div>
		<!-- /Owl Carousel 1 -->
		
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
							<ul class="tab-nav pull-right">
								<li class="active"><a data-toggle="tab" href="#tab1">Todos</a></li>
								<li><a data-toggle="tab" href="#tab1">Noticias</a></li>
								<li><a data-toggle="tab" href="#tab1">Novedades</a></li>
								<li><a data-toggle="tab" href="#tab1">Sección 1</a></li>
								<li><a data-toggle="tab" href="#tab1">Sección 2</a></li>
								<li><a data-toggle="tab" href="#tab1">Sección 3</a></li>
							</ul>
							<!-- /tab nav -->
						</div>
						<!-- /section title -->
						
						<!-- Tab content -->
						<div class="tab-content">
							<!-- tab1 -->
							<div id="tab1" class="tab-pane fade in active">
								<!-- row -->
								<div class="row">
									<!-- Column 1 -->
									<div class="col-md-3 col-sm-6">
										<!-- ARTICLE -->
										<article class="article">
											<div class="article-img">
												<a href="#">
													<img src="./img/img-md-1.jpg" alt="">
												</a>
												<ul class="article-info">
													<li class="article-type"><i class="fa fa-camera"></i></li>
												</ul>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> Enero 31, 2020</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
									</div>
									<!-- /Column 1 -->
									
									<!-- Column 2 -->
									<div class="col-md-3 col-sm-6">
										<!-- ARTICLE -->
										<article class="article">
											<div class="article-img">
												<a href="#">
													<img src="./img/img-md-2.jpg" alt="">
												</a>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> Enero 31, 2020</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
									</div>
									<!-- /Column 2 -->
									
									<!-- Column 3 -->
									<div class="col-md-3 col-sm-6">
										<!-- ARTICLE -->
										<article class="article">
											<div class="article-img">
												<a href="#">
													<img src="./img/img-md-3.jpg" alt="">
												</a>
												<ul class="article-info">
													<li class="article-type"><i class="fa fa-file-text"></i></li>
												</ul>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> Enero 31, 2020</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
									</div>
									<!-- /Column 3 -->
									
									<!-- Column 4 -->
									<div class="col-md-3 col-sm-6">
										<!-- ARTICLE -->
										<article class="article">
											<div class="article-img">
												<a href="#">
													<img src="./img/img-md-4.jpg" alt="">
												</a>
												<ul class="article-info">
													<li class="article-type"><i class="fa fa-file-text"></i></li>
												</ul>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> Enero 31, 2020</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
									</div>
									<!-- Column 4 -->
								</div>
								<!-- /row -->
								
								<!-- row -->
								<div class="row">
									<!-- Column 1 -->
									<div class="col-md-4 col-sm-6">
										<!-- ARTICLE -->
										<article class="article widget-article">
											<div class="article-img">
												<a href="#">
													<img src="./img/img-widget-1.jpg" alt="">
												</a>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> Enero 31, 2020</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
										
										<!-- ARTICLE -->
										<article class="article widget-article">
											<div class="article-img">
												<a href="#">
													<img src="./img/img-widget-2.jpg" alt="">
												</a>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> Enero 31, 2020</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
									</div>
									<!-- /Column 1 -->
									
									<!-- Column 2 -->
									<div class="col-md-4 col-sm-6">
										<!-- ARTICLE -->
										<article class="article widget-article">
											<div class="article-img">
												<a href="#">
													<img src="./img/img-widget-3.jpg" alt="">
												</a>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> Enero 31, 2020</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
										
										<!-- ARTICLE -->
										<article class="article widget-article">
											<div class="article-img">
												<a href="#">
													<img src="./img/img-widget-4.jpg" alt="">
												</a>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> Enero 31, 2020</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
									</div>
									<!-- /Column 2 -->
									
									<!-- /Column 3 -->
									<div class="col-md-4 hidden-sm">
										<!-- ARTICLE -->
										<article class="article widget-article">
											<div class="article-img">
												<a href="#">
													<img src="./img/img-widget-5.jpg" alt="">
												</a>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> Enero 31, 2020</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
										
										<!-- ARTICLE -->
										<article class="article widget-article">
											<div class="article-img">
												<a href="#">
													<img src="./img/img-widget-6.jpg" alt="">
												</a>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> Enero 31, 2020</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
									</div>
									<!-- /Column 3 -->
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
							<div class="col-md-6 col-sm-6">
								<!-- section title -->
								<div class="section-title">
									<h2 class="title">Noticias</h2>
								</div>
								<!-- /section title -->
								
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="./img/img-sm-1.jpg" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> Enero 31, 2020</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
										<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui, ne accommodare theophrastus reprehendunt vel. Et commodo menandri eam.</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="./img/img-widget-7.jpg" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> Enero 31, 2020</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
								
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="./img/img-widget-8.jpg" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> Enero 31, 2020</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 1 -->
							
							<!-- Column 2 -->
							<div class="col-md-6 col-sm-6">
								<!-- section title -->
								<div class="section-title">
									<h2 class="title">Novedades</h2>
								</div>
								<!-- /section title -->
								
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="./img/img-sm-2.jpg" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-file-text"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> Enero 31, 2020</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
										<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui, ne accommodare theophrastus reprehendunt vel. Et commodo menandri eam.</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="./img/img-widget-9.jpg" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> Enero 31, 2020</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
								
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="./img/img-widget-10.jpg" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> Enero 31, 2020</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 2 -->
						</div>
						<!-- /row -->
						
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
							<div class="footer-widget about-widget">
								<div class="footer-logo">
									<a href="#" class="logo"><img src="./img/logo-alt.png" alt=""></a>
									<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui.</p>
								</div>
							</div>
							<!-- /footer about -->
							
							<!-- footer social -->
							<div class="footer-widget social-widget">
								<div class="widget-title">
									<h3 class="title">Seguinos</h3>
								</div>
								<ul>
									<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
							<!-- /footer social -->
							
							<!-- footer subscribe -->
							<div class="footer-widget subscribe-widget">
								<div class="widget-title">
									<h2 class="title">Subscribe to Noticiaslatter</h2>
								</div>
								<form>
									<input class="input" type="email" placeholder="Enter Your Email">
									<button class="input-btn">Subscribe</button>
								</form>
							</div>
							<!-- /footer subscribe -->
						</div>
						<!-- /Column 1 -->
						
						<!-- Column 2 -->
						<div class="col-md-4">
						</div>
						<!-- /Column 2 -->
						
						<!-- Column 3 -->
						<div class="col-md-4">
							
						</div>
						<!-- /Column 3 -->
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
								<li><a href="#">Sobre nosotros</a></li>
								<li><a href="#">Contacto</a></li>
							</ul>
						</div>
						<!-- /footer links -->
						
						<!-- footer copyright -->
						<div class="col-md-6 col-md-pull-6">
							<div class="footer-copyright">
								<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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