@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">🎬 Películas</h1>
    
    <div class="row">
        @forelse($peliculas as $pelicula)
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <img src="{{ $pelicula->foto }}" class="card-img-top" alt="{{ $pelicula->titulo }}" style="height: 400px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pelicula->titulo }}</h5>
                        <p class="card-text text-muted">{{ $pelicula->anio }}</p>
                        <a href="{{ route('peliculas.show', $pelicula->id) }}" class="btn btn-primary btn-sm">
                            Ver Detalle
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info">
                    No hay películas disponibles.
                </div>
            </div>
        @endforelse
    </div>

<!-- Paginación moderna -->
@if($peliculas->hasPages())
    <div class="d-flex justify-content-center align-items-center mt-4 gap-2">
        {{-- Botón anterior --}}
        @if($peliculas->onFirstPage())
            <button class="btn btn-outline-secondary" disabled>← Anterior</button>
        @else
            <a href="{{ $peliculas->previousPageUrl() }}" class="btn btn-primary">← Anterior</a>
        @endif

        {{-- Información de página --}}
        <span class="mx-3 text-muted">
            Página {{ $peliculas->currentPage() }} de {{ $peliculas->lastPage() }}
        </span>

        {{-- Botón siguiente --}}
        @if($peliculas->hasMorePages())
            <a href="{{ $peliculas->nextPageUrl() }}" class="btn btn-primary">Siguiente →</a>
        @else
            <button class="btn btn-outline-secondary" disabled>Siguiente →</button>
        @endif
    </div>
@endif
</div>
@endsection