<?php

require_once "navbar.php";

require_once "./model/ProductoModel.php";
require_once "./model/Producto.php";

$productoModel = new ProductoModel();

if (isset($_GET["id"])) {

    $id = $_GET["id"];
    $producto = $productoModel->obtenerProductoPorId($id);

    $nombre = $producto->getNombre();
    $precio = $producto->getPrecio();
    $descripcion = $producto->getDescripcion();

    echo "<h1>$nombre</h1>"; 
    echo "<h2>$precio €</h2>";
    echo "<p>$descripcion €</p>";
}

?>

<form action="anadir_carrito.php" method="POST">
    <input type="hidden" name="id" value=<?php echo $id ?>>
    <input type="number" name="cantidad"><br>
    <input type="submit" value="AÑADIR AL CARRITO">
</form>