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

    <?php
        session_start(); // reanudamos la sesión
        if (!isset($_SESSION['usuario']))
        {
            header("Location: login.php");
        }
    ?>

    <a href="../logout.php">Cerrar sesión</a>
    <h1>Lista de Torneos</h1>
    <table id="tablaTorneos">
        <tr>
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
        
            $numeroRegistros;

            foreach ($datosTorneos as $torneo){
                echo "<tr>";
                    echo "<td class=\"celda\">". $torneo->getNombre() ."</td>";
                    echo "<td class=\"celda\">". $torneo->getFecha() ."</td>";
                    echo "<td class=\"celda\">". $torneo->getCantJugadores() ."</td>";
                    echo "<td class=\"celda\">". $torneo->getEstado() ."</td>";
                    echo "<td class=\"celda\">". $torneo->getCampeon() ."</td>";
                echo "</tr>";
                $numeroRegistros++;
            }
        ?>
    </table>
    <p>Número de registros : <?php echo $numeroRegistros?></p> 
    <a href="jugadoresVista.php">Lista de Jugadores Registrados</a>   
</body>
</html>