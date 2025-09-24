<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tabla de productos</title>
    <style>
        table, td, tr {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>

<?php
$productos = array(
    array("nombre" => "Reproductor MP3 (80 GB)", "precio" => 192.02, "unidades" => 1),
    array("nombre" => "Fundas de colores", "precio" => 2.50, "unidades" => 5),
    array("nombre" => "Reproductor de radio & control remoto", "precio" => 12.99, "unidades" => 1)
);

$sumaTotal = 0;
$sumaUnidades = 0;
?>

<table>
    <tr>
        <td>Nombre producto</td>
        <td>Precio unitario</td>
        <td>Unidades</td>
        <td>Subtotal</td>
    </tr>

    <?php
    foreach ($productos as $productoActual) {
        $subtotal = $productoActual["precio"] * $productoActual["unidades"];
        $sumaTotal = $sumaTotal + $subtotal;
        $sumaUnidades = $sumaUnidades + $productoActual["unidades"];

        echo "<tr>";
        echo "<td>" . $productoActual["nombre"] . "</td>";
        echo "<td>" . number_format($productoActual["precio"], 2) . "</td>";
        echo "<td>" . $productoActual["unidades"] . "</td>";
        echo "<td>" . number_format($subtotal, 2) . "</td>";
        echo "</tr>";
    }
    ?>

    <tr>
        <td>TOTAL</td>
        <td>-</td>
        <td><?php echo $sumaUnidades; ?></td>
        <td><?php echo number_format($sumaTotal, 2); ?></td>
    </tr>
</table>

</body>
</html>
