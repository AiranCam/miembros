@extends('layout/plantilla')

@section('tituloPagina','Agregar miembro')

@section('contenido')
<div class="card">
    <h5 class="card-header">Agregar Miembro</h5>
    <div class="card-body">
        <p class="card-text">
            <form action="{{route('miembros.store') }}" method="POST">
                @csrf
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Telefono</label>
                <input type="number" name="telefono" class="form-control" required>
                <label for="">Correo Electrónico</label>
                <input type="text" name="correo" class="form-control" required>
                <label for="">Ministerio</label>
                <input type="number" name="id_ministerios" min="1" max="6" class="form-control" required>
                <br>
                <a href="{{route('miembros.index')}}" class="btn btn-light" style="background-color:#e61b1b; color:white">
                <span class="fas fa-undo-alt"></span> Regresar</a>

                <button  class="btn "style="background-color:#4e22ff;color:white">
                <span class="fas fa-user-plus"></span> Agregar miembro</button>

            </form>
        </p>
    </div>
</div>
@endsection
