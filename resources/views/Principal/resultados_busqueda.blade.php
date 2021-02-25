@extends('Principal.partials.master')
@section('content')

<div class="animsition escritorio-mt-3-p-t-75 mt-5">
    
    <div class="position-relative">
        {{-- Categoria y ciudad --}}
        <div class="purple-gradient d-flex justify-content-center" style="height: 200px;">
            <h2 class="d-none d-sm-block text-uppercase text-white align-self-center">{{$categ_result}} en {{$prov_result}} </h2>
            <!-- Movil -->
            <h3 class="d-block d-sm-none text-uppercase text-white align-self-center text-center">{{$categ_result}} en {{$prov_result}}</h3>
        </div>

        {{-- Buscador en medio --}}
        {{-- <div class="d-none d-sm-block position-absolute buscador-resultados">
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
        </div> --}}
    </div>

    <div class="row container m-auto" style="padding-top: 5rem;">

        {{-- Filtros --}}
        <div class="col-lg-3 col-12">
            <form id="form_filtrar">
                @csrf
                <input hidden id="categoria_id" type="text" name="categoria_id" value="{{ $categoria_id }}">
                <input hidden id="prov_filter" type="text" name="provincia_filter">
                {{-- Caracteristicas --}}
                <div class="bor10 p-3">
                    <span>Prestaciones</span>
                    <ul class="mt-2">
                        @forelse ($Caracteristicas as $caracteristica)
                        <li>
                            <input id="{{ $caracteristica->nombre }}" class="form-check-input caracteristica" type="checkbox" name="caracteristica" value="{{ $caracteristica->id }}">
                            <label class="form-check-label" for="{{ $caracteristica->nombre }}"> {{ $caracteristica->nombre }}</label>
                        </li>
                            @empty
                                Sin prestaciones
                        @endforelse
                    </ul>
                </div>
                <hr>
    
                {{-- Ubicacion --}}
                <div class="bor10 p-3">
                    {{-- Provincia --}}
                    <span> Provincia </span>
                    <select id="provincia_result" class="custom-select stext-101 sin-bordes" name="provincia_filter_id" required>
                        {{-- <option value="" selected>¿Donde?</option> --}}
                        @foreach ($ProvinciasLocalidadesJson as $provincia)
                          <option value="{{ $provincia['id'] }}" {{ $prov_result == $provincia['nombre'] ? 'selected' : '' }} >{{$provincia['nombre']}}</option>
                        @endforeach
                    </select>
                    <hr>
        
                    {{-- Localidad --}}
                    <span>Localidad</span>
                    <input hidden type="text" name="loc_result" id="loc_result" value="{{ $loc_result }}">
                    <div class="">
                        <select id="localidad_result" class="custom-select stext-101 sin-bordes" name="localidad_filter" required>
                            <option value="" selected> ¿Qué ciudad? </option>
                        </select>
                        
                        @if ($errors->has('localidad'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('localidad') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <hr>
                
                {{-- Filtrar por precio --}}
                <div class="md-form">
                    <input class="form-check-input" id="precios_todos" type="checkbox" name="precios_todos" value="1" checked>
                    <label class="" for="precios_todos">Todos los precios</label>
                </div>

                {{-- Precio --}}
                <div class="bor10 p-3" id="div_precio" style="opacity: 0.5;">
                    <span>Precio</span>
                    <div class="md-form">
                        <i class="zmdi zmdi-money prefix text-muted"></i>
                        <label class="active" for="minimo">Mínimo</label>
                        <input class="form-control" id="minimo" name="minimo" type="number" value="{{ $PrecioMin }}" min="{{ $PrecioMin }}" max="{{ $PrecioMax }}" disabled>
                    </div>
                    <div class="md-form">
                        <i class="zmdi zmdi-money prefix text-muted"></i>
                        <label class="active" for="maximo">Máximo</label>
                        <input class="form-control" id="maximo" name="maximo" type="number" value="{{ $PrecioMax }}" min="{{ $PrecioMin }}" max="{{ $PrecioMax }}" disabled>
                    </div>
        
                    {{-- Precio a convenir --}}
                    <div class="md-form">
                        <input id="precio_a_convenir" class="form-check-input" type="checkbox" name="precio_a_convenir" value="" disabled>
                        <label class="" for="precio_a_convenir">Precio a convenir</label>
                    </div>
    
                </div>

                <div class="mt-2">
                    <button type="button" class="btn btn bg1 stext-101 cl0" id="btn_aplicar">
                        Aplicar
                    </button>
                </div>
            </form>
        </div>

        {{-- Resultados de la busqueda --}}
        <div class="col-lg-9 col-12">
            <div class="row isotope-grid" id="resultados" style="position: relative; height: 1717.38px;">
                @foreach ($Servicios as $servicio)
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item" style="position: absolute; left: 0%; top: 0px;">
                        <!-- Block2 -->
                        <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ asset($servicio->foto_1) }}" alt="IMG-PRODUCT">
        
                            <a href=" {{route('MostrarServicio',[ 'id' => $servicio  ])}} " class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                            Reservar
                            </a>
                        </div>
        
                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="flex-col-l ">
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
        </div> <!-- col-->
    </div>
</div>

@push('js')
<script>

    //Habilitar - Deshabilitar filtro de precios
    $(document).on('change','#precios_todos', function(){
        if ( !this.checked) {
            $("#div_precio").css("opacity","1");
            $("#minimo").removeAttr('disabled');
            $("#maximo").removeAttr('disabled');
            $("#precio_a_convenir").removeAttr('disabled');
            
        } else {
            $("#div_precio").css("opacity","0.5");
            $("#minimo").attr('disabled', 'true');
            $("#maximo").attr('disabled', 'true');
            $("#precio_a_convenir").attr('disabled', 'true');
        }
    });

    // Al cambiar de prov cambia localidad
    $("#provincia_result").on('change', function() {
        var provincia_id = $("#provincia_result").val();
        var nombre_provincia = $('#provincia_result option:selected').text();
        $("#prov_filter").val(nombre_provincia);

        $("#provincia_nombre_result").val(nombre_provincia);
      
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
                $("#localidad_result").append('<option value="' + value['nombre'] + '" >' + value['nombre'] + '</option>');
            });
            },
        }); 
    });

    // Autoseleccionar prov y loc donde se está buscando actualmente
    $(document).ready(function(){

        var provincia_id = $("#provincia_result").val();
        var nombre_provincia = $('#provincia_result option:selected').text();
        var nombre_localidad = $('#loc_result').val();
        
        $("#prov_filter").val(nombre_provincia);
        
        $("#provincia_nombre_result").val(nombre_provincia);
      
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
                $("#localidad_result").append('<option value="' + value['nombre'] + '" '+ (nombre_localidad == value['nombre'] ? 'selected' : '' ) +' >' + value['nombre'] + '</option>');
            });
            },
        });
    });
</script>

{{-- Tomar precio del input range --}}
<script>
    
    $(document).on('click','#btn_aplicar',function(e){

        e.preventDefault();
        $("#resultados").empty();
        let categoria_id = $('#categoria_id').val();
        let provincia = $('#prov_filter').val();
        let localidad = $('#localidad_result option:selected').text();
        let precios_todos;
        let precio_a_convenir;
        if ( $("#precios_todos").is(':checked') ) {
            precios_todos = 1;
        }else{
            precios_todos = null;
        }

        if ( $('#precio_a_convenir').is(':checked') ){
            precio_a_convenir = 1;
        }else{
            precio_a_convenir = null;
        }

        let minimo = $('#minimo').val();
        let maximo = $('#maximo').val();
        
        
        let caracteristicas = []; 
        $("input[name='caracteristica']:checked").each(function(){
            caracteristicas.push(this.value);
        });

        // var form = document.getElementById('form_filtrar');
        // var formData = new FormData(form);

        $.ajax({
            type: 'GET',
            url: '{{url('/busqueda/filtrado')}}',
            data: {
                categoria_id,
                provincia,
                localidad,
                minimo,
                maximo,
                precios_todos,
                precio_a_convenir,
                caracteristicas,
                _token: '{{ csrf_token() }}'
            },
            error: function( x, y, z ){
                console.log(x,y,z);
            },
            success: function(data){
                console.log(data);
                $.each( data , function( index , value ){

                    var url = value['foto_1'];
                    var asset = `{{ asset( `+  +` ) }}`;
                    var foto = asset + url;
                    var id = value['id'];

                    var servicio = ` 
                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-pic hov-img0">
                                    <img src="`+ foto +`" alt="IMG-PRODUCT">

                                    <a href="/reservar/servicios-publicados/`+ id +`" target="_blank" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                        Reservar
                                    </a>
                                </div>
            
                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="flex-col-l ">
                                    <a href="/reservar/servicios-publicados/`+ id +`" class="text-left cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        `+ value['nombre'] +`
                                    </a>
            
                                    <span class="stext-105 cl3">
                                    `+ ( value['precio'] != null ? '$' + value['precio'] : 'Precio a convenir') +`
                                    </span>

                                    <span class="mt-2">
                                        <i class="zmdi zmdi-pin"></i> <small> `+ value['localidad'] +` , `+ value['provincia'] +` </small>
                                    </span>
                                </div>
                            </div>
                            </div>
                        </div> 
                        `;

                    $("#resultados").append(servicio);
                } );
                
            }
        });
    });
</script>
@endpush
@endsection