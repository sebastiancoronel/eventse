@extends('layouts.barra_navegacion_principal')
@section('content')
<div class="escritorio-mt-3-p-t-75">
    <div id="animacion" class="text-white d-none d-sm-block">
        <div class="row">
            <div class="col-md-4 mt-5 ripe-malinka-gradient" style="height: 8em;">
                <div class="p-5 d-flex justify-content-start">
                    <i class="zmdi zmdi-mood align-self-center" style="font-size: 25px;"></i>
                    <span class="ml-4 align-self-center" style="font-size: 25px;">ANIMACIÓN</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Titulo móvil --}}
    <div class="ripe-malinka-gradient col-md-4 text-white d-block d-sm-none" style="height: 10em;">
        <div class="p-5 d-flex align-items-center">
            <i class="zmdi zmdi-mood" style="font-size: 60px;"></i>
            <span class="ml-4" style="font-size: 25px;">ANIMACIÓN</span>
        </div>
    </div>

    {{-- Formulario Juegos --}}
    <div class="card container">
        <div class="card-header bg-white">
            <strong style="color:#717fe0;">Categoría</strong>
            >
            <span class="">ANIMACIÓN</span>
            <span class="ml-5"> <a href="{{route('Publicar')}}">Modificar</a></span>
        </div>
        <form class="card-body" action="{{route('PublicarAnimacion')}}" method="post" enctype="multipart/form-data">
            <input hidden type="text" name="id_categoria" value="2">
            @csrf
            {{-- Imagenes --}}
            <div class="mt-5">
                <h5 class="text-uppercase mb-3"><strong>Fotos</strong></h5>
                <div class="row">

                    <!-- Foto 1 -->
                    <div class="col-md-3 file-field">
                        <div class="mb-4">
                            <div class="text-center">
                                <!-- Vista previa imagen -->
                                <div class="d-flex justify-content-center">
                                    <img id="preview" class="rounded" src="#" alt="" width="50%" height="50%">
                                </div>
                                <i id="icono_imagen" class="zmdi zmdi-image-o" style="font-size:8rem;"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div id="boton_subir_1" class="btn btn-mdb-color btn-rounded float-left">
                                <span>Subir archivo</span>
                                <input id="file_input" name="foto_1" type="file" accept="image/*" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <small>Foto principal</small>
                        </div>
                    </div>

                    <!-- Foto 2 -->
                    <div class="col-md-3 file-field">
                        <div class="mb-4">
                            <div class="text-center">
                                <!-- Vista previa imagen -->
                                <div class="d-flex justify-content-center">
                                    <img id="preview_2" class="rounded" src="#" alt="" width="50%" height="50%">
                                </div>
                                <i id="icono_imagen_2" class="zmdi zmdi-image-o" style="font-size:8rem;"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-mdb-color btn-rounded float-left">
                                <span>Subir archivo</span>
                                <input id="file_input_2" name="foto_2" type="file" accept="image/*" required>
                            </div>
                        </div>

                    </div>

                    <!-- Foto 3 -->
                    <div class="col-md-3 file-field">
                        <div class="mb-4">
                            <div class="text-center">
                                <!-- Vista previa imagen -->
                                <div class="d-flex justify-content-center">
                                    <img id="preview_3" class="rounded" src="#" alt="" width="50%" height="50%">
                                </div>
                                <i id="icono_imagen_3" class="zmdi zmdi-image-o" style="font-size:8rem;"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-mdb-color btn-rounded float-left">
                                <span>Subir archivo</span>
                                <input id="file_input_3" name="foto_3" type="file" accept="image/*" required>
                            </div>
                        </div>

                    </div>

                    <!-- Foto 4 -->
                    <div class="col-md-3 file-field">
                        <div class="mb-4">
                            <div class="text-center">
                                <!-- Vista previa imagen -->
                                <div class="d-flex justify-content-center">
                                    <img id="preview_4" class="rounded" src="#" alt="" width="50%" height="50%">
                                </div>
                                <i id="icono_imagen_4" class="zmdi zmdi-image-o" style="font-size:8rem;"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-mdb-color btn-rounded float-left">
                                <span>Subir archivo</span>
                                <input id="file_input_4" name="foto_4" type="file" accept="image/*" required>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- Titulo e inputs --}}
            <div class="mt-5">
                {{-- Titulo --}}
                <div class="col md-form">
                    <label for="titulo">Título</label>
                    <input class="form-control" type="text" name="titulo" value="" maxlength="200">
                </div>
                {{-- Can. Anim - Años experiencias --}}
                <div class="form-row">
                    <div class="col-md-4 md-form">
                        <label for="cantidad_animadores">Cantidad de animadores</label>
                        <input class="form-control" type="number" name="cantidad_animadores" value="" maxlength="99">
                    </div>

                    <div class="col-md-4 md-form">
                        <label for="años_experiencia">Años de experiencia</label>
                        <input class="form-control" type="number" name="años_experiencia" value="" maxlength="99">
                    </div>

                    <div class="col-md-4 md-form">
                        <select class="custom-select" name="edades">
                            <option value="1">Todas las edades</option>
                            <option value="2">1-6 años</option>
                            <option value="3">6-12 años</option>
                            <option value="4">13-17 años</option>
                            <option value="5">+18 años</option>
                        </select>
                    </div>
                </div>
                {{-- Descripcion adicional --}}
                <div class="col md-form">
                    <label for="titulo">Descripción adicional (Que incluye y que no incluye)</label>
                    <textarea class="md-textarea form-control" name="descripcion" rows="3" maxlength="1000"></textarea>
                </div>
            </div>
            <div class="md-form">
                <h5 class="mt-5"><strong>UBICACIÓN</strong></h5>
                <input hidden id="provincia_nombre" type="text" name="provincia" value="" required>
                <select id="provincia" class="custom-select mt-5">
                    <option value="" selected>En que provincia está ubicado?</option>
                    @foreach ($ProvinciasLocalidadesJson as $provincia)
                    <option value="{{ $provincia['id'] }}">{{$provincia['nombre']}}</option>
                    @endforeach
                </select>
            </div>

            <!-- Ciudad del Inmueble -->
            <div id="seleccionar_localidad" hidden class="md-form">
                <span>En que ciudad?</span>
                <select id="localidad" name="localidad" class="custom-select" required>
                    <option value="" selected>En que ciudad?</option>
                    @foreach ($ProvinciasLocalidadesJson as $localidad)

                    @endforeach
                </select>
            </div>

            {{-- Tiene --}}
            <h5 class="text-uppercase mb-3"><strong>TIENE</strong></h5>
            <div class="">
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input id="magos" class="form-check-input" type="checkbox" name="magos" value="1">
                            <label class="form-check-label" for="magos">Magos</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-check">
                            <input id="maquillaje" class="form-check-input" type="checkbox" name="maquillaje" value="1">
                            <label class="form-check-label" for="maquillaje">Maquillaje</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-check">
                            <input id="karaoke" class="form-check-input" type="checkbox" name="karaoke" value="1">
                            <label class="form-check-label" for="karaoke">Karaoke</label>
                        </div>
                    </div>
                </div>

                <div class="form-row mt-5">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input id="payasos" class="form-check-input" type="checkbox" name="payasos" value="1">
                            <label class="form-check-label" for="payasos">Payasos</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-check">
                            <input id="personajes" class="form-check-input" type="checkbox" name="personajes" value="1">
                            <label class="form-check-label" for="personajes">Personajes</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-check">
                            <input id="titeres" class="form-check-input" type="checkbox" name="titeres" value="1">
                            <label class="form-check-label" for="titeres">Títeres</label>
                        </div>
                    </div>
                </div>

                <div class="form-row mt-5">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input id="globologia" class="form-check-input" type="checkbox" name="globologia" value="1">
                            <label class="form-check-label" for="globologia">Globología</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-check">
                            <input id="robot_led" class="form-check-input" type="checkbox" name="robot_led" value="1">
                            <label class="form-check-label" for="robot_led">Robot led</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-check">
                            <input id="maquillaje_fluor" class="form-check-input" type="checkbox" name="maquillaje_fluor" value="1">
                            <label class="form-check-label" for="maquillaje_fluor">Maquillaje_fluor</label>
                        </div>
                    </div>
                </div>
            </div>

            <h5 class="mt-5"><strong>PRECIO</strong></h5>
            <div class="mt-5">
              <div id="div_precio" class="col-12 col-md-2 md-form">
                <i class="zmdi zmdi-money prefix"></i>
                <label for="precio">Precio</label>
                <input id="precio" class="form-control" type="number" name="precio" value="">
              </div>

              <div class="form-check">
                <input id="precio_a_convenir" class="form-check-input" type="checkbox" name="precio_a_convenir" value="1">
                <label class="" for="precio_a_convenir">Precio a convenir</label>
              </div>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="col-md-3 flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5 mt-5">
                    Publicar
                </button>
            </div>
        </form>
    </div>
</div>
{{-- Precio - Precio a convenir --}}
<script type="text/javascript">
    $("#precio_a_convenir").on('change', function() {
        if (this.checked) {
            $("#precio").val('');
            $("#div_precio").css("opacity", "0.5");
            $("#precio").attr('disabled', 'true');
        } else {
            $("#div_precio").css("opacity", "1");
            $("#precio").removeAttr('disabled');
        }

    });
</script>

{{-- Imagen placeholder al seleccionar archivo --}}
<script type="text/javascript">
    // Foto 1
    $("#file_input").change(function() {
        if (this.files.length > 0) {
            if (this.files[0].size > 2000000) {
                     swal("El archivo pesa mas de 2MB","Seleccione otro archivo","error");
                     //this.value = ''; //Borra el valor del input
                     console.log(this.value);
                 }else{
                     if (this.files[0].size < 2000000) {
                        console.log(this.value);
                     $("#icono_imagen").hide();
                         if (this.files && this.files[0]) {
                             var reader = new FileReader();
                             reader.onload = function(e) {
                                 $('#preview').attr('src', e.target.result);
                                 $('#preview').addClass('border');
                             }
                             reader.readAsDataURL(this.files[0]);
                         }
                     }
                 }
        }
    });

    // Foto 2
    $("#file_input_2").change(function() {
        if (this.files.length > 0) {
            if (this.files[0].size > 2000000) {
                     swal("El archivo pesa mas de 2MB","Seleccione otro archivo","error");
                     //this.value = ''; //Borra el valor del input
                     console.log(this.value);
                 }else{
                     if (this.files[0].size < 2000000) {
                     $("#icono_imagen_2").hide();
                         if (this.files && this.files[0]) {
                             var reader = new FileReader();
                             reader.onload = function(e) {
                                 $('#preview_2').attr('src', e.target.result);
                                 $('#preview_2').addClass('border');
                             }
                             reader.readAsDataURL(this.files[0]);
                         }
                     }
                 }
        }
    });

    //Foto 3
    $("#file_input_3").change(function() {
        if (this.files.length > 0) {
            if (this.files[0].size > 2000000) {
                     swal("El archivo pesa mas de 2MB","Seleccione otro archivo","error");
                     //this.value = ''; //Borra el valor del input
                     console.log(this.value);
                 }else{
                     if (this.files[0].size < 2000000) {
                     $("#icono_imagen_3").hide();
                         if (this.files && this.files[0]) {
                             var reader = new FileReader();
                             reader.onload = function(e) {
                                 $('#preview_3').attr('src', e.target.result);
                                 $('#preview_3').addClass('border');
                             }
                             reader.readAsDataURL(this.files[0]);
                         }
                     }
                 }
        }
    });

    //Foto 4
    $("#file_input_4").change(function() {
        if (this.files.length > 0) {
            if (this.files[0].size > 2000000) {
                     swal("El archivo pesa mas de 2MB","Seleccione otro archivo","error");
                     //this.value = ''; //Borra el valor del input
                     console.log(this.value);
                 }else{
                     if (this.files[0].size < 2000000) {
                     $("#icono_imagen_4").hide();
                         if (this.files && this.files[0]) {
                             var reader = new FileReader();
                             reader.onload = function(e) {
                                 $('#preview_4').attr('src', e.target.result);
                                 $('#preview_4').addClass('border');
                             }
                             reader.readAsDataURL(this.files[0]);
                         }
                     }
                 }
        }
    });
</script>

{{-- Listar Localidades --}}
<script type="text/javascript">
    $("#provincia").on('change', function() {
        var provincia_id = $(this).val();
        var nombre_provincia = $('#provincia option:selected').text();
        $("#provincia_nombre").val(nombre_provincia);
        $.ajax({
            type: 'POST',
            url: '{{url('listarlocalidades ')}}',
            data: {
                provincia_id,
                nombre_provincia,
                _token: "{{csrf_token()}}"
            },
            error: function(x, y, z) {
                console.log(x, y, z);
            },

            success: function(data) {
                $('#seleccionar_localidad').removeAttr('hidden');
                $('#localidad').empty();
                $.each(data[2], function(index, value) {
                    $('#localidad').append('<option value="' + value['nombre'] + '"> ' + value['nombre'] + ' </option>');
                });
            }
        });
    });
</script>
@endsection
