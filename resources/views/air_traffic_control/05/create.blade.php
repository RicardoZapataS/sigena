@extends('layouts.adminlte')

@section('content')
    <div class="card-body">
        <form action="{{ route('aro.store') }}" method="post" class="row">
            @csrf
            <div class="form-group col-md-3">
                <label for="company">Compañia<small>*Obligatorio</small> </label>
                <input required type="text" name="company" id="company" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="fly">Vuelo<small>*Obligatorio</small> </label>
                <input required type="text" name="fly" id="fly" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="departure">Despegue<small>*Obligatorio</small> </label>
                <input required type="text" name="departure" id="departure" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="arrival">Llegada<small>*Obligatorio</small> </label>
                <input required type="text" name="arrival" id="arrival" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="departure_hour">Hrs. Despegue<small>*Obligatorio</small> </label>
                <input required type="text" name="departure_hour" id="departure_hour" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="arrival_hour">Hrs. Llegada<small>*Obligatorio</small> </label>
                <input required type="text" name="arrival_hour" id="arrival_hour" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="real_arrival_hour">Real Hrs. Llegada<small>*Obligatorio</small> </label>
                <input required type="text" name="real_arrival_hour" id="real_arrival_hour" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="tuition"> Matricula<small>*Obligatorio</small> </label>
                <input required type="text" name="tuition" id="tuition" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="type">Tipo<small>*Obligatorio</small> </label>
                <input required type="text" name="type" id="type" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="cc">CC <small>*Obligatorio</small> </label>
                <input required type="text" name="cc" id="cc" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="er">ER<small>*Obligatorio</small> </label>
                <input required type="text" name="er" id="er" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="bk">BK<small>*Obligatorio</small> </label>
                <input required type="text" name="bk" id="bk" class="form-control">
            </div>

            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
            <div class="col-12">
                <button class="btn btn-primary" style="float: right; background-color: #203C64 !important; color: #c2c7d0"
                        type="submit">Guardar
                </button>
            </div>
        </form>
    </div>

@endsection
