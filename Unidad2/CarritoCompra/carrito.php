<?php
require_once "productos.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
</head>

<body>

    <h1>Carrito de la Compra</h1>

    <form method="POST" action="procesarCarrito.php">

        <?php
        $total = 0;
        $carritoGuardado = [];

        if (isset($_COOKIE["carrito"])) {
            $carritoGuardado = json_decode($_COOKIE["carrito"], true);
        }

        foreach ($productos as $codigoBarras => $producto) {
            $nombreProducto = $producto->getNombre();
            $precioProducto = $producto->getPrecio();

            $cantidad = isset($carritoGuardado[$codigoBarras]) ? $carritoGuardado[$codigoBarras] : 0;

            $total += $cantidad * $precioProducto;

            echo "<label>$nombreProducto - " . number_format($precioProducto, 2) . " € ";
            echo "<input name='$codigoBarras' type='number' value='$cantidad' min='0'>";
            echo "</label><br>";
        }
        ?>

        <br>
        <input type="submit" value="Guardar carrito">
        <button type="button"><a href="borrarCarrito.php">Borrar carrito</a></button>

    </form>

    <br><br>

    <?php
    $gastosEnvio = $total * 0.02;
    $gastosEnvio = round($gastosEnvio < 5 ? 5 : $gastosEnvio, 2);
    $total = round($total, 2);
    $totalFinal = $total + $gastosEnvio;

    echo "SUBTOTAL: " . number_format($total, 2) . " €<br>";
    echo "GASTOS DE ENVIO: " . number_format($gastosEnvio, 2) . " €<br>";
    echo "TOTAL: " . number_format($totalFinal, 2) . " €<br>";
    ?>

</body>

</html>