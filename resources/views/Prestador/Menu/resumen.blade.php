@extends('home')
@section('content')
  <!-- Perfil -->
  <div class="card card-widget widget-user">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header bg-info">
      <h3 class="widget-user-username">Juan Perez</h3>
      <h5 class="widget-user-desc">Lorem Ipsum</h5>
    </div>
    <div class="widget-user-image">
      <img class="img-circle elevation-2" src="https://static.wixstatic.com/media/d50824_cf5c9f47ba6c49dcbc9125ec417026c4~mv2.png/v1/fill/w_406,h_406,al_c,q_85,usm_0.66_1.00_0.01/Logo%20Jump%20zone%20Blanco2%20Transparente.webp" alt="User Avatar">
    </div>
    <div class="card-footer">
      <div class="row">
        <div class="col-sm-4 border-right">
          <div class="description-block">
            <h5 class="description-header">60</h5>
            <span class="description-text">Alquileres concretados</span>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
        <div class="col-sm-4 border-right">
          <div class="description-block">
            <h5 class="description-header">13,000</h5>
            <span class="description-text">Recomendaciones</span>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
        <div class="col-sm-4">
          <div class="description-block">
            <h5 class="description-header">9</h5>
            <span class="description-text">Servicios</span>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
  </div>
  <!-- End Perfil -->

   <br>
    <!-- Resumen y Mis puntos -->
    <h4 class="ml-5"> Resumen </h4>
    <section class="row">
        <!-- Left side -->
        <article class="col-md-6 col-12">
            <div class="text-muted">
                <div class="card-body">
                    <div>
                      <div class="card-header">Solicitudes</div>
                      <div class="card-body" >
                        <i class="fas fa-concierge-bell"></i> <a href="" class="text-muted"><span class="ml-2">Solicitudes de servicios</span></a>  <span id="Solicitudes-de-servicios" class="badge badge-danger ml-2"><a class="text-white" href="#" style="text-decoration: none;">3</a></span>
                      </div>
                    </div>

                    <!-- Preguntas -->
                    <br>
                    <div>
                      <div class="card-header">Preguntas</div>
                      <div class="card-body" >
                        <i class="fas fa-comments"></i> <span class="ml-2">Preguntas sin responder</span> <span class="badge badge-warning ml-2">4</span>
                      </div>
                    </div>
                    <br>

                </div>
            </div>
        </article>

        <!-- Right side -->
        <article class="col-md-6 col-12">
            <div class="text-muted">
                <div class="card-body">
                    <div class="card-header">
                        <h5>Mis puntos</h5>
                    </div>
                    <div class="card-body">
                       <!-- Progress bar 1 -->
                      <!-- <div class="progress mx-auto" data-value='80' style="width: 80px; height: 80px;">
                          <span class="progress-left">
                              <span class="progress-bar border-success"></span>
                          </span>
                          <span class="progress-right">
                              <span class="progress-bar border-success"></span>
                          </span>
                          <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                            <div class="h2 font-weight-bold ml-2" style="font-size: 25px;">80%</div>
                          </div>
                      </div> -->
                      <div class="progress mb-3">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                          <span class="sr-only">40% Complete (success)</span>
                        </div>
                      </div>
                      <br>
                      <div class="text-muted text-center"><span class="ml-2">150/400</span> <a class="ml-2" href="#">Ver mis beneficios</a></div>
                      <br>
                      <div class="text-muted">Sumá puntos con tu <a href="">próxima reserva</a></div>
                        <!-- END -->
                    </div>
                </div>
            </div>
        </article>
    </section>
      <!-- Publicaciones -->
      <div class="row">
        <div class="col-md-6">
          <div class="card-header">Publicaciones</div>
            <div class="card-body" >
              <i class="fas fa-tag"></i> <span class="ml-2">Servicios publicados</span> <span class="badge badge-warning ml-2">1</span>
              <br><br>
              <i class="fas fa-tag"></i> <span class="ml-2">Publicaciones inactivas</span> <span class="badge badge-secondary ml-2">0</span>
            </div>
        </div>
        <!-- Right side -->
        <article class="col-md-6 col-12">
          <div class=" text-muted">
              <div class="card-body">
                  <div class="card-header">
                      <h5>Publicidad</h5>
                  </div>
                  <div class="card-body">
                    Tu plan actual es
                    <br><br>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title text-center">ORO <i class="fas fa-medal text-warning"></i> </h5><br>
                          <h6 class="card-subtitle mb-2 text-muted">Vence el 02/2020</h6>
                          <p class="card-text">Todos los productos que publiques tendrán una visibilidad ALTA y apareceras en la página principal</p>
                          <a href="#" class="card-link">Ampliar plan</a>
                          <a href="#" class="card-link">Mejorar plan</a>
                        </div>
                      </div>
                  </div>

              </div>
          </div>
      </article>
      </div>
    <!-- Algo y Algo -->
    <section class="row">
        <!-- Left side -->
        <article class="col-md-6 col-12">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </article>
    </section>
    <script>
      $(document).ready(function() {

          function doAnimation()
          {
          $("#Solicitudes-de-servicios").effect( "bounce", {times:3}, 1000, doAnimation);
          }

          doAnimation();

          $(function() {

          $(".progress").each(function() {

            var value = $(this).attr('data-value');
            var left = $(this).find('.progress-left .progress-bar');
            var right = $(this).find('.progress-right .progress-bar');

            if (value > 0) {
              if (value <= 50) {
                right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
              } else {
                right.css('transform', 'rotate(180deg)')
                left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
              }
            }
          })
          function percentageToDegrees(percentage) {
            return percentage / 100 * 360
          }
          });
      });
    </script>
@endsection
