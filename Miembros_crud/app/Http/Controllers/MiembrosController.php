<?php

namespace App\Http\Controllers;

use App\Models\Miembros;
use Illuminate\Http\Request;

class MiembrosController extends Controller
{
    public function index()
    {
        $datos = Miembros::all();
        return view('inicio', compact('datos'));
    }
    public function create()
    {
        return view('agregar');
    }
    public function store(Request $request)
    {
        $miembros = new Miembros();
        $miembros->nombre = $request->post('nombre');
        $miembros->telefono = $request->post('telefono');
        $miembros->correo = $request->post('correo');
        $miembros->id_ministerios = $request->post('id_ministerios');
        $miembros->save();

        return redirect()->route("miembros.index")->with("success", "Miembro Agregado!!");
    }
    public function show($id_miembros)
    {
        $miembros = Miembros::find($id_miembros);
        return view("eliminar", compact('miembros'));
    }
    public function edit($id_miembros)
    {
        $miembros = Miembros::find($id_miembros);
        return view("editar", compact('miembros'));
    }
    public function update(Request $request, $id_miembros)
    {
        //
        $miembro = Miembros::find($id_miembros);
        $miembro->nombre = $request->post('nombre');
        $miembro->telefono = $request->post('telefono');
        $miembro->correo = $request->post('correo');
        $miembro->id_ministerios = $request->post('id_ministerios');
        $miembro->save();

        return redirect()->route("miembros.index")->with("success", "Editado con exito!!");

    }
    public function destroy($id_miembros)
    {
        $miembro = Miembros::find($id_miembros);
        $miembro->delete();
        return redirect()->route("miembros.index")->with("success", "Eliminado con exito!!");
    }
}
