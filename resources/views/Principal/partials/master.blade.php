<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('Principal.Partials.head')

  <style media="screen">
	body{
		overflow-x: hidden;
	}
      #formulario{
        position: absolute;
        top: 10%;
        left: 0%;
        width: 100%;
      }
  </style>
</head>

  <body class="animsition">
  @include('Principal.Partials.header')

	@yield('content')
	
	<!-- Paquete -->
	@include('Principal.Partials.paquete')

	<!-- Notificaciones -->
	@include('Principal.Partials.notificaciones')

	@include('Principal.partials.scripts')
	
	@stack('js')			
	
</body>
</html>
