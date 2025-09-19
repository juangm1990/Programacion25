<?php
    /*
    Quítale las tildes a la cadena 
        -> “Álvaro ha estudiado Ingeniería electrónica en la Universidad de Córdoba”
    ¿Cuántos caracteres tiene la cadena de texto?
    Convierte la cadena original a mayúsculas.
    Quita las tildes y los espacios a la cadena de texto 
        -> “74635498 B Rubén González Díaz”
    */

    // PREGUNTA 1. QUITAR LAS TÍLDES

    $buscar = ["Á" , "í" , "ó"]  ;
    $reemplazar = ["A" , "i" , "o"]  ;

    $cadenaTexto1 = "Álvaro ha estudiado Ingeniería electrónica en la Universidad de Córdoba";

    $cadenaTexto1 = str_replace($buscar, $reemplazar, $cadenaTexto1);
    echo "$cadenaTexto1 <br>"; 
    

    // PREGUNTA 2. CONTAR CARACTERES

    $cadenaTexto2 = "Álvaro ha estudiado Ingeniería electrónica en la Universidad de Córdoba";
        // strlen para contar caracteres
    echo strlen ($cadenaTexto2) . "<br>";

 
    // PREGUNTA 3. CONVERTIR A MAYUSCULAS 
    
    $cadenaTexto3 = "Álvaro ha estudiado Ingeniería electrónica en la Universidad de Córdoba";

    echo Mb_strtoupper ($cadenaTexto3) . "<br>";


    // PREGUNTA 4. ELIMINAR ESPACIOS

    $buscar = [" "]  ;
    $reemplazar = [""]  ;
    $cadenaTexto4 = "Álvaro ha estudiado Ingeniería electrónica en la Universidad de Córdoba";

    $cadenaTexto4 = str_replace($buscar, $reemplazar, $cadenaTexto4);
    echo "$cadenaTexto4 <br>"; 


    // PREGUNTA 5. QUITAR LAS TÍLDES Y LOS ESPACIOS
    $buscar = ["Á", "É", "Í", "Ó", "Ú", "á", "é", "í", "ó", "ú", " "]  ;
    $reemplazar = ["A", "E", "I", "O", "U", "a", "e", "i", "o", "u", ""];
    $cadenaTexto5 = "Álvaro ha estudiado Ingeniería electrónica en la Universidad de Córdoba";

    $cadenaTexto5 = str_replace($buscar, $reemplazar, $cadenaTexto5);

    echo "$cadenaTexto5 <br>"

?>