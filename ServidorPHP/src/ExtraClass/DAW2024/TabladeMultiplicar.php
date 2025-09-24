<?php
// Array con las tablas que queremos mostrar
$numeros = array(4, 5, 10, 2, 3);

// Recorremos cada número del array
foreach ($numeros as $numero) {
    echo "La tabla del " . $numero . " es:";
    
    // Generamos la tabla de multiplicar del 0 al 10
    for ($i = 0; $i <= 10; $i = $i + 1) {
        $resultado = $numero * $i;
        echo $numero . " x " . $i . " = " . $resultado;
    }
}
?>
