@extends('AdminLTE.home')
@section('content')
<div class="dispositivo container">
    @if ( Session::has('Success') )
        <div class="alert alert-success"> {{ Session::get('Success') }} </div>
    @endif
    
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
                            <td class="d-flex align-items-center">
                                <a href=" {{ route('EditarCategoria', ['id' => $categoria->id]) }} " class="btn btn-warning"> <i class="fa fa-edit"></i> </a>

                                <form id="form-eliminar-categoria" action="{{ route('EliminarCategoria') }}" method="POST" style="display: block;">
                                    @csrf
                                    <input hidden type="text" name="id" value="{{ $categoria->id }}">
                                    <button class="btn btn-danger"> <i class="fa fa-trash"></i> </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('js')
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
@endpush

@endsection