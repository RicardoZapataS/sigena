@extends('layouts.adminlte')

@section('content')
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="date_event">Nombre del area <small>*Obligatorio</small> </label>
                    <input readonly value="{{ $data->name }}"  id="name" name="name" class="form-control" type="text">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="team">Encargado </label>
                    <select readonly  name="user_id" id="user" class="form-control">
                        <option  value="-1">Ninguno</option>
                        @foreach($users as $user)
                            <option value="{{$user->id}}" @if($data->user_id == $user->id) checked @endif >{{$user->name . ' ' . $user->las_tname}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button class="btn btn-primary" style="float: right; background-color: #203C64 !important; color: #c2c7d0" type="submit">Guardar</button>
        </div>
    </div>
    <!-- /.card-body -->
@endsection
