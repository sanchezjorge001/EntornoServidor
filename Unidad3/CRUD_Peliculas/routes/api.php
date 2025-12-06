<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PeliculaApiController;

// API REST sin autenticación
Route::prefix('movies')->group(function () {
    Route::get('/', [PeliculaApiController::class, 'index']);           // GET /api/movies
    Route::get('/{id}', [PeliculaApiController::class, 'show']);        // GET /api/movies/{id}
    Route::post('/', [PeliculaApiController::class, 'store']);          // POST /api/movies
    Route::put('/{id}', [PeliculaApiController::class, 'update']);      // PUT /api/movies/{id}
    Route::delete('/{id}', [PeliculaApiController::class, 'destroy']);  // DELETE /api/movies/{id}
});