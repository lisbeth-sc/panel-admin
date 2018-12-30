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
                <a href="#">{{__('Nueva empresa')}}</a>
            </li>
        </ul>
    </div>
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">{{__('Crear nueva empresa')}}</div>
                </div>
                <div class="card-body">
                    <label class="mb-3"><b>{{__('DATOS DEL SUSCRITO')}}</b></label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>{{__('Nombre y apellido')}}</label>
                                {{ Form::text('name', null,['class'=>'form-control','required','placeholder'=>'Ingrese el nombre y apellido']) }}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group form-group-default">
                                <label>{{__('Celular')}}</label>
                                {{ Form::text('celular_telefono', null,['class'=>'form-control','placeholder'=>'Ingrese su número de celular']) }}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group form-group-default">
                                <label>{{__('Correo')}}</label>
                                {{ Form::text('email', null,['class'=>'form-control']) }}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group form-group-default">
                                <label>{{__('Pais')}}</label>
                                {{ Form::select('pais_id',$paises,null,['class'=>'form-control select2','placeholder'=>'Seleccione un pais']) }}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-group-default">
                                <label>{{__('Ciudad')}}</label>
                                {{ Form::text('ciudad', null,['class'=>'form-control','placeholder'=>'Ingrese la ciudad']) }}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-group-default">
                                <label>{{__('Zona horaria')}}</label>
                                {{ Form::select('zona_horaria_id',$zonas_horarias,null,['class'=>'form-control select2','placeholder'=>'Seleccione una zona horaria']) }}
                            </div>
                        </div>
                    </div>
                    <div class="seperator-solid"></div>
                    <label class="mt-3 mb-3"><b>{{__('DATOS DE LA EMPRESA')}}</b></label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>{{__('Nombre comercial')}}</label>
                                {{ Form::text('nombre_comercial', null,['class'=>'form-control','required','placeholder'=>'Ingrese el nombre comercial']) }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>{{__('Nombre comercial legal')}}</label>
                                {{ Form::text('nombre_comercial_legal', null,['class'=>'form-control','placeholder'=>'Ingrese el nombre comercial legal']) }}
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group form-group-default">
                                <label>{{__('NIT')}}</label>
                                {{ Form::text('nit', null,['class'=>'form-control','placeholder'=>'Ingrese el NIT']) }}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group form-group-default">
                                <label>{{__('Rubro')}}</label>
                                {{ Form::select('rubro_id',$rubros,null,['class'=>'form-control select2','placeholder'=>'Seleccione un rubro']) }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>{{__('Monedas')}}</label>
                                {{ Form::select('moneda_id[]',$monedas,null,['class'=>'form-control select2','multiple'=>true]) }}

                            </div>
                        </div>

                    </div>
                    <div class="seperator-solid"></div>
                    <label class="mt-3 mb-3"><b>{{__('DATOS USUARIO')}}</b></label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>{{__('Correo')}}</label>
                                {{ Form::text('correo', null,['class'=>'form-control','required','placeholder'=>'Ingrese el correo del usuario']) }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>{{__('Password')}}</label>
                                {{ Form::text('password', null,['class'=>'form-control','placeholder'=>'Ingrese el password del usuario']) }}
                            </div>
                        </div>

                    </div>
                    <div class="seperator-solid"></div>
                    <label class="mt-3 mb-3"><b>{{__('PAQUETE')}}</b></label>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group form-group-default">
                                <label>{{__('Paquete')}}</label>
                                {{ Form::select('paquete_id',[],null,['class'=>'form-control select2']) }}
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group form-group-default">
                                <label>{{__('Dias de prueba')}}</label>
                                {{ Form::text('dias_prueba', null,['class'=>'form-control','placeholder'=>'0']) }}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group form-group-default">
                                <label>{{__('Paquete destino')}}</label>
                                {{ Form::select('paquete_destino_id',[],null,['class'=>'form-control select2']) }}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2" checked="">
                                <label class="custom-control-label" for="customCheck1">Activar paquete de prueba</label>
                            </div>
                        </div>
                    </div>
                    <div class="seperator-solid"></div>
                    <label class="mt-3 mb-3"><b>{{__('PRECIOS')}}</b></label>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group form-group-default">
                                <label>{{__('Pago')}}</label>
                                {{ Form::select('paquete_destino_id',[],null,['class'=>'form-control select2']) }}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-group-default">
                                <label>{{__('Monto')}}</label>
                                {{ Form::text('monto', null,['class'=>'form-control','placeholder'=>'Ingrese el monto']) }}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-group-default">
                                <label>{{__('Moneda')}}</label>
                                {{ Form::select('moneda_id',$monedas,null,['class'=>'form-control select2','multiple'=>false]) }}

                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>{{__('Descripción:')}}</label>
                                {{ Form::text('descripcion', null,['class'=>'form-control','placeholder'=>'Ingrese la descripción']) }}
                            </div>
                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(function () {
            $('.select2').select2({
                theme: "bootstrap"
            });
        });

    </script>
@endsection