@extends('layouts.barra_navegacion_principal')
@section('content')
  <div class="escritorio-mt-3-p-t-75">
    <div id="mobiliario" class="text-white d-none d-sm-block">
      <div class="row">
        <div class="col-md-4 mt-5 purple-gradient" style="height: 8em;">
          <div class="p-5 d-flex justify-content-start">
            <i class="fas fa-couch align-self-center" style="font-size: 25px;"></i>
            <span class="ml-4 align-self-center" style="font-size: 25px;">MOBILIARIO</span>
          </div>
        </div>
      </div>
    </div>

    {{-- Titulo móvil --}}
    <div class="purple-gradient col-md-4 text-white d-block d-sm-none" style="height: 10em;">
      <div class="p-5 d-flex align-items-center">
        <i class="fas fa-couch" style="font-size: 60px;"></i>
        <span class="ml-4" style="font-size: 25px;">MOBILIARIO</span>
      </div>
    </div>

    {{-- Formulario Juegos --}}
    <div class="card container">
      <div class="card-header">
        <strong style="color:#717fe0;">Categoría</strong>
        >
        <span class="">MOBILIARIO</span>
        <span class="ml-5"> <a href="{{route('PublicarMobiliario')}}">Modificar</a></span>
      </div>
      <form class="card-body" action="#" method="post" enctype="multipart/form-data">
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
                <label for="cantidad_animadores">Capacidad máxima de personas</label>
                <input class="form-control" type="number" name="cantidad_animadores" value="" maxlength="99">
              </div>

              <div class="col-md-6 md-form">
                <select class="custom-select" name="edades" required>
                  <option value="">Tipo de mobiliario</option>
                  <option value="1">Niños</option>
                  <option value="2">Adultos</option>
                </select>
              </div>
            </div>

            {{-- Tiene --}}
            <h5 class="text-uppercase mb-3"><strong>TIENE</strong></h5>
            <div class="">
              <div class="row mt-2">
                <div class="col-md-4">
                  <div class="form-check">
                    <input id="sillones" class="form-check-input" type="checkbox" name="sillones" value="1">
                    <label class="form-check-label" for="sillones">Sillones</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="puf" class="form-check-input" type="checkbox" name="puf" value="1">
                    <label class="form-check-label" for="puf">Puf</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="mesas" class="form-check-input" type="checkbox" name="mesas" value="1">
                    <label class="form-check-label" for="mesas">Mesas</label>
                  </div>
                </div>
              </div>

              <div class="form-row mt-2">
                <div class="col-md-4">
                  <div class="form-check">
                    <input id="puf_luminoso" class="form-check-input" type="checkbox" name="puf_luminoso" value="1">
                    <label class="form-check-label" for="puf_luminoso">Puf luminoso</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="gazebos" class="form-check-input" type="checkbox" name="gazebos" value="1">
                    <label class="form-check-label" for="gazebos">Gazebos</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="carpas" class="form-check-input" type="checkbox" name="carpas" value="1">
                    <label class="form-check-label" for="carpas">Carpas</label>
                  </div>
                </div>
              </div>

              <div class="form-row mt-2">
                <div class="col-md-4">
                  <div class="form-check">
                    <input id="caminos" class="form-check-input" type="checkbox" name="caminos" value="1">
                    <label class="form-check-label" for="caminos">Caminos</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="fanales_y_marcasenderos" class="form-check-input" type="checkbox" name="fanales_y_marcasenderos" value="1">
                    <label class="form-check-label" for="fanales_y_marcasenderos">Fanales y marcasenderos</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="farolas" class="form-check-input" type="checkbox" name="farolas" value="1">
                    <label class="form-check-label" for="farolas">Farolas</label>
                  </div>
                </div>
              </div>

              <div class="form-row mt-2">
                <div class="col-md-4">
                  <div class="form-check">
                    <input id="biombo" class="form-check-input" type="checkbox" name="biombo" value="1">
                    <label class="form-check-label" for="biombo">Biombo</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="mini_living" class="form-check-input" type="checkbox" name="mini_living" value="1">
                    <label class="form-check-label" for="mini_living">Mini Living</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="lamparas_vintage" class="form-check-input" type="checkbox" name="lamparas_vintage" value="1">
                    <label class="form-check-label" for="lamparas_vintage">Lamparas vintage</label>
                  </div>
                </div>
              </div>

              <div class="form-row mt-2">
                <div class="col-md-4">
                  <div class="form-check">
                    <input id="camastro" class="form-check-input" type="checkbox" name="camastro" value="1">
                    <label class="form-check-label" for="camastro">Camastro</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="puf_redondo" class="form-check-input" type="checkbox" name="puf_redondo" value="1">
                    <label class="form-check-label" for="puf_redondo">Puf redondo</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check">
                    <input id="isla_circular" class="form-check-input" type="checkbox" name="isla_circular" value="1">
                    <label class="form-check-label" for="isla_circular">Isla circular</label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col md-form mt-5">
            <label for="titulo">Descripción adicional (Que incluye y que no incluye)</label>
            <textarea class="md-textarea form-control" name="descripcion" rows="3"></textarea>
          </div>

          <h5 class="mt-5"><strong>PRECIO</strong></h5>
          <div id="div_precio" class="col-12 col-md-3 md-form my-5">
              <i class="zmdi zmdi-money prefix"></i>
              <label for="precio">Precio</label>
              <input id="precio" class="form-control" type="number" name="precio" value="">
          </div>

          <div class="form-check">
              <input id="precio_a_convenir" class="form-check-input" type="checkbox" name="precio_a_convenir" value="1">
              <label class="" for="precio_a_convenir">Precio a convenir</label>
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
