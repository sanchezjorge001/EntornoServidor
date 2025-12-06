<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pelicula;

class PeliculaSeeder extends Seeder
{
    public function run(): void
    {
        $peliculas = [
            [
                'foto' => 'https://image.tmdb.org/t/p/w500/qJ2tW6WMUDux911r6m7haRef0WH.jpg',
                'titulo' => 'Matrix',
                'anio' => 1999,
                'generos' => ['Action', 'Sci-Fi'],
                'sinopsis' => 'Un hacker descubre la verdadera naturaleza de su realidad y su papel en la guerra contra sus controladores.'
            ],
            [
                'foto' => 'https://image.tmdb.org/t/p/w500/3bhkrj58Vtu7enYsRolD1fZdja1.jpg',
                'titulo' => 'El Padrino',
                'anio' => 1972,
                'generos' => ['Drama', 'Action'],
                'sinopsis' => 'El patriarca anciano de una dinastía del crimen organizado transfiere el control de su imperio clandestino a su hijo reacio.'
            ],
            [
                'foto' => 'https://image.tmdb.org/t/p/w500/d5NXSklXo0qyIYkgV94XAgMIckC.jpg',
                'titulo' => 'Pulp Fiction',
                'anio' => 1994,
                'generos' => ['Drama', 'Action', 'Comedy'],
                'sinopsis' => 'Las vidas de dos sicarios, un boxeador, la esposa de un gángster y dos bandidos se entrelazan en cuatro historias de violencia y redención.'
            ],
            [
                'foto' => 'https://image.tmdb.org/t/p/w500/r7vmZjiyZw9rpJMQJdXpjgiCOk9.jpg',
                'titulo' => 'Interestelar',
                'anio' => 2014,
                'generos' => ['Sci-Fi', 'Drama'],
                'sinopsis' => 'Un equipo de exploradores viaja a través de un agujero de gusano en el espacio en un intento de asegurar la supervivencia de la humanidad.'
            ],
            [
                'foto' => 'https://image.tmdb.org/t/p/w500/udDclJoHjfjb8Ekgsd4FDteOkCU.jpg',
                'titulo' => 'Forrest Gump',
                'anio' => 1994,
                'generos' => ['Drama', 'Romance'],
                'sinopsis' => 'Las presidencias de Kennedy y Johnson, la guerra de Vietnam, el escándalo Watergate y otros eventos históricos se desarrollan desde la perspectiva de un hombre de Alabama con un coeficiente intelectual de 75.'
            ],
            [
                'foto' => 'https://image.tmdb.org/t/p/w500/lxD5ak7BOoinRNehOCA85CQ8ubr.jpg',
                'titulo' => 'Inception',
                'anio' => 2010,
                'generos' => ['Action', 'Sci-Fi'],
                'sinopsis' => 'Un ladrón que roba secretos corporativos a través del uso de la tecnología de compartir sueños recibe la tarea inversa de plantar una idea en la mente de un CEO.'
            ],
            [
                'foto' => 'https://image.tmdb.org/t/p/w500/eBXFfd2bpjoSBYx96VHjYamR9Jf.jpg',
                'titulo' => 'El Conjuro',
                'anio' => 2013,
                'generos' => ['Horror'],
                'sinopsis' => 'Investigadores paranormales Ed y Lorraine Warren trabajan para ayudar a una familia aterrorizada por una presencia oscura en su granja.'
            ],
            [
                'foto' => 'https://image.tmdb.org/t/p/w500/aWeKITRFbbwY8txG5uCj4rMCfSP.jpg',
                'titulo' => 'El Señor de los Anillos: La Comunidad del Anillo',
                'anio' => 2001,
                'generos' => ['Fantasy', 'Action'],
                'sinopsis' => 'Un hobbit tímido de la Comarca y ocho compañeros emprenden un viaje para destruir el poderoso Anillo Único y salvar la Tierra Media del Señor Oscuro Sauron.'
            ],
            [
                'foto' => 'https://image.tmdb.org/t/p/w500/lCfbEWO3PFLjcwIgZiDOeCLKXYG.jpg',
                'titulo' => 'Titanic',
                'anio' => 1997,
                'generos' => ['Romance', 'Drama'],
                'sinopsis' => 'Un aristócrata de diecisiete años se enamora de un amable pero pobre artista a bordo del lujoso y desafortunado R.M.S. Titanic.'
            ],
            [
                'foto' => 'https://image.tmdb.org/t/p/w500/5VTN0pR8gcqV3EPUHHfMGnJYN9L.jpg',
                'titulo' => 'Toy Story',
                'anio' => 1995,
                'generos' => ['Comedy', 'Fantasy'],
                'sinopsis' => 'Los juguetes favoritos de un niño cobran vida por su cuenta cuando los humanos no están presentes, y su relación cambia cuando llega un nuevo juguete.'
            ],
            [
                'foto' => 'https://image.tmdb.org/t/p/w500/wuMc08IPKEatf9rnMNXvIDxqP4W.jpg',
                'titulo' => 'Harry Potter y la Piedra Filosofal',
                'anio' => 2001,
                'generos' => ['Fantasy'],
                'sinopsis' => 'Un niño huérfano se inscribe en una escuela de brujería, donde aprende la verdad sobre sí mismo, su familia y el terrible mal que acecha al mundo mágico.'
            ],
            [
                'foto' => 'https://image.tmdb.org/t/p/w500/vzmL6fP7aPKNKPRTFnZmiUfciyV.jpg',
                'titulo' => 'Planeta de los Simios',
                'anio' => 1968,
                'generos' => ['Sci-Fi', 'Drama'],
                'sinopsis' => 'Un astronauta se estrella en un planeta misterioso donde los simios evolucionados dominan una raza de humanos primitivos.'
            ]
        ];

        foreach ($peliculas as $pelicula) {
            Pelicula::create($pelicula);
        }
    }
}