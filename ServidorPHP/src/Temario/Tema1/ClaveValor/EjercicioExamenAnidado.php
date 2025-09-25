<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio: Array anidado</title>
    <style>
        table, td, th {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
/*
EJERCICIO: ARRAY ASOCIATIVO ANIDADO
Cada persona tiene varios datos (edad, ciudad, profesión).
*/

// Array anidado
$personas = array(
    "Juan" => array("edad" => 40, "ciudad" => "Madrid", "profesion" => "Programador"),
    "Nina" => array("edad" => 34, "ciudad" => "Sevilla", "profesion" => "Diseñadora"),
    "Pedro" => array("edad" => 28, "ciudad" => "Bilbao", "profesion" => "Profesor")
);

echo "<h2>Array Asociativo Anidado</h2>";

echo "<table>";
echo "<tr><th>Nombre</th><th>Edad</th><th>Ciudad</th><th>Profesión</th></tr>";

// Recorrer el array anidado para la tabla
foreach ($personas as $nombre => $datos) {
    echo "<tr>";
    echo "<td>$nombre</td>";
    echo "<td>" . $datos["edad"] . "</td>";
    echo "<td>" . $datos["ciudad"] . "</td>";
    echo "<td>" . $datos["profesion"] . "</td>";
    echo "</tr>";
}
echo "</table>";


// Mostrar datos individuales en párrafos
echo "<h2>Datos individuales</h2>";
foreach ($personas as $nombre => $datos) {
    echo "<p><b>$nombre</b> tiene una edad de " . $datos["edad"] . 
         ", vive en " . $datos["ciudad"] . 
         " y trabaja como " . $datos["profesion"] . ".</p>";
}
?>

</body>
</html>
