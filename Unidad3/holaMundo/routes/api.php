<?php

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Calculadora;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/hola/{nombre?}', function ($nombre = 'Mundo') {
    return response()->json([
        'mensaje' => "Hola, $nombre!",
    ]);
});


Route::get('/sumar/{n1?}/{n2?}', [Calculadora::class, 'sumar']);

Route::get('/numeros/{size}', [Calculadora::class, 'listaNumeros']);

// ================================ API USUARIOS ================================//


Route::post('/usuario', function (Request $request) {
   $data = $request->all();

   $usuarioNuevo = Usuario::create([
    'nombre' => $data['nombre'],
    'email' => $data['email'],
    ]);

    return $usuarioNuevo;
});



Route::get('/usuario', function () {

    $usuarios = Usuario::all();

    return $usuarios;
});


Route::get('/usuario/{id}', function ($id) {

    $usuarios = Usuario::find($id);

    return $usuarios;
});


Route:: put('/usuario/{id}', function (Request $request, $id){


    $data = $request->all();



    $usuarioActualizar = Usuario::find($id);
    $usuarioActualizar->nombre = $data['nombre'];
    $usuarioActualizar->email = $data['email'];
    $usuarioActualizar->save();

    return $usuarioActualizar;

});


Route::delete('/usuario/{id}', function ($id) {

    $usuarioBorrar = Usuario::destroy($id);

    return $usuarioBorrar;
});     




