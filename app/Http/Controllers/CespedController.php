<?php

namespace App\Http\Controllers;

use App\Models\Cesped;
use Illuminate\Http\Request;

class CespedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Cesped::all();
        return view('cespeds.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre_cesped' => 'required|string|max:50',
            'importe' => 'required|numeric|min:0.01', // importe 
            'descripcion' => 'nullable|string|max:500',
        ], [
            'nombre_cesped.max' => 'Busca un nombre más corto.',
            'nombre_cesped.required' => 'Debes agregar un nombre.',
            'importe.numeric' => 'Verifica que el precio sea numérico.',
        ]);

        $producto = new Cesped();
        $producto->nombre_cesped = $request->nombre_cesped;
        $producto->fecha_ingreso = $request->fecha_ingreso;
        $producto->importe = $request->importe;
        $producto->cesped_activo = $request->has('cesped_activo') ? 1 : 0;
        $producto->descripcion = $request->descripcion;
        $producto->mail_origen = $request->mail_origen;
        $producto->save();

        return redirect()->route('cespeds.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $producto = Cesped::find($id);

        // Si el producto no existe, redirige con un mensaje de error
        if (!$producto) {
            return redirect()->route('cespeds.index')->with('error', 'El producto no existe.');
        }

        // Si el producto existe, muestra la vista con el producto
        return view('cespeds.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cesped $cesped)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cesped $cesped)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cesped $cesped)
    {
        //
    }
} // <-- Esta llave cierra la clase CespedController
