@extends('layouts.app')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Table</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Información de diputadas</h6>
                    {{--                    <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>--}}
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Detalles</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($diputadas as $item)
                                <tr>
                                    <td>{{ $item->diputado->nombres}} {{ $item->diputado->apaterno}} {{ $item->diputado->amaterno}}</td>
                                    <td>@if(isset($item->diputada->descripcion)) {{$item->diputada->descripcion}}@endif</td>
                                    <td>
                                        <a href="{{route('diputada.edit', $item->id)}}">
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

            function activate() {
                console.log("hola hili x2");
                //     var elems = document.querySelectorAll(".active");
                //     [].forEach.call(elems, function(el) {
                //         el.classList.remove("active");
                //     });
                //     e.target.className = "active";
            }
        });
        @if(session('deleteD') == 'ok')
        swal.fire({
            position: 'top-end',
            title:  'Eliminado',
            text:  'Registro eliminado correctamente',
            icon: 'success',
            showConfirmButton: false,
            timer: 1500

        })
        @endif
        @if (session('correcto') == 'ok')
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

