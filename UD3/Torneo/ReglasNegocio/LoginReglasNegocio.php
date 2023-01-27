<?php
ini_set('display_errors', 1);
ini_set('html_errors', 1);
require("../AccesoDatos/LoginAccesoDatos.php");

class LoginReglasNegocio{

	function __construct(){}

    function init($id, $nombreTorneo, $fecha, $cantidadJugadores, $estado, $campeon){
        $this->id = $id;
        $this->nombreTorneo = $nombreTorneo;
        $this->fecha = $fecha;
        $this->cantidadJugadores = $cantidadJugadores;
        $this->estado = $estado;
        $this->campeon = $campeon;
    }

    function getID(){
        return $this->id;
    }

    function getNombre(){
        return $this->nombreTorneo;
    }

    function getFecha(){
        return $this->fecha;
    }

    function getCantJugadores(){
        return $this->cantidadJugadores;
    }

    function getEstado(){
        return $this->estado;
    }

    function getCampeon(){
        return $this->campeon;
    }

    function obtener(){
        $torneosDAL = new LoginAccesoDatos();
        $rs = $torneosDAL->obtener();

		$listaTorneos =  array();

        foreach ($rs as $torneo){
            $LoginReglasNegocio = new LoginReglasNegocio();
            $LoginReglasNegocio->init($torneo['id'], $torneo['nombreTorneo'], $torneo['fecha'], $torneo['cantidadJugadores'], $torneo['estado'], $torneo['campeon']);
            array_push($listaTorneos,$LoginReglasNegocio);
         
        }
        
        return $listaTorneos;
        
    }
}

