@extends('layouts.app')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet"/>
@endpush

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Iniciativas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Index</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('iniciativas.create')}}">
                        <button type="button" class="btn btn-primary btn-icon-text">
                            <i class="btn-icon-prepend" data-feather="plus-circle"></i>
                            @if ($ruta == "Iniciativas")
                                Crear Iniciativa
                            @else
                                Crear punto de acuerdo
                            @endif
                        </button>
                    </a>
                    <br><br>
                    <h6 class="card-title">{{$ruta}}</h6>
                    {{--                    <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>--}}
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Núm. Iniciativa</th>
                                <th>Iniciativa</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $key => $item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->folio}}</td>
                                    <td><p class="cortar-texto">{{$item->iniciativa}}</p></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-light">
                                            <i data-feather="trash-2"></i>
                                        </button>
                                        <a href="{{route("iniciativas.edit", $item->id)}}"
                                           class="btn btn-sm btn-light">
                                            <i data-feather="edit-2"></i>
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
                "order": [1, "asc"]
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
        });
        @if(session('delete') == 'ok')
        swal.fire({
            title: 'Eliminado',
            text: 'Registro eliminado correctamente',
            icon: 'success',
        })
        @endif
        @if(session('created') == 'success')
        swal.fire({
            title: 'Guardado',
            text: 'Registro guardado correctamente',
            icon: 'success',
        })
        @endif
    </script>
@endpush

