@extends('Principal.Partials.master')
@section('content')

<div class="escritorio-mt-3-p-t-75">
    @if (Session::has('PerfilCreado'))
      <div id="ya_puedes_publicar" class="card wow bounceIn" data-wow-duration="10s" data-wow-delay="5s" data-wow-offset="10"  data-wow-iteration="10">
        <div class="card-body">
          <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-12 col-12 text-center">
              <p class="pt-3 pr-2">{{Session::get('PerfilCreado')}}</p>
            </div>
            <a id="boton_aceptar" type="button" class="btn btn-success">Aceptar</a>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        $("#boton_aceptar").on('click', function() {
          $("#ya_puedes_publicar").fadeOut('400', function() {
            $(this).remove();
          });
          /* Act on the event */
        });
      </script>
    {{-- <div class="alert alert-success wow fadeIn">{{Session::get('message')}} </div> --}}
@endif

  <div class="purple-gradient d-flex justify-content-center" style="height: 200px;">
      <h2 class="d-none d-sm-block text-uppercase text-white align-self-center">¿Que servicio deseas publicar?</h2>
      <!-- Movil -->
      <h3 class="d-block d-sm-none text-uppercase text-white align-self-center text-center">¿Que servicio deseas publicar?</h3>
  </div>

    <!--SELECCION DE CATEGORIAS-->
	<div class="sec-banner bg0 p-b-50 mt-5">
		<div class="container">
			<div class="row">
				@forelse ($Categorias as $categoria)
					<div class="col-md-4 p-b-30">
						<!-- Block1 -->
						<div class="block1 wrap-pic-w background-img" style="background-image: url( '{{ asset($categoria->foto) }}' );">
							<a href=" {{ route('CrearServicio',[ 'id_categoria' => $categoria->id  ]) }} " class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
								<div class="block1-txt-child1 flex-col-l">
									<span class="block1-name ltext-102 trans-04 p-b-8" style="color: white;">
										{{ $categoria->nombre }}
									</span>
								</div>
							</a>
						</div>
					</div>
				@empty
					<div> No hay categorias creadas</div>	
				@endforelse
			</div>
		</div>
	</div>
	<!--Fin SELECCION DE CATEGORIAS-->
</div>

{{-- <script>
    //Select dinamico de provincias y localidades
    $("#provincia").on('change', function() {
        var provincia_id = $(this).val();
        var nombre_provincia = $('#provincia option:selected').text();
        $("#provincia_nombre").val(nombre_provincia);
        $("#seleccionar_localidad").removeAttr('hidden');
        //alert(provincia_id +' '+ nombre_provincia);
        $.ajax({
            type: 'POST',
            url: '{{url("listarlocalidades")}}', //Es la funcion Index de localidad al ser resource
            data: {
                nombre_provincia,
                provincia_id,
                _token: "{{csrf_token()}}"
            },

            error: function(x, y, z) {
                console.log(x, y, z);
            },
            success: function(data) {
                $("#localidad").empty();
                $.each(data[2], function(index, value) {
                    $("#localidad").append('<option value="' + value['nombre'] + '">' + value['nombre'] + '</option>');
                });
            },
        });
    });
</script> --}}
@endsection
