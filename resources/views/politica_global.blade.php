@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">                    
                    <div class="alert alert-success" role="alert">
                       
                           <a class="btn btn-outline-info my-2 my-sm-1" href="{{ url('home') }}">
                        Ver misión
                        </a>
                        <a class="btn btn-outline-info my-2 my-sm-1"  href="{{ url('politica_especifica') }}">
                            Ver políticas de tópico específico
                        </a>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><strong>Política Global</strong></div>
                <div class="card-header">Objetivo</div>
                <div class="card-body">                            
                    Establecer las políticas de seguridad de la información con el fin de alinear la gestión de la seguridad de la información en PROZA, partiendo desde los aspectos administrativos y de control que deberán ser seguidos por el personal interno o externo que tenga relación laboral con PROZA, para obtener así el nivel adecuado de protección y cumplimiento frente a marcos legislativos aplicables (como LFPDPPP), normatividad (como ISO 27001) y demás requerimientos que serán definidos por la necesidad de negocio.
                </div>
                <div class="card-header">Alcance</div>
                <div class="card-body">                            
                    A todo el colaborador que tenga relación con PROZA
                </div>
                <div class="card-header">Definición</div>
                <div class="card-body">                            
                    PROZA velará siempre por mantener la integridad, confidencialidad y disponibilidad de las transacciones financieras que sus clientes les han confiado, estableciendo niveles de servicio adecuados a la visión de PROZA, por lo que todo esfuerzo por parte de los colaboradores de PROZA deberán ir enfocados en el cumplimiento de esta política.
                </div>
                
                
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
