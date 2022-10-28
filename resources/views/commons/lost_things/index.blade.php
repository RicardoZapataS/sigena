@extends('layouts.adminlte')

@section('content')
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>N°</th>
                <th>Codigo</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Tipo de objeto</th>
                <th>Color</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datas as $key =>$data)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>FOE-{{ $data->id }}</td>
                    <td>{{ ($data->date)}} </td>
                    <td>{{ $data->hour }}</td>
                    <td>{{ $data->type_thing }}</td>
                    <td>{{ $data->color }}</td>
                    <td style="display: flex; flex-direction: column; ;">
                        <div  style="display: flex; flex-direction: revert; gap: 0.5rem;">
                            <a href="{{ route('lost_thing.show', $data->id) }}" class="btn btn-primary " style="color: white"><i class="fas fa-eye"></i></a>
                            @if(Auth::can_modify())
                                <a href="{{ route('lost_thing.edit', $data->id) }}" class="btn btn-warning " style="color: #1F4661"><i class="fas fa-pen-square"></i></a>
                                <a onclick="event.preventDefault(); document.getElementById('delete-form-{{$data->id}}').submit();"  class="btn btn-danger " style="color: white"><i class="fas fa-trash"></i></a>
                                <form action="{{ route('lost_thing.delete', $data->id) }}" id="delete-form-{{$data->id}}" method="POST" style="display: none">
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
@endsection
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

@endsection

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



