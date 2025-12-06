<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = ['user_id', 'pelicula_id', 'contenido'];

    // Relación con el usuario que escribió el comentario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación con la película comentada
    public function pelicula()
    {
        return $this->belongsTo(Pelicula::class);
    }
}