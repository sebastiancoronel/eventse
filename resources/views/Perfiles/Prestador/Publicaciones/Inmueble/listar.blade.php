@extends('Prestador.panel')
@section('content')

  <!--//Contenido-->
<div class="m-t-100">
     <!-- Perfil -->
     <div class="card card-widget widget-user">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-info">
          <h3 class="widget-user-username">Juan Perez</h3>
          <h5 class="widget-user-desc">Lorem Ipsum</h5>
        </div>
        <div class="widget-user-image">
          <img class="img-circle elevation-2" src="adminlte/dist/img/user1-128x128.jpg" alt="User Avatar">
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

      <!-- Publicaciones -->
      <div class="row ml-3 justify-content-start">
          <div class="card col-md-2" style="width: 18rem;">
            <img src="https://http2.mlstatic.com/salon-fiestas-y-eventos-caballito-villa-crespo-almagro-D_NQ_NP_634726-MLA32794519747_112019-F.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> <small>Combo Evento 10 Personas Con Butacon</small></h5>
              <p class="card-text">Combo de living que incluye 10 Puff, mesa ratona, un butac...</p>
              <h5> <strong>$1900</strong></h5>
              <a href="#" class="btn btn-outline-primary"> <i class="fas fa-edit"></i> Editar</a>
            </div>
          </div>

          <div class="card col-md-2 ml-4" style="width: 18rem;">
            <img src="https://http2.mlstatic.com/casa-quinta-abasto-D_NQ_NP_649494-MLA40168826427_122019-F.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> <small>Quinta en alquiler temporal</small></h5>
              <p class="card-text">Ruta Del Sol 428</p>
              <h5><strong>$7000</strong></h5>
              <a href="#" class="btn btn-outline-primary"> <i class="fas fa-edit"></i> Editar</a>
            </div>
          </div>

          <div class="card col-md-2 ml-4" style="width: 18rem;">
            <img src="https://http2.mlstatic.com/alquiler-inflables-tobogan-acuatico-pileta-castillo-juegos-D_NQ_NP_860412-MLA40172473368_122019-F.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> <small>Alquiler Inflables Tobogan Acuatico Pileta Castillo Juegos</small></h5>
              <p class="card-text">Ruta Del Sol 428</p>
              <h5><strong>Precio a convenir</strong></h5>
              <a href="#" class="btn btn-outline-primary"> <i class="fas fa-edit"></i> Editar</a>
            </div>
          </div>

          <div class="card col-md-2 ml-4" style="width: 18rem;">
            <img src="http://cdn1.clasificados.com/ar/pictures/photos/000/053/921/original_000_1383.JPG" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> <small>Juego de sillas</small></h5>
              <p class="card-text">Para 30 personas</p>
              <h5><strong>$400</strong></h5>
              <a href="#" class="btn btn-outline-primary"> <i class="fas fa-edit"></i> Editar</a>
            </div>
          </div>
        </div>
      <!-- Fin Publicaciones -->


</div>

<!--//Fin Contenido-->
@endsection
