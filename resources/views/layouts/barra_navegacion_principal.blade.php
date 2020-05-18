<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('Dependencias.head')

  <style media="screen">
  body{
    overflow-x: hidden;
  }
    /*=============================
     Banners
     ==============================
     */
      #banner{
        background-image: url('../Images/banner_registro.png');
        height: 300px;
      }
      #inmueble{
        background-image: url('../Images/Salon2.jpg');
        height: 200px;
      }
      #juegos{
        background-image: url('../Images/juegos2.png');
        height: 200px;
        background-size: cover;
      }
      #animacion{
        background-image: url('../Images/animacion2.png');
        height: 200px;
        background-size: cover;
      }
      #mobiliario{
        background-image: url('../Images/mobiliario3.png');
        height: 200px;
        background-size: cover;
      }
      #catering{
        background-image: url('../Images/catering1.png');
        height: 200px;
        background-size: cover;
      }
      #iluminacion{
        background-image: url('../Images/iluminacion1.png');
        height: 200px;
        background-size: cover;
      }
      #ornamentacion{
        background-image: url('../Images/Salon2.png');
        height: 200px;
        background-size: cover;
      }
      #musicaDj{
        background-image: url('../Images/musicaDj2.png');
        height: 200px;
        background-size: cover;
      }
      #shows{
        background-image: url('../Images/bandas1.png');
        height: 200px;
        background-size: cover;
      }
      /*=============================
       Fin Banners
       ==============================
       */

      #formulario{
        position: absolute;
        top: 10%;
        left: 0%;
        width: 100%;
      }
  </style>

</head>

  <body class="animsition">
  <header>
  		<!-- Header desktop -->
  		<div class="container-menu-desktop">
  			<!-- Topbar -->
  			<div class="top-bar">
  				<div class="content-topbar flex-sb-m h-full container">
  					<div class="left-top-bar">
  						Sumá puntos contratando tu primer servicio <a href="#">haciendo click aqui</a>
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
  							<li class="active-menu">
  								<a href="index.html">Categorías</a>
  								<ul class="sub-menu">
                    @foreach ($Categorias as $categoria)
                      <li><a href="index.html">{{ $categoria->nombre }}</a></li>
                    @endforeach
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
  								<a href="{{route('Publicar')}}" style="color:#f40082;">Publicar</a>
  							</li>
  						</ul>
  					</div>

  					<!-- Icon header - Buscar - Carrito de compras - Favoritos -->
  					<div class="wrap-icon-header flex-w flex-r-m">
  						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
  							<i class="zmdi zmdi-search"></i>
  						</div>
              {{-- Carrito --}}
  						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-cart" data-notify="1"><!--icon-header-noti ES EL ICONO DE NOTIFICACIÓN data-notify="6" ES EL NUMERO DE ARTICULOS EN EL CARRITO. js-show-cart Es para mostrar el carrito-->
  							<i class="zmdi zmdi-shopping-cart"></i>
  						</div>
              {{-- Favoritos --}}
  						<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11" data-notify="2">
  							<i class="zmdi zmdi-favorite"></i>
  						</a>
              {{-- Notificaciones --}}
              <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11" data-notify="3">
  							<i class="zmdi zmdi-notifications"></i>
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
      @auth
  			<div class=" col-8 wrap-icon-header flex-w flex-r-m m-r-15">
  				{{-- <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
  					<i class="zmdi zmdi-search"></i>
  				</div> --}}
          {{-- Carrito --}}
  				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
  					<i class="zmdi zmdi-shopping-cart"></i>
  				</div>
          {{-- Favoritos --}}
  				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
  					<i class="zmdi zmdi-favorite"></i>
  				</a>
          {{-- Notificaciones --}}
  				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
  					<i class="zmdi zmdi-notifications"></i>
  				</a>
  			</div>
      @endauth
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
  				<li>
  					<a href="index.html">Categorías	</a>
  					<ul class="sub-menu-m">
              <li><a href="index.html">Salones</a></li>
              <li><a href="home-02.html">Animación</a></li>

  					</ul>
  					<span class="arrow-main-menu-m">
  						<i class="fa fa-angle-right" aria-hidden="true"></i>
  					</span>
  				</li>

  				<li>
  					<a href="product.html">Reservar</a>
  				</li>

  				<li>
  					<a href="shoping-cart.html">Ofertas de la semana</a>
  				</li>

  				<li>
  					<a href="blog.html">Contacto</a>
  				</li>

          <li>
            <a href="{{route('Publicar')}}" class="ml-2" style="background-color:#f40082;">Publicar</a>
          </li>
  			</ul>
  		</div>
  </header>

@yield('content')

  <!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
    			<div class="s-full js-hide-cart"></div>

    			<div class="header-cart flex-col-l p-l-65 p-r-25">
    				<div class="header-cart-title flex-w flex-sb-m p-b-8">
    					<span class="mtext-103 cl2">
    						Tu carrito
    					</span>

    					<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
    						<i class="zmdi zmdi-close"></i>
    					</div>
    				</div>

    				<div class="header-cart-content flex-w js-pscroll">
    					<ul class="header-cart-wrapitem w-full">
    						<li class="header-cart-item flex-w flex-t m-b-12">
    							<div class="header-cart-item-img">
    								<img src="images/item-cart-01.jpg" alt="IMG">
    							</div>

    							<div class="header-cart-item-txt p-t-8">
    								<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
    									White Shirt Pleat
    								</a>

    								<span class="header-cart-item-info">
    									1 x $19.00
    								</span>
    							</div>
    						</li>

    						<li class="header-cart-item flex-w flex-t m-b-12">
    							<div class="header-cart-item-img">
    								<img src="images/item-cart-02.jpg" alt="IMG">
    							</div>

    							<div class="header-cart-item-txt p-t-8">
    								<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
    									Converse All Star
    								</a>

    								<span class="header-cart-item-info">
    									1 x $39.00
    								</span>
    							</div>
    						</li>

    						<li class="header-cart-item flex-w flex-t m-b-12">
    							<div class="header-cart-item-img">
    								<img src="images/item-cart-03.jpg" alt="IMG">
    							</div>

    							<div class="header-cart-item-txt p-t-8">
    								<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
    									Nixon Porter Leather
    								</a>

    								<span class="header-cart-item-info">
    									1 x $17.00
    								</span>
    							</div>
    						</li>
    					</ul>

    					<div class="w-full">
    						<div class="header-cart-total w-full p-tb-40">
    							Total: $75.00
    						</div>

    						<div class="header-cart-buttons flex-w w-full">
    							<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
    								Ver carrito
    							</a>

    							<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
    								Continuar compra
    							</a>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
@include('Dependencias.scripts')
</body>
</html>
