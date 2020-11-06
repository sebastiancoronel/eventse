@extends('layouts.barra_navegacion_principal')
@section('content')

  <div class="escritorio-mt-3-p-t-75">
    <div id="shows" class="text-white d-none d-sm-block">
      <div class="row">
        <div class="col-md-4 mt-5 peach-gradient" style="height: 8em;">
          <div class="p-5 d-flex justify-content-start">
            <i class="far fa-lightbulb align-self-center" style="font-size: 25px;"></i>
            <span class="ml-4 align-self-center" style="font-size: 25px;">Bandas y shows</span>
          </div>
        </div>
      </div>
    </div>

    {{-- Titulo móvil --}}
    <div class="peach-gradient col-md-4 text-white d-block d-sm-none" style="height: 10em;">
      <div class="p-5 d-flex align-items-center">
        <i class="far fa-lightbulb" style="font-size: 60px;"></i>
        <span class="ml-4" style="font-size: 25px;">Bandas y shows</span>
      </div>
    </div>

    {{-- Formulario Juegos --}}
    <div class="card container">
      <div class="card-header">
        <strong style="color:#717fe0;">Categoría</strong>
        >
        <span class="">Bandas y shows</span>
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

            <div class="col md-form">
              <label for="años_experiencia">Años de experiencia</label>
              <input class="form-control" type="number" name="años_experiencia" value="">
            </div>

            <div class="mt-5">
              <h5 class="text-uppercase"><strong>Shows para</strong></h5>
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
            <h5 class="text-uppercase mt-5  mb-3"><strong>Tipo de música</strong></h5>
            <div class="">
              <div class="row mt-5">
                <div class="col-md-4">
                  <div class="form-check">
                    <input id="musica_70" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="musica_70">Música de los 70'</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="musica_80" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="musica_80">Música de los 80'</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="musica_90" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="musica_90">Música de los 90'</label>
                  </div>
                </div>
              </div>

              <div class="form-row mt-5">
                <div class="col-md-4">
                  <div class="form-check">
                    <input id="musica_2000" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="musica_2000">Música de los 2000</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="clasicos" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="clasicos">Clásicos</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="cumbia" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="cumbia">Cumbia</label>
                  </div>
                </div>
              </div>

              <div class="form-row mt-5">
                <div class="col-md-4">
                  <div class="form-check">
                    <input id="cuarteto" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="cuarteto">Cuarteto</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="reggaeton" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="reggaeton">Reggaeton</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="bachata" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="bachata">Bachata</label>
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
