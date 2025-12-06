<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    // Crear comentario en una película
    public function store(Request $request)
    {
        $validated = $request->validate([
            'pelicula_id' => 'required|integer|exists:peliculas,id',
            'contenido' => 'required|string|min:3|max:1000',
        ], [
            'pelicula_id.required' => 'La película es obligatoria.',
            'pelicula_id.exists' => 'La película no existe.',
            'contenido.required' => 'El comentario es obligatorio.',
            'contenido.min' => 'El comentario debe tener al menos 3 caracteres.',
            'contenido.max' => 'El comentario no puede superar los 1000 caracteres.',
        ]);

        Comentario::create([
            'user_id' => auth()->id(),
            'pelicula_id' => $validated['pelicula_id'],
            'contenido' => $validated['contenido'],
        ]);

        return redirect()->back()->with('success', 'Comentario agregado.');
    }

    // Eliminar comentario - SOLO ADMIN
    public function destroy($id)
    {
        $comentario = Comentario::findOrFail($id);
        $comentario->delete();

        return redirect()->back()->with('success', 'Comentario eliminado.');
    }
}