@extends('layouts.barra_navegacion_principal')

{{-- FORMULARIO PARA DATOS DE LA CUENTA --}}
@section('content')
<div class="animsition position-relative" style="height: 50em;">
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
</div>
@endsection
