<!-- resources/views/productos/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Editar Producto</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <form action="{{ route('cesped.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nombre_cesped">Nombre Cesped</label>
        <input type="text" id="nombre_cesped" name="nombre_cesped" value="{{ $producto->nombre_cesped }}" required>
        
        <label for="fecha_ingreso">Fecha Ingreso:</label>
        <input type="date" id="fecha_ingreso" name="fecha_ingreso" value="{{ $producto->fecha_ingreso }}">


        
        <label for="importe">Importe:</label>
        <input type="number" id="importe" name="importe" value="{{ $producto->importe }}" required>

        <label for="cesped_activo">cesped_activo:</label>
        <input type="checkbox" id="cesped_activo" name="cesped_activo" {{ $producto->cesped_activo ? 'checked' : '' }}>


        <label for="descripcion">descripcionimiento:</label>
        <input type="text" id="descripcion" name="descripcion" value="{{ $producto->descripcion }}" required>

        <button type="submit">Actualizar Cesped</button>

        
        <input type="hidden" id="datoExtra" name="datoExtra" value="123">


    </form>
@endsection
