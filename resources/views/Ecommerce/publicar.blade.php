@extends('layouts.barra_navegacion_principal')
@section('content')
<div class="animsition escritorio-mt-3-p-t-75">

  <div class="" style="height: 200px; background:#6c7ae0;">
    <h2 class="text-white d-flex justify-content-center p-5 m-5">¿Que deseas publicar?</h2>
  </div>

  <div class="row d-flex justify-content-center mt-3">
    {{-- Salones --}}
    <a  href="#" class="col-md-1 card text-center" style="color: grey;" onmouseover="this.style.color='#f40082'" onmouseout="this.style.color='grey'">
      <div class="card-body d-flex flex-column">
        <i class="zmdi zmdi-store" style="font-size: 60px;"></i>
        <span class="mt-4">Inmuebles</span>
      </div>
    </a>

    {{-- Juegos --}}
    <a href="#" class="col-md-1 card text-center" style="color: grey;" onmouseover="this.style.color='#f40082'" onmouseout="this.style.color='grey'">
      <div class="card-body d-flex flex-column">
        <i class="fab fa-fort-awesome" style="font-size: 60px;"></i>
        <span class="mt-4">Juegos</span>
      </div>
    </a>

    {{-- Animación --}}
    <a href="#" class="col-md-1 card text-center" style="color: grey;" onmouseover="this.style.color='#f40082'" onmouseout="this.style.color='grey'">
      <div class="card-body d-flex flex-column">
        <i class="zmdi zmdi-mood" style="font-size: 60px;"></i>
        <span class="mt-4">Animación</span>
      </div>
    </a>

    {{-- Mobiliario --}}
    <a href="#" class="col-md-1 card text-center" style="color: grey;" onmouseover="this.style.color='#f40082'" onmouseout="this.style.color='grey'">
      <div class="card-body d-flex flex-column">
        <i class="fas fa-couch" style="font-size: 60px;"></i>
        <span class="mt-4">Mobiliario</span>
      </div>
    </a>

    {{-- Catering --}}
    <a href="#" class="col-md-1 card text-center" style="color: grey;" onmouseover="this.style.color='#f40082'" onmouseout="this.style.color='grey'">
      <div class="card-body d-flex flex-column">
        <i class="zmdi zmdi-cutlery" style="font-size: 60px;"></i>
        <span class="mt-4">Catering</span>
      </div>
    </a>

    {{-- Illuminación --}}
    <a href="#" class="col-md-1 card text-center" style="color: grey;" onmouseover="this.style.color='#f40082'" onmouseout="this.style.color='grey'">
      <div class="card-body d-flex flex-column">
        <i class="far fa-lightbulb" style="font-size: 60px;"></i>
        <span class="mt-4">Illuminación</span>
      </div>
    </a>

    {{-- Ornamentación --}}
    <a href="#" class="col-md-1 card text-center" style="color: grey;" onmouseover="this.style.color='#f40082'" onmouseout="this.style.color='grey'">
      <div class="card-body d-flex flex-column">
        <i class="zmdi zmdi-flower-alt" style="font-size: 60px;"></i>
        <span class="mt-4">Ornamentación</span>
      </div>
    </a>

    {{-- Música & DJ´s --}}
    <a href="#" class="col-md-1 card text-center" style="color: grey;" onmouseover="this.style.color='#f40082'" onmouseout="this.style.color='grey'">
      <div class="card-body d-flex flex-column">
        <i class="zmdi zmdi-headset" style="font-size: 60px;"></i>
        <span class="mt-4">Música & DJ´s</span>
      </div>
    </a>
  </div>

    {{-- Formulario Inmuebles --}}
    <div class="d-flex justify-content-center">
      <form class="card col-md-4">
        @csrf
        <div class="card-body">
          <div class="col md-form">
            <label for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" value="">
          </div>

          <!-- Calle - Nro -->
          <div class="row">
            <div class="col-md-6">
              <div class="md-form">
                <input class="form-control" type="text" name="calle" value="">
                <label for="calle">Calle</label>
              </div>
            </div>

            <div class="col-md-6 md-form">
              <label for="numero">Nro.</label>
              <input class="form-control" type="text" name="numero" value="">
            </div>
          </div>

          <div class="md-form">
            <label for="capacidad">Capacidad de invitados</label>
            <input id="capacidad" class="form-control" type="number" name="numero" value="">
          </div>

          <div class="form-row">
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
          </div>


          {{-- <div class="md-form">
            <label for="info_adicional">Información adicional de la ubicación</label>
            <input class="form-control" type="text" name="info_adicional" value="">
          </div> --}}
        </div>
    </form>

    </div>

</div>
@endsection
