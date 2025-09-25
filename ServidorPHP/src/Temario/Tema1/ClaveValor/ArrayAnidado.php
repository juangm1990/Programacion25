<?php
$personas = array(
    "Juan" => array(
        "edad" => 33,
        "ciudad" => "Madrid"
    ),
    "Nina" => array(
        "edad" => 34,
        "ciudad" => "Sevilla"
    )
);

// Acceder a un valor anidado
echo $personas["Nina"]["ciudad"]; // Muestra: Sevilla

// Recorrer el array anidado
foreach($personas as $nombre => $datos) {
    echo "Nombre: $nombre <br>";
    foreach($datos as $clave => $valor) {
        echo "$clave : $valor <br>";
    }
    echo "<br>";
}
?>
