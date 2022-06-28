@extends('layouts.adminlte')

@section('content')
    <div class="card-body">
        <form action="{{ route('route_module.store') }}" method="post" class="row">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label for="date_event">Nombre del area <small>*Obligatorio</small> </label>
                    <input required id="name" name="name" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="date_event">Nombre de la ruta <small>*Obligatorio</small> </label>
                    <input required id="route_name" name="route_name" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="team">Modulo </label>
                    <select  name="route_module" id="user" class="form-control">
                        <option value="-1">Ninguno</option>
                        @foreach($modules as $module)
                            <option value="{{ $module->id }}">{{ $module->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="date_event">Icono<small>*Obligatorio</small> </label>
                    <input required id="icon" name="icon" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="team">Visible </label>
                    <select  name="visible" id="visible" class="form-control">
                        <option value="1">Visible</option>
                        <option value="0">Oculto</option>
                    </select>
                </div>
            </div>
            <button class="btn btn-primary" style="float: right; background-color: #203C64 !important; color: #c2c7d0" type="submit">Guardar</button>
        </form>
    </div>
    <!-- /.card-body -->
@endsection
