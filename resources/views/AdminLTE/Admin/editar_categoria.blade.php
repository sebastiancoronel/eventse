@extends('AdminLTE.home')
@section('content')
<div class="dispositivo container">

    @if ( Session::has('Success') )
        <div class="alert alert-success">
             {{ Session::get('Success') }}
        </div>
    @endif

    <h4 class="text-muted text-uppercase"> Editar {{ $Categoria->nombre }} </h4>

    <div class="card mt-5">
        <div class="card-body">
            <form action=" {{ route('ActualizarCategoria') }} " method="POST" class="form-group md-form" enctype="multipart/form-data">
                <input hidden type="text" name="id" id="" value=" {{ $Categoria->id }} ">
                @csrf
                <label for="nombre_categoria" class="active">Nombre</label>
                <input type="text" name="nombre_categoria" id="nombre_categoria" class="form-control" placeholder="Ingresar nombre" value="{{ $Categoria->nombre }}" required>

                <span>Foto</span>
                <div class="mt-2">
                    <div class="">
                        <img class="img-fluid img-tabla miniatura" src=" {{ asset($Categoria->foto) }} " alt="">
                    </div>
                    <input type="file" name="foto" id="foto" class="form-control">
                </div>
                    <button class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>

@push('js')
    <script>
        $("#foto").change(function() {
        if (this.files.length > 0) {
            if (this.files[0].size > 2000000) {
                     swal("El archivo pesa mas de 2MB","Seleccione otro archivo","error");
                     this.value = ''; //Borra el valor del input
                     console.log(this.value);
                 }else{
                     if (this.files[0].size < 2000000) {
                         if (this.files && this.files[0]) {
                             var reader = new FileReader();
                             reader.onload = function(e) {
                              $('.miniatura').attr('src', e.target.result);
                             }
                             reader.readAsDataURL(this.files[0]);
                             console.log(this.value);
                         }
                     }
                 }
        }
    });
    </script>
@endpush
@endsection