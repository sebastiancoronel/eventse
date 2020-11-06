@extends('layouts.barra_navegacion_principal')
@section('content')
  <div class="escritorio-mt-3-p-t-75">
    <div id="ornamentacion" class="text-white d-none d-sm-block">
      <div class="row">
        <div class="col-md-4 mt-5 ripe-malinka-gradient" style="height: 8em;">
          <div class="p-5 d-flex justify-content-start">
            <i class="far fa-lightbulb align-self-center" style="font-size: 25px;"></i>
            <span class="ml-4 align-self-center" style="font-size: 25px;">ORNAMENTACIÓN</span>
          </div>
        </div>
      </div>
    </div>

    {{-- Titulo móvil --}}
    <div class="ripe-malinka-gradient col-md-4 text-white d-block d-sm-none" style="height: 10em;">
      <div class="p-5 d-flex align-items-center">
        <i class="far fa-lightbulb" style="font-size: 60px;"></i>
        <span class="ml-4" style="font-size: 25px;">ORNAMENTACIÓN</span>
      </div>
    </div>

    {{-- Formulario Juegos --}}
    <div class="card container">
      <div class="card-header">
        <strong style="color:#717fe0;">Categoría</strong>
        >
        <span class="">ORNAMENTACIÓN</span>
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

          {{-- Titulo e inputs --}}
          <div class="mt-5">
            <div class="col md-form">
              <label for="titulo">Título</label>
              <input class="form-control" type="text" name="titulo" value="">
            </div>

            <div class="mt-5">
              <h5 class="text-uppercase"><strong>TIPO DE EVENTO</strong></h5>
              <div class="row mt-5">
                <div class="col-md-4">
                  <div class="form-check">
                    <input id="cumpleaños_infantiles" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="cumpleaños_infantiles">Cumpleaños infantiles</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="cumpleaños_adultos" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="cumpleaños_adultos">Cumpleaños adultos</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="fiestas_tematicas" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="fiestas_tematicas">Fiestas temáticas</label>
                  </div>
                </div>
              </div>

              <div class="row mt-5">
                <div class="col-md-4">
                  <div class="form-check">
                    <input id="comuniones y bautizos" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="comuniones y bautizos">Comuniones y bautizos</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="bodas_y_aniversarios" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="bodas_y_aniversarios">Bodas y aniversarios</label>
                  </div>
                </div>
              </div>
            </div>

            {{-- Tiene --}}
            <h5 class="text-uppercase mt-5  mb-3"><strong>Incluye</strong></h5>
            <div class="">
              <div class="row mt-5">
                <div class="col-md-4">
                  <div class="form-check">
                    <input id="centros_de_mesa" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="centros_de_mesa">Centros de mesa</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="guirnaldas" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="guirnaldas">Guirnaldas</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="caminos" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="caminos">Caminos</label>
                  </div>
                </div>
              </div>

              <div class="form-row mt-5">
                <div class="col-md-4">
                  <div class="form-check">
                    <input id="manteles" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="manteles">Manteles</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="vestidos_sillas" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="vestidos_sillas">Vestidos para sillas</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="moños" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="moños">Moños</label>
                  </div>
                </div>
              </div>

              <div class="form-row mt-5">
                <div class="col-md-4">
                  <div class="form-check">
                    <input id="luces_varias" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="luces_varias">Luces varias</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="esculturas" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="esculturas">Esculturas</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="carteles" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="carteles">Carteles / Carteles luminosos</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="col md-form">
              <label for="titulo">Descripción adicional (Que incluye y que no incluye)</label>
              <textarea class="md-textarea form-control" name="descripcion" rows="3"></textarea>
            </div>
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
