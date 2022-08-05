@extends('layouts.adminlte')

@section('content')
    <div class="card-body">
        <form action="{{ route('news_part.store') }}" method="post" class="row">
            @csrf
            <div class="form-group col-md-6">
                <label for="team">Turnos <small>*Obligatorio</small> </label>
                <select required name="turn" id="turn" class="form-control">
                    <option value="Mañana 08 a 14">Mañana 08 a 14</option>
                    <option value="Tarde 14 a 20">Tarde 14 a 20</option>
                    <option value="Noche 20 a 08">Noche 20 a 08</option>
                    <option value="Dia 08 a 20">Dia 08 a 20</option>
                    <option value="Administrativo 08 a 16">Administrativo 08 a 16</option>
                    <option value="Turno 14 a 20">Turno 14 a 20</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="date">Fecha <small>*Obligatorio</small> </label>
                <input required id="date" name="date" class="form-control" type="datetime-local">
            </div>
            <div class="form-group col-md-12">
                <label for="report">Parte</label>
                <div class="row">
                    <textarea id="report" name="report" class="form-control" cols="30" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group col-md-12">
                <label for="note">Notas</label>
                <div class="row">
                    <textarea id="note" name="note" class="form-control" cols="30" rows="3"></textarea>
                </div>
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

