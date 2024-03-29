@extends('Principal.Partials.master')
@section('content')
<div class="escritorio-mt-3-p-t-75">
    <div id="inmueble" class="text-white position-relative d-none d-sm-block" style="background-image: url('{{ asset($Categoria->foto) }}'); background-size:cover; background-repeat: no-repeat; background-position:center; height: 40vh;">
        <div class="row">
            <div class="col-md-4 position-absolute {{$ClaseRandom}}" style="height: 8em; top:5rem; bottom:0px;">
                <div class="p-5 d-flex justify-content-start">
                    <i class="zmdi zmdi-store align-self-center" style="font-size: 25px;"></i>
                    <span class="ml-4 align-self-center text-uppercase" style="font-size: 25px;">{{ $Categoria->nombre }}</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Titulo móvil --}}
    <div class="{{$ClaseRandom}} col-md-4 text-white d-block d-sm-none" style="height: 10em;">
        <div class="p-5 d-flex align-items-center">
            <i class="zmdi zmdi-store" style="font-size: 60px;"></i>
            <span class="ml-4" style="font-size: 25px;"> {{ $Categoria->nombre }} </span>
        </div>
    </div>

    {{-- Formulario --}}
    <div class="card container mt-5">
        <div class="card-header bg-white">
            <strong style="color:#717fe0;">Categoría</strong>
            >
            <span class="text-uppercase">{{ $Categoria->nombre }}</span>
            <span class="ml-5"> <a href="{{route('Publicar')}}">Modificar</a></span>
        </div>

        <form class="card-body" action="{{route('AlmacenarServicio')}}" method="post" enctype="multipart/form-data">
            <input hidden type="text" name="id_categoria" value=" {{$Categoria->id}} ">
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
                                <img id="preview" class="rounded" src="{{ asset('images/placeholder.png') }}" alt="" width="50%" height="50%">
                                </div>
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
                            <div class="text-danger"> {{ $errors->first('foto_1') }} </div>
                        </div>
                    </div>

                    <!-- Foto 2 -->
                    <div class="col-md-3 file-field">
                        <div class="mb-4">
                            <div class="text-center">
                                <!-- Vista previa imagen -->
                                <div class="d-flex justify-content-center">
                                    <img id="preview_2" class="rounded" src="{{ asset('images/placeholder.png') }}" alt="" width="50%" height="50%">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-mdb-color btn-rounded float-left">
                                <span>Subir archivo</span>
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
                                    <img id="preview_3" class="rounded" src="{{ asset('images/placeholder.png') }}" alt="" width="50%" height="50%">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-mdb-color btn-rounded float-left">
                                <span>Subir archivo</span>
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
                                    <img id="preview_4" class="rounded" src="{{ asset('images/placeholder.png') }}" alt="" width="50%" height="50%">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-mdb-color btn-rounded float-left">
                                <span>Subir archivo</span>
                                <input id="file_input_4" name="foto_4" type="file" accept="image/*" required>
                            </div>
                        </div>
                        <div class="text-danger"> {{ $errors->first('foto_4') }} </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <div class="col md-form">
                    <label for="nombre">Nombre</label>
                    <input class="form-control" type="text" name="nombre" value=" {{old('nombre')}} " maxlength="200" required>
                    <div class="text-danger"> {{ $errors->first('nombre') }} </div>
                </div>
            </div>

            <div class="mt-5">
                <div class="col md-form">
                    <label for="descripcion">Descripción</label>
                    <textarea id="descripcion" class="md-textarea form-control" type="text" name="descripcion" value="" maxlength="2000" cols="30" rows="10"  required> {{old('descripcion')}}</textarea>
                    <div class="text-danger"> {{ $errors->first('descripcion') }} </div>
                </div>
            </div>

            {{-- Caracteristicas --}}
            <h5 class="mt-5"><strong>CUENTA CON</strong></h5>
            <div class="form-row mt-5">
                @forelse ($Caracteristicas as $caracteristica)
                    <div class="col-md-4">
                        <div class="">
                        <input id="{{$caracteristica->nombre}}" class="form-check-input" type="checkbox" name="caracteristica[]" value="{{ $caracteristica->id }}">
                        <label class="form-check-label" for="{{$caracteristica->nombre}}"> {{$caracteristica->nombre}} </label>
                        </div>
                    </div>
                @empty
                    <div> <i class="fa fa-info-circle text-info"></i> Ésta categoría no posee caracteristicas </div>    
                @endforelse
            </div>

            <h5 class="mt-5"><strong>PRECIO</strong></h5>
            <div id="div_precio" class="col-12 col-md-3 md-form my-5">
                <i class="zmdi zmdi-money prefix"></i>
                <label for="precio">Precio</label>
            <input id="precio" class="form-control" type="number" name="precio" value="{{old('precio')}}" maxlength="8">
                <div class="text-danger"> {{ $errors->first('precio') }} </div>
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