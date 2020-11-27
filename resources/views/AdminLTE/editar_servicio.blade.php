@extends('AdminLTE.home')
@section('content')
<div class="dispositivo">
    <h4 class="text-muted"> Editar </h4>
    <hr>

    <div class="card">
        @if ( $Servicio->deleted_at == null )
        <div class="card-header bg-success">
            <span class="text-uppercase"> Servicio habilitado </span>
        </div>
        @else
            <div class="card-header bg-danger">
                <span class="text-uppercase"> Servicio deshabilitado </span>
            </div>
        @endif
        <div class="card-body">
            {{-- Fotos --}}
            <div class="mt-5">
                <h5 class="text-uppercase mb-3"><strong>Fotos</strong></h5>
                <div class="row">

                    <!-- Foto 1 -->
                    <div class="col-md-3 file-field">
                        <div class="mb-4">
                            <div class="text-center">
                                <!-- Vista previa imagen -->
                                <div class="d-flex justify-content-center">
                                <img id="preview" class="rounded" src="{{ asset($Servicio->foto_1) }}" alt="" width="50%" height="50%">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div id="boton_subir_1" class="btn btn-mdb-color btn-rounded float-left">
                                <span class="text-white">Subir archivo</span>
                                <input id="file_input" name="foto_1" type="file" accept="image/*" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <small>Foto principal</small>
                            <div class="text-danger"> {{ $errors->first('foto_1') }} </div>
                        </div>
                    </div>

                    <!-- Foto 2 -->
                    <div class="col-md-3 file-field">
                        <div class="mb-4">
                            <div class="text-center">
                                <!-- Vista previa imagen -->
                                <div class="d-flex justify-content-center">
                                    <img id="preview_2" class="rounded" src="{{ asset($Servicio->foto_2) }}" alt="" width="50%" height="50%">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-mdb-color btn-rounded float-left">
                                <span class="text-white">Subir archivo</span>
                                <input id="file_input_2" name="foto_2" type="file" accept="image/*" required>
                            </div>
                        </div>
                        <div class="text-danger"> {{ $errors->first('foto_2') }} </div>
                    </div>

                    <!-- Foto 3 -->
                    <div class="col-md-3 file-field">
                        <div class="mb-4">
                            <div class="text-center">
                                <!-- Vista previa imagen -->
                                <div class="d-flex justify-content-center">
                                    <img id="preview_3" class="rounded" src="{{ asset($Servicio->foto_3) }}" alt="" width="50%" height="50%">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-mdb-color btn-rounded float-left">
                                <span class="text-white">Subir archivo</span>
                                <input id="file_input_3" name="foto_3" type="file" accept="image/*" required>
                            </div>
                        </div>
                        <div class="text-danger"> {{ $errors->first('foto_3') }} </div>
                    </div>

                    <!-- Foto 4 -->
                    <div class="col-md-3 file-field">
                        <div class="mb-4">
                            <div class="text-center">
                                <!-- Vista previa imagen -->
                                <div class="d-flex justify-content-center">
                                    <img id="preview_4" class="rounded" src="{{ asset($Servicio->foto_4) }}" alt="" width="50%" height="50%">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-mdb-color btn-rounded float-left">
                                <span class="text-white">Subir archivo</span>
                                <input id="file_input_4" name="foto_4" type="file" accept="image/*" required>
                            </div>
                        </div>
                        <div class="text-danger"> {{ $errors->first('foto_4') }} </div>
                    </div>
                </div>
            </div>
            {{-- Nombre --}}
            <div class="md-form">
                <input type="text" id="form1" class="form-control" value="{{ $Servicio->nombre }}">
                <label for="form1" class="active">Nombre</label>
            </div>

            {{-- Descripción --}}
            <div class="md-form">
                <input type="text" id="form1" class="form-control" value="{{ $Servicio->descripcion }}">
                <label for="form1" class="active">Descripcion</label>
            </div>

            {{-- Precio --}}
            <div id="div_precio" class="col-12 col-md-3 md-form my-5">
                <i class="zmdi zmdi-money prefix"></i>
                <label for="precio" class="active">Precio</label>
                <input id="precio" class="form-control" type="number" name="precio" value="{{ $Servicio->precio ? $Servicio->precio : ' ' }}">
                <div class="text-danger"> {{ $errors->first('precio') }} </div>
            </div>

            {{-- Precio a convenir --}}
            <div class="form-check">
                <input id="precio_a_convenir" class="form-check-input" type="checkbox" name="precio_a_convenir" value="1">
                <label class="" for="precio_a_convenir">Precio a convenir</label>
            </div>

        </div>
        <div class="card-footer"></div>
    </div>
</div>

@push('js')
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
@endpush
@endsection