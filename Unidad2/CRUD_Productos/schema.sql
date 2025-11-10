create database tienda;

use tienda;

CREATE TABLE producto (
    id INT UNSIGNED	 AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    precio decimal(10, 2) 
);


INSERT INTO producto (nombre, precio) VALUES
('Manzana Roja (1kg)', 3.50),
('Plátano (1kg)', 2.30),
('Leche Entera (1L)', 1.10),
('Pan Integral (1 unidad)', 1.50),
('Queso Gouda (200g)', 4.75),
('Aceite de Oliva Virgen Extra (500ml)', 5.99),
('Harina de Trigo (1kg)', 1.25),
('Pasta Fusilli (500g)', 1.20),
('Arroz Basmati (1kg)', 3.00),
('Pollo Entero (1kg)', 6.50),
('Huevos Orgánicos (12 unidades)', 2.80),
('Mantequilla Sin Sal (250g)', 2.60),
('Zanahorias (1kg)', 1.20),
('Tomate (1kg)', 2.50),
('Café Molido (250g)', 4.80),
('Azúcar Moreno (1kg)', 2.00),
('Papel Higiénico (6 unidades)', 3.90),
('Detergente para Ropa (1L)', 6.20),
('Champú (400ml)', 4.00),
('Cereal de Avena (500g)', 3.40);
