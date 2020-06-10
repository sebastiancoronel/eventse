@extends('layouts.barra_navegacion_principal')
@section('content')
  <div class="escritorio-mt-3-p-t-75">
    <div id="catering" class="text-white d-none d-sm-block">
      <div class="row">
        <div class="col-md-4 mt-5 peach-gradient" style="height: 8em;">
          <div class="p-5 d-flex justify-content-start">
            <i class="zmdi zmdi-cutlery align-self-center" style="font-size: 25px;"></i>
            <span class="ml-4 align-self-center" style="font-size: 25px;">SERVICIOS DE CATERING</span>
          </div>
        </div>
      </div>
    </div>

    {{-- Titulo móvil --}}
    <div class="peach-gradient col-md-4 text-white d-block d-sm-none" style="height: 10em;">
      <div class="p-5 d-flex align-items-center">
        <i class="zmdi zmdi-cutlery" style="font-size: 60px;"></i>
        <span class="ml-4" style="font-size: 25px;">SERVICIOS DE CATERING</span>
      </div>
    </div>

    {{-- Formulario Juegos --}}
    <div class="card container">
      <div class="card-header row"> <!-- TUve que agregarle row para alinear el link "Modificar"-->
        <strong style="color:#717fe0;">Categoría</strong>
        <span class="mx-1"> > </span>
        <span class="">SERVICIOS DE CATERING</span>
        <span class="ml-5 d-none d-sm-block"> <a href="{{route('Publicar')}}">Modificar</a></span>
        <!-- Movil (Por los margenes)-->
        <span class="d-block d-sm-none"><br> <a href="{{route('Publicar')}}">Modificar</a></span>
      </div>
      <form class="card-body" action="#" method="post">
          <input hidden type="text" name="id_categoria" value="5">
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
            <div class="col md-form">
              <label for="titulo">Título</label>
              <input class="form-control" type="text" name="titulo" value="">
            </div>
            <div class="form-row">
              <div class="col-md-6 md-form">
                <label for="cantidad_invitados">Cantidad de invitados</label>
                <input class="form-control" type="number" name="cantidad_invitados" value="">
              </div>

            </div>
            {{-- Tiene --}}
            <h5 class="text-uppercase mb-3"><strong>TIENE</strong></h5>
            <div class="">
              <div class="row mt-2">
                <div class="col-md-4">
                  <div class="form-check">
                    <input id="servicio_pizza" class="form-check-input" type="checkbox" name="servicio_pizza" value="">
                    <label class="form-check-label" for="servicio_pizza">Servicio de pizza</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="mesa_dulce" class="form-check-input" type="checkbox" name="mesa_dulce" value="">
                    <label class="form-check-label" for="mesa_dulce">Mesa dulce</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="pernil" class="form-check-input" type="checkbox" name="pernil" value="">
                    <label class="form-check-label" for="pernil">Servicio de pernil</label>
                  </div>
                </div>
              </div>

              <div class="row mt-2">
                <div class="col-md-4">
                  <div class="form-check">
                    <input id="coffee_break" class="form-check-input" type="checkbox" name="coffee_break" value="">
                    <label class="form-check-label" for="coffee_break">Coffee break</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="servicio_lunch" class="form-check-input" type="checkbox" name="servicio_lunch" value="">
                    <label class="form-check-label" for="servicio_lunch">Servicio de lunch</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="servicio_gourmet" class="form-check-input" type="checkbox" name="servicio_gourmet" value="">
                    <label class="form-check-label" for="servicio_gourmet">Servicio gourmet</label>
                  </div>
                </div>

              </div>
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

          <div class="col md-form mt-5">
            <label for="titulo">Descripción adicional (Que incluye y que no incluye)</label>
            <textarea class="md-textarea form-control" name="descripcion" rows="3"></textarea>
          </div>


          <div class="d-flex justify-content-end">
              <button type="submit" class="col-md-3 flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5 mt-5">
                  Publicar
              </button>
          </div>
      </form>
    </div>
  </div>

  {{-- Precio a convenir --}}
  <script type="text/javascript">
    $("#precio_a_convenir").on('change', function() {
      if (this.checked) {
        $("#precio").val('');
        $("#div_precio").css("opacity","0.5");
          $("#precio").attr('disabled', 'true');
      } else {
        $("#div_precio").css("opacity","1");
          $("#precio").removeAttr('disabled');
      }

      });
  </script>

  {{-- Imagen placeholder al seleccionar archivo --}}
  <script type="text/javascript">
      // Foto 1
      var input_1 = $("#file_input");
      $("#file_input").click(function() {
          function readURL(input_1) {
            console.log(input_1.files);
              $("#icono_imagen").hide();
              if (input_1.files && input_1.files[0]) {
                  var reader = new FileReader();
                  reader.onload = function(e) {
                      $('#preview').attr('src', e.target.result);
                      $('#preview').addClass('border');
                  }
                  reader.readAsDataURL(input_1.files[0]);
              }
          }
          $("#file_input").change(function() {
              readURL(this);
          });

      });

      // Foto 2
      var input_2 = $("#file_input_2");
      $("#file_input_2").click(function() {
          function readURL(input_2) {
              $("#icono_imagen_2").hide();
              if (input_2.files && input_2.files[0]) {
                  var reader = new FileReader();
                  reader.onload = function(e) {
                      $('#preview_2').attr('src', e.target.result);
                      $('#preview_2').addClass('border');
                  }
                  reader.readAsDataURL(input_2.files[0]);
              }
          }
          $("#file_input_2").change(function() {
              readURL(this);
          });
      });

      //Foto 3
      var input_3 = $("#file_input_3");
      console.log(input_3);
      $("#file_input_3").click(function() {
          function readURL(input_3) {
              $("#icono_imagen_3").hide();
              if (input_3.files && input_3.files[0]) {
                  var reader = new FileReader();
                  reader.onload = function(e) {
                      $('#preview_3').attr('src', e.target.result);
                      $('#preview_3').addClass('border');
                  }
                  reader.readAsDataURL(input_3.files[0]);
              }
          }
          $("#file_input_3").change(function() {
              readURL(this);
          });
      });

      //Foto 4
      var input_4 = $("#file_input_4");
      console.log(input_4);
      $("#file_input_4").click(function() {
          function readURL(input_4) {
              $("#icono_imagen_4").hide();
              if (input_4.files && input_4.files[0]) {
                  var reader = new FileReader();
                  reader.onload = function(e) {
                      $('#preview_4').attr('src', e.target.result);
                      $('#preview_4').addClass('border');
                  }
                  reader.readAsDataURL(input_4.files[0]);
              }
          }
          $("#file_input_4").change(function() {
              readURL(this);
          });
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
