<?php
require_once "productos.php";

// Procesar el formulario cuando se envía
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['cantidad'])) {
        // Guardar el carrito en una cookie
        setcookie('carrito', json_encode($_POST['cantidad']), time() + 86400, "/");
        // Actualizar el carrito inmediatamente para mostrarlo
        $carrito = $_POST['cantidad'];
        $mensaje = "Carrito guardado correctamente";
    }
    
    if (isset($_POST['vaciar'])) {
        // Eliminar la cookie del carrito
        setcookie('carrito', '', time() - 3600, "/");
        unset($_COOKIE['carrito']);
        $carrito = [];
        $mensaje = "Carrito vaciado";
    }
}

// Recuperar el carrito desde la cookie si no se ha procesado el formulario
if (!isset($carrito)) {
    $carrito = [];
    if (isset($_COOKIE['carrito'])) {
        $carrito = json_decode($_COOKIE['carrito'], true);
    }
}

// Calcular el total de la compra
$total = 0;
foreach ($carrito as $codigo => $cantidad) {
    if ($cantidad > 0 && isset($productos[$codigo])) {
        $total += $productos[$codigo]['precio'] * $cantidad;
    }
}

// Calcular gastos de envío (2% del total, mínimo 5€)
$gastosEnvio = 0;
if ($total > 0) {
    $gastosEnvio = max(5, $total * 0.02);
}

$totalFinal = $total + $gastosEnvio;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        .mensaje {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .producto {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .producto label {
            flex: 1;
        }
        .producto input {
            width: 80px;
            padding: 5px;
            margin: 0 10px;
        }
        .precio {
            color: #28a745;
            font-weight: bold;
            width: 80px;
            text-align: right;
        }
        .botones {
            margin-top: 20px;
        }
        button {
            padding: 10px 20px;
            margin-right: 10px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }
        .btn-guardar {
            background-color: #007bff;
            color: white;
        }
        .btn-vaciar {
            background-color: #dc3545;
            color: white;
        }
        .resumen {
            margin-top: 30px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 5px;
        }
        .resumen h2 {
            margin-top: 0;
        }
        .linea-total {
            display: flex;
            justify-content: space-between;
            padding: 5px 0;
        }
        .total-final {
            font-size: 1.3em;
            font-weight: bold;
            border-top: 2px solid #333;
            padding-top: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>🛒 Carrito de Compras</h1>
    
    <?php if (isset($mensaje)): ?>
        <div class="mensaje"><?php echo $mensaje; ?></div>
    <?php endif; ?>

    <form method="POST">
        <h2>Productos Disponibles</h2>
        
        <?php foreach ($productos as $codigo => $producto): ?>
            <div class="producto">
                <label><?php echo $producto['nombre']; ?></label>
                <input 
                    type="number" 
                    name="cantidad[<?php echo $codigo; ?>]" 
                    value="<?php echo isset($carrito[$codigo]) ? $carrito[$codigo] : 0; ?>"
                    min="0"
                >
                <span class="precio"><?php echo number_format($producto['precio'], 2); ?>€</span>
            </div>
        <?php endforeach; ?>

        <div class="botones">
            <button type="submit" class="btn-guardar">💾 Guardar Carrito</button>
            <button type="submit" name="vaciar" value="1" class="btn-vaciar">🗑️ Vaciar Carrito</button>
        </div>
    </form>

    <?php if ($total > 0): ?>
        <div class="resumen">
            <h2>Resumen de la Compra</h2>
            
            <?php foreach ($carrito as $codigo => $cantidad): ?>
                <?php if ($cantidad > 0 && isset($productos[$codigo])): ?>
                    <?php 
                        $subtotal = $productos[$codigo]['precio'] * $cantidad;
                    ?>
                    <div class="linea-total">
                        <span><?php echo $productos[$codigo]['nombre']; ?> (x<?php echo $cantidad; ?>)</span>
                        <span><?php echo number_format($subtotal, 2); ?>€</span>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
            
            <div class="linea-total" style="margin-top: 10px; padding-top: 10px; border-top: 1px solid #ccc;">
                <span>Subtotal:</span>
                <span><?php echo number_format($total, 2); ?>€</span>
            </div>
            
            <div class="linea-total">
                <span>Gastos de envío (2%, mín. 5€):</span>
                <span><?php echo number_format($gastosEnvio, 2); ?>€</span>
            </div>
            
            <div class="linea-total total-final">
                <span>TOTAL:</span>
                <span><?php echo number_format($totalFinal, 2); ?>€</span>
            </div>
        </div>
    <?php endif; ?>
</body>
</html>