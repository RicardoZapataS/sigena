@extends('layouts.adminlte')

@section('content')
    <div class="card-body">
        <form action="{{ route('maintenance_record.update', $maintenanceRecord->id) }}" method="post" class="row">
            @csrf
            @method('PUT')
            <div class="form-group col-md-6">
                <label for="team">Turnos <small>*Obligatorio</small> </label>
                <select  readonly  name="turn" id="turn" class="form-control">
                    <option @if($maintenanceRecord->turn == "Mañana 08 a 14") selected @endif value="Mañana 08 a 14">Mañana 08 a 14</option>
                    <option @if($maintenanceRecord->turn == "Tarde 14 a 20") selected @endif value="Tarde 14 a 20">Tarde 14 a 20</option>
                    <option @if($maintenanceRecord->turn == "Noche 20 a 08") selected @endif value="Noche 20 a 08">Noche 20 a 08</option>
                    <option @if($maintenanceRecord->turn == "Dia 08 a 20") selected @endif value="Dia 08 a 20">Dia 08 a 20</option>
                    <option @if($maintenanceRecord->turn == "Administrativo 08 a 16") selected @endif value="Administrativo 08 a 16">Administrativo 08 a 16</option>
                    <option @if($maintenanceRecord->turn == "Turno 14 a 20") selected @endif value="Turno 14 a 20">Turno 14 a 20</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="date_maintenance">Fecha <small>*Obligatorio</small> </label>
                <input value="{{ $maintenanceRecord->date_maintenance }}"  readonly  id="date_maintenance" name="date_maintenance" class="form-control" type="datetime-local">
            </div>
            <div class="form-group col-md-6">
                <label for="activity_name">Nombre de actividad<small>*Obligatorio</small> </label>
                <input value="{{ $maintenanceRecord->activity_name }}"   readonly  id="activity_name" name="activity_name" class="form-control" type="text">
            </div>
            <div class="form-group col-md-6">
                <label for="activity_ident">Identificador de la actividad<small>*Obligatorio</small> </label>
                <input value="{{ $maintenanceRecord->activity_ident }}"   readonly  id="activity_ident" name="activity_ident" class="form-control" type="text">
            </div>
            <div class="form-group col-md-6">
                <label for="business">Area/Empresa <small>*Obligatorio</small> </label>
                <input value="{{ $maintenanceRecord->business }}"   readonly  id="business" name="business" class="form-control" type="text">
            </div>
            <div class="form-group col-md-6">
                <label for="description">Descripcion del trabajo realizado <small>*Obligatorio</small> </label>
                <input value="{{ $maintenanceRecord->description }}"   readonly  id="description" name="description" class="form-control" type="text">
            </div>
            <div class="form-group col-md-6">
                <label for="observation">Observaciones <small>*Obligatorio</small> </label>
                <input value="{{ $maintenanceRecord->observation }}"   readonly  id="observation" name="observation" class="form-control" type="text">
            </div>
            <div class="form-group col-md-6">
                <label for="alarm_check">Alerta <small></small> </label>
                <input readonly @if($maintenanceRecord->alarm) checked @endif   id="alarm_check" name="alarm_check" class="form-control" type="checkbox">
            </div>
        </form>
    </div>
    <!-- /.card-body -->
@endsection
