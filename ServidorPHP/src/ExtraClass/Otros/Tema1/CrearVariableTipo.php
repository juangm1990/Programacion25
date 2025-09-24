<?php
// Variables de distintos tipos
$edad = 25;                 // Integer
$altura = 1.75;             // Float
$activo = true;             // Boolean
$nombre = "Juan";           // String
$sinValor = null;           // Null
$frutas = array("Manzana", "Pera", "Plátano"); // Array

// Mostrar valores y tipos
echo "Variable edad (integer): " . $edad;
echo "Variable altura (float): " . $altura;
echo "Variable activo (boolean): " . $activo; // true se mostrará como 1
echo "Variable nombre (string): " . $nombre;
echo "Variable sinValor (null): " . $sinValor;
echo "Variable frutas (array): ";
print_r($frutas); // Para mostrar arrays se usa print_r
?>
