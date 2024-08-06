@extends('layouts.app')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Comision</a></li>
            <li class="breadcrumb-item active" aria-current="page">principal</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('comision.create')}}"><button type="button" class="btn btn-primary btn-icon-text">
                            <i class="btn-icon-prepend" data-feather="plus-circle"></i>
                            Crear Comision
                        </button></a><br><br>
                    <h6 class="card-title">Comision</h6>
                    {{--                                        <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>--}}
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                            <tr>
                                <th width="20%">Nombre</th>
                                <th>Tipo</th>
                                <th>Integrantes</th>
                                <th>Opciones</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$item->nombre}} </td>
                                    <td>{{$item->tipo->valor}} </td>
                                    <td> <a href="{{route('comision.edit_integrantes', $item->id)}}">
                                            <i data-feather="users"></i>
                                        </a> </td>
                                    <td>
                                        <a href="{{route('comision.edit', $item->id)}}">
                                            <i data-feather="edit"></i>
                                        </a>


                                        {!! Form::open(['route' => ['comision.destroy', $item->id], 'method'=>'DELETE','id' => 'formdelete']) !!}
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
    <script src="{{ asset('assets/js/data-table.js') }}"></script>

    <script type="text/javascript">

    </script>

@endpush
