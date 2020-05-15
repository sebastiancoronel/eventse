@extends('layouts.barra_navegacion_principal')

@section('content')

  <div class="container-fluid animsition escritorio-mt-3-p-t-75 mt-5">
    <div class="row">
      <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">

        <!--Form with header-->
        <div class="card wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.3s;">
          <div class="card-body">

            <!--Header-->
            <div class="form-header blue-gradient">
              <h3 class="text-uppercase">Perfil empresa</h3>
            </div>
            <!--Body-->
            <!-- Login form -->
            <form method="POST" action="" enctype="multipart/form-data">
              @csrf

                {{-- Imagen de perfil --}}
                <div class="file-field">
                  <div class="mb-4">
                    <div class="text-center">
                      {{-- <img id="avatar" src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg" style="width: 150px;" class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar"> --}}
                      <i class="zmdi zmdi-cloud-upload" style="font-size:8rem;"></i>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center">
                    <div class="btn btn-mdb-color btn-rounded float-left">
                      <span>Imagen de perfil</span>
                      <input id="file_input" type="file">
                    </div>
                  </div>
                  <span id="nombre_archivo" class="d-flex justify-content-center mt-2"> </span>
                </div>

                {{-- Nombre --}}
                <div class="md-form">
                  <i class="zmdi zmdi-store prefix text-muted"></i>
                  <label for="nombre_fantasia">Nombre de la empresa</label>
                  <input id="nombre_fantasia" type="text" class="form-control{{ $errors->has('nombre_fantasia') ? ' is-invalid' : '' }}" name="nombre_fantasia" value="{{ old('nombre_fantasia') }}" required autofocus>

                  @if ($errors->has('nombre_fantasia'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('nombre_fantasia') }}</strong>
                      </span>
                  @endif
                </div>
                {{-- Dirección --}}
                <div class="md-form">
                  <i class="zmdi zmdi zmdi-pin prefix text-muted"></i>
                  <label for="ubicacion">Ubicación</label>
                  <input id="ubicacion" type="text" class="form-control{{ $errors->has('ubicacion') ? ' is-invalid' : '' }}" name="ubicacion" value="{{ old('ubicacion') }}" required autofocus>

                  @if ($errors->has('ubicacion'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('ubicacion') }}</strong>
                      </span>
                  @endif
                </div>

                {{-- Rubro --}}
                <div class="md-form">
                  <h5 class="d-flex justify-content-center">Rubro</h5>
                  <br>
                  <small class="d-flex justify-content-center">Esto te ayudará a aparecer en las busquedas con mas frecuencia</small>
                  {{-- 1 row --}}
                  <div class="row">
                    <div class="col-md-4 mt-4">
                      <div class="form-check">
                        <input id="salones" class="form-check-input" type="checkbox" name="info_adicional" value="">
                        <label class="form-check-label" for="salones">Salones y quintas</label>
                      </div>
                    </div>

                    <div class="col-md-4 mt-4">
                      <div class="form-check">
                        <input id="juegos" class="form-check-input" type="checkbox" name="info_adicional" value="">
                        <label class="form-check-label" for="juegos">Juegos</label>
                      </div>
                    </div>

                    <div class="col-md-4 mt-4">
                      <div class="form-check">
                        <input id="animacion" class="form-check-input" type="checkbox" name="info_adicional" value="">
                        <label class="form-check-label" for="animacion">Animación</label>
                      </div>
                    </div>
                  </div>
                  {{-- 1 row --}}

                  {{-- 2 row --}}
                  <div class="row">
                    <div class="col-md-4 mt-4">
                      <div class="form-check">
                        <input id="mobiliario" class="form-check-input" type="checkbox" name="info_adicional" value="">
                        <label class="form-check-label" for="mobiliario">mobiliario</label>
                      </div>
                    </div>

                    <div class="col-md-4 mt-4">
                      <div class="form-check">
                        <input id="catering" class="form-check-input" type="checkbox" name="info_adicional" value="">
                        <label class="form-check-label" for="catering">Catering</label>
                      </div>
                    </div>

                    <div class="col-md-4 mt-4">
                      <div class="form-check">
                        <input id="iluminacion" class="form-check-input" type="checkbox" name="info_adicional" value="">
                        <label class="form-check-label" for="iluminacion">Iluminación</label>
                      </div>
                    </div>
                  </div>
                  {{-- 2 row --}}

                  {{-- 3 row --}}
                  <div class="row">
                    <div class="col-md-4 mt-4">
                      <div class="form-check">
                        <input id="ornamentacion" class="form-check-input" type="checkbox" name="info_adicional" value="">
                        <label class="form-check-label" for="ornamentacion">Ornamentación</label>
                      </div>
                    </div>

                    <div class="col-md-4 mt-4">
                      <div class="form-check">
                        <input id="musicaDj" class="form-check-input" type="checkbox" name="info_adicional" value="">
                        <label class="form-check-label" for="musicaDj">Música & DJ´s</label>
                      </div>
                    </div>

                    <div class="col-md-4 mt-4">
                      <div class="form-check">
                        <input id="shows" class="form-check-input" type="checkbox" name="info_adicional" value="">
                        <label class="form-check-label" for="shows">Shows & Bandas</label>
                      </div>
                    </div>
                  </div>
                  {{-- 3 row --}}

                  {{-- 4 row --}}
                  <div class="row">
                    <div class="col-md-4 mt-4">
                      <div class="form-check">
                        <input id="fotografia_y_ediciones" class="form-check-input" type="checkbox" name="info_adicional" value="">
                        <label class="form-check-label" for="fotografia_y_ediciones">Fotógrafía y ediciones</label>
                      </div>
                    </div>

                    <div class="col-md-4 mt-4">
                      <div class="form-check">
                        <input id="disfraces" class="form-check-input" type="checkbox" name="info_adicional" value="">
                        <label class="form-check-label" for="disfraces">Disfraces</label>
                      </div>
                    </div>
                  </div>
                  {{-- 4 row --}}
                </div>

              <div class="row mt-5 d-flex align-items-center justify-content-center">
                <div class="col-md-4 col-12 text-center">
                  <button type="submit" class="btn blue-gradient btn-lg waves-effect waves-light">
                    {{ __('Crear perfil') }}
                  </button>
                </div>
              </div>
            </form>
            <!-- Login form -->

            <div class="text-center">
              <hr>
              <div class="inline-ul text-center d-flex justify-content-center">
                <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-facebook"></i></a>
                <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-google"> </i></a>
                {{-- <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-linkedin-in"> </i></a> --}}
              </div>
            </div>

          </div>
        </div>
        <!--/Form with header-->
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $('#file_input').change(function(e) {
      $("#nombre_archivo").empty();
      var fileName = e.target.files[0].name;
      $("#nombre_archivo").append(fileName);
    });
  </script>
@endsection
