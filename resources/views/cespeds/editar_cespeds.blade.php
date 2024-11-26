<!-- resources/views/productos/edit_cespeds.blade.php -->
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
        <div class="mb-3">
            <label for="nombre_cesped" class="form-label">Nombre Cesped</label>
            <input type="text" class="form-control" id="nombre_cesped" aria-describedby="nombre_cespedlHelp" value="{{ $producto->nombre_cesped }}" required>>
        </div>
        <div class="mb-3">
            <label for="fecha_ingreso" class="form-label">Fecha Ingreso</label>
            <input type="date" class="form-control" id="fecha_ingreso" value="{{ $producto->fecha_ingreso }}"required>
        </div>
        <div class="mb-3">
            <label for="importe" class="form-label">Importe</label>
            <input type="number" class="form-control" id="importe" value="{{ $producto->importe }}" required>
        </div>    
        <div class="mb-3 form-check">
            <input type="checkbox" class="cesped_activo" id="cesped_activo" {{ $producto->cesped_activo ? 'checked' : '' }>
            <label class="cesped_activo" for="cesped_activo">cesped activo</label>
        </div>
         <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" value="{{ $producto->descripcion }}" required>
        </div>
        <div class="mb-3">
            <label for="mail_origen" class="form-label">Mail origen</label>
            <input type="mail" class="form-control" id="mail_origen" value="{{ $producto->mail_origen }}" required>
         </div>
        <button type="submit" class="btn btn-primary">Modificar</button>
   
    </form>
@endsection
     
       


        
      
