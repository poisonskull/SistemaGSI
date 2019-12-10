@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">PROZA</h1><img src="/assets/logo.png">
            <p class="lead">Ser el procesador de transacciones financieras más confiable, seguro y eficiente de México, ofreciendo soporte a la red de comercios y ATM’s de nuestros clientes y desarrollando soluciones tecnológicas a la medida para estar a la vanguardia en medios de pago.
            </p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="row">
            <div class="col-md-4">
                <h2>Misión seguridad</h2>
                <p>Mantener la disponibilidad, confidencialidad e integridad de las transacciones financieras de nuestros clientes, aplicando controles de seguridad a medida en los procesos críticos de Proza.</p>
                <a class="btn btn-outline-info my-2 my-sm-1" href="{{ url('procesos') }}">
                    Ir a proceso críticos
                </a>
                <a class="btn btn-outline-info my-2 my-sm-1" href="{{ url('politica_general') }}">
                    Ver políticas
                </a>
            </div>
            <div class="col-md-4">
                <h2>CONTACTOS DE EMERGENCIA</h2>
                <b>ACTIVOS: </b> Luis Mario
                Rodríguez Ruiz <a href="tel:+525529836702">(525529836702)</a><br>
                <b>INFRAESTRUCTURA DE RED: </b> Luis Mario
                Rodríguez Ruiz <a href="tel:+348773827488">(348773827488)</a><br>
                <b>SEGURIDAD FÍSICA: </b> Luis Mario
                Rodríguez Ruiz <a href="tel:+093298347482">(093298347482)</a><br>
                <b>TI: </b> Luis Mario
                Rodríguez Ruiz <a href="tel:+095498482923">(095498482923)</a><br>
            </div>
            <div class="col-md-4">
                <h2>ESTATUS ACTUAL</h2>
                <ul class="list-group">
                        <li class="list-group-item"><b>Última revisión: </b> 01/Agosto/2019</li>
                        <li class="list-group-item"><b>Último incidente: </b>06/octubre/2019</li>
                        <li class="list-group-item"><b>Próxima revisión: </b>01/Febrero/2020</li>
                        </li>
                    </ul>
            </div>
        </div>

        <hr>

        <!-- <div class="col-md-6">
            <div class="card">
                <div class="card-header">Lista de activos de TI</div>
                <div class="card-body">                    
                    <div class="alert alert-success" role="alert">
                        <ul class="list-group">
                            <li class="list-group-item">Activo 1</li>
                            <li class="list-group-item">Activo 2</li>
                            <li class="list-group-item">Activo 3</li>
                            <li class="list-group-item">Activo 4</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Agenda de negocio</div>
                <div class="card-body">
                    <div class="alert alert-success" role="alert">     
                        <ul class="list-group">
                            <li class="list-group-item">Actividad 1</li>
                            <li class="list-group-item">Actividad 2</li>
                            <li class="list-group-item">Actividad 3</li>
                            <li class="list-group-item">Actividad 4</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>
@endsection