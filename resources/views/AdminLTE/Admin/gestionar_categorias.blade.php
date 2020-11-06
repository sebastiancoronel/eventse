@extends('AdminLTE.home')@section('content')
<div class="dispositivo container">
    <h4 class="card-header text-muted text-uppercase"> Categorías <a class="btn btn-primary pull-right boton_agregar_categoria"> + Agregar </a>  </h4>
    
    {{-- Formulario agregar categoria --}}
    <div class="card form-agregar-categoria d-none">
        <div class="card-body">
            <div class="md-form">
                <form action=" {{ route('AlmacenarCategoria') }} " method="POST">
                    <input type="text" class="form-control" name="nombre_categoria" id="nombre_categoria" maxlength="60">
                    <label for="form1">Nombre de la categoria</label>
                    <button class="btn btn-primary"> Aceptar </button>
                </form>
            </div>
        </div>
    </div>

    {{-- Tabla de categorias --}}
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($Categorias as $categoria)
                        <tr>
                            <td> {{ $categoria->nombre }} </td>
                            <td>
                                <button class="btn btn-warning">Modificar</button>
                                <button class="btn btn-danger">Eliminar</button>
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
</script>
@endsection