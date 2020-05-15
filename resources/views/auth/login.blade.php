@extends('layouts.barra_navegacion_principal')

@section('content')

  <div class="container-fluid animsition escritorio-mt-3-p-t-75 mt-5">
    <div class="row">
      <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">

        <!--Form with header-->
        <div class="card wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.3s;">
          <div class="card-body">

            <!--Header-->
            <div class="form-header purple-gradient">
              <h3 class="text-uppercase">Iniciar sesión</h3>
            </div>
            <!--Body-->
            <!-- Login form -->
            <form method="POST" action="{{ route('login') }}">
              @csrf


              <div class="md-form">
                <i class="zmdi zmdi-email prefix text-muted"></i>
                <label for="email">Tu email</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>

              <div class="md-form">
                <i class="zmdi zmdi-lock prefix text-muted"></i>
                <label for="password">Tu contraseña</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>



              <div class="row mt-4 d-flex align-items-center justify-content-center">
                <div class="col-md-4 col-12">
                  <button type="submit" class="btn purple-gradient btn-lg waves-effect waves-light">
                    {{ __('Ingresar') }}
                  </button>
                </div>

                <div class="col-md-4 col-12 align-self-center">
                      <div class="col-md-6 offset-md-4">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                              <label class="form-check-label" for="remember">
                                  {{ __('Recordarme') }}
                              </label>
                          </div>
                      </div>
                </div>

                {{-- <div class="row">
                  <a href="{{route('register')}}" style="color:#6c7ae0;"> o registrate aquí</a>
                </div> --}}
                <br>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color:#6c7ae0;">
                        {{ __('¿No recuerdas tu contraseña?') }}
                    </a>
                @endif
              </div>
            </form>
            <!-- Login form -->

            <div class="text-center">
              <hr>
              <div class="inline-ul text-center d-flex justify-content-center">
                <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-facebook"></i></a>
                <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-google"> </i></a>
                {{-- <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-linkedin-in"> </i></a> --}}
              </div>
            </div>

          </div>
        </div>
        <!--/Form with header-->
      </div>
    </div>
  </div>

{{-- <div class="animsition position-relative" style="height: 50em;">
  <div id="banner"></div>
    <div id="formulario" class="mt-5 d-flex justify-content-center">
        <div class="col-md-8">
          <!--Card -->
          <div class="card">
            <span class="mt-4" style="text-align:center; color:#3B4AFC;">INGRESAR</span>
            <!--Card content -->
            <div class="card-body">

              <!-- Login form -->
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <p class="h5 text-center mb-4">Iniciar sesion</p>

                <div class="md-form">
                  <i class="zmdi zmdi-email prefix text-muted"></i>
                  <label for="email">Tu email</label>
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                  @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>

                <div class="md-form">
                  <i class="zmdi zmdi-lock prefix text-muted"></i>
                  <label for="password">Tu contraseña</label>
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                  @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>

                <div class="md-form row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Recordarme') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                  <button type="submit" class="btn waves-effect waves-light text-white" style="background:#3B4AFC; border-color:#3B4AFC; cursor:pointer;">
                      {{ __('Ingresar') }}
                  </button>
                  <a href="{{route('register')}}" style="color:#3B4AFC;"> o registrate aquí</a>
                  <br>
                  @if (Route::has('password.request'))
                      <a class="btn btn-link" href="{{ route('password.request') }}" style="color:#3B4AFC;">
                          {{ __('Olvidaste tu contraseña?') }}
                      </a>
                  @endif
                </div>
              </form>
              <!-- Login form -->

            </div>

          </div>
        </div>
    </div>
</div> --}}
@endsection
