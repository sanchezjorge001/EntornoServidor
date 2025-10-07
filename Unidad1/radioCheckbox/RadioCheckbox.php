<?php

    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $edad = $_POST["edad"];
    $peso = $_POST["peso"];
    $sexo = $_POST["sexo"];
    $estadoCivil = $_POST["estadoCivil"];
    $aficiones = $_POST["aficiones"];

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Formulario</title>
</head>
<body>
    <?php
        if (!empty($nombre) && !empty($apellidos)){
            echo "<h1>".$nombre."  ".$apellidos. "</h1>";
        } else
            echo "No ha introducido el nombre y/o apellidos"
        ;
            

         
        echo "<p>". " Tiene ". $edad. " años, pesa ". $peso. " kilos,". " es ". $sexo." y esta ". $estadoCivil."</p>";
        echo "<h3>". "Aficiones". "</h3>";
        
        if (!empty($aficiones) && is_array($aficiones)) {
            echo "<ul>";

            for ($i = 0; $i < count($aficiones); $i++) {
                echo "<li>" . htmlspecialchars($aficiones[$i]) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No indicó aficiones.</p>";
        }

    ?>
</body>
</html>