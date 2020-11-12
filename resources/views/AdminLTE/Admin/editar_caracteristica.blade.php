@extends('AdminLTE.home')
@section('content')
<div class="dispositivo container">

    @if ( Session::has('Success') )
        <div class="alert alert-success">
             {{ Session::get('Success') }}
        </div>
    @endif

    <h4 class="text-muted text-uppercase"> Editar {{ $Caracteristica->nombre }} </h4>
    @if ( $Caracteristica->deleted_at != null )
        <div class="alert alert-danger mt-4"> <i class="fa fa-info-circle"></i> Ésta caracteristica se encuentra deshabilitada, debe habilitarla para poder editarla</div>
    @endif

    <div class="card mt-5">
        <div class="card-body">
            <form action=" {{ route('ActualizarCaracteristica') }} " method="POST" class="form-group md-form">
                <input hidden type="text" name="id" id="" value=" {{ $Caracteristica->id }} ">
                @csrf
                <label for="nombre_categoria" class="active">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingresar nombre" value="{{ $Caracteristica->nombre }}" required>
                @if ( $Caracteristica->deleted_at != null )
                    <button type="button" class="btn btn-primary" disabled >Actualizar</button>
                @else
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection