@extends('home')
@section('content')
  <!--//Contenido-->
    <div class="p-4">
        <!-- Contenido para Escritorio -->
        <h4 class="d-none d-sm-block text-muted">Mis alquileres</h4>
        <hr class="d-none d-sm-block">
        <div class="card d-none d-sm-block mt-4">
            <div class="card-body">
                <table>
                    <tr>
                      <!-- Publicación -->
                      <td>
                         <!-- Botón Elipsis esquina superior derecha -->
                         <section>
                          <div class="h-100 d-flex justify-content-end">
                            <a class="nav-link" data-toggle="dropdown" href="#">
                              <i class="d-none d-sm-block fas fa-ellipsis-v text-muted" style="cursor: pointer;"></i>
                            </a>
                             <!-- Menu Dropdown -->
                             <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                              <!-- Item -->
                              <a href="#" class="dropdown-item">
                                <div class="media">
                                  <div class="media-body">
                                    <h3 class="dropdown-item-title text-left">Modificar</h3>
                                  </div>
                                </div>
                              </a>
                              <div class="dropdown-divider"></div>
                              <!-- Fin Item -->

                              <!-- Item -->
                              <a href="#" class="dropdown-item">
                                <div class="media">
                                  <div class="media-body">
                                    <h3 class="dropdown-item-title text-left">Aumentar visibilidad</h3>
                                  </div>
                                </div>
                              </a>
                              <div class="dropdown-divider"></div>
                              <!-- Fin Item -->

                              <!-- Item -->
                              <a href="#" class="dropdown-item">
                                <div class="media">
                                  <div class="media-body">
                                    <h3 class="dropdown-item-title text-left">Ver</h3>
                                  </div>
                                </div>
                              </a>
                              <div class="dropdown-divider"></div>
                              <!-- Fin Item -->
                              <!-- Item -->
                              <a href="#" class="dropdown-item">
                                <div class="media">
                                  <div class="media-body">
                                    <h3 class="dropdown-item-title text-left">Pausar publicación</h3>
                                  </div>
                                </div>
                              </a>
                              <div class="dropdown-divider"></div>
                              <!-- Fin Item -->
                               <!-- Item -->
                               <a href="#" class="dropdown-item bg-danger">
                                <div class="media">
                                  <div class="media-body">
                                    <h3 class="dropdown-item-title text-left">Eliminar</h3>
                                  </div>
                                </div>
                              </a>
                              <div class="dropdown-divider"></div>
                              <!-- Fin Item -->
                            </div>
                            <!-- Fin Menu Dropdown -->
                          </div>
                        </section>
                        <!-- Fin Botón Elipsis esquina superior derecha -->

                        <!-- Datos de publicación -->
                        <section class="row">
                            <img src="https://muchosnegociosrentables.com/wp-content/uploads/2015/12/c%C3%B3mo-montar-un-negocio-de-alquiler-de-sonido-e-iluminaci%C3%B3n.jpg" width="10%" height="10%" alt="">
                            <p class="col-md-3 text-muted text-left ml-2">Alquiler de sonido e iluminación para salones , casas, fincas, cumpleaños, recibidas y más..
                            <br><br>
                            <small class="text-muted">30 alquileres | 183 visitas</small>
                            </p>
                            <div class="col-md-2 d-flex justify-content-center">
                                <span class="text-danger">Precio a convenir</span>
                            </div>
                            <div class="col-md-4">
                                <span class="text-muted d-flex justify-content-center">Publicación Platino<i class=" ml-2 fas fa-medal text-secondary"></i>
                                </span>

                                <span class="d-flex justify-content-center text-muted">Vence en 180 días</span>
                            </div>
                      </section>
                    </td>
                        <!--Fin de Publicación -->
                    </tr>
                </table>
            </div>
        </div>
        <!-- Fin de contenido para Escritorio -->

        <!-- Contenido para movil -->
        <h4 class="d-md-none d-lg-none d-xl-none d-xs-block d-sm-block text-muted">Mis alquileres</h4>
        <hr class="d-md-none d-lg-none d-xl-none d-xs-block d-sm-block">
        <div class="card d-md-none d-lg-none d-xl-none d-xs-block d-sm-block mt-4">
            <div class="card-body">
              <!-- Publicaciónes -->
                <table>
                    <tr>
                        <td>
                          <!-- Botón Elipsis esquina superior derecha -->
                            <div class="h-100 d-flex justify-content-end">
                              <a class="nav-link" data-toggle="dropdown" href="#">
                                <i class="d-md-none d-lg-none d-xl-none d-xs-block d-sm-block text-muted fas fa-ellipsis-v text-muted" style="cursor: pointer;"></i>
                              </a>
                              <!-- Menu Dropdown -->
                             <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                              <!-- Item -->
                              <a href="#" class="dropdown-item">
                                <div class="media">
                                  <div class="media-body">
                                    <h3 class="dropdown-item-title text-left">Modificar</h3>
                                  </div>
                                </div>
                              </a>
                              <div class="dropdown-divider"></div>
                              <!-- Fin Item -->

                              <!-- Item -->
                              <a href="#" class="dropdown-item">
                                <div class="media">
                                  <div class="media-body">
                                    <h3 class="dropdown-item-title text-left">Aumentar visibilidad</h3>
                                  </div>
                                </div>
                              </a>
                              <div class="dropdown-divider"></div>
                              <!-- Fin Item -->

                              <!-- Item -->
                              <a href="#" class="dropdown-item">
                                <div class="media">
                                  <div class="media-body">
                                    <h3 class="dropdown-item-title text-left">Ver</h3>
                                  </div>
                                </div>
                              </a>
                              <div class="dropdown-divider"></div>
                              <!-- Fin Item -->
                              <!-- Item -->
                              <a href="#" class="dropdown-item">
                                <div class="media">
                                  <div class="media-body">
                                    <h3 class="dropdown-item-title text-left">Pausar publicación</h3>
                                  </div>
                                </div>
                              </a>
                              <div class="dropdown-divider"></div>
                              <!-- Fin Item -->
                               <!-- Item -->
                               <a href="#" class="dropdown-item bg-danger">
                                <div class="media">
                                  <div class="media-body">
                                    <h3 class="dropdown-item-title text-left">Eliminar</h3>
                                  </div>
                                </div>
                              </a>
                              <div class="dropdown-divider"></div>
                              <!-- Fin Item -->
                            </div>
                            <!-- Fin Menu Dropdown -->
                            </div>

                          <!-- Fin Botón Elipsis esquina superior derecha -->

                          <!-- Datos de publicación -->
                          <section class="row mt-3">
                              <img src="https://muchosnegociosrentables.com/wp-content/uploads/2015/12/c%C3%B3mo-montar-un-negocio-de-alquiler-de-sonido-e-iluminaci%C3%B3n.jpg" width="100%" height="10%" alt="">
                              <div class="text-warning">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                              </div>
                              <p class="col-12 text-muted text-left ml-2 mt-2">Alquiler de sonido e iluminación para salones , casas, fincas, cumpleaños, recibidas y más..
                              <br>
                              <small class="text-muted">30 alquileres | 183 visitas</small>
                              </p>
                              <div class="col-12 d-flex justify-content-start">
                                  <span class="text-danger">Precio a convenir</span>
                              </div>
                              <br><br>
                              <div class="col-12">
                                  <span class="d-flex justify-content-center text-muted">Publicación Platino<i class=" ml-2 fas fa-medal text-secondary"></i>
                                  </span>
                                  <span class="d-flex justify-content-center text-muted">Vence en 180 días</span>
                              </div>
                        </section>
                      </td>
              <!--Fin de Publicaciónes -->
                    </tr>
                </table>
                <hr>
            </div>
        </div>
        <!-- Contenido para movil -->
        <!-- Fin de Contenido para movil -->
      </div>
<!--//Fin Contenido-->
@endsection
