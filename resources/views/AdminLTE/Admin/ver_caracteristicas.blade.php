@extends('AdminLTE.home')
@section('content')
<div class="dispositivo">
    @if ( Session::has('Success') )
        <div class="alert alert-success alerta">
            <span> {{ Session::get('Success') }} </span> 
            <button class="text-white pull-right" onclick="$('.alerta').addClass('d-none')"> &times; </button>
        </div>
    @endif
    
    <h4 class="text-muted text-uppercase"> Caracteristicas de {{ $Categoria->nombre }} <a class="btn btn-primary pull-right boton_agregar_categoria"> + Agregar </a>  </h4>
    
    {{-- Formulario agregar caracteristica --}}
    <div class="card mt-5 form-agregar-caracteristica d-none">
        <div class="card-header">
            <h5 class="text-muted text-uppercase cerrar-formulario-nueva-categoria"> Nueva caracteristica <button class="pull-right">&times;</button> </h5>
        </div>
        <div class="card-body">
            <div class="md-form">
                <form action=" {{ route('AlmacenarCaracteristica') }} " method="POST">
                    @csrf
                    <input hidden type="text" name="id_categoria" value="{{ $Categoria->id }}">

                    <label for="nombre_caracteristica">Nombre</label>
                    <input type="text" class="form-control" name="nombre_caracteristica" id="nombre_caracteristica" maxlength="60" required>
                    <button type="submit" class="btn btn-primary"> Aceptar </button>
                </form>
            </div>
        </div>
    </div>

    <div class="card mt-5">
        <div class="card-body">
            <table class="table tabla-caracteristicas" categoria-id="{{$Categoria->id}}">
                <thead>
                    <th>Nombre</th>
                    <th></th>
                </thead>
                <tbody>
                    @forelse ($Caracteristicas as $caracteristica)
                        <tr data-id=" {{ $caracteristica->id_caracteristica }} ">
                            <td> {{ $caracteristica->nombre_caracteristica }} </td>
                            <td>
                                <!-- Material switch -->
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" class="switch-caracteristica" {{ $caracteristica->deleted_at == null ? 'checked' : ' ' }}>
                                        <span class="lever"></span>
                                    </label>
                                </div>
                                {{-- <a href="" class=" btn btn-danger"> <i class="fa fa-trash"></i> </a> --}}
                            </td>
                        </tr>
                    @empty
                        <td> <i class="fa fa-info-circle text-info"></i> Ésta categoria no posee caracteristicas aún </td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('js')
    <script>
        $(document).on('click','.boton_agregar_categoria',function(){
            $('.form-agregar-caracteristica').removeClass('d-none');
            $('.form-agregar-caracteristica').addClass('d-block');
        });

        $(document).on('click','.cerrar-formulario-nueva-categoria',function(){
            $('.form-agregar-caracteristica').removeClass('d-block');
            $('.form-agregar-caracteristica').addClass('d-none');
        });
    </script>

    {{-- Deshabilitar/Habilitar caracteristicas --}}
    <script>
        $(document).on('change','.switch-caracteristica', function(){

            var id_categoria = $('.tabla-caracteristicas').attr('categoria-id');
            var id_caracteristica = $(this).closest('tr').data('id');

            console.log(id_categoria);

            if ( $(this).is(':checked') ) { //Si se habilita
                var switch_caracteristica = 'Habilitar';
                
            }else{ //Si se deshabilita
                var switch_caracteristica = 'Deshabilitar';
            }

            $.ajax({
                    type: 'POST',
                    url: '{{ url('/home/caracteristicas/habilitar-deshabilitar') }}',
                    data: {
                        id_categoria,
                        id_caracteristica,
                        switch_caracteristica,
                        _token: '{{ csrf_token() }}'
                    },
                    error: function(x,y,z){
                        console.log(x,y,z);
                    },
                    success: function(data){
                        console.log(data);
                    }
                });
        });
    </script>
@endpush
@endsection