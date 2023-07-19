@extends('layout/plantilla')

@section('tituloPagina','Miembros')

@section('contenido')
<div class="card">
    <h5 class="card-header">Miembros</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                @if($mensaje = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{$mensaje}}
                </div>
                @endif


            </div>
        </div>

        <hr>
        <p class="card-text">
            <div class="table table-reponsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Id</th>
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
                            <td>{{$item->id_miembros}}</td>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->telefono}}</td>
                            <td>{{$item->correo}}</td>
                            <td>{{$item->id_ministerios}}</td>
                            <td>
                                <form action="{{ route("miembros.edit", $item->id_miembros) }}" method="GET">
                                    <button  class="btn btn-sm"style="background-color:#4e22ff;color:white">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                            <form action="{{ route("miembros.show", $item->id_miembros) }}" method="GET">
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
