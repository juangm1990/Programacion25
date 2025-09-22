Comenta el significado de usar comillas simples o comillas dobles a la hora de que 
PHP interprete diferentes secuencias de escape utilizando los diferentes casos.

Comillas simples ' ' → Lo muestra todo tal cual.

    ////////
    Ejemplo
    ////////

    $nombre = "Juan";
    echo 'Hola $nombre';

    // Resultado: Hola Juan
    

Comillas dobles " " → Para variables y comandos especiales.

    \n → salto de línea
    \t → tabulación
    \" → comilla doble
    \\ → barra invertida

    ////////
    Ejemplo
    ////////

    $fruta1 = "Manzana";
    $fruta2 = "Pera";

    echo "Lista de frutas:\n$fruta1\n$fruta2";

    // Resultado:
    // Lista de frutas:
    // Manzana
    // Pera

