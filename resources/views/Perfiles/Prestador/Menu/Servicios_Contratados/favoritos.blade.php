@extends('home')
@section('content')
<div class="p-4">
  <!-- Contenido para Escritorio -->
  <h4 class="d-none d-sm-block text-muted">Favoritos</h4>
  <hr class="d-none d-sm-block">
    <div class="card d-none d-sm-block mt-4">
        <div class="card-body">
            <table>
                <tr>
                    <td>
                        <div class="col-12 d-flex justify-content-center">
                        <input class=" text-left" type="checkbox">
                        </div>
                    </td>

                    <td class="row ml-2">
                        <img src="https://imganuncios.mitula.net/casa_quinta_en_venta_en_san_nicolas_de_los_arroyos_en_san_nicolas_de_los_arroyos_buenos_aires_3_habitaciones_110_m2_7260075526228841209.jpg" width="20%" alt="">
                        <p class="col-md-6 text-muted text-left ml-2">Casa quinta - alquiler temporal / mensual - 4 dormitorios - 2 baños - cocina más asador y pileta...
                        <br><br>
                        <span class="text-danger">Precio a convenir</span> <span class="text-danger">$8890 <sup>00</sup></span>
                        </p>
                        <span class="col-md-3 mt-5">
                            <span class="alert alert-secondary"><i class="fas fa-info-circle mr-2"></i>No disponible</span>
                        </span>
                        <i class="d-none d-sm-block fas fa-ellipsis-v text-muted" style="cursor: pointer;"></i>
                    </td>
                </tr>
            </table>

            <br><hr><br>
            <table>
                <tr>
                    <td>
                        <div class="col-12 d-flex justify-content-center">
                        <input class=" text-left" type="checkbox">
                        </div>
                    </td>

                    <td class="row ml-2">
                        <img src="https://imganuncios.mitula.net/casa_quinta_en_venta_en_san_nicolas_de_los_arroyos_en_san_nicolas_de_los_arroyos_buenos_aires_3_habitaciones_110_m2_7260075526228841209.jpg" width="20%" alt="">
                        <p class="col-md-6 text-muted text-left ml-2">Casa quinta - alquiler temporal / mensual - 4 dormitorios - 2 baños - cocina más asador y pileta...
                        <br><br>
                        <span class="text-danger">Precio a convenir</span> <span class="text-danger">$8890 <sup>00</sup></span>
                        </p>
                        <span class="col-md-3">
                            <button class="btn btn-outline-primary"></i>Reservar servicio</button>
                            <br><br>
                            <button class="btn btn-primary"></i>Hacer una pregunta</button>
                        </span>
                        <i class="fas fa-ellipsis-v text-muted" style="cursor: pointer;"></i>
                    </td>
                </tr>
            </table>
         </div>
    </div>
    <!-- Fin de contenido para Escritorio -->

    <!-- Contenido para movil -->
    <div class="d-md-none d-lg-none d-xl-none d-xs-block d-sm-block text-left text-muted">
      <h4 class="d-md-none d-lg-none d-xl-none d-xs-block d-sm-block">Favoritos</h4>
      <hr class="d-md-none d-lg-none d-xl-none d-xs-block d-sm-block">
    </div>
    <div class="card d-md-none d-lg-none d-xl-none d-xs-block d-sm-block mt-2">
      <div class="card-body">
          <table>
              <tr>
                  <td class="row">
                      <div class="col-12 d-flex justify-content-end">
                        <i class="d-md-none d-lg-none d-xl-none d-xs-block d-sm-block fas fa-ellipsis-v text-muted" style="cursor: pointer;"></i>
                      </div>
                  </td>

                  <td class="row">
                      <img class="d-flex justify-content-center col-10" src="https://r-cf.bstatic.com/images/hotel/max1024x768/930/93016483.jpg" width="40%" alt="">
                      <p class="col-md-12 text-muted text-left">Casa quinta - alquiler temporal / mensual - 4 dormitorios - 2 baños - cocina más asador y pileta...
                      <br><br>
                      <span class="text-danger">Precio a convenir</span> <span class="text-danger">$8890 <sup>00</sup></span>
                      </p>
                      <span class="col-md-3 mt-5">
                          <span class="alert alert-secondary"><i class="fas fa-info-circle mr-2"></i>No disponible</span>
                      </span>
                      <i class="d-none d-sm-block fas fa-ellipsis-v text-muted" style="cursor: pointer;"></i>
                  </td>
              </tr>
          </table>
          <br><hr><br>

          <table>
              <tr>
                  <td class="row">
                    <div class="col-12 d-flex justify-content-end">
                      <i class="d-md-none d-lg-none d-xl-none d-xs-block d-sm-block fas fa-ellipsis-v text-muted" style="cursor: pointer;"></i>
                    </div>
                  </td>
                  <td class="row">
                      <img class="d-flex justify-content-center col-10" src="https://r-cf.bstatic.com/images/hotel/max1024x768/930/93016483.jpg" width="40%" alt="">
                      <p class="col-md-12 text-muted text-left">Casa quinta - alquiler temporal / mensual - 4 dormitorios - 2 baños - cocina más asador y pileta...
                      <br><br>
                      <span class="text-danger">Precio a convenir</span> <span class="text-danger">$8890 <sup>00</sup></span>
                      </p>
                      <span class="col-md-3">
                          <button class="btn btn-outline-primary"></i>Reservar servicio</button>
                          <br><br>
                          <button class="btn btn-primary"></i>Hacer una pregunta</button>
                      </span>
                      <i class="d-none d-sm-block fas fa-ellipsis-v text-muted" style="cursor: pointer;"></i>
                  </td>
              </tr>
          </table>
      </div>
  </div>
    <!-- Fin de Contenido para movil -->
</div>
@endsection
