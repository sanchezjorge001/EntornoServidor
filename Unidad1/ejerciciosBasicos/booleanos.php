<?php
require_once "inventario.php";

// Verificamos si se han enviado los datos
if (!isset($_POST['torsos']) || !isset($_POST['cerebros']) || !isset($_POST['reanimacion']) || !isset($_POST['cantidad'])) {
    echo "<script>alert('Faltan datos obligatorios.');</script>";
    echo "<script>window.location.href='formulario.php';</script>";
    exit;
}

// Recogemos los datos
$repuestosSeleccionados = isset($_POST['repuestos']) ? $_POST['repuestos'] : [];
$torsosSeleccionado = $_POST['torsos'];
$cerebrosSeleccionado = $_POST['cerebros'];
$reanimacionSeleccionado = $_POST['reanimacion'];
$conservantesSeleccionados = isset($_POST['conservantes']) ? $_POST['conservantes'] : [];
$cantidadCriaturas = $_POST['cantidad'];

// Calculamos el precio por criatura
$precioUnitario = 0;

// Repuestos
if (!empty($repuestosSeleccionados)) {
    foreach ($repuestosSeleccionados as $repuesto) {
        $precioUnitario += $inventario['repuestos'][$repuesto]['precio'];
    }
}

// Torso
$precioUnitario += $inventario['torsos'][$torsosSeleccionado]['precio'];

// Cerebro
$precioUnitario += $inventario['cerebros'][$cerebrosSeleccionado]['precio'];

// Reanimación
$precioUnitario += $inventario['reanimacion'][$reanimacionSeleccionado]['precio'];

// Conservantes
if (!empty($conservantesSeleccionados)) {
    foreach ($conservantesSeleccionados as $cons) {
        $precioUnitario += $inventario['conservantes'][$cons]['precio'];
    }
}

// Calculamos el precio total
$precioTotal = $precioUnitario * $cantidadCriaturas;

// Calculamos el descuento
$descuento = 0;
if ($precioTotal >= 100 && $precioTotal < 200) {
    $descuento = 0.05 * $precioTotal;
} elseif ($precioTotal >= 200) {
    $descuento = 0.10 * $precioTotal;
}

$precioFinal = $precioTotal - $descuento;

// Mostramos el desglose
echo "<h1>Resumen del pedido</h1>";

echo "<ul>";
echo "<li>Repuestos:</li><ul>";
if (!empty($repuestosSeleccionados)) {
    foreach ($repuestosSeleccionados as $repuesto) {
        echo "<li>" . $inventario['repuestos'][$repuesto]['nombre_completo'] . " - " . $inventario['repuestos'][$repuesto]['precio'] . " €</li>";
    }
} else {
    echo "<li>Sin repuestos</li>";
}
echo "</ul>";

echo "<li>Torso: " . $inventario['torsos'][$torsosSeleccionado]['nombre_completo'] . " - " . $inventario['torsos'][$torsosSeleccionado]['precio'] . " €</li>";
echo "<li>Cerebro: " . $inventario['cerebros'][$cerebrosSeleccionado]['nombre_completo'] . " - " . $inventario['cerebros'][$cerebrosSeleccionado]['precio'] . " €</li>";
echo "<li>Método de reanimación: " . $inventario['reanimacion'][$reanimacionSeleccionado]['nombre_completo'] . " - " . $inventario['reanimacion'][$reanimacionSeleccionado]['precio'] . " €</li>";

echo "<li>Conservantes:</li><ul>";
if (!empty($conservantesSeleccionados)) {
    foreach ($conservantesSeleccionados as $cons) {
        echo "<li>" . $inventario['conservantes'][$cons]['nombre_completo'] . " - " . $inventario['conservantes'][$cons]['precio'] . " €</li>";
    }
} else {
    echo "<li>Sin conservantes</li>";
}
echo "</ul>";
echo "</ul>";

echo "<br>Precio por criatura: $precioUnitario €";
echo "<br>Cantidad de criaturas: $cantidadCriaturas";
echo "<br>Precio total: $precioTotal €";
echo "<br>Descuento aplicado: $descuento €";
echo "<br><b>Precio final: $precioFinal €</b>";
?>
