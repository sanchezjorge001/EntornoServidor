<?php
require_once "Producto.php";

class ProductoModel {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function obtenerTodos() {
        echo "<br>==============================================<br>";
        echo "<h2>Productos</h2>";

        $stmt = $this->conexion->prepare("SELECT * FROM producto");
        $stmt->execute();
        $resultado = $stmt->fetchAll();

        foreach ($resultado as $fila) {
            // Creamos un objeto Producto con los datos de la BD
            $producto = new Producto($fila['id'], $fila['nombre'], $fila['precio']);

            echo "Nombre: " . $producto->getNombre() . 
                 " | Precio: " . $producto->getPrecio();

            echo " <a href='view/editar.php?id=" . $producto->getId() . "'>
                    <button>Editar</button>
                   </a>";

            echo " <a href='view/eliminar.php?id=" . $producto->getId() . "' onclick='return confirm(\"¿Seguro que quieres eliminar este producto?\");'>
                    <button>Eliminar</button>
                   </a><br>";
        }
    }

    public function obtenerPorId($id) {
        echo "<br> <h3> Producto obtenido por id </h3>";

        // Preparar la consulta
        $stmt = $this->conexion->prepare("SELECT * FROM producto WHERE id = :id");

        // Enlazar el valor del marcador de posición
        $stmt->bindParam(':id', $id);

        // Asignar el valor y ejecutar la consulta
        $id = 1;
        $stmt->execute();

        $fila = $stmt->fetch();

        if ($fila) {
            $producto = new Producto($fila['id'], $fila['nombre'], $fila['precio']);
            echo "Nombre: " . $producto->getNombre() . " | Precio: " . $producto->getPrecio();
            return $producto;
        } else {
            echo "No se encontró ningún producto con ese ID.";
            return null;
        }

            }
}
