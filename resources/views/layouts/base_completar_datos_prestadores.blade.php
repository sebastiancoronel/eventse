<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
  <head>
  @include('head')
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../css/util.css">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <!--===============================================================================================-->
  @include('scripts')
  <style media="screen">
    *{
      font-family: 'Raleway', sans-serif;
    }
      #banner{
        background-image: url('../Images/banner_registro.png');
        height: 200px;
      }
      #formulario{
        position: absolute;
        top: 10%;
        left: 0%;
        width: 100%;
      }
  </style>
  </head>
  <body>
    @yield('header_completar_datos_prestadores')

    <div id="banner">
      <div id="formulario">
        @yield('formulario_prestadores')
      </div>
    </div>
    <script src="../js/main.js"></script>
  </body>
  </html>
