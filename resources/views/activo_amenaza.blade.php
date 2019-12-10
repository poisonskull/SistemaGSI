@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">                    
                    <div class="alert alert-success" role="alert">
                    
                            <a class="btn btn-info " href="#">
                                Agregar amenaza
                            </a>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Amenazas para {{ $nombre }}</div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Amenaza</th>
            <th>Factor de riesgo</th>
            <th>Control</th>
            <th width="180px">Action</th>
        </tr>
        @foreach ($amenazas as $amenaza)
        <tr>
            <td>{{ $amenaza->nombre }}</td>
            <td>{{ $amenaza->nivel }}</td>
            <td>{{ $amenaza->control }}</td>
            <td>
               
                    <a class="btn btn-primary" href="#">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                           </td>
        </tr>
        @endforeach
    </table>
  
  

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
