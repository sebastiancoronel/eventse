@extends('AdminLTE.home')
@section('content')
<div class="dispositivo">
  <div class="row">
    <div class="col-lg-6">
      <h4 class="text-muted"> <i class="zmdi zmdi-assignment"></i> Solicitudes de presupuestos</h4>
    </div>

    <div class="col-lg-6">
      <span class="text-muted"> <i class="fas fa-exclamation-circle"></i> Tienes un límite de 72hs para responder a cada solicitud</span>
    </div>
  </div>
  <hr>
  @if ( $errors->any() )
    <div class="text-danger"> {{ $errors->first('monto') }} </div>
    <div class="text-danger my-2"> {{ $errors->first('estado') }} </div>
  @endif
  @if ( count($Presupuestos) )
    @foreach ( $Presupuestos as $presupuesto )
      <form action=" {{ route('ResponderSolicitudPresupuesto') }} " method="POST">
        @csrf
        <input hidden type="text" name="id_presupuesto" value=" {{ $presupuesto->id }} ">
        <div class="card card-outline card-primary">
          <div class="card-header">

            <div class="pull-left">
              <h4> <a href=" {{ route('MostrarServicio', [ 'id' => $presupuesto->id_servicio ]) }} "> {{ $presupuesto->nombre }} </a> </h4>
              <small> Enviado el: {{ date ('d-m-Y' , strtotime($presupuesto->created_at)) }} </small>
            </div>

            <div class="pull-right">
              @if ( $presupuesto->precio_servicio != null )
                  <h4> $ {{ $presupuesto->precio_servicio }} </h4>
                  @else
                    <h4> Precio a convenir </h4>
              @endif
            </div>

          </div>
          <div class="card-body bor10">
            <div class="row">
              {{-- Fecha - Desde - Hasta --}}
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

            {{-- Dirección --}}
            <div class="row mt-5">
              <div class="col-lg-6 col-12">
                <i class="zmdi zmdi-pin text-danger"></i>
                <strong> Direccion: </strong> <span>{{ $presupuesto->direccion }} </span>
              </div>

              {{-- Barrio --}}
              <div class="col-lg-6 col-12">
                <i class="zmdi zmdi-pin text-danger"></i>
                <strong> Barrio: </strong> <span>{{ $presupuesto->barrio }} </span>
              </div>
            </div>

            {{-- Precio --}}
            {{-- <div class="row mt-5">
              <div class="col-lg-6 col-12">
                <i class="zmdi zmdi-pin text-danger"></i>
                <strong> Monto publicado: </strong> <span>{{ $presupuesto->monto }} </span>
              </div>
            </div> --}}

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

            {{-- Aclaraciones --}}
            <div class="row mt-5">
              <div class="col-lg-12 col-12">
                <i class="zmdi zmdi-info text-info"></i>
                <strong> Aclaración: </strong> <span>{{ $presupuesto->pregunta }}</span>
              </div>
            </div>
          </div>
          
          {{-- Estado --}}
          <div class="d-flex justify-content-end">
            <select class="mdb-select md-form select_estado w-50" name="estado" required>
              <option value="" disabled selected>Estado</option>
              <option value="Disponible">Disponible</option>
              <option value="No Disponible">No disponible</option>
            </select>
          </div>
          
          {{-- Importe --}}
          <div class="d-flex justify-content-end">
            <div class="md-form w-50 div_monto">
              <i class="fas fa-dollar prefix"></i>
              <input type="number" id="monto" name="monto" class="form-control" length="10" value="">
              <label for="monto">Monto</label>
            </div>
          </div>

          <div class="card-footer">
            @if ($presupuesto->respuesta == null)
              <div class="bor8 bg0 m-b-12">
                <textarea class="stext-111 cl8 plh3 size-111 p-lr-15 h-100" name="respuesta" maxlength="1000" cols="100" rows="2" placeholder="Escribir respuesta a la aclaración"></textarea>
              </div>

              <div class="pull-right">
                <button type="submit" class="btn btn-success">Responder</button>
              </div>
            @endif
          </div>
        </div>
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