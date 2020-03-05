<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @include('head')
  </head>
  @include('scripts')
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
            @guest
              @if (Route::has('login'))
  						<div class="right-top-bar flex-w h-full">
  							<a id="AbrirModal" href="#" class="flex-c-m trans-04 p-lr-25" style="color:white;" onmouseover="this.style.color= '#717fe0'" onmouseout="this.style.color= 'white'" >
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
                <span>
                  <a href="{{ url('/home') }}" class="flex-c-m trans-04 p-lr-25" style="color:white;" onmouseover="this.style.color= '#717fe0'" onmouseout="this.style.color= 'white'" >Mi cuenta</a>
                </span>
                <span class="ml-5">
                  <a href="{{ route('logout') }}" class="flex-c-m trans-04 p-lr-25" style="color:white;" onmouseover="this.style.color= '#717fe0'" onmouseout="this.style.color= 'white'" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar sesión</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </span>
              </div>


            @endauth
  				</div>
  			</div>

  			<div class="wrap-menu-desktop">
  				<nav class="limiter-menu-desktop container">

  					<!-- Logo desktop -->
  					<a href="#" class="logo">
  							<img src="../images/Logo Eventse-1 ORIGINAL.svg" alt="IMG-LOGO" style="max-width: 150%; max-height:150%;">
  					</a>

  					<!-- Menu desktop -->
  					<div class="menu-desktop">
  						<ul class="main-menu">
  							<li class="active-menu">
  								<a href="index.html">Categorías</a>
  								<ul class="sub-menu">
  									<li><a href="index.html">Salones</a></li>
                    <li><a href="home-02.html">Juegos</a></li>
  									<li><a href="home-02.html">Animación</a></li>
  									<li><a href="home-03.html">Mobiliario</a></li>
                    <li><a href="home-03.html">Servicios de catering</a></li>
                    <li><a href="home-03.html">Iluminación</a></li>
                    <li><a href="home-03.html">Música & DJ´s</a></li>
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
  								<a href="contact.html">Publicar servicios</a>
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

  				<!-- PARTE MOBIL -->

  		<!-- Header Mobile -->
  		<div class="wrap-header-mobile">
  			<!-- Logo moblie -->
  			<div class="logo-mobile">
          <a href="#" class="logo">
              <img src="../images/Logo Eventse-1 ORIGINAL.svg" alt="IMG-LOGO" style="max-width: 150%; max-height:150%;">
          </a>
  			</div>

  			<!-- Icon header -->
      @auth
  			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
  				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
  					<i class="zmdi zmdi-search"></i>
  				</div>

  				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
  					<i class="fas fa-shopping-cart"></i>
  				</div>

  				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
  					<i class="fas fa-heart"></i>
  				</a>
  			</div>
      @endauth
      <!-- Formulario de Registro -->
      @guest
        @if (Route::has('login'))
        <div class="right-top-bar flex-w h-full">
          <a id="AbrirModalMovil" href="#" class="flex-c-m trans-04 p-lr-25 text-dark">
            Registrate
          </a>
            {{-- @auth
            <a href="{{ url('/home') }}" class="flex-c-m trans-04 p-lr-25">Mi cuenta</a>
            @endauth --}}
          <a href="{{url('/login')}}" class="flex-c-m trans-04 p-lr-25 text-dark">
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
  			{{-- <ul class="topbar-mobile">
  				<li>
  					<div class="left-top-bar">
  						Escribir algo aquí
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
  			</ul> --}}

  			<ul class="main-menu-m">
  				<li>
  					<a href="index.html">Categorías	</a>
  					<ul class="sub-menu-m">
              <li><a href="index.html">Salones</a></li>
              <li><a href="home-02.html">Animación</a></li>
              <li><a href="home-03.html">Mobiliario</a></li>
              <li><a href="home-03.html">Servicios de catering</a></li>
              <li><a href="home-03.html">Iluminación</a></li>
              <li><a href="home-03.html">Música & DJ´s</a></li>
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
            <a href="contact.html">Publicar servicios</a>
          </li>
  			</ul>
  		</div>
      <!--Modal Registro -->
        <div id="Modal_registro" class="modal fade" tabindex="1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="p-1">
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
                          <div class="card-body" style="text-align:center;">
                          <h5 class="card-title" style="color:#3B4AFC; font-weight: bold;">SOY PRESTADOR</h5>
                          <p class="card-text">Dueño de salon, particular,animador, servicios de mobiliario...</p>
                          <br><br>
                          <i class="far fa-handshake" style="font-size: 40px;"></i>
                          <br><br><br>
                            <button class="btn btn-primary" type="submit" style="background-color: #3B4AFC;border-color: #3B4AFC; font-weight: bold; ">REGISTRATE</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <form class="" action="{{ route('register') }}">
                      <div class="card-deck">
                        <div class="card">
                          <div class="card-body" style="text-align:center;" >
                            <h5 class="card-title" style="color:#1D2680; font-weight: bold;">BUSCO UN SERVICIO</h5>
                            <p class="card-text">Quiero alquilar juegos,busco un salon, necesito animación...</p>
                            <br><br>
                            <i class="fas fa-glass-cheers" style="font-size:40px;"></i>
                            <br><br><br>
                            <button class="btn btn-primary" type="submit" style="background-color: #1D2680;border-color: #1D2680; font-weight: bold;">REGISTRATE</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
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

        $('#AbrirModalMovil').on('click', function(){

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

        @yield('content')


  </body>
  {{-- Scripts --}}
  <!--===============================================================================================-->
    {{-- <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="../adminlte/dist/js/adminlte.js"></script>

  <!--===============================================================================================-->
    <script src="../vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
    <script src="../vendor/bootstrap/js/popper.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script> --}}
  <!--===============================================================================================-->
    <script src="../vendor/select2/select2.min.js"></script>
    <script>
      $(".js-select2").each(function(){
        $(this).select2({
          minimumResultsForSearch: 20,
          dropdownParent: $(this).next('.dropDownSelect2')
        });
      })
    </script>
  <!--===============================================================================================-->
    <script src="../vendor/daterangepicker/moment.min.js"></script>
    <script src="../vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
    <script src="../vendor/slick/slick.min.js"></script>
    <script src="../js/slick-custom.js"></script>
  <!--===============================================================================================-->
    <script src="../vendor/parallax100/parallax100.js"></script>
    <script>
          $('.parallax100').parallax100();
    </script>
  <!--===============================================================================================-->
    <script src="../vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
    <script>
      $('.gallery-lb').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
              delegate: 'a', // the selector for gallery item
              type: 'image',
              gallery: {
                enabled:true
              },
              mainClass: 'mfp-fade'
          });
      });
    </script>
  <!--===============================================================================================-->
    <script src="../vendor/isotope/isotope.pkgd.min.js"></script>
  <!--===============================================================================================-->
    <script src="../vendor/sweetalert/sweetalert.min.js"></script>
    <script>
      $('.js-addwish-b2').on('click', function(e){
        e.preventDefault();
      });

      $('.js-addwish-b2').each(function(){
        var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
        $(this).on('click', function(){
          swal(nameProduct, "is added to wishlist !", "success");

          $(this).addClass('js-addedwish-b2');
          $(this).off('click');
        });
      });

      $('.js-addwish-detail').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

        $(this).on('click', function(){
          swal(nameProduct, "is added to wishlist !", "success");

          $(this).addClass('js-addedwish-detail');
          $(this).off('click');
        });
      });

      /*---------------------------------------------*/

      $('.js-addcart-detail').each(function(){
        var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
        $(this).on('click', function(){
          swal(nameProduct, "is added to cart !", "success");
        });
      });

    </script>
  <!--===============================================================================================-->
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
      $('.js-pscroll').each(function(){
        $(this).css('position','relative');
        $(this).css('overflow','hidden');
        var ps = new PerfectScrollbar(this, {
          wheelSpeed: 1,
          scrollingThreshold: 1000,
          wheelPropagation: false,
        });

        $(window).on('resize', function(){
          ps.update();
        })
      });
    </script>
  <!--===============================================================================================-->
    <script src="../js/main.js"></script>

    {{-- FIN SCRIPTS --}}
</html>
