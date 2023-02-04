<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/jugadores.css">
    <title>Lista de Jugadores</title>
</head>
<body>
    <h1>Jugadores Registrados</h1>
    <a href="../logout.php">Cerrar sesión</a>
    <table id="listaJugadores">
            <tr> 
                <th class="celda">Nombre Jugador</th>
                <th class="celda">Partidos Jugados</th>
                <th class="celda">Partidos Ganados</th>
                <th class="celda">Porcentaje de Victorias</th>
                <th class="celda">Torneos Jugados</th>
                <th class="celda">Torneos Ganados</th>
            </tr>
            <?php
                require("../ReglasNegocio/jugadoresReglasNegocio.php");

                    $jugadoresBL = new jugadoresReglasNegocio();
                    $datosJugadores = $jugadoresBL->obtener();

                    foreach ($datosJugadores as $jugador){
                        echo '<tr>';                
                            echo '<td class="celda">'.$jugador->getNombre().'</td>';
                            echo '<td class="celda">'.$jugador->getPartidosJugados().'</td>';
                            echo '<td class="celda">'.$jugador->getPartidosGanados().'</td>';
                            echo '<td class="celda">'.$jugador->getPorcentajeVictorias().'</td>';
                            echo '<td class="celda">'.$jugador->getTorneosJugados().'</td>';
                            echo '<td class="celda">'.$jugador->getTorneosGanados().'</td>';
                            echo "<td class=\"celda\"><a href=\"fichaJugadorVista.php?idJugador=".$jugador->getID()."\">Ver Ficha</a></td>";
                        echo '</tr>';
                    }
            ?>
    </table>
</body>
</html>