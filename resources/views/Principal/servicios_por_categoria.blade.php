@extends('Principal.Partials.master')
@section('content')
<div class="escritorio-mt-3-p-t-75">
    <div class="text-white position-relative d-none d-sm-block" style="background-image: url('{{ asset($Categoria->foto) }}'); background-size:cover; background-repeat: no-repeat; background-position:center; height: 40vh;">
        <div class="row">
            <div class="col-md-4 position-absolute purple-gradient" style="height: 8em; top:5rem; bottom:0px;">
                <div class="p-5 d-flex justify-content-start">
                    <span class="ml-4 align-self-center text-uppercase" style="font-size: 25px;">{{ $Categoria->nombre }}</span>
                </div>
            </div>

            
        </div>
    </div>

    {{-- Buscador en medio --}}
    {{-- <div class="d-none d-sm-block mt-2 container">
        <form class="card flex-w p-l-15" action="{{ route('ResultadosBusqueda') }}" method="GET">
            <div class="row card-body align-items-center" style="background: #717fe0; color: white;">

                <!-- Provincia -->
                <div class="col-lg-5 d-flex justify-content-center">
                    <input hidden id="provincia_nombre_reservar" type="text" name="provincia_nombre_reservar" value="">
                    <select id="provincia_reservar" class="custom-select stext-101 borde-bajo-blanco" name="provincia_reservar" style="background: #717fe0; color: white;" required>
                        <option value="" selected>Provincia</option>
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
    </div> --}}

    {{-- Titulo móvil --}}
    <div class="purple-gradient col-md-4 text-white d-block d-sm-none" style="height: 10em;">
        <div class="p-5 d-flex align-items-center">
            <i class="zmdi zmdi-store" style="font-size: 60px;"></i>
            <span class="ml-4" style="font-size: 25px;"> {{ $Categoria->nombre }} </span>
        </div>
    </div>

    <div class="container">
        <div class="row isotope-grid mt-5" style="position: relative; height: 1717.38px;">
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
    </div>

</div>
@endsection
