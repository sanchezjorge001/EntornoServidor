@extends('layout')

@section('titulo', 'Hola Mundo')

@section('contenido')
    @if($edad<18)
        <x-color color="red">Es menor</x-color>
    @else
        <x-color color="green">Es mayor</x-color>
    @endif
@endsection


