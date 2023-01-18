<?php

require("LoginAccesoDatos.php");

class TorneosReglasNegocio{
    private $_id;

	function __construct(){}

    function init($id){
        $this->_id = $id;
    }

    function getID(){
        return $this->_id;
    }

    function obtener(){
        $torneosDAL = new TorneosAccesoDatos();
        $rs = $torneosDAL->obtener();

		$listaTorneos =  array();

        foreach ($rs as $torneo){
            $oTorneosReglasNegocio = new TorneosReglasNegocio();
            $oTorneosReglasNegocio->init($torneo['id']);
            array_push($listaTorneos,$oTorneosReglasNegocio);
         
        }
        
        return $listaTorneos;
        
    }
}

