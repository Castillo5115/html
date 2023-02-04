<?php

ini_set('display_errors', 1);
ini_set('html_errors', 1);

require("../AccesoDatos/jugadoresAccesoDatos.php");

class jugadoresReglasNegocio{

	function __construct(){}

    function init($id, $nombre, $partidosJugados, $partidosGanados, $porcentajeVictorias, $torneosJugados, $torneosGanados){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->partidosJugados = $partidosJugados;
        $this->partidosGanados = $partidosGanados;
        $this->porcentajeVictorias = $porcentajeVictorias;
        $this->torneosJugados = $torneosJugados;
        $this->torneosGanados = $torneosGanados;
    }

    function getID(){
        return $this->id;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getPartidosJugados(){
        return $this->partidosJugados;
    }

    function getPartidosGanados(){
        return $this->partidosGanados;
    }

    function getPorcentajeVictorias(){
        return $this->porcentajeVictorias;
    }

    function getTorneosJugados(){
        return $this->torneosJugados;
    }

    function getTorneosGanados(){
        return $this->torneosGanados;
    }

    function obtener(){
        $torneosDAL = new jugadoresAccesoDatos();
        $rs = $torneosDAL->obtener();

		$listaJugadores =  array();

        foreach ($rs as $jugadores){
            $jugadoresReglasNegocio = new jugadoresReglasNegocio();
            $jugadoresReglasNegocio->init($jugadores['id'], $jugadores['nombre'], $jugadores['partidosJugados'], $jugadores['partidosGanados'], $jugadores['porcentajeVictorias'], $jugadores['torneosJugados'], $jugadores['torneosGanados']);
            array_push($listaJugadores,$jugadoresReglasNegocio);
         
        }
        
        return $listaJugadores;
        
    }
}