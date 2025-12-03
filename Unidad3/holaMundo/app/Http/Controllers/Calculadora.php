<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculadora extends Controller
{
    public function sumar($n1, $n2) {
        return $n1 + $n2;
    }

      public function restar($n1, $n2) {
        return $n1 - $n2;
    }

      public function multiplicar($n1, $n2) {
        return $n1 * $n2;
    }

    public function listaNumeros($size) {
        $numeros = [];

        for ($i = 0; $i <= $size; $i++) {
            $numeros[] = $i;
        
        }

        return $numeros;
    }
}

