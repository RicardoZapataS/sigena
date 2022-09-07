@extends('layouts.adminlte')

@section('content')
    <div class="card-body">
        <form action="{{ route('work_order.print_pdf') }}" method="post" class="row">
            @csrf
            <div class="form-group col-md-6">
                <label for="dateinit">Fecha apertura<small>*Obligatorio</small> </label>
                <input required id="dateinit" name="dateinit" class="form-control" type="datetime-local">
            </div>
{{--            <div class="form-group col-md-6">--}}
{{--                <label for="dateend">Fecha cierre<small>*Obligatorio</small> </label>--}}
{{--                <input required id="dateend" name="dateend" class="form-control" type="datetime-local">--}}
{{--            </div>--}}

            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
            <div class="col-12">
                <button class="btn btn-primary" style="float: right; background-color: #203C64 !important; color: #c2c7d0"
                        type="submit">Generar
                </button>
            </div>
        </form>
    </div>
@endsection

