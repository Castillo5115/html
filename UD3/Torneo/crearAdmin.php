
<?php

require("./AccesoDatos/LoginAccesoDatos.php");

function test_alta_usuario()
{
    $u = new LoginAccesoDatos();
    return $u->insertar('alex','administrador','12345');
}

function test_verificar_usuario_encontrado()
{
    $perfil_esperado = 'administrador';
    $u = new LoginAccesoDatos();
    $perfil = $u->verificar('alex','12345');
    return $perfil === $perfil_esperado;
}


var_dump(test_alta_usuario());
var_dump(test_verificar_usuario_encontrado());