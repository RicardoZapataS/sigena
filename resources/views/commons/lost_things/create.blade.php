@extends('layouts.adminlte')

@section('content')
    <div class="card-body">
        <form action="{{ route('lost_thing.store') }}" method="post" class="row" enctype="multipart/form-data">
            @csrf
            <style>
                label{
                    text-transform: uppercase;
                }
            </style>
            <div class="form-group col-md-4">
                <label for="date">Fecha <small>*Obligatorio</small> </label>
                <input required id="date" name="date" class="form-control" type="date" placeholder="Fecha">
            </div>
            <div class="form-group col-md-2">
                <label for="hour">Hora <small>*Obligatorio</small> </label>
                <input required id="hour" name="hour" class="form-control" type="time">
            </div>
            <div class="form-group col-md-5">
                <label for="type_thing">Tipo de objeto</label>
                <input required id="type_thing" name="type_thing" class="form-control" type="text" placeholder="Tipo de objeto">
            </div>
            <div class="form-group col-md-5">
                <label for="color">Color</label>
                <input required id="color" name="color" class="form-control" type="text" placeholder="Color">
            </div>
            <div class="form-group col-md-7">
                <label for="area">Area donde fue encontrado</label>
                <input required id="area" name="area" class="form-control" type="text" placeholder="Area donde fue encontrado">
            </div>
            <div class="form-group col-md-6">
                <label for="person _find">Persona que encontro</label>
                <input required id="person_find" name="person_find" class="form-control" type="text" placeholder="Persona que encontro">
            </div>
            <div class="form-group col-md-6">
                <label for="business_find">Empresa</label>
                <input required id="business_find" name="business_find" class="form-control" type="text" placeholder="Empresa">
            </div>
            <div class="form-group col-md-6">
                <label for="person_notification">Notifico a</label>
                <input required id="person_notification" name="person_notification" class="form-control" type="text" placeholder="Notifico a">
            </div>
            <div class="form-group col-md-6">
                <label for="business_notification">Empresa</label>
                <input required id="business_notification" name="business_notification" class="form-control" type="text" placeholder="Empresa">
            </div>
            <div class="form-group col-md-6">
                <label for="r_supervisor">Revisado por el supervisor de NAABOL SR</label>
                <input required id="r_supervisor" name="r_supervisor" class="form-control" type="text" placeholder="Revisado por el supervisor de NAABOL SR">
            </div>
            <div class="form-group col-md-6">
                <label for="r_ray_x">Operador rayos X</label>
                <input required id="r_ray_x" name="r_ray_x" class="form-control" type="text" placeholder="Operador rayos X">
            </div>
            <div class="form-group col-md-6">
                <label for="r_felcn">FELCN</label>
                <input required id="r_felcn" name="r_felcn" class="form-control" type="text" placeholder="FELCN">
            </div>
            <div class="form-group col-md-6">
                <label for="r_police">Policia nacional</label>
                <input required id="r_police" name="r_police" class="form-control" type="text" placeholder="Policia nacional">
            </div>

            <div class="form-group col-md-6">
                <label for="content_inside">Contenido en su interior</label>
                <div class="row">
                    <textarea required id="content_inside" name="content_inside" class="form-control" placeholder="Contenido en su interior"></textarea>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="observation">Observaciones</label>
                <div class="row">
                    <textarea required id="observation" name="observation" class="form-control" placeholder="Observaciones"></textarea>
                </div>
            </div>
            <div class="form-group col-md-12">
                <label for="imagen">Imagen</label>
                <input type="file"  id="imagen" name="imagen" class="form-control" accept="image/png, image/jpeg">
            </div>

            <div class="col-12">
                <button class="btn btn-primary" style="float: right; background-color: #203C64 !important; color: #c2c7d0"
                        type="submit">Guardar
                </button>
            </div>
        </form>
    </div>
@endsection

