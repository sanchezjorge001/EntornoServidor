<?php

// Incluye el archivo donde están definidos los componentes, accesorios y descuentos
require_once "componentes.php";

// Array que contiene los nombres de los componentes que son obligatorios en un coche
$componentesObligatorios = ["Modelo", "Motor", "Color", "Llantas", "Equipamiento"];

/**
 * Función para mostrar una alerta emergente en JavaScript.
 * Se usa cuando hay un error o falta algún componente obligatorio.
 */
function alert($text){
    echo "<script> alert('$text');</script>" ;
}

/**
 * Función que valida cada componente obligatorio.
 * Si falta alguno, se muestra una alerta.
 */
function validarComponentesObligatorios(){
    global $componentesObligatorios;
    foreach ($componentesObligatorios as $componente) { // Recorre todos los componentes obligatorios
        if ( !validarComponente($componente)){ // Si el componente no es válido
            alert("El componente $componente es obligatorio"); // Muestra alerta indicando cuál falta
        }
    }
}

/**
 * Función que valida si un componente tiene un valor correcto.
 * Verifica que:
 * 1. Venga en $_POST.
 * 2. El valor recibido exista en la lista de valores posibles.
 */
function validarComponente($nombreComponente){

    global $componentes;
    $componenteTieneValor = isset($_POST[$nombreComponente]); // Verifica si el componente fue enviado por POST

    if($componenteTieneValor){

        $valorRecibido = $_POST[$nombreComponente]; // Valor enviado por el usuario
        $posiblesValores = $componentes[$nombreComponente]; // Valores válidos del componente

        // Verifica si el valor recibido es una clave válida dentro del array de ese componente
        $nombreComponenteExiste = array_key_exists($valorRecibido, $posiblesValores);
    }

    // Retorna true solo si existe y su valor es válido
    return $componenteTieneValor && $nombreComponenteExiste;
}

// Verifica si el formulario fue enviado por método POST
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    // Obtiene la cantidad de coches pedida
    $cantidadDeCoches = $_POST["cantidad"];

    // Código de descuento ingresado por el usuario
    $codigoDescuentoUsuario = $_POST["codigo_descuento"];

    // Comprueba si el código introducido existe en la lista de descuentos
    $hayDescuento = array_key_exists($codigoDescuentoUsuario, $codigosDescuento);

    // Variable para acumular el precio base del coche
    $precioUnitario = 0;

    // Valida que todos los componentes obligatorios estén presentes
    validarComponentesObligatorios();

    echo "<ul>";
    /**
     * Recorre todos los componentes obligatorios.
     * Obtiene su valor y su precio, y los suma al precio total del coche.
     */
    foreach ($componentesObligatorios as $componente) {
        $valor = $_POST[$componente]; // Valor seleccionado por el usuario
        $precioComponente = $componentes[$componente][$valor]; // Precio correspondiente al valor
        $precioUnitario += $precioComponente; // Suma al precio unitario
        echo "<li>$componente: $valor - $precioComponente €</li>";
    }

    /**
     * Si no se seleccionaron accesorios, muestra que no hay.
     * Si sí, los recorre y suma cada precio al total.
     */
    if (empty($_POST["Accesorios"])){
        echo "<li>Accesorios: SIN ACCESORIOS</li>";
    }else{
        echo "<li>Accesorios:<ul>";

        $accesorios = $_POST["Accesorios"]; // Array de accesorios seleccionados

        foreach ($accesorios as $accesorio) { // Recorre cada accesorio escogido
            $precioAccesorio = $componentes["Accesorios"][$accesorio]; // Obtiene su precio
            $precioUnitario += $precioAccesorio; // Lo suma al total
            echo "<li>$accesorio - $precioAccesorio €</li>";
        }

        echo "</ul></li>";
    }

    echo "</ul>";

    // Muestra cantidad de coches y el código descuento usado (si es válido)
    echo "<br>Cantidad de Coches: $cantidadDeCoches";
    echo "<br>Código de Descuento: " . ($hayDescuento ? $codigoDescuentoUsuario : "No válido");

    // Muestra el precio por unidad
    echo "<br><br>Precio por unidad: $precioUnitario €";

    // Calcula el total sin descuento
    $precioTotal = $precioUnitario * $cantidadDeCoches;
    echo "<br>Total sin Descuento: $precioTotal €";

    // Si hay descuento, se aplica
    if($hayDescuento){
        $tasaDescuento = $codigosDescuento[$codigoDescuentoUsuario]/100; // Convierte el porcentaje
        $descuentoAplicado = $precioTotal * $tasaDescuento; // Calcula el descuento
        $precioTotal -= $descuentoAplicado; // Resta el descuento

        echo "<br>Descuento Aplicado: $descuentoAplicado €";
        echo "<br>Total con Descuento: $precioTotal €";
    }

    // Calcula el IVA del total final
    $IVA = round($precioTotal - ($precioTotal/1.21), 2);
    echo "<br><br>IVA (21%): $IVA €";

}else{
    // Si alguien accede por GET, se le muestra un aviso
    alert("¿Qué haces usando GET?");
}
