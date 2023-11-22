<?php

namespace App\Http\Controllers;

use App\Models\Titular;
use Illuminate\Http\Request;

class TitularesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $titulares = Titular::all();
        return view('Titular.index', compact('titulares'));
        // return view ('Titular.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Titular.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required|unique:titulares,dni',
            'domicilio' => 'required',
        ]);

        Titular::create($request->all());

        return redirect('/titulares')->with('success', 'Titular creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $titular = Titular::find($id);
        return view('Titular.detail', compact('titular'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $titular = Titular::find($id);
        return view('Titular.edit', compact('titular'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'apellido' => 'required',
            'nombre' => 'required',
            'dni' => 'required|unique:titulares,dni,' . $id,
            'direccion' => 'required',
        ]);

        $titular = Titular::find($id);
        $titular->update($request->all());

        return redirect('/titulares')->with('success', 'Titular actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $titular = Titular::find($id);
        $titular->delete();

        return redirect('/titulares')->with('success', 'Titular eliminado correctamente');
    }
}
