@extends('Principal.Partials.master')
@section('content')
<div class="dispositivo {{ Session::get('ClaseRandom') }}">
    <div style="height: 100vh;">
        <div class="d-flex justify-content-center text-white">
            <div class="row text-center">
                <div class="col-lg-12 col-12">
                    <h1> <i class="fa fa-check-circle"></i> </h1>
                </div>
    
                <div class="col-lg-12 col-12 mt-4">
                    @if ( Session::has('Success') )
                        <h1> {{ Session::get('Success') }} </h1>        
                    @endif
                </div>

                <div class="col-lg-12 col-12 mt-5 pt-5 d-flex justify-content-center">
                    <a href="{{route('Principal')}}" class="col-md-3 flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5 mt-5">
                            Volver
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
