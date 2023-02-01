<?php
ini_set('display_errors', 1);
ini_set('html_errors', 1);
class LoginAccesoDatos{
	
	function __construct(){}

	function insertar($usuario,$perfil,$clave)
	{
		$conexion = mysqli_connect('localhost','root','12345');
		if (mysqli_connect_errno())
		{
				echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
 		
        mysqli_select_db($conexion, 'Torneos');
		$consulta = mysqli_prepare($conexion, "insert into T_Usuarios(usuario,passwd,tipoUsuario) values (?,?,?);");
        $hash = password_hash($clave, PASSWORD_DEFAULT);
        $consulta->bind_param("sss", $usuario,$hash,$perfil);
        $res = $consulta->execute();
        
		return $res;
	}

	function verificar($usuario, $clave){
		$conexion = mysqli_connect('localhost','root','12345');
		if (mysqli_connect_errno())
		{
				echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
        mysqli_select_db($conexion, 'Torneos');
        $consulta = mysqli_prepare($conexion, "select usuario,passwd,tipoUsuario from T_Usuarios where usuario = ?;");
        $sanitized_usuario = mysqli_real_escape_string($conexion, $usuario);       
        $consulta->bind_param("s", $sanitized_usuario);
        $consulta->execute();
        $res = $consulta->get_result();

		// var_dump($res);

        if ($res->num_rows==0)
        {
            return 'NOT_FOUND';
        }

        if ($res->num_rows>1) //El nombre de usuario debería ser único.
        {
            return 'NOT_FOUND';
        }

        $myrow = $res->fetch_assoc();
        $x = $myrow['passwd'];
        if (password_verify($clave, $x))
        {
            return $myrow['tipoUsuario'];
        } 
        else 
        { 
            return 'Usuario Incorrecto';
        }
	}
}


