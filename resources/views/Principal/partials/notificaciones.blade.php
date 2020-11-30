<div class="wrap-header-notification js-panel-notification">
    <div class="s-full js-hide-notification"></div>

    <div class="header-notification flex-col-l p-l-65 p-r-25">
        <div class="header-notification-title flex-w flex-sb-m p-b-8">
            <span class="mtext-103 cl2">
                Notificaciones
            </span>
            {{-- Boton cerrar ( X ) --}}
            <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-notification">
                <i class="zmdi zmdi-close"></i>
            </div>
        </div>

        <div class="header-notification-content flex-w js-pscroll">
            <ul id="servicios_carrito" class="header-notification-wrapitem w-full">
            @auth
                @forelse ($Notificaciones as $notificacion)
                    
                {{-- Notificacion --}}
                <li class="header-notification-item flex-w flex-t m-b-12">

                    {{-- Titulo --}}
                    <div class="">
                        @if ($notificacion->id_evento == 1)
                            <a href=" {{ route('MostrarPreguntasRecibidas') }} " target="blank" class="header-notification-item-name m-b-18 hov-cl1 trans-04">
                                {{ $notificacion->texto }}
                            </a>
                        @endif
                        {{-- Info --}}
                        <span class="">
                            {{ date( 'd/m/Y', strtotime($notificacion->created_at)) }}
                        </span>
                    </div>
                </li>
                <hr>
                @empty
                    <span> No tienes notificaciones aun </span>
                @endforelse
            @endauth
            </ul>

            <div class="w-full">
                {{-- <div class="header-notification-total w-full p-tb-40">
                    Total: $75.00
                </div> --}}

                <div class="header-notification-buttons flex-w w-full">
                    {{-- <a href="shoping-notification.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                        Ver todas / marcar como leidas
                    </a> --}}

                    {{-- <a href="shoping-notification.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                        Continuar compra
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
</div>