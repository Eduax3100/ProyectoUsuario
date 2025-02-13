<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuario = Usuario::where('eliminado', false)->get();
        return view('usuarios.index', compact('usuario'));
    }

    public function show(Usuario $usuario)
    {
        return view('usuarios.show', compact('usuario'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        Usuario::create($request->all());
        return redirect()->route('usuarios.index');
    }

    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, Usuario $usuario)
    {
        $usuario->update($request->all());
        return redirect()->route('usuarios.index');
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
    public function delete($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.delete', compact('usuario'));
    }
    public function softDelete($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->eliminado = true;
        $usuario->save();

        return redirect()->route('usuarios.index')->with('success', 'Usuario marcado como eliminado.');
    }
}
