<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Torneo</title>
</head>
<body>
    <a href="../logout.php">Cerrar sesión</a>
    <h1>CREAR TORNEO NUEVO</h1>
    <form action="crearTorneo.php" method="post">
        <label for="nombreToreno">Nombre: </label>
        <input type='text' name='nombreTorneo' id='nombreTorneo'><br><br>
        <label for="fecha">Fecha: </label>
        <input type='date' name='fecha' id='fecha'><br><br>
        <input type="submit" value="Crear torneo">
    </form>
</body>
</html>