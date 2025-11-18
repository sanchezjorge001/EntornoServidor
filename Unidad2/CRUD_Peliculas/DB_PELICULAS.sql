create database DB_PELICULAS;

use DB_PELICULAS;

create table users(
	ID INT UNSIGNED PRIMARY KEY auto_increment,
    NOMBRE VARCHAR(50) NOT NULL,
    CONTRASEÑA VARCHAR(50) NOT NULL,
    ROL ENUM('user', 'admin') NOT NULL
);

create table movies(
	ID INT UNSIGNED PRIMARY KEY auto_increment,
    TITULO VARCHAR(50) NOT NULL,
    SINOPSIS TEXT NOT NULL,
    GENERO VARCHAR(50) NOT NULL,
    AÑO INT UNSIGNED
);

create table ratings(
	ID INT AUTO_INCREMENT PRIMARY KEY,
	MOVIE_ID INT UNSIGNED NOT NULL,
	USER_ID INT UNSIGNED NOT NULL,
	RATING INT NOT NULL CHECK (rating >= 1 AND rating <= 10),
    
    FOREIGN KEY (MOVIE_ID) REFERENCES movies (ID) ON DELETE CASCADE,
	FOREIGN KEY (USER_ID) REFERENCES users (ID) ON DELETE CASCADE

);

create table comments(
	ID INT AUTO_INCREMENT PRIMARY KEY,
	MOVIE_ID INT UNSIGNED NOT NULL,
	USER_ID INT UNSIGNED NOT NULL,
	COMENTARIO text NOT NULL,
    
    FOREIGN KEY (MOVIE_ID) REFERENCES movies (ID) ON DELETE CASCADE,
	FOREIGN KEY (USER_ID) REFERENCES users (ID) ON DELETE CASCADE

);


INSERT INTO users(NOMBRE, CONTRASEÑA, ROL) VALUES
('Admin', '123', 'admin'),
('User', '1234', 'user');

INSERT INTO movies (TITULO, SINOPSIS, GENERO, AÑO) VALUES 
('Inception', 'Un ladrón que roba secretos corporativos a través del uso de la tecnología de compartir sueños.', 'Ciencia Ficción', 2010),
('El Padrino', 'El patriarca envejecido de una dinastía del crimen organizado transfiere el control de su imperio clandestino a su hijo reacio.', 'Crimen', 1972),
('Matrix', 'Un hacker informático aprende de rebeldes misteriosos sobre la verdadera naturaleza de su realidad.', 'Acción', 1999),
('Interstellar', 'Un equipo de exploradores viaja a través de un agujero de gusano en el espacio en un intento de asegurar la supervivencia de la humanidad.', 'Aventura', 2014);

INSERT INTO comments (MOVIE_ID, USER_ID, COMENTARIO) VALUES 
(1, 2, '¡Me voló la cabeza! Nolan es un genio.'),
(1, 1, 'Un poco confusa al final, pero visualmente impresionante.'),
(2, 2, 'Un clásico absoluto. No se hacen películas así hoy en día.');

INSERT INTO ratings (MOVIE_ID, USER_ID, RATING) VALUES 
(1, 2, 10),
(1, 2, 8),
(2, 2, 9);







