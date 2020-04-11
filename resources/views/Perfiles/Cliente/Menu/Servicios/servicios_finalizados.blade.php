@extends('Perfiles.home')
@section('content')
{{-- Escritorio --}}
<div class="dispositivo">
  <h4 class="card-header text-muted">Finalizados</h4>

  <div class="row mt-5">
    {{-- Card 1 --}}
    <div class="col-md-3 mx-4">
      <div class="card">
      <!-- Card image -->
      <div style="width:16.8em !important; height: 12em !important;">
        <img class="card-img-top" src="{{asset('images/castillo2.webp')}}" alt="Card image cap">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!-- Social buttons -->
      <div class="card-share">
        <div class="social-reveal">
          <!-- Ver -->
          <a type="button" class="btn-floating btn-tw mt-0 mx-1"><i class="zmdi zmdi-eye"></i></a>
          <!-- Ver Mensajes -->
          <a type="button" class="btn-floating btn-fb mt-0 mx-1"><i class="zmdi zmdi-comments"></i></a>
          <!-- Contactarse -->
          <a type="button" class="btn-floating btn-gplus mt-0 mx-1"><i class="zmdi zmdi-phone"></i></a>
          <!-- whatsapp -->
          {{-- <a type="button" class="btn-floating btn-gplus mt-0 mx-1"><i class="zmdi zmdi-whatsapp"></i></a> --}}
        </div>

        <!-- Button action -->
        <a class="btn-floating btn-action share-toggle indigo ml-auto mr-4 float-right"><i class="zmdi zmdi-plus"></i></a>
      </div>

      <!-- Card content -->
      <div class="card-body">
        <!-- Title -->
        <h4 class="card-title mt-4">Alquiler de castillo de 3x3</h4>
        <hr>
        <!-- Text -->
        <div class="card-text">
          <strong>Prestador</strong><br>
          <span>JumpZone Inflables</span><br>
          <span>+54 3856322099</span>
        </div>
        <button class="btn btn-indigo text-white btn-rounded btn-md mt-4">Contanos tu experiencia con el servicio</button>
      </div>
    </div>
    </div>

    {{-- Card 2 --}}
    <div class="col-md-3 mx-4">
      <div class="card">
      <!-- Card image -->
      <div id="ajustar_imagen">
        <img class="card-img-top img-fluid" src="{{asset('images/gallery-01.jpg')}}" alt="Card image cap">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!-- Social buttons -->
      <div class="card-share">
        <div class="social-reveal">
          <!-- Ver -->
          <a type="button" class="btn-floating btn-tw mt-0 mx-1"><i class="zmdi zmdi-eye"></i></a>
          <!-- Ver Mensajes -->
          <a type="button" class="btn-floating btn-fb mt-0 mx-1"><i class="zmdi zmdi-comments"></i></a>
          <!-- Contactarse -->
          <a type="button" class="btn-floating btn-gplus mt-0 mx-1"><i class="zmdi zmdi-phone"></i></a>
          <!-- whatsapp -->
          {{-- <a type="button" class="btn-floating btn-gplus mt-0 mx-1"><i class="zmdi zmdi-whatsapp"></i></a> --}}
        </div>

        <!-- Button action -->
        <a class="btn-floating btn-action share-toggle indigo ml-auto mr-4 float-right"><i class="zmdi zmdi-plus"></i></a>
      </div>

      <!-- Card content -->
      <div class="card-body">
        <!-- Title -->
        <h4 class="card-title mt-4">Alquiler de castillo de 3x3</h4>
        <hr>
        <!-- Text -->
        <div class="card-text">
          <strong>Prestador</strong><br>
          <span>JumpZone Inflables</span><br>
          <span>+54 3856322099</span>
        </div>
        <button class="btn btn-indigo text-white btn-rounded btn-md mt-4">Contanos tu experiencia con el servicio</button>
      </div>
    </div>
    </div>

    {{-- Card 3 --}}
    <div class="col-md-3 mx-4">
      <div class="card">
        <!-- Card image -->
        <div style="width:16.8em !important; height: 12em !important;">
          <img class="card-img-top" src="{{asset('images/castillo3.webp')}}" alt="Card image cap">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!-- Social buttons -->
        <div class="card-share">
          <div class="social-reveal">
            <!-- Ver -->
            <a type="button" class="btn-floating btn-tw mt-0 mx-1"><i class="zmdi zmdi-eye"></i></a>
            <!-- Ver Mensajes -->
            <a type="button" class="btn-floating btn-fb mt-0 mx-1"><i class="zmdi zmdi-comments"></i></a>
            <!-- Contactarse -->
            <a type="button" class="btn-floating btn-gplus mt-0 mx-1"><i class="zmdi zmdi-phone"></i></a>
            <!-- whatsapp -->
            {{-- <a type="button" class="btn-floating btn-gplus mt-0 mx-1"><i class="zmdi zmdi-whatsapp"></i></a> --}}
          </div>

          <!-- Button action -->
          <a class="btn-floating btn-action share-toggle indigo ml-auto mr-4 float-right"><i class="zmdi zmdi-plus"></i></a>
        </div>

        <!-- Card content -->
        <div class="card-body">
          <!-- Title -->
          <h4 class="card-title mt-4">Alquiler de castillo de 3x3</h4>
          <hr>
          <!-- Text -->
          <div class="card-text">
            <strong>Prestador</strong><br>
            <span>JumpZone Inflables</span><br>
            <span>+54 3856322099</span>
          </div>
          <button class="btn btn-indigo text-white btn-rounded btn-md mt-4">Contanos tu experiencia con el servicio</button>
        </div>
      </div>
    </div>

    {{-- Card 4 --}}
    <div class="col-md-3 mx-4">
      <div class="card">
      <!-- Card image -->
      <div style="width:16.8em !important; height: 12em !important;">
        <img class="card-img-top" src="{{asset('images/castillo3.webp')}}" alt="Card image cap">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!-- Social buttons -->
      <div class="card-share">
        <div class="social-reveal">
          <!-- Ver -->
          <a type="button" class="btn-floating btn-tw mt-0 mx-1"><i class="zmdi zmdi-eye"></i></a>
          <!-- Ver Mensajes -->
          <a type="button" class="btn-floating btn-fb mt-0 mx-1"><i class="zmdi zmdi-comments"></i></a>
          <!-- Contactarse -->
          <a type="button" class="btn-floating btn-gplus mt-0 mx-1"><i class="zmdi zmdi-phone"></i></a>
          <!-- whatsapp -->
          {{-- <a type="button" class="btn-floating btn-gplus mt-0 mx-1"><i class="zmdi zmdi-whatsapp"></i></a> --}}
        </div>

        <!-- Button action -->
        <a class="btn-floating btn-action share-toggle indigo ml-auto mr-4 float-right"><i class="zmdi zmdi-plus"></i></a>
      </div>

      <!-- Card content -->
      <div class="card-body">
        <!-- Title -->
        <h4 class="card-title mt-4">Alquiler de castillo de 3x3</h4>
        <hr>
        <!-- Text -->
        <div class="card-text">
          <strong>Prestador</strong><br>
          <span>JumpZone Inflables</span><br>
          <span>+54 3856322099</span>
        </div>
        <button class="btn btn-indigo text-white btn-rounded btn-md mt-4">Contanos tu experiencia con el servicio</button>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection
