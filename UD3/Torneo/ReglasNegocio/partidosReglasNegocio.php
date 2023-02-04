<?php
ini_set('display_errors', 1);
ini_set('html_errors', 1);
require('../AccesoDatos/partidosAccesoDatos.php');

class partidosReglasNegocio{
    function __construct(){}

    function init($idTorneo, $idJugador1, $idJugador2, $ganadorPartido){
        
    }

    function getIdTorneo(){
        return $this->idTorneo;
    }

    function getIdJugador1(){
        return $this->idJugador1;
    }

    function getIdJugador2(){
        return $this->idJugador2;
    }

    function getGanadorPartido(){
        return $this->ganadorPartido;
    }

    function obtener(){
        $torneosDAL = new torneosAccesoDatos();
        $rs = $torneosDAL->obtener();

		$listaTorneos =  array();

        foreach ($rs as $partidos){
            $partidosReglaNegocio = new torneosReglasNegocio();
            $partidosReglaNegocio->init($partidos['idTorneo'], $partidos['idJugador1'], $partidos['idJugador2'], $partidos['ganadorPartido']);
            array_push($listaTorneos,$partidosReglaNegocio);
         
        }
        
        return $listaTorneos;
        
    }
}