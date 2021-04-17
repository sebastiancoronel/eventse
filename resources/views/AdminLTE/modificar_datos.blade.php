@extends('AdminLTE.home')
@section('content')
<div class="dispositivo">
    <h4 class="text-muted">Modificar datos personales</h4>
    <hr>
    
    <form action=" {{ route('ActualizarDatosPersonales') }} " method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                @if (Auth::user()->rol == 'Prestador' )
                    <h5> Datos de empresa </h5>
                    <hr>
                    
                    {{-- <form action="" method="POST"> --}}
                        <div class="mb-4">
                            <div class="text-center">
                                <!-- Vista previa imagen -->
                                <div class="d-flex justify-content-center">
                                    <img id="preview" class="rounded" src="{{ asset($Prestador->foto) }}" alt="" width="20%" height="20%">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <div id="boton_subir" class="float-left">
                                <span class="text-white">Subir archivo</span>
                                <input id="file_input" name="foto" type="file" accept="image/*">
                            </div>
                        </div>

                        <div class="md-form">
                            <label class="active" for="nombre">Nombre</label>
                            <input id="nombre" type="text" class="form-control" name="nombre_prestador" value="{{ $Prestador->nombre }}" required>
                        </div>
        
                        <div class="md-form">
                            <label class="active" for="email">Email</label>
                            <input id="email" type="text" class="form-control" name="email_prestador" value="{{ $Prestador->email }}" required>
                        </div>
                        <div class="md-form">
                            <label class="active" for="telefono">Teléfono</label>
                            <input id="telefono" type="number" class="form-control" name="telefono_prestador" value="{{ $Prestador->telefono }}" required>
                        </div>
                    {{-- </form> --}}
                @endif

                <h5> Datos personales </h5>
                <hr>
                <div class="md-form">
                    <label class="active" for="nombre">Nombre</label>
                    <input id="nombre" type="text" name="nombre_user" class="form-control" value="{{ $User->name }}">
                </div>

                <div class="md-form">
                    <label class="active" for="apellido">Apellido</label>
                    <input id="apellido" type="text" name="apellido_user" class="form-control" value="{{ $User->lastname }}">
                </div>

                <div class="md-form">
                    <label class="active" for="email">Email</label>
                    <input id="email" type="text" class="form-control" name="email_personal" value="{{ $User->email }}" required>
                </div>

                <div class="md-form">
                    <label class="active" for="telefono">Teléfono</label>
                    <input id="telefono" type="number" class="form-control" name="telefono_personal" value="{{ $User->telefono }}" required>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary pull-right"> Actualizar </button>
            </div>
        </div>
    </form>
</div>

@push('js')
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

    @if ( Session::has('DatosActualizados') )
        <script>
            $(document).ready( function(){
                swal('Datos actualizados' , ' ' , 'success' );
            } );
        </script>
    @endif
@endpush
@endsection