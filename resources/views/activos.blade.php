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
                <div class="card-header">Catalogo de activos</div>
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        <div class="accordion" id="accordionExample">                         
                        @foreach ($activos as $key => $activo)
                            <div class="card">
                                <div class="card-header" id= "heading_{{ $key+1 }}">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse_{{ $key+1 }}" aria-expanded="false"
                                            aria-controls="collapse_{{ $key+1 }}">
                                            {{ $activo->nombre }}
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse_{{ $key+1 }}" class="collapse" aria-labelledby= "heading_{{ $key+1 }}"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item"><b>Version:</b> {{ $activo->version }}</li>
                                            <li class="list-group-item"><b>Última Actualización: </b> {{ $activo->ultima_actualizacion }}</li>
                                            <li class="list-group-item"><b>Último incidente: </b>{{ $activo->ultimo_incidente }}</li>
                                            <li class="list-group-item"><b>Próxima revisión: </b>{{ $activo->proxima_revision }}</li>
                                            <li class="list-group-item"><b>Porcentaje de dependencia externa: </b>{{ $activo->cyber_percent }}%</li>
                                            <li class="list-group-item"><b>Responsable del activo: </b> {{ $activo->datos_responsable }} <b>Teléfono: </b><a
                                                    href="tel:{{ $activo->tel_responsable }}">Llamar({{ $activo->tel_responsable }})</a> </li>
                                            <li class="list-group-item"><a href="activo_amenaza/{{ $activo->id }}/{{ $activo->nombre}}"> Amenazas asociadas</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                          {!! $activos->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection