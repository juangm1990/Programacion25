<?php

$triangulo = [ 1, 2, 12];


if ($triangulo[0] + $triangulo[1] <= $triangulo[2] || 
    $triangulo[0] + $triangulo[2] <= $triangulo[1] || 
    $triangulo[1] + $triangulo[2] <= $triangulo[0]) {

    
    echo "No es un triangulo"; // Comprobar si se puede formar un triángulo
}

elseif ($triangulo[0] == $triangulo[1] && $triangulo[1] == $triangulo[2]) {
    
    
    echo "Equilátero"; // Todos los lados iguales
}

elseif ($triangulo[0] == $triangulo[1] || 
    $triangulo[0] == $triangulo[2] || 
    $triangulo[1] == $triangulo[2]) {
    
    echo "Isósceles"; // Dos lados iguales

    
}

else {

    echo "Escaleno"; // Todos diferentes
}



?>