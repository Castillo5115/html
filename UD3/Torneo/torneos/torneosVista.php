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
        require("torneosReglasNegocio.php");

        $torneosBL = new torneosReglasNegocio();
        $datosTorneos = $torneosBL->obtener();
        
        foreach ($datosTorneos as $torneo)
        {
            echo $torneo -> getID();
        }
    ?>
</body>
</html>