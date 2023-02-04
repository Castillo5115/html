<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ficha.css">
    <title>Ficha Jugador</title>
</head>
<body>
<a href="../logout.php">Cerrar sesión</a>
    <?php
    require("../ReglasNegocio/fichaJugadorReglasNegocio.php");
    $jugadoresBL = new fichaJugadorReglasNegocio();
    $datosJugadores = $jugadoresBL->obtener($_GET['idJugador']);

    foreach ($datosJugadores as $jugador){              
            echo '<h1>Ficha de '.$jugador->getNombre().'</h1>';
            echo '<p>Partidos Jugados: '.$jugador->getPartidosJugados().'</p>';
            echo '<p>Partidos Ganados: '.$jugador->getPartidosGanados().'</p>';
            echo '<p>Porcentaje Victorias: '.$jugador->getPorcentajeVictorias().'</p>';
            echo '<p>Torneos Jugados: '.$jugador->getTorneosJugados().'</p>';
            echo '<p>Torneos Ganados: '.$jugador->getTorneosGanados().'</p>';
    }

    ?>
    <a href="jugadoresVista.php">Volver</a>
</body>
</html>