@extends('layouts.barra_navegacion_principal')

@section('content')
<div class="animsition position-relative" style="height: 50em;">
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
          <!--Card -->
            {{-- <div class="card mt-5">
                <span class="mt-4" style="text-align:center; color:#3B4AFC;">INGRESAR</span>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background:#3B4AFC; border-color:#3B4AFC; cursor:pointer;">
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
                        </div>
                    </form>
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection
