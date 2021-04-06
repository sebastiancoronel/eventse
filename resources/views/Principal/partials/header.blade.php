<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar">
                    {{-- Sumá puntos contratando tu primer servicio <a href="#">haciendo click aqui</a> --}}
                </div>
      @guest
        @if (Route::has('login'))
              <div class="right-top-bar flex-w h-full">
                  <a href="{{url('/register')}}" class="flex-c-m trans-04 p-lr-25" style="color:white;" onmouseover="this.style.color= '#717fe0'" onmouseout="this.style.color= 'white'" >
                      Registrate
                  </a>

                  <a href="{{url('/login')}}" class="flex-c-m trans-04 p-lr-25" style="color:white;" onmouseover="this.style.color= '#717fe0'" onmouseout="this.style.color= 'white'" >
                      Ingresar
                  </a>
              </div>
           @endif
      @endguest
      @auth
        <div class="d-flex align-items-center">
          <span class="ml-5">
            <div class="dropdown" style="z-index: 1200;">
                <!-- Nombre del usuario -->
                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color:white;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <!-- Menú -->
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <!-- Mi cuenta -->
                  <div class="dropdown-item">
                    <a href="{{ url('/home') }}" class="trans-04 text-dark" onmouseover="this.style.color= '#717fe0'" onmouseout="this.style.color= 'white'" >Mi cuenta</a>
                  </div>

                  <!-- Logout -->
                  <div class="dropdown-item">
                    <a href="{{ route('logout') }}" class="trans-04 text-dark" onmouseover="this.style.color= '#717fe0'" onmouseout="this.style.color= 'white'" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar sesión</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </div>

                </div>
                <!--Fin Menú-->
            </div>
          </span>
        </div>
      @endauth
            </div>
        </div>

        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop container">
                <!-- Logo desktop -->
                <a href="{{route('Principal')}}" class="logo">
                        <img src="{{asset('images/Logo Eventse-1 ORIGINAL.svg')}}" alt="IMG-LOGO" style="max-width: 150%; max-height:150%;">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        {{-- <li class="active-menu">
                            <a href="index.html">Categorías</a>
                            <ul class="sub-menu">
                            @foreach ($Categorias as $categoria)
                                <li><a href="index.html">{{ $categoria->nombre }}</a></li>
                            @endforeach
                            </ul>
                        </li> --}}

                        <li>
                            <a href="{{route('ServiciosPublicados')}}">Reservar</a>
                        </li>
                        <!--class="label1" data-label1="hot"> Label "HOT" para poner arriba cuando haya alguna promo o algo asi-->
                        {{-- <li>
                            <a href="shoping-cart.html">Ofertas de la semana</a>
                        </li> --}}

                        <li>
                            <a href="{{route('Publicar')}}" style="color:#f40082;">Publicar</a>
                        </li>
                    </ul>
                </div>

                <!-- Icon header - Buscar - Carrito de compras - Favoritos -->
                <div class="wrap-icon-header flex-w flex-r-m">
                    {{-- <small>Búsqueda avanzada</small> --}}
                    {{-- <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div> --}}

                    {{-- Carrito --}}
                    <div id="carrito_escritorio" class="icon-header-item icon-header-noti cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-cart" data-notify="{{ $CantidadServicios }}"> 
                        {{-- <i class="zmdi zmdi-shopping-cart"></i> --}}
                        <img src=" {{asset('images/box1.png')}} " style=" width: 26px; height: 26px; " alt="">
                    </div>

                    {{-- Favoritos --}}
                    {{-- <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                        <i class="zmdi zmdi-favorite"></i>
                    </a> --}}

                    {{-- Notificaciones --}}
                    <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-notification " data-notify="{{ $Notificaciones == null ? '0' : count($Notificaciones) }}">
                        <i class="zmdi zmdi-notifications">
                        </i>
                    </a>
                    
                </div>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="row wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile col-2">
    <a href="{{route('Principal')}}" class="logo">
        <img src="{{asset('images/Logo Eventse-1 ORIGINAL.svg')}}" alt="IMG-LOGO" style="max-width: 150%; max-height:150%;">
    </a>
        </div>

        <!-- Icon header -->

        <div class=" col-8 wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div>
    {{-- Carrito --}}
            <div id="carrito_movil" class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="{{ $CantidadServicios }}">
                <i class="zmdi zmdi-shopping-cart"></i>
            </div>
    {{-- Favoritos --}}
            {{-- <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
                <i class="zmdi zmdi-favorite"></i>
            </a> --}}
    {{-- Notificaciones --}}
            <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-notification" data-notify="0">
                <i class="zmdi zmdi-notifications"></i>
            </a>
        </div>

<!-- Formulario de Registro -->
@guest
  @if (Route::has('login'))
  <div class="row col-8">
    <a href="{{url('/register')}}" class="col-6 text-dark">
      Registrate
    </a>
      {{-- @auth
      <a href="{{ url('/home') }}" class="flex-c-m trans-04 p-lr-25">Mi cuenta</a>
      @endauth --}}
    <a href="{{url('/login')}}" class="col-6 text-dark">
      Ingresar
    </a>
  </div>
   @endif
@endguest
        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="main-menu-m">
    <li>
      <a href="{{route('home')}}">Mi cuenta</a>
    </li>
            {{-- <li>
                <a href="index.html">Categorías	</a>
                <ul class="sub-menu-m">
        @foreach ($Categorias as $categoria)
          <li><a href="index.html">{{ $categoria->nombre }}</a></li>
        @endforeach

                </ul>
                <span class="arrow-main-menu-m">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </span>
            </li> --}}

            <li>
                <a href="{{route('ServiciosPublicados')}}">Reservar</a>
            </li>

            <li>
                <a href="shoping-cart.html">Ofertas de la semana</a>
            </li>

            <li>
                <a href="blog.html">Contacto</a>
            </li>

    <li>
      <a href="{{route('Publicar')}}" class="btn-rounded ml-2" style="background-color:#f40082;">Publicar</a>
    </li>
        </ul>
    </div>
</header>