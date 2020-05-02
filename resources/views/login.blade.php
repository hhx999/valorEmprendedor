@extends('layout')

@section('title') Valor Emprendedor - Inicio sesión @endsection

@section('content')

      <div class="container">
        <div class="row">
          @if ($msg)
        <div class="col-md-12">
          <div class="alert alert-danger">
            <ul>
              <li>{{$msg}}</li>
            </ul>
          </div>
        </div>
         @endif
         @if ($errors->any())
         <div class="col-md-12">
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
         </div>
        @endif
          <div class="col-md-3"></div>
          <div class="col-md-6">
              <div class="widget subscribe-widget" style="margin-top: 40px;margin-bottom: 40px;">
            <form action="{{route('ingresoUsuario')}}" method="post" name="usuarioIngreso">
              @csrf
							<div class="widget-title">
								<h2 class="title">Iniciar sesión</h2>
							</div>
		                      <input type="email" name="email" class="input" id="email" aria-describedby="email" placeholder="Ingresá tu email...">
		                      <label for="password">Password</label>
		                      <input type="password" placeholder="Ingresá tu password..." class="input" name="password" id="password">
		                    <button type="submit" class="input-btn">Entrar</button>
            </form>
		       </div>
          </div>
        </div>
      </div>
@endsection