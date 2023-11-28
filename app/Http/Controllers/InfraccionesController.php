<?php

namespace App\Http\Controllers;

use App\Models\Infraccion;
use App\Models\Auto;
use Illuminate\Http\Request;

class InfraccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $infracciones = Infraccion::all();
    return view('Infraccion.index', compact('infracciones'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autos = Auto::all();
        return view('Infraccion.create', compact('autos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'auto_id' => 'required',
            'fecha' => 'required',
            'descripcion' => 'required',
            'tipo' => 'required',
        ]);

        Infraccion::create($request->all());

        return redirect('/infracciones')->with('success', 'Infracción creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $infraccion = Infraccion::find($id);
    return view('Infraccion.detail', compact('infraccion'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $infraccion = Infraccion::find($id);
        $autos = Auto::all();
        return view('Infraccion.edit', compact('infraccion', 'autos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'auto_id' => 'required',
            'fecha' => 'required',
            'descripcion' => 'required',
            'tipo' => 'required',
        ]);

        $infraccion = Infraccion::find($id);
        $infraccion->update($request->all());

        return redirect('/infracciones')->with('success', 'Infracción actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $infraccion = Infraccion::find($id);
        $infraccion->delete();

        return redirect('/infracciones')->with('success', 'Infracción eliminada exitosamente');
    }
}
