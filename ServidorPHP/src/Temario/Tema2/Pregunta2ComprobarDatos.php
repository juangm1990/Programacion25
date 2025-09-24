<?php
    // Creamos variables con distintos tipos de datos
    $varTexto = "hola";                  // Tipo cadena de texto (string)
    $varEntero = 1234;                   // Tipo entero (integer)
    $varBoolean = true;                  // Tipo booleano (true o false)
    $varFloat = 1.2;                     // Tipo decimal (float)
    $varArray = array("1", "2");         // Tipo array (colección de datos)
    $varNula = null;                     // Tipo null
    $varVacia = "";                      // Cadena vacía

    // 1. Comprobar si las variables son de tipo String
    echo "¿Es varTexto un string? " . (is_string($varTexto) ? 'true' : 'false') . "<br/>";
    echo "¿Es varEntero un string? " . (is_string($varEntero) ? 'true' : 'false') . "<br/>";
    echo "¿Es varBoolean un string? " . (is_string($varBoolean) ? 'true' : 'false') . "<br/>";
    echo "¿Es varFloat un string? " . (is_string($varFloat) ? 'true' : 'false') . "<br/>";
    echo "¿Es varArray un string? " . (is_string($varArray) ? 'true' : 'false') . "<br/>";

    echo "<br/>Convertimos todas las variables a tipo string...<br/><br/>";

    // 2. Convertir las variables a tipo String
    $varTexto = strval($varTexto);                   
    $varEntero = strval($varEntero);                 
    $varBoolean = strval($varBoolean);               
    $varFloat = strval($varFloat);                   
    $varArray = strval(print_r($varArray, true));    

    // 3. Comprobar si es un String
    echo "¿Es varTexto un string ahora? " . (is_string($varTexto) ? 'true' : 'false') . "<br/>";
    echo "¿Es varEntero un string ahora? " . (is_string($varEntero) ? 'true' : 'false') . "<br/>";
    echo "¿Es varBoolean un string ahora? " . (is_string($varBoolean) ? 'true' : 'false') . "<br/>";
    echo "¿Es varFloat un string ahora? " . (is_string($varFloat) ? 'true' : 'false') . "<br/>";
    echo "¿Es varArray un string ahora? " . (is_string($varArray) ? 'true' : 'false') . "<br/>";

    echo "<hr/>";

    ////////////////////////
    // 4. AMPLIACIÓN TEMARIO

    // is_bool()
    echo "¿Es varBoolean un boolean? " . (is_bool($varBoolean) ? 'true' : 'false') . "<br/>";
    echo "¿Es varTexto un boolean? " . (is_bool($varTexto) ? 'true' : 'false') . "<br/>";

    echo "<br/>";

    // is_int()
    echo "¿Es varEntero un int? " . (is_int($varEntero) ? 'true' : 'false') . "<br/>";
    echo "¿Es varFloat un int? " . (is_int($varFloat) ? 'true' : 'false') . "<br/>";

    echo "<br/>";

    // is_numeric()
    echo "¿Es varEntero numérico? " . (is_numeric($varEntero) ? 'true' : 'false') . "<br/>";
    echo "¿Es varFloat numérico? " . (is_numeric($varFloat) ? 'true' : 'false') . "<br/>";
    echo "¿Es '123' numérico? " . (is_numeric("123") ? 'true' : 'false') . "<br/>";

    echo "<br/>";

    // is_null()
    echo "¿Es varNula null? " . (is_null($varNula) ? 'true' : 'false') . "<br/>";
    echo "¿Es varTexto null? " . (is_null($varTexto) ? 'true' : 'false') . "<br/>";

    echo "<br/>";

    // empty()
    echo "¿Está varVacia vacía? " . (empty($varVacia) ? 'true' : 'false') . "<br/>";
    echo "¿Está varNula vacía? " . (empty($varNula) ? 'true' : 'false') . "<br/>";
    echo "¿Está varTexto vacía? " . (empty($varTexto) ? 'true' : 'false') . "<br/>";

    echo "<br/>";

    // is_array()
    echo "¿Es varArray un array? " . (is_array($varArray) ? 'true' : 'false') . "<br/>";
    echo "¿Es varTexto un array? " . (is_array($varTexto) ? 'true' : 'false') . "<br/>";
?>

