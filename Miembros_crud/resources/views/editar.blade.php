@extends('layout/plantilla')

@section('tituloPagina','Actualizar Persona')

@section('contenido')
<div class="card">
    <h5 class="card-header">Actualizar miembro</h5>
    <div class="card-body">
        <p class="card-text">
            <form action="#">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Telefono</label>
                <input type="number" name="telefono" class="form-control" required>
                <label for="">Correo Electrónico</label>
                <input type="text" name="correo" class="form-control" required>
                <label for="">Ministerio</label>
                <input type="number" name="id_ministerios" min="1" max="6" class="form-control" required>
                <br>
                <a href="{{route('miembros.index')}}" class="btn btn-light" style="background-color:#e61b1b; color:white">Regresar</a>
                <button  class="btn "style="background-color:#4e22ff;color:white">Actualizar miembro</button>

            </form>
        </p>
    </div>
</div>
@endsection
