@extends('layouts.barra_navegacion_principal')
@section('content')
  <div class="escritorio-mt-3-p-t-75">
    <div id="mobiliario" class="text-white d-none d-sm-block">
      <div class="row">
        <div class="col-md-4 mt-5 purple-gradient" style="height: 8em;">
          <div class="p-5 d-flex justify-content-start">
            <i class="fas fa-couch align-self-center" style="font-size: 25px;"></i>
            <span class="ml-4 align-self-center" style="font-size: 25px;">MOBILIARIO</span>
          </div>
        </div>
      </div>
    </div>

    {{-- Titulo móvil --}}
    <div class="purple-gradient col-md-4 text-white d-block d-sm-none" style="height: 10em;">
      <div class="p-5 d-flex align-items-center">
        <i class="fas fa-couch" style="font-size: 60px;"></i>
        <span class="ml-4" style="font-size: 25px;">MOBILIARIO</span>
      </div>
    </div>

    {{-- Formulario Juegos --}}
    <div class="card container">
      <div class="card-header">
        <strong style="color:#717fe0;">Categoría</strong>
        >
        <span class="">MOBILIARIO</span>
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
              <div class="col-md-6 md-form">
                <label for="cantidad_animadores">Capacidad máxima de personas</label>
                <input class="form-control" type="number" name="cantidad_animadores" value="">
              </div>

              <div class="col-md-6 md-form">
                <select class="custom-select" name="edades">
                  <option value="">Tipo de mobiliario</option>
                  <option value="">Niños</option>
                  <option value="">Adultos</option>
                </select>
              </div>
            </div>
            {{-- Tiene --}}
            <h5 class="text-uppercase mb-3"><strong>TIENE</strong></h5>
            <div class="">
              <div class="row mt-2">
                <div class="col-md-4">
                  <div class="form-check">
                    <input id="sillones" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="sillones">Sillones</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="puf" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="puf">Puf</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="mesas" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="mesas">Mesas</label>
                  </div>
                </div>
              </div>

              <div class="form-row mt-2">
                <div class="col-md-4">
                  <div class="form-check">
                    <input id="puf_luminoso" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="puf_luminoso">Puf luminoso</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="gazebos" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="gazebos">Gazebos</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="carpas" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="carpas">Carpas</label>
                  </div>
                </div>
              </div>

              <div class="form-row mt-2">
                <div class="col-md-4">
                  <div class="form-check">
                    <input id="caminos" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="caminos">Caminos</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="fanales_y_marcasenderos" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="fanales_y_marcasenderos">Fanales y marcasenderos</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="farolas" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="farolas">Farolas</label>
                  </div>
                </div>
              </div>

              <div class="form-row mt-2">
                <div class="col-md-4">
                  <div class="form-check">
                    <input id="biombo" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="biombo">Biombo</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="mini_living" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="mini_living">Mini Living</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="lamparas_vintage" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="lamparas_vintage">Lamparas vintage</label>
                  </div>
                </div>
              </div>

              <div class="form-row mt-2">
                <div class="col-md-4">
                  <div class="form-check">
                    <input id="camastro" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="camastro">Camastro</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="puf_redondo" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="puf_redondo">Puf redondo</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="isla_circular" class="form-check-input" type="checkbox" name="info_adicional" value="">
                    <label class="form-check-label" for="isla_circular">Isla circular</label>
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
