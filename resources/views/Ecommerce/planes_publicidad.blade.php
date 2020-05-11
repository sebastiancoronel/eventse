@extends('layouts.barra_navegacion_principal')
@section('content')

  <div class="escritorio-mt-3-p-t-75 mt-5">
    <div class="text-center">
      <h4 class="text-uppercase text-muted d-flex justify-content-center"> <strong>Elegí un plan para tener mayor visualización en el sitio</strong></h4>
    </div>
    <div class="text-center mt-5">
      <div class="row d-flex justify-content-center">
        <!--First column-->
        <div class="col-lg-3 col-md-12 mb-4">
          <!--Card-->
          <div class="card">

            <!--Content-->
            <div class="text-center" style="height:400px;">
              <div class="card-body">
                <h5>Basic plan</h5>
                <div class="d-flex justify-content-center">
                  <div class="card-circle d-flex justify-content-center align-items-center">
                    {{-- <i class="fas fa-home blue-text"></i> --}}
                    <i class="zmdi zmdi-home blue-text" style="font-size:4rem;"></i>

                  </div>
                </div>

                <!--Price-->
                <h2 class="font-weight-bold dark-grey-text mt-3"><strong>$599</strong></h2>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa pariatur id nobis
                  accusamus
                  deleniti cumque hic laborum.</p>
                <a class="btn btn-blue font-weight-bold waves-effect waves-light flex-c-m stext-101 cl5 size-100 bg2 bor1 hov-btn1 p-lr-15 trans-04">Elegir plan</a>
              </div>
            </div>

          </div>
          <!--/.Card-->
        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-lg-3 col-md-12 mb-4">
          <!--Card-->
          <div class="card blue-gradient">

            <!--Content-->
            <div class="text-center white-text" style="height:400px;">
              <div class="card-body">
                <h5>Premium plan</h5>
                <div class="d-flex justify-content-center">
                  <div class="card-circle d-flex justify-content-center align-items-center">
                    {{-- <i class="fas fa-users white-text"></i> --}}
                    <i class="zmdi zmdi-fire white-text" style="font-size:4rem;"></i>
                  </div>
                </div>

                <!--Price-->
                <h2 class="font-weight-bold white-text mt-3"><strong>$799</strong></h2>
                <p>Esse corporis saepe laudantium velit adipisci cumque iste ratione facere non distinctio
                  cupiditate sequi atque.</p>
                <a class="btn btn-blue text-white font-weight-bold btn-rounded waves-effect waves-light flex-c-m stext-101 cl5 size-100 bg2 bor1 hov-btn1 p-lr-15 trans-04">Elegir plan</a>
              </div>
            </div>

          </div>
          <!--/.Card-->
        </div>
        <!--/Second column-->

        <!--Third column-->
        <div class="col-lg-3 col-md-12 mb-4">
          <!--Card-->
          <div class="card">

            <!--Content-->
            <div class="text-center" style="height:400px;">
              <div class="card-body">
                <h5>Advanced plan</h5>
                <div class="d-flex justify-content-center">
                  <div class="card-circle d-flex justify-content-center align-items-center">
                    <i class="fas fa-chart-bar blue-text"></i>
                  </div>
                </div>

                <!--Price-->
                <h2 class="font-weight-bold dark-grey-text mt-3"><strong>$999</strong></h2>
                <p class="grey-text">At ab ea a molestiae corrupti numquam quo beatae minima ratione magni accusantium
                  repellat
                  eveniet quia vitae.</p>
                <a class="btn btn-blue font-weight-bold btn-rounded waves-effect waves-light flex-c-m stext-101 cl5 size-100 bg2 bor1 hov-btn1 p-lr-15 trans-04 ">Elegir plan</a>
              </div>
            </div>

          </div>
          <!--/.Card-->
        </div>
        <!--/Third column-->
      </div>
    </div>
    <div class="ml-5">
      <a href="#">Publicar gratis <i class="zmdi zmdi-arrow-right"></i> </a>
    </div>
  </div>
@endsection
