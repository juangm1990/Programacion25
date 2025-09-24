<?php

    /*
    Crea un array de 20 elementos de tipo real, en el que cada elemento representa la venta 
    del día de un comercio. Calcular el promedio de venta por día y mostrarlo por pantalla. 
    */

    // PREGUNTA 1. CREAR ARRAY, CALCULAR EL PROMEDIO Y MOSTRARLO POR PANTALLA (FUNCIÓN ARRAY_SUM)

    $array = [2.2, 3.3, 5.7, 1.1, 1.7, 9.9, 8.1, 6.3, 9.8, 4.7, 
              7.8, 9.3, 2.6, 2.2, 7.7, 6.9, 3.1, 7.3, 3.9, 3.6, ] ;

    
    // Calcular la suma total y el promedio
    $precioVenta = array_sum($array);
    $promedio = $precioVenta / count($array);

    // Mostrar resultados
    echo "Promedio de ventas en el día: " . $promedio . "<br>";

    
    // PREGUNTA 2. CREAR ARRAY, CALCULAR EL PROMEDIO Y MOSTRARLO POR PANTALLA (FOREACH)

    $array = [2.2, 3.3, 5.7, 1.1, 1.7, 9.9, 8.1, 6.3, 9.8, 4.7, 
              7.8, 9.3, 2.6, 2.2, 7.7, 6.9, 3.1, 7.3, 3.9, 3.6, ] ;

    // Indicar la variable para la suma del array
    $precioVentaDia = 0;

    // Recorrer el array con foreach y sumamos las ventas
    foreach ($array as $datosArrayIndividuales) {

    $precioVentaDia = $precioVentaDia + $datosArrayIndividuales;

    }

    // Calcular el promedio
    $promedio = $precioVentaDia / count($array);

    // Mostrar resultado
    echo "Promedio de ventas por día: " . $promedio . "<br>";


?>
