@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
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
        </div>
    </div>
</div>
@endsection
