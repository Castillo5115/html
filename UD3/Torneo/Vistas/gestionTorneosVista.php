<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Torneo</title>
</head>
<body>
    <h1>CREAR TORNEO NUEVO</h1>
    <form action="../ReglasNegocio/torneosReglasNegocio.php" method="post">
        <label for="nombreToreno">Nombre: </label>
        <input type='text' name='nombreTorneo' id='nombreTorneo'><br><br>
        <label for="fecha">Fecha: </label>
        <input type='text' name='fecha' id='fecha' placeholder='yy-mm-dd'><br><br>
        <input type="submit" value="Crear torneo">
    </form>
</body>
</html>