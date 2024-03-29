<!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @include('Principal.partials.head')
      @include('AdminLTE.partials.head_adminlte')
      <style media="screen">
        #link_violeta {
          color: #717fe0 !important;
        }
        /* Efecto campanita */
        .bell{
          display:block;
          -webkit-animation: ring 3s .7s ease-in-out infinite;
          -webkit-transform-origin: 50% 4px;
          -moz-animation: ring 3s .7s ease-in-out infinite;
          -moz-transform-origin: 50% 4px;
          animation: ring 3s .7s ease-in-out infinite;
          transform-origin: 50% 4px;
        }

        @-webkit-keyframes ring {
          0% { -webkit-transform: rotateZ(0); }
          1% { -webkit-transform: rotateZ(30deg); }
          3% { -webkit-transform: rotateZ(-28deg); }
          5% { -webkit-transform: rotateZ(34deg); }
          7% { -webkit-transform: rotateZ(-32deg); }
          9% { -webkit-transform: rotateZ(30deg); }
          11% { -webkit-transform: rotateZ(-28deg); }
          13% { -webkit-transform: rotateZ(26deg); }
          15% { -webkit-transform: rotateZ(-24deg); }
          17% { -webkit-transform: rotateZ(22deg); }
          19% { -webkit-transform: rotateZ(-20deg); }
          21% { -webkit-transform: rotateZ(18deg); }
          23% { -webkit-transform: rotateZ(-16deg); }
          25% { -webkit-transform: rotateZ(14deg); }
          27% { -webkit-transform: rotateZ(-12deg); }
          29% { -webkit-transform: rotateZ(10deg); }
          31% { -webkit-transform: rotateZ(-8deg); }
          33% { -webkit-transform: rotateZ(6deg); }
          35% { -webkit-transform: rotateZ(-4deg); }
          37% { -webkit-transform: rotateZ(2deg); }
          39% { -webkit-transform: rotateZ(-1deg); }
          41% { -webkit-transform: rotateZ(1deg); }

          43% { -webkit-transform: rotateZ(0); }
          100% { -webkit-transform: rotateZ(0); }
        }

        @-moz-keyframes ring {
          0% { -moz-transform: rotate(0); }
          1% { -moz-transform: rotate(30deg); }
          3% { -moz-transform: rotate(-28deg); }
          5% { -moz-transform: rotate(34deg); }
          7% { -moz-transform: rotate(-32deg); }
          9% { -moz-transform: rotate(30deg); }
          11% { -moz-transform: rotate(-28deg); }
          13% { -moz-transform: rotate(26deg); }
          15% { -moz-transform: rotate(-24deg); }
          17% { -moz-transform: rotate(22deg); }
          19% { -moz-transform: rotate(-20deg); }
          21% { -moz-transform: rotate(18deg); }
          23% { -moz-transform: rotate(-16deg); }
          25% { -moz-transform: rotate(14deg); }
          27% { -moz-transform: rotate(-12deg); }
          29% { -moz-transform: rotate(10deg); }
          31% { -moz-transform: rotate(-8deg); }
          33% { -moz-transform: rotate(6deg); }
          35% { -moz-transform: rotate(-4deg); }
          37% { -moz-transform: rotate(2deg); }
          39% { -moz-transform: rotate(-1deg); }
          41% { -moz-transform: rotate(1deg); }

          43% { -moz-transform: rotate(0); }
          100% { -moz-transform: rotate(0); }
        }

        @keyframes ring {
          0% { transform: rotate(0); }
          1% { transform: rotate(30deg); }
          3% { transform: rotate(-28deg); }
          5% { transform: rotate(34deg); }
          7% { transform: rotate(-32deg); }
          9% { transform: rotate(30deg); }
          11% { transform: rotate(-28deg); }
          13% { transform: rotate(26deg); }
          15% { transform: rotate(-24deg); }
          17% { transform: rotate(22deg); }
          19% { transform: rotate(-20deg); }
          21% { transform: rotate(18deg); }
          23% { transform: rotate(-16deg); }
          25% { transform: rotate(14deg); }
          27% { transform: rotate(-12deg); }
          29% { transform: rotate(10deg); }
          31% { transform: rotate(-8deg); }
          33% { transform: rotate(6deg); }
          35% { transform: rotate(-4deg); }
          37% { transform: rotate(2deg); }
          39% { transform: rotate(-1deg); }
          41% { transform: rotate(1deg); }

          43% { transform: rotate(0); }
          100% { transform: rotate(0); }
        }
        .my-custom-scrollbar {
          position: relative;
          height: 250px;
          overflow: auto;
        }
        .card-img-35 {
          width: 35px;
        }
        .mt-3p {
          margin-top: 3px;
        }
      </style>
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
      <div>
        @include('Principal.Partials.header')
      </div>

      <div class="wrapper" style="background:#f4f6f9;">
        <!-- Navbar movil -->
        <div class="d-md-none d-lg-none d-xl-none d-xs-block d-sm-block">
          <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom text-white" style="background:#717fe0;">
            <!-- Left navbar links (Menú Hamburguesa) -->
            <ul class="navbar-nav d-flex align-items-center">
              <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars text-white" style="font-size:30px;"></i></a>
              </li>
              <li class="mt-2">Mi cuenta</li>
            </ul>
          <!-- Right navbar links -->
          </nav>
        </div>
        <!-- /.navbar movil -->

        {{-- MENÙ ESCRITORIO --}}
        <aside class="d-none d-sm-block main-sidebar sidebar-dark-primary elevation-4 mt-5 pt-5" style="background-color:#717fe0; z-index:1;">
          <!-- Brand Logo -->
          <div class="brand-link text-left">
            <!-- <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                  style="opacity: .8"> -->
            <span class="brand-text font-weight-light text-left">Mi cuenta</span>
            <br>
            @php
              $name = Auth::user()->name;
              $lastname = Auth::user()->lastname;
            @endphp
            <small class="brand-text">¡Hola {{ $name }} {{ $lastname }}!</small>
          </div>

          <div class="d-flex justify-content-end">
              <a id="hamburguesa" class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars text-white"></i></a>
          </div>

          <!-- Sidebar -->
          <div class="sidebar bg-white">
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
                  <!-- INICIO -->
                  <li class="nav-item has-treeview">
                      <a href="{{url('/')}}" class="nav-link">
                        <i class="nav-icon zmdi zmdi-home"></i>
                        <p>
                          Inicio
                        </p>
                      </a>
                  </li>

                  {{-- Presupuestos --}}
                  @if (Auth::user()->rol != 'Administrador')
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="zmdi zmdi-assignment"></i>
                        <p>
                          Presupuestos
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        @if ( Auth::user()->rol == 'Prestador' )
                          <li class="nav-item">
                            <a href=" {{ route('MostrarPresupuestosSolicitados') }} " class="nav-link">
                              <i class="nav-icon"></i>
                              <p> Solicitados </p>
                            </a>
                          </li>
                        @endif
                        
                        @if ( Auth::user()->rol != 'Administrador' )
                          <li class="nav-item">
                            <a href=" {{ route('MostrarRespuestasPresupuestos') }} " class="nav-link">
                              <i class="nav-icon"></i>
                              <p> Respuestas </p>
                            </a>
                          </li>
                        @endif
                      </ul>
                    </li>
                  @endif
                  
                  {{-- Preguntas --}}
                  @if (Auth::user()->rol != 'Administrador')
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="zmdi zmdi-assignment"></i>
                        <p>
                          Preguntas
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        @if ( Auth::user()->rol == 'Prestador' )
                          <li class="nav-item has-treeview">
                            <a href="{{ route('MostrarPreguntasRecibidas') }}" class="nav-link">
                              <i class="nav-icon zmdi zmdi-format-subject"></i>
                              <p>
                                Preguntas recibidas
                              </p>
                            </a>
                          </li>
                        @endif

                        <li class="nav-item has-treeview">
                          <a href=" {{route('MostrarRespuestasRecibidas')}} " class="nav-link">
                            <i class="nav-icon zmdi zmdi-format-subject"></i>
                            <p>
                              Respuestas recibidas
                            </p>
                          </a>
                        </li>
                      </ul>
                    </li>
                  @endif

                  @if ( Auth::user()->rol != 'Administrador' )
                    @if ( Auth::user()->rol == 'Prestador' )
                      <li class="nav-item has-treeview">
                        <a href=" {{route('MostrarReservasPrestador')}} " class="nav-link">
                          <i class="nav-icon zmdi zmdi-format-subject"></i>
                          <p>
                            Contrataciones
                          </p>
                        </a>
                      </li>
                    @endif

                    <li class="nav-item has-treeview">
                      <a href=" {{route('MostrarReservasCliente')}} " class="nav-link">
                        <i class="nav-icon zmdi zmdi-format-subject"></i>
                        <p>
                          Mis Reservas
                        </p>
                      </a>
                    </li>
                  @endif

                  @if ( Auth::user()->rol == 'Prestador' )
                    <li class="nav-item has-treeview">
                      <a href=" {{route('MostrarMisServicios')}} " class="nav-link">
                        <i class="nav-icon zmdi zmdi-format-subject"></i>
                        <p>
                          Publicaciones
                        </p>
                      </a>
                    </li>
                  @endif

                  {{-- Admin --}}
                  @if ( Auth::check() )
                    @if ( Auth::user()->rol == 'Administrador' )
                      <!-- Categorías -->
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon zmdi zmdi zmdi-case-check"></i>
                          <p>
                            Categorías
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="{{route('CrearCategorias')}}" class="nav-link">
                              <i class="nav-icon"></i>
                              <p>Gestionar</p>
                            </a>
                          </li>
                        </ul>
                      </li>

                      <!-- Moderaciones -->
                      <li class="nav-item has-treeview">
                        <a href="{{route('ListarServiciosModerar')}}" class="nav-link">
                          <i class="nav-icon zmdi zmdi-eye"></i>
                          <p>
                            Moderar
                          </p>
                        </a>
                      </li>

                      <!-- Características -->
                      {{-- <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon zmdi zmdi zmdi-case-check"></i>
                          <p>
                            Características
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="{{route('CrearCaracteristicas')}}" class="nav-link">
                              <i class="nav-icon"></i>
                              <p>Gestionar</p>
                            </a>
                          </li>
                        </ul>
                      </li> --}}
                    @endif
                  @endif

                  <li class="nav-item has-treeview">
                    <a href=" {{ route('CreateModificarDatos') }} " class="nav-link">
                      <i class="nav-icon zmdi zmdi-settings"></i>
                      <p>
                      Modificar datos
                      </p>
                    </a>
                  </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>
        {{-- FIN MENÚ ESCRITORIO --}}

        {{-- MENÚ MÓVIL --}}
          <!-- Main Sidebar Container -->
            <aside class="d-md-none d-lg-none d-xl-none d-xs-block d-sm-block main-sidebar sidebar-dark-primary elevation-4">
              <ul class="navbar-nav text-left ml-2 d-none d-sm-block">
                <li class="nav-item">
                  <a id="hamburguesa" class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars text-white"></i></a>
                </li>
              </ul>
              <!-- Brand Logo -->
              <div class="brand-link text-left text-white" style="background: #717fe0;">

                {{-- <!-- <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                      style="opacity: .8"> -->
                <span class="brand-text font-weight-light text-left">Mi cuenta</span> --}}
                <br>
                <small class="brand-text">¡Hola {{ $name }} {{ $lastname }}!</small>
              </div>

              <!-- Sidebar -->
          <div class="sidebar bg-white">
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
                  <!-- INICIO -->
                  <li class="nav-item has-treeview">
                      <a href="{{url('/')}}" class="nav-link">
                        <i class="nav-icon zmdi zmdi-home"></i>
                        <p>
                          Inicio
                        </p>
                      </a>
                  </li>

                  {{-- Presupuestos --}}
                  @if (Auth::user()->rol != 'Administrador')
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="zmdi zmdi-assignment"></i>
                      <p>
                        Presupuestos
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      @if ( Auth::user()->rol == 'Prestador' )
                        <li class="nav-item">
                          <a href=" {{ route('MostrarPresupuestosSolicitados') }} " class="nav-link">
                            <i class="nav-icon"></i>
                            <p> Solicitados </p>
                          </a>
                        </li>
                      @endif
                      
                      @if ( Auth::user()->rol != 'Administrador' )
                        <li class="nav-item">
                          <a href=" {{ route('MostrarRespuestasPresupuestos') }} " class="nav-link">
                            <i class="nav-icon"></i>
                            <p> Respuestas </p>
                          </a>
                        </li>
                      @endif
                    </ul>
                  </li>
                  @endif

                    @if ( Auth::user()->rol == 'Prestador' )
                      <li class="nav-item has-treeview">
                        <a href="{{ route('MostrarPreguntasRecibidas') }}" class="nav-link">
                          <i class="nav-icon zmdi zmdi-format-subject"></i>
                          <p>
                            Preguntas
                          </p>
                        </a>
                      </li>

                      <li class="nav-item has-treeview">
                        <a href=" {{route('MostrarReservasPrestador')}} " class="nav-link">
                          <i class="nav-icon zmdi zmdi-format-subject"></i>
                          <p>
                            Contrataciones
                          </p>
                        </a>
                      </li>

                    @endif

                    @if ( Auth::user()->rol == 'Cliente' )
                      <li class="nav-item has-treeview">
                        <a href=" {{route('MostrarRespuestasRecibidas')}} " class="nav-link">
                          <i class="nav-icon zmdi zmdi-format-subject"></i>
                          <p>
                            Respuestas
                          </p>
                        </a>
                      </li>

                      <li class="nav-item has-treeview">
                        <a href=" {{route('MostrarReservasCliente')}} " class="nav-link">
                          <i class="nav-icon zmdi zmdi-format-subject"></i>
                          <p>
                            Mis Reservas
                          </p>
                        </a>
                      </li>
                    @endif

                    @if ( Auth::user()->rol == 'Prestador' )
                      <li class="nav-item has-treeview">
                        <a href=" {{route('MostrarMisServicios')}} " class="nav-link">
                          <i class="nav-icon zmdi zmdi-format-subject"></i>
                          <p>
                            Publicaciones
                          </p>
                        </a>
                      </li>
                    @endif

                    {{-- Admin --}}
                    @if ( Auth::check() )
                      @if ( Auth::user()->rol == 'Administrador' )
                        <!-- Categorías -->
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon zmdi zmdi zmdi-case-check"></i>
                            <p>
                              Categorías
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="{{route('CrearCategorias')}}" class="nav-link">
                                <i class="nav-icon"></i>
                                <p>Gestionar</p>
                              </a>
                            </li>
                          </ul>
                        </li>

                        <!-- Moderaciones -->
                        <li class="nav-item has-treeview">
                          <a href="{{route('ListarServiciosModerar')}}" class="nav-link">
                            <i class="nav-icon zmdi zmdi-eye"></i>
                            <p>
                              Moderar
                            </p>
                          </a>
                        </li>

                        <!-- Características -->
                        {{-- <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon zmdi zmdi zmdi-case-check"></i>
                            <p>
                              Características
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="{{route('CrearCaracteristicas')}}" class="nav-link">
                                <i class="nav-icon"></i>
                                <p>Gestionar</p>
                              </a>
                            </li>
                          </ul>
                        </li> --}}
                      @endif
                    @endif

                  <li class="nav-item has-treeview">
                    <a href=" {{ route('CreateModificarDatos') }} " class="nav-link">
                      <i class="nav-icon zmdi zmdi-settings"></i>
                      <p>
                      Modificar datos
                      </p>
                    </a>
                  </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
            </aside>
        {{-- FIN MENÚ MÓVIL --}}

        <!-- Paquete -->
        @include('Principal.Partials.paquete')

        <!-- Notificaciones -->
        @include('Principal.Partials.notificaciones')

        <div class="content-wrapper">
          @yield('content')
        </div>
      
      </div>
    </body>
    
    <!-- Modal search -->
    @include('Principal.partials.modal_search')

  @include('Principal.Partials.scripts')
  @stack('js')
  </html>