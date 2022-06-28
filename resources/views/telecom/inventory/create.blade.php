@extends('layouts.adminlte')

@section('content')
    <div class="card-body">
        <form action="{{ route('inventory.store') }}" method="post" class="row">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label for="type_fail">Decripcion <small>*Obligatorio</small> </label>
                    <textarea required id="description" name="description" class="form-control" type="text" placeholder="Descripcion"> </textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="date_attention">Cantidad <small>*Obligatorio</small> </label>
                    <input required id="amount" step=0.01 name="amount" class="form-control" type="number">
                </div>
            </div>
            <button class="btn btn-primary" style="float: right; background-color: #203C64 !important; color: #c2c7d0" type="submit">Guardar</button>
        </form>
    </div>
    <!-- /.card-body -->
@endsection
