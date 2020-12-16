@extends('AdminLTE.home')
@section('content')
<div class="dispositivo">
    <h4 class="text-muted">Modificar datos personales</h4>
    <hr>

    <div class="card">
        {{-- <div class="card-header">Datos personales</div> --}}
        <div class="card-body">
            @if (Auth::user()->rol == 'Prestador' )
                <h5> Perfil prestador </h5>
                <hr>
                <form action=""></form>
            @endif

            @if (Auth::user()->rol == 'Prestador' )
                <h5> Datos personales </h5>
                <hr>
                <form action=""></form>
            @endif
        </div>
        <div class="card-footer"></div>
    </div>
</div>
@endsection