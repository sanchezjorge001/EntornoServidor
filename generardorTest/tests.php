<?php

    $asignatura = $_POST["asignatura"];
    $numPreguntas = (int) $_POST["preguntas"];

    $preguntasRepo = [
    "matematicas" => [
        ["pregunta" => "¿Cuál es el resultado de 7 x 8?", "opciones" => ["54","56","64","58"], "correcta" => "56"],
        ["pregunta" => "¿Qué es un número primo?", "opciones" => ["Un número divisible solo por 1 y por sí mismo","Un número divisible por 2","Un número mayor que 10","Un número con 3 divisores"], "correcta" => "Un número divisible solo por 1 y por sí mismo"],
        ["pregunta" => "¿Cuánto es la raíz cuadrada de 81?", "opciones" => ["7","8","9","10"], "correcta" => "9"],
        ["pregunta" => "¿Cuál es el valor de π redondeado a dos decimales?", "opciones" => ["3.12","3.14","3.15","3.16"], "correcta" => "3.14"],
        ["pregunta" => "¿Qué es una fracción irreducible?", "opciones" => ["Una fracción que no se puede simplificar","Una fracción mayor que 1","Una fracción con denominador 10","Una fracción impropia"], "correcta" => "Una fracción que no se puede simplificar"],
        ["pregunta" => "Área de un triángulo base 10 y altura 5", "opciones" => ["20","25","30","50"], "correcta" => "25"],
        ["pregunta" => "Resuelve: 15 + (6 ÷ 2) x 3", "opciones" => ["24","18","21","33"], "correcta" => "24"],
        ["pregunta" => "¿Cómo se llama un polígono de 8 lados?", "opciones" => ["Hexágono","Octágono","Decágono","Pentágono"], "correcta" => "Octágono"],
        ["pregunta" => "Mínimo común múltiplo de 6 y 8", "opciones" => ["12","18","24","48"], "correcta" => "24"],
        ["pregunta" => "¿Qué es una ecuación de primer grado?", "opciones" => ["Tiene exponente 2","Tiene una incógnita al cuadrado","La incógnita está elevada a 1","Tiene fracciones"], "correcta" => "La incógnita está elevada a 1"]
    ],
    "ingles" => [
        ["pregunta" => "Traduce: 'I am eating an apple'.", "opciones" => ["Yo como una manzana","Yo estoy comiendo una manzana","Yo comeré una manzana","Yo comí una manzana"], "correcta" => "Yo estoy comiendo una manzana"],
        ["pregunta" => "¿Cómo se forma el pasado simple del verbo 'go'?", "opciones" => ["goed","goes","went","gone"], "correcta" => "went"],
        ["pregunta" => "¿Qué significa 'usually'?", "opciones" => ["Siempre","Casi nunca","Usualmente","A veces"], "correcta" => "Usualmente"],
        ["pregunta" => "Completa: 'She ____ (to have) two brothers'.", "opciones" => ["have","has","having","had"], "correcta" => "has"],
        ["pregunta" => "Plural de 'child'", "opciones" => ["childs","children","childes","childrens"], "correcta" => "children"],
        ["pregunta" => "Traduce: 'They are playing football in the park'.", "opciones" => ["Ellos jugaron al fútbol en el parque","Ellos juegan al fútbol en el parque","Ellos están jugando al fútbol en el parque","Ellos jugarán al fútbol en el parque"], "correcta" => "Ellos están jugando al fútbol en el parque"],
        ["pregunta" => "Pregunta en inglés para: 'Ella vive en Madrid'.", "opciones" => ["Does she lives in Madrid?","She lives in Madrid?","Does she live in Madrid?","Is she lives in Madrid?"], "correcta" => "Does she live in Madrid?"],
        ["pregunta" => "¿Cómo se dice 'ayer'?", "opciones" => ["tomorrow","today","yesterday","last day"], "correcta" => "yesterday"],
        ["pregunta" => "Completa: 'There ____ a book on the table'.", "opciones" => ["is","are","was","be"], "correcta" => "is"],
        ["pregunta" => "Diferencia entre 'much' y 'many'", "opciones" => ["Much se usa con contables y many con incontables","Ambos son iguales","Much con incontables y many con contables","Many solo se usa en negativo"], "correcta" => "Much con incontables y many con contables"]
    ],
    "historia" => [
        ["pregunta" => "¿En qué año comenzó la Segunda Guerra Mundial?", "opciones" => ["1914","1936","1939","1945"], "correcta" => "1939"],
        ["pregunta" => "¿Primer emperador romano?", "opciones" => ["Julio César","Augusto","Nerón","Trajano"], "correcta" => "Augusto"],
        ["pregunta" => "¿Civilización de las pirámides?", "opciones" => ["Griegos","Romanos","Egipcios","Mayas"], "correcta" => "Egipcios"],
        ["pregunta" => "Año en que Colón llegó a América", "opciones" => ["1482","1492","1502","1512"], "correcta" => "1492"],
        ["pregunta" => "¿Autor de 'La Ilíada'?", "opciones" => ["Platón","Sófocles","Homero","Aristóteles"], "correcta" => "Homero"],
        ["pregunta" => "Capital del Imperio Bizantino", "opciones" => ["Roma","Constantinopla","Atenas","Estambul"], "correcta" => "Constantinopla"],
        ["pregunta" => "Rey apodado 'El Sabio'", "opciones" => ["Fernando III","Alfonso X","Carlos I","Felipe II"], "correcta" => "Alfonso X"],
        ["pregunta" => "Tratado que puso fin a la I Guerra Mundial", "opciones" => ["Versalles","Tordesillas","París","Ginebra"], "correcta" => "Versalles"],
        ["pregunta" => "Último zar de Rusia", "opciones" => ["Pedro el Grande","Iván IV","Nicolás II","Alejandro III"], "correcta" => "Nicolás II"],
        ["pregunta" => "¿Quién inventó la escritura cuneiforme?", "opciones" => ["Egipcios","Mesopotámicos","Fenicios","Chinos"], "correcta" => "Mesopotámicos"]
    ],
    "biologia" => [
        ["pregunta" => "Molécula portadora de la información genética", "opciones" => ["ARN","Proteína","ADN","Lípido"], "correcta" => "ADN"],
        ["pregunta" => "¿Qué orgánulo produce energía?", "opciones" => ["Mitocondria","Cloroplasto","Núcleo","Ribosoma"], "correcta" => "Mitocondria"],
        ["pregunta" => "Proceso por el cual las plantas producen alimento", "opciones" => ["Respiración","Digestión","Fotosíntesis","Fermentación"], "correcta" => "Fotosíntesis"],
        ["pregunta" => "Unidad básica de la vida", "opciones" => ["Tejido","Célula","Órgano","Molécula"], "correcta" => "Célula"],
        ["pregunta" => "Conjunto de reacciones químicas en un ser vivo", "opciones" => ["Catabolismo","Anabolismo","Metabolismo","Digestión"], "correcta" => "Metabolismo"],
        ["pregunta" => "Órgano más grande del cuerpo humano", "opciones" => ["Cerebro","Hígado","Piel","Pulmones"], "correcta" => "Piel"],
        ["pregunta" => "Gas que inhalamos en la respiración", "opciones" => ["CO2","O2","N2","H2"], "correcta" => "O2"],
        ["pregunta" => "Células sexuales", "opciones" => ["Neuronas","Glóbulos rojos","Gametos","Plaquetas"], "correcta" => "Gametos"],
        ["pregunta" => "Tipo de sangre donante universal", "opciones" => ["A","B","AB","O-"], "correcta" => "O-"],
        ["pregunta" => "Descubridores de la estructura del ADN", "opciones" => ["Watson y Crick","Darwin y Wallace","Mendel y Pasteur","Newton y Galileo"], "correcta" => "Watson y Crick"]
    ]
];

        if (!$asignatura || !isset($preguntasRepo[$asignatura])) {
        echo "<p style='color:red;'>❌ Debes seleccionar una asignatura válida.</p>";
    } elseif ($numPreguntas <= 0 || $numPreguntas > 5) {
        echo "<p style='color:red;'>❌ El número de preguntas debe ser mayor que 0 y máximo 5.</p>";
    } else {
        $preguntas = $preguntasRepo[$asignatura];
        shuffle($preguntas);
        $seleccionadas = array_slice($preguntas, 0, $numPreguntas);

        // Guardar respuestas correctas en campos ocultos
        echo "<h2>Test de " . ($asignatura) . "</h2>";
        echo "<form action='procesarTest.php' method='POST'>";
        
        foreach ($seleccionadas as $i => $pregunta) {
            echo "<p>" . ($i+1) . ". " . $pregunta['pregunta'] . "</p>";
            foreach ($pregunta["opciones"] as $opcion) {
                echo "<label><input type='radio' name='respuesta[$i]' value='$opcion' required> $opcion</label><br>";
            }
            // Guardar la respuesta correcta en hidden
            echo "<input type='hidden' name='correcta[$i]' value='" . $pregunta["correcta"] . "'>";
        }

        echo "<br><input type='submit' value='Corregir'>";
        echo "</form>";
    }



?>
