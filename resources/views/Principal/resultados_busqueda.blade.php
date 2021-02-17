@extends('Principal.partials.master')
@section('content')

<div class="animsition escritorio-mt-3-p-t-75 mt-5">
    
    <div class="position-relative">
        {{-- Categoria y ciudad --}}
        <div class="purple-gradient d-flex justify-content-center" style="height: 200px;">
            <h2 class="d-none d-sm-block text-uppercase text-white align-self-center">Catering en Santiago del Estero</h2>
            <!-- Movil -->
            <h3 class="d-block d-sm-none text-uppercase text-white align-self-center text-center">Catering en Santiago del Estero</h3>
        </div>

        {{-- Buscador --}}
        <div class="d-none d-sm-block position-absolute buscador-resultados">
            <form class="card flex-w p-l-15" action="{{ route('ResultadosBusqueda') }}" method="GET">
                <div class="row card-body align-items-center">
                    <div class="col-lg-3">
                        <select id="categorias_result" class="custom-select stext-101 borde-bajo" name="categoria" required>
                            <option value="" selected>¿Qúe buscas?</option>
                            @foreach ($Categorias as $categoria)
                              <option value="{{ $categoria['id'] }}">{{$categoria['nombre']}}</option>
                            @endforeach
                        </select>
                    </div>
    
                    <div class="col-lg-3">
                        <input hidden id="provincia_nombre_result" type="text" name="provincia_nombre" value="">
                        <select id="provincia_result" class="custom-select stext-101 borde-bajo" name="provincia" required>
                            <option value="" selected>¿Donde?</option>
                            @foreach ($ProvinciasLocalidadesJson as $provincia)
                              <option value="{{ $provincia['id'] }}">{{$provincia['nombre']}}</option>
                            @endforeach
                        </select>
                    </div>
    
                    <!-- Localidad -->
                    <div class="col-lg-3">
                        <select id="localidad_result" class="custom-select stext-101 borde-bajo" name="localidad" required>
                            <option value="" selected> ¿Qué ciudad? </option>
                        </select>
                        
                        @if ($errors->has('localidad'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('localidad') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn bg1 stext-101 cl0 ">
                            Buscar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row container" style="padding-top: 5rem;">
        <div class="col-lg-3 col-12 pt-5">
            <ul>
                @foreach ($Caracteristicas as $caracteristica)
                    <li> {{ $caracteristica->nombre }} </li>
                @endforeach
            </ul>
        </div>

        <div class="col-lg-9 col-12 pt-5">
            {{-- Resultados de la busqueda --}}
            <div class="row isotope-grid" style="position: relative; height: 1717.38px;">
                @foreach ($Servicios as $servicio)
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{$servicio->nombre_categoria}}" style="position: absolute; left: 0%; top: 0px;">
                        <!-- Block2 -->
                        <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ asset($servicio->foto_1) }}" alt="IMG-PRODUCT">
        
                            <a href=" {{route('MostrarServicio',[ 'id' => $servicio  ])}} " class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                            Reservar
                            </a>
                        </div>
        
                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                            <a href="{{route('MostrarServicio',[ 'id' => $servicio  ])}}" class="text-left cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{$servicio->nombre}}
                            </a>
        
                            <span class="stext-105 cl3">
                                @if ($servicio->precio != null)
                                $ {{$servicio->precio}}
                                @else
                                Precio a convenir
                                @endif
                            </span>
                            <span class="mt-2">
                                <i class="zmdi zmdi-pin"></i> <small> {{ $servicio->localidad }} , {{ $servicio->provincia }} </small>
                            </span>
                            </div>
        
                            {{-- <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04" src="{{asset('images/icons/icon-heart-01.png')}}" alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{asset('images/icons/icon-heart-02.png')}}" alt="ICON">
                                </a>
                            </div> --}}
                        </div>
                        </div>
                    </div>
                @endforeach
                
            </div> <!-- row isotope-grid -->
        </div> <!-- columna-->
    </div>


</div>

@push('js')
<script>
    $("#provincia_result").on('change', function() {
      var provincia_id = $(this).val();
      var nombre_provincia = $('#provincia_result option:selected').text();
      $("#provincia_nombre_result").val(nombre_provincia);
  
      console.log( provincia_id, nombre_provincia );
      $.ajax({
        type: 'GET',
        url: '{{url('register/traer-localidades')}}',
        data: {
          
          provincia_id,
          _token: "{{csrf_token()}}"
        },
  
        error: function(x, y, z) {
          console.log(x, y, z);
        },
        success: function(data) {
          $("#localidad_result").empty();
          $.each(data[2], function(index, value) {
            $("#localidad_result").append('<option value="' + value['nombre'] + '">' + value['nombre'] + '</option>');
          });
        },
      });
    });
</script>
@endpush
@endsection