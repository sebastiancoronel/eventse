@extends('AdminLTE.home')
@section('content')
<div class="dispositivo">
  <h4 class="text-muted">Preguntas recibidas</h4>
  <hr>
  @if ( $errors->any()  )  
    <div class="alert alert-danger"> {{ $errors->first('respuesta') }} </div>
  @endif
  @if ( count($Preguntas) )
    @foreach ( $Preguntas as $pregunta )

    <form action=" {{ route('AlmacenarRespuesta') }} " method="POST">
      @csrf
      <input hidden type="text" name="id_pregunta" value=" {{ $pregunta->id }} ">

      <div class="card">
        <div class="card-header">
          <h4> {{ $pregunta->nombre_servicio }} </h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12 col-12">
            <strong> {{ $pregunta->name }} {{ $pregunta->lastname }}: </strong> {{ $pregunta->pregunta }}
            </div>
            <div class="col-lg-12 col-12 mt-5">
              <strong> Respuesta: </strong> {{ ($pregunta->respuesta ? : ' ') }}
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="bor8 bg0 m-b-12">
            <textarea class="stext-111 cl8 plh3 size-111 p-lr-15 h-100" name="respuesta" maxlength="1000" cols="100" rows="2" placeholder="Escribir una respuesta" required></textarea>
          </div>

          <div class="pull-right">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>

        </div>
      </div>
    </form>
    <br>
    @endforeach
  @else
    <!-- Si no hay preguntas -->
    <div class="alert alert-primary p-2 rounded">
      <i class="fas fa-exclamation-circle text-primary ml-2"></i> <span>No tienes preguntas</span>
    </div>
  @endif
</div>
  
  @push('js')
    @if ( Session::has('Respondido') )
    <script>
      $(document).ready(function(){
        swal( 'Listo!' , ' ' , 'success' );
      });
    </script>
    @endif
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
