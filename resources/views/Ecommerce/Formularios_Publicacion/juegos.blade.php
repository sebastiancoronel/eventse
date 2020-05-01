@extends('layouts.barra_navegacion_principal')
@section('content')
  <div class="escritorio-mt-3-p-t-75">
    <div id="juegos" class="text-white d-none d-sm-block">
      <div class="row">
        <div class="col-md-4 mt-5 peach-gradient" style="height: 8em;">
          <div class="p-5 d-flex justify-content-start">
            <i class="fab fa-fort-awesome" style="font-size: 25px;"></i>
            <span class="ml-4" style="font-size: 25px;">JUEGOS</span>
          </div>
        </div>
      </div>
    </div>

    {{-- Titulo móvil --}}
    <div class="peach-gradient col-md-4 text-white d-block d-sm-none" style="height: 10em;">
      <div class="p-5 d-flex align-items-center">
        <i class="fab fa-fort-awesome" style="font-size: 60px;"></i>
        <span class="ml-4" style="font-size: 25px;">JUEGOS</span>
      </div>
    </div>

    {{-- Formulario Juegos --}}
    <div class="card container">
      <div class="card-header">
        <strong style="color:#717fe0;">Categoría</strong>
        >
        <span class="">JUEGOS</span>
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

          <div class="mt-5">
            <div class="col md-form">
              <label for="titulo">Título</label>
              <input class="form-control" type="text" name="titulo" value="">
            </div>

            <div class="col md-form">
              <label for="titulo">Descripción</label>
              <textarea class="md-textarea form-control" name="descripcion" rows="3"></textarea>
            </div>
          </div>

          <div class="d-flex justify-content-end">
            <div class="col-md-3 flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5 mt-5">
              Publicar
            </div>
          </div>
      </form>
    </div>
  </div>
@endsection
