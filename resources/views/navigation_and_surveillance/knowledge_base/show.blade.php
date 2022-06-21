@extends('layouts.adminlte')

@section('content')
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="team">Equipo <small>*Obligatorio</small> </label>
                    <input value="{{ $knowledgeBaseData->team }}" readonly id="team" name="team" class="form-control" type="text" placeholder="Equipo">
                </div>
                <div class="form-group">
                    <label for="date_event">Fecha del evento <small>*Obligatorio</small> </label>
                    <input value="{{ $date_event_j }}" readonly id="date_event" name="date_event_j" class="form-control" type="datetime-local">
                </div>
                <div class="form-group">
                    <label for="notam">Notam</label>
                    <textarea readonly id="notam" name="notam" class="form-control"  placeholder="Notam">{{ $knowledgeBaseData->notam }}</textarea>
                </div>
                <div class="form-group">
                    <label for="time_rehabilitation">Tiempo de rehabilitacion <small>*Obligatorio</small> </label>
                    <input value="{{ $time_rehabilitation_j }}" readonly id="time_rehabilitation" name="time_rehabilitation_j" class="form-control" type="time">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="type_fail">Tipo de falla <small>*Obligatorio</small> </label>
                    <input value="{{ $knowledgeBaseData->type_fail }}" readonly id="type_fail" name="type_fail" class="form-control" type="text" placeholder="Tipo de falla">
                </div>
                <div class="form-group">
                    <label for="date_attention">Fecha del atencion <small>*Obligatorio</small> </label>
                        <input value="{{ $date_attention_j }}" readonly id="date_attention" name="date_attention_j" class="form-control" type="datetime-local">
                </div>
                <div class="form-group">
                    <label for="performed_action">Acción realizada <small>*Obligatorio</small> </label>
                    <textarea readonly id="performed_action" name="performed_action" class="form-control"  placeholder="Accion realizada">{{ $knowledgeBaseData->performed_action }}</textarea>
                </div>
                <div class="form-group">
                    <label for="replaced">Pieza reemplazada</label>
                    <input readonly value="{{ $knowledgeBaseData->replaced }}" id="replaced" name="replaced" class="form-control" type="text" placeholder="Pieza reemplazada">
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
@endsection

@section('css')
<style>
    .form-control:disabled, .form-control[readonly] {
        background-color: white;
        opacity: 1;
    }
</style>
@endsection
