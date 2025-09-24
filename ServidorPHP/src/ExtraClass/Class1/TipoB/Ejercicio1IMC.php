<?php

// Ejercicio: Calcular IMC y mostrar clasificación según tabla oficial

function calcularIMC($peso, $altura) {

    $indiceMasaMuscular = $peso / ($altura * $altura);

    // Para redondear el número entero utilizar round --> echo "Tu IMC es: " . round($imc, 2) . "<br/>";
    echo "Tu IMC es: " . $indiceMasaMuscular . "<br/>";


    if ($indiceMasaMuscular < 18.5) {
        echo "Situación: Bajo peso";
    } elseif ($indiceMasaMuscular >= 18.5 && $indiceMasaMuscular <= 24.9) {
        echo "Situación: Normopeso";
    } elseif ($indiceMasaMuscular >= 25 && $indiceMasaMuscular <= 26.9) {
        echo "Situación: Sobrepeso grado I";
    } elseif ($indiceMasaMuscular >= 27 && $indiceMasaMuscular <= 29.9) {
        echo "Situación: Sobrepeso grado II";
    } elseif ($indiceMasaMuscular >= 30 && $indiceMasaMuscular <= 34.9) {
        echo "Situación: Obesidad de tipo I";
    } elseif ($indiceMasaMuscular >= 35 && $indiceMasaMuscular <= 39.9) {
        echo "Situación: Obesidad de tipo II";
    } elseif ($indiceMasaMuscular >= 40 && $indiceMasaMuscular <= 49.9) {
        echo "Situación: Obesidad de tipo III (mórbida)";
    } else {
        echo "Situación: Obesidad de tipo IV (extrema)";
    }
}

// Salida 
echo calcularIMC(70, 1.75); 

?>
