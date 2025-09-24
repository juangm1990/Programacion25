<?php
// ==========================================
// REPASO PHP - CADENAS Y ARRAYS
// ==========================================

// 1. Contar caracteres con strlen()
$texto = "Desarrollo Web";
echo "El texto es: " . $texto;
echo "Cantidad de caracteres: " . strlen($texto);

// 2. Pasar a mayúsculas con strtoupper()
$frase = "hola mundo en php";
echo "Frase original: " . $frase;
echo "Frase en mayúsculas: " . strtoupper($frase);

// 3. Reemplazar un texto con str_replace()
$mensaje = "Me gusta Java";
echo "Mensaje original: " . $mensaje;
$mensajeNuevo = str_replace("Java", "PHP", $mensaje);
echo "Mensaje cambiado: " . $mensajeNuevo;

// 4. Caracteres especiales (comillas y dólar)
echo "Esto es un ejemplo de comillas dobles: \"Hola\"";
echo "Esto es un ejemplo de símbolo dólar: \$100";

// 5. Recorrer un array con foreach
$frutas = array("Manzana", "Pera", "Plátano", "Naranja");
echo "Lista de frutas:";
foreach ($frutas as $fruta) {
    echo $fruta;
}

// 6. Arrays asociativos
$persona = array(
    "nombre" => "Juan",
    "edad" => 25,
    "ciudad" => "Córdoba"
);

echo "Datos de la persona:";
foreach ($persona as $clave => $valor) {
    echo $clave . ": " . $valor;
}
?>
