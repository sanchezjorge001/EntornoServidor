<?php
$horarios = [
    "Matemáticas" => [
        "horario" => "Lunes y Miércoles - 10:00 a 11:30",
        "horas"   => 3  
    ],
    "Historia" => [
        "horario" => "Martes y Jueves - 12:00 a 13:30",
        "horas"   => 3.5
    ],
    "Física" => [
        "horario" => "Lunes y Viernes - 14:00 a 15:30",
        "horas"   => 3
    ],
    "Programación" => [
        "horario" => "Miércoles y Viernes - 16:00 a 18:00",
        "horas"   => 4  
    ],
    "Inglés" => [
        "horario" => "Martes y Jueves - 09:00 a 10:30",
        "horas"   => 3.5
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horarios</title>
</head>
<body>
    <h2>Horarios de clase</h2>

    <?php
    if (isset($_POST['asignaturas'])) {
        $seleccionadas = $_POST['asignaturas'];
        $totalHoras = 0;
        echo "<ul>";
        foreach ($seleccionadas as $asignatura) {
            if (isset($horarios[$asignatura])) {
                echo "<li><strong>$asignatura:</strong> " . $horarios[$asignatura] . "</li>";
                $totalHoras += $horarios[$asignatura]["horas"];
            }
        }
        echo "</ul>";
        echo "<p>Total de horas semanales: $totalHoras horas </p>";
    } else {
        echo "<p>No ha seleccionado ninguna asignatura.</p>";
    }
    ?>

    <br>
    <a href="index.html">Volver</a>
</body>
</html>
