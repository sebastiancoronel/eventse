@extends('layouts.base_registro')
{{-- BARRA DE NAVEGACION --}}
@section('header_registro')
  <header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
      <!-- Topbar -->
      <div class="top-bar">
        <div class="content-topbar flex-sb-m h-full container">
          <div class="left-top-bar">
            Sumá puntos contratando tu primer servicio <a href="#">haciendo click aqui</a>
          </div>
                    {{-- @if (Route::has('login'))
                    <div class="right-top-bar flex-w h-full">
                      <a href="#" class="flex-c-m trans-04 p-lr-25">
                        <button id="AbrirModal" type="button" class="flex-c-m trans-04 p-lr-25" data-toggle="modal" data-target="#Modal_registro" style="color:#b2b2b2;" >Registrate</button>
                      </a>
                                  @auth
                                  <a href="{{ url('/home') }}" class="flex-c-m trans-04 p-lr-25">Mi cuenta</a>
                                  @endauth
                      <a href="#" class="flex-c-m trans-04 p-lr-25">
                        Ingresar
                                  </a>
                              </div>
                     @endif --}}
        </div>
      </div>

      <div class="wrap-menu-desktop">
        <nav class="limiter-menu-desktop container">

          <!-- Logo desktop -->
          <a href="#" class="logo">
              <img src="images/Logo Eventse-1.svg" alt="IMG-LOGO" style="max-width: 300%; max-height:300%;">
          </a>

          <!-- Menu desktop -->
          <div class="menu-desktop">
            <ul class="main-menu">
              <li class="active-menu">
                <a href="index.html">Categorías</a>
                <ul class="sub-menu">
                  <li><a href="index.html">Salones</a></li>
                  <li><a href="home-02.html">Animación</a></li>
                  <li><a href="home-03.html">Mobiliario</a></li>
                </ul>
              </li>

              <li>
                <a href="product.html">Reservar</a>
              </li>
              <!--class="label1" data-label1="hot"> Label "HOT" para poner arriba cuando haya alguna promo o algo asi-->
              <li>
                <a href="shoping-cart.html">Ofertas de la semana</a>
              </li>

              <li>
                <a href="contact.html">Contacto</a>
              </li>
            </ul>
          </div>

          <!-- Icon header - Buscar - Carrito de compras - Favoritos -->
          <div class="wrap-icon-header flex-w flex-r-m">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
              <i class="zmdi zmdi-search"></i>
            </div>

            <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11"><!--icon-header-noti js-show-cart ES EL ICONO DE NOTIFICACIÓN data-notify="6" ES EL NUMERO DE ARTICULOS EN EL CARRITO-->
              <i class="zmdi zmdi-shopping-cart"></i>
            </div>

            <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
              <i class="zmdi zmdi-favorite-outline"></i>
            </a>
          </div>
        </nav>
      </div>
    </div>

        <!--------------------------------PARTE MOBIL------------------------------->

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
      <!-- Logo moblie -->
      <div class="logo-mobile">
        <a href="index.html"><img src="images/Logo Eventse-1.svg" alt="IMG-LOGO"></a>
      </div>

      <!-- Icon header -->
      <div class="wrap-icon-header flex-w flex-r-m m-r-15">
        <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
          <i class="zmdi zmdi-search"></i>
        </div>

        <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
          <i class="zmdi zmdi-shopping-cart"></i>
        </div>

        <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
          <i class="zmdi zmdi-favorite-outline"></i>
        </a>
      </div>

      <!-- Button show menu -->
      <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
      <ul class="topbar-mobile">
        <li>
          <div class="left-top-bar">
            Free shipping for standard order over $100
          </div>
        </li>

        <li>
          <div class="right-top-bar flex-w h-full">
          <!--<a href="#" class="flex-c-m p-lr-10 trans-04">
              Ayuda
            </a>-->

            <a href="#" class="flex-c-m p-lr-10 trans-04">
              Mi cuenta
            </a>

            <a href="#" class="flex-c-m p-lr-10 trans-04">
              ES
            </a>

            <a href="#" class="flex-c-m p-lr-10 trans-04">
              ARS
            </a>
          </div>
        </li>
      </ul>

      <ul class="main-menu-m">
        <li>
          <a href="index.html">Home</a>
          <ul class="sub-menu-m">
            <li><a href="index.html">Homepage 1</a></li>
            <li><a href="home-02.html">Homepage 2</a></li>
            <li><a href="home-03.html">Homepage 3</a></li>
          </ul>
          <span class="arrow-main-menu-m">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>
        </li>

        <li>
          <a href="product.html">Shop</a>
        </li>

        <li>
          <a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
        </li>

        <li>
          <a href="blog.html">Blog</a>
        </li>

        <li>
          <a href="about.html">About</a>
        </li>

        <li>
          <a href="contact.html">Contact</a>
        </li>
      </ul>
    </div>
    </header>
@endsection

{{-- FORMULARIO PARA DATOS DE LA CUENTA --}}
@section('formulario_cuenta')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top:6.25rem;">
                <span style="text-align:center; color:#3B4AFC;">DATOS DE LA CUENTA</span>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">Apellido</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" lastname="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="nombre@ejemplo.com">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-4 text-center">
                                <button type="submit" class="btn btn-primary" style="background:#3B4AFC; border-color:#3B4AFC; cursor:pointer;">
                                    {{ __('REGISTRARME') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
