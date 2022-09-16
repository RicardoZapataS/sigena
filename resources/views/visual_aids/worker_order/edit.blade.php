@extends('layouts.adminlte')

@section('content')
    <div class="card-body">
        <form action="{{ route('work_order.update', $data->id) }}" method="post" class="row">
            @csrf
            @method('PUT')
            <div class="form-group col-md-6">
                <label for="team">Turnos <small>*Obligatorio</small> </label>
                <select required name="turn" id="turn" class="form-control">
                    <option @if($data->turn == "Mañana 08 a 14") selected @endif value="Mañana 08 a 14">Mañana 08 a 14</option>
                    <option @if($data->turn == "Tarde 14 a 20") selected @endif value="Tarde 14 a 20">Tarde 14 a 20</option>
                    <option @if($data->turn == "Noche 20 a 08") selected @endif value="Noche 20 a 08">Noche 20 a 08</option>
                    <option @if($data->turn == "Dia 08 a 20") selected @endif value="Dia 08 a 20">Dia 08 a 20</option>
                    <option @if($data->turn == "Administrativo 08 a 16") selected @endif value="Administrativo 08 a 16">Administrativo 08 a 16</option>
                    <option @if($data->turn == "Turno 14 a 20") selected @endif value="Turno 14 a 20">Turno 14 a 20</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="date_event">Fecha <small>*Obligatorio</small> </label>
                <input required value="{{ $data->date_work }}" id="date_work" name="date_work" class="form-control" type="date">
            </div>
            <div class="form-group col-md-6">
                <label for="notam">Hora inspeccion</label>
                <div class="row">
                    <div class="input-group  col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Inicio</span>
                        </div>
                        <input value="{{ $data->hour_start }}" id="hour_start" name="hour_start"  type="time" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group  col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Fin </span>
                        </div>
                        <input value="{{ $data->hour_end }}"  id="hour_end" name="hour_end"  type="time" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="">Calle de rodaje <small>*Obligatorio</small> </label>
                <input required  value=" {{ $data->taxiway }}" id="taxiway" name="taxiway" class="form-control" type="text">
            </div>
            <div class="form-group col-md-6">
                <label for="type_fail">Umbral <small>*Obligatorio</small> </label>
                <div class="row">
                    <div class="input-group  col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">34</span>
                        </div>
                        <input  value=" {{ $data->threshold34 }}" id="threshold34" name="threshold34"  type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group  col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">16 </span>
                        </div>
                        <input  value=" {{ $data->threshold16 }}" id="threshold16" name="threshold16"  type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="type_fail">ALS aproximacion <small>*Obligatorio</small> </label>
                <div class="row">
                    <div class="input-group  col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">34</span>
                        </div>
                        <input  value=" {{ $data->als_approximation34 }}" id="als_approximation34" name="als_approximation34"  type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group  col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">16 </span>
                        </div>
                        <input  value=" {{ $data->als_approximation16 }}" id="als_approximation16" name="als_approximation16"  type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="runway_edge_lice">Luces borde de pista <small>*Obligatorio</small> </label>
                <input value=" {{ $data->runway_edge_lice }}"  required id="runway_edge_lice" name="runway_edge_lice" class="form-control" type="text">
            </div>
            <div class="form-group col-md-6">
                <label for="type_fail">PAPI <small>*Obligatorio</small> </label>
                <div class="row">
                    <div class="input-group  col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">34</span>
                        </div>
                        <input value=" {{ $data->papi34 }}"   id="papi34" name="papi34" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group  col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">16 </span>
                        </div>
                        <input value=" {{ $data->papi16 }}"   id="papi16" name="papi16" type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="type_fail">Letreros de señalizacion <small>*Obligatorio</small> </label>
                <input  value=" {{ $data->signaling_signs }}" required id="signaling_signs" name="signaling_signs" class="form-control" type="text">
            </div>
            <div class="form-group col-md-6">
                <label for="twr">Faro (twr) <small>*Obligatorio</small> </label>
                <input  value=" {{ $data->twr }}" required id="twr" name="twr" class="form-control" type="text">
            </div>
            <div class="form-group col-md-12">
                <label for="type_fail">Luces de platafotma <small>*Obligatorio</small> </label>
                <div class="row">
                    <div class="input-group  col-md-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">OBL PP</span>
                        </div>
                        <input value=" {{ $data->platform_lightspp }}"  id="platform_lightspp" name="platform_lightspp"  type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group  col-md-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">OBL PA </span>
                        </div>
                        <input  value=" {{ $data->platform_lightspapa }}" id="platform_lightspapa" name="platform_lightspapa"  type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group  col-md-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">OBL PC1 </span>
                        </div>
                        <input  value=" {{ $data->platform_lightspc1 }}"  id="platform_lightspc1" name="platform_lightspc1" type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="type_fail">Manga de viento <small>*Obligatorio</small> </label>
                <div class="row">
                    <div class="input-group  col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">WILD 16</span>
                        </div>
                        <input value=" {{ $data->whirlwind16 }}"  id="whirlwind16" name="whirlwind16"  type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group  col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">WILD 34 </span>
                        </div>
                        <input value=" {{ $data->whirlwind34 }}"  id="whirlwind34" name="whirlwind34"  type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" style="float: right; background-color: #203C64 !important; color: #c2c7d0"
                        type="submit">Guardar
                </button>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
@endsection
