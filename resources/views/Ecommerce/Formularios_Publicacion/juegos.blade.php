@extends('layouts.barra_navegacion_principal')
@section('content')
<div class="escritorio-mt-3-p-t-75">
    <div id="juegos" class="text-white d-none d-sm-block">
        <div class="row">
            <div class="col-md-4 mt-5 peach-gradient" style="height: 8em;">
                <div class="p-5 d-flex justify-content-start">
                    <i class="fab fa-fort-awesome align-self-center" style="font-size: 25px;"></i>
                    <span class="ml-4 align-self-center" style="font-size: 25px;">JUEGOS</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Titulo móvil --}}
    <div class="peach-gradient col-md-4 text-white d-block d-sm-none" style="height: 10em;">
        <div class="p-5 d-flex align-items-center">
            <i class="fab fa-fort-awesome" style="font-size: 60px;"></i>
            <span class="ml-4" style="font-size: 25px;">JUEGOS</span>
        </div>
    </div>

    {{-- Formulario Juegos --}}
    <div class="card container">
        <div class="card-header bg-white">
            <strong style="color:#717fe0;">Categoría</strong>
            >
            <span class="">JUEGOS</span>
            <span class="ml-5"> <a href="{{route('Publicar')}}">Modificar</a></span>
        </div>
        <form class="card-body" action="#" method="post">
            @csrf
            {{-- Imagenes --}}
            <div class="mt-5">
                <h5 class="text-uppercase mb-3"><strong>Fotos</strong></h5>
                <div class="row">
                    <!-- Foto 1 -->
                    <div class="md-form col-md-6">
                        <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left">
                                <span>Elegir</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Subí una foto principal">
                            </div>
                        </div>
                    </div>

                    <!-- Foto 2 -->
                    <div class="md-form col-md-6">
                        <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left">
                                <span>Elegir</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Imagen 2">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Foto 3 -->
                    <div class="md-form col-md-6">
                        <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left">
                                <span>Elegir</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Imagen 3">
                            </div>
                        </div>
                    </div>

                    <!-- Foto 4 -->
                    <div class="md-form col-md-6">
                        <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left">
                                <span>Elegir</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Imagen 4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <div class="col md-form">
                    <label for="titulo">Título</label>
                    <input class="form-control" type="text" name="titulo" value="">
                </div>

                <div class="col md-form">
                    <label for="titulo">Descripción</label>
                    <textarea class="md-textarea form-control" name="descripcion" rows="3"></textarea>
                </div>

                <div id="div_precio" class="col-12 col-md-2 md-form">
                    <i class="zmdi zmdi-money prefix"></i>
                    <label for="precio">Precio</label>
                    <input id="precio" class="form-control" type="number" name="precio" value="">
                </div>

                <div class="form-check">
                    <input id="precio_a_convenir" class="form-check-input" type="checkbox" name="precio_a_convenir" value="">
                    <label class="" for="precio_a_convenir">Precio a convenir</label>
                </div>
            </div>

            <h5 class="text-uppercase mb-3 mt-5"><strong>Información adicional</strong></h5>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="form-check">
                        <input id="mozos_y_camareras" class="form-check-input" type="checkbox" name="info_adicional" value="">
                        <label class="form-check-label" for="mozos_y_camareras">Mozos y camareras</label>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-check">
                        <input id="mesa_dulce" class="form-check-input" type="checkbox" name="info_adicional" value="">
                        <label class="form-check-label" for="mesa_dulce">Mesa dulce</label>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-check">
                        <input id="barra_de_tragos" class="form-check-input" type="checkbox" name="info_adicional" value="">
                        <label class="form-check-label" for="barra_de_tragos">Barra de tragos</label>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <div class="col-md-3 flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5 mt-5">
                    Publicar
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
  $("#precio_a_convenir").on('change', function() {
    if (this.checked) {
      $("#precio").val('');
      $("#div_precio").css("opacity","0.5");
        $("#precio").attr('disabled', 'true');
    } else {
      $("#div_precio").css("opacity","1");
        $("#precio").removeAttr('disabled');
    }

    });
</script>
@endsection
