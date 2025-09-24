<?php

/*
Ejercicio 2: Número más repetido en un array
==============================
Dado un array de enteros en el rango 0–9, encontrar:
1. El número que más veces aparece
2. Cuántas veces aparece en la secuencia
*/

// Array 
$arrayNumeros = [9,1,1,1,4,2,1,2,1,2,2,2];

// Variables 
$numeroMasVecesRepetido = 0;    // El número que más veces aparece
$numeroDeRepeticiones = 0;      // Cuántas veces aparece ese número

// Primer bucle: recorro el array número a número
for ($i = 0; $i < count($arrayNumeros); $i++) {
    $contador = 0;  // Contar cuántas veces aparece el número actual

    // Segundo bucle: comparar el número con todos los demás
    for ($j = 0; $j < count($arrayNumeros); $j++) {
        if ($arrayNumeros[$i] == $arrayNumeros[$j]) {
            $contador = $contador + 1;
        }
    }

    // Si este número aparece más veces que el guardado antes, lo actualizamos
    if ($contador > $numeroDeRepeticiones) {
        $numeroDeRepeticiones = $contador;    
        $numeroMasVecesRepetido = $arrayNumeros[$i];      
    }
}

// Salida
echo "El valor que más veces aparece es el $numeroMasVecesRepetido.<br/>";
echo "Se ha repetido $numeroDeRepeticiones veces.";

?>
