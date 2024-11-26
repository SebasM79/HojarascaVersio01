<!-- resources/views/productos/index_cespeds.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Lista de Productos</h1>
    <a href="{{ route('cespeds.create') }}">Crear Nuevo Producto</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre Cesped</th>
                <th>Fecha Ingreso</th>
                <th>Importe</th>
                <th>Cesped Activo</th>
                <th>Descripcion</th>
                <th>Mail Origen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if ($productos->isEmpty())
                <tr>
                    <td colspan="7">No hay productos disponibles.</td>
                </tr>
            @else
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->nombre_cesped }}</td>
                        <td>{{ $producto->fecha_ingreso }}</td>
                        <td>{{ $producto->importe }}</td>
                        <td>{{ $producto->cesped_activo ? 'Sí' : 'No' }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>{{ $producto->mail_origen }}</td>
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
            @endif
        </tbody>
    </table>
@endsection
