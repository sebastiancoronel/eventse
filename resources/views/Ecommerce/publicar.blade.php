@extends('layouts.barra_navegacion_principal')
@section('content')

<div class="animsition escritorio-mt-3-p-t-75">
  @if (Session::has('PerfilCreado'))
    <div class="alert alert-success wow fadeIn">{{Session::get('message')}}</div>
  @endif

  <div class="purple-gradient d-flex justify-content-center" style="height: 200px;">
    <h2 class="d-none d-sm-block text-uppercase text-white align-self-center">¿Que servicio deseas publicar?</h2>
    <!-- Movil -->
    <h3 class="d-block d-sm-none text-uppercase text-white align-self-center text-center">¿Que servicio deseas publicar?</h3>
  </div>

  <div class="row d-flex justify-content-center mt-5">
    {{-- Salones --}}
    <a  href="{{route('PublicarInmueble')}}" class="col-md-3 ml-3 card text-center" style="color: grey;" onmouseover="this.style.color='#f40082'" onmouseout="this.style.color='grey'">
      <div class="card-body d-flex flex-column">
        <i class="zmdi zmdi-store" style="font-size: 60px;"></i>
        <span class="mt-4">Inmuebles</span>
      </div>
    </a>

    {{-- Juegos --}}
    <a href="{{route('PublicarJuegos')}}" class="col-md-3 ml-3 card text-center" style="color: grey;" onmouseover="this.style.color='#f40082'" onmouseout="this.style.color='grey'">
      <div class="card-body d-flex flex-column">
        <i class="fab fa-fort-awesome" style="font-size: 60px;"></i>
        <span class="mt-4">Juegos</span>
      </div>
    </a>
    {{-- Animación --}}
    <a href="{{route('PublicarAnimacion')}}" class="col-md-3 ml-3 card text-center" style="color: grey;" onmouseover="this.style.color='#f40082'" onmouseout="this.style.color='grey'">
      <div class="card-body d-flex flex-column">
        <i class="zmdi zmdi-mood" style="font-size: 60px;"></i>
        <span class="mt-4">Animación</span>
      </div>
    </a>

  </div>

  <div class="row d-flex justify-content-center mt-3">
    {{-- Mobiliario --}}
    <a href="{{route('PublicarMobiliario')}}" class="col-md-3 ml-3 card text-center" style="color: grey;" onmouseover="this.style.color='#f40082'" onmouseout="this.style.color='grey'">
      <div class="card-body d-flex flex-column">
        <i class="fas fa-couch" style="font-size: 60px;"></i>
        <span class="mt-4">Mobiliario</span>
      </div>
    </a>

    {{-- Catering --}}
    <a href="{{route('PublicarCatering')}}" class="col-md-3 ml-3 card text-center" style="color: grey;" onmouseover="this.style.color='#f40082'" onmouseout="this.style.color='grey'">
      <div class="card-body d-flex flex-column">
        <i class="zmdi zmdi-cutlery" style="font-size: 60px;"></i>
        <span class="mt-4">Servicios de Catering</span>
      </div>
    </a>

    {{-- Illuminación --}}
    <a href="{{route('PublicarIluminacion')}}" class="col-md-3 ml-3 card text-center" style="color: grey;" onmouseover="this.style.color='#f40082'" onmouseout="this.style.color='grey'">
      <div class="card-body d-flex flex-column">
        <i class="far fa-lightbulb" style="font-size: 60px;"></i>
        <span class="mt-4">Illuminación</span>
      </div>
    </a>
  </div>

  <div class="row d-flex justify-content-center mt-3">
    {{-- Ornamentación --}}
    <a href="{{route('PublicarOrnamentacion')}}" class="col-md-3 ml-3 card text-center" style="color: grey;" onmouseover="this.style.color='#f40082'" onmouseout="this.style.color='grey'">
      <div class="card-body d-flex flex-column">
        <i class="zmdi zmdi-flower-alt" style="font-size: 60px;"></i>
        <span class="mt-4">Ornamentación</span>
      </div>
    </a>

    {{-- Música & DJ´s --}}
    <a href="{{route('PublicarMusicaDj')}}" class="col-md-3 ml-3 card text-center" style="color: grey;" onmouseover="this.style.color='#f40082'" onmouseout="this.style.color='grey'">
      <div class="card-body d-flex flex-column">
        <i class="zmdi zmdi-headset" style="font-size: 60px;"></i>
        <span class="mt-4">Música & DJ´s</span>
      </div>
    </a>

    {{-- Música & DJ´s --}}
    <a href="{{route('PublicarShows')}}" class="col-md-3 ml-3 card text-center" style="color: grey;" onmouseover="this.style.color='#f40082'" onmouseout="this.style.color='grey'">
      <div class="card-body d-flex flex-column">
        <i class="fas fa-drum" style="font-size: 60px;"></i>
        <span class="mt-4">Bandas y shows en vivo</span>
      </div>
    </a>

  </div>
</div>

<script>
//Select dinamico de provincias y localidades
  $("#provincia").on('change',function(){
    var provincia_id = $(this).val();
    var nombre_provincia = $('#provincia option:selected').text();
    $("#provincia_nombre").val(nombre_provincia);
    $("#seleccionar_localidad").removeAttr('hidden');
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
@endsection
