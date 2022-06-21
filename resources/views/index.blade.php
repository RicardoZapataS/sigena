@extends('layouts.adminlte')
@section('content')
    <div class="tab-content" style="display: flex; align-items: center; justify-content: center; height: 75vh; width: 100%;">
        <div class="tab-empty" >
            <h2 class="display-4">Tablero de: {{ Auth::user()->area->name }}</h2>
        </div>
    </div>
@endsection
