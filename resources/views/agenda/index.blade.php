@extends('layouts.app')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet"/>
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
                    <a href="{{route('agenda.create')}}">
                        <button type="button" class="btn btn-primary btn-icon-text">
                            <i class="btn-icon-prepend" data-feather="plus-circle"></i>
                            Registrar
                        </button>
                    </a><br><br>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                            <tr>
                                <th>Cuándo</th>
                                <th>Quién / Qué</th>
                                <th>Dónde</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>
                                        <span
                                            style="display:none;">{{\Carbon\Carbon::create($item->fecha_hora)->timestamp}}</span>
                                        <span>{{\Carbon\Carbon::create($item->fecha_hora)->format("d/m/Y h:i:s a")}}</span>
                                    </td>
                                    <td>{{substr($item->descripcion, 0, 60)}}@if(strlen($item->descripcion) > 60)
                                            ...
                                        @endif</td>
                                    <td>{{$item->sedes->sede}}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col">
                                                <a href="{{route("agenda.edit", $item->id)}}"
                                                   class="btn btn-sm btn-light">
                                                    <i data-feather="edit-2"></i>
                                                </a>
                                            </div>
                                            <div class="col">
                                                {!! Form::open(['route' => ['agenda.destroy', $item->id], 'method'=>'DELETE','id' => 'formdelete']) !!}
                                                <button type="submit" class="delete btn btn-sm btn-light"><i
                                                        data-feather="trash-2"></i></button>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
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
    <script type="text/javascript">
        $(document).ready(function () {
            $('#dataTableExample').DataTable({
                "order": [[0, "desc"]],
                "columnDefs": [
                    {
                        "targets": 0,
                        "type": "date-eu",
                    },
                ],
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
                        $(e.target).closest('form').submit();
                    }
                });
            });
            @if(session('created') == 'success')
            swal.fire({
                title: 'Guardado',
                text: 'Registro guardado correctamente',
                icon: 'success',
            })
            @endif
            @if(session('deleted') == 'success')
            swal.fire({
                title: 'Eliminado',
                text: 'Registro eliminado correctamente',
                icon: 'success',
            })
            @endif
        });
    </script>
@endpush
