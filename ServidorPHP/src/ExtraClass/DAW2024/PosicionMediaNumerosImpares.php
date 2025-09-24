<?php
// Creamos el array vacío
$numeros = array();
$suma = 0;
$contador = 0;

// Pedir 10 números al usuario
echo "Introduce 10 números enteros:";
for ($i = 0; $i < 10; $i = $i + 1) {
    echo "Número " . ($i + 1) . ": ";
    $entrada = trim(fgets(STDIN));
    $numeros[$i] = (int)$entrada;
}

// Mostrar posiciones impares y calcular la suma
echo "Números en posiciones impares:";
for ($i = 1; $i < count($numeros); $i = $i + 2) {
    echo "Posición " . $i . " → " . $numeros[$i];
    $suma = $suma + $numeros[$i];
    $contador = $contador + 1;
}

// Calcular y mostrar la media
if ($contador > 0) {
    $media = $suma / $contador;
    echo "La media de los números en las posiciones impares es: " . $media;
} else {
    echo "No hay números en posiciones impares.";
}
?>

