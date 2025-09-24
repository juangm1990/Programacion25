<?php
$secuencia = [9,1,1,1,4,2,1,2,1,2,2,2,2];

$contadorMax = 0; 
$numeroMax = null;

// Recorremos cada número
for ($i = 0; $i < count($secuencia); $i++) {
    $contador = 0;

    // Contar cuántas veces aparece este número en el array
    for ($j = 0; $j < count($secuencia); $j++) {
        if ($secuencia[$i] == $secuencia[$j]) {
            $contador = $contador + 1;
        }
    }

    // Guardar si este número se repite más que los anteriores
    if ($contador > $contadorMax) {
        $contadorMax = $contador;
        $numeroMax = $secuencia[$i];
    }
}

// Mostrar resultado
echo "El valor que más ocurrencias tiene es: " . $numeroMax . "\n";
echo "Se ha encontrado " . $contadorMax . " veces.\n";
?>
