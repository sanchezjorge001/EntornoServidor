<?php
require_once "./model/ProductoModel.php";

try {
    $conexion = new PDO("mysql:host=localhost;dbname=tienda", "root", "1234");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa<br>";
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
    exit;
}

// Instanciar el modelo y mostrar los productos
$productoModel = new ProductoModel($conexion);
$productoModel->obtenerTodos();

$productoModel->obtenerPorId(0);

echo "<br><a href='view/agregar.php'>
        <button>Añadir Nuevo Producto</button>
      </a>";
