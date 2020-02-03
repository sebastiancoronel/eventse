  {{-- BARRA NAV --}}
  <!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @include('head')
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="../css/util.css">
    	<link rel="stylesheet" type="text/css" href="../css/main.css">
      <!--===============================================================================================-->
    </head>
    @include('scripts')
    <body class="hold-transition sidebar-mini layout-fixed">
      <div>
      <header>
      		<!-- Header desktop -->
      		<div class="container-menu-desktop">
      			<!-- Topbar -->
      			{{-- <div class="top-bar">
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
      			</div> --}}

      			<div class="wrap-menu-desktop" style="top: 0px;">
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
      	                                    <img src="..//images/handshake.png" class="card-img-top" style="margin: 20px auto;  width: 80px; height: 80px;">
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
      										<img src="../images/happiness.png" class="card-img-top" style="margin: 20px auto; width: 80px; height: 80px;">
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
      		<!--Fin Modal Registro-->
      </header>

            @yield('content')
      </div>

    <div class="wrapper m-t-90">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars" style="font-size:40px;"></i></a>
          </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
          <div class="input-group input-group-sm">
            <!--<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">-->
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-comments"></i>
              <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Brad Diesel
                      <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">Call me whenever you can...</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      John Pierce
                      <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">I got your message bro</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Nora Silvester
                      <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">The subject goes here</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
          </li>
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header">15 Notifications</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      {{-- MENÙ --}}
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
 <!-- Brand Logo -->
 <div class="brand-link text-left">
   <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8"> -->
   <span class="brand-text font-weight-light text-left">Mi cuenta</span>
   <br>
   <small class="brand-text">¡Hola Juan Perez!</small>
 </div>

 <!-- Sidebar -->
 <div class="sidebar">
   <!-- Sidebar user panel (optional) -->
   <div class="mt-0 pb-0 mb-0 d-flex">
     <!-- <div class="image">
       <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
     </div>
     <div class="info">
       <a href="#" class="d-block">Usuario</a>
     </div> -->
   </div>
   <!-- Sidebar Menu -->
   <nav class="mt-2">
     <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
       <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
            <!-- RESUMEN -->
            <li class="nav-item has-treeview">
             <a href="#" class="nav-link">
               <i class="nav-icon fas fa-list-alt"></i>
               <p>
                 Resumen
               </p>
             </a>
           </li>
            <!-- VENTAS -->
       <li class="nav-item has-treeview">
         <a href="#" class="nav-link">
           <i class="nav-icon fas fa-store"></i>
           <p>
             Alquileres y Reservas
             <i class="right fas fa-angle-left"></i>
           </p>
         </a>
         <ul class="nav nav-treeview">
           <li class="nav-item">
             <a href="pages/charts/chartjs.html" class="nav-link">
               <i class="nav-icon"></i>
               <p>Publicaciones</p>
             </a>
           </li>
           <li class="nav-item">
             <a href="pages/charts/flot.html" class="nav-link">
               <i class="nav-icon"></i>
               <p>Preguntas hacia tí</p>
             </a>
           </li>
           <li class="nav-item">
             <a href="pages/charts/inline.html" class="nav-link">
               <i class="nav-icon"></i>
               <p>Mis alquileres</p>
             </a>
           </li>
         </ul>
       </li>
     <!-- COMPRAS -->
     <li class="nav-item has-treeview">
       <a href="#" class="nav-link">
         <i class="nav-icon fas fa-shopping-bag"></i>
         <p>
           Compras
           <i class="right fas fa-angle-left"></i>
         </p>
       </a>
       <ul class="nav nav-treeview">
         <li class="nav-item">
           <a href="pages/charts/chartjs.html" class="nav-link">
             <i class="nav-icon"></i>
             <p>Favoritos</p>
           </a>
         </li>
         <li class="nav-item">
           <a href="pages/charts/flot.html" class="nav-link">
             <i class="nav-icon"></i>
             <p>Preguntas que hiciste</p>
           </a>
         </li>
         <li class="nav-item">
           <a href="pages/charts/inline.html" class="nav-link">
             <i class="nav-icon"></i>
             <p>Mis compras</p>
           </a>
         </li>
         <li class="nav-item">
           <a href="pages/charts/inline.html" class="nav-link">
             <i class="nav-icon"></i>
             <p>Presupuestos</p>
           </a>
         </li>
       </ul>
     </li>

     <!-- Configuración -->
     <li class="nav-item has-treeview">
       <a href="#" class="nav-link">
         <i class="nav-icon fas fa-cog"></i>
         <p>
           Configuración
           <i class="right fas fa-angle-left"></i>
         </p>
       </a>
       <ul class="nav nav-treeview">
         <li class="nav-item">
           <a href="pages/charts/chartjs.html" class="nav-link">
             <i class="nav-icon"></i>
             <p>Mis datos</p>
           </a>
         </li>
         <li class="nav-item">
           <a href="pages/charts/flot.html" class="nav-link">
             <i class="nav-icon"></i>
             <p>Preferencias de venta</p>
           </a>
         </li>
         <li class="nav-item">
           <a href="pages/charts/inline.html" class="nav-link">
             <i class="nav-icon"></i>
             <p>Datos de mis colaboradores</p>
           </a>
         </li>
       </ul>
     </li>

   </nav>
   <!-- /.sidebar-menu -->
 </div>
 <!-- /.sidebar -->
</aside>

    <!--//Contenido-->
    <div class="content-wrapper">
      <div class="card p-5 m-5 bg-warning">
        <div class="card-body">
          Hola
          <button class="btn btn-primary" type="button" name="button">Aceptar</button>
        </div>
      </div>
    </div>
    <!--//Fin Contenido-->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
  </body>
  <!--//Fin Contenido-->

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

  {{-- FIN BARRA NAV --}}
