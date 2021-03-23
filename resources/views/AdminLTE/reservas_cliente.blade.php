@extends('AdminLTE.home')
@section('content')
<div class="dispositivo">
  <h4 class="text-muted"> <i class="zmdi zmdi-calendar-note"></i> Mis reservas </h4>
  <hr>
  @if ( count($Reservas) )
    @foreach ( $Reservas as $reserva )
      <div class="card mb-5">
        <div class="card-header bg-white">
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
            <div class="col-lg-8 col-12">
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

                <div class="row mt-5">
                    {{-- Dirección --}}
                    <div class="col-lg-4 col-12">
                      <i class="zmdi zmdi-pin text-danger"></i>
                        <strong> Direccion: </strong> <span>{{ $reserva->direccion }} </span>
                    </div>

                    <div class="col-lg-4 col-12">
                      <i class="zmdi zmdi-pin text-danger"></i>
                      <strong> Barrio: </strong> <span>{{ $reserva->barrio }} </span>
                    </div>

                    {{-- Importe --}}
                    <div class="col-lg-4 col-12">
                        <strong> Precio Final: </strong> <span> $ {{ $reserva->monto }}</span>
                    </div>
                </div>

                <div class="row mt-5">
                  {{-- Respuesta --}}
                  {{-- <div class="col-lg-12 col-12">
                    <strong> Respuesta: </strong> <span>{{ $reserva->respuesta }}</span>
                  </div> --}}
                </div>
                
              </div>
            </div>

            <div class="col-lg-4 col-12 border p-4">
              <div class="text-muted">
                <div class="row">
                  <div class="col-lg-4 col-12">
                    <div class="rounded-circle" style=" width: 5rem; height: 5rem; background-image: url( '{{ asset($reserva->foto) }}' ); background-size: contain; background-position:center; background-repeat: no-repeat;">
                    </div>
                  </div>

                  <div class="col-lg-8">
                    <div class="row">
                      <div class="col-lg-12 col-12">
                        <span> {{ $reserva->nombre_prestador }}</span>
                      </div>
      
                      <div class="col-lg-12 my-2">
                        <span> {{ $reserva->email }}</span>
                      </div>
      
                      <div class="col-lg-12">
                        <span> {{ $reserva->telefono }}</span>
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
        <hr>
        <div class="card-footer bg-white">
          @if ( $reserva->concretado == null )
          <div class="pull-right">
            <form action="{{ route('CancelarReserva') }}" method="POST">
              @csrf
              <input hidden type="text" value="{{ $reserva->id }}" name="id_reserva">
              <button type="submit" class="btn btn-danger"> Cancelar </button>
            </form>
          </div>
          @else
            @if ($reserva->opinion_agregada == null)
              <h4 class="text-uppercase"> Agregar una opinión </h4>
              <div class="md-form">
                <form action="{{ route('AgregarOpinion') }}" method="POST">
                  @csrf
                  <input hidden type="text" name="id_reserva" value=" {{ $reserva->id }} ">
                  <input hidden type="text" name="id_servicio" value=" {{ $reserva->id_servicio }} ">
                  <input hidden type="text" name="id_prestador" value=" {{ $reserva->id_prestador }} ">
                  <label for="opinion">Contános tu experiencia con este servicio</label>
                  <input type="text" name="opinion" class="form-control" maxlength="1000" required>
                  <div class="text-danger"> {{ $errors->first('opinion') }} </div>
                  <button type="submit" class="btn btn-primary pull-right"> Enviar </button>
                </form>
              </div>
            @endif
          @endif
        </div>
      </div>
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

    @if ( Session::has('ReservaCancelada') )
      <script>
        $(document).ready(function(){
          swal( 'Reserva cancelada', ' ' , 'success' );
        });
      </script>
    @endif

    @if ( Session::has('OpinionAgregada') )
      <script>
        $(document).ready(function(){
          swal( 'Gracias por tu opinión', ' ' , 'success' );
        });
      </script>
    @endif
  @endpush
@endsection