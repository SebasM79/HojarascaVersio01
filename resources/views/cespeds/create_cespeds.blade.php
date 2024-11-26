<!-- resources/views/productos/create_cespeds.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Producto</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{ route('cespeds.store') }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="nombre_cesped" class="form-label">Nombre Cesped</label>
    <input type="text" class="form-control" id="nombre_cesped" aria-describedby="nombre_cespedlHelp">
    <div id="nombre_cespedlHelp" class="form-text">Por favor, el nuevo tipo de cesped.</div>
  </div>
  <div class="mb-3">
    <label for="fecha_ingreso" class="form-label">Fecha Ingreso</label>
    <input type="date" class="form-control" id="fecha_ingreso" required>
  </div>
   <div class="mb-3">
    <label for="importe" class="form-label">Importe</label>
    <input type="number" class="form-control" id="importe" required>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="cesped_activo" id="cesped_activo">
    <label class="cesped_activo" for="cesped_activo">cesped activo</label>
  </div>
   <div class="mb-3">
    <label for="descripcion" class="form-label">Descripcion</label>
    <input type="text" class="form-control" id="descripcion" required>
  </div>
   <div class="mb-3">
    <label for="mail_origen" class="form-label">Mail origen</label>
    <input type="mail" class="form-control" id="mail_origen" required>
  </div>

  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection