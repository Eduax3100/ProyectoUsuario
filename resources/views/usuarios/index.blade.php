@extends('layouts')

@section('title', 'Lista de Usuarios')

@section('content')
    <h1>Lista de Usuarios</h1>
    <a href="{{ route('usuarios.create') }}">Crear Usuario</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuario as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->telefono }}</td>
                    <td>
                        <a href="{{ route('usuarios.edit', $usuario) }}">Editar</a>
                        <form action="{{ route('usuarios.delete', $usuario) }}" method="GET" style="display:inline;">
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
