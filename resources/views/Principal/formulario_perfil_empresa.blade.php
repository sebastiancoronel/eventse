@extends('Principal.Partials.master')
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
                    
                    <form method="POST" action="{{route('AlmacenarPrestador')}}" enctype="multipart/form-data">
                        @csrf
                        {{-- Imagen de perfil --}}
                        <div class="file-field">
                            <div class="mb-4">
                                <div class="text-center">
                                    <!-- Vista previa imagen -->
                                    <div class="d-flex justify-content-center">
                                        <img id="preview" class="rounded" src=" {{asset('images/placeholder.png')}} " alt="" width="30%" height="30%">
                                    </div>
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

                        <div class="row mt-5 d-flex align-items-center justify-content-center">
                            <div class="">
                                <button type="submit" class="btn blue-gradient btn-lg waves-effect waves-light">
                                    {{ __('Crear perfil') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="text-center">
                        <hr>
                        <div class="inline-ul text-center d-flex justify-content-center">
                            <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-facebook"></i></a>
                            <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-google"> </i></a>
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
