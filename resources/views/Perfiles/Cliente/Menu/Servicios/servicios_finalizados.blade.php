@extends('Perfiles.home')
@section('content')
{{-- Escritorio --}}
<div class=" mt-5 p-4" style="padding-top: 5em !important;">
  <h4 class="card-header text-muted">Finalizados</h4>

  <div class="p-4 col-md-4">

  <div class="card">
    <!-- Card image -->
    <div class="">
      <img class="card-img-top" src="{{asset('images/castillo2.webp')}}" alt="Card image cap">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!-- Social buttons -->
    <div class="card-share">

      <div class="social-reveal">

        <!-- Facebook -->
        <a type="button" class="btn-floating btn-fb mt-0 mx-1"><i class="zmdi zmdi-help"></i></a>
        <!-- Twitter -->
        <a type="button" class="btn-floating btn-tw mt-0 mx-1"><i class="fab fa-twitter"></i></a>
        <!-- Google -->
        <a type="button" class="btn-floating btn-gplus mt-0 mx-1"><i class="fab fa-google-plus-g"></i></a>

      </div>

      <!-- Button action -->
      <a class="btn-floating btn-action share-toggle indigo ml-auto mr-4 float-right"><i class="zmdi zmdi-plus"></i></a>

    </div>

    <!-- Card content -->
    <div class="card-body">

      <!-- Title -->
      <h4 class="card-title">Card title</h4>
      <hr>
      <!-- Text -->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
        content.</p>
        <button class="btn btn-indigo text-white btn-rounded btn-md mt-4">Calificar</button>

      </div>
    </div>
</div>

</div>


{{-- Movil --}}
<div class="d-md-none d-lg-none d-xl-none d-xs-block d-sm-block">
  <h4 class="card-header text-muted">Finalizados</h4>
</div>
@endsection
