@extends('Principal.partials.master')
@section('content')
  <div class="container-fluid animsition escritorio-mt-3-p-t-75 mt-5">
    <div class="row">
      <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">
        
        {{-- @foreach ($errors as $error)
            <ul>
              <li>
                {{ $error }}
              </li>
            </ul>
        @endforeach --}}
    
        <!--Form with header-->
        <div class="card wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.3s;">
          <div class="card-body">

            <!--Header-->
            <div class="form-header purple-gradient">
              <h3 class="text-uppercase">Registrate</h3>
            </div>

            <!--Body-->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Nombre -->
                <div class="md-form">
                  <i class="zmdi zmdi-account prefix text-muted"></i>
                    <label class="active" for="name">Nombre</label>
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
                    <label class="active" for="lastname">Apellido</label>
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
                  <label class="active" for="email">{{ __('E-Mail') }}</label>
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                  @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>

                <!-- Dni -->
                <div class="md-form">
                  <i class="zmdi zmdi-account-box prefix text-muted"></i>
                  <label class="active" for="dni">{{ __('DNI') }}</label>
                  <input id="dni" type="text" class="form-control{{ $errors->has('dni') ? ' is-invalid' : '' }}" name="dni" value="{{ old('dni') }}" required>
                  @if ($errors->has('dni'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('dni') }}</strong>
                      </span>
                  @endif
                </div>

                <!-- Provincia -->
                <div class="mt-2">
                  <input hidden id="provincia_nombre" type="text" name="provincia_nombre" value="">
                  <label class="active" for="provincia">{{ __('Provincia') }}</label>
                  <select id="provincia" class="custom-select" name="provincia" required>
                    <option value="" selected>Elegir</option>
                    @foreach ($ProvinciasLocalidadesJson as $provincia)
                      <option value="{{ $provincia['id'] }}">{{$provincia['nombre']}}</option>
                    @endforeach
                </select>
                
                  @if ($errors->has('provincia'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('provincia') }}</strong>
                      </span>
                  @endif
                </div>

                <!-- Localidad -->
                <div class="mt-2">
                  <label class="active" for="localidad">{{ __('Localidad') }}</label>
                  <select id="localidad" class="custom-select" name="localidad" required>
                </select>
                
                  @if ($errors->has('localidad'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('localidad') }}</strong>
                      </span>
                  @endif
                </div>

                <div class="md-form">
                  <i class="zmdi zmdi-phone prefix text-muted"></i>
                  <label class="active" for="telefono">{{ __('Teléfono') }}</label>
                  <input id="telefono" type="text" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ old('telefono') }}" required>
                  @if ($errors->has('telefono'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('telefono') }}</strong>
                      </span>
                  @endif
                </div>

                <!-- Contraseña -->
                <div class="md-form">
                  <i class="zmdi zmdi-lock prefix text-muted"></i>
                  <label class="active" for="password">{{ __('Contraseña') }}</label>
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
                  <label class="active" for="password-confirm">{{ __('Confirmar contraseña') }}</label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>

                <!-- Rol -->
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="materialUnchecked" name="rol" value="1">
                  <label class="form-check-label" for="materialUnchecked">Registrarme como prestador de servicios</label>
                </div>

            <div class="text-center mt-5">
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
@push('js')
  <script>
    //Select dinamico de provincias y localidades
    $("#provincia").on('change', function() {
        var provincia_id = $(this).val();
        var nombre_provincia = $('#provincia option:selected').text();
        $("#provincia_nombre").val(nombre_provincia);

        console.log( provincia_id, nombre_provincia );
        $.ajax({
            type: 'GET',
            url: '{{url('register/traer-localidades')}}',
            data: {
                
                provincia_id,
                _token: "{{csrf_token()}}"
            },

            error: function(x, y, z) {
                console.log(x, y, z);
            },
            success: function(data) {
                $("#localidad").empty();
                $.each(data[2], function(index, value) {
                    $("#localidad").append('<option value="' + value['nombre'] + '">' + value['nombre'] + '</option>');
                });
            },
        });
    });
  </script>
@endpush
@endsection
