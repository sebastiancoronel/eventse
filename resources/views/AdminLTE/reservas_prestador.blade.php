@extends('AdminLTE.home')
@section('content')
<div class="dispositivo">
  <h4 class="text-muted"> <i class="zmdi zmdi-assignment"></i> Respuestas de presupuestos</h4>
  <hr>
  @if ( count($Reservas) )
    @foreach ( $Reservas as $reserva )
    <form action="  " method="POST"> <!-- Puede valer para cancelar una reserva -->
      @csrf
      <input hidden type="text" name="id_presupuesto" value=" {{ $reserva->id }} ">

      <div class="card">
        <div class="card-header purple-gradient">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4> <a href=" {{ route('MostrarServicio', [ 'id' => $reserva->id_servicio ]) }} " class="text-white" target="blank"> {{ $reserva->nombre }} </a> </h4>
                </div>
                <div class="col-md-6">
                    @if ( $reserva->concretado == null )
                        <span class="alert alert bg-white text-dark pull-right text-uppercase">
                            Pendiente de entrega
                        </span>
                        @else

                        <span class="alert alert-success pull-right text-uppercase">
                            Entregado
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                {{-- Fecha - Desde - Hasta --}}
                <div class="col-lg-4 col-12">
                    <strong> Fecha: </strong><span>{{ date( 'd-m-Y' , strtotime($reserva->fecha)) }}</span>
                </div>
                <div class="col-lg-4 col-12">
                    <strong> Desde: </strong><span>{{ date( 'H:i' , strtotime($reserva->hora_desde)) }}</span>
                </div>
                <div class="col-lg-4 col-12">
                    <strong> Hasta: </strong><span>{{ date( 'H:i' , strtotime($reserva->hora_hasta)) }}</span>
                </div>
            </div>

            <div class="row mt-5">
                {{-- Dirección --}}
                <div class="col-lg-3 col-12">
                    <strong> Direccion: </strong> <span>{{ $reserva->direccion }}</span>
                </div>
                {{-- Respuesta --}}
                <div class="col-lg-3 col-12">
                    <strong> Respuesta: </strong> <span>{{ $reserva->respuesta }}</span>
                </div>
                {{-- Importe --}}
                <div class="col-lg-3 col-12">
                    <strong> Precio Final: </strong> <span> $ {{ $reserva->monto }}</span>
                </div>
            </div>
        </div>
      </div>
    </form>
    @endforeach
  @else
    <!-- Si no hay respuestas -->
    <div class="alert alert-primary p-2 rounded">
      <i class="fas fa-exclamation-circle text-primary ml-2"></i> <span>No tienes respuestas de presupuestos</span>
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