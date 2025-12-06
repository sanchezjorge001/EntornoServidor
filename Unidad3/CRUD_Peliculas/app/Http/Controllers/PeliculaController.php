<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    // Lista paginada de películas (/)
    public function index()
    {
        $peliculas = Pelicula::paginate(10);
        return view('peliculas.index', compact('peliculas'));
    }

    // Mostrar detalle de película + comentarios (/movie/detail/{id})
    public function show($id)
    {
        $pelicula = Pelicula::with('comentarios.user')->findOrFail($id);
        return view('peliculas.show', compact('pelicula'));
    }

    // Formulario para crear película (/movie/create) - SOLO ADMIN
    public function create()
    {
        return view('peliculas.create');
    }

    // Guardar nueva película - SOLO ADMIN
    public function store(Request $request)
    {
        $validated = $request->validate([
            'foto' => 'required|url|max:500',
            'titulo' => 'required|string|min:1|max:255|unique:peliculas,titulo',
            'anio' => 'required|integer|min:1900|max:' . (date('Y') + 5),
            'generos' => 'required|array|min:1',
            'generos.*' => 'required|string|in:Action,Comedy,Drama,Horror,Sci-Fi,Fantasy,Documentary,Romance|distinct',
            'sinopsis' => 'required|string|min:10|max:2000',
        ], [
            'foto.required' => 'La foto es obligatoria.',
            'foto.url' => 'La foto debe ser una URL válida.',
            'titulo.required' => 'El título es obligatorio.',
            'titulo.unique' => 'Ya existe una película con ese título.',
            'anio.required' => 'El año es obligatorio.',
            'anio.min' => 'El año debe ser al menos 1900.',
            'anio.max' => 'El año no puede ser mayor a ' . (date('Y') + 5) . '.',
            'generos.required' => 'Debe seleccionar al menos un género.',
            'generos.min' => 'Debe seleccionar al menos un género.',
            'generos.*.in' => 'Género no válido.',
            'generos.*.distinct' => 'No se permiten géneros duplicados.',
            'sinopsis.required' => 'La sinopsis es obligatoria.',
            'sinopsis.min' => 'La sinopsis debe tener al menos 10 caracteres.',
            'sinopsis.max' => 'La sinopsis no puede superar los 2000 caracteres.',
        ]);

        Pelicula::create($validated);

        return redirect('/')->with('success', 'Película creada exitosamente.');
    }

    // Eliminar película - SOLO ADMIN
    public function destroy($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->delete();

        return redirect('/')->with('success', 'Película eliminada exitosamente.');
    }
}