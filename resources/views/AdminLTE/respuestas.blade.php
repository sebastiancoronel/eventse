@extends('AdminLTE.home')
@section('content')
<div class="dispositivo">
  <h4 class="text-muted">Respuestas recibidas</h4>
  <hr>
  
  @if ( count($Respuestas) )
    @foreach ( $Respuestas as $respuesta )

    {{-- <form action=" {{ route('AlmacenarRespuesta') }} " method="POST">
      @csrf
      <input hidden type="text" name="id_pregunta" value=" {{ $respuesta->id }} ">

      <div class="card">
        <div class="card-header">
          <h4> {{ $respuesta->nombre_servicio }} </h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12 col-12">
            <strong> {{ $respuesta->name }} {{ $respuesta->lastname }}: </strong> {{ $respuesta->pregunta }}
            </div>
            <div class="col-lg-12 col-12 mt-5">
              <strong> Respuesta: </strong> {{ ($respuesta->respuesta ? : ' ') }}
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="bor8 bg0 m-b-12">
            <textarea class="stext-111 cl8 plh3 size-111 p-lr-15 h-100" name="respuesta" maxlength="1000" cols="100" rows="2" placeholder="Escribir otra pregunta" required></textarea>
          </div>

          <div class="pull-right">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>

        </div>
      </div>
    </form>
    <br> --}}
    @endforeach
  @else
    <!-- Si no hay preguntas -->
    <div class="alert alert-primary p-2 rounded">
      <i class="fas fa-exclamation-circle text-primary ml-2"></i> <span>No tienes preguntas</span>
    </div>
  @endif

  <section>
    <div class="container mt-5">
    <!-- Section: Block Content -->
      <section>
        <div class="card">
          <div class="card-header white d-flex justify-content-between">
            <p class="col-md-8 h5-responsive font-weight-bold mb-0">
              <a href="#">
                <img src="{{asset('images/castillo1.webp')}}" width="10%">
              </a>
              <span class="ml-2">Alquiler de Castillo inflable acuático</span>
              <strong class="text-danger">$850</strong><sup class="text-danger">00</sup>
            </p>
            <small class="col-md-4 d-flex justify-content-end "> Publicado el 10/08/2019</small>
          </div>
        <!-- Chat -->
        <div class="card-body my-custom-scrollbar" style="height: 60vh;">
          <div class="media">
            <img class="avatar rounded-circle card-img-35 z-depth-1 d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" alt="Generic placeholder image">
            <div class="media-body">
              <p class="mt-0 font-weight-bold small mb-1">Johny Danish<span class="text-muted float-right small mt-3p">12 Nov 3:00 PM</span></p>
              <p class="mb-0 font-weight-light small grey lighten-2 p-2 rounded">Is this template really for free? That's unbelievable!</p>
            </div>
          </div>

          <div class="media mt-3">
            <div class="media-body">
              <p class="mt-0 font-weight-bold small mb-1"><span class="text-muted small mt-3p">12 Nov 3:05 PM</span><span class="float-right">Alice Cooper</span></p>
              <p class="mb-0 font-weight-light small primary-color text-white p-2 rounded">You better believe it!</p>
            </div>
            <img class="avatar rounded-circle card-img-35 z-depth-1 d-flex ml-3" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg" alt="Generic placeholder image">
          </div>

          <div class="media mt-3">
            <img class="avatar rounded-circle card-img-35 z-depth-1 d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" alt="Generic placeholder image">
            <div class="media-body">
              <p class="mt-0 font-weight-bold small mb-1">Johny Danish<span class="text-muted float-right small mt-3p">12 Nov 6:17 PM</span></p>
              <p class="mb-0 font-weight-light small grey lighten-2 p-2 rounded">Working with MDB Admin on a great new app! Wanna join?</p>
            </div>
          </div>

          <div class="media mt-3">
            <div class="media-body">
              <p class="mt-0 font-weight-bold small mb-1"><span class="text-muted small mt-3p">12 Nov 6:23 PM</span><span class="float-right">Alice Cooper</span></p>
              <p class="mb-0 font-weight-light small primary-color text-white p-2 rounded">I would love to.</p>
            </div>
            <img class="avatar rounded-circle card-img-35 z-depth-1 d-flex ml-3" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg" alt="Generic placeholder image">
          </div>
        </div>

        <div class="card-footer white py-3">
          <div class="form-group mb-0">
            <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="1" placeholder="Type message..."></textarea>
            <div class="text-right pt-2">
              <button class="btn btn-primary btn-sm mb-0 mr-0">Send</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Block Content -->

    </div>
  </section>
  
</div>
  
  @push('js')
    <script>
      var myCustomScrollbar = document.querySelector('.my-custom-scrollbar');
      var ps = new PerfectScrollbar(myCustomScrollbar);
    
      var scrollbarY = myCustomScrollbar.querySelector('.ps.ps--active-y>.ps__scrollbar-y-rail');
    
      myCustomScrollbar.onscroll = function() {
      scrollbarY.style.cssText = `top: ${this.scrollTop}px!important; height: 250px; right: ${-this.scrollLeft}px`;
      }
    </script>
  @endpush
@endsection
