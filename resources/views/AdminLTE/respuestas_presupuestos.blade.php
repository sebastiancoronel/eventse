@extends('AdminLTE.home')
@section('content')
<div class="dispositivo">
  <div class="row">
    <div class="col-lg-6">
      <h4 class="text-muted"> <i class="zmdi zmdi-assignment"></i> Respuestas de presupuestos </h4>
    </div>

    <div class="col-lg-6 text-right">
      <a class="btn btn-light" href="/home/presupuestos-contestados/limpiar-presup-no-disp" onclick=" event.preventDefault(); document.getElementById('limpiar-form').submit(); "> <i class="fas fa-broom"></i> Limpiar no disponibles </a>
    </div>

    <form id="limpiar-form" action="{{ route('LimpiarPresupNoDisp') }}" method="POST">
      @csrf
      <input hidden type="text" name="user_id" value="{{ Auth::user()->id }}">
    </form>

  </div>
  <hr>
  @if ( count($Presupuestos) )
    @foreach ( $Presupuestos as $presupuesto )
      <form action=" {{ route('ConfirmarContratacion') }} " method="POST">
        @csrf
        <input hidden type="text" name="id_presupuesto" value=" {{ $presupuesto->id }} ">

        {{-- Header --}}
        <div class="card card-outline card-primary my-5">
          <div class="card-header {{ ( $presupuesto->estado == 'Sin respuesta' ? 'bg-danger' : ( $presupuesto->estado == 'Aceptado' ? 'bg-white' : ( $presupuesto->estado == 'Sin confirmar' ? 'bg-info' : ( $presupuesto->estado == 'No disponible' ? 'bg-danger' : 'bg-success' ) ) ) ) }} ">
              <div class="row align-items-center">
                  <div class="col-md-6">
                      <h4> <a href=" {{ route('MostrarServicio', [ 'id' => $presupuesto->id_servicio ]) }} " class="text-white" target="blank"> {{ $presupuesto->nombre }} </a> </h4>
                      <small> Creado el: {{ date ('d-m-Y' , strtotime($presupuesto->created_at)) }} </small>
                  </div>
                  <div class="col-md-6">
                      @if ( $presupuesto->estado == 'Disponible' )
                          <span class="pull-right text-uppercase">
                              <i class="zmdi zmdi-check-circle"></i> {{ $presupuesto->estado }}
                          </span>
                          <br><br>
                          <small class="pull-right"> Tienes 72hs a partir del {{ date( 'd-m-Y' , strtotime($presupuesto->updated_at)) }} para contratar el servicio </small>
                      @endif 

                      @if ( $presupuesto->estado == 'No disponible' )
                          <span class="pull-right text-uppercase">
                              <i class="zmdi zmdi-close-circle"></i> {{ $presupuesto->estado }}
                          </span>
                      @endif

                      @if ( $presupuesto->estado == 'Sin respuesta' )
                          <span class="pull-right text-uppercase">
                              <i class="zmdi zmdi-close-circle"></i> {{ $presupuesto->estado }}
                          </span>
                      @endif

                      @if ( $presupuesto->estado == 'Aceptado' )
                          <span class="alert alert-secondary pull-right text-uppercase">
                            Esperando respuesta
                          </span>
                      @endif

                      @if ( $presupuesto->estado == 'Sin confirmar' )
                          <span class="pull-right text-uppercase">
                              <i class="zmdi zmdi-close-circle"></i> Se venció el plazo que tenias para confirmar tu reserva
                          </span>
                      @endif
                  </div>
              </div>
          </div>

          {{-- Body --}}
          <div class="card-body">
            {{-- Fecha - Desde - Hasta --}}
            <div class="row">
              <div class="col-lg-4 col-12">
                <i class="zmdi zmdi-calendar-alt text-primary"></i>
                  <strong> Fecha: </strong><span>{{ date( 'd-m-Y' , strtotime($presupuesto->fecha)) }}</span>
              </div>

              <div class="col-lg-4 col-12">
                <i class="zmdi zmdi-alarm text-primary"></i>
                  <strong> Desde: </strong><span>{{ date( 'H:i' , strtotime($presupuesto->hora_desde)) }}</span>
              </div>

              <div class="col-lg-4 col-12">
                <i class="zmdi zmdi-alarm text-primary"></i>
                  <strong> Hasta: </strong><span>{{ date( 'H:i' , strtotime($presupuesto->hora_hasta)) }}</span>
              </div>
            </div>

            <div class="row mt-5">
                {{-- Dirección --}}
                <div class="col-lg-4 col-12">
                  <i class="zmdi zmdi-pin text-danger"></i>
                    <strong> Direccion: </strong> <span>{{ $presupuesto->direccion }}</span>
                </div>

                {{-- Barrio --}}
                <div class="col-lg-4 col-12">
                  <i class="zmdi zmdi-pin text-danger"></i>
                  <strong> Barrio: </strong> <span>{{ $presupuesto->barrio }} </span>
                </div>

                {{-- Caracteristicas incluidas --}}
                <div class="row mt-5">
                  <div class="col-lg-12 col-12">
                    <i class="zmdi zmdi-apps"></i>
                    <strong> Prestaciones solicitadas: </strong> 
                    @foreach ( $CaracteristicasPorPresupuestos as $caracteristicas_array )
                      @foreach ($caracteristicas_array as $caracteristica )
                        @if ( $caracteristica->id_servicio == $presupuesto->id_servicio )

                        <button class="btn btn-primary" disabled> {{ $caracteristica->nombre }} </button>

                        @endif
                      @endforeach
                    @endforeach
                  </div>
                </div>


                {{-- Importe --}}
                <div class="col-lg-4 col-12">
                    <strong> Precio Final: </strong> <span> $ {{ $presupuesto->monto }}</span>
                </div>
            </div>
          </div>

          {{-- Info adicional cliente + info adicional del prestador --}}
          <div class="container">
            @if ( $presupuesto->respuesta && $presupuesto->estado != 'Sin respuesta' )
              <div class="col-lg-12 col-12 mt-5">
                <strong> Tu: </strong> 
                  <p class="mb-0 font-weight-light grey lighten-2 p-2 rounded">
                    {{$presupuesto->pregunta}}
                  </p>
              </div>
              <div class="col-lg-12 col-12 mt-3">
                <strong> Prestador: </strong> 
                  <p class="mb-0 font-weight-light primary-color text-white p-2 rounded">
                    {{$presupuesto->respuesta}}
                  </p>
              </div>
            @endif
          </div>

          <div class="card-footer">
            @if ($presupuesto->estado == 'Disponible')
              {{-- Boton contratar --}}
              <div class="pull-right">
                <button type="submit" class="btn btn-primary"> Contratar </button>
              </div>

              {{-- Boton cancelar --}}
              <div class="pull-right">
                <a href="/home/presupuestos-contestados/rechazar" class="btn btn-danger" onclick=" event.preventDefault(); document.getElementById('rechazar-form-{{$presupuesto->id}}').submit(); "> Rechazar </a>
              </div>

            @endif
          </div>
        </div>
        <hr>
      </form>

      <form id="rechazar-form-{{$presupuesto->id}}" action="{{ route('RechazarRespuestaPresupuesto') }}" method="POST">
        @csrf
        <input hidden type="text" name="id_presupuesto" value="{{ $presupuesto->id }}">
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

    @if ( Session::has('rechazado') )
      <script>
        $(document).ready(function(){
          swal( 'Presupuesto cancelado', ' ' , 'success' );
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