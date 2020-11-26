@extends('AdminLTE.home')
@section('content')
<div class="dispositivo">
  <h4 class="text-muted"> <i class="zmdi zmdi-assignment"></i> Solicitudes de presupuestos</h4>
  <hr>
  
  @if ( count($Presupuestos) )
    @foreach ( $Presupuestos as $presupuesto )
      <div class="card">
        <div class="card-header">
          <h4> <a href=" {{ route('MostrarServicio', [ 'id' => $presupuesto->id_servicio ]) }} "> {{ $presupuesto->nombre }} </a> </h4>
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

          {{-- Dirección --}}
          <div class="row mt-5">
            <div class="col-lg-12 col-12">
              <strong> Direccion: </strong> <span>{{ $presupuesto->direccion }}</span>
            </div>
          </div>

          {{-- Respuesta --}}
          <div class="row mt-5">
            <div class="col-lg-12 col-12">
              <strong> Aclaración: </strong> <span>{{ $presupuesto->pregunta }}</span>
            </div>
          </div>
        </div>

        {{-- Importe --}}
        <div class="d-flex justify-content-end">
          <div class="md-form w-25">
            <i class="fas fa-dollar prefix"></i>
            <input type="number" id="monto" class="form-control" length="10">
            <label for="monto">Monto</label>
          </div>
        </div>
        

        <div class="card-footer">
          @if ($presupuesto->respuesta == null)
            <div class="bor8 bg0 m-b-12">
              <textarea class="stext-111 cl8 plh3 size-111 p-lr-15 h-100" name="respuesta" maxlength="1000" cols="100" rows="2" placeholder="Escribir respuesta a la aclaración" required></textarea>
            </div>

            <div class="pull-right">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          @endif
        </div>
      </div>
    @endforeach
  @else
    <!-- Si no hay respuestas -->
    {{-- <div class="alert alert-primary p-2 rounded">
      <i class="fas fa-exclamation-circle text-primary ml-2"></i> <span>No te respondieron aún</span>
    </div> --}}
  @endif
  
  @push('js')
    <script>
      var myCustomScrollbar = document.querySelector('.my-custom-scrollbar');
      var ps = new PerfectScrollbar(myCustomScrollbar);
    
      var scrollbarY = myCustomScrollbar.querySelector('.ps.ps--active-y>.ps__scrollbar-y-rail');
    
      myCustomScrollbar.onscroll = function() {
      scrollbarY.style.cssText = `top: ${this.scrollTop}px!important; height: 250px; right: ${-this.scrollLeft}px`;
      }
    </script>
  @endpush
@endsection