<?php
    $varTexto = "hola";     // Cadena de texto
    $varEntero = 1234;      // Entero
    $varBoolean = true;     // Boolean
    $varFloat = 1.2;        // Float
    $varArray = array("1", "2"); // Array

    /* Para introducir un salto de carro y ser mostrado por pantalla utilizamos <br/> */

    echo "Variable de tipo cadena de texto: " . $varTexto . "<br/>";
    echo "Variable de tipo entero: " . $varEntero . "<br/>";
    echo "Variable de tipo boolean: " . $varBoolean . "<br/>";
    echo "Variable de tipo float: " . $varFloat . "<br/>";
    echo "Variable de tipo compuesto: ";

    print_r($varArray); // La función print_r es la utilizada para imprimir el contenido de un array
?>
