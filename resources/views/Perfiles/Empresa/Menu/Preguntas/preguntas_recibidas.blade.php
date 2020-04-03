@extends('Perfiles.home')
@section('content')
{{-- Escritorio --}}
  <div class="d-none d-sm-block">
      <!-- Si no hay preguntas -->
      <div class="p-4">

              <div class="card-header text-muted">
                  Preguntas
              </div>
              <div class="card-body">
                  <div class="bg-info p-2 rounded">
                      <i class="fas fa-exclamation-circle text-white ml-2"></i> <span>No tienes preguntas aún</span>
                  </div>
              </div>
      </div>
        <!-- Con preguntas -->
          <div class="pl-4 pr-4">
              <div class="card">
                  <div class="card-header text-muted">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0lc_Lp2fYGUPo0ej70Cs4Z8Ts0KOjx231QzFBqoewr-MGQZF2og&s" width="6%"> <span class="ml-2">Alquiler de Castillo inflable acuático</span> <strong class="text-danger">$850</strong><sup class="text-danger">00</sup> <small class="ml-5 pl-5"> Publicado el 10/08/2019</small>
                  </div>
                  <div class="card-body">
                      <i class="zmdi zmdi-comment"></i> <span>¿Hola!, el castillo es para niños de 10 años mas o menos?</span> <span class="text-muted ml-5">Hace 2min</span>
                      <br>
                      <i class="zmdi zmdi-comment-alt"></i> <span>Hola que tal, si, es para esa edad y hasta 17 años</span>
                  </div>
              </div>
          </div>

          <div class="pl-4 pr-4">
              <div class="card">
                  <div class="card-header text-muted">
                      <img src="http://stc.obolog.net/photos/4ec5/4ec502559e02fs2715743.jpg" width="6%"> <span class="ml-2">Plaza blanda de 10 elementos</span> <strong class="text-danger">$600</strong><sup class="text-danger">00</sup> <small class="ml-5 pl-5"> Publicado el 20/08/2019</small>
                  </div>
                  <div class="card-body">
                      <i class="zmdi zmdi-comment"></i> <span>¿Por cuantas horas es el alquiler?, necesito para el zanjón para el 31 a la noche</span> <span class="text-muted ml-5">Hace 10min</span>
                      <br>
                      <form class="form-group d-flex align-items-self mt-3" action="index.html" method="post">
                        @csrf
                        <input class="form-control" type="text" name="" value="" placeholder="Escribe tu respuesta">
                        <button class="btn btn-primary ml-4" type="submit" name="">Enviar</button>
                      </form>
                  </div>
              </div>
          </div>
      <!-- Fin Con preguntas -->
  </div>
    <!-- Fin si no hay preguntas -->
{{-- Fin Escritorio --}}
{{-- Movil --}}
<div class="d-md-none d-lg-none d-xl-none d-xs-block d-sm-block">
  <!-- Si no hay preguntas -->
  <div class="p-4">
    <div class="card-header text-muted">
        Preguntas
    </div>
    <div class="card-body">
        <div class="bg-info p-2 rounded">
            <i class="fas fa-exclamation-circle text-white ml-2"></i> <span>No tienes preguntas aún</span>
        </div>
    </div>
  </div>
    <!-- Con preguntas -->
      <div class="pl-4 pr-4">
          <div class="card">
              <div class="card-header text-muted">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0lc_Lp2fYGUPo0ej70Cs4Z8Ts0KOjx231QzFBqoewr-MGQZF2og&s" width="100%"><br><br>
                  <span class="ml-2">Alquiler de Castillo inflable acuático</span><br><br>
                  <strong class="text-danger">$850</strong><sup class="text-danger">00</sup><br>
                  <small class="ml-5 pl-5"> Publicado el 10/08/2019</small>
              </div>
              <div class="card-body">
                  <i class="zmdi zmdi-comment"></i> <span>¿Hola!, el castillo es para niños de 10 años mas o menos?</span> <span class="text-muted ml-2">Hace 2min</span>
                  <br><br>
                  <i class="zmdi zmdi-comment-alt"></i><span>Hola que tal, si, es para esa edad y hasta 17 años</span>
              </div>
          </div>
      </div>

      <div class="pl-4 pr-4">
          <div class="card">
              <div class="card-header text-muted">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0lc_Lp2fYGUPo0ej70Cs4Z8Ts0KOjx231QzFBqoewr-MGQZF2og&s" width="100%"><br><br>
                  <span class="ml-2">Alquiler de Castillo inflable acuático</span><br><br>
                  <strong class="text-danger">$850</strong><sup class="text-danger">00</sup><br>
                  <small class="ml-5 pl-5"> Publicado el 10/08/2019</small>
              </div>
              <div class="card-body">
                  <i class="zmdi zmdi-comment"></i> <span>¿Hola!, el castillo es para niños de 10 años mas o menos?</span> <span class="text-muted ml-2">Hace 2min</span>
                  <br><br>
                  <form class="form-group d-flex align-items-self" action="index.html" method="post">
                    @csrf
                    <input class="form-control" type="text" name="" value="" placeholder="Escribe tu respuesta">
                    <button class="btn btnprimary-outline" type="submit" name=""> <i class="fas fa-paper-plane text-primary" style="font-size:30px;"></i></button>
                  </form>
              </div>
          </div>
      </div>


  <!-- Fin Con preguntas -->
</div>
  <!-- Fin si no hay preguntas -->
  {{-- Fin Movil --}}

@endsection
