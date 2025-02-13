@extends('layouts')

@section('title', 'Editar Usuario')

@section('content')
    <h1>Editar Usuario</h1>

    <form action="{{ route('usuarios.update', $usuario) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $usuario->nombre }}" required>

        <label>Email:</label>
        <input type="email" name="email" value="{{ $usuario->email }}" required>

        <label>Teléfono:</label>
        <input type="text" name="telefono" value="{{ $usuario->telefono }}" required>
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 10px;">
            <button type="submit">Actualizar</button>
            <a href="{{ route('usuarios.index') }}"
               style="color: white; background: gray; padding: 7px 10px; border-radius: 5px; text-decoration: none; transition: background 0.3s ease;"
               onmouseover="this.style.background='darkgray'"
               onmouseout="this.style.background='gray'">
               Cancelar
            </a>
        </div>
    </form>
@endsection
