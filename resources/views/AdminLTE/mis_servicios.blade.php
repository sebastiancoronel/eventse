@extends('AdminLTE.home')
@section('content')
<div class="dispositivo">
    <h4 class="text-muted">Mis servicios</h4>
    <hr>
    <div class="card">
        {{-- <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Mis servicios</h3> --}}
        <div class="card-body">
            <div id="table" class="table-editable">
                {{-- <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
                    class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span> --}}
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                        <tr>
                            <th class="text-center">Foto</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Descripción</th>
                            <th class="text-center">Categoría</th>
                            <th class="text-center">Precio</th>
                            <th class="text-center">Editar</th>
                            <th class="text-center">Habilitar/Deshabilitar</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($Servicios as $servicio)
                            <tr data-id=" {{ $servicio->id }} ">
                                <td class="pt-3-half" style="background-image: url({{ asset($servicio->foto_1) }}); background-size: cover; background-position: center; repeat:no-repeat;">
                                </td>
                                <td class="pt-3-half"> {{$servicio->nombre}} </td>
                                <td class="pt-3-half"> {{ \Illuminate\Support\Str::limit( $servicio->descripcion , 40) }} </td>
                                <td class="pt-3-half"> {{ $servicio->nombre_categoria }} </td>
                                <td class="pt-3-half"> {{ $servicio->precio ? '$'. $servicio->precio : 'Precio a convenir' }} </td>
                                <td class="pt-3-half">
                                    <a href=" {{ route('EditarServicio', ['id' => $servicio->id]) }} " class="btn btn-warning mx-4"> <i class="fa fa-edit"></i> </a>
                                </td>
                                <td>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" class="switch-servicio" {{ $servicio->deleted_at == null ? 'checked' : ' ' }}>
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        $(document).on('change','.switch-servicio', function(){

            var id_servicio = $(this).closest('tr').data('id');
            var checkbox_switch = $(this);

            if ( $(this).is(':checked') ) { //Si se habilita
                var switch_servicio = 'Habilitar';
                
            }else{ //Si se deshabilita
                var switch_servicio = 'Deshabilitar';
            }

            $.ajax({
                    type: 'POST',
                    url: '{{ url('/home/servicios/habilitar-deshabilitar') }}',
                    data: {
                        id_servicio,
                        switch_servicio,
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

    {{-- Alertas --}}
    @if ( Session::has('ServicioModificado') )
        <script>
            $(document).ready(function(){
                swal( 'Listo!', ' Servicio modificado ' , 'success');
            });
        </script>
    @endif
@endpush
@endsection