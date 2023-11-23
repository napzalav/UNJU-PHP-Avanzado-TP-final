<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use App\Models\Titular;
use Illuminate\Http\Request;

class AutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view("Auto.index");
        $autos = Auto::all();
        return view('Auto.index', compact('autos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view ('Auto.create');
        $titulares = Titular::all(); // Asumiendo que tienes el modelo Titular
    return view('Auto.create', compact('titulares'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'patente' => 'required|unique:autos,patente',
            'tipo' => 'required',
        ]);

        Auto::create($request->all());

        return redirect('/automotores')->with('success', 'Automotor creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $auto = Auto::find($id);
        return view('Auto.detail', compact('auto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $auto = Auto::find($id);
        $titulares = Titular::all();
        return view('Auto.edit', compact('auto', 'titulares'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'patente' => 'required|unique:autos,patente,' . $id,
            'tipo' => 'required',
        ]);

        $auto = Auto::find($id);
        $auto->update($request->all());

        return redirect('/automotores')->with('success', 'Automotor actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $auto = Auto::find($id);
        $auto->delete();

        return redirect('/automotores')->with('success', 'Automotor eliminado exitosamente');
    }
}
