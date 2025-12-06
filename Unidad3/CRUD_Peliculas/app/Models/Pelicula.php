<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $fillable = ['foto', 'titulo', 'anio', 'generos', 'sinopsis'];

    protected $casts = [
        'generos' => 'array',  // Este SÍ es necesario
    ];

      public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }
}
