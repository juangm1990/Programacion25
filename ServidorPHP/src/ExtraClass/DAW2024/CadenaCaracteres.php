<?php
// Pedir la cadena al usuario
echo "Introduzca una cadena: ";
$cadena = trim(fgets(STDIN));

// Pedir el carácter al usuario
echo "Introduzca un carácter: ";
$caracter = trim(fgets(STDIN));

// Inicializar el contador
$contador = 0;

// Recorrer la cadena
for ($i = 0; $i < strlen($cadena); $i = $i + 1) {
    if ($cadena[$i] == $caracter) {
        $contador = $contador + 1;
    }
}

// Mostrar el resultado
echo "El carácter '" . $caracter . "' aparece " . $contador . " veces.\n";
?>
