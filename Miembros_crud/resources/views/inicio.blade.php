@extends('layout/plantilla')

@section('tituloPagina','Miembros')

@section('contenido')
<div class="card">
    <h5 class="card-header">Miembros</h5>
    <div class="card-body">

        <hr>
        <p class="card-text">
            <div class="table table-reponsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Ministerio</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                    @foreach($datos as $item)
                        <tr>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->telefono}}</td>
                            <td>{{$item->correo}}</td>
                            <td>{{$item->id_ministerios}}</td>
                            <td>
                                <form action="">
                                    <button  class="btn btn-sm"style="background-color:#4e22ff;color:white">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                            <form action="">
                                    <button class="btn btn-sm" style="background-color:#e61b1b; color:white">
                                    <span class="fas fa-user-minus"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </p>
        <p>
            <a href="{{route('miembros.create')}}" class="btn "style="background-color:#4e22ff;color:white"> <span class="fas fa-user-plus"></span> Agregar miembro</a>
        </p>
    </div>
</div>
@endsection
