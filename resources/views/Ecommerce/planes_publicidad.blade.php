@extends('layouts.barra_navegacion_principal')
@section('content')

  <div class="escritorio-mt-3-p-t-75 mt-5">
    <div class="text-center">
      <h4 class="text-uppercase text-muted d-flex justify-content-center font-weight-bold">Elegí un plan para tener mayor visualización en el sitio</h4>
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
                <a id="pagar" mp-mode="dftl" href="https://www.mercadopago.com.ar/checkout/v1/redirect?pref_id=115102500-a4d8afcc-549c-4f0b-8ac0-ef900969f8d0" name="MP-payButton" class="btn btn-blue text-white font-weight-bold waves-effect waves-light flex-c-m stext-101 cl5 size-100 bg2 bor1 hov-btn1 p-lr-15 trans-04">Elegir plan</a>
              </div>
            </div>

          </div>
          <!--/.Card-->
        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-lg-3 col-md-12 mb-4">
          <!--Card-->
          <div class="card purple-gradient">

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
                <a id="pagar" mp-mode="dftl" href="https://www.mercadopago.com.ar/checkout/v1/redirect?pref_id=115102500-a4d8afcc-549c-4f0b-8ac0-ef900969f8d0" name="MP-payButton" class="btn btn-outline-white btn-rounded waves-effect waves-light font-weight-bold flex-c-m stext-101 cl5 size-100 bor1 hov-btn1 p-lr-15 trans-04">Elegir plan</a>
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
                <a id="pagar" mp-mode="dftl" href="https://www.mercadopago.com.ar/checkout/v1/redirect?pref_id=115102500-a4d8afcc-549c-4f0b-8ac0-ef900969f8d0" name="MP-payButton" class="btn btn-blue text-white font-weight-bold btn-rounded waves-effect waves-light flex-c-m stext-101 cl5 size-100 bg2 bor1 hov-btn1 p-lr-15 trans-04 ">Elegir plan</a>
              </div>
            </div>

          </div>
          <!--/.Card-->
        </div>
        <!--/Third column-->
      </div>
    </div>
    <div class="ml-5">
      <a href="#">Publicar gratis <i class="zmdi zmdi-arrow-right"></i></a>
    </div>

<script type="text/javascript">
  // Cambiar el Z-index de la barra_navegacion_principal
  $(document).ready(function() {
    $(".wrap-menu-desktop").css('z-index', '1');
  });

  // $(document).on('click', '#pagar', function() {
  //   $(".wrap-menu-desktop").css('z-index', '1');
  // });
</script>

<script type="text/javascript">
// Mercadopago
  (function(){
    function $MPC_load(){
      window.$MPC_loaded !== true && (function(){
      var s = document.createElement("script");
      s.type = "text/javascript";
      s.async = true;
      s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;
    })();
  }
  window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
</script>

  </div>
@endsection
