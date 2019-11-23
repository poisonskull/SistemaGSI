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
                <div class="card-header">Catalogo de amenazas</div>
                <div class="card-body">
                    <div class="alert alert-success" role="alert">     
                        <ul class="list-group">
                            <li class="list-group-item">Amenaza 1</li>
                            <li class="list-group-item">Amenaza 2</li>
                            <li class="list-group-item">Amenaza 3</li>
                            <li class="list-group-item">Amenaza 4</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
