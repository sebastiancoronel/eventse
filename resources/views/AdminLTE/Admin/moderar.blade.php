@extends('AdminLTE.home')
@section('content')
<div class="dispositivo">
    <h4 class="text-muted text-uppercase"> Moderaciones </h4>

    <div class="card mt-5">
        <div class="card-body">
            <table class="table table-bordered table-responsive-md table-striped text-center tabla-caracteristicas" servicio-id=""> <!-- servicio-id Puede servir para identificar al servicio.. ya veremos -->
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @forelse ($Caracteristicas as $caracteristica) --}}
                        {{-- <tr data-id=" {{ $caracteristica->id_caracteristica }} ">
                            <td> {{ $caracteristica->nombre_caracteristica }} </td>
                            <td class="row">
                                <a href=" {{ route('EditarCaracteristica', ['id' => $caracteristica->id_caracteristica]) }} " class="btn btn-warning mx-4"> <i class="fa fa-edit"></i> </a>
                                <!-- Material switch -->
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" class="switch-caracteristica" {{ $caracteristica->deleted_at == null ? 'checked' : ' ' }}>
                                        <span class="lever"></span>
                                    </label>
                                </div>
                            </td>
                        </tr> --}}
                    {{-- @empty --}}
                        <td> <i class="fa fa-info-circle text-info"></i> Ésta categoria no posee caracteristicas aún </td>
                    {{-- @endforelse --}}
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('js')
    
@endpush
@endsection