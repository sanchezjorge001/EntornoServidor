<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaApiController extends Controller
{
    // GET /api/movies - Listar todas
    public function index()
    {
        $peliculas = Pelicula::all();
        return response()->json($peliculas);
    }

    // GET /api/movies/{id} - Detalle de una película
    public function show($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        return response()->json($pelicula);
    }

    // POST /api/movies - Crear película
    public function store(Request $request)
    {
        $validated = $request->validate([
            'foto' => 'required|url|max:500',
            'titulo' => 'required|string|min:1|max:255|unique:peliculas,titulo',
            'anio' => 'required|integer|min:1900|max:' . (date('Y') + 5),
            'generos' => 'required|array|min:1',
            'generos.*' => 'required|string|in:Action,Comedy,Drama,Horror,Sci-Fi,Fantasy,Documentary,Romance|distinct',
            'sinopsis' => 'required|string|min:10|max:2000',
        ]);

        $pelicula = Pelicula::create($validated);

        return response()->json($pelicula, 201);
    }

    // PUT /api/movies/{id} - Actualizar película
    public function update(Request $request, $id)
    {
        $pelicula = Pelicula::findOrFail($id);

        $validated = $request->validate([
            'foto' => 'sometimes|url|max:500',
            'titulo' => 'sometimes|string|min:1|max:255|unique:peliculas,titulo,' . $id,
            'anio' => 'sometimes|integer|min:1900|max:' . (date('Y') + 5),
            'generos' => 'sometimes|array|min:1',
            'generos.*' => 'required_with:generos|string|in:Action,Comedy,Drama,Horror,Sci-Fi,Fantasy,Documentary,Romance|distinct',
            'sinopsis' => 'sometimes|string|min:10|max:2000',
        ]);

        $pelicula->update($validated);

        return response()->json($pelicula);
    }

    // DELETE /api/movies/{id} - Eliminar película
    public function destroy($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->delete();

        return response()->json(['message' => 'Película eliminada'], 200);
    }
}