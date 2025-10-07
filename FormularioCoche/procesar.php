<?php
// Precios de los componentes y accesorios del coche
$componentes = [
    "Modelo" => [
        "Compacto" => 15000,
        "Sedán" => 20000,
        "SUV" => 30000
    ],
    "Motor" => [
        "Gasolina 1.6L" => 2000,
        "Diesel 2.0L" => 3000,
        "Eléctrico 75 kWh" => 10000
    ],
    "Color" => [
        "Blanco" => 0,
        "Negro" => 500,
        "Azul Metálico" => 1000,
        "Rojo" => 1500
    ],
    "Llantas" => [
        "16\" Aleación" => 500,
        "18\" Aleación" => 1000,
        "20\" Deportivo" => 1500
    ],
    "Equipamiento" => [
        "Básico" => 0,
        "Confort" => 2000,
        "Premium" => 5000
    ],
    "Accesorios" => [
        "Techo Panorámico" => 1200,
        "Asientos de Cuero" => 1500,
        "Sistema de Sonido Premium" => 1000,
        "Cámara de 360°" => 800,
        "Paquete Deportivo" => 2000,
        "Control de Crucero Adaptativo" => 1500,
        "Sensores de Aparcamiento" => 600,
        "Maletero Eléctrico" => 900
    ]
];

// Códigos de descuento válidos
$codigosDescuento = [
    "AUTODESCUENTO5" => 5,   // 5% de descuento
    "CARSALE10" => 10,       // 10% de descuento
    "PROMO15" => 15          // 15% de descuento
];

function validarCamposObligatorios($data, $campos) {
    $faltantes = [];
    foreach ($campos as $campo) {
        if (!isset($data[$campo]) || trim($data[$campo]) === "") {
            $faltantes[] = $campo;
        }
    }
    return $faltantes;
}

function formatearPrecio($precio) {
    return number_format($precio, 2, ',', '.') . " €";
}

// Campos obligatorios
$obligatorios = ['modelo', 'motor', 'color', 'llantas', 'equipamiento', 'cantidad'];

// Validar campos obligatorios
$faltantes = validarCamposObligatorios($_POST, $obligatorios);

if (!empty($faltantes)) {
    echo "<h2>Faltan las siguientes secciones obligatorias:</h2><ul>";
    foreach ($faltantes as $f) {
        echo "<li>" . ucfirst($f) . "</li>";
    }
    echo "</ul>";
    echo '<p><a href="formulario.html">Volver al formulario</a></p>';
    exit;
}

// Recuperar datos del formulario
$modelo = $_POST['modelo'];
$motor = $_POST['motor'];
$color = $_POST['color'];
$llantas = $_POST['llantas'];
$equipamiento = $_POST['equipamiento'];
$cantidad = (int)$_POST['cantidad'];
$codigo_descuento = isset($_POST['codigo_descuento']) ? strtoupper(trim($_POST['codigo_descuento'])) : "";
$accesorios_seleccionados = isset($_POST['accesorios']) ? $_POST['accesorios'] : [];

// Validar cantidad
if ($cantidad < 1 || $cantidad > 5) {
    echo "<h2>La cantidad de coches debe estar entre 1 y 5.</h2>";
    echo '<p><a href="formulario.html">Volver al formulario</a></p>';
    exit;
}

// Calcular precio base
$precio_base = 0;

if (isset($componentes['Modelo'][$modelo])) {
    $precio_base += $componentes['Modelo'][$modelo];
} else {
    echo "Modelo no válido.";
    exit;
}

if (isset($componentes['Motor'][$motor])) {
    $precio_base += $componentes['Motor'][$motor];
} else {
    echo "Motor no válido.";
    exit;
}

if (isset($componentes['Color'][$color])) {
    $precio_base += $componentes['Color'][$color];
} else {
    echo "Color no válido.";
    exit;
}

if (isset($componentes['Llantas'][$llantas])) {
    $precio_base += $componentes['Llantas'][$llantas];
} else {
    echo "Llantas no válidas.";
    exit;
}

if (isset($componentes['Equipamiento'][$equipamiento])) {
    $precio_base += $componentes['Equipamiento'][$equipamiento];
} else {
    echo "Equipamiento no válido.";
    exit;
}

// Accesorios
$precio_accesorios = 0;
$accesorios_validos = [];

foreach ($accesorios_seleccionados as $acc) {
    if (isset($componentes['Accesorios'][$acc])) {
        $precio_accesorios += $componentes['Accesorios'][$acc];
        $accesorios_validos[] = $acc;
    }
}

// Precio por unidad
$precio_por_unidad = $precio_base + $precio_accesorios;

// Descuento
$descuento_valido = false;
$descuento = 0;
$precio_con_descuento = $precio_por_unidad;

if ($codigo_descuento !== "") {
    if (isset($codigosDescuento[$codigo_descuento])) {
        $descuento_valido = true;
        $porcentaje_descuento = $codigosDescuento[$codigo_descuento];
        $descuento = $precio_por_unidad * $porcentaje_descuento / 100;
        $precio_con_descuento = $precio_por_unidad - $descuento;
    }
}

// Total por cantidad
$total_sin_descuento = $precio_por_unidad * $cantidad;
$total_con_descuento = $precio_con_descuento * $cantidad;

// IVA 21%
$iva_sin_descuento = $total_sin_descuento * 0.21;
$iva_con_descuento = $total_con_descuento * 0.21;

// Mostrar resumen

echo "<h1>Resumen de tu Coche Personalizado:</h1>";

echo "<ul>";
echo "<li><strong>Modelo:</strong> {$modelo} - " . formatearPrecio($componentes['Modelo'][$modelo]) . "</li>";
echo "<li><strong>Motor:</strong> {$motor} - " . formatearPrecio($componentes['Motor'][$motor]) . "</li>";
echo "<li><strong>Color:</strong> {$color} - " . formatearPrecio($componentes['Color'][$color]) . "</li>";
echo "<li><strong>Llantas:</strong> {$llantas} - " . formatearPrecio($componentes['Llantas'][$llantas]) . "</li>";
echo "<li><strong>Equipamiento:</strong> {$equipamiento} - " . formatearPrecio($componentes['Equipamiento'][$equipamiento]) . "</li>";

if (!empty($accesorios_validos)) {
    echo "<li><strong>Accesorios:</strong><ul>";
    foreach ($accesorios_validos as $acc) {
        echo "<li>{$acc} - " . formatearPrecio($componentes['Accesorios'][$acc]) . "</li>";
    }
    echo "</ul></li>";
} else {
    echo "<li><strong>Accesorios:</strong> Ninguno</li>";
}

echo "</ul>";

echo "<p><strong>Cantidad de Coches:</strong> {$cantidad}</p>";

if ($codigo_descuento === "") {
    echo "<p><strong>Código de Descuento:</strong> No ingresado</p>";
} else {
    if ($descuento_valido) {
        echo "<p><strong>Código de Descuento:</strong> {$codigo_descuento} (Válido)</p>";
    } else {
        echo "<p><strong>Código de Descuento:</strong> {$codigo_descuento} (No válido)</p>";
    }
}

echo "<p><strong>Precio por unidad:</strong> " . formatearPrecio($precio_por_unidad) . "</p>";
echo "<p><strong>Total sin Descuento:</strong> " . formatearPrecio($total_sin_descuento) . "</p>";

if ($descuento_valido) {
    echo "<p><strong>Descuento Aplicado:</strong> " . formatearPrecio($descuento * $cantidad) . "</p>";
    echo "<p><strong>Total con Descuento:</strong> " . formatearPrecio($total_con_descuento) . "</p>";
}

echo "<p><strong>IVA (21%) sin descuento:</strong> " . formatearPrecio($iva_sin_descuento) . "</p>";

if ($descuento_valido) {
    echo "<p><strong>IVA (21%) con descuento:</strong> " . formatearPrecio($iva_con_descuento) . "</p>";
}

echo '<p><a href="index.html">Volver al formulario</a></p>';
?>
