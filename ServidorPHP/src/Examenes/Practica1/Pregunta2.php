<?php
$numeros = [8, 2, 3, 4, 9];
$media = 0;
$calcular = 0;
$contador = 0;


for ($i = 1; $i < count($numeros); $i++) {
    if ($i % 2 != 0 )  {
        $calcular = $calcular + $numeros[$i];
        $contador++;
    }
}
$media = $calcular / $contador;
echo $media;
?>