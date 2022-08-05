@extends('layouts.adminlte')

@section('content')
    <div class="card-body">
        <form action="{{ route('config.update') }}" method="post" class="row">
            @csrf
            @method('PUT')
                <div class="form-group col-md-6">
                    <label for="date_event">Nombre <small></small> </label>
                    <input value="{{ $data->name }}" readonly class="form-control" type="text">
                </div>
                <div class="form-group col-md-6">
                    <label for="date_event">Apellidos <small></small> </label>
                    <input  value="{{ $data->last_name }}" readonly class="form-control" type="text">
                </div>
                <div class="form-group col-md-6">
                    <label for="team">Area </label>
                        <input  value="{{ $data->area->name }}" readonly class="form-control" type="text">
                </div>

                <div class="form-group col-md-6">
                    <label for="date_event">Correo<small></small> </label>
                    <input readonly class="form-control" type="text" value="{{ $data->email }}"  >
                </div>
            <div class="form-group col-md-6">
                <label for="date_event">Nueva Contraseña <small></small> </label>
                <input required id="passw" name="passw" class="form-control" type="password">
            </div>
            <div class="form-group col-md-6">
                <label for="date_event">Repetir Contraseña <small></small> </label>
                <input required id="passw_confirm" name="passw_confirm" class="form-control" type="password">
            </div>
            <div class="col-12">
                <button class="btn btn-primary" style="float: right; background-color: #203C64 !important; color: #c2c7d0" type="submit">Guardar</button>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
@endsection
