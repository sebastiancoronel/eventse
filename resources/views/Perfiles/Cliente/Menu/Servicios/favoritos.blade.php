@extends('Perfiles.home')
@section('content')
{{-- Escritorio --}}
{{-- <div class="d-none d-sm-block mt-5 p-4" style="padding-top: 5em !important;">
    <h4 class="card-header text-muted">Favoritos</h4>
    <div class="card mt-4">
        <div class="card-body">
            <table>
                <tr>
                    <td>
                        <div class="col-12 d-flex justify-content-center">
                        <input class=" text-left" type="checkbox">
                        </div>
                    </td>

                    <td class="row ml-2">
                        <img card="card-img-top" src="https://imganuncios.mitula.net/casa_quinta_en_venta_en_san_nicolas_de_los_arroyos_en_san_nicolas_de_los_arroyos_buenos_aires_3_habitaciones_110_m2_7260075526228841209.jpg" width="20%" alt="">
                        <p class="col-md-6 text-muted text-left ml-2">Casa quinta - alquiler temporal / mensual - 4 dormitorios - 2 baños - cocina más asador y pileta...
                        <br><br>
                        <span class="text-danger">Precio a convenir</span> <span class="text-danger">$8890 <sup>00</sup></span>
                        </p>
                        <span class="col-md-3 mt-5">
                            <button disabled class="btn btn-blue-grey btn-md waves-effect waves-light text-white">No disponible</button>
                        </span>
                        <i class="d-none d-sm-block zmdi zmdi-more-vert text-muted" style="cursor: pointer;"></i>
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
                            <button type="button" class="btn btn-indigo btn-md waves-effect waves-light text-white">Reservar</button>
                            <button type="button" class="btn btn-indigo btn-md waves-effect waves-light text-white">Preguntar</button>
                        </span>
                        <i class="zmdi zmdi-more-vert text-muted" style="cursor: pointer;"></i>
                    </td>
                </tr>
            </table>
         </div>
    </div>
</div> --}}

{{-- Movil --}}
<div class="dispositivo">
  <h4 class="card-header text-muted">Favoritos</h4>

  <div class="row mt-5">
    <!-- Card 1 -->
    <div class="col-md-3 mx-4">
      <div class="card">
        <!-- Card image -->
        <div class="waves-effect waves-light">
          <img class="card-img-top" src="https://r-cf.bstatic.com/images/hotel/max1024x768/930/93016483.jpg"
          alt="Card image cap">
          <a href="#!">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <!-- Card content -->
        <div class="card-body">
          <!-- Title -->
          <h4 class="card-title"><span class="text-dark">Precio a convenir</span> </h4>
          <!-- Text -->
          <p class="card-text mt-4">Casa quinta - alquiler temporal / mensual - 4 dormitorios - 2 baños - cocina más asador y pileta...</p>
          <!-- Button -->
          <div class="row d-flex justify-content-start align-items-center">
            <div class="col-7">
              <button disabled class="btn btn-blue-grey btn-md waves-effect waves-light text-white mt-4">No disponible</button>
            </div>
            <div class="col-5 d-flex justify-content-end">
              <a class="text-danger" href="#">
                <i class="fas fa-trash mt-3" style="font-size: 20px;"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-3 mx-4">
      <div class="card">
        <!-- Card image -->
        <div class="waves-effect waves-light">
          <img class="card-img-top" src="https://r-cf.bstatic.com/images/hotel/max1024x768/930/93016483.jpg"
          alt="Card image cap">
          <a href="#!">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <!-- Card content -->
        <div class="card-body">
          <!-- Title -->
          <h4 class="card-title"><span class="text-danger">$8890 <sup>00</sup></span> </h4>
          <!-- Text -->
          <p class="card-text mt-4">Casa quinta - alquiler temporal / mensual - 4 dormitorios - 2 baños - cocina más asador y pileta...</p>
          <!-- Button -->
          <div class="mt-4 row d-flex justify-content-start align-items-center">
            <div class="col-11">
              <button type="button" class="btn btn-indigo btn-md waves-effect waves-light text-white">Reservar</button>
              <button type="button" class="btn btn-indigo btn-md waves-effect waves-light text-white">Preguntar</button>
            </div>
            <div class="col-1 d-flex justify-content-end">
              <a class="text-danger" href="#">
                <i class="fas fa-trash" style="font-size: 20px;"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

      <!-- Fin de Contenido para movil -->
@endsection
