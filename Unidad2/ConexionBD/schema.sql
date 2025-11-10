CREATE DATABASE listaUsuarios;

USE listaUsuarios;

CREATE TABLE usuario (
    id INT UNSIGNED	 AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    edad TINYINT UNSIGNED NOT NULL 
);


INSERT INTO usuario (nombre, edad) VALUES
('Juan Pérez', 28),
('María García', 34),
('Luis Fernández', 22),
('Ana López', 30),
('Carlos Romero', 41),
('Sofía Méndez', 25);
