@extends('Principal.partials.master')

{{-- FORMULARIO PARA DATOS DE LA CUENTA --}}
@section('content')
<script type="text/javascript">
  $(document).ready(function() {
    // $(document.body).addClass('cloudy-knoxville-gradient');
  });
</script>
  <div class="container-fluid animsition escritorio-mt-3-p-t-75 mt-5">
    <div class="row">
      <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">

        <!--Form with header-->
        <div class="card wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.3s;">
          <div class="card-body">

            <!--Header-->
            <div class="form-header purple-gradient">
              <h3>DATOS DE LA CUENTA</h3>
            </div>

            <!--Body-->
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Nombre -->
                <div class="md-form">
                  <i class="zmdi zmdi-account prefix text-muted"></i>
                    <label for="name">Nombre</label>
                      <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                      @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('name') }}</strong>
                        </span>
                      @endif
                </div>

                <!-- Apellido -->
                <div class="md-form">
                  <i class="zmdi zmdi-account prefix text-muted"></i>
                    <label for="lastname">Apellido</label>
                        <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>
                        @if ($errors->has('lastname'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('lastname') }}</strong>
                            </span>
                        @endif
                </div>

                <!-- Email -->
                <div class="md-form">
                  <i class="zmdi zmdi-email prefix text-muted"></i>
                  <label for="email">{{ __('E-Mail') }}</label>
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                  @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>

                <!-- Contraseña -->
                <div class="md-form">
                  <i class="zmdi zmdi-lock prefix text-muted"></i>
                  <label for="password">{{ __('Contraseña') }}</label>
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                  @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>

                <!-- Confirmar contraseña -->
                <div class="md-form">
                  <i class="zmdi zmdi-lock prefix text-muted"></i>
                  <label for="password-confirm">{{ __('Confirmar contraseña') }}</label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>

            <div class="text-center">
              <button type="submit" class="btn purple-gradient btn-lg waves-effect waves-light">{{ __('REGISTRARME') }}</button>
              <hr>
              <div class="inline-ul text-center d-flex justify-content-center">
                <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-facebook"></i></a>
                <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-google"> </i></a>
                {{-- <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-linkedin-in"> </i></a> --}}
              </div>
            </div>
          </form>
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
            <div class="card">
                <span class="mt-4" style="text-align:center; color:#3B4AFC;">DATOS DE LA CUENTA</span>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- Nombre -->
                        <div class="md-form">
                          <i class="zmdi zmdi-account prefix text-muted"></i>
                            <label for="name">Nombre</label>
                              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                              @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('name') }}</strong>
                                </span>
                              @endif
                        </div>

                        <!-- Apellido -->
                        <div class="md-form">
                          <i class="zmdi zmdi-account prefix text-muted"></i>
                            <label for="lastname">Apellido</label>
                                <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>
                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <!-- Email -->
                        <div class="md-form">
                          <i class="zmdi zmdi-email prefix text-muted"></i>
                          <label for="email">{{ __('E-Mail') }}</label>
                          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                          @if ($errors->has('email'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                        </div>

                        <!-- Contraseña -->
                        <div class="md-form">
                          <i class="zmdi zmdi-lock prefix text-muted"></i>
                          <label for="password">{{ __('Contraseña') }}</label>
                          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                          @if ($errors->has('password'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                        </div>

                        <!-- Confirmar contraseña -->
                        <div class="md-form">
                          <i class="zmdi zmdi-lock prefix text-muted"></i>
                          <label for="password-confirm">{{ __('Confirmar contraseña') }}</label>
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn waves-effect waves-light text-white" style="background:#3B4AFC; border-color:#3B4AFC; cursor:pointer;">
                                    {{ __('REGISTRARME') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
