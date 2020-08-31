@extends('layout')

@section('title') Valor Emprendedor - {{$categoria->nombre}} @endsection

@section('content')

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
							<h2 class="title">{{$categoria->nombre}}</h2>
							<h3>
								<p>{{$categoria->descripcion}}</p>
							</h3>
						</div>
						<!-- /section title -->
						
						<!-- Tab content -->
						<div class="tab-content">
							<!-- tab1 -->
							<div id="tab1" class="tab-pane fade in active">
								<!-- row -->
								<div class="row">
								@if($articulos->isEmpty())
								<div class="col-md-12">
									<p>Por ahora no hay artículos cargados en {{$categoria->nombre}}...</p>
								</div>
								@endif
								@foreach($articulos as $articulo)
									<!-- Column -->
									<div class="col-md-3 col-sm-6">

										<!-- ARTICLE -->
										<article class="article">
											<div class="article-img">
												<a href="{{url('articulo/'.$articulo->categoria->slug.'/'.$articulo->slug)}}">
													<img src="{{asset('img/portadas/'.$articulo->imagen)}}" alt="{{$articulo->nombre}}">
												</a>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="{{url('articulo/'.$articulo->categoria->slug.'/'.$articulo->slug)}}">{{$articulo->titulo}}</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> {{$articulo->created_at}}</li>
													<li><i class="fa fa-comments"></i> {{$articulo->total_comentarios}}</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
									</div>
									<!-- /Column  -->
									@endforeach
									</div>
								</div>
								<!-- /row -->
					</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
	</div>
</div>


@endsection