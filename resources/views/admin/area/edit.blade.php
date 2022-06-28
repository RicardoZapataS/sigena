@extends('layouts.adminlte')

@section('content')
    <div class="card-body">
        <form action="{{ route('area.update', $data->id) }}" method="post" class="row">
            @csrf
            @method('PUT')
            <div class="col-md-6">
                <div class="form-group">
                    <label for="date_event">Nombre del area <small>*Obligatorio</small> </label>
                    <input value="{{ $data->name }}" required id="name" name="name" class="form-control" type="text">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="team">Encargado </label>
                    <select  name="user_id" id="user" class="form-control">
                        <option value="-1">Ninguno</option>
                        @foreach($users as $user)
                            <option value="{{$user->id}}" @if($data->user_id == $user->id) checked @endif >{{$user->name . ' ' . $user->last_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button class="btn btn-primary" style="float: right; background-color: #203C64 !important; color: #c2c7d0" type="submit">Guardar</button>
        </form>
    </div>
    <!-- /.card-body -->
@endsection
