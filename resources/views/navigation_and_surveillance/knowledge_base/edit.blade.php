@extends('layouts.adminlte')

@section('content')
    <div class="card-body">
        <form action="{{ route('knowledge_base.update', $knowledgeBaseData->id) }}" method="post" class="row">
            @csrf
            @method('PUT')
            <div class="col-md-6">
                <div class="form-group">
                    <label for="team">Equipo <small>*Obligatorio</small> </label>
                    <input value="{{ $knowledgeBaseData->team }}" required id="team" name="team" class="form-control" type="text" placeholder="Equipo">
                </div>
                <div class="form-group">
                    <label for="date_event">Fecha del evento <small>*Obligatorio</small> </label>
                    <input value="{{ $date_event_j }}" required id="date_event" name="date_event_j" class="form-control" type="datetime-local">
                </div>
                <div class="form-group">
                    <label for="notam">Notam</label>
                    <textarea id="notam" name="notam" class="form-control"  placeholder="Notam">{{ $knowledgeBaseData->notam }}</textarea>
                </div>
                <div class="form-group">
                    <label for="time_rehabilitation">Tiempo de rehabilitacion <small>*Obligatorio</small> </label>
                    <input value="{{ $time_rehabilitation_j }}" required id="time_rehabilitation" name="time_rehabilitation_j" class="form-control" type="time">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="type_fail">Tipo de falla <small>*Obligatorio</small> </label>
                    <input value="{{ $knowledgeBaseData->type_fail }}" required id="type_fail" name="type_fail" class="form-control" type="text" placeholder="Tipo de falla">
                </div>
                <div class="form-group">
                    <label for="date_attention">Fecha del atencion <small>*Obligatorio</small> </label>
                        <input value="{{ $date_attention_j }}" required id="date_attention" name="date_attention_j" class="form-control" type="datetime-local">
                </div>
                <div class="form-group">
                    <label for="performed_action">Acción realizada <small>*Obligatorio</small> </label>
                    <textarea required id="performed_action" name="performed_action" class="form-control"  placeholder="Accion realizada">{{ $knowledgeBaseData->performed_action }}</textarea>
                </div>
                <div class="form-group">
                    <label for="replaced">Pieza reemplazada</label>
                    <input value="{{ $knowledgeBaseData->replaced }}" id="replaced" name="replaced" class="form-control" type="text" placeholder="Pieza reemplazada">
                </div>
            </div>
            <button class="btn btn-primary" style="float: right; background-color: #203C64 !important; color: #c2c7d0" type="submit">Editar  </button>
        </form>
    </div>
    <!-- /.card-body -->
@endsection
