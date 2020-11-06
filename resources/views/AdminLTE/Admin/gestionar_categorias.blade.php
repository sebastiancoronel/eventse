@extends('AdminLTE.home')
@section('content')
<div class="dispositivo">
    <h4 class="card-header text-muted text-uppercase"> Categorías </h4>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($Categorias as $categoria)
                        <tr>
                            <td> {{ $categoria->nombre }} </td>
                            <td>
                                <button class="btn btn-warning">Modificar</button>
                                <button class="btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection