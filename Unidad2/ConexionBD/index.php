<?php

try {
    // Crear una nueva conexión PDO
    $conexion = new PDO("mysql:host=localhost;dbname=listaUsuarios", "root", "1234");
    
    // Establecer el modo de error a excepciones
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión exitosa";
} catch (PDOException $e) {
    // Capturar y manejar los errores de conexión
    echo "Error en la conexión: " . $e->getMessage();
}

// Preparar la consulta
$stmt = $conexion->prepare("SELECT * FROM usuario");



// Asignar el valor y ejecutar la consulta
$stmt->execute();

// Recuperar los resultados
$resultado = $stmt->fetchAll();

foreach ($resultado as $fila) {
    echo "<br>";
    print_r($fila);
}