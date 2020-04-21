@extends('layouts.barra_navegacion_principal')
{{-- FORMULARIO PARA DATOS DE LA CUENTA --}}
@section('content')
  <div class="animsition position-relative" style="height: 50em;">
    <div id="banner"></div>
    <div id="formulario" class="p-t-20 d-flex justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <span class="mt-4 text-uppercase" style="text-align:center; color:#3B4AFC;">Completá los datos de tu cuenta para continuar</span>

          <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{route('AlmacenarDatosCliente')}}">
              @csrf
              <!-- Fecha de alta al sistema -->
              <input hidden type="text" name="" value="{{date('Y-m-d')}}">
              <!-- DNI -->
              <div class="form-group row">
                <label for="dni" class="col-md-4 col-form-label text-md-right">DNI</label>
                <input id="dni" class="form-control col-md-6" type="number" name="dni" required>
              </div>
              <!-- Provincia -->
              <div class="form-group row">
                <label for="provincia" class="col-md-4 col-form-label text-md-right">Provincia</label>
                <div class="col-md-6">
                  <input hidden id="provincia_nombre" type="text" name="provincia_nombre" value="">
                  <select id="provincia" class="form-control" name="provincia" required>
                    <option value="" selected>Elegir</option>
                    @foreach ($ProvinciasLocalidadesJson as $provincia)
                      <option value="{{ $provincia['id'] }}">{{$provincia['nombre']}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <!-- Ciudad -->
              <div class="form-group row">
                <label for="ciudad" class="col-md-4 col-form-label text-md-right">Ciudad</label>
                <div class="col-md-6">
                  <select id="localidad" class="form-control" name="localidad" required>
                    @foreach ($ProvinciasLocalidadesJson as $localidad)

                    @endforeach
                  </select>
                </div>
              </div>
              <!-- Teléfono -->
              <div class="form-group row">
                <label for="telefono" class="col-md-4 col-form-label text-md-right">Teléfono</label>
                <input class="form-control col-md-6" type="number" name="telefono" required>
              </div>
              <!-- Nombre de fantasía -->
              {{-- <div class="form-group row">
              <label for="nombre_fantasia" class="col-md-4 col-form-label text-md-right">Nombre fantasía</label>
              <input class="form-control col-md-6" type="text" name="nombre_fantasia" placeholder="Ejemplo: El principito eventos">
            </div>
            <!-- Foto de perfil -->
            <div class="form-group row">
            <label for="foto" class="col-md-4 col-form-label text-md-right">Foto de perfil <br> <small class="">Seelccioná la foto con la que las personas te identificaran a ti y tus servicios</small> </label>
            <input id="foto" class="form-control col-md-6" type="file" name="foto" accept="image/*">
          </div>
          <!-- Vista previa imagen -->
          <div class="card d-flex align-items-center">
          <img id="preview" class="rounded" src="#" alt="" width="30%" height="30%">
        </div> --}}
        <div class="text-center mt-4">
          <button class="btn btn-primary" style="background:#3B4AFC; cursor:pointer;" type="submit">Finalizar</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

  </div>

{{-- Scripts  --}}

  <script>
  //Select dinamico de provincias y localidades
    $("#provincia").on('change',function(){
      var provincia_id = $(this).val();
      var nombre_provincia = $('#provincia option:selected').text();
      $("#provincia_nombre").val(nombre_provincia);
      //alert(provincia_id +' '+ nombre_provincia);
      $.ajax({
        type: 'POST',
        url : '{{url("listarlocalidades")}}', //Es la funcion Index de localidad al ser resource
        data:{
                nombre_provincia,
                provincia_id,
                _token:"{{csrf_token()}}"},

        error: function(x,y,z){
          console.log(x,y,z);
        },
        success: function(data){
          $("#localidad").empty();
          $.each(data[2],function(index, value) {
            $("#localidad").append('<option value="'+ value['nombre'] +'">'+ value['nombre'] + '</option>');
          });
        },
      });
    });
  </script>

  {{-- Previsualizar imagen --}}
  <script>
    function readURL(input) {
     if (input.files && input.files[0]) {
         var reader = new FileReader();
         reader.onload = function (e) {
           $('#preview').attr('src', e.target.result);
         }
         reader.readAsDataURL(input.files[0]);
     }
    }
    $("#foto").change(function(){
       readURL(this);
    });

  </script>
@endsection
