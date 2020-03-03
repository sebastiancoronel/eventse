<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
  <head>
  @include('head')
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!--===============================================================================================-->
  @include('scripts')
  <style media="screen">
    *{
      font-family: 'Raleway', sans-serif;
    }
      #banner{
        background-image: url('../Images/banner_registro.png');
        height: 300px;
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
    <div class="bg-dark">
      <nav class="limiter-menu-desktop container">
        <!-- Logo desktop -->
        <a href="{{url('/')}}" class="logo">
            <img src="images/Logo Eventse-1 ORIGINAL.svg" alt="IMG-LOGO" style="max-width: 30%; max-height:30%;">
        </a>
    </div>
    <div id="banner">
      <div id="formulario">
        @yield('formulario_cuenta')
      </div>
    </div>

  </body>
  </html>
