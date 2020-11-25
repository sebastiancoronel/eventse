<div class="wrap-header-cart js-panel-cart">
    <div class="s-full js-hide-cart"></div>

    <div class="header-cart flex-col-l p-l-65 p-r-25">
        <div class="header-cart-title flex-w flex-sb-m p-b-8">
            <span class="mtext-103 cl2">
                Paquete de servicios
            </span>
            {{-- Boton cerrar ( X ) --}}
            <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                <i class="zmdi zmdi-close"></i>
            </div>
        </div>

        <div class="header-cart-content flex-w js-pscroll">
            <ul id="servicios_carrito" class="header-cart-wrapitem w-full">

                @if ( is_array($Paquete) )
                    @forelse ( $Paquete as $servicio )
                        {{-- Servicio --}}
                        <li class="header-cart-item flex-w flex-t m-b-12">
                            {{-- Imagen de Servicio --}}
                            {{-- <div class="header-cart-item-img">
                                <img src="" class="rounded" alt="IMG">
                            </div> --}}
                            {{-- Nombre de Servicio --}}
                            <div class="header-cart-item-txt p-t-8">
                                <a href=" {{ route('MostrarServicio',[ 'id' => $servicio['id_servicio']  ]) }} " class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                        {{ $servicio['NombreServicio'] }}
                                </a>
                                {{-- Precio de Servicio --}}
                                <span class="header-cart-item-info">
                                    <!-- Poner precio o mostrar "Precio a convenir" -->
                                    @if ( $servicio['Precio'] == 'Precio a convenir' )
                                        Precio a convenir
                                    @else
                                        $ {{$servicio['Precio']}}
                                    @endif
                                </span>
                            </div>
                        </li>
                        {{-- Fin Servicio --}}
                    <hr>
                    @empty
                        <span> No tienes servicios agregados aún </span>
                    @endforelse
                    
                @endif
            </ul>

            <div class="w-full">
                {{-- <div class="header-cart-total w-full p-tb-40">
                    Total: $75.00
                </div> --}}

                <div class="header-cart-buttons flex-w w-full">
                    <a href=" {{ route('MostrarPaquete') }} " class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                        Ver paquete
                    </a>

                    {{-- <a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                        Continuar compra
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
</div>