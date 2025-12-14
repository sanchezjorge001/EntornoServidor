<?php

require_once "./model/Producto.php";
require_once "navbar.php";

session_start();
$productos = $_SESSION["carrito"];

// ========================

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Carrito</title>
</head>

<body>

    <form method="POST" action="actualizar_carrito.php">

        <?php

        $total = 0;

        foreach ($productos as $idProducto => $itemCarrito) {

            $producto = $itemCarrito["producto"];
            $cantidad = $itemCarrito["cantidad"];

            $nombreProducto = $producto->getNombre();
            $precioProducto = $producto->getPrecio();

            $total += $cantidad * $precioProducto;

            echo "<label>$nombreProducto <input name=$idProducto type='number' value=$cantidad><a href='eliminar_del_carrito.php?id=$idProducto'>Eliminar</a></label><br>";
        }
        ?>

        <input type="submit" value="Guardar carrito">

    </form>

    <?php

    
    $gastosEnvio = $total * 0.02;
    $gastosEnvio = round($gastosEnvio < 5 ? 5 : $gastosEnvio, 2);
    $total = round($total, 2);

    echo "<br><br>TOTAL: $total €<br>";
    echo "GASTOS DE ENVIO: $gastosEnvio €<br>";

    ?>

</body>

</html>