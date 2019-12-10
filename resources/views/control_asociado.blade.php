@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">                    
                    <div class="alert alert-success" role="alert">
                        
                        <a class="btn btn-outline-info my-2 my-sm-1" href="{{ url('politica_aplicacion') }}">
                            Ver políticas
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Catalogo de amenazas</div>
                <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Activo</th>
                        <th>Control aplicado</th>
                        <th>ISO/IEC 27001</th>
                    </tr> 
                    <tr>
                        <th>Servidor web – transacciones</th>
                        <th>Splunk - Monitoreo</th>
                        <th>A.12- Seguridad en las operaciones</th>
                    </tr>
                    <tr>
                        <th>Aplicación para TPV</th>
                        <th>Splunk - Monitoreo</th>
                        <th>A.12- Seguridad en las operaciones</th>
                    </tr>
                    <tr>
                        <th>Sistema operativo - operaciones</th>
                        <th>Splunk - Monitoreo</th>
                        <th>A.12- Seguridad en las operaciones</th>
                    </tr>  
                    <tr>
                        <th>Equipos Telecomunicaciones</th>
                        <th>Splunk - Monitoreo</th>
                        <th>A.12- Seguridad en las operaciones</th>
                    </tr>                  
                </table>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
