<?php

$lado1 = 1;
$lado2 = 2;
$lado3 = 12;


if ($lado1 + $lado2 <= $lado3 || 
    $lado1 + $lado3 <= $lado2 || 
    $lado2 + $lado3 <= $lado1) {
    
    echo "No es un triángulo"; // Comprobar si se puede formar un triángulo
}

elseif ($lado1 == $lado2 && $lado2 == $lado3) {
    echo "Equilátero"; // Todos los lados iguales
}

elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
    echo "Isósceles"; // Dos lados iguales
}

else {
    echo "Escaleno"; // Todos diferentes
}

?>
