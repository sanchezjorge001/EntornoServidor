<?php

require_once "navbar.php";

require_once "./model/ProductoModel.php";
require_once "./model/Producto.php";

$productoModel = new ProductoModel();

$productos = $productoModel->obtenerTodosProductos();

foreach ($productos as $producto) {
    $id = $producto->getId();
    $nombre = $producto->getNombre();
    $precio = $producto->getPrecio();

    echo "<a href='detalle_producto.php?id=$id'>$nombre</a>: $precio €";
    echo "<br>";
}

