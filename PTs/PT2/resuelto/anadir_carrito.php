<?php

require_once "./model/ProductoModel.php";
require_once "./model/Producto.php";

session_start();

print_r($_POST);

$productoModel = new ProductoModel();

if (isset($_POST["id"])) {

    $id = $_POST["id"];
    $producto = $productoModel->obtenerProductoPorId($id);
    $cantidad = $_POST["cantidad"];

    $_SESSION['carrito'][$id] = [
        'producto' => $producto,
        'cantidad' => $cantidad
    ];

    header('Location: carrito.php');

}