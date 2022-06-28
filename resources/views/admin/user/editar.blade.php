@extends('layouts.adminlte')

@section('content')
    <div class="card-body">
        <form action="{{ route('user.update', $data->id) }}" method="post" class="row">
            @csrf
            @method('PUT')
            <div class="col-md-6">
                <div class="form-group">
                    <label for="date_event">Nombre <small>*Obligatorio</small> </label>
                    <input value="{{ $data-> }}" required id="name" name="name" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="date_event">Apellidos <small>*Obligatorio</small> </label>
                    <input  value="{{ $data-> }}" required id="last_name" name="last_name" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="team">Area </label>
                    <select  name="area_id" id="user" class="form-control">
                        @foreach($areas as $area)
                            <option value="{{ $area->id }}">{{ $area->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="date_event">Correo<small>*Obligatorio</small> </label>
                    <input required value="{{ $data-> }}"  id="email" name="email" class="form-control" type="email">
                </div>
                <div class="form-group">
                    <label for="team">Administrador </label>
                    <select  name="super_user" id="super_user" class="form-control">
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
