<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\ComentarioController;

// Rutas de autenticación (login, register, etc.)
Auth::routes();

// Ruta pública (antes de login)
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// Rutas protegidas (requieren login)
Route::middleware(['auth'])->group(function () {
    
    // Home principal - Lista de películas
    Route::get('/', [PeliculaController::class, 'index'])->name('peliculas.index');
    Route::get('/home', [PeliculaController::class, 'index'])->name('home'); // Alias para compatibilidad
    
    // Detalle de película
    Route::get('/movie/detail/{id}', [PeliculaController::class, 'show'])->name('peliculas.show');
    
    // Crear comentario (cualquier usuario logado)
    Route::post('/comments/create', [ComentarioController::class, 'store'])->name('comentarios.store');
    
    // Rutas SOLO para admin
    Route::middleware(['role.admin'])->group(function () {
        // Crear película
        Route::get('/movie/create', [PeliculaController::class, 'create'])->name('peliculas.create');
        Route::post('/movie/create', [PeliculaController::class, 'store'])->name('peliculas.store');
        
        // Eliminar película
        Route::delete('/movie/delete/{id}', [PeliculaController::class, 'destroy'])->name('peliculas.destroy');
        
        // Eliminar comentario
        Route::delete('/comments/delete/{id}', [ComentarioController::class, 'destroy'])->name('comentarios.destroy');
    });
});