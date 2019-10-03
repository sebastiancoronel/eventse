<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @include('head')
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
  	<link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    @include('scripts')
  </head>
  <body>
    <header>
  		<!-- Header desktop -->
  		<div class="container-menu-desktop">
  			<!-- Topbar -->
  			<div class="top-bar">
  				<div class="content-topbar flex-sb-m h-full container">
  					<div class="left-top-bar">
  						Sumá puntos contratando tu primer servicio <a href="#">haciendo click aqui</a>
  					</div>
                      @if (Route::has('login'))
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
  					           @endif
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
      <!--Modal Registro -->
  		<div id="Modal_registro" class="modal fade" tabindex="1" role="dialog">
  			<div class="modal-dialog" role="document">
  			  <div class="modal-content">
  				<div class="modal-header">
  				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  					<span aria-hidden="true">&times;</span>
  				  </button>
  				</div>
  				<div class="modal-body">
  				  <div class="row">
  					<div class="col-md-6">
  	                   <form action="{{ route('register') }}">
  	                        <div class="card-deck">
  	                            <div class="card">
  	                                <div class="card-body" style="text-align:center;" >
  	                                    <h5 class="card-title" style="color:#3B4AFC; font-weight: bold; ">SOY PRESTADOR</h5>
  	                                    <p class="card-text">Dueño de salon, particular,animador, servicios de mobiliario...</p>
  	                                    <br><br>
  	                                    <img src="/images/handshake.png" class="card-img-top" style="margin: 20px auto;  width: 80px; height: 80px;">
  	                                    <br><br><br>
  	                                    <button class="btn btn-primary" type="submit" style="background-color: #3B4AFC; font-weight: bold; ">REGISTRATE</button>
  	                                </div>
  	                            </div>
  	                        </div>
  	                    </form>
  					</div>

  					<div class="col-md-6">
  							<div class="card-deck">
  								<div class="card">
  									<div class="card-body" style="text-align:center;" >
  										<h5 class="card-title" style="color:#1D2680; font-weight: bold;">BUSCO UN SERVICIO</h5>
  										<p class="card-text">Quiero alquilar juegos,busco un salon, necesito animación... </p>
  										<br><br>
  										<img src="/images/happiness.png" class="card-img-top" style="margin: 20px auto; width: 80px; height: 80px;">
  										<br><br>
  										<button class="btn btn-primary" type="button" style="background-color: #1D2680; font-weight: bold;">REGISTRATE</button>
  									</div>
  								</div>
  							  </div>

  					  <span></span>
  						</div>
  				<div class="modal-footer">

  				</div>
  			  </div>
  			</div>
  		  </div>

  		  <script>
  				$('#AbrirModal').on('click', function(){

  				var winSize = {
  				wheight : $(window).height(),
  				wwidth : $(window).width()
  				};
  				var modSize = {
  				mheight : $('#Modal_registro').height(),
  				mwidth : $('#Modal_registro').width()
  				};
  			$('#Modal_registro').css({
  				'padding-top' :  ((winSize.wheight - (modSize.mheight/2))/3),
  			});

  			$('#Modal_registro').modal({
  				backdrop: true,
  				keyboard : false
  			});
  			});
  		  </script>

  		<!--Fin Modal Registro-->
  	</header>
    @yield('welcome')
  </body>
</html>
