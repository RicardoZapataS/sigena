@extends('layouts.adminlte')

@section('content')
    <div class="card-body">
        <form action="{{ route('work_order.store') }}" method="post" class="row">
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
                <label for="date_event">Fecha <small>*Obligatorio</small> </label>
                <input required id="date_work" name="date_work" class="form-control" type="datetime-local">
            </div>
            <div class="form-group col-md-6">
                <label for="notam">Hora inspeccion</label>
                <div class="row">
                    <div class="input-group  col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Inicio</span>
                        </div>
                        <input id="hour_start" name="hour_start"  type="time" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group  col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Fin </span>
                        </div>
                        <input id="hour_end" name="hour_end"  type="time" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="">Calle de rodaje <small>*Obligatorio</small> </label>
                <input required id="taxiway" name="taxiway" class="form-control" type="text">
            </div>
            <div class="form-group col-md-6">
                <label for="type_fail">Umbral <small>*Obligatorio</small> </label>
                <div class="row">
                    <div class="input-group  col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">34</span>
                        </div>
                        <input id="threshold34" name="threshold34"  type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group  col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">16 </span>
                        </div>
                        <input id="threshold16" name="threshold16"  type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
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
                        <input id="als_approximation34" name="als_approximation34"  type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group  col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">16 </span>
                        </div>
                        <input id="als_approximation16" name="als_approximation16"  type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="runway_edge_lice">Luces borde de pista <small>*Obligatorio</small> </label>
                <input required id="runway_edge_lice" name="runway_edge_lice" class="form-control" type="text">
            </div>
            <div class="form-group col-md-6">
                <label for="type_fail">PAPI <small>*Obligatorio</small> </label>
                <div class="row">
                    <div class="input-group  col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">34</span>
                        </div>
                        <input  id="papi34" name="papi34" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group  col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">16 </span>
                        </div>
                        <input  id="papi16" name="papi16" type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="type_fail">Letreros de señalizacion <small>*Obligatorio</small> </label>
                <input required id="signaling_signs" name="signaling_signs" class="form-control" type="text">
            </div>
            <div class="form-group col-md-6">
                <label for="twr">Faro (twr) <small>*Obligatorio</small> </label>
                <input required id="twr" name="twr" class="form-control" type="text">
            </div>
            <div class="form-group col-md-12">
                <label for="type_fail">Luces de platafotma <small>*Obligatorio</small> </label>
                <div class="row">
                    <div class="input-group  col-md-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">OBL PP</span>
                        </div>
                        <input id="platform_lightspp" name="platform_lightspp"  type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group  col-md-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">OBL PA </span>
                        </div>
                        <input id="platform_lightspapa" name="platform_lightspapa"  type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group  col-md-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">OBL PC1 </span>
                        </div>
                            <input  id="platform_lightspc1" name="platform_lightspc1" type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
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
                        <input id="whirlwind16" name="whirlwind16"  type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group  col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">WILD 34 </span>
                        </div>
                            <input id="whirlwind34" name="whirlwind34"  type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="alarm_check">Alerta <small></small> </label>
                <input required id="alarm_check" name="alarm_check" class="form-control" type="checkbox">
            </div>
            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
            <div class="col-12">
                <button class="btn btn-primary" style="float: right; background-color: #203C64 !important; color: #c2c7d0"
                        type="submit">Guardar
                </button>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
    <button id="modalshow" type="button" class="btn btn-primary d-none" data-toggle="modal" data-target="#exampleModal"> </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registro de mantenimiento - Obserbaciones</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group col-md-12">
                        <input required id="observation" name="observation" class="form-control" type="text">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Guardar observaciones</button>
                </div>
            </div>
        </div>
    </div>
@endsection
  @section('js')
      <script >
          $(document).ready(function() {

              $('#alarm_check').change(function() {
                  $("#modalshow").click();
              });
          });
      </script>
  @endsection
