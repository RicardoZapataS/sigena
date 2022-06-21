@extends('layouts.adminlte')

@section('content')
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Equipo</th>
                        <th>Fecha del evento</th>
                        <th>Tipo de falla</th>
                        <th>Fecha de rehabiliutacion</th>
                        <th>Accion realizada</th>
                        <th>Personal</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($datas as $key =>$data)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $data->team }}</td>
                        <td>{{ $data->date_event }} {{ $data->time_event }}</td>
                        <td>{{ $data->type_fail }}</td>
                        <td>{{ $data->date_attention }} {{ $data->time_attention }}</td>
                        <td>{{ $data->performed_action }}</td>
                        <td>{{ $data->user->name }}</td>
                        <td style="display: flex; flex-direction: column; ;">
                           <div  style="display: flex; flex-direction: revert; gap: 0.5rem;">
                               <a href="{{ route('knowledge_base.show', $data->id) }}" class="btn btn-primary " style="color: white"><i class="fas fa-eye"></i></a>
                               @if(Auth::can_modify())
                                   <a href="{{ route('knowledge_base.edit', $data->id) }}" class="btn btn-warning " style="color: #1F4661"><i class="fas fa-pen-square"></i></a>
                                    <a onclick="event.preventDefault(); document.getElementById('delete-form-{{$data->id}}').submit();"  class="btn btn-danger " style="color: white"><i class="fas fa-trash"></i></a>
                                   <form action="{{ route('knowledge_base.delete', $data->id) }}" id="delete-form-{{$data->id}}" method="POST" style="display: none">
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
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@section('css')


@endsection

@section('js')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('/assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <script>
        $(function () {
            //$("#example1").DataTable({
            //    "responsive": true, "lengthChange": false, "autoWidth": true,
            //    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            //}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
            }).buttons().container().appendTo('.card-header');
        });
    </script>
@endsection

