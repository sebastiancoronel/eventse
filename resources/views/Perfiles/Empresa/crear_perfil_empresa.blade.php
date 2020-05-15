@extends('layouts.barra_navegacion_principal')
@section('content')
  <div class="escritorio-mt-3-p-t-75 container text-center d-flex justify-content-center" style="height:500px;">
    <div class="row text-white m-auto">
      <div class="col-md-12 col-12">
        <h2 class="text-uppercase">Para comenzar a publicar servicios debes crear un perfil de empresa</h2>
      </div>

      <div class="m-auto pt-5">
        <a id="boton" class="btn btn-blue text-white waves-effect waves-light flex-c-m stext-101 cl5 size-100 bg2 bor1 hov-btn1 p-lr-15 trans-04" href="#">Registrarme como empresa</a>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      $(document.body).addClass('blue-gradient');
    });
  </script>
@endsection
