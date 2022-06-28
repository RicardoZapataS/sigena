@extends('layouts.adminlte')

@section('content')
    <div class="card-body">
        <form action="{{ route('user.store') }}" method="post" class="row">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label for="date_event">Nombre <small>*Obligatorio</small> </label>
                    <input required id="name" name="name" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="date_event">Apellidos <small>*Obligatorio</small> </label>
                    <input required id="last_name" name="last_name" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="team">Area </label>
                    <select  name="route_module" id="user" class="form-control">
                        @foreach($areas as $area)
                            <option value="{{ $area->id }}">{{ $area->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="date_event">Correo<small>*Obligatorio</small> </label>
                    <input required id="email" name="email" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="team">Administrador </label>
                    <select  name="visible" id="visible" class="form-control">
                        <option value="0">No</option>
                        <option value="1">Si</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="date_event">Contraseña <small>*Obligatorio</small> </label>
                    <input required id="pass" name="pass" class="form-control" type="password">
                </div>
            </div>
            <button class="btn btn-primary" style="float: right; background-color: #203C64 !important; color: #c2c7d0" type="submit">Guardar</button>
        </form>
    </div>
    <!-- /.card-body -->
@endsection
