@extends('layout/plantilla')

@section('tituloPagina','Eliminar miembro')

@section('contenido')
<div class="card">
    <h5 class="card-header">Eliminar Miembro</h5>
    <div class="card-body">

        <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este miembro??
                
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Correo Electrónico</th>
                        <th>Ministerio</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$miembros->nombre}}</td>
                            <td>{{$miembros->telefono}}</td>
                            <td>{{$miembros->correo}}</td>
                            <td>{{$miembros->id_ministerios}}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{route('miembros.destroy', $miembros->id_miembros)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{route('miembros.index')}}" class="btn btn-light" style="background-color:#e61b1b; color:white">
                    <span class="fas fa-undo-alt"></span> Regresar</a>
                    <button  class="btn "style="background-color:#4e22ff;color:white"><span class="fas fa-user-minus"></span> Eliminar miembro</button>
                </form>
            </div>    
        </p>
        
    </div>
</div>
@endsection
