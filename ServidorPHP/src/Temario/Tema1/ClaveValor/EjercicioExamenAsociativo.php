<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tabla de alumnos</title>
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
// Array multidimensional con alumnos
$alumnos = array(
    array("nombre" => "Juan", "edad" => 40, "nota" => 7.5),
    array("nombre" => "Nina", "edad" => 34, "nota" => 8.0),
    array("nombre" => "Pedro", "edad" => 28, "nota" => 6.9),
    array("nombre" => "Lucia", "edad" => 25, "nota" => 9.2)
);

// Inicializamos suma de notas
$sumaNotas = 0;
?>

<h2>Listado de alumnos</h2>

<!-- TABLA -->
<table>
    <tr>
        <th>Nombre</th>
        <th>Edad</th>
        <th>Nota</th>
    </tr>

    <?php
    foreach ($alumnos as $alumno) {
        echo "<tr>";
        echo "<td>" . $alumno["nombre"] . "</td>";
        echo "<td>" . $alumno["edad"] . "</td>";
        echo "<td>" . $alumno["nota"] . "</td>";
        echo "</tr>";

        // Mostrar la media del alumno (igual a su nota en este caso)
        echo "<tr>";
        echo "<td colspan='2'><b>Nota media de " . $alumno["nombre"] . "</b></td>";
        echo "<td>" . $alumno["nota"] . "</td>";
        echo "</tr>";

        // Acumular la nota para la media global
        $sumaNotas = $sumaNotas + $alumno["nota"];
    }

    // Calcular media global
    $mediaGlobal = $sumaNotas / count($alumnos);
    ?>

    <tr>
        <td colspan="2"><b>Nota media global</b></td>
        <td><?php echo number_format($mediaGlobal, 2); ?></td>
    </tr>
</table>

<!-- TEXTO EXPLICATIVO PARA CADA ALUMNO -->
<h2>Explicación individual</h2>
<?php
foreach ($alumnos as $alumno) {
    echo "<p><b>" . $alumno["nombre"] . "</b> tiene una edad de " . $alumno["edad"] . 
         ".<br> Su nota es " . $alumno["nota"] . 
         ".<br> Su nota media es " . $alumno["nota"] . ".</p>";
}
?>

<!-- MEDIA GLOBAL FUERA DE LA TABLA -->
<p><b>La nota media global de todos los alumnos es:</b> <?php echo number_format($mediaGlobal, 2); ?></p>

</body>
</html>
