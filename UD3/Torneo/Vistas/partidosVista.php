<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Jugadores</title>
</head>
<body>
    <?php
        require('../ReglasNegocio/partidosReglasNegocio.php');
        $torneosBL = new torneosReglasNegocio();
            $datosTorneos = $torneosBL->obtener();
        
            $numeroRegistros = 0 ;

            foreach ($datosTorneos as $torneo){
                echo $torneo->getIdTorneo();
                echo $torneo->getIdJugador1();
                echo $torneo->getIdJugador2();
                echo $torneo->getGanadorPartido();
                $numeroRegistros++;
            }
    ?>
</body>
</html>