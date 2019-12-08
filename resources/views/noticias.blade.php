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
                <div class="card-header">Catalogo de Noticias</div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

    @endif

    <table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Nivel de Relación</th>
      <th scope="col">Amenzas involucradas</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($noticias as $noticia)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $noticia->nombre }}</td>
            @switch($noticia->nivel)
                @case(5)
                    <td class="list-group-item-danger">{{ $noticia->nivel }}</td>
                @break
                @case(2)
                    <td class="list-group-item-success">{{ $noticia->nivel }}</td>
                @break
                @case(3)
                    <td class="list-group-item-info">{{ $noticia->nivel }}</td>
                @break
                @case(4)
                    <td class="list-group-item-warning">{{ $noticia->nivel }}</td>
                @break
                @default
                    <td class="list-group-item-light">{{ $noticia->nivel }}</td>
            @endswitch
            <td>
               <ul class="list-group"> 
                    <li class="list-group-item">{{ $noticia->amenaza_01 }}</li>
                    <li class="list-group-item">{{ $noticia->amenaza_02 }}</li>
                    <li class="list-group-item">{{ $noticia->amenaza_03 }}</li>
                </ul>
            </td>

        </tr>

        @endforeach
  </tbody>
</table>

  
    {!! $noticias->links() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
