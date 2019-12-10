@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">                    
                    <div class="alert alert-success" role="alert">
                        <a class="btn btn-outline-info my-2 my-sm-1" href="{{ url('politica_especifica') }}">
                        Ver política de Tópico específico
                        </a>
                        <a class="btn btn-outline-info my-2 my-sm-1" href="{{ url('control_asociado') }}">
                        Controles asociados
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header align-items-center"><strong>Políticas de Tópico específico</strong></div>
                <div class="card-header">Nombre</div>
                <div class="card-body">                            
                    Política de Monitoreo de TI
                </div>
                <div class="card-header">Objetivo</div>
                <div class="card-body">                            
                    Establecer los lineamientos de seguridad de TI para el monitoreo de eventos en activos de TI y así obtener una visibilidad del estatus actual de los dispositivos que forman parte o interactúan con la infraestructura tecnológica de PROZA.
                </div>
                <div class="card-header">Alcance</div>
                <div class="card-body">                            
                   Todo personal de Sistemas que administre equipo(s) que registren eventos (logs).
                </div>
                <div class="card-header">Procedimiento</div>
                <div class="card-body">                            
                   <ul>
                    <li>1.1  Los insumos para el monitoreo de eventos son cualquier herramienta, servicio o aplicación que genere un registro.</li>
                    <li>1.2 Mediante el monitoreo de la herramienta se observan registros y eventos.</li>
                    <li>1.3 Los eventos que estén contemplados se verán reflejados en el monitoreo continuo, si se observa una notificación por parte de la herramienta se deberá valorar.</li>
                    <li>1.4  Los eventos son detectados por el sistema de monitoreo, los cuales son notificados por selección del administrador en conjunto con las áreas interesadas.</li>
                    <li>1.5 De acuerdo con la selección de eventos a monitorear se generarán casos de uso para su detección y se implementarán reglas para el alertamiento.</li>
                    <li>1.6 El correlacionar realizara la comparación de los eventos de acuerdo con las reglas implementadas, con estas se decidirá en que categoría entraran los eventos.</li> 
                    <li>1.7 Se realizará la categorización de los eventos con base en su afectación e impacto ya sean informativos, alertas o excepciones.</li> 
                    <li>1.7.1   Sin son informativas solo se deberán validar y continuar con la operación. Se realizará el cierre del evento o Vo. Bo.</li> 
                    <li>1.7.2    Si la respuesta es Automática, solo queda validar que de acuerdo con los casos de uso todo este sucediendo como se programó.</li> 
                    <li>1.7.3   Si es una alerta que debe ser atendida por el consultor de seguridad se deberá realizar un análisis del evento y aplicar las acciones correspondientes para su solución.</li>
                    <li>1.7.4   Si entra en la clasificación de excepción se deberá atender de acuerdo con el Proceso de Gestión de Incidentes.</li> 
                    <li>1.8 Después de la clasificación se deberá realizar las revisiones de las acciones tomadas para la atención de los eventos. </li>
                    <li>1.8.1   Si el evento fue atendido satisfactoriamente se deberá dar el Vo. Bo del evento y cerrarlo. </li>
                    <li>1.8.2   Si el evento no fue atendido como corresponde se deberá regresar a la actividad de clasificación o categorización para su atención.</li>
                    <li>1.9 Fin del Proceso</li>
                   </ul>
                </div>            

                
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
