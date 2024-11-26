<!-- resources/views/productos/show_cespeds.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Detalles del Tipo de Cespeds</h1>
    <p><strong>Nombre Cesped:</strong> {{ $producto->nombre_cesped }}</p>
    <p><strong>Fecha Vencimiento:</strong>
     {{ $producto->fecha_ingreso }} /
      ${{ \Illuminate\Support\Carbon::parse($producto->fecha_ingreso)->format('d/m/Y') }}
    </p>

    <p><strong>Importe:</strong> 
    {{ $producto->importe }} / Precio: 
    ${{ number_format($producto->importe, 2) }} </p>
    
    <p><strong>Cesped Activo:</strong> {{ $producto->cesped_activo ? 'Sí' : 'No' }}</p>
    <p><strong>Descripcion:</strong>
     {{ $producto->descripcion }} /
     
    </p>

    <a href="{{ route('cespeds.edit', $producto->id) }}">Editar</a>
    <form action="{{ route('cespeds.destroy', $producto->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endsection
