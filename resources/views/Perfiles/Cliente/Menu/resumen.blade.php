@extends('Perfiles.home')
@section('content')
<div class="dispositivo">
  <!-- Perfil -->
  <div class="card card-widget widget-user">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header bg-info">
      <h3 class="widget-user-username">JumpZone</h3>

    </div>
    <div class="widget-user-image">
      <img class="img-circle elevation-2" src="{{asset($Prestador->foto)}}" alt="User Avatar">
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
  <!-- Fin Perfil -->

  <!-- Resumen y Mis puntos -->
  <h4 class="card-header text-muted"> Resumen </h4>
  <section class="row">
    <!-- Solicitudes de servicios / Preguntas sin responder -->
    <article class="col-md-6 col-12 text-muted">
      <div class="card-body">
        <div class="col-md-12 col-sm-6 col-12">
          <div class="waves-effect info-box bg-white">
            <span class="info-box-icon bell"><i class="zmdi zmdi-notifications-active"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Solicitudes de servicios</span>
              <span class="info-box-number text-danger">3</span>
            </div>
          </div>
        </div>

        <!-- Preguntas -->
        <div class="col-md-12 col-sm-6 col-12">
          <div class="waves-effect info-box bg-white">
            <span class="info-box-icon"><i class="zmdi zmdi-comment-alert"></i></span>
            <div class="info-box-content">Preguntas sin responder</span>
              <span class="info-box-number text-info">19</span>
            </div>
          </div>
        </div>
      </div>
    </article>

    <!-- Mis puntos -->
    <article class="col-md-6 col-12 text-muted">
      <div class="card-body">
        <div class="col-md-12 col-sm-6 col-12">
          <div class="info-box bg-white">
            <span class="info-box-icon"><i class="zmdi zmdi-spinner"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Mis puntos</span>
              <div class="progress mb-3">
                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                  <span class="sr-only">40% Complete (success)</span>
                </div>
              </div>
              <div class="text-muted text-center"><span class="ml-2">150/400</span> <a class="ml-2" href="#">Ver mis beneficios</a></div>
              <div class="mt-5">Sumá puntos con tu
                <a id="link_violeta" href="#">
                  próxima reserva
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
  </section>

  <!-- Publicaciones -->
  <h5 class="ml-4 text-muted">Publicaciones</h5>
  <section class="row">
    <article class="col-md-6 col-12 text-muted">
      <div class="card-body">
        <!-- Servicios publicados -->
        <div class="col-md-12 col-sm-6 col-12">
          <div class="waves-effect info-box bg-white">
            <span class="info-box-icon"><i class="zmdi zmdi-label"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Servicios publicados</span>
              <span class="info-box-number text-danger">2</span>
            </div>
          </div>
        </div>

        <!-- Publicaciones pausadas -->
        <div class="col-md-12 col-sm-6 col-12">
          <div class="waves-effect info-box bg-white">
            <span class="info-box-icon"><i class="zmdi zmdi-pause"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Publicaciones pausadas</span>
              <span class="info-box-number text-danger">2</span>
            </div>
          </div>
        </div>
      </div>
    </article>

    <!-- Publicidad -->

    <!--Panel-->
    <article class="col-md-6 col-12">
      <div class="card text-center">
        <div class=" card-header warning-color white-text">
          Plan actual
        </div>
        <div class="card-body">
          <h4 class="card-title">Tu plan actual es ORO</h4>
          <h4 class="d-flex justify-content-center mt-2">
            <i class="fas fa-medal text-warning"></i>
          </h4>
          <p class="card-text">Todos los productos que publiques tendrán una visibilidad ALTA y apareceras en la página principal.</p>
          <a class="btn btn-success btn-sm">Mejorar plan</a>
        </div>
        <div class="card-footer text-muted warning-color white-text">
          <p class="text-white mb-0">Quedan 180 días</p>
        </div>
      </div>
    </article>
    <!--/.Panel-->

    {{-- <article class="col-md-6 col-12 text-muted">
    <div class="card-body">

    <div class="col-md-12 col-sm-6 col-12">
    <div class="info-box bg-white">
    <span class="info-box-icon"><i class="fas fa-medal text-warning"></i></i></span>
    <div class="info-box-content">
    <span class="info-box-text">Tu plan actual es</span>
    <span class="info-box-number">Oro</span>
    <small class="card-text">Todos los productos que publiques tendrán una visibilidad ALTA y apareceras en la página principal</small>
    <div class="mt-2">
    <a id="link_violeta" href="#" class="card-link">Ampliar plan</a>
    <a id="link_violeta" href="#" class="card-link">Mejorar plan</a>
  </div>
</div>
</div>
</div>
</div>
</article> --}}
  </section>
</div>

<!-- Scripts -->
  <script>
    $(document).ready(function() {

        function doAnimation()
        {
        $("#Solicitudes-de-servicios").effect( "bounce", {times:5}, 1000, doAnimation);
        }
        doAnimation();
    });
  </script>
@endsection
