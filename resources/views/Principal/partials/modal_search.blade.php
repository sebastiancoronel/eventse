<!-- Modal Search -->
<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
  <div class="container-search-header">
        <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
            <img src="{{asset('images/icons/icon-close2.png')}}" alt="CLOSE">
        </button>

        <form class="card flex-w p-l-15" action="{{ route('ResultadosBusqueda') }}" method="GET">
          {{-- <div class="card-header">
            <h2>Búsqueda avanzada</h2>
          </div> --}}
            <div class="row card-body align-items-center">
                <div class="col-lg-3">
                    <select id="categorias" class="custom-select stext-101 borde-bajo" name="categoria" required>
                        <option value="" selected>¿Qúe buscas?</option>
                        @foreach ($Categorias as $categoria)
                          <option value="{{ $categoria['id'] }}">{{$categoria['nombre']}}</option>
                        @endforeach
                    </select>
                </div>

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
                <div class="col-lg-3">
                    <button type="submit" class="btn btn bg1 stext-101 cl0 ">
                        Buscar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@push('js')

{{-- Select dinamico de provincias y localidades --}}
<script>
    $("#provincia").on('change', function() {
      var provincia_id = $(this).val();
      var nombre_provincia = $('#provincia option:selected').text();
      $("#provincia_nombre").val(nombre_provincia);
  
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
          $("#localidad").empty();
          $.each(data[2], function(index, value) {
            $("#localidad").append('<option value="' + value['nombre'] + '">' + value['nombre'] + '</option>');
          });
        },
      });
    });
</script>
  
@endpush