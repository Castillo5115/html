<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/torenos.css">
    <title>Lista de Torneos</title>
</head>
<body>
    <h1>Lista de Torneos</h1>
    <?php
        ini_set('display_errors', 1);
        ini_set('html_errors', 1);
        require("torneosReglasNegocio.php");

        $torneosBL = new torneosReglasNegocio();
        $datosTorneos = $torneosBL->obtener();
        
        foreach ($datosTorneos as $torneo)
        {
            echo $torneo -> getID(). ' / ';
            echo $torneo -> getNombre(). ' / ';
            echo $torneo -> getFecha(). ' / ';
            echo $torneo -> getCantJugadores(). ' / ';
            echo $torneo -> getEstado(). ' / ';
            echo $torneo -> getCampeon(). ' ';
            if ($_POST == 'administrador') {
                echo '<a href=\"editar.html\">editar</a>'.' <a href=\"eliminar.html\">eliminar</a>'.'<br>';   
            }else {
                echo '<br>';
            }
        }
    ?>
    
</body>
</html>