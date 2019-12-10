@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">                    
                    <div class="alert alert-success" role="alert">
                        <ul>
                            <a class="btn btn-info " href="{{ route('amenazas') }}">
                                Agregar nueva amenaza
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
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Factor de risgo</th>
            <th width="180px">Action</th>
        </tr>
        @foreach ($amenazas as $amenaza)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $amenaza->nombre }}</td>
            <td >{{ $amenaza->nivel }}</td>
            <td>
            <a class="btn btn-primary" href="#">Editar</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </td>
        </tr>
        @endforeach
    </table>
  
    {!! $amenazas->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
