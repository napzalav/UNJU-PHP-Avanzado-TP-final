<?php

namespace App\Http\Controllers;

use App\Models\Titular;
use App\Models\Infraccion;
use App\Models\Auto;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        // Redireccionamos a la página de resultados de búsqueda.
        return redirect()->route('search', ['query' => $query]);
    }


    public function search(Request $request)
    {
        $query = $request->input('query');

        // Buscar en la tabla de titulares
        $titulares = Titular::where('nombre', 'LIKE', "%$query%")
            ->orWhere('apellido', 'LIKE', "%$query%")
            ->orWhere('dni', 'LIKE', "%$query%")
            ->get();

        // Buscar en la tabla de infracciones
        $infracciones = Infraccion::where('patente', 'LIKE', "%$query%")
            ->get();

        // Buscar en la tabla de automotores
        $automotores = Auto::where('marca', 'LIKE', "%$query%")
            ->orWhere('modelo', 'LIKE', "%$query%")
            ->orWhere('tipo', 'LIKE', "%$query%")
            ->get();

        // Renderizar la vista de resultados
        return view('search.results', compact('titulares', 'infracciones', 'automotores', 'query'));
    }


    public function results($query)
    {
        //pasamos el resultado de la búsqueda a la vista.
        $results = []; // Reemplaza esto con la lógica de búsqueda real.

        return view('Search.results', compact('query', 'results'));
    }
}
