@extends('layouts.barra_navegacion_principal')
@section('content')
  <div class="escritorio-mt-3-p-t-75">
    <div id="animacion" class="text-white d-none d-sm-block">
      <div class="row">
        <div class="col-md-4 mt-5 ripe-malinka-gradient" style="height: 8em;">
          <div class="p-5 d-flex justify-content-start">
            <i class="zmdi zmdi-mood" style="font-size: 25px;"></i>
            <span class="ml-4" style="font-size: 25px;">ANIMACIÓN</span>
          </div>
        </div>
      </div>
    </div>

    {{-- Titulo móvil --}}
    <div class="ripe-malinka-gradient col-md-4 text-white d-block d-sm-none" style="height: 10em;">
      <div class="p-5 d-flex align-items-center">
        <i class="zmdi zmdi-mood" style="font-size: 60px;"></i>
        <span class="ml-4" style="font-size: 25px;">ANIMACIÓN</span>
      </div>
    </div>

    {{-- Formulario Juegos --}}
    <div class="card container">
      <div class="card-header">
        <strong style="color:#717fe0;">Categoría</strong>
        >
        <span class="">ANIMACIÓN</span>
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
                <label for="cantidad_animadores">Cantidad de animadores</label>
                <input class="form-control" type="number" name="cantidad_animadores" value="">
              </div>

              <div class="col-md-4 md-form">
                <label for="años_experiencia">Años de experiencia</label>
                <input class="form-control" type="number" name="años_experiencia" value="">
              </div>

              <div class="col-md-4 md-form">
                <select class="custom-select" name="edades">
                  <option value="">Todas las edades</option>
                  <option value="">1-6 años</option>
                  <option value="">6-12 años</option>
                  <option value="">13-17 años</option>
                  <option value="">+18 años</option>
                </select>
              </div>
            </div>

            <div class="col md-form">
              <label for="titulo">Descripción adicional (Que incluye y que no incluye)</label>
              <textarea class="md-textarea form-control" name="descripcion" rows="3"></textarea>
            </div>
          </div>

          {{-- Tiene --}}
          <h5 class="text-uppercase mb-3"><strong>TIENE</strong></h5>
          <div class="">
            <div class="row mt-5">
              <div class="col-md-4">
                <div class="form-check">
                  <input id="magos" class="form-check-input" type="checkbox" name="info_adicional" value="">
                  <label class="form-check-label" for="magos">Magos</label>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-check">
                  <input id="maquillaje" class="form-check-input" type="checkbox" name="info_adicional" value="">
                  <label class="form-check-label" for="maquillaje">Maquillaje</label>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-check">
                  <input id="karaoke" class="form-check-input" type="checkbox" name="info_adicional" value="">
                  <label class="form-check-label" for="karaoke">Karaoke</label>
                </div>
              </div>
            </div>

            <div class="form-row mt-5">
              <div class="col-md-4">
                <div class="form-check">
                  <input id="payasos" class="form-check-input" type="checkbox" name="info_adicional" value="">
                  <label class="form-check-label" for="payasos">Payasos</label>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-check">
                  <input id="personajes" class="form-check-input" type="checkbox" name="info_adicional" value="">
                  <label class="form-check-label" for="personajes">Personajes</label>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-check">
                  <input id="titeres" class="form-check-input" type="checkbox" name="info_adicional" value="">
                  <label class="form-check-label" for="titeres">Títeres</label>
                </div>
              </div>
            </div>

            <div class="form-row mt-5">
              <div class="col-md-4">
                <div class="form-check">
                  <input id="globologia" class="form-check-input" type="checkbox" name="info_adicional" value="">
                  <label class="form-check-label" for="globologia">Globología</label>
                </div>
              </div>
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
