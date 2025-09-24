<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, tr {
            border: 1px solid black;
            padding: 5px;
        }

    </style>
</head>
<body>

    <?php

        $personas = ["p1" => ["nombre" => "Chris", "edad" => 38], "p2" => ["nombre" => "Dennis", "edad" => 43] , ];

    ?>
    
    <table>
        <tr>
            <td>Person</td>
            <td>Age</td>
    
        </tr>

            <?php

        foreach ($personas as $key => $valor) {

            echo "<tr>";

            echo "<td> $valor[nombre] </td>";
            echo "<td> $valor[edad] </td>";

            echo "</tr>";
        }

        /*
        foreach ($personas as $key => $valor) {

            echo "<tr>";

            echo "<td>" .$valor['nombre']. "</td>";
            echo "<td>" .$valor['edad']. "</td>";

            echo "</tr>";
        }
        */

    ?>



    </table>




</body>
</html>