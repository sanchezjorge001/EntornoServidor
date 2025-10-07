<?php 

    $respuestasUsuarios = $_POST["respuesta"];
    $respuestasCorrectas = $_POST["correcta"];


    $aciertos = 0;
    $fallos = 0;


    foreach ($respuestasCorrectas as $i => $correcta){
        if(isset($respuestasUsuarios[$i]) && $respuestasUsuarios[$i] == $correcta){
            $aciertos++;
        } else {
            $fallos++;
        }
    }

    $total = count($respuestasCorrectas);
    $nota = ($aciertos / $total) *10;

    echo "<h3>Resultados del test<h3/>";
    echo "<p>-------------------------</p>";
    echo "<p> Numero de aciertos: $aciertos </p>";
    echo "<p> Numero de fallos: $fallos </p>";
    echo "<p> Nota Final: $nota </p>";