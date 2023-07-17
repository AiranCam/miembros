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
        $miembro = new Miembros();
        $miembro->nombre = $request->post('nombre');
        $miembro->telefono = $request->post('telefono');
        $miembro->correo = $request->post('correo');
        $miembro->id_ministerios = $request->post('id_ministerios');
        $miembro->save();

        return redirect()->route("miembros.index")->with("success", "Aregado correctamente!!");
    }
    public function show(miembros $miembros)
    {
        return view('eliminar');
    }
    public function edit(miembros $miembros)
    {
        Return view('editar');
    }
    public function update(Request $request, miembros $miembros)
    {
        //
    }
    public function destroy(miembros $miembros)
    {
        //
    }
}
