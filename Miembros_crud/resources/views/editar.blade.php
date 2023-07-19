@extends('layout/plantilla')

@section('tituloPagina','Editar Miembro')

@section('contenido')
<div class="card">
    <h5 class="card-header">Editar miembro</h5>
    <div class="card-body">
        <p class="card-text">
            <form action="{{route('miembros.update', $miembros->id_miembros)}}" method="POST">
                @csrf 
                @method("PUT")
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required value="{{$miembros->nombre}}">
                <label for="">Telefono</label>
                <input type="number" name="telefono" class="form-control" required value="{{$miembros->telefono}}">
                <label for="">Correo Electrónico</label>
                <input type="text" name="correo" class="form-control" required value="{{$miembros->correo}}">
                <label for="">Ministerio</label>
                <input type="number" name="id_ministerios" min="1" max="6" class="form-control" required value="{{$miembros->id_ministerios}}">
                <br>
                <a href="{{route('miembros.index')}}" class="btn btn-light" style="background-color:#e61b1b; color:white">
                <span class="fas fa-undo-alt"></span> Regresar</a>
                <button  class="btn "style="background-color:#4e22ff;color:white"> <span class="fas fa-user-edit"></span> Actualizar miembro</button>

            </form>
        </p>
    </div>
</div>
@endsection
