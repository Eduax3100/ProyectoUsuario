@extends('layouts')

@section('title', 'Confirmar Eliminación')

@section('content')
    <h1>Confirmar Eliminación</h1>
    <p>¿Estás seguro de que deseas eliminar a {{ $usuario->nombre }}?</p>

    <form action="{{ route('usuarios.softDelete', $usuario) }}" method="POST">
        @csrf
        @method('PUT')
        <button type="submit">Confirmar</button>
    </form>

    <a href="{{ route('usuarios.index') }}">Cancelar</a>
@endsection
