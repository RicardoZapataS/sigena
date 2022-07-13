@extends('layouts.adminlte')

@section('content')
    <div class="card-body">
        <form action="{{ route('maintenance_record.store') }}" method="post" class="row">
            @csrf
            <div class="form-group col-md-6">
                <label for="team">Turnos <small>*Obligatorio</small> </label>
                <select required name="turn" id="turn" class="form-control">
                    <option value="Mañana 08 a 14">Mañana 08 a 14</option>
                    <option value="Tarde 14 a 20">Tarde 14 a 20</option>
                    <option value="Noche 20 a 08">Noche 20 a 08</option>
                    <option value="Dia 08 a 20">Dia 08 a 20</option>
                    <option value="Administrativo 08 a 16">Administrativo 08 a 16</option>
                    <option value="Turno 14 a 20">Turno 14 a 20</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="date_maintenance">Fecha <small>*Obligatorio</small> </label>
                <input required id="date_maintenance" name="date_maintenance" class="form-control" type="datetime-local">
            </div>
            <div class="form-group col-md-6">
                <label for="activity_name">Nombre de actividad<small>*Obligatorio</small> </label>
                <input required id="activity_name" name="activity_name" class="form-control" type="text">
            </div>
            <div class="form-group col-md-6">
                <label for="activity_ident">Identificador de la actividad<small>*Obligatorio</small> </label>
                <input required id="activity_ident" name="activity_ident" class="form-control" type="text">
            </div>
            <div class="form-group col-md-6">
                <label for="business">Area/Empresa <small>*Obligatorio</small> </label>
                <input required id="business" name="business" class="form-control" type="text">
            </div>
            <div class="form-group col-md-6">
                <label for="description">Descripcion del trabajo realizado <small>*Obligatorio</small> </label>
                <input required id="description" name="description" class="form-control" type="text">
            </div>
            <div class="form-group col-md-6">
                <label for="observation">Observaciones <small>*Obligatorio</small> </label>
                <input required id="observation" name="observation" class="form-control" type="text">
            </div>
            <div class="form-group col-md-6">
                <label for="alarm_check">Alerta <small></small> </label>
                <input required id="alarm_check" name="alarm_check" class="form-control" type="checkbox">
            </div>
            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
            <div class="col-12">
                <button class="btn btn-primary" style="float: right; background-color: #203C64 !important; color: #c2c7d0"
                        type="submit">Guardar
                </button>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
@endsection
