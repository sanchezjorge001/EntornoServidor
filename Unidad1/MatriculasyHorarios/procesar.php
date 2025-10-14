<?php

require_once "horario.php"; // incluye el archivo que define $horario, $diasSemana, $horasHorario, etc.

/**
 * Devuelve la duración en horas (float) entre $horaInicio y $horaFin.
 * Usa strtotime para convertir cadenas "HH:MM" a timestamps y divide por 3600.
 */
function calcularDuracionHoras($horaInicio, $horaFin){
    return (strtotime($horaFin) - strtotime($horaInicio) ) / 3600;
}

/**
 * Busca qué asignatura se está dando en $dia a la hora $horaInicio.
 * - $horaInicio se pasa como "HH:MM"
 * - Se eliminan los ":" para comparar como enteros (p. ej. "08:30" -> "0830")
 * - Recorre todo $horario y, si una asignatura tiene hueco en ese día,
 *   compara si la hora está entre inicio (incluido) y fin (excluido).
 * - Si una asignatura tiene segunda franja (indices 2 y 3) también la comprueba.
 * - Devuelve nombre de asignatura o cadena vacía si no hay nada.
 */
function encontrarAsignatura($dia, $horaInicio){
    global $horario;
    $asignatura = "";
    $horaInicio = str_replace(":", "", $horaInicio); // "08:30" -> "0830"

    foreach ($horario as $asignaturaIterada => $horarioAsignatura) {
        if(isset($horarioAsignatura[$dia])){ // ¿esta asignatura tiene horario para ese día?
            // primera franja de horario [0]=inicio, [1]=fin
            $horaInicioAsignatura = str_replace(":", "", $horarioAsignatura[$dia][0]);
            $horaFinAsignatura = str_replace(":", "", $horarioAsignatura[$dia][1]);

            if($horaInicio >= $horaInicioAsignatura && $horaInicio < $horaFinAsignatura){
                $asignatura = $asignaturaIterada;
            }

            // si hay segunda franja [2]=inicio2, [3]=fin2 la comprobamos también
            if (isset($horarioAsignatura[$dia][2])) {
                $horaInicioAsignatura = str_replace(":", "", $horarioAsignatura[$dia][2]);
                $horaFinAsignatura = str_replace(":", "", $horarioAsignatura[$dia][3]);

                if($horaInicio >= $horaInicioAsignatura && $horaInicio < $horaFinAsignatura){
                    $asignatura = $asignaturaIterada;
                }
            }
        }
    }

    return $asignatura;
}

// lectura de asignaturas enviadas desde el formulario (POST)
$asignaturasMatriculadas = $_POST["asignaturas"];
$horasSemanales = 0;

echo "<h1> Tu horario semanal </h1>";

// Recorremos cada asignatura que el usuario indicó que ha matriculado
foreach ($asignaturasMatriculadas as $asignatura) {
    echo "La asignatura $asignatura tiene este horario:";

    echo "<ul>";
    
    // Recorremos el horario de esa asignatura: por cada día => array de horas
    foreach ($horario[$asignatura] as $dia => $horas) {

        $horaInicio = $horas[0];
        $horaFin = $horas[1];

        // acumulamos horas semanales (primera franja)
        $horasSemanales += calcularDuracionHoras($horaInicio, $horaFin);
        
        // si existe una segunda franja añadimos su duración y la mostramos
        if(isset($horas[2]) && isset($horas[3])){
            $horaInicio2 = $horas[2]; 
            $horaFin2 = $horas[3]; 

            $horasSemanales += calcularDuracionHoras($horaInicio2, $horaFin2);

            echo "<li>$dia de $horaInicio a $horaFin y de $horaInicio2 a $horaFin2</li>";
        }else{
            echo "<li>$dia de $horaInicio a $horaFin</li>";
        }   
  
    }

    echo "</ul>";
}

// mostramos total de horas semanales matriculadas
echo "<h3> Te has matriculado de $horasSemanales horas a la semana </h3>";

?>

<!-- Generación de la tabla visual del horario (matriz horas x días) -->
<table border=1>
    <thead>
        <tr>
            <th></th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // $horasHorario se asume definido en horario.php como lista de franjas horarias [[inicio,fin],...]
        foreach ($horasHorario as $hora) {
            $horaInicio = $hora[0];
            $horaFin = $hora[1];

            echo "<tr><td>$horaInicio - $horaFin</td>";

            // por cada día de la semana preguntamos qué asignatura toca en esa franja
            foreach ($diasSemana as $dia) {
                $asignaturaQueToca = encontrarAsignatura($dia, $horaInicio);
                if(in_array($asignaturaQueToca, $asignaturasMatriculadas)){
                    // si la asignatura está matriculada la pintamos en la celda
                    echo "<td class='$asignaturaQueToca'>$asignaturaQueToca</td>";
                }else{
                    echo "<td class='vacio'></td>";
                }
                
            }

            echo "</tr>";
        }
        ?>
    </tbody>
</table>
