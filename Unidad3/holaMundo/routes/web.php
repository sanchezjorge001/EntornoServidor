<?php

use App\Http\Controllers\Calculadora;
use Illuminate\Support\Facades\Route;



Route::get('/hola/{nombre?}', function ($nombre = 'Mundo') {
    return view('hola', ['nombre' => $nombre]);
});



Route::get('/edad/{edad?}', function ($edad = '18') {
    return view('edad', ['edad' => $edad]);
});


Route::get('/numeros/{size}', function ($size = '20') {
    $calculadora = new Calculadora();
    $numeros = $calculadora->listaNumeros($size);


    return view('numeros', ['numeros' => $numeros,
'size' => $size]);
});