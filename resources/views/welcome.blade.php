@extends('layouts')

@section('title', 'Bienvenido')

@section('content')
    <h1>Bienvenido a la Aplicación de Gestión de Usuarios</h1>
    <p style="text-align: center;">Administra usuarios fácilmente con nuestro sistema.</p>

    <div style="text-align: center;">
        <a href="{{ route('usuarios.index') }}">Ver Lista de Usuarios</a>
    </div>
@endsection
