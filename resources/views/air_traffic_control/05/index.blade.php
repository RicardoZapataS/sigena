@extends('layouts.adminlte')

@section('content')
    <div class="card-body" style="overflow-x: scroll;">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>N°</th>
                <th>Compañia</th>
                <th>Vuelo</th>
                <th>Salida</th>
                <th>Llegada</th>
                <th>Sld. Hora</th>
                <th>Llgda. Hora</th>
                <th>Real Llgda. Hora</th>
                <th>Matricula</th>
                <th>Tipo</th>
                <th>CC</th>
                <th>CR</th>
                <th>BK</th>
                <th>Usuario</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datas as $key =>$data)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $data->company }}</td>
                    <td>{{ $data->fly }}</td>
                    <td>{{ $data->departure }}</td>
                    <td>{{ $data->arrival }}</td>
                    <td>{{ $data->departure_hour }}</td>
                    <td>{{ $data->arrival_hour }}</td>
                    <td>{{ $data->real_arrival_hour }}</td>
                    <td>{{ $data->tuition }}</td>
                    <td>{{ $data->type }}</td>
                    <td>{{ $data->cc }}</td>
                    <td>{{ $data->er }}</td>
                    <td>{{ $data->bk }}</td>
                    <td>{{ $data->user->name }}</td>
                    <td style="display: flex; flex-direction: column; ;">
                        <div style="display: flex; flex-direction: revert; gap: 0.5rem;">
                            <a href="{{ route('aro.show', $data->id) }}" class="btn btn-primary "
                               style="color: white"><i class="fas fa-eye"></i></a>
                            @if(Auth::can_modify())
                                <a href="{{ route('aro.edit', $data->id) }}" class="btn btn-warning "
                                   style="color: #1F4661"><i class="fas fa-pen-square"></i></a>
                                <a onclick="event.preventDefault(); document.getElementById('delete-form-{{$data->id}}').submit();"
                                   class="btn btn-danger " style="color: white"><i class="fas fa-trash"></i></a>
                                <form action="{{ route('aro.delete', $data->id) }}"
                                      id="delete-form-{{$data->id}}" method="POST" style="display: none">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            @endif
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
@section('css')
@endsection

<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

@section('js')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
            }).buttons().container().appendTo('.card-header');
        });
    </script>
@endsection

