<!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    @include('head')
    </head>
    @include('scripts')
    <body class="hold-transition sidebar-mini layout-fixed">
      <div>
      <header>
          <!-- Header desktop -->
          <div class="container-menu-desktop">

            <div class="wrap-menu-desktop row" style="top: 0px;">
              <!-- Logo desktop -->
              <a href="{{route('principal')}}" class="logo ml-5 mt-3">
                <img src="../images/Logo Eventse-1 ORIGINAL.svg" style="max-width: 150%; max-height:150%;" alt="IMG-LOGO">
              </a>
              {{-- <div class="col-md-2 ml-2">
              </div> --}}
              <!-- Menu desktop -->
              <div class="row col-md-8 menu-desktop d-flex justify-content-start">
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
                    <a href="contact.html">Contacto</a>
                  </li>
                </ul>
              </div>
              <!-- Right navbar links -->
              <div class="row col-md-2 mt-4">
                  <ul class="ml-auto row">
                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown col-md-6">
                      <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments text-muted" style="font-size:20px;"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                          <!-- Message Start -->
                          <div class="media">
                            <img src="/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
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
                            <img src="/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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

                        <a href="#" class="dropdown-item">
                          <!-- Message Start -->
                          <div class="media">
                            <img src="/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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

                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                      </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown col-md-6">
                      <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell text-muted" style="font-size:20px;"></i>
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
            </div>
          </div>
      </header>
      </div>

    <div class="wrapper">
      <!-- Navbar escritorio -->
      <div class="d-none d-sm-block">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom m-t-90">
          <!-- Left navbar links -->

            {{-- <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
              <div class="input-group input-group-sm">
                <!--<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">-->
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form> --}}
        </nav>
      </div>
      <!-- /.navbar escritorio -->

      <!-- Navbar movil -->
      <div class="d-md-none d-lg-none d-xl-none d-xs-block d-sm-block">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
             <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars" style="font-size:40px;"></i></a>
             </li>
          </ul>
        <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments" style="font-size:30px;"></i>
                <span class="badge badge-danger navbar-badge">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                  <!-- Message Start -->
                  <div class="media">
                    <img src="/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
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
                    <img src="/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
                    <img src="/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
                <i class="far fa-bell" style="font-size:30px;"></i>
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
      </div>
      <!-- /.navbar movil -->

      {{-- MENÙ ESCRITORIO --}}
      <!-- Main Sidebar Container -->
        <aside class="d-none d-sm-block main-sidebar sidebar-dark-primary elevation-4 mt-5 pt-5">
          <ul class="navbar-nav text-left ml-2 d-none d-sm-block">
            <li class="nav-item">
              <a id="hamburguesa" class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars text-white"></i></a>
            </li>
          </ul>
         <!-- Brand Logo -->
         <div class="brand-link text-left">

           <!-- <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
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
                    <!-- INICIO -->
                    <li class="nav-item has-treeview">
                     <a href="{{url('/')}}" class="nav-link">
                       <i class="nav-icon fas fa-home"></i>
                       <p>
                         Inicio
                       </p>
                     </a>
                   </li>
                    <!-- RESUMEN -->
                    <li class="nav-item has-treeview">
                     <a href="{{route('Resumen')}}" class="nav-link">
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
                     <a href="{{route('MisAlquileres')}}" class="nav-link">
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
           </ul>
           </nav>
           <!-- /.sidebar-menu -->
         </div>
         <!-- /.sidebar -->
       </aside>
  {{-- FIN MENÚ ESCRITORIO --}}
  {{-- MENÙ MÓVIL --}}
  <!-- Main Sidebar Container -->
    <aside class="d-md-none d-lg-none d-xl-none d-xs-block d-sm-block main-sidebar sidebar-dark-primary elevation-4">
      <ul class="navbar-nav text-left ml-2 d-none d-sm-block">
        <li class="nav-item">
          <a id="hamburguesa" class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars text-white"></i></a>
        </li>
      </ul>
     <!-- Brand Logo -->
     <div class="brand-link text-left">

       <!-- <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
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
                <!-- INICIO -->
                <li class="nav-item has-treeview">
                 <a href="#" class="nav-link">
                   <i class="nav-icon fas fa-home"></i>
                   <p>
                     Inicio
                   </p>
                 </a>
               </li>
                <!-- RESUMEN -->
                <li class="nav-item has-treeview">
                 <a href="{{route('Resumen')}}" class="nav-link">
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
                 <a href="{{route('MisAlquileres')}}" class="nav-link">
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
       </ul>
       </nav>
       <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
   </aside>
{{-- FIN MENÚ MÓVIL --}}
    <!--//Contenido-->
    <div class="content-wrapper">
      @yield('content')
    </div>
    <!--//Fin Contenido-->

    {{-- <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">

    </aside>
    <!-- /.control-sidebar --> --}}
    </div>
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

    <script>
    //Cambiar estilos del menu hamburguesa al clickearlo
      $("#hamburguesa").on('click',function(){
        $(this).animate({
          opacity: 0.25
        });
        if ($(this).css('opacity') == 0.25) {
          $(this).animate({
            opacity: 1
          });
        }
      });
    </script>
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
