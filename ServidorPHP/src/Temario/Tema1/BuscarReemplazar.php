<?php

$buscar = ["Á" , "í" , "ó"]  ;
$reemplazar = ["A" , "i" , "o"]  ;

$cadena = "Álvaro ha estudiado Ingeniería electrónica en la Universidad de Córdoba";

$cadena = str_replace($buscar, $reemplazar, $cadena);

echo $cadena;



?>


