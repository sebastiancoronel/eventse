@extends('Perfiles.home')
@section('content')
<div class="dispositivo">
  <h4 class="card-header text-muted">Presupuestos</h4>
  <div class="card-body">
    <div class="alert alert-primary p-2 rounded">
      <i class="fas fa-exclamation-circle text-primary ml-2"></i> <span>No recibiste presupuestos por el momento</span>
    </div>
  </div>

  <div class="row container p-3 bg-white rounded-lg">
      <div class="col-md-3">
        <img class="img-fluid" src="{{asset('images/Salon-01.jpg')}}" alt="IMG">
      </div>
      <div class="row col-md-3 dispositivo-mt-2">
        <span class="col-md-12">Salon para fiestas + ornamentacion + Dj y luces led, laser y máquina de humo</span>
        <a id="link_violeta" class="col-md-12  mt-2"> <img src="{{asset('images/Logo-Eventse-1 ORIGINAL.png')}}" width="10%" alt=""> <small>Magic kingdom</small></a>
      </div>
      <div class="col-md-3 text-center dispositivo-mt-2">
        <span class="text-danger">$60000</span>
      </div>
      <div class="col-md-3 dispositivo-mt-2">
        <div class="flex-c-m stext-101 cl2 size-100 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
          Enviar mensaje
        </div>
        <div class="flex-c-m stext-101 cl2 size-100 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5 mt-4">
          Agregar al paquete
        </div>
      </div>
  </div>
  <hr>
  {{-- Item 2 --}}


</div>
@endsection
