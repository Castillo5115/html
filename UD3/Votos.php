<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votos - Aficine</title>
</head>
<body>
    <?php
        class Votos{
            function subirDatos(){

                $titulo = $_POST['titulo'];
                $conexion = mysqli_connect('localhost', 'root', '12345');
                mysqli_select_db($conexion, 'aficine');
                $consulta = "UPDATE pelicula SET votos = votos + 1 WHERE titulo='$titulo'";
                $resultado = mysqli_query($conexion, $consulta);
                if (!$resultado) {
                    $mensaje = 'Consulta invalida: ' . mysqli_error($conexion) . "\n";
                    $mensaje .= 'Consulta realizada: ' . $consulta;
                    die($mensaje);
                }else{
                    
                }
            }
        }
        $v = new Votos;
        $v -> subirDatos();
        

    ?>
        
        <h1>Se guerdado tu voto</h1>

</body>
</html>