@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">                    
                    <div class="alert alert-success" role="alert">
                      
                           <a class="btn btn-outline-info my-2 my-sm-1" href="{{ url('politica_general') }}">
                        Ver política global
                        </a>
                        <a class="btn btn-outline-info my-2 my-sm-1"  href="{{ url('politica_aplicacion') }}">
                            Ver políticas de aplicación específica
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
                    Política de Seguridad en Infraestructura de TI
                </div>
                <div class="card-header">Objetivo</div>
                <div class="card-body">                            
                    Establecer los lineamientos de seguridad que el área de Sistemas deberá cumplir para cumplir con los niveles de seguridad establecidos por la necesidad del negocio, desde el aprovisionamiento de servicios de TI, hasta los propios recursos de PROZA, como equipos de cómputo, servidores, páginas web, etc.
                </div>
                <div class="card-header">Alcance</div>
                <div class="card-body">                            
                   Todo el personal del área de Sistemas de PROZA.
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
