@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">                    
                    <div class="alert alert-success" role="alert">
                        <ul>
                            <a class="btn btn-info my-2 my-sm-1" href="{{ url('home') }}">
                                Agregar
                            </a>
                            <a class="btn btn-danger my-2 my-sm-1" href="{{ url('home') }}">
                                Eliminar
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">

            <div class="card">
                <div class="card-header">Catalogo de procesos</div>
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            <label style="color:red;">SWITCH TRANSACCIONAL</label>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse show" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul class="list-group">
                                        <li class="list-group-item"><b>Descripción:</b></li>
                                            <li class="list-group-item"><p>Abarca autorización de compra de bienes o servicios, realizados por un tarjetahabiente en comercios, supermercados, hoteles y restaurantes, entre otros, además de operaciones en cajeros automáticos y la atención para la operación de tarjetas en distintas plataformas.
Incluye devoluciones y cancelaciones por acuerdo del tarjetahabiente con el comercio, retiro de efectivo ligado a una venta previa, cargos recurrentes, plataforma de pagos para comercio electrónico, uso de archivos del emisor para asegurar el servicio durante una contingencia (stand in) y autorizaciones vía telefónica. Es posible también llevar a cabo operaciones con tiempo aire con cargo a un número de tarjeta. Finalmente se pueden generar alertas por parámetros de comportamiento o reglas de negocio para la prevención de fraudes y sistemas a la medida bajo las reglas de negocio para las TPV’s.
</p></li>
                                            <li class="list-group-item">
                                                <a class="btn btn-outline-info my-2 my-sm-1" href="{{ url('activos_switch') }}">
                                                                Ver activos
                                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a>Porcentaje ciber: 23%</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            BANCA EN LÍNEA
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item"><b>Descripción:</b></li>
                                            <li class="list-group-item"><p>Involucra varios procesos que sirven como soporte para la operación de PROZA, ya que este permite al cliente utilizar esta plataforma para integrar sus servicios con los nuestros mediante una plataforma digital escalable y centralizada. Dentro de este proceso existen muchos otros que respaldan la operación desde la adquisición de las transacciones bancarias digitales, el proceso de validación e inclusive las operaciones de validación de dichas transacciones.</p></li>
                                            <li class="list-group-item">
                                                <a class="btn btn-outline-info my-2 my-sm-1" href="#">
                                                                Ver activos
                                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            TRANSACCIONES
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item"><b>Descripción:</b></li>
                                            <li class="list-group-item"><p>Gestiona altas y bajas de comercios afiliados, cambios de información sociodemográfica o financiera para la correcta operación con tarjetas. De igual manera gestiona y controla TPV’s, así como los insumos necesarios para que los comercios afiliados acepten tarjetas. Incluye también aclaraciones de tarjetahabientes por cargos no reconocidos. 
Por otra parte, se integra otro subproceso que se encarga de emitir las aclaraciones por cargos no reconocidos por parte de los tarjetahabientes como centro de contacto y apoyo a los emisores. 
</p></li>
                                            <li class="list-group-item">
                                                <a class="btn btn-outline-info my-2 my-sm-1" href="#">
                                                                Ver activos
                                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
