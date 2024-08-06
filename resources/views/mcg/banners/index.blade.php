@extends('layouts.app')
@push('plugin-styles')
    <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" />
@endpush
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Banners</a></li>
            <li class="breadcrumb-item active" aria-current="page">Index</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('banners.create')}}"><button type="button" class="btn btn-primary btn-icon-text">
                            <i class="btn-icon-prepend" data-feather="plus-circle"></i>
                            Crear Diputado
                        </button></a><br><br>
                    <h6 class="card-title">Data Table</h6>
                    {{--                    <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>--}}
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                            <tr>
                                <th>Núm</th>
                                <th>Descripción</th>
                                <th>Ver</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
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

@push('custom-scripts')
    <script src="{{ asset('assets/js/data-table.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
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
        });
        @if(session('deleteD') == 'ok')
        swal.fire({
            title:  'Eliminado',
            text:  'Registro eliminado correctamente',
            icon: 'success',

        })
        @endif
        @if (session('created') == 'success')
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
    </script>

@endpush

