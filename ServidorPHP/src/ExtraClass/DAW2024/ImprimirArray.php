<?php
// Array original con los números
$numerosOriginales = array(7, 12, 27, 37, 82, 782, 56, 707);

// Aquí guardaremos los que tienen un 7
$numerosConSiete = array();

// Recorremos cada número del array original
foreach ($numerosOriginales as $numeroOriginal) {
    // Hacemos una copia del número para ir quitando dígitos
    $copiaNumero = $numeroOriginal;

    // Mientras la copia tenga dígitos
    while ($copiaNumero > 0) {
        // Sacamos el último dígito con % 10
        $ultimoDigito = $copiaNumero % 10;

        // Si el último dígito es un 7
        if ($ultimoDigito == 7) {
            // Guardamos el número original en el nuevo array
            $numerosConSiete[] = $numeroOriginal;
            break; // Paramos porque ya no hace falta seguir
        }

        // Quitamos el último dígito dividiendo entre 10
        $copiaNumero = (int)($copiaNumero / 10);
    }
}

// Mostrar el resultado final
echo "Los números que contienen el 7 son: ";
foreach ($numerosConSiete as $numeroConSiete) {
    echo $numeroConSiete . " ";
}
echo "<br>";

?>
