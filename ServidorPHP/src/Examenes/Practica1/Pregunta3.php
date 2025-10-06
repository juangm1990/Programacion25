<?php
// Ejercicio 3. Calcular el precio final aplicando IVA y código promocional

$base = 25;           // Base imponible
$iva = "reducido";    // Tipo de IVA: general, reducido o superreducido
$promo = "mitad";     // Código promocional: nopromo, mitad, menos5 o 5porc

// Calcular el porcentaje de IVA
if ($iva == "general") {
    $ivaPorc = 21;
} elseif ($iva == "reducido") {
    $ivaPorc = 10;
} else {
    $ivaPorc = 4;
}

// Calcular el precio con IVA
$precioConIVA = $base + ($base * $ivaPorc / 100);

// Aplicar el código promocional
if ($promo == "nopromo") {
    $total = $precioConIVA;
} elseif ($promo == "mitad") {
    $total = $precioConIVA / 2;
} elseif ($promo == "menos5") {
    $total = $precioConIVA - 5;
} else {
    $total = $precioConIVA - ($precioConIVA * 0.05);
}

// Mostrar el resultado
echo "Base imponible: " . $base . " €<br>";
echo "IVA (" . $ivaPorc . "%): " . ($base * $ivaPorc / 100) . " €<br>";
echo "Precio con IVA: " . $precioConIVA . " €<br>";
echo "Código promocional: " . $promo . "<br>";
echo "Total: " . $total . " €<br>";
?>
