<?php
ini_set('display_errors', 1);
ini_set('html_errors', 1);
require("../AccesoDatos/LoginAccesoDatos.php");

class LoginReglasNegocio{

	function __construct(){}

    // function init($id, $nombre, $user, $passwd, $tipoUsuario){
    //     $this->id = $id;
    //     $this->nombre = $nombre;
    //     $this->user = $user;
    //     $this->passwd = $passwd;
    //     $this->tipoUsuario = $tipoUsuario;
    // }

    // function getID(){
    //     return $this->id;
    // }

    // function getNombre(){
    //     return $this->nombre;
    // }

    // function getUser(){
    //     return $this->user;
    // }

    // function getPasswd(){
    //     return $this->passwd;
    // }

    // function getTipoUsuario(){
    //     return $this->tipoUsuario;
    // }

    // function obtener(){
    //     $torneosDAL = new LoginAccesoDatos();
    //     $rs = $torneosDAL->obtener();

	// 	$listaTorneos =  array();

    //     foreach ($rs as $usuarios){
    //         $LoginReglasNegocio = new LoginReglasNegocio();
    //         $LoginReglasNegocio->init($usuarios['id'], $usuarios['nombre'], $usuarios['user'], $usuarios['passwd'], $usuarios['tipoUsuario']);
    //         array_push($listaTorneos,$LoginReglasNegocio);
         
    //     }
        
    //     return $listaTorneos;
        
    // }

    function verificar($usuario, $clave){
        $usuariosDAL = new LoginAccesoDatos();
        $res = $usuariosDAL->verificar($usuario,$clave);
        return $res;

    }
}
