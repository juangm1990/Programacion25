<?php

// Ejercicio 1: Clasificar edad en grupo (niño, adolescente, adulto, adulto mayor)

function grupoEdad($edad){
    // De 0 a 12 años → Niño
    if ($edad >= 0 && $edad <= 12) {
        return "Niño";
    }
    // De 13 a 17 años → Adolescente
    elseif ($edad >= 13 && $edad <= 17) {
        return "Adolescente";
    }
    // De 18 a 64 años → Adulto
    elseif ($edad >= 18 && $edad <= 64) {
        return "Adulto";
    }
    // 65 o más → Adulto mayor
    elseif ($edad >= 65) {
        return "Adulto mayor";
    }
    // Para valores negativos
    else {
        return "Edad no válida";
    }
}

// Pruebas con diferentes edades usando var_dump (ver tipo y valor)
var_dump(grupoEdad(8));    // Niño
var_dump(grupoEdad(16));   // Adolescente
var_dump(grupoEdad(30));   // Adulto
var_dump(grupoEdad(70));   // Adulto mayor

// Resultados por pantalla (para el examen)
echo grupoEdad(8) . "<br/>";
echo grupoEdad(16) . "<br/>";
echo grupoEdad(30) . "<br/>";
echo grupoEdad(70) . "<br/>";

?>
