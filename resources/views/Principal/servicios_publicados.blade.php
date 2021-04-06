@extends('Principal.partials.master')
@section('content')
<div class="escritorio-mt-3-p-t-75">
    <div class="bg0 m-t-23 p-b-140" style="background:linear-gradient(0deg, rgba(10, 0, 0, 0.5), rgba(10, 0, 0, 0.5)), url('{{ asset('images/bandas1.png') }}'); background-size:cover; background-repeat: no-repeat; background-position:center; height: 100vh;">

        {{-- Encabezado --}}
        <div class="position-relative">
            <div class="d-flex justify-content-center pt-5">
                <h2 class="d-none d-sm-block text-uppercase text-white align-self-center"> Encontrá todo lo que necesitás para tu evento </h2>
            </div>
            
            {{-- Buscador en medio --}}
            <div class="d-none d-sm-block card flex-w p-l-15 position-absolute buscador-resultados">
                <form class="" action="{{ route('ResultadosBusqueda') }}" method="GET">
                    <div class="row card-body align-items-center">

                        <i class="fas fa-concierge-bell"></i>
                        {{-- Categoria --}}
                        <div class="col-lg-3">
                            <select id="categorias" class="custom-select stext-101 borde-bajo" name="categoria" required>
                                <option value="" selected>¿Qúe buscas?</option>
                                @foreach ($Categorias as $categoria)
                                <option value="{{ $categoria['id'] }}">{{$categoria['nombre']}}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Provincia --}}
                        <i class="fas fa-map"></i> 
                        <div class="col-lg-3">
                            <input hidden id="provincia_nombre" type="text" name="provincia_nombre" value="">
                            <select id="provincia" class="custom-select stext-101 borde-bajo" name="provincia" required>
                                <option value="" selected>¿Donde?</option>
                                @foreach ($ProvinciasLocalidadesJson as $provincia)
                                <option value="{{ $provincia['id'] }}">{{$provincia['nombre']}}</option>
                                @endforeach
                            </select>
                        </div>
    
                        <!-- Localidad -->
                        <i class="fas fa-thumbtack"></i>
                        <div class="col-lg-3">
                            <select id="localidad" class="custom-select stext-101 borde-bajo" name="localidad" required>
                                <option value="" selected> ¿Qué ciudad? </option>
                            </select>
                            
                            @if ($errors->has('localidad'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('localidad') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        {{-- Boton buscar --}}
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn bg1 stext-101 cl0 ">
                                Buscar
                            </button>
                        </div>
                    </div>

                    <!-- Caracteristicas -->
                    <h5 hidden class="titulo-servicios"> <i class="far fa-check-square"></i> Servicios </h5>
                    <div class="form-row my-4 caracteristicas-busqueda">
                        
                    </div>
                    <hr>

                    <!-- Servicios destacados -->
                    <div class="my-4">
                        <input class="form-check-input" id="servicios_destacados" name="destacados" type="checkbox" value="1">
                        <label class="form-check-label" for="servicios_destacados"> Servicios destacados </label>
                    </div>
                </form>

                {{-- <form class="card flex-w p-l-15" action="{{ route('ResultadosBusqueda') }}" method="GET">
                    <div class="row card-body align-items-center" style="background: #717fe0; color: white;">

                        <!-- Provincia -->
                        <div class="col-lg-5 d-flex justify-content-center">
                            <input hidden id="provincia_nombre_reservar" type="text" name="provincia_nombre_reservar" value="">
                            <select id="provincia_reservar" class="custom-select stext-101 borde-bajo-blanco" name="provincia_reservar" style="background: #717fe0; color: white;" required>
                                <option value="" selected>Provincia</option>
                                <option value="">Todos</option>
                                @foreach ($ProvinciasLocalidadesJson as $provincia)
                                    <option value="{{ $provincia['id'] }}">{{$provincia['nombre']}}</option>
                                @endforeach
                            </select>
                        </div>
        
                        <!-- Localidad -->
                        <div class="col-lg-5 d-flex justify-content-center">
                            <select id="localidad_reservar" class="custom-select stext-101 borde-bajo-blanco" name="localidad_reservar" required style="background: #717fe0; color: white;">
                                <option value="" selected> ¿Qué ciudad? </option>
                            </select>
                            
                            @if ($errors->has('localidad'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('localidad') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-2 d-flex justify-content-start">
                            <a class="buscador_publicados" type="button" style="font-size: 30px;">
                                <i class="zmdi zmdi-search"></i>
                            </a>
                        </div>
                    </div>
                </form> --}}
            </div>
        </div>

        {{-- Servicios publicados --}}
        {{-- <div class="container">
            <div class="flex-w flex-sb-m p-b-52">
                <!-- Filtro dinamico por categorias -->
                <div class="flex-w flex-l-m filter-tope-group mt-5 pt-5 m-tb-10 filtro_categorias">
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 todos_los_servicios how-active1" data-filter="*">
                        Todos los servicios
                    </button>
                    @foreach ($Categorias as $categoria)
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".{{$categoria->nombre}}">
                        {{$categoria->nombre}}
                    </button>
                    @endforeach
                </div>
            </div>

            <div class="row isotope-grid servicios_publicados" style="position: relative; height: 1717.38px;">
                @foreach ($Servicios as $servicio)
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{$servicio->nombre_categoria}}" style="position: absolute; left: 0%; top: 0px;">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="{{ asset($servicio->foto_1) }}" alt="IMG-PRODUCT">

                                <a href=" {{route('MostrarServicio',[ 'id' => $servicio  ])}} " class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                Ver servicio
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
                            </div>
                        </div>
                    </div>
                @endforeach
               
            </div> 
        </div> --}}
    </div>
</div>

@push('js')

{{-- Select dinamico de provincias y localidades --}}
<script>
    $("#provincia_reservar").on('change', function() {
      var provincia_id = $(this).val();
      var nombre_provincia = $('#provincia option:selected').text();
      $("#provincia_nombre_reservar").val(nombre_provincia);
  
      //console.log( provincia_id, nombre_provincia );
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
          $("#localidad_reservar").empty();
          $.each(data[2], function(index, value) {
            $("#localidad_reservar").append('<option value="' + value['nombre'] + '">' + value['nombre'] + '</option>');
          });
        },
      });
    });
</script>
{{-- Traer caracteristicas de la categoria seleccionada --}}
<script>

    $( document ).on( 'change' , '#categorias' , function(){

        var id_categoria = $('#categorias option:selected').val();

        $.ajax({

            type: 'GET',
            url: '{{ url('/busqueda/traer-caracteristicas') }}',
            data: {

                id_categoria,
                _token: '{{ csrf_token() }}'

            },
            error: function(x,y,z){
                console.log(x,y,z);
            },
            success: function(data){
                console.log(data);
                $('.caracteristicas-busqueda').empty();

                $.each( data , function( index,value ){

                    var caracteristica = ` <div class="col-lg-4">
                                                <input class="form-check-input" id="`+ value.nombre_caracteristica +`_`+ id_categoria +`" name="caracteristicas[]" type="checkbox" value="`+ value.id_caracteristica +`">
                                                <label class="form-check-label" for="`+ value.nombre_caracteristica +`_`+ id_categoria +`"> `+ value.nombre_caracteristica +` </label>
                                            </div> `;
                    
                    $('.caracteristicas-busqueda').append(caracteristica);
                    $('.titulo-servicios').attr('hidden',false);

                } );
            }

        });

    } );

</script>

{{-- Filtrar por provincia / No se estaria usando ya --}}
<script>

    $(document).on( 'click' , '.buscador_publicados' , function(){

        var provincia = $('#provincia_reservar option:selected').text();
        var localidad = $('#localidad_reservar option:selected').text();

        if ( provincia == 'Todos' ) {
            window.location.reload();
        }
        console.log(provincia , localidad);

        $.ajax({
            type: 'GET',
            url: '{{'/busqueda/publicados'}}',
            data: {
                provincia,
                localidad,
                token: '{{csrf_token()}}'
            },
            error: function(x,y,z){
                console.log(x,y,z);
            },
            success: function(data){
                console.log(data);

                $('.servicios_publicados').empty();

                if ( data[0] == '' ) {

                    $(".servicios_publicados").append("<h4> No hay servicios publicados en esta zona </h4>");

                }else{
                    $.each( data[0] , function(index,value){

                        var url = value.foto_1;
                        var asset = `{{ asset( `+  +` ) }}`;
                        var foto = asset + url;

                        var resultados = `<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item `+ value.nombre_categoria +`" >
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-pic hov-img0">
                                        <img src="`+ foto +`" alt="IMG-PRODUCT">

                                        <a href="/reservar/servicios-publicados/`+ value.id +`" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                        Ver servicio
                                        </a>
                                    </div>

                                    <div class="block2-txt flex-w flex-t p-t-14">
                                        <div class="block2-txt-child1 flex-col-l ">
                                        <a href="/reservar/servicios-publicados/`+ value.id +`" class="text-left cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                            `+ value.nombre +`
                                        </a>

                                        <span class="stext-105 cl3">
                                            `+( value.precio != null ? '$' + value.precio : 'Precio a convenir' )+`
                                        </span>
                                        <span class="mt-2">
                                            <i class="zmdi zmdi-pin"></i> <small> `+ value.localidad +` , `+ value.provincia +` </small>
                                        </span>
                                        </div>

                                    </div>
                                </div>
                            </div>`;

                            $('.servicios_publicados').append(resultados).isotope( 'appended', resultados ); 
                        } );
                        
                        $('.servicios_publicados').isotope('reloadItems').isotope('layout');

                        $('.todos_los_servicios'). click(); //Clickea la opcion todos los servicios porque sino aparecia desordenados los resultados
                }
            }
        });

    } );

</script>
    
@endpush

@endsection
