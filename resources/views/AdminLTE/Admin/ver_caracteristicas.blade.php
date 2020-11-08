@extends('AdminLTE.home')
@section('content')
<div class="dispositivo">
    @if ( Session::has('Success') )
        <div class="alert alert-success"> {{ Session::get('Success') }} </div>
    @endif
    
    <h4 class="text-muted text-uppercase"> Caracteristicas de {{ $Categoria->nombre }} <a class="btn btn-primary pull-right boton_agregar_categoria"> + Agregar </a>  </h4>

    <table>
        <thead>
            <th>Nombre</th>
        </thead>
        <tbody>
            @forelse ($Caracteristicas as $caracteristica)
                <tr>
                    <td>
                        {{ $caracteristica->nombre }}
                    </td>
                </tr>
            @empty
                Ésta categoria no posee caracteristicas aún
            @endforelse
        </tbody>
    </table>
</div>
@endsection