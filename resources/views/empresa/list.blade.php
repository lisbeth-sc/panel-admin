@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h4 class="page-title">{{__('Empresa')}}</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="#">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">{{__('Empresa')}}</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">{{__('Listar empresa')}}</a>
            </li>
        </ul>
    </div>
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Lista de empresas</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover">
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>N°</th>
                                <th>Nombre comercial</th>
                                <th>Teléfono</th>
                                <th>Correo</th>
                                <th>Pago</th>
                                <th>Paquete</th>
                            </tr>
                            @foreach($empresas as $empresa)
                                <tr>
                                    <td><span class="btn-label"><i class="flaticon-pencil"></i></span></td>
                                    <td><span class="btn-label"><i class="la la-trash"></i></span></td>
                                    <td><span class="btn-label"><i class="la la-eye"></i></span></td>
                                    <td><span class="btn-label"><i class="la la-commenting"></i></span></td>
                                    <td>{{$empresa->id}}</td>
                                    <td>{{$empresa->nombre_comercial}}</td>
                                    <td>{{$empresa->telefono_celular}}</td>
                                    <td>{{$empresa->getResponsablePropietario()->email}}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(function () {
            $('#basic-datatables').DataTable({});
        });

    </script>
@endsection