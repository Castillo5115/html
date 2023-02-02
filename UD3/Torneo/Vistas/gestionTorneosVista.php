<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Torneo</title>
</head>
<body>
    <?php
        require('../ReglasNegocio/torneosReglasNegocio.php');
        $_GET['modo'];

        if ($_GET['modo'] == 'crear') {
            echo '<a href="../logout.php">Cerrar sesión</a>';
            echo '<h1>CREAR TORNEO NUEVO</h1>';
            echo '<form action="crearTorneo.php" method="post">';
                echo '<label for="nombreToreno">Nombre: </label>';
                echo '<input type="text" name="nombreTorneo" id="nombreTorneo"><br><br>';
                echo '<label for="fecha">Fecha: </label>';
                echo '<input type="date" name="fecha" id="fecha"><br><br>';
                echo '<input type="submit" value="Crear torneo">';
            echo '</form>';
        }else if ($_GET['modo'] == 'editar'){
            
        }
    ?>
    
</body>
</html>