<?php

ini_set('display_errors', 1);
ini_set('html_errors', 1);

$nombreTorneo = $_POST['nombreTorneo'];
$fecha = $_POST['fecha'];


$conexion = mysqli_connect('localhost','root','12345');
if (mysqli_connect_errno())
{
    echo "Error al conectar a MySQL: ". mysqli_connect_error();
}
mysqli_select_db($conexion, 'Torneos');
$consulta = mysqli_prepare($conexion, "INSERT into T_Torneos (nombreTorneo, fecha, cantidadJugadores) value ('$nombreTorneo', '$fecha', 8);");

$consulta->execute();

header("Location: torneosVistaAdmin.php");