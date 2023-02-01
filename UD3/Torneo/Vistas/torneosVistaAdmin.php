<?php
    // session_start();
    // $_SESSION = array(); // Destruir todas las variables de sesión.
    // if (ini_get("session.use_cookies")) {
    //     $params = session_get_cookie_params();
    //     setcookie(session_name(), '', time() - 42000,
    //         $params["path"], $params["domain"],
    //         $params["secure"], $params["httponly"]
    //     );
    // }
    // session_destroy();
    
    // header("Location: LoginVista.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/torneos.css">
    <title>Lista de Torneos</title>
</head>
<body>
    
    <h1 id="titulo">Lista de Torneos (Administrador)</h1>
    <a href="../logout.php">Cerrar sesión</a>
    <div class="contenido">
        <a href="gestionTorneosVista.php">Crear Torneo Nuevo</a>
        <table id="tablaTorneos">
            <tr>
                <th class="celda">ID</th>
                <th class="celda">Nombre del Torneo</th>
                <th class="celda">Fecha</th>
                <th class="celda">Cantidad de Jugadores</th>
                <th class="celda">Estado del Torneo</th>
                <th class="celda">Campeon</th>
            </tr>
            <?php
                require("../ReglasNegocio/torneosReglasNegocio.php");

                $torneosBL = new torneosReglasNegocio();
                $datosTorneos = $torneosBL->obtener();
            
                foreach ($datosTorneos as $torneo){
                    echo "<tr>";
                        echo "<td class=\"celda\">". $torneo->getID() ."</td>";
                        echo "<td class=\"celda\">". $torneo->getNombre() ."</td>";
                        echo "<td class=\"celda\">". $torneo->getFecha() ."</td>";
                        echo "<td class=\"celda\">". $torneo->getCantJugadores() ."</td>";
                        echo "<td class=\"celda\">". $torneo->getEstado() ."</td>";
                        echo "<td class=\"celda\">". $torneo->getCampeon() ."</td>";
                        echo "<td><a href=\"torneosVistaAdmin.php\">Editar</a></td>";
                        echo "<td><a href=\"torneosVistaAdmin.php\">Eliminar</a></td>";
                    echo "</tr>";
                }
            ?>
            
        </table>
    </div> 
</body>
</html>