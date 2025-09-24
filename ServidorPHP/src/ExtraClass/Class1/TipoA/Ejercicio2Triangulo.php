<?php

// Ejercicio 2: Determinar tipo de triángulo según sus lados

function tipoTriangulo($a, $b, $c){
    // Si la suma de dos lados es menor o igual al tercer lado → no es un triángulo
    if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
        return "No es un triángulo";
    }
    // Si los tres lados son iguales → equilátero
    elseif ($a == $b && $b == $c) {
        return "Equilátero";
    }
    // Si dos lados son iguales → isósceles
    elseif ($a == $b || $a == $c || $b == $c) {
        return "Isósceles";
    }
    // Si todos los lados son distintos → escaleno
    else {
        return "Escaleno";
    }
}

// Pruebas con diferentes lados
var_dump(tipoTriangulo(3, 3, 3));  // Equilátero
var_dump(tipoTriangulo(3, 3, 5));  // Isósceles
var_dump(tipoTriangulo(3, 4, 5));  // Escaleno
var_dump(tipoTriangulo(1, 2, 8));  // No es un triángulo

// Resultados por pantalla
echo tipoTriangulo(3, 3, 3) . "<br/>";  // Equilátero
echo tipoTriangulo(3, 3, 5) . "<br/>";  // Isósceles
echo tipoTriangulo(3, 4, 5) . "<br/>";  // Escaleno
echo tipoTriangulo(1, 2, 8) . "<br/>";  // No es un triángulo



?>
