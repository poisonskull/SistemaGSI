@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">                    
                    <div class="alert alert-success" role="alert">
                        <ul>
                            <a class="btn btn-info " href="{{ route('noticias') }}">
                                Agregar noticia
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
                    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered table-hover">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Nivel de relacion</th>
            <th width="230px"></th>
        </tr>
        @foreach ($noticias as $noticia)
        
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $noticia->nombre }}</td>
            <td>{{ $noticia->nivel }}</td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Amenazas asociadas
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Disponibilidad de la información</a>
                        <a class="dropdown-item" href="#">Malware</a>
                        <a class="dropdown-item" href="#">Negacion de servicio</a>
                    </div>
                </div>
   
                @csrf
                @method('DELETE')
            </td>
        </tr>

        @endforeach
    </table>
  
    {!! $noticias->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
