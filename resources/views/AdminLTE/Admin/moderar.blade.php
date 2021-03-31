@extends('AdminLTE.home')
@section('content')
<div class="dispositivo">
    <h4 class="text-muted text-uppercase"> Moderaciones </h4>

    <div class="card mt-5">
        <div class="card-body">
            <table class="table table-bordered table-responsive-md table-striped text-center tabla-caracteristicas" servicio-id=""> <!-- servicio-id Puede servir para identificar al servicio.. ya veremos -->
                <thead>
                    <tr>
                        <th class="font-weight-bold">Servicio</th>
                        <th class="font-weight-bold">Prestador</th>
                        <th class="font-weight-bold">Detalles</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ( $ServiciosSinModerar as $serv_sin_moderar )
                        <tr data-id=" {{ $serv_sin_moderar->id }} ">
                            <td> {{ $serv_sin_moderar->nombre }} </td>
                            <td> {{ $serv_sin_moderar->nombre_prestador }} </td>
                            <td>
                                <button class="btn btn-primary mx-4 boton-ver-servicio" data-toggle="modal" data-target="#ver-no-moderado"> <i class="fa fa-eye"></i> </button>
                            </td>
                        </tr>
                    @empty
                        <td> <i class="fa fa-info-circle text-info"></i> No hay publicaciones sin moderar </td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- Modal para ver el servicio --}}
<div class="modal" id="ver-no-moderado" tabindex="1" style="z-index: 2000;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h5 class="modal-title"> <i class="zmdi zmdi-alert-triangle"></i> Pendiente de moderación </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
        </div>
        <div class="modal-footer">
            <form action=" {{ route('AprobarServicio') }} " method="POST">
                <input hidden type="text" name="id_servicio" id="id_servicio_a_moderar" value="">
                @csrf
                <button type="submit" class="btn btn-primary"> Aprobar </button>
            </form>

            <form action=" {{ route('RechazarServicio') }} " method="POST">
                <input hidden type="text" name="id_servicio" id="id_servicio_a_rechazar" value="">
                @csrf
                <button type="submit" class="btn btn-danger"> Rechazar </button>
            </form>
        </div>
      </div>
    </div>
  </div>

@push('js')

<script>
    $(document).on( 'click' , '.boton-ver-servicio', function(){
        
        var id_servicio = $(this).closest('tr').data('id');
        
        $.ajax({

            type: 'GET',
            url: '{{ url('/home/moderar/ver-servicio-sin-moderar') }}',
            data: {
                id_servicio,
                _token: '{{ csrf_token() }}'
            },
            error: function(x,y,z){
                console.log(x,y,z);
            },
            success: function(data){

                $('.modal-body').empty();

                $('#id_servicio_a_moderar').val( data[0].id );
                $('#id_servicio_a_rechazar').val( data[0].id );
                console.log($('#id_servicio_a_rechazar').val( ))

                var asset = `{{ asset( `+  +` ) }}`;

                var url = data[0].foto_1;
                var foto_1 = asset + url;

                var url = data[0].foto_2;
                var foto_2 = asset + url;

                var url = data[0].foto_3;
                var foto_3 = asset + url;

                var url = data[0].foto_4;
                var foto_4 = asset + url;

                

                let modal_body = `

                <div class="card-body">
                    {{-- Fotos --}}
                    <div class="">
                        <div class="row bor10 p-2">
                            <!-- Foto 1 -->
                            <div class="col-md-3 file-field">
                                <div class="mb-4">
                                    <div class="text-center">
                                        <!-- Vista previa imagen -->
                                        <div class="d-flex justify-content-center">
                                        <img id="preview" class="rounded" src=" `+ foto_1 +` " alt="" width="150px" height="150px">
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <!-- Foto 2 -->
                            <div class="col-md-3 file-field">
                                <div class="mb-4">
                                    <div class="text-center">
                                        <!-- Vista previa imagen -->
                                        <div class="d-flex justify-content-center">
                                            <img id="preview_2" class="rounded" src=" `+ foto_2 +` " alt="" width="150px" height="150px">
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <!-- Foto 3 -->
                            <div class="col-md-3 file-field">
                                <div class="mb-4">
                                    <div class="text-center">
                                        <!-- Vista previa imagen -->
                                        <div class="d-flex justify-content-center">
                                            <img id="preview_3" class="rounded" src=" `+ foto_3 +` " alt="" width="150px" height="150px">
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <!-- Foto 4 -->
                            <div class="col-md-3 file-field">
                                <div class="mb-4">
                                    <div class="text-center">
                                        <!-- Vista previa imagen -->
                                        <div class="d-flex justify-content-center">
                                            <img id="preview_4" class="rounded" src=" `+ foto_4 +` " alt="" width="150px" height="150px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    {{-- Nombre --}}

                    <div class="row container mt-2 bor10 p-2">
                        <div class="col-lg-12">
                            <strong> Nombre: </strong>
                        </div>
                        <div class="col-lg-12">
                            <span class="text-justify"> `+ data[0].nombre +` </span>
                        </div>
                    </div>

                    {{-- Descripción --}}

                    <div class="row container mt-2 bor10 p-2">
                        <div class="col-lg-12">
                            <strong> Descripción </strong>
                        </div>

                        <div class="col-lg-12">
                            <span class="text-justify"> `+ data[0].descripcion +` </span>
                        </div>
                    </div>

                    {{-- Precio / Precio a convenir --}}

                    <div class="row container mt-2 bor10 p-2">
                        <div class="col-lg-12">
                            <strong> Precio </strong>
                        </div>

                        {{-- Precio a convenir --}}
                        <div class="col-lg-12">
                            <span class="text-justify"> `+ ( data[0].precio != null ? `<span class="text-justify"> `+'$'+ data[0].precio +` </span>` : 'Precio a convenir' ) +` </span>
                        </div>
                    </div>
        
                    {{-- Caracteristicas --}}
                    
                    <div class="row container mt-2 bor10 p-2">
                        <div class="col-lg-12">
                            <strong> Caracteristicas </strong>
                        </div>

                        <div class="col-lg-12 caract-modal-body">
                            
                        </div>
                    </div>

                </div>
                
                `;
            

            $('.modal-body').append(modal_body);

            $.each( data[1] , function( index , value ){

                var caract_modal_body = `<button class="text-justify btn btn-primary" disabled> `+ value.nombre +` </button>`;
                $('.caract-modal-body').append(caract_modal_body);

            } );

            }

        });

    } );
</script>

@if ( Session::has('ServicioAprobado') )
    <script>
        $(document).ready(function(){
            swal( 'Listo!', ' Servicio aprobado con éxito ' , 'success');
        });
    </script>
@endif

@if ( Session::has('ServicioRechazado') )
    <script>
        $(document).ready(function(){
            swal( 'Listo!', ' Servicio rechazado con éxito ' , 'success');
        });
    </script>
@endif

@endpush

@endsection