@extends('layouts.barra_navegacion_principal')
@section('content')
  <div class="animsition">
    {{-- Escritorio --}}
    <div class="bg0 p-t-75 mt-3 d-none d-sm-block">
      <div class="" style="height: 200px; background:#6c7ae0;">
        <h2 class="text-white d-flex justify-content-center p-5 m-5">¿Que deseas publicar?</h2>
      </div>

      <div class="row d-flex justify-content-center mt-3">
        {{-- Salones --}}
        <a  href="#"class="card text-center" style="color: grey;" onmouseover="this.style.color='#f40082'" onmouseout="this.style.color='grey'">
          <div class="card-body d-flex flex-column">
            <i class="fas fa-store-alt" style="font-size: 60px;"></i>
            <span class="mt-4">Inmuebles</span>
          </div>
        </a>

        {{-- Juegos --}}
        <a href="#" class="ml-5 card text-center" style="color: grey;" onmouseover="this.style.color='#f40082'" onmouseout="this.style.color='grey'">
          <div class="card-body d-flex flex-column">
            <i class="fab fa-fort-awesome" style="font-size: 60px;"></i>
            <span class="mt-4">Juegos</span>
          </div>
        </a>

        {{-- Animación --}}
        <a href="#" class="ml-5 card text-center" style="color: grey;" onmouseover="this.style.color='#f40082'" onmouseout="this.style.color='grey'">
          <div class="card-body d-flex flex-column">
            <i class="fas fa-grin-beam" style="font-size: 60px;"></i>
            <span class="mt-4">Animación</span>
          </div>
        </a>

        {{-- Mobiliario --}}
        <a href="#" class="ml-5 card text-center" style="color: grey;" onmouseover="this.style.color='#f40082'" onmouseout="this.style.color='grey'">
          <div class="card-body d-flex flex-column">
            <i class="fas fa-couch" style="font-size: 60px;"></i>
            <span class="mt-4">Mobiliario</span>
          </div>
        </a>

        {{-- Catering --}}
        <a href="#" class="ml-5 card text-center" style="color: grey;" onmouseover="this.style.color='#f40082'" onmouseout="this.style.color='grey'">
          <div class="card-body d-flex flex-column">
            <i class="fas fa-utensils" style="font-size: 60px;"></i>
            <span class="mt-4">Catering</span>
          </div>
        </a>

        {{-- Illuminación --}}
        <a href="#" class="ml-5 card text-center" style="color: grey;" onmouseover="this.style.color='#f40082'" onmouseout="this.style.color='grey'">
          <div class="card-body d-flex flex-column">
            <i class="far fa-lightbulb" style="font-size: 60px;"></i>
            <span class="mt-4">Illuminación</span>
          </div>
        </a>

        {{-- Música & DJ´s --}}
        <a href="#" class="ml-5 card text-center" style="color: grey;" onmouseover="this.style.color='#f40082'" onmouseout="this.style.color='grey'">
          <div class="card-body d-flex flex-column">
            <i class="fas fa-headphones-alt" style="font-size: 60px;"></i>
            <span class="mt-4">Música & DJ´s</span>
          </div>
        </a>

      </div>
    </div>
    {{-- Fin Escritorio --}}

    {{-- Formulario Inmuebles --}}
    <form class="row d-flex justify-content-center mt-5">
      @csrf
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input class="form-control" type="text" name="nombre" value="" placeholder="Por ej: Finca las marias">

        <!-- Row Calle - Nro -->
        <div class="row">
          <div class="col-md-6">
            <label class="mt-4" for="calle">Calle</label>
            <input class="form-control" type="text" name="calle" value="">
          </div>

          <div class="col-md-6">
            <label class="mt-4" for="numero">Nro.</label>
            <input class="form-control" type="text" name="numero" value="">
          </div>
        </div>
        <label for="info_adicional">Información adicional</label>
        <input class="form-control" type="text" name="info_adicional" value="" placeholder="Información adicional de la ubicación">
      </div>
    </form>

  </div>
@endsection
