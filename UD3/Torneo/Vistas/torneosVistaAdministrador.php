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
    
    <h1 id="titulo">Lista de Torneos (Administrador)</h1>
    <a href="../logout.php">Cerrar sesión</a>

    <?php
        
    ?>
    
    <div class="contenido">
        <a href="gestionTorneosVista.php?modo=crear">Crear Torneo Nuevo</a>
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
            
                $numeroRegistros = 0 ;

                foreach ($datosTorneos as $torneo){
                    echo "<tr>";
                        echo "<td id=\"nombre\" class=\"celda\">". $torneo->getNombre() ."</td>";
                        echo "<td id=\"fecha\" class=\"celda\">". $torneo->getFecha() ."</td>";
                        echo "<td id=\"cantidadJugadores\" class=\"celda\">". $torneo->getCantJugadores() ."</td>";
                        echo "<td id=\"estado\" class=\"celda\">". $torneo->getEstado() ."</td>";
                        echo "<td id=\"campeon\" class=\"celda\">". $torneo->getCampeon() ."</td>";
                        echo "<td><a href=\"gestionTorneosVista.php?modo=editar\">Editar</a></td>";
                        echo "<td><a href=\"borrarTorneo.php?id=\"".$torneo->getID()."\"\">Eliminar</a></td>";
                    echo "</tr>";
                    $numeroRegistros++;
                }
            ?>
        </table>
        <p>Número de registros : <?php echo $numeroRegistros?></p>
        <a href="jugadoresVista.php">Lista de Jugadores Registrados</a> 
    </div> 
</body>
</html>