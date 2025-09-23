<?php
    $productos = array ("Pera" => 2, "Pan" => 1, "Agua" => 0.8);
    $cantidad = array (4, 0, 2);

    $total = 0;
    $productos_valores = array_values($productos);
    $productos_nombre = array_keys($productos);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factura de Compra</title>
    <link rel="stylesheet" href="style.css"> <!-- Enlazamos el CSS -->
</head>
<body>
    <h1>Factura de Compra</h1>
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio Unitario</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php
                for($i = 0; $i < count($productos); $i++){
                    if($cantidad[$i] > 0){
                        $precio = $productos_valores[$i] * $cantidad[$i];
                        echo "<tr>
                                <td>{$productos_nombre[$i]}</td>
                                <td>".number_format($productos_valores[$i], 2)." €</td>
                                <td>{$cantidad[$i]}</td>
                                <td>".number_format($precio, 2)." €</td>
                              </tr>";
                        $total += $precio;
                    }
                }
                $precio_sin_iva = $total / 1.21;
                $iva = $total - $precio_sin_iva;
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">Precio sin IVA</td>
                <td><?= number_format($precio_sin_iva, 2) ?> €</td>
            </tr>
            <tr>
                <td colspan="3">IVA (21%)</td>
                <td><?= number_format($iva, 2) ?> €</td>
            </tr>
            <tr class="total">
                <td colspan="3"><strong>Total</strong></td>
                <td><strong><?= number_format($total, 2) ?> €</strong></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>
