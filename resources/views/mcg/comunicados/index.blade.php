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
                    <a href="{{route('comunicados.create')}}">
                        <button type="button" class="btn btn-primary btn-icon-text">
                            <i class="btn-icon-prepend" data-feather="plus-circle"></i>
                            Crear Comunicado
                        </button>
                    </a><br><br>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                            <tr>
                                <th>Comunicado</th>
                                <th>Titulo</th>
                                <th>Programado</th>
                                <th>Estatus</th>
                                <th>Fecha</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($comunicados as $comunicado)
                                <tr>
                                    <td>{{ $comunicado->comunicado}} </td>

                                    <td>{{ $comunicado->titulo}} </td>
                                    <td>@if($comunicado->fecha_publicacion != null)
                                            <span class="badge bg-primary">Si</span>
                                            @else
                                            <span class="badge bg-warning">No</span>
                                            @endif </td>
                                    <td>@if($comunicado->publicado == 1)
                                            <span class="badge bg-danger">Sin publicar</span>
                                        @else
                                            <span class="badge bg-success">Publicado</span>
                                        @endif <br>
                                        {{ $comunicado->fecha_publicacion}} </td>
                                    <td>{{ $comunicado->fecha}} </td>

                                    <td>
                                        <a href="{{route('comunicados.edit', $comunicado->id)}}">
                                            <i data-feather="edit"></i>
                                        </a>
                                        {!! Form::open(['route' => ['comunicados.destroy', $comunicado->id], 'method'=>'DELETE','id' => 'formdelete']) !!}
                                        <a type="submit" class="delete"><i
                                                data-feather="trash-2"></i></a>
                                        {!! Form::close() !!}
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
                "order": [0, "desc"]
            });
            $(document).on("click", ".delete", function (e) {
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
                        $(e.target).closest('form').submit();;
                    }
                });
            });
        });
        @if(session('deleteD') == 'ok')
        swal.fire({
            title: 'Eliminado',
            text: 'Registro eliminado correctamente',
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

