<?php
// Array original
$numerosOriginales = array(10, 13, 7, 18, 25, 3, 19, 11, 4);

// Array para guardar los impares
$numerosImpares = array();

// Recorremos cada número
foreach ($numerosOriginales as $numero) {
    if ($numero % 2 != 0) { // Si NO es divisible entre 2 → es impar
        $numerosImpares[] = $numero;
    }
}

// Mostramos el resultado
echo "Los números impares son: ";
foreach ($numerosImpares as $numeroImpar) {
    echo $numeroImpar . " ";
}
echo "<br>";

?>
