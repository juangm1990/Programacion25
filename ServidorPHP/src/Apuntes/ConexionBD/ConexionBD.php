<?php

$usuario = "root";
$contraseña = "";
$servidor = "localhost:3309";
$database = "medac";

# Creamos conexión

$conexion = mysqli_connect($servidor, $usuario, $contraseña, $database );

if (!$conexion) {
    die('conexión fallida: ' . mysqli_connect_error());
} else echo "Conexión realizada correctamente" . "<br/>";

# Consulta
$consulta = "SELECT * FROM usuarios";

$datos = mysqli_query($conexion, $consulta);

# Bucle para recorrer resultados
while ($row = mysqli_fetch_array($datos)) {
    //$numero = $row['entero'];
    echo "ID: " . $row['entero'] . "  |  " .  $row['fecha'] . "  |  " . 
    $row['fecha_tiempo'] . "  |  "  . $row['tiempo'] . "<br/>";
}




# Seleccion tabla
mysqli_select_db($conexion, "medac");

# Ejecutamos la sentencia
$datos = mysqli_query($conexion, $consulta);

echo "////////////////////////////////////////////////// <br/>";
echo " Mostrar por pantalla las fechas con 15 días menos <br/>";
echo "////////////////////////////////////////////////// <br/>";


$datos = mysqli_query($conexion, $consulta);

while ($row = mysqli_fetch_array($datos)) {

    # FORMA 1: Pasarlo todo a segundos y luego convertirlo

    


    # FORMA 2: Usamos los índices asociativos del array para restar 15 días
    # $fecha_menos_15 = date("Y-m-d", strtotime($row['fecha'] . " -15 days"));
    # $fecha_tiempo_menos_15 = date("Y-m-d H:i:s", strtotime($row['fecha_tiempo'] . " -15 days"));
    # $tiempo_menos_15 = date("Y-m-d H:i:s", strtotime($row['tiempo'] . " -15 days"));


    # echo "ID: " . $row['entero'] . "  |  " .  $fecha_menos_15 . "  |  " . 
    # $fecha_tiempo_menos_15 . "  |  "  . $tiempo_menos_15 . "<br/>";
}

?>








