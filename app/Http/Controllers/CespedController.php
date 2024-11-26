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
     */ public function create()
    {
        echo "La función create está siendo llamada";
        return view('cespeds.create_cespeds');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate(
            [
                'nombre_cesped' => 'required|string|max:20',
                'descripcion' => 'nullable|string|max:500',
                'importe' => 'required|numeric|min:0.01',
                //     ,  

            ],
            [
                'nombre_cesped.max' => 'el nombre no tener mas de 20 caracteres .',
                'nombre_cesped.required' => 'El nombre es obligatorio.',
                'importe.numeric' => 'El importe debe ser un número válido.',
            ]

        );


        $producto = new Cesped();
        $producto->nombre_cesped = $request->nombre_cesped;
        $producto->fecha_ingreso = $request->fecha_ingreso;
        $producto->importe = $request->importe;
        $producto->cesped_activo = $request->has('cesped_activo') ? 1 : 0;
        $producto->descripcion = $request->descripcion;
        $producto->mail_origen = $request->mail_origen;
        $producto->save();

        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $producto = Cesped::find($id);

        // Me fijo si el id de cespeds se encuentra en mi base de datos
        if (!$producto) {
            return redirect()->route('cespeds.index')->with('error', 'El producto no existe.');
        }

        // Si el producto existe, muestra la vista con el producto
        return view('cespeds.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $producto = Cesped::findOrFail($id);
        return view('cespeds.edit', compact('producto'));
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
    public function destroy(string $id)
    {
        $producto = Cesped::findOrFail($id);
        $producto->delete();

        return redirect()->route('productos.index');
    }
    public function destacados()
    {
        $productos = Cesped::where('destacado', true)
            ->orWhere('importe', '>', 100)  // 'precio' mayor a 100
            ->orderBy('fecha_ingreso', 'desc') // Ordenar por 'fechaAlta'
            ->get();



        return view('productos.destacados', compact('productos'));
    }
} // <-- Esta llave cierra la clase CespedController
