@extends('layouts.app')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet"/>
@endpush

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Sesiones</a></li>
            <li class="breadcrumb-item active" aria-current="page">Index</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('sesion.create')}}">
                        <button type="button" class="btn btn-primary btn-icon-text">
                            <i class="btn-icon-prepend" data-feather="plus-circle"></i>
                                Crear Sesion
                        </button>
                    </a>
                    <br><br>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                            <tr>
                                <th>Número Sesion</th>
                                <th>Legislatura</th>
                                <th>Fecha</th>
                                <th>Asamblea</th>
                                <th> </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $key => $item)
                                <tr>
                                    <td>{{$item->sesion}}</td>
                                    <td>{{$item->legislatura->numero}}</td>
                                    <td>{{$item->fecha}}</td>
                                    <td>{{$item->asamblea}}</td>
                                    <td>
                                        <a href="{{route('sesion.edit', $item->id)}}">
                                            <i data-feather="edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('plugin-scripts')
    <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
@endpush

@push('page-scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#dataTableExample').DataTable({
                "aLengthMenu": [
                    [10, 30, 50, -1],
                    [10, 30, 50, "All"]
                ],
                "iDisplayLength": 10,
                "language": {
                    search: "Buscar"
                },
                "order": [0, "desc"]
            });
            $(".delete").click(function (e) {
                e.preventDefault();
                swal.fire({
                    title: "¿Está seguro?",
                    text: "Al oprimir el botón de aceptar se eliminará el registro",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Aceptar'
                }).then((result) => {

                    if (result.value) {
                        console.log("si entro");
                        $("#formdelete").submit();
                    }
                });
            });
            @if (session('create') == 'ok')
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Exito',
                text: 'Se ha guardado correctamente!',
                showConfirmButton: false,
                timer: 1500
            })
            @endif
            @if (session('edit') == 'ok')
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Se ha modificado correctamente el registro.',
                showConfirmButton: false,
                timer: 1500
            })
            @endif
        });
        @if(session('delete') == 'ok')
        swal.fire({
            title: 'Eliminado',
            text: 'Registro eliminado correctamente',
            icon: 'success',
        })
        @endif

    </script>
@endpush
