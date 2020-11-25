@extends('AdminLTE.home')
@section('content')
<div class="dispositivo">
  <h4 class="text-muted">Solicitudes de presupuestos</h4>
  <hr>
  
  @if ( count($Presupuestos) )
    @foreach ( $Presupuestos as $presupuesto )
      <div class="card">
        <div class="card-header">
          <h4> <a href=" {{ route('MostrarServicio', [ 'id' => $presupuesto->id_servicio ]) }} "> {{ $presupuesto->nombre }} </a> </h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12 col-12">
            <strong> Tu: </strong>
            <p class="mb-0 font-weight-light small grey lighten-2 p-2 rounded">
              {{ $presupuesto->pregunta }}
            </p>
            </div>
            <div class="col-lg-12 col-12 mt-5">
              <strong> Respuesta: </strong> 
              @if ($presupuesto->respuesta)
                <p class="mb-0 font-weight-light small primary-color text-white p-2 rounded">
                  {{$presupuesto->respuesta}}
                </p>
              @endif
            </div>
          </div>
        </div>

        {{-- <div class="card-footer">
          @if ($presupuesto->respuesta == null)
            <div class="bor8 bg0 m-b-12">
              <textarea class="stext-111 cl8 plh3 size-111 p-lr-15 h-100" name="respuesta" maxlength="1000" cols="100" rows="2" placeholder="Escribir otra pregunta" required></textarea>
            </div>

            <div class="pull-right">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          @endif
        </div> --}}
        
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