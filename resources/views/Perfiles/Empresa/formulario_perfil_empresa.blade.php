@extends('layouts.barra_navegacion_principal')

@section('content')
<div class="container-fluid animsition escritorio-mt-3-p-t-75 mt-5">
    <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 m-auto">
            <!--Form with header-->
            <div class="card wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.3s;">
                <div class="card-body">
                    <!--Header-->
                    <div class="form-header blue-gradient">
                        <h3 class="text-uppercase">Perfil empresa</h3>
                    </div>
                    <!--Body-->
                    <!-- Login form -->
                    <form method="POST" action="{{route('AlmacenarPerfilEmpresa')}}" enctype="multipart/form-data">
                        @csrf
                        @php
                          $user_id = Auth::user()->id;
                        @endphp
                        <input hidden type="text" name="user_id" value="{{$user_id}}">
                        {{-- Imagen de perfil --}}
                        <div class="file-field">
                            <div class="mb-4">
                                <div class="text-center">
                                    <!-- Vista previa imagen -->
                                    <div class="d-flex justify-content-center">
                                        <img id="preview" class="rounded-circle" src="#" alt="" width="30%" height="30%">
                                    </div>
                                    <i id="icono_subir" class="zmdi zmdi-cloud-upload" style="font-size:8rem;"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="btn btn-mdb-color btn-rounded float-left">
                                    <span>Subir archivo</span>
                                    <input id="file_input" name="foto" type="file" accept="image/*" required>
                                </div>
                            </div>
                            <span id="nombre_archivo" class="d-flex justify-content-center mt-2"> </span>
                        </div>

                        {{-- Nombre --}}
                        <div class="md-form">
                            <i class="zmdi zmdi-store prefix text-muted"></i>
                            <label for="nombre">Nombre de la empresa</label>
                            <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required autofocus>

                            @if ($errors->has('nombre'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nombre') }}</strong>
                            </span>
                            @endif
                        </div>

                        {{-- E-mail --}}
                        <div class="md-form">
                            <i class="zmdi zmdi-email prefix text-muted"></i>
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>

                        {{-- Teléfono --}}
                        <div class="md-form">
                            <i class="zmdi zmdi-phone prefix text-muted"></i>
                            <label for="telefono">Teléfono </label>
                            <input id="telefono" type="text" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ old('telefono') }}" required autofocus>

                            @if ($errors->has('telefono'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('telefono') }}</strong>
                            </span>
                            @endif
                        </div>

                        {{-- Dirección --}}
                        <div class="mt-5">
                            <h5 class="d-flex justify-content-center">Ubicación</h5>
                            <!-- Provincia -->
                            <div class="mt-3">
                                <span>Provincia</span>
                                <div class="md-form">
                                    <input hidden id="provincia_nombre" type="text" name="provincia_nombre" value="">
                                    <select id="provincia" class="custom-select" name="provincia" required>
                                        <option value="" selected>Elegir</option>
                                        @foreach ($ProvinciasLocalidadesJson as $provincia)
                                        <option value="{{ $provincia['id'] }}">{{$provincia['nombre']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3">
                                <!-- Ciudad -->
                                <span>Ciudad</span>
                                <div class="md-form">
                                    <select id="localidad" class="custom-select" name="localidad" required>
                                        @foreach ($ProvinciasLocalidadesJson as $localidad)

                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="md-form">
                            <i class="zmdi zmdi zmdi-pin prefix text-muted"></i>
                            <label for="ubicacion">Dirección física</label>
                            <input id="ubicacion" type="text" class="form-control{{ $errors->has('ubicacion') ? ' is-invalid' : '' }}" name="ubicacion" value="{{ old('ubicacion') }}" required autofocus>
                            <small class="text-info">Si tu empresa no cuenta con un local deja este campo vacío</small>

                            @if ($errors->has('ubicacion'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('ubicacion') }}</strong>
                            </span>
                            @endif
                        </div>

                        {{-- Rubro --}}
                        <div class="md-form">
                            <h5 class="d-flex justify-content-center">Rubro</h5>
                            <br>
                            <small class="d-flex justify-content-center">Esto te ayudará a aparecer en las busquedas con mas frecuencia</small>
                            {{-- 1 row --}}
                            <div class="row">
                                <div class="col-md-4 mt-4">
                                    <div class="form-check">
                                        <input id="salones" class="form-check-input" type="checkbox" name="categorias[]" value="1">
                                        <label class="form-check-label" for="salones">Salones y quintas</label>
                                    </div>
                                </div>

                                <div class="col-md-4 mt-4">
                                    <div class="form-check">
                                        <input id="juegos" class="form-check-input" type="checkbox" name="categorias[]" value="2">
                                        <label class="form-check-label" for="juegos">Juegos</label>
                                    </div>
                                </div>

                                <div class="col-md-4 mt-4">
                                    <div class="form-check">
                                        <input id="animacion" class="form-check-input" type="checkbox" name="categorias[]" value="3">
                                        <label class="form-check-label" for="animacion">Animación</label>
                                    </div>
                                </div>
                            </div>
                            {{-- 1 row --}}

                            {{-- 2 row --}}
                            <div class="row">
                                <div class="col-md-4 mt-4">
                                    <div class="form-check">
                                        <input id="mobiliario" class="form-check-input" type="checkbox" name="categorias[]" value="4">
                                        <label class="form-check-label" for="mobiliario">mobiliario</label>
                                    </div>
                                </div>

                                <div class="col-md-4 mt-4">
                                    <div class="form-check">
                                        <input id="catering" class="form-check-input" type="checkbox" name="categorias[]" value="5">
                                        <label class="form-check-label" for="catering">Catering</label>
                                    </div>
                                </div>

                                <div class="col-md-4 mt-4">
                                    <div class="form-check">
                                        <input id="iluminacion" class="form-check-input" type="checkbox" name="categorias[]" value="6">
                                        <label class="form-check-label" for="iluminacion">Iluminación</label>
                                    </div>
                                </div>
                            </div>
                            {{-- 2 row --}}

                            {{-- 3 row --}}
                            <div class="row">
                                <div class="col-md-4 mt-4">
                                    <div class="form-check">
                                        <input id="ornamentacion" class="form-check-input" type="checkbox" name="categorias[]" value="7">
                                        <label class="form-check-label" for="ornamentacion">Ornamentación</label>
                                    </div>
                                </div>

                                <div class="col-md-4 mt-4">
                                    <div class="form-check">
                                        <input id="musicaDj" class="form-check-input" type="checkbox" name="categorias[]" value="8">
                                        <label class="form-check-label" for="musicaDj">Música & DJ´s</label>
                                    </div>
                                </div>

                                <div class="col-md-4 mt-4">
                                    <div class="form-check">
                                        <input id="shows" class="form-check-input" type="checkbox" name="categorias[]" value="9">
                                        <label class="form-check-label" for="shows">Shows & Bandas</label>
                                    </div>
                                </div>
                            </div>
                            {{-- 3 row --}}

                            {{-- 4 row --}}
                            <div class="row">
                                <div class="col-md-4 mt-4">
                                    <div class="form-check">
                                        <input id="fotografia_y_ediciones" class="form-check-input" type="checkbox" name="categorias[]" value="10">
                                        <label class="form-check-label" for="fotografia_y_ediciones">Fotógrafía y ediciones</label>
                                    </div>
                                </div>

                                <div class="col-md-4 mt-4">
                                    <div class="form-check">
                                        <input id="disfraces" class="form-check-input" type="checkbox" name="categorias[]" value="11">
                                        <label class="form-check-label" for="disfraces">Disfraces</label>
                                    </div>
                                </div>
                            </div>
                            {{-- 4 row --}}
                        </div>

                        <div class="row mt-5 d-flex align-items-center justify-content-center">
                            <div class="">
                                <button type="submit" class="btn blue-gradient btn-lg waves-effect waves-light">
                                    {{ __('Crear perfil') }}
                                </button>
                            </div>
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
{{-- Previsualizar imagen --}}
<script>
    function readURL(input) {
        $("#icono_subir").hide();
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#preview').attr('src', e.target.result);
                $('#preview').addClass('border');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#file_input").change(function() {
        readURL(this);
    });
</script>

{{-- Mostrar nombre del archivo --}}
<script type="text/javascript">
    $('#file_input').change(function(e) {
        $("#nombre_archivo").empty();
        var fileName = e.target.files[0].name;
        $("#nombre_archivo").append(fileName);
    });
</script>

<script>
    //Select dinamico de provincias y localidades
    $("#provincia").on('change', function() {
        var provincia_id = $(this).val();
        var nombre_provincia = $('#provincia option:selected').text();
        $("#provincia_nombre").val(nombre_provincia);
        //alert(provincia_id +' '+ nombre_provincia);
        $.ajax({
            type: 'POST',
            url: '{{url("listarlocalidades")}}', //Es la funcion Index de localidad al ser resource
            data: {
                nombre_provincia,
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
@endsection
