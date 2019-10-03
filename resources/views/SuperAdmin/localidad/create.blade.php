@extends('SuperAdmin.layout')
@section('content')

<!--MENSAJES-->
@if(Session::has('message'))
    <div id="successMessage" class="alert alert-success">{{Session::get('message')}}</div>
@endif

<div class="container">

    <div class="row card">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default"><br>
                <div class="panel-heading">Nueva Localidad</div><br>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('localidad.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>
                        <div class="form-group input-group mb-3 col-md-12" style="padding-left:220px;">
                            <select class="custom-select col-md-6" id="inputGroupSelect02" name="id_provincia"> <!--El name lo toma en el request-->
                            <option id="elemento" selected>Elegir Provincia</option>

                            <!-- Foreach para listar en el combobox todas las provincias-->
                            @foreach($TraerProvincias as $i)
                                <option value="{{$i->id}}">{{$i->nombre}}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Aceptar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
