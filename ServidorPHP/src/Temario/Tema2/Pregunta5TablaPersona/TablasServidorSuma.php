<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        td,
        tr {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>

<body>

    <?php
    $personas = [
        "p1" => ["datos" => ["nombre" => "Chris", "edad" => 38]],
        "p2" => ["datos" => ["nombre" => "Juan", "edad" => 42]]
    ];
    ?>

    <table>
        <tr>
            <td>Person</td>
            <td>Age</td>
        </tr>

        <?php
        $suma = 0;
        $contador = 0;

        foreach ($personas as $datos) {
            foreach ($datos as $valor) {
                echo "<tr>";
                echo "<td>" . $valor['nombre'] . "</td>";
                echo "<td>" . $valor['edad'] . "</td>";
                echo "</tr>";

                // vamos acumulando
                $suma = $suma + $valor['edad'];
                $contador = $contador + 1;
            }
        }

        $media = $suma / $contador;
        ?>

    </table>

    <p>
        <b>Suma total de edades:</b> 

        <?php 
            echo $suma; 
        ?>

    </p>
    <p>
        <b>Media de edades:</b> 
        
        <?php 
            echo $media; 
        ?>
    </p>

</body>

</html>
