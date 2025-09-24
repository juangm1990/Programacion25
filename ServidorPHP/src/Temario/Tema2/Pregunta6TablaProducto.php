<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tabla sencilla</title>
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
    array("producto" => "Destornillador", "cantidad" => 1, "precio" => 3),
    array("producto" => "Llave inglesa", "cantidad" => 2, "precio" => 5),
    array("producto" => "Martillo", "cantidad" => 1, "precio" => 7)
);

$sumaTotal = 0;
?>

<table>
    <tr>
        <td>Producto</td>
        <td>Cantidad</td>
        <td>Precio</td>
    </tr>

    <?php
    foreach ($productos as $productoActual) {
        echo "<tr>";
        echo "<td>" . $productoActual["producto"] . "</td>";
        echo "<td>" . $productoActual["cantidad"] . "</td>";
        echo "<td>" . $productoActual["precio"] . "</td>";
        echo "</tr>";

        $precioPorProducto = $productoActual["cantidad"] * $productoActual["precio"];
        $sumaTotal = $sumaTotal + $precioPorProducto;
    }
    ?>

    <tr>
        <td>Total</td>
        <td colspan="2"><?php echo $sumaTotal; ?></td>
    </tr>
</table>

</body>
</html>
