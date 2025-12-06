@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>➕ Crear Nueva Película</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('peliculas.store') }}" method="POST">
                        @csrf

                        <!-- Foto -->
                        <div class="mb-3">
                            <label for="foto" class="form-label">URL de la Foto/Póster *</label>
                            <input 
                                type="url" 
                                name="foto" 
                                id="foto" 
                                class="form-control @error('foto') is-invalid @enderror" 
                                value="{{ old('foto') }}"
                                required
                            >
                            @error('foto')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Título -->
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título *</label>
                            <input 
                                type="text" 
                                name="titulo" 
                                id="titulo" 
                                class="form-control @error('titulo') is-invalid @enderror" 
                                value="{{ old('titulo') }}"
                                required
                            >
                            @error('titulo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Año -->
                        <div class="mb-3">
                            <label for="anio" class="form-label">Año de Lanzamiento *</label>
                            <input 
                                type="number" 
                                name="anio" 
                                id="anio" 
                                class="form-control @error('anio') is-invalid @enderror" 
                                value="{{ old('anio') }}"
                                min="1900"
                                max="{{ date('Y') + 5 }}"
                                required
                            >
                            @error('anio')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Géneros -->
                        <div class="mb-3">
                            <label class="form-label">Géneros * (selecciona al menos uno)</label>
                            <div class="row">
                                @foreach(['Action', 'Comedy', 'Drama', 'Horror', 'Sci-Fi', 'Fantasy', 'Documentary', 'Romance'] as $genero)
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input 
                                                class="form-check-input @error('generos') is-invalid @enderror" 
                                                type="checkbox" 
                                                name="generos[]" 
                                                value="{{ $genero }}" 
                                                id="genero_{{ $genero }}"
                                                {{ is_array(old('generos')) && in_array($genero, old('generos')) ? 'checked' : '' }}
                                            >
                                            <label class="form-check-label" for="genero_{{ $genero }}">
                                                {{ $genero }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @error('generos')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Sinopsis -->
                        <div class="mb-3">
                            <label for="sinopsis" class="form-label">Sinopsis *</label>
                            <textarea 
                                name="sinopsis" 
                                id="sinopsis" 
                                class="form-control @error('sinopsis') is-invalid @enderror" 
                                rows="5"
                                required
                            >{{ old('sinopsis') }}</textarea>
                            @error('sinopsis')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Botones -->
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('peliculas.index') }}" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-success">Crear Película</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection