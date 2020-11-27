@extends('AdminLTE.home')
@section('content')
<div class="dispositivo container">
    @if ( Session::has('Success') )
        <div class="alert alert-success alerta">
            <span> {{ Session::get('Success') }} </span> 
            <button class="text-white pull-right" onclick="$('.alerta').addClass('d-none')"> &times; </button>
        </div>
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
                    <input type="text" class="form-control" name="nombre_categoria" id="nombre_categoria" maxlength="60" required>
                    <div class="text-danger"> {{ $errors->first('nombre_categoria')}} </div>
                    <input type="file" class="form-control mt-5" name="foto" id="" accept=".jpg, .png" required>
                    @if ($errors->any())
                        <div class="text-danger"> {{ $errors->first('foto')}} </div>
                    @endif
                    <label for="form1">Nombre de la categoria</label>
                    <button class="btn btn-primary"> Aceptar </button>
                </form>
            </div>
        </div>
    </div>

    {{-- Tabla de categorias --}}
    <div class="card mt-5">
        <div class="card-body">
            <table class="table table-bordered table-responsive-md table-striped text-center">
                <thead>
                    <tr class="text-center">
                        <th>Nombre</th>
                        <th>Foto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($Categorias as $categoria)
                        <tr class="text-center" data-id=" {{ $categoria->id }} ">
                            <td> {{ $categoria->nombre }} </td>
                            <td class="w-50"> <img class="img-fluid img-tabla" src="{{ asset($categoria->foto) }}" alt="{{ asset($categoria->foto) }}"> </td>
                            <td class="d-flex align-items-center" style="border-bottom: none;">
                                <a href=" {{ route('EditarCategoria', ['id' => $categoria->id]) }} " class="btn btn-warning"> <i class="fa fa-edit"></i> </a>
                                    <div class="boton-ver-caracteristicas mx-auto">
                                        <a href=" {{ route('CrearCaracteristicas', ['id' => $categoria->id]) }} " class="btn btn-secondary"> <i class="fa fa-th-list"></i> </a>
                                    </div>

                                <!-- Material switch -->
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" class="switch-categoria" {{ $categoria->deleted_at == null ? 'checked' : ' ' }}>
                                        <span class="lever"></span>
                                    </label>
                                </div>
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

    {{-- Mostrar formulario agregar categoria --}}
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

    {{-- Deshabilitar/habilitar categoria --}}
    <script>
        $(document).on('change','.switch-categoria', function(){

            var id_categoria = $(this).closest('tr').data('id');
            var checkbox_switch = $(this);

            if ( $(this).is(':checked') ) { //Si se habilita
                var switch_categoria = 'Habilitar';
                
            }else{ //Si se deshabilita
                var switch_categoria = 'Deshabilitar';
            }

            $.ajax({
                    type: 'POST',
                    url: '{{ url('/home/categorias/habilitar-deshabilitar') }}',
                    data: {
                        id_categoria,
                        switch_categoria,
                        _token: '{{ csrf_token() }}'
                    },
                    error: function(x,y,z){
                        console.log(x,y,z);
                    },
                    success: function(data){
                        console.log(data);
                        // if ( data == 'Deshabilitada' ) {
                        //     $(checkbox_switch).closest('td').find('.boton-ver-caracteristicas').hide();
                        // }
                        
                    }
                });
        });
    </script>
@endpush

@endsection