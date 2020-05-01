@extends('layouts.barra_navegacion_principal')
@section('content')
  <div class="escritorio-mt-3-p-t-75">
    <div id="iluminacion" class="text-white d-none d-sm-block">
      <div class="row">
        <div class="col-md-4 mt-5 ripe-malinka-gradient" style="height: 8em;">
          <div class="p-5 d-flex justify-content-start">
            <i class="far fa-lightbulb align-self-center" style="font-size: 25px;"></i>
            <span class="ml-4 align-self-center" style="font-size: 25px;">ILUMINACIÓN</span>
          </div>
        </div>
      </div>
    </div>

    {{-- Titulo móvil --}}
    <div class="ripe-malinka-gradient col-md-4 text-white d-block d-sm-none" style="height: 10em;">
      <div class="p-5 d-flex align-items-center">
        <i class="far fa-lightbulb" style="font-size: 60px;"></i>
        <span class="ml-4" style="font-size: 25px;">ILUMINACIÓN</span>
      </div>
    </div>

    {{-- Formulario Juegos --}}
    <div class="card container">
      <div class="card-header">
        <strong style="color:#717fe0;">Categoría</strong>
        >
        <span class="">ILUMINACIÓN</span>
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
            <div class="form-row">
              <div class="col-md-4 md-form">
                <label for="años_experiencia">Años de experiencia</label>
                <input class="form-control" type="number" name="años_experiencia" value="">
              </div>
            </div>

            {{-- Tiene --}}
            <h5 class="text-uppercase mb-3"><strong>TIENE</strong></h5>
            <div class="">
              <div class="row mt-5">
                <div class="col-md-4">
                  <div class="form-check">
                    <input id="maquina_de_humo" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="maquina_de_humo">Máquina de humo</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="laser" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="laser">Laser</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="maquina_espuma" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="maquina_espuma">Máquina de espuma</label>
                  </div>
                </div>
              </div>

              <div class="form-row mt-5">
                <div class="col-md-4">
                  <div class="form-check">
                    <input id="flash" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="flash">Flash</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="luz_rgb" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="luz_rgb">Luz RGB</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="efecto_de_luces" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="efecto_de_luces">Efecto de luces</label>
                  </div>
                </div>
              </div>

              <div class="form-row mt-5">
                <div class="col-md-4">
                  <div class="form-check">
                    <input id="luz_proton" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="luz_proton">Luz proton</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="proyector" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="proyector">Proyector</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="esfera_espejada" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="esfera_espejada">Esfera espejada</label>
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
