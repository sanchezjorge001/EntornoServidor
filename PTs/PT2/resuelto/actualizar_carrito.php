<?php

require_once "./model/ProductoModel.php";
require_once "./model/Producto.php";

session_start();

$productoModel = new ProductoModel();

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {

    print_r($_POST);

    foreach ($_POST as $id => $cantidad) {

        if ($cantidad == 0) {
            unset($_SESSION['carrito'][$id]);
        } else {
            $producto = $productoModel->obtenerProductoPorId($id);

            $_SESSION['carrito'][$id] = [
                'producto' => $producto,
                'cantidad' => $cantidad
            ];
        }

    }

}

header("Location: carrito.php");