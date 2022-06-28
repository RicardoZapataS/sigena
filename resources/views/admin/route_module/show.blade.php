@extends('layouts.adminlte')

@section('content')
    <div class="card-body">
        <div  class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="date_event">Nombre del area <small>*Obligatorio</small> </label>
                    <input value="{{ $data->name }}" readonly id="route_name" name="name" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="date_event">Nombre de la ruta <small>*Obligatorio</small> </label>
                    <input value="{{ $data->route_name }}" readonly id="route_name" name="route_name" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="team">Modulo </label>
                    <select  name="route_module" readonly id="user" class="form-control">
                        <option value="-1">Ninguno</option>
                        @foreach($modules as $module)
                            <option @if($data->route_module_id == $module->id ) selected @endif value="{{ $module->id }}">{{ $module->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="date_event">Icono<small>*Obligatorio</small> </label>
                    <input value="{{ $data->icon }}"  readonly id="icon" name="icon" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="team">Visible </label>
                    <select  name="visible" id="visible" readonly class="form-control">
                        <option @if($data->visible == 1) selected @endif value="1">Visible</option>
                        <option @if($data->visible == 0) selected @endif value="0">Oculto</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
@endsection
