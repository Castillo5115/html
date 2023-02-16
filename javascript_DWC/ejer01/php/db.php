<?php
ini_set('display_errors', 1);
ini_set('html_errors', 1);

$letra = $_REQUEST["dato"];

$conexion = mysqli_connect('localhost', 'root', '12345');
mysqli_select_db($conexion, 'world');
$consulta = "SELECT  Name FROM city where (Name REGEXP '^$letra')";
$resultado = mysqli_query($conexion, $consulta);


if (!$resultado) {
    $mensaje = 'Consulta invalida: ' . mysqli_error($conexion) . "\n";
    $mensaje .= 'Consulta realizada: ' . $consulta;
    die($mensaje);
}else{
    while ($registro = mysqli_fetch_assoc($resultado)) {
        echo $registro['Name']. ", ";
    }
}