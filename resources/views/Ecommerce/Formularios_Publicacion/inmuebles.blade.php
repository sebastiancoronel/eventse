@extends('layouts.barra_navegacion_principal')
@section('content')
  <div class="escritorio-mt-3-p-t-75">
    <div id="inmueble" class="text-white d-none d-sm-block">
      <div class="row">
        <div class="col-md-4 mt-5 purple-gradient" style="height: 8em;">
          <div class="p-5 d-flex justify-content-start">
            <i class="zmdi zmdi-store align-self-center" style="font-size: 25px;"></i>
            <span class="ml-4 align-self-center" style="font-size: 25px;">INMUEBLES</span>
          </div>
        </div>
      </div>
    </div>

    {{-- Titulo móvil --}}
    <div class="purple-gradient col-md-4 text-white d-block d-sm-none" style="height: 10em;">
      <div class="p-5 d-flex align-items-center">
        <i class="zmdi zmdi-store" style="font-size: 60px;"></i>
        <span class="ml-4" style="font-size: 25px;">INMUEBLES</span>
      </div>
    </div>

    {{-- Formulario Inmuebles --}}
    <div class="card container">
      <div class="card-header">
        <strong style="color:#717fe0;">Categoría</strong>
        >
        <span class="">INMUEBLES</span>
        <span class="ml-5"> <a href="{{route('Publicar')}}">Modificar</a></span>
      </div>

      <form class="card-body" action="#" method="post">
        @csrf
      {{-- Imagenes --}}
        <div class="mt-5">
          <h5 class="text-uppercase mb-3"><strong>Fotos</strong></h5>
          <div class="row">
            <!-- Foto 1 -->
            <div class="md-form col-md-6">
              <div class="file-field">
                <div class="btn btn-primary btn-sm float-left">
                  <span>Elegir</span>
                  <input type="file">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" placeholder="Subí una foto principal">
                </div>
              </div>
            </div>

            <!-- Foto 2 -->
            <div class="md-form col-md-6">
              <div class="file-field">
                <div class="btn btn-primary btn-sm float-left">
                  <span>Elegir</span>
                  <input type="file">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" placeholder="Imagen 2">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Foto 3 -->
            <div class="md-form col-md-6">
              <div class="file-field">
                <div class="btn btn-primary btn-sm float-left">
                  <span>Elegir</span>
                  <input type="file">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" placeholder="Imagen 3">
                </div>
              </div>
            </div>

            <!-- Foto 4 -->
            <div class="md-form col-md-6">
              <div class="file-field">
                <div class="btn btn-primary btn-sm float-left">
                  <span>Elegir</span>
                  <input type="file">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" placeholder="Imagen 4">
                </div>
              </div>
            </div>
          </div>
        </div>

        <h5 class="mt-5"><strong class="text-uppercase">Que tipo de inmueble es?</strong></h5>
        <select class="custom-select mt-5" name="categoria_inmueble">
          <option value="">Seleccionar</option>
          <option value="">Salón</option>
          <option value="">Quinta</option>
          <option value="">Salón de fiestas infantil</option>
          <option value="">Complejo</option>
          <option value="">Otro</option>
        </select>
        <div class="mt-5">
          <div class="col md-form">
            <label for="nombre">Nombre del inmueble o salon</label>
            <input class="form-control" type="text" name="nombre" value="">
          </div>
        </div>

        <!-- Calle - Nro -->
        <div class="row">
          <div class="col-md-4">
            <div class="md-form">
              <input class="form-control" type="text" name="calle" value="">
              <label for="calle">Calle</label>
            </div>
          </div>

          <div class="col-md-4 md-form">
            <label for="barrio">Barrio</label>
            <input class="form-control" type="text" name="barrio" value="">
          </div>

          <div class="col-md-4 md-form">
            <label for="numero">Nro.</label>
            <input class="form-control" type="text" name="numero" value="">
          </div>

        </div>

        <div class="md-form">
          <label for="capacidad">Capacidad de invitados</label>
          <input id="capacidad" class="form-control" type="number" name="numero" value="">
        </div>

        <!-- Provincia del Inmueble -->
        <div class="md-form">
          <h5 class="mt-5"><strong>UBICACIÓN</strong></h5>
          <input hidden id="provincia_nombre" type="text" name="provincia_nombre" value="">
            <select id="provincia" class="custom-select mt-5">
              <option value="" selected>En que provincia está ubicado?</option>
              {{-- @foreach ($ProvinciasLocalidadesJson as $provincia)
              <option value="{{ $provincia['id'] }}">{{$provincia['nombre']}}</option>
            @endforeach --}}
            </select>
        </div>

        <!-- Ciudad del Inmueble -->
        <div id="seleccionar_localidad" hidden class="md-form">
          <span>En que ciudad?</span>
          <select id="localidad" class="custom-select">
            {{-- <option value="" selected>En que ciudad?</option> --}}
            {{-- @foreach ($ProvinciasLocalidadesJson as $localidad)

          @endforeach --}}
          </select>
        </div>

        {{-- Servicios que provee --}}
        <h5 class="mt-5"><strong>CUENTA CON</strong></h5>
        <div class="form-row mt-5">
            <div class="col-md-4">
              <div class="form-check">
                <input id="barra_tragos" class="form-check-input" type="checkbox" name="info_adicional" value="">
                <label class="form-check-label" for="barra_tragos">Barra de tragos</label>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-check">
                <input id="catering" class="form-check-input" type="checkbox" name="info_adicional" value="">
                <label class="form-check-label" for="catering">Catering</label>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-check">
                <input id="dj" class="form-check-input" type="checkbox" name="info_adicional" value="">
                <label class="form-check-label" for="dj">Dj</label>
              </div>
            </div>

          </div>

        <div class="form-row mt-4">
              <div class="col-md-4">
                <div class="form-check">
                  <input id="mesas_sillas" class="form-check-input" type="checkbox" name="info_adicional" value="">
                  <label class="form-check-label" for="mesas_sillas">Mesas y sillas</label>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-check">
                  <input id="mesa_dulce" class="form-check-input" type="checkbox" name="info_adicional" value="">
                  <label class="form-check-label" for="mesa_dulce">Mesa dulce</label>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-check">
                  <input id="guardarropas" class="form-check-input" type="checkbox" name="info_adicional" value="">
                  <label class="form-check-label" for="guardarropas">Guardaropas</label>
                </div>
              </div>
            </div>

        <div class="form-row mt-4">
              <div class="col-md-4">
                <div class="form-check">
                  <input id="mozos_camareras" class="form-check-input" type="checkbox" name="info_adicional" value="">
                  <label class="form-check-label" for="mozos_camareras">Mozos y camareras</label>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-check">
                  <input id="proyector_pantalla" class="form-check-input" type="checkbox" name="info_adicional" value="">
                  <label class="form-check-label" for="proyector_pantalla">Proyector y pantalla</label>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-check">
                  <input id="recepcion" class="form-check-input" type="checkbox" name="info_adicional" value="">
                  <label class="form-check-label" for="recepcion">Recepción</label>
                </div>
              </div>

            </div>

        <div class="form-row mt-4">
              <div class="col-md-4">
                <div class="form-check">
                  <input id="vajillas" class="form-check-input" type="checkbox" name="info_adicional" value="">
                  <label class="form-check-label" for="vajillas">Vajillas</label>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-check">
                  <input id="wifi" class="form-check-input" type="checkbox" name="info_adicional" value="">
                  <label class="form-check-label" for="wifi">Wifi</label>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-check">
                  <input id="piscina" class="form-check-input" type="checkbox" name="info_adicional" value="">
                  <label class="form-check-label" for="piscina">Piscina</label>
                </div>
              </div>
        </div>

        <div class="d-flex justify-content-end">
          <a href="{{route('MostrarPlanes')}}" class="col-md-3 flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5 mt-5">
            Publicar
          </a>
        </div>

      </form>


      </div>
    </div>



  </div>
@endsection
