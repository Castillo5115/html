<?php


class fichaJugadorAccesoDatos{
	
	function __construct(){}

	function obtener($idJugador){
		$conexion = mysqli_connect('localhost','root','12345');
		if (mysqli_connect_errno())
		{
			echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
 		mysqli_select_db($conexion, 'Torneos');
		$consulta = mysqli_prepare($conexion, "SELECT nombre, partidosJugados, partidosGanados, porcentajeVictorias, torneosJugados, torneosGanados FROM T_Jugadores WHERE id = $idJugador");
        $consulta->execute();
        $result = $consulta->get_result();

		$torneos =  array();

        while ($myrow = $result->fetch_assoc()) {
			array_push($torneos,$myrow);
        }
		return $torneos;
	}

}