<?php
$edades = array(
    "Juan" => 33,
    "Nina" => 34,
    "Pedro" => 28
);

echo $edades["Nina"]; // Muestra: 34


?>


Añadir o modificar valores

$edades["Lucia"] = 25;   // Añadir nueva clave
$edades["Juan"] = 40;    // Modificar valor de una clave existente

Recorrer un array asociativo con foreach

foreach($edades as $nombre => $edad) {
    echo "Nombre: $nombre - Edad: $edad <br>";
}



