<?php
// ======================================================
// CONVERSIÓN DE TIPOS
// ======================================================

// intval()   → convierte a entero
// floatval() → convierte a número decimal (float)
// strval()   → convierte a cadena (string)

$textoNumero = "123";
$entero = intval($textoNumero);
echo "String original: " . $textoNumero;
echo "Convertido a entero: " . $entero;

$decimal = 45.67;
$entero2 = intval($decimal);
echo "Float original: " . $decimal;
echo "Convertido a entero: " . $entero2;

$edad = 30;
$edadTexto = strval($edad);
echo "Entero original: " . $edad;
echo "Convertido a string: " . $edadTexto;

$activo = true;
$activoTexto = strval($activo);
echo "Boolean original (true): " . $activo;
echo "Convertido a string: " . $activoTexto;

// ======================================================
// COMPROBACIÓN DE TIPOS
// ======================================================

// is_numeric() → comprueba si es número
// is_string()  → comprueba si es cadena
// is_array()   → comprueba si es array
// is_null()    → comprueba si es null

$valor1 = "123";
$valor2 = 45.6;
$valor3 = array(1,2,3);
$valor4 = null;

if (is_numeric($valor1)) {
    echo "valor1 es numérico";
}
if (is_string($valor1)) {
    echo "valor1 es un string";
}
if (is_numeric($valor2)) {
    echo "valor2 es numérico";
}
if (is_array($valor3)) {
    echo "valor3 es un array";
}
if (is_null($valor4)) {
    echo "valor4 es null";
}
?>
