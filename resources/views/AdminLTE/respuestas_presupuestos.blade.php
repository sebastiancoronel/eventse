@extends('AdminLTE.home')
@section('content')
<div class="dispositivo">
  <h4 class="text-muted"> <i class="zmdi zmdi-assignment"></i> Respuestas de presupuestos</h4>
  <hr>
  @if ( count($Presupuestos) )
    @foreach ( $Presupuestos as $presupuesto )
    <form action=" {{ route('ConfirmarContratacion') }} " method="POST">
      @csrf
      <input hidden type="text" name="id_presupuesto" value=" {{ $presupuesto->id }} ">

      <div class="card my-5">
        <div class="card-header {{ ( $presupuesto->estado == 'Sin respuesta' ? 'bg-danger' : ( $presupuesto->estado == 'Aceptado' ? 'bg-white' : 'bg-success') ) }} ">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4> <a href=" {{ route('MostrarServicio', [ 'id' => $presupuesto->id_servicio ]) }} " class="text-white" target="blank"> {{ $presupuesto->nombre }} </a> </h4>
                </div>
                <div class="col-md-6">
                    @if ( $presupuesto->estado == 'Disponible' )
                        <span class="alert alert-success pull-right text-uppercase">
                            <i class="zmdi zmdi-check-circle"></i> {{ $presupuesto->estado }}
                        </span>
                    @endif

                    @if ( $presupuesto->estado == 'No disponible' )
                        <span class="alert alert-danger pull-right text-uppercase">
                            <i class="zmdi zmdi-close-circle"></i> {{ $presupuesto->estado }}
                        </span>
                    @endif

                    @if ( $presupuesto->estado == 'Sin respuesta' )
                        <span class="alert alert-danger pull-right text-uppercase">
                            <i class="zmdi zmdi-close-circle"></i> {{ $presupuesto->estado }}
                        </span>
                    @endif

                    @if ( $presupuesto->estado == 'Aceptado' )
                        <span class="alert alert-secondary pull-right text-uppercase">
                          Esperando respuesta
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
            {{-- Fecha - Desde - Hasta --}}
            <div class="col-lg-4 col-12">
                <strong> Fecha: </strong><span>{{ date( 'd-m-Y' , strtotime($presupuesto->fecha)) }}</span>
            </div>
            <div class="col-lg-4 col-12">
                <strong> Desde: </strong><span>{{ date( 'H:i' , strtotime($presupuesto->hora_desde)) }}</span>
            </div>
            <div class="col-lg-4 col-12">
                <strong> Hasta: </strong><span>{{ date( 'H:i' , strtotime($presupuesto->hora_hasta)) }}</span>
            </div>
            </div>

            <div class="row mt-5">
                {{-- Dirección --}}
                <div class="col-lg-4 col-12">
                    <strong> Direccion: </strong> <span>{{ $presupuesto->direccion }}</span>
                </div>

                {{-- Importe --}}
                <div class="col-lg-4 col-12">
                    <strong> Precio Final: </strong> <span> $ {{ $presupuesto->monto }}</span>
                </div>
            </div>

          </div>
          <div class="container">
            @if ( $presupuesto->respuesta && $presupuesto->estado != 'Sin respuesta' )
              <div class="col-lg-12 col-12 mt-5">
                <strong> Tu: </strong> 
                  <p class="mb-0 font-weight-light small grey lighten-2 p-2 rounded">
                    {{$presupuesto->pregunta}}
                  </p>
              </div>
              <div class="col-lg-12 col-12 mt-3">
                <strong> Prestador: </strong> 
                  <p class="mb-0 font-weight-light small primary-color text-white p-2 rounded">
                    {{$presupuesto->respuesta}}
                  </p>
              </div>
            @endif
          </div>

        <div class="card-footer">
          @if ($presupuesto->estado == 'Disponible')
            <div class="pull-right">
              <button type="submit" class="btn btn-primary"> Contratar </button>
            </div>
          @endif
        </div>
      </div>
      <hr>
    </form>
    @endforeach
  @else
    <!-- Si no hay respuestas -->
    <div class="alert alert-primary p-2 rounded">
      <i class="fas fa-exclamation-circle text-primary ml-2"></i> <span>No tienes solicitudes de presupuestos</span>
    </div>
  @endif

  @push('js')
    @if ( Session::has('Exito') )
      <script>
        $(document).ready(function(){
          swal( 'Listo!', ' ' , 'success' );
        });
      </script>
    @endif
    
    <script>
      $(document).on('change','.select_estado',function(){
        if( $( '.select_estado option:selected' ).val() == 'No Disponible' ){
          $('.div_monto').css('display','none');
          $('#monto').val(0);
        }else{
          $('.div_monto').css('display','block');
          $('#monto').val();
        }
      });
    </script>

    <script>
      // Material Select Initialization
      $(document).ready(function() {
        $('.mdb-select').materialSelect();
      });
    </script>
  @endpush
@endsection