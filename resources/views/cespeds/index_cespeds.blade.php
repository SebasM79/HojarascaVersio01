<!-- resources/views/productos/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Lista de Productos</h1>
    <a href="{{ route('cespeds.create') }}">Crear Nuevo Producto</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre Cesped</th>
                <th>fecha_ingreso</th>
                <th>Importe</th>
                <th>Cesped Activo</th>
                <th>Descripcion</th>
                <th>Mail Origen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre_cesped }}</td>
                    <td>{{ $producto->fecha_ingreso }}</td>
                    <td>{{ $producto->importe }}</td>
                    <td>{{ $producto->cesped_activo ? 'Sí' : 'No' }}</td>
                    <td>{{ $producto->descripcion}}</td>
                    <td>
                        <a href="{{ route('cespeds.show', $producto->id) }}">Ver</a>
                        <a href="{{ route('cespeds.edit', $producto->id) }}">Editar</a>
                        <form action="{{ route('cespeds.destroy', $producto->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
