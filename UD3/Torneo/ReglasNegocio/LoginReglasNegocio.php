<?php
ini_set('display_errors', 1);
ini_set('html_errors', 1);
require("../AccesoDatos/LoginAccesoDatos.php");

class LoginReglasNegocio{

	function __construct(){}

    function verificar($usuario, $clave){
        $usuariosDAL = new LoginAccesoDatos();
        $res = $usuariosDAL->verificar($usuario,$clave);
        return $res;

    }
}
