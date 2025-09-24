<?php
// Array original
$numerosOriginales = array(10, 13, 7, 18, 25, 3, 19, 11, 4);

// Array para guardar los pares
$numerosPares = array();

// Recorremos cada número
foreach ($numerosOriginales as $numero) {
    if ($numero % 2 == 0) { // Si es divisible entre 2 → es par
        $numerosPares[] = $numero;
    }
}

// Mostramos el resultado
echo "Los números pares son: ";
foreach ($numerosPares as $numeroPar) {
    echo $numeroPar . " ";
}

echo "<br>";

?>
