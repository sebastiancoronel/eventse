@extends('AdminLTE.home')@section('content')
<div class="dispositivo container">
    <h4 class="text-muted text-uppercase"> Categorías <a class="btn btn-primary pull-right boton_agregar_categoria"> + Agregar </a>  </h4>
    
    {{-- Formulario agregar categoria --}}
    <div class="card mt-5 form-agregar-categoria d-none">
        <div class="card-header">
            <h5 class="text-muted text-uppercase cerrar-formulario-nueva-categoria"> Nueva categoría <button class="pull-right">&times;</button> </h5>
        </div>
        <div class="card-body">
            <div class="md-form">
                <form action=" {{ route('AlmacenarCategoria') }} " method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" class="form-control" name="nombre_categoria" id="nombre_categoria" maxlength="60">
                    <input type="file" class="form-control mt-5" name="foto" id="" accept=".jpg, .png">
                    <label for="form1">Nombre de la categoria</label>
                    <button class="btn btn-primary"> Aceptar </button>
                </form>
            </div>
        </div>
    </div>

    {{-- Tabla de categorias --}}
    <div class="card mt-5">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th>Nombre</th>
                        <th>Foto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($Categorias as $categoria)
                        <tr class="text-center">
                            <td> {{ $categoria->nombre }} </td>
                            <td class="w-50"> <img class="img-fluid img-tabla" src="{{ asset($categoria->foto) }}" alt="{{ asset($categoria->foto) }}"> </td>
                            <td class="align-items-center">
                                <button class="btn btn-warning">Editar</button>
                                <button class="btn btn-danger">Borrar</button>
                                {{-- <div class="col-lg-6">
                                </div>
                                <div class="col-lg-6">

                                </div> --}}
                            </td>
                        </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- HACER UN PUSH A LA VISTA MASTER --}}
<script>
    $(document).on('click','.boton_agregar_categoria',function(){
        $('.form-agregar-categoria').removeClass('d-none');
        $('.form-agregar-categoria').addClass('d-block');
    });

    $(document).on('click','.cerrar-formulario-nueva-categoria',function(){
        $('.form-agregar-categoria').removeClass('d-block');
        $('.form-agregar-categoria').addClass('d-none');
    });
</script>
@endsection