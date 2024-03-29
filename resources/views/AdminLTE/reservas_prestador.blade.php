@extends('AdminLTE.home')
@section('content')
<div class="dispositivo">
  <h4 class="text-muted"> <i class="zmdi zmdi-assignment"></i> Contrataciones </h4>
  <hr>
  @if ( count($Reservas) )
    @foreach ( $Reservas as $reserva )
    <form action=" {{ route('MarcarComoEntregado') }} " method="POST"> 
      @csrf
      <input hidden type="text" name="id_reserva" value=" {{ $reserva->id }} ">

      <div class="card mb-5">
      <div class="card-header {{ ( $reserva->deleted_at != null ? 'bg-danger' : 'bg-white' ) }}">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4> <a href=" {{ route('MostrarServicio', [ 'id' => $reserva->id_servicio ]) }} " class="text-dark" target="_blank"> {{ $reserva->nombre }} </a> </h4>
                </div>
                <div class="col-md-6">
                    @if ( $reserva->concretado == null && $reserva->deleted_at == null )
                        <span class="alert alert bg-white text-dark pull-right text-uppercase">
                            Pendiente de entrega
                        </span>
                        @else
                        @if ($reserva->deleted_at != null)
                          <span class="bg-danger pull-right text-uppercase">
                            <i class="zmdi zmdi-close-circle"></i> Cancelado
                          </span>
                          @else
                          <div class="alert alert bg-white pull-right text-uppercase">
                            <span class="text-success">
                              <i class="zmdi zmdi-calendar-check"></i> Entregado
                            </span>
                          </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                {{-- Fecha - Desde - Hasta --}}
                <div class="col-lg-4 col-12">
                  <i class="zmdi zmdi-calendar-alt text-primary"></i>
                    <strong> Fecha: </strong><span>{{ date( 'd-m-Y' , strtotime($reserva->fecha)) }}</span>
                </div>
                <div class="col-lg-4 col-12">
                  <i class="zmdi zmdi-alarm text-primary"></i>
                    <strong> Desde: </strong><span>{{ date( 'H:i' , strtotime($reserva->hora_desde)) }}</span>
                </div>
                <div class="col-lg-4 col-12">
                  <i class="zmdi zmdi-alarm text-primary"></i>
                    <strong> Hasta: </strong><span>{{ date( 'H:i' , strtotime($reserva->hora_hasta)) }}</span>
                </div>
            </div>

            <div class="row mt-5">
                {{-- Dirección --}}
                <div class="col-lg-3 col-12">
                  <i class="zmdi zmdi-pin text-danger"></i>
                    <strong> Direccion: </strong> <span>{{ $reserva->direccion }}</span>
                </div>

                <div class="col-lg-3 col-12">
                  <i class="zmdi zmdi-pin text-danger"></i>
                  <strong> Barrio: </strong> <span>{{ $reserva->barrio }} </span>
                </div>
                {{-- Respuesta --}}
                {{-- <div class="col-lg-3 col-12">
                    <strong> Respuesta: </strong> <span>{{ $reserva->respuesta }}</span>
                </div> --}}
                {{-- Importe --}}
                <div class="col-lg-3 col-12">
                    <strong> Precio Final: </strong> <span> $ {{ $reserva->monto }}</span>
                </div>
            </div>
        </div>
        @if ( $reserva->concretado == null && $reserva->deleted_at == null )
          <div class="card-footer">
            {{-- Boton Entregado --}}
            <button type="submit" class="btn btn-primary"> Entregado </button>  

            {{-- Boton No entregado --}}
            <a href="/home/presupuestos-contestados/no-entregado" type="submit" class="btn btn-danger" onclick=" event.preventDefault(); document.getElementById('no-entregado-form-{{ $reserva->id }}').submit(); "> No entregado </a>  
          </div>
        @endif
      </div>
    </form>

    <form id="no-entregado-form-{{ $reserva->id }}" action="{{ route('ReservaNoEntregada') }}" method="POST">
      @csrf
      <input hidden name="id_reserva" type="text" value=" {{ $reserva->id }} ">
    </form>

    @endforeach
  @else
    <!-- Si no hay respuestas -->
    <div class="alert alert-primary p-2 rounded">
      <i class="fas fa-exclamation-circle text-primary ml-2"></i> <span>No tienes reservas</span>
    </div>
  @endif

  @push('js')

    @if ( Session::has('Concretado') )
      <script>
        $(document).ready(function(){
          swal( 'Listo!', ' ' , 'success' );
        });
      </script>
    @endif 

    @if ( Session::has('ReservaNoEntregada') )
      <script>
        $(document).ready(function(){
          swal( 'Listo!', ' ' , 'success' );
        });
      </script>
    @endif 

  @endpush
@endsection