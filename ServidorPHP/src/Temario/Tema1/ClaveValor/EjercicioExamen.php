<?php
/*
EJERCICIO DE EXAMEN: ARRAYS ASOCIATIVOS EN PHP

Este programa demuestra:
1. Array asociativo simple (clave => valor).
2. Cómo añadir y modificar elementos.
3. Array asociativo anidado (arrays dentro de un array).
4. Array multidimensional (varios registros tipo tabla).
5. Cómo recorrer e imprimir todos ellos.
*/


// 1. ARRAY ASOCIATIVO SIMPLE
$edades = array(
    "Juan" => 33,
    "Nina" => 34,
    "Pedro" => 28
);

// 2. AÑADIR Y MODIFICAR
$edades["Lucia"] = 25;   // Añadir nueva persona
$edades["Juan"] = 40;    // Modificar la edad de Juan

echo "<h3>Array asociativo simple</h3>";
foreach($edades as $nombre => $edad) {
    echo "Nombre: $nombre - Edad: $edad <br>";
}



// 3. ARRAY ASOCIATIVO ANIDADO
/*
Aquí cada persona tiene varios datos (edad y ciudad).
Es un array dentro de otro array.
*/
$personas = array(
    "Juan" => array("edad" => 40, "ciudad" => "Madrid"),
    "Nina" => array("edad" => 34, "ciudad" => "Sevilla"),
    "Pedro" => array("edad" => 28, "ciudad" => "Bilbao"),
    "Lucia" => array("edad" => 25, "ciudad" => "Valencia")
);

echo "<h3>Array asociativo anidado</h3>";
foreach($personas as $nombre => $datos) {
    echo "Nombre: $nombre <br>";
    foreach($datos as $clave => $valor) {
        echo "$clave : $valor <br>";
    }
    echo "<br>";
}



// 4. ARRAY MULTIDIMENSIONAL
/*
Es como una tabla: cada posición numérica guarda un array asociativo.
Aquí cada alumno tiene nombre, edad y nota.
*/
$alumnos = array(
    array("nombre" => "Juan", "edad" => 40, "nota" => 7.5),
    array("nombre" => "Nina", "edad" => 34, "nota" => 8.0),
    array("nombre" => "Pedro", "edad" => 28, "nota" => 6.9),
    array("nombre" => "Lucia", "edad" => 25, "nota" => 9.2)
);

echo "<h3>Array multidimensional</h3>";
foreach($alumnos as $alumno) {
    echo "Nombre: " . $alumno["nombre"] . 
         " - Edad: " . $alumno["edad"] . 
         " - Nota: " . $alumno["nota"] . "<br>";
}
?>
