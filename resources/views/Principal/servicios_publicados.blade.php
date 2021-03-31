@extends('Principal.partials.master')
@section('content')
<div class="escritorio-mt-3-p-t-75">
    <div class="bg0 m-t-23 p-b-140">

        {{-- Encabezado --}}
        <div class="position-relative">
            {{-- Categoria y ciudad --}}
            <div class=" d-flex justify-content-center" style="height: 200px; background:linear-gradient(0deg, rgba(10, 0, 0, 0.5), rgba(10, 0, 0, 0.5)), url('{{ asset('images/bandas1.png') }}'); background-size:cover; background-repeat: no-repeat; background-position:center; height: 40vh;">
                <h2 class="d-none d-sm-block text-uppercase text-white align-self-center"> Encontrá todo lo que necesitás para tu evento </h2>
            </div>
    
            {{-- Buscador en medio --}}
            <div class="d-none d-sm-block position-absolute buscador-resultados">
                <form class="card flex-w p-l-15" action="{{ route('ResultadosBusqueda') }}" method="GET">
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
                </form>
            </div>
        </div>

        {{-- Servicios publicados --}}
        <div class="container">
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

                <!-- Botones filter y search/ubicacion -->
                {{-- <div class="flex-w flex-c-m m-tb-10">
                    <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                        <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                        <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Filter
                    </div>

                    <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                        <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                        <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Ubicacion
                    </div>
                </div> --}}
                <!-- Filter advanced panel -->
                {{-- <div class="dis-none panel-filter w-full p-t-10">
                    <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                        <div class="filter-col1 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Sort By
                            </div>

                            <ul>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Default
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Popularity
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Average rating
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                        Newness
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Price: Low to High
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Price: High to Low
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="filter-col2 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Price
                            </div>

                            <ul>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                        All
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        $0.00 - $50.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        $50.00 - $100.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        $100.00 - $150.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        $150.00 - $200.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        $200.00+
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="filter-col3 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Color
                            </div>

                            <ul>
                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #222;">
                                        <i class="zmdi zmdi-circle"></i>
                                    </span>

                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Black
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
                                        <i class="zmdi zmdi-circle"></i>
                                    </span>

                                    <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                        Blue
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
                                        <i class="zmdi zmdi-circle"></i>
                                    </span>

                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Grey
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
                                        <i class="zmdi zmdi-circle"></i>
                                    </span>

                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Green
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
                                        <i class="zmdi zmdi-circle"></i>
                                    </span>

                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Red
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
                                        <i class="zmdi zmdi-circle-o"></i>
                                    </span>

                                    <a href="#" class="filter-link stext-106 trans-04">
                                        White
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="filter-col4 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Tags
                            </div>

                            <div class="flex-w p-t-4 m-r--5">
                                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Fashion
                                </a>

                                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Lifestyle
                                </a>

                                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Denim
                                </a>

                                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Streetstyle
                                </a>

                                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Crafts
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
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

            <!-- Load more -->
            {{-- <div class="flex-c-m flex-w w-full p-t-45">
                <a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                    Cargar más
                </a>
            </div> --}}
        </div>
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

{{-- Filtrar por provincia --}}
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
