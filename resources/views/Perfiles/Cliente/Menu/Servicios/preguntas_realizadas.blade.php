@extends('Perfiles.home')
@section('content')
  {{-- Escritorio --}}
<div class="d-none d-sm-block">
  <!-- Si no hay preguntas -->
  <div class="mt-5 p-4" style="padding-top: 5em !important;">
    <h4 class="card-header text-muted">Preguntas realizadas</h4>
    <div class="card-body">
      <div class="alert alert-primary p-2 rounded">
        <i class="fas fa-exclamation-circle text-primary ml-2"></i> <span>No hiciste niguna pregunta aún</span>
      </div>
    </div>
  </div>

  <section>
    <div class="container my-5">
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
        <div class="card-body my-custom-scrollbar">
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
  {{-- Fin Escritorio --}}

  {{-- Móvil --}}
  <div class="d-md-none d-lg-none d-xl-none d-xs-block d-sm-block">
    <!-- Si no hay preguntas -->
      <h4 class="card-header text-muted">Preguntas realizadas</h4>
      <div class="card-body">
        <div class="alert alert-primary p-2 rounded">
          <i class="fas fa-exclamation-circle text-primary ml-2"></i> <span>No hiciste niguna pregunta aún</span>
        </div>
      </div>

    <section>
      <div class="container my-5">
      <!-- Section: Block Content -->
        <section>
          <div class="card">
            <div class="card-header white d-flex justify-content-between">
              <p class="col-12 h5-responsive font-weight-bold mb-0">
                <img src="{{asset('images/castillo1.webp')}}" width="100%">
                <span class="ml-2">Alquiler de Castillo inflable acuático</span>
                <strong class="text-danger">$850</strong><sup class="text-danger">00</sup>
              </p>
              <small class="col-12 d-flex justify-content-end "> Publicado el 10/08/2019</small>
            </div>
          <!-- Chat -->
          <div class="card-body my-custom-scrollbar">
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

    <hr>
    {{-- Otro chat --}}

    <section>
      <div class="container my-5">
      <!-- Section: Block Content -->
        <section>
          <div class="card">
            <div class="card-header white d-flex justify-content-between">
              <p class="col-12 h5-responsive font-weight-bold mb-0">
                <img class="card" src="http://stc.obolog.net/photos/4ec5/4ec502559e02fs2715743.jpg" width="100%">
                <span class="ml-2">Plaza blanda de 12 elementos</span>
                <strong class="text-danger">$900</strong><sup class="text-danger">00</sup>
              </p>
              <small class="col-12 d-flex justify-content-end "> Publicado el 10/08/2019</small>
            </div>
          <!-- Chat -->
          <div class="card-body my-custom-scrollbar">
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
  {{-- Fin Móvil --}}
<script>
  var myCustomScrollbar = document.querySelector('.my-custom-scrollbar');
  var ps = new PerfectScrollbar(myCustomScrollbar);

  var scrollbarY = myCustomScrollbar.querySelector('.ps.ps--active-y>.ps__scrollbar-y-rail');

  myCustomScrollbar.onscroll = function() {
  scrollbarY.style.cssText = `top: ${this.scrollTop}px!important; height: 250px; right: ${-this.scrollLeft}px`;
  }
</script>
@endsection
