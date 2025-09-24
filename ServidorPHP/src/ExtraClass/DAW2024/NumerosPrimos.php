<?php
// Array original
$numerosOriginales = array(10, 13, 7, 18, 25, 3, 19, 11, 4);

// Array donde guardaremos solo los primos
$numerosPrimos = array();

// Recorremos cada número
foreach ($numerosOriginales as $numero) {
    $esPrimo = true;

    // Los menores o iguales que 1 no son primos
    if ($numero <= 1) {
        $esPrimo = false;
    } else {
        // Comprobamos si es divisible por algún número entre 2 y (numero-1)
        for ($divisor = 2; $divisor < $numero; $divisor = $divisor + 1) {
            if ($numero % $divisor == 0) {
                $esPrimo = false;
                break;
            }
        }
    }

    // Si es primo, lo guardamos en el nuevo array
    if ($esPrimo) {
        $numerosPrimos[] = $numero;
    }
}

// Mostramos los resultados
echo "Los números primos son: ";
foreach ($numerosPrimos as $numeroPrimo) {
    echo $numeroPrimo . " ";
}

echo "<br>";

?>
