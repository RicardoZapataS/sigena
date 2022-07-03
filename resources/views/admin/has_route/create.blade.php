@extends('layouts.adminlte')

@section('content')
    <div class="card-body">
        <form action="{{ route('has_route.store') }}" method="post" class="row">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label for="date_event">Model Type <small>*Obligatorio</small> </label>
                    <select required id="model_type" name="model_type" class="form-control">
                        <option value="App\Models\Area">Area</option>
                        <option value="App\User">Usuario</option>
                    </select>
                </div>
                <style>
                    .model{
                        display: none;
                    }
                     .hide{
                         display: block;
                     }
                </style>
                <div class="form-group">
                    <label for="date_event">Route Model Id <small>*Obligatorio</small> </label>
                    <select required id="route_module_id" name="route_module_id" class="form-control">
                        @foreach($routes as $route)
                            <option value="{{ $route->id }}">{{ $route->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="date_event">Model Id <small>*Obligatorio</small> </label>
                    <select required id="model_id" name="model_id" class="form-control">
                        @foreach($areas as $area)
                            <option class="model hide" value="{{$area->id}}">{{$area->name}}</option>
                        @endforeach
                        @foreach($users as $user)
                            <option class="model"  value="{{$user->id}}">{{$user->name . $user->last_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button class="btn btn-primary" style="float: right; background-color: #203C64 !important; color: #c2c7d0" type="submit">Guardar</button>
        </form>
    </div>
    <!-- /.card-body -->

@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $("#model_type").on('change', function() {
                $('.model').toggleClass('hide');
            });
        });
    </script>
@endsection
