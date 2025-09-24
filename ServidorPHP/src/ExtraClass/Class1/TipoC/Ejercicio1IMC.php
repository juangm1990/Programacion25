<?php
// Pedir peso y altura
$peso = (float) readline("Introduce el peso en kg: ");
$altura = (float) readline("Introduce la altura en metros: ");

// Calcular IMC
$imc = $peso / ($altura * $altura);

// Determinar situación
if ($imc < 18.5) {
    $situacion = "Bajo peso";
} elseif ($imc >= 18.5 && $imc < 25) {
    $situacion = "Normopeso";
} elseif ($imc >= 25 && $imc < 27) {
    $situacion = "Sobrepeso grado I";
} elseif ($imc >= 27 && $imc < 30) {
    $situacion = "Sobrepeso grado II";
} elseif ($imc >= 30 && $imc < 35) {
    $situacion = "Obesidad de tipo I";
} elseif ($imc >= 35 && $imc < 40) {
    $situacion = "Obesidad de tipo II";
} elseif ($imc >= 40 && $imc < 50) {
    $situacion = "Obesidad de tipo III (mórbida)";
} else {
    $situacion = "Obesidad de tipo IV (extrema)";
}

// Mostrar resultado
echo "Tu IMC es: " . $imc . "\n";
echo "Situación: " . $situacion . "\n";
?>
