@extends('layout')

@section('titulo', 'Lista de numeros')

@section('contenido')
    <h2>Lista de numeros del 1 al {{ $size }}</h2>
    <ul>
        @foreach ($numeros as $numero)
            <li>{{ $numero }}</li>
        @endforeach
    </ul>
@endsection

