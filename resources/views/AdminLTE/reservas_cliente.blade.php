@extends('AdminLTE.home')
@section('content')
<div class="dispositivo">
  <h4 class="text-muted"> <i class="zmdi zmdi-calendar-note"></i> Mis reservas </h4>
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
                    <h4> <a href=" {{ route('MostrarServicio', [ 'id' => $reserva->id_servicio ]) }} " class="text-white" target="_blank"> {{ $reserva->nombre }} </a> </h4>
                </div>
                <div class="col-md-6">
                    @if ( $reserva->concretado == null )
                        <span class="alert alert bg-white text-dark pull-right text-uppercase">
                            Pendiente de entrega
                        </span>
                        @else

                        <div class="alert alert bg-white pull-right text-uppercase">
                          <span class="text-success">
                            <i class="zmdi zmdi-calendar-check"></i> Entregado
                          </span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
              <div class="col-lg-6 col-12">
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

                  <div class="row mt-5">
                      {{-- Dirección --}}
                      <div class="col-lg-6 col-12">
                          <strong> Direccion: </strong> <span>{{ $reserva->direccion }} </span>
                      </div>
                      {{-- Importe --}}
                      <div class="col-lg-6 col-12">
                          <strong> Precio Final: </strong> <span> $ {{ $reserva->monto }}</span>
                      </div>
                  </div>

                  <div class="row mt-5">
                    {{-- Respuesta --}}
                    <div class="col-lg-12 col-12">
                      <strong> Respuesta: </strong> <span>{{ $reserva->respuesta }}</span>
                    </div>
                  </div>
                  
                </div>
              </div>

              <div class="col-lg-6 col-12 border p-4">
                <div class="text-muted">
                  <div class="row">
                    <div class="col-lg-4 col-12">
                      <div class="rounded-circle" style=" width: 5rem; height: 5rem; background-image: url( '{{ asset($reserva->foto) }}' ); background-size: cover; background-position:center; background-repeat: no-repeat;">
                      </div>
                    </div>

                    <div class="col-lg-8">
                      <div class="row">
                        <div class="col-lg-12 col-12">
                          <strong> Prestador: </strong> <span> {{ $reserva->nombre_prestador }}</span>
                        </div>
        
                        <div class="col-lg-12 my-2">
                          <strong> E-mail: </strong> <span> {{ $reserva->email }}</span>
                        </div>
        
                        <div class="col-lg-12">
                          <strong> Teléfono: </strong> <span> {{ $reserva->telefono }}</span>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

              {{-- <div class="col-lg-6 col-12">
                <div class="alert alert-secondary text-muted">
                  <span class="text-uppercase"> Datos del prestador: </span>
                  <div class="row my-5">
                    <div class="col-lg-3">
                      <strong> Prestador: </strong> <span> {{ $reserva->nombre_prestador }}</span>
                    </div>
    
                    <div class="col-lg-3">
                      <strong> E-mail: </strong> <span> {{ $reserva->email }}</span>
                    </div>
    
                    <div class="col-lg-3">
                      <strong> Teléfono: </strong> <span> {{ $reserva->telefono }}</span>
                    </div>
                  </div>
                </div>
              </div> --}}

            </div>
        </div>
      </div>
    </form>
    @endforeach
  @else
    <!-- Si no hay respuestas -->
    <div class="alert alert-primary p-2 rounded">
      <i class="fas fa-exclamation-circle text-primary ml-2"></i> <span>No tienes reservas</span>
    </div>
  @endif

  @push('js')
    @if ( Session::has('ServicioContratado') )
      <script>
        $(document).ready(function(){
          swal( 'Servicio contratado!', ' ' , 'success' );
        });
      </script>
    @endif
  @endpush
@endsection