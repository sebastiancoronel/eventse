@extends('Perfiles.home')
@section('content')
{{-- Escritorio --}}
<div class="d-none d-sm-block mt-5 p-4" style="padding-top: 5em !important;">
  <h4 class="card-header text-muted">Finalizados</h4>
  <!-- Card -->
  <div class="card">
    <!-- Card image -->
    <div class="view overlay">
      <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo9.jpg" alt="Card image cap">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!-- Social buttons -->
    <div class="card-share">

      <div class="social-reveal">

        <!-- Facebook -->
        <a type="button" class="btn-floating btn-fb mt-0 mx-1"><i class="fab fa-facebook-f"></i></a>
        <!-- Twitter -->
        <a type="button" class="btn-floating btn-tw mt-0 mx-1"><i class="fab fa-twitter"></i></a>
        <!-- Google -->
        <a type="button" class="btn-floating btn-gplus mt-0 mx-1"><i class="fab fa-google-plus-g"></i></a>

      </div>

      <!-- Button action -->
      <a class="btn-floating btn-action share-toggle indigo ml-auto mr-4 float-right"><i class="fas fa-share-alt"></i></a>

    </div>

    <!-- Card content -->
    <div class="card-body">

      <!-- Title -->
      <h4 class="card-title">Card title</h4>
      <hr>
      <!-- Text -->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
        content.</p>
      <button class="btn btn-indigo btn-rounded btn-md">Read more</button>

    </div>
  </div>
  <!-- Card -->
</div>


{{-- Movil --}}
<div class="d-md-none d-lg-none d-xl-none d-xs-block d-sm-block">
  <h4 class="card-header text-muted">Finalizados</h4>
</div>
@endsection
