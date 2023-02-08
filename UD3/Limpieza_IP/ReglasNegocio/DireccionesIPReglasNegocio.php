<?php
ini_set('display_errors', 1);
ini_set('html_errors', 1);

require('../AccesoDatos/DireccionesIPAccesoDatos.php');

class DireccionesIPReglasNegocio{
    
    function __construct(){}

    function init($id, $ip){
        $this->id = $id;
        $this->ip = $ip;
    }

    function obtener(){
        $x = new DireccionesIPAccesoDatos;
        $arrayIP = $x->obtener();

        $arrayComprobarIP = array();

        foreach($arrayIP as $i){
            $n = new DireccionesIPReglasNegocio();
            $n->init($i['id'], $i['ip']);
            array_push($arrayComprobarIP, $n);
        }

    }

}