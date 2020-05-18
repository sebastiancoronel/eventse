@extends('layouts.barra_navegacion_principal')
{{-- FORMULARIO PARA DATOS DE LA CUENTA --}}
@section('content')

<div class="container-fluid animsition escritorio-mt-3-p-t-75 mt-5">
    <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">

            <!--Form with header-->
            <div class="card wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.3s;">
                <div class="card-body">

                    <!--Header-->
                    <div class="form-header purple-gradient">
                        <h3 class="text-uppercase">Datos personales</h3>
                        <small>Completá los datos de tu cuenta para continuar</small>
                    </div>
                    <!--Body-->
                    <!-- Login form -->
                    <form method="POST" enctype="multipart/form-data" action="{{route('AlmacenarDatosCliente')}}">
                        @csrf
                        <!-- Fecha de alta al sistema -->
                        <input hidden type="text" name="" value="{{date('Y-m-d')}}">
                        <!-- DNI -->
                        <div class="md-form">
                            <i class="zmdi zmdi-account-circle prefix text-muted"></i>
                            <label for="dni">DNI</label>
                            <input id="dni" class="form-control" type="number" name="dni" required>
                        </div>

                        <div class="text-center mb-5">
                            <h5>Ubicación</h5>
                            <small>Ésto ayudará a mostrarte servicios disponibles en tu ciudad</small>
                        </div>

                        <!-- Provincia -->
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
                        <!-- Ciudad -->
                        <span>Ciudad</span>
                        <div class="md-form">
                            <select id="localidad" class="custom-select" name="localidad" required>
                                @foreach ($ProvinciasLocalidadesJson as $localidad)

                                @endforeach
                            </select>
                        </div>
                        <!-- Teléfono -->
                        <div class="md-form">
                            <i class="zmdi zmdi-phone prefix text-muted"></i>
                            <label for="telefono">Teléfono</label>
                            <input class="form-control" type="number" name="telefono" required>
                        </div>
                        <div class="text-center mt-4">
                            <button class="btn btn-primary purple-gradient" type="submit">Finalizar</button>
                        </div>
                    </form>
                    <!-- Login form -->
                </div>
            </div>
            <!--/Form with header-->
        </div>
    </div>
</div>

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

{{-- Previsualizar imagen --}}
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#foto").change(function() {
        readURL(this);
    });
</script>
@endsection
