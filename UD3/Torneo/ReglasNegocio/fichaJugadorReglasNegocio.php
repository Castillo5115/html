<?php
require('../AccesoDatos/fichaJugadorAccesoDatos.php');

class fichaJugadorReglasNegocio{
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

    function obtener($idJugador){
        $torneosDAL = new fichaJugadorAccesoDatos();
        $rs = $torneosDAL->obtener($idJugador);

		$listaJugadores =  array();

        foreach ($rs as $jugadores){
            $jugadoresReglasNegocio = new fichaJugadorReglasNegocio();
            $jugadoresReglasNegocio->init($jugadores['id'], $jugadores['nombre'], $jugadores['partidosJugados'], $jugadores['partidosGanados'], $jugadores['porcentajeVictorias'], $jugadores['torneosJugados'], $jugadores['torneosGanados']);
            array_push($listaJugadores,$jugadoresReglasNegocio);
         
        }
        
        return $listaJugadores;
        
    }
}