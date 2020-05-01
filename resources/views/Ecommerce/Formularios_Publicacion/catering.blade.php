@extends('layouts.barra_navegacion_principal')
@section('content')
  <div class="escritorio-mt-3-p-t-75">
    <div id="catering" class="text-white d-none d-sm-block">
      <div class="row">
        <div class="col-md-4 mt-5 peach-gradient" style="height: 8em;">
          <div class="p-5 d-flex justify-content-start">
            <i class="zmdi zmdi-cutlery align-self-center" style="font-size: 25px;"></i>
            <span class="ml-4 align-self-center" style="font-size: 25px;">SERVICIOS DE CATERING</span>
          </div>
        </div>
      </div>
    </div>

    {{-- Titulo móvil --}}
    <div class="peach-gradient col-md-4 text-white d-block d-sm-none" style="height: 10em;">
      <div class="p-5 d-flex align-items-center">
        <i class="zmdi zmdi-cutlery" style="font-size: 60px;"></i>
        <span class="ml-4" style="font-size: 25px;">SERVICIOS DE CATERING</span>
      </div>
    </div>

    {{-- Formulario Juegos --}}
    <div class="card container">
      <div class="card-header row"> <!-- TUve que agregarle row para alinear el link "Modificar"-->
        <strong style="color:#717fe0;">Categoría</strong>
        <span class="mx-1"> > </span>
        <span class="">SERVICIOS DE CATERING</span>
        <span class="ml-5 d-none d-sm-block"> <a href="{{route('Publicar')}}">Modificar</a></span>
        <!-- Movil (Por los margenes)-->
        <span class="d-block d-sm-none"><br> <a href="{{route('Publicar')}}">Modificar</a></span>
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

          {{-- Titulo e inputs --}}
          <div class="mt-5">
            <div class="col md-form">
              <label for="titulo">Título</label>
              <input class="form-control" type="text" name="titulo" value="">
            </div>
            <div class="form-row">
              <div class="col-md-6 md-form">
                <label for="cantidad_personas_maxima">Cantidad de invitados</label>
                <input class="form-control" type="number" name="cantidad_personas_maxima" value="">
              </div>

            </div>
            {{-- Tiene --}}
            <h5 class="text-uppercase mb-3"><strong>TIENE</strong></h5>
            <div class="">
              <div class="row mt-2">
                <div class="col-md-4">
                  <div class="form-check">
                    <input id="mozos_y_camareras" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="mozos_y_camareras">Mozos y camareras</label>
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
                    <input id="barra_de_tragos" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="barra_de_tragos">Barra de tragos</label>
                  </div>
                </div>
              </div>

              <div class="form-row mt-2">
                <div class="col-md-4">
                  <div class="form-check">
                    <input id="pata_flameada" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="pata_flameada">Pata flameada</label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col md-form mt-5">
            <label for="titulo">Descripción adicional (Que incluye y que no incluye)</label>
            <textarea class="md-textarea form-control" name="descripcion" rows="3"></textarea>
          </div>


          <div class="d-flex justify-content-end">
            <button class="col-md-3 flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5 mt-5">
              Publicar
            </button>
          </div>
      </form>
    </div>
  </div>
@endsection
