@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Póster -->
        <div class="col-md-4">
            <img src="{{ $pelicula->foto }}" class="img-fluid rounded" alt="{{ $pelicula->titulo }}">
            
            <!-- Botón eliminar - Solo Admin -->
            @if(auth()->user()->isAdmin())
                <form action="{{ route('peliculas.destroy', $pelicula->id) }}" method="POST" class="mt-3" onsubmit="return confirm('¿Estás seguro de eliminar esta película?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger w-100">
                        🗑️ Eliminar Película
                    </button>
                </form>
            @endif
        </div>

        <!-- Información -->
        <div class="col-md-8">
            <h1>{{ $pelicula->titulo }}</h1>
            <p class="text-muted">{{ $pelicula->anio }}</p>
            
            <!-- Géneros -->
            <div class="mb-3">
                @foreach($pelicula->generos as $genero)
                    <span class="badge bg-primary">{{ $genero }}</span>
                @endforeach
            </div>

            <!-- Sinopsis -->
            <h5>Sinopsis</h5>
            <p>{{ $pelicula->sinopsis }}</p>

            <hr>

            <!-- Comentarios -->
            <h4>💬 Comentarios ({{ $pelicula->comentarios->count() }})</h4>

            <!-- Formulario nuevo comentario -->
            <form action="{{ route('comentarios.store') }}" method="POST" class="mb-4">
                @csrf
                <input type="hidden" name="pelicula_id" value="{{ $pelicula->id }}">
                
                <div class="mb-3">
                    <label for="contenido" class="form-label">Escribe tu comentario</label>
                    <textarea 
                        name="contenido" 
                        id="contenido" 
                        class="form-control @error('contenido') is-invalid @enderror" 
                        rows="3" 
                        required
                    ></textarea>
                    @error('contenido')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-success">Publicar Comentario</button>
            </form>

            <!-- Lista de comentarios -->
            @forelse($pelicula->comentarios as $comentario)
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h6 class="card-subtitle mb-2 text-muted">
                                    👤 {{ $comentario->user->name }} 
                                    <small class="text-muted">• {{ $comentario->created_at->diffForHumans() }}</small>
                                </h6>
                                <p class="card-text">{{ $comentario->contenido }}</p>
                            </div>
                            
                            <!-- Botón eliminar comentario - Solo Admin -->
                            @if(auth()->user()->isAdmin())
                                <form action="{{ route('comentarios.destroy', $comentario->id) }}" method="POST" onsubmit="return confirm('¿Eliminar este comentario?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        🗑️
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-muted">No hay comentarios aún. ¡Sé el primero en comentar!</p>
            @endforelse
        </div>
    </div>

    <a href="{{ route('peliculas.index') }}" class="btn btn-secondary mt-4">← Volver</a>
</div>
@endsection