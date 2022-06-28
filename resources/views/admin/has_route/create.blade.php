@extends('layouts.adminlte')

@section('content')
    <div class="card-body">
        <form action="{{ route('inventoru.store') }}" method="post" class="row">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label for="date_event">Model Type <small>*Obligatorio</small> </label>
                    <input required id="model_type" name="model_type" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="date_event">Route Model Id <small>*Obligatorio</small> </label>
                    <input required id="route_module_id" name="route_module_id" class="form-control" type="text">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="date_event">Model Id <small>*Obligatorio</small> </label>
                    <input required id="model_id" name="model_id" class="form-control" type="text">
                </div>
            </div>
            <button class="btn btn-primary" style="float: right; background-color: #203C64 !important; color: #c2c7d0" type="submit">Guardar</button>
        </form>
    </div>
    <!-- /.card-body -->
@endsection
