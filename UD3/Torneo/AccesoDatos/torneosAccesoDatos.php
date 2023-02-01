<?php
ini_set('display_errors', 1);
ini_set('html_errors', 1);
class torneosAccesoDatos{
	
	function __construct(){}

	function obtener(){
		$conexion = mysqli_connect('localhost','root','12345');
		if (mysqli_connect_errno())
		{
			echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
 		mysqli_select_db($conexion, 'Torneos');
		$consulta = mysqli_prepare($conexion, "SELECT * FROM T_Torneos ");
        $consulta->execute();
        $result = $consulta->get_result();

		$torneos =  array();

        while ($myrow = $result->fetch_assoc()) {
			array_push($torneos,$myrow);
        }
		return $torneos;
	}

	function insertar($nombre, $fecha){

		$conexion = mysqli_connect('localhost','root','12345');
		if (mysqli_connect_errno())
		{
			echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
 		mysqli_select_db($conexion, 'Torneos');

		if ($fecha < 2023) {
			$insert = mysqli_prepare($conexion, "INSERT INTO T_Torneos (nombreTorneo, fecha, cantidadJugadores, estado) value ($nombre, $fecha, 8, 'Finalizado')");
        	$insert->execute();
		}else{
			$insert = mysqli_prepare($conexion, "INSERT INTO T_Torneos (nombreTorneo, fecha, cantidadJugadores, estado) value ($nombre, $fecha, 8, 'En Curso')");
        	$insert->execute();
		}
	}
}