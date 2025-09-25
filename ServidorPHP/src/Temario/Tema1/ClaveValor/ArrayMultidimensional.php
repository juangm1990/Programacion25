<?php
$alumnos = array(
    array("nombre" => "Juan", "edad" => 33, "nota" => 7.5),
    array("nombre" => "Nina", "edad" => 34, "nota" => 8.0),
    array("nombre" => "Pedro", "edad" => 28, "nota" => 6.9)
);

// Acceder a un valor
echo $alumnos[1]["nombre"]; // Muestra: Nina

// Recorrer el array multidimensional
foreach($alumnos as $alumno) {
    echo "Nombre: " . $alumno["nombre"] . " - Edad: " . $alumno["edad"] . " - Nota: " . $alumno["nota"] . "<br>";
}
?>
