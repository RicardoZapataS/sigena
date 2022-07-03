@extends('layouts.adminlte')

@section('content')
    <div class="card-body">
        <form action="{{ route('work_order_telecom.store') }}" method="post" class="row">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label for="team">Equipo <small>*Obligatorio</small> </label>
                    <input required id="team" name="team" class="form-control" type="text" placeholder="Equipo">
                </div>
                <div class="form-group">
                    <label for="date_event">Marca <small>*Obligatorio</small> </label>
                    <input required id="brand" name="brand" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="date_event"> Serial<small>*Obligatorio</small> </label>
                    <input required id="serial" name="serial" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="date_event">Potencia<small>*Obligatorio</small> </label>
                    <input required id="power" name="power" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="performed_action">Fallas <small>*Obligatorio</small> </label>
                    <textarea required id="fails" name="fails" class="form-control"  placeholder="Accion realizada"></textarea>
                </div>
                <div class="form-group">
                    <label for="performed_action">Revision <small>*Obligatorio</small> </label>
                    <textarea required id="revision" name="revision" class="form-control"  placeholder="Accion realizada"></textarea>
                </div>
                <div class="form-group">
                    <label for="performed_action">Tiempo empleado <small>*Obligatorio</small> </label>
                    <input required id="time_attention" name="time_attention" type="text" class="form-control"  placeholder="Accion realizada">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="date_event">Sensibilidad<small>*Obligatorio</small> </label>
                    <input required id="sensitivity" name="sensitivity" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="date_event">Modelo<small>*Obligatorio</small> </label>
                    <input required id="model_type" name="model_type" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="type_fail">Frecuencia <small>*Obligatorio</small> </label>
                    <input required id="frequency" name="frequency" class="form-control" type="text" placeholder="Tipo de falla">
                </div>
                <div class="form-group">
                    <label for="type_fail">Origen <small>*Obligatorio</small> </label>
                    <input required id="origin" name="origin" class="form-control" type="text" placeholder="Tipo de falla">
                </div>
                <div class="form-group">
                    <label for="type_fail">Tipo de trabajo <small>*Obligatorio</small> </label>
                    <input required id="type_job" name="type_job" class="form-control" type="text" placeholder="Tipo de falla">
                </div>
                <div class="form-group">
                    <label for="performed_action"> Causas<small>*Obligatorio</small> </label>
                    <textarea required id="causes" name="causes" class="form-control"  placeholder="Accion realizada"></textarea>
                </div>
                <div class="form-group">
                    <label for="performed_action">Obserbacion <small>*Obligatorio</small> </label>
                    <textarea required id="observation" name="observation" class="form-control"  placeholder="Accion realizada"></textarea>
                </div>
            </div>
            <button class="btn btn-primary" style="float: right; background-color: #203C64 !important; color: #c2c7d0" type="submit">Guardar</button>
        </form>
    </div>
    <!-- /.card-body -->
@endsection
