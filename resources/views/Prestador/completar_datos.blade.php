@extends('layouts.base_completar_datos_prestadores')

@section('header_completar_datos_prestadores')

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
              <img src="../images/Logo Eventse-1.svg" alt="IMG-LOGO" style="max-width: 300%; max-height:300%;">
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
        <a href="index.html"><img src="../images/Logo Eventse-1.svg" alt="IMG-LOGO"></a>
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

@section('formulario_prestadores')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top:6.25em;">
                <span id="texto_cabecera" style="text-align:center; color:#3B4AFC;">COMPLETA TUS DATOS</span>
                <br>
                <div class="card-body">
                  <div class="row">
                    <div class="row col-md-6 offset-md-4  align-items-center justify-content-center">
                      <input class="col-md-1 col-1" id="radio_particular" name="radio_tipo_cuenta" type="radio" aria-label="Checkbox for following text input" style="" checked="true"> <span>Soy independiente</span>
                    </div>

                   <div class="row col-md-6 offset-md-4 align-items-center justify-content-center">
                     <input class="col-md-1 col-1" id="radio_inmueble" name="radio_tipo_cuenta" type="radio" aria-label="Checkbox for following text input" style=""> <span class="d-none d-sm-block">Quiero ofrecer mi Salón, Finca, Quincho etc..</span> <span class="d-sm-none d-md-none d-lg-none d-xl-none d-display ">Quiero ofrecer mi salón</span>
                   </div>
                 </div><br>
                  <hr>
                  {{---------------------------------------------------- FORMULARIO PARA PARTICULAR ---------------------------------------------------------------------------------}}
                    <form id="formulario_particular" method="POST" action="">
                        @csrf
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
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                    {{---------------------------------------------------- FORMULARIO PARA INMUEBLE ---------------------------------------------------------------------------------}}

                    <form id="formulario_inmueble" method="POST" action="{{route('almacenar_datos_inmueble')}}" style="display:none;">
                        @csrf
                        <div class="form-group row">
                          <div class="row col-md-4 col-form-label text-center align-items-center">
                            <i class="fa fa-home col-md-2" style="color:#3B4AFC;"></i> <span for="Ubicacion" class="" style="color:#3B4AFC;">Datos del lugar</span>
                          </div>
                        </div>
                        {{-- Nombre del inmueble --}}
                        <div class="form-group row">
                          <label for="nombre_fantasia" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del establecimiento') }}</label>

                          <div class="col-md-6">
                            <input id="nombre_fantasia" type="text" class="form-control{{ $errors->has('nombre_fantasia') ? ' is-invalid' : '' }}" name="nombre_fantasia" value="{{ old('nombre_fantasia') }}" required>

                            @if ($errors->has('nombre_fantasia'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nombre_fantasia') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                        {{-- Nombre --}}
                        {{-- <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="nombre" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" required>

                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}
                        {{-- Apellido --}}
                        {{-- <div class="form-group row">
                            <label for="apellido" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="apellido" type="apellido" class="form-control{{ $errors->has('apellido') ? ' is-invalid' : '' }}" name="apellido" required>

                                @if ($errors->has('apellido'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('apellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}
                        {{-- DNI --}}
                        {{-- <div class="form-group row">
                            <label for="dni" class="col-md-4 col-form-label text-md-right">{{ __('DNI') }}</label>

                            <div class="col-md-6">
                                <input id="dni" type="dni" class="form-control{{ $errors->has('dni') ? ' is-invalid' : '' }}" name="dni" required>

                                @if ($errors->has('dni'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dni') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  --}}
                        {{-- Teléfono --}}
                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>

                            <div class="col-md-6">
                                <input id="telefono" type="telefono" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" required>

                                @if ($errors->has('telefono'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                          <div class="row col-md-4 col-form-label text-center align-items-center">
                            <i class="fa fa-map-marker col-md-1" style="color:#3B4AFC;"></i> <span for="Ubicacion" class="" style="color:#3B4AFC;">Dirección</span>
                          </div>
                        </div>

                        {{-- Ubicación --}}

                        {{-- Provincia --}}
                        <div class="form-group row">
                          <label for="Provincia" class="col-md-4 col-form-label text-md-right">Provincia</label>
                          <div class="col-md-6">
                            <select class="custom-select col-md-6" name="select_provincia">
                              <option value="">Santiago del Estero</option>
                              <option value="">Tucumán</option>
                            </select>
                          </div>
                        </div>

                        {{-- Localidad --}}
                        <div class="form-group row">
                          <label for="Localidad" class="col-md-4 col-form-label text-md-right">Localidad</label>
                          <div class="col-md-6">
                            <select class="custom-select col-md-6" name="select_localidad">
                              <option value="">Santiago del estero</option>
                              <option value="">25 de mayo</option>
                            </select>
                          </div>
                        </div>

                        {{-- Calle --}}
                        <div class="form-group row">
                          <label for="calle" class="col-md-4 col-form-label text-md-right">{{ __('Calle') }}</label>

                          <div class="col-md-6">
                            <input id="calle" type="text" class="form-control{{ $errors->has('calle') ? ' is-invalid' : '' }}" name="calle" value="{{ old('calle') }}" required>

                            @if ($errors->has('calle'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('calle') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>

                        {{-- Numero --}}
                        <div class="form-group row">
                          <label for="numero" class="col-md-4 col-form-label text-md-right">{{ __('Numero') }}</label>

                          <div class="col-md-2">
                            <input id="numero" type="text" class="form-control{{ $errors->has('numero') ? ' is-invalid' : '' }}" name="numero" value="{{ old('numero') }}" required>

                            @if ($errors->has('numero'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('numero') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>

                        {{-- Barrio --}}
                        <div class="form-group row">
                          <label for="barrio" class="col-md-4 col-form-label text-md-right">{{ __('Barrio') }}</label>

                          <div class="col-md-6">
                            <input id="barrio" type="text" class="form-control{{ $errors->has('barrio') ? ' is-invalid' : '' }}" name="barrio" value="{{ old('barrio') }}" required>

                            @if ($errors->has('barrio'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('barrio') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-4 text-center">
                                <button type="submit" class="btn btn-primary" style="background:#3B4AFC; border-color:#3B4AFC; cursor:pointer;">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
  $("[name='radio_tipo_cuenta']").change(function(){
    if($("#radio_inmueble").is(':checked')) {
      $("#formulario_particular").css('display','none');
      $("#formulario_inmueble").css('display','block').fadeIn(1000);
      $("#texto_cabecera").text("COMPLETÁ LOS DATOS DE TU ESTABLECIMIENTO");
    } else{
        $("#formulario_particular").css('display','block');
        $("#formulario_inmueble").css('display','none');
        $("#texto_cabecera").text("COMPLETÁ TUS DATOS");

    }
  });
});
</script>
@endsection
