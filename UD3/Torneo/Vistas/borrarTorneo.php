<?php

ini_set('display_errors', 1);
ini_set('html_errors', 1);

$id_torneo = $_GET['id'];
echo $id_torneo;


$conexion = mysqli_connect('localhost','root','12345');
if (mysqli_connect_errno())
{
    echo "Error al conectar a MySQL: ". mysqli_connect_error();
}
mysqli_select_db($conexion, 'Torneos');
$consulta = mysqli_prepare($conexion, "DELETE FROM T_Torneos WHERE id = $id_torneo");
$consulta->execute();

header("Location: torneosVistaAdministrador.php");