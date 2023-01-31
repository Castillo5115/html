
<?php

require("./AccesoDatos/LoginAccesoDatos.php");

function test_alta_usuario()
{
    $u = new LoginAccesoDatos();
    return $u->insertar('usuario1','jugador','12345');
}

function test_verificar_usuario_encontrado()
{
    $perfil_esperado = 'jugador';
    $u = new LoginAccesoDatos();
    $perfil = $u->verificar('usuario1','12345');
    return $perfil === $perfil_esperado;
}


var_dump(test_alta_usuario());
var_dump(test_verificar_usuario_encontrado());