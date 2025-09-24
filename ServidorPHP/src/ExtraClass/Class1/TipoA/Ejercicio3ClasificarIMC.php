<?php

// Ejercicio: Calcular el IMC y clasificarlo según su valor

function calcularIMC($peso, $altura){
    $imc = $peso / ($altura * $altura);

    if ($imc < 18.5) {
        return "Bajo peso";
    } elseif ($imc >= 18.5 && $imc < 25) {
        return "Peso normal";
    } elseif ($imc >= 25 && $imc < 30) {
        return "Sobrepeso";
    } elseif ($imc >= 30) {
        return "Obesidad";
    } else {
        return "Valor no válido";
    }
}

// Pruebas con distintos pesos y alturas usando var_dump (opcional)
var_dump(calcularIMC(60, 1.70));   // Peso normal
var_dump(calcularIMC(45, 1.60));   // Bajo peso
var_dump(calcularIMC(80, 1.70));   // Sobrepeso
var_dump(calcularIMC(100, 1.65));  // Obesidad

// Resultados por pantalla (para examen)
echo calcularIMC(60, 1.70) . "<br/>";
echo calcularIMC(45, 1.60) . "<br/>";
echo calcularIMC(80, 1.70) . "<br/>";
echo calcularIMC(100, 1.65) . "<br/>";

?>
